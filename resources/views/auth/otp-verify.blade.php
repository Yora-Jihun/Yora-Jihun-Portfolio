@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md px-6">
        <div class="text-center mb-8">
            <a href="{{ url('/') }}" class="text-2xl font-semibold text-black">YJ<span class="text-emerald-500">.</span></a>
            <p class="text-sm text-[#8E8E93] mt-2">Enter your OTP</p>
        </div>

        @if($errors->any())
            <div class="bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded mb-6">
                <ul class="list-disc list-inside text-sm">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

         @if(session('status'))
             <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 px-4 py-3 rounded mb-6 text-sm">
                 {{ session('status') }}
             </div>
         @endif

         @if(session('verify_failed'))
             <div class="bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded mb-6 text-sm">
                 {{ session('verify_failed') }}
             </div>
         @endif

         @if(session('rate_limit_error'))
             <div class="bg-orange-50 border border-orange-200 text-orange-800 px-4 py-3 rounded mb-6 text-sm">
                 {{ session('rate_limit_error') }}
             </div>
         @endif

        <div id="rate-limit-alert" class="hidden bg-orange-50 border border-orange-200 text-orange-800 px-4 py-3 rounded mb-4 text-sm">
            <span>Too many verification attempts. Please try again later</span>
        </div>

        <div id="countdown-bar" class="hidden mb-4">
            <div class="flex items-center justify-between text-xs text-gray-500 mb-1">
                <span id="countdown-label">OTP expires in</span>
                <span id="countdown-timer" class="font-mono font-semibold text-[#16A34A]">0:00</span>
            </div>
            <div class="w-full h-1.5 bg-gray-100 rounded-full overflow-hidden">
                <div id="countdown-progress" class="h-full bg-[#16A34A] rounded-full transition-all duration-1000" style="width: 100%"></div>
            </div>
        </div>

        <form method="POST" action="{{ route('admin.otp.verify') }}" class="space-y-6" id="otp-form">
            @csrf
            <input type="hidden" name="email" value="{{ $email ?? old('email') }}">

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">One-Time Password</label>
                <div class="flex gap-2 justify-center" id="otp-inputs">
                    <input type="text" inputmode="numeric" maxlength="1" class="otp-digit w-11 h-12 text-center text-xl font-semibold rounded-lg border border-[#E5E7EB] bg-white focus:outline-none focus:border-[#16A34A] focus:ring-1 focus:ring-[#16A34A] transition-all" data-index="0" autocomplete="one-time-code">
                    <input type="text" inputmode="numeric" maxlength="1" class="otp-digit w-11 h-12 text-center text-xl font-semibold rounded-lg border border-[#E5E7EB] bg-white focus:outline-none focus:border-[#16A34A] focus:ring-1 focus:ring-[#16A34A] transition-all" data-index="1">
                    <input type="text" inputmode="numeric" maxlength="1" class="otp-digit w-11 h-12 text-center text-xl font-semibold rounded-lg border border-[#E5E7EB] bg-white focus:outline-none focus:border-[#16A34A] focus:ring-1 focus:ring-[#16A34A] transition-all" data-index="2">
                    <input type="text" inputmode="numeric" maxlength="1" class="otp-digit w-11 h-12 text-center text-xl font-semibold rounded-lg border border-[#E5E7EB] bg-white focus:outline-none focus:border-[#16A34A] focus:ring-1 focus:ring-[#16A34A] transition-all" data-index="3">
                    <input type="text" inputmode="numeric" maxlength="1" class="otp-digit w-11 h-12 text-center text-xl font-semibold rounded-lg border border-[#E5E7EB] bg-white focus:outline-none focus:border-[#16A34A] focus:ring-1 focus:ring-[#16A34A] transition-all" data-index="4">
                    <input type="text" inputmode="numeric" maxlength="1" class="otp-digit w-11 h-12 text-center text-xl font-semibold rounded-lg border border-[#E5E7EB] bg-white focus:outline-none focus:border-[#16A34A] focus:ring-1 focus:ring-[#16A34A] transition-all" data-index="5">
                </div>
                <input type="hidden" name="otp" id="otp-hidden">
            </div>

            <button type="submit" class="w-full bg-black text-white text-sm font-semibold py-3 px-6 rounded hover:bg-gray-800 transition-colors" id="verify-otp-btn">
                <span id="verify-otp-text">Verify OTP</span>
                <span id="verify-otp-loading" class="hidden">Verifying...</span>
            </button>

            <button type="button" id="resend-link" class="w-full mt-3 text-sm text-orange-600 hover:text-orange-800 font-medium transition-colors text-center" onclick="resendOtp()">
                <span id="resend-otp-text">Resend OTP</span>
                <span id="resend-otp-loading" class="hidden">Resending...</span>
            </button>
        </form>

        <div id="resend-success" class="hidden bg-emerald-50 border border-emerald-200 text-emerald-800 px-4 py-3 rounded mb-4 text-sm">
            <span>OTP resent successfully. Please check your email.</span>
        </div>

         <div id="resend-error" class="hidden bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded mb-4 text-sm">
             <span>Failed to resend OTP. Please try again.</span>
         </div>

        <div id="rate-limit-bar" class="hidden mb-4">
            <div class="flex items-center justify-between text-xs text-gray-500 mb-1">
                <span>Cooldown remaining</span>
                <span id="rate-limit-timer" class="font-mono font-semibold text-orange-500">0:00</span>
            </div>
            <div class="w-full h-1.5 bg-gray-100 rounded-full overflow-hidden">
                <div id="rate-limit-progress" class="h-full bg-orange-500 rounded-full transition-all duration-1000" style="width: 100%"></div>
            </div>
        </div>

        <script>
            // Initialize all DOM elements and event listeners
            function initializeElements() {
                const elements = {
                    countdownBar: document.getElementById('countdown-bar'),
                    countdownTimer: document.getElementById('countdown-timer'),
                    countdownProgress: document.getElementById('countdown-progress'),
                    countdownLabel: document.getElementById('countdown-label'),
                    rateLimitBar: document.getElementById('rate-limit-bar'),
                    rateLimitTimer: document.getElementById('rate-limit-timer'),
                    rateLimitProgress: document.getElementById('rate-limit-progress'),
                    rateLimitAlert: document.getElementById('rate-limit-alert'),
                    otpInputs: document.querySelectorAll('.otp-digit'),
                    hiddenInput: document.getElementById('otp-hidden'),
                    resendLink: document.getElementById('resend-link')
                };

                return elements;
            }

            const elements = initializeElements();
            let activeInterval = null;
            let resendCooldownActive = false;
            let resendCountdownInterval = null;

            // Get server-side data
            const otpExpiry = {{ $otpExpiry ? $otpExpiry : 'null' }};
            const otpTotalMs = {{ $otpTotalMs }};
            const rateLimitExpiry = {{ $rateLimitExpiry ? $rateLimitExpiry : 'null' }};
            const rateLimitTotalMs = {{ $rateLimitTotalMs ? $rateLimitTotalMs : 'null' }};
            const resendCooldownUntil = {{ $resendCooldownUntil ? $resendCooldownUntil : 'null' }};
            const verifyAttempts = {{ $verifyAttempts ?? 0 }};
            const maxVerifyAttempts = {{ $maxVerifyAttempts ?? 5 }};
            const resendCooldown = {{ $resendCooldown ?? 60 }};
            let resendCooldownTime = resendCooldown;

            function getResendCooldownEnd() {
                let end = null;

                if (resendCooldownUntil) {
                    end = resendCooldownUntil * 1000;
                }

                const stored = localStorage.getItem('resend-cooldown-until');
                if (!end && stored) {
                    end = parseInt(stored, 10);
                }

                return end;
            }

            function setResendCooldownEnd(endTimestampMs) {
                localStorage.setItem('resend-cooldown-until', endTimestampMs);
            }

            function clearResendCooldown() {
                localStorage.removeItem('resend-cooldown-until');
            }

            function initializeResendCooldown() {
                const end = getResendCooldownEnd();
                if (!end) {
                    return;
                }

                const remaining = Math.max(0, end - Date.now());
                if (remaining <= 0) {
                    clearResendCooldown();
                    return;
                }

                resendCooldownActive = true;
                resendCooldownTime = Math.ceil(remaining / 1000);
                updateResendButtonText();

                if (resendCountdownInterval) clearInterval(resendCountdownInterval);
                resendCountdownInterval = setInterval(function() {
                    resendCooldownTime--;
                    updateResendButtonText();
                    if (resendCooldownTime <= 0) {
                        clearInterval(resendCountdownInterval);
                        resendCooldownActive = false;
                        clearResendCooldown();
                        updateResendButtonText();
                    }
                }, 1000);
            }

             // Initialize everything when page loads
             function initializeAll() {
                 initializeCountdowns();
                 setupEventListeners();
                 initializeResendCooldown();

                 if (verifyAttempts >= maxVerifyAttempts) {
                     const verifyFailedEl = document.getElementById('verify-failed');
                     if (verifyFailedEl) {
                         verifyFailedEl.classList.remove('hidden');
                     }
                     if (elements.resendLink) {
                         elements.resendLink.disabled = false;
                     }
                 }
             }

            // Setup event listeners
            function setupEventListeners() {
                if (elements.otpInputs) {
                    elements.otpInputs.forEach((input, index) => {
                        input.addEventListener('input', function(e) {
                            let value = e.target.value.replace(/[^0-9]/g, '');
                            e.target.value = value.slice(-1);
                            if (value && index < elements.otpInputs.length - 1) {
                                elements.otpInputs[index + 1].focus();
                            }
                            updateHiddenOtp();
                        });

                        input.addEventListener('keydown', function(e) {
                            if (e.key === 'Backspace' && !e.target.value && index > 0) {
                                elements.otpInputs[index - 1].focus();
                                e.target.value = '';
                                updateHiddenOtp();
                            }
                        });

                        input.addEventListener('paste', function(e) {
                            e.preventDefault();
                            let paste = (e.clipboardData || window.clipboardData).getData('text').replace(/[^0-9]/g, '').slice(0, 6);
                            for (let i = 0; i < elements.otpInputs.length; i++) {
                                elements.otpInputs[i].value = paste[i] || '';
                            }
                            if (paste.length < elements.otpInputs.length) {
                                elements.otpInputs[paste.length].focus();
                            } else {
                                elements.otpInputs[elements.otpInputs.length - 1].focus();
                            }
                            updateHiddenOtp();
                        });
                    });
                }

                if (elements.resendLink) {
                    elements.resendLink.addEventListener('click', resendOtp);
                }
            }

             // Initialize countdowns
             function initializeCountdowns() {
                 const attemptsExceeded = verifyAttempts >= maxVerifyAttempts;

                 if (attemptsExceeded) {
                     if (elements.countdownBar) {
                         elements.countdownBar.classList.add('hidden');
                     }
                     if (elements.rateLimitBar) {
                         elements.rateLimitBar.classList.add('hidden');
                     }
                     if (elements.rateLimitAlert) {
                         elements.rateLimitAlert.classList.add('hidden');
                     }
                     if (activeInterval) {
                         clearInterval(activeInterval);
                         activeInterval = null;
                     }
                 }

                 if (!attemptsExceeded && otpExpiry && otpTotalMs && elements.countdownBar) {
                     let otpExpiryTime = otpExpiry * 1000;
                     let otpRemaining = Math.max(0, otpExpiryTime - Date.now());

                     if (otpRemaining > 0) {
                         elements.countdownBar.classList.remove('hidden');
                         elements.countdownLabel.textContent = 'OTP expires in';
                         elements.countdownTimer.className = 'font-mono font-semibold text-[#16A34A]';
                         elements.countdownProgress.className = 'h-full bg-[#16A34A] rounded-full transition-all duration-1000';
                         updateOtpCountdown(otpRemaining);
                         startOtpCountdown(otpExpiryTime, otpTotalMs);
                     }
                 }

                 if (!attemptsExceeded && rateLimitExpiry && rateLimitTotalMs && elements.rateLimitAlert) {
                     let rlExpiryTime = rateLimitExpiry * 1000;
                     let rlTotalMs = rateLimitTotalMs;
                     let rlRemaining = Math.max(0, rlExpiryTime - Date.now());

                     if (rlRemaining > 0) {
                         localStorage.setItem('rate-limit-expiry', rlExpiryTime);
                         localStorage.setItem('rate-limit-total-ms', rlTotalMs);
                         if (activeInterval) clearInterval(activeInterval);
                         updateRateLimitCountdown(rlRemaining, rlTotalMs);
                         startRateLimitCountdown(rlExpiryTime, rlTotalMs);
                     } else {
                         localStorage.removeItem('rate-limit-expiry');
                         localStorage.removeItem('rate-limit-total-ms');
                     }
                 }

                 if (!attemptsExceeded && localStorage.getItem('rate-limit-expiry') && elements.rateLimitAlert) {
                     let rlExpiryTime = parseInt(localStorage.getItem('rate-limit-expiry'), 10);
                     let rlTotalMs = parseInt(localStorage.getItem('rate-limit-total-ms'), 10);
                     let rlRemaining = Math.max(0, rlExpiryTime - Date.now());

                     if (rlRemaining > 0) {
                         if (activeInterval) clearInterval(activeInterval);
                         updateRateLimitCountdown(rlRemaining, rlTotalMs);
                         startRateLimitCountdown(rlExpiryTime, rlTotalMs);
                     } else {
                         localStorage.removeItem('rate-limit-expiry');
                         localStorage.removeItem('rate-limit-total-ms');
                     }
                 }
             }

            function startOtpCountdown(expiryTime, totalMs) {
                if (activeInterval) clearInterval(activeInterval);
                activeInterval = setInterval(function() {
                    let remaining = Math.max(0, expiryTime - Date.now());
                    updateOtpCountdown(remaining);
                    if (remaining <= 0) {
                        clearInterval(activeInterval);
                        elements.countdownBar.classList.add('hidden');
                    }
                }, 1000);
            }

            function startRateLimitCountdown(expiryTime, totalMs) {
                if (activeInterval) clearInterval(activeInterval);
                elements.rateLimitAlert.classList.remove('hidden');
                elements.rateLimitBar.classList.remove('hidden');
                activeInterval = setInterval(function() {
                    let remaining = Math.max(0, expiryTime - Date.now());
                    updateRateLimitCountdown(remaining, totalMs);
                    if (remaining <= 0) {
                        clearInterval(activeInterval);
                        elements.rateLimitBar.classList.add('hidden');
                        elements.rateLimitAlert.classList.add('hidden');
                        localStorage.removeItem('rate-limit-expiry');
                        localStorage.removeItem('rate-limit-total-ms');
                    }
                }, 1000);
            }

            function updateOtpCountdown(ms) {
                let totalSeconds = Math.ceil(ms / 1000);
                let minutes = Math.floor(totalSeconds / 60);
                let seconds = totalSeconds % 60;
                elements.countdownTimer.textContent = minutes + ':' + String(seconds).padStart(2, '0');
                let progress = Math.max(0, (ms / otpTotalMs) * 100);
                elements.countdownProgress.style.width = progress + '%';
            }

            function updateRateLimitCountdown(ms, totalMs) {
                let totalSeconds = Math.ceil(ms / 1000);
                let minutes = Math.floor(totalSeconds / 60);
                let seconds = totalSeconds % 60;
                elements.rateLimitTimer.textContent = minutes + ':' + String(seconds).padStart(2, '0');
                let progress = Math.max(0, (ms / totalMs) * 100);
                elements.rateLimitProgress.style.width = progress + '%';
            }

            function updateHiddenOtp() {
                let otp = '';
                if (elements.otpInputs) {
                    elements.otpInputs.forEach(d => { otp += d.value; });
                }
                if (elements.hiddenInput) {
                    elements.hiddenInput.value = otp;
                }
            }

            function updateResendButtonText() {
                const resendText = document.getElementById('resend-otp-text');
                if (resendText) {
                    if (resendCooldownActive) {
                        resendText.textContent = 'Resend OTP (' + resendCooldownTime + 's)';
                    } else {
                        resendText.textContent = 'Resend OTP';
                    }
                }
            }

             document.getElementById('otp-form').addEventListener('submit', function() {
                 document.getElementById('verify-otp-text').classList.add('hidden');
                 document.getElementById('verify-otp-loading').classList.remove('hidden');
                 document.getElementById('verify-otp-btn').disabled = true;
                 document.getElementById('resend-link').disabled = true;

                 if (verifyAttempts + 1 >= maxVerifyAttempts) {
                     if (elements.countdownBar) {
                         elements.countdownBar.classList.add('hidden');
                     }
                     if (elements.rateLimitBar) {
                         elements.rateLimitBar.classList.add('hidden');
                     }
                     if (elements.rateLimitAlert) {
                         elements.rateLimitAlert.classList.add('hidden');
                     }
                     if (activeInterval) {
                         clearInterval(activeInterval);
                         activeInterval = null;
                     }
                 }
             });

            function resendOtp() {
                if (resendCooldownActive) {
                    return;
                }

                document.getElementById('resend-otp-text').classList.add('hidden');
                document.getElementById('resend-otp-loading').classList.remove('hidden');
                document.getElementById('resend-link').disabled = true;
                document.getElementById('verify-otp-btn').disabled = true;

                fetch('{{ route("admin.otp.resend") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
                    },
                    body: JSON.stringify({ email: '{{ $email ?? old("email") }}' })
                })
                .then(response => {
                    if (!response.ok) {
                        return response.json().then(data => {
                            if (response.status === 429 && data.remaining_seconds) {
                                throw { status: 429, remainingSeconds: data.remaining_seconds };
                            }
                            throw data;
                        });
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        const successEl = document.getElementById('resend-success');
                        const errorEl = document.getElementById('resend-error');
                        if (successEl) successEl.classList.remove('hidden');
                        if (errorEl) errorEl.classList.add('hidden');

                        if (elements.rateLimitAlert) {
                            elements.rateLimitAlert.classList.add('hidden');
                        }
                        if (elements.rateLimitBar) {
                            elements.rateLimitBar.classList.add('hidden');
                        }
                        localStorage.removeItem('rate-limit-expiry');
                        localStorage.removeItem('rate-limit-total-ms');

                        const newEnd = Date.now() + (resendCooldown * 1000);
                        setResendCooldownEnd(newEnd);
                        resendCooldownActive = true;
                        resendCooldownTime = resendCooldown;
                        updateResendButtonText();

                        if (resendCountdownInterval) clearInterval(resendCountdownInterval);
                        resendCountdownInterval = setInterval(function() {
                            resendCooldownTime--;
                            updateResendButtonText();
                            if (resendCooldownTime <= 0) {
                                clearInterval(resendCountdownInterval);
                                resendCooldownActive = false;
                                clearResendCooldown();
                                updateResendButtonText();
                            }
                        }, 1000);

                        window.location.reload();
                    } else {
                        alert('Failed to resend OTP. Please try again.');
                        resetResendButtonState();
                    }
                })
                .catch(error => {
                    if (error.status === 429) {
                        const remainingSeconds = error.remainingSeconds || resendCooldown;
                        const newEnd = Date.now() + (remainingSeconds * 1000);
                        setResendCooldownEnd(newEnd);
                        resendCooldownActive = true;
                        resendCooldownTime = remainingSeconds;
                        updateResendButtonText();

                        if (resendCountdownInterval) clearInterval(resendCountdownInterval);
                        resendCountdownInterval = setInterval(function() {
                            resendCooldownTime--;
                            updateResendButtonText();
                            if (resendCooldownTime <= 0) {
                                clearInterval(resendCountdownInterval);
                                resendCooldownActive = false;
                                clearResendCooldown();
                                updateResendButtonText();
                            }
                        }, 1000);
                    } else {
                        console.error('Error:', error);
                        const errorEl = document.getElementById('resend-error');
                        if (errorEl) errorEl.classList.remove('hidden');
                        resetResendButtonState();
                    }
                });
            }

             function resetResendButtonState() {
                 document.getElementById('resend-otp-text').classList.remove('hidden');
                 document.getElementById('resend-otp-loading').classList.add('hidden');
                 document.getElementById('resend-link').disabled = false;
                 if (verifyAttempts < maxVerifyAttempts) {
                     document.getElementById('verify-otp-btn').disabled = false;
                 }
             }

            document.addEventListener('DOMContentLoaded', initializeAll);
            window.addEventListener('load', initializeAll);
        </script>
    @endsection
