<div>
    @if($successMessage)
        <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 px-4 py-3 rounded mb-6 text-sm animate-fade-in">
            {{ $successMessage }}
        </div>
    @elseif($errorMessage)
        <div class="bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded mb-6 text-sm">
            {{ $errorMessage }}
        </div>
    @elseif(session('status'))
        <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 px-4 py-3 rounded mb-6 text-sm">
            {{ session('status') }}
        </div>
    @endif

    @error('otp')
        <div class="bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded mb-6 text-sm">
            {{ $message }}
        </div>
    @enderror

    <div class="mb-4">
        <div class="flex items-center justify-between text-xs text-gray-500 mb-1">
            <span>OTP expires in</span>
            <span class="font-mono font-semibold text-[#16A34A]" id="otp-expiry-timer">
                {{ gmdate('i:s', $otpExpirySeconds) }}
            </span>
        </div>
        <div class="w-full h-1.5 bg-gray-100 rounded-full overflow-hidden">
            <div id="otp-expiry-progress" class="h-full bg-[#16A34A] rounded-full transition-all duration-1000" style="width: {{ $otpExpiryTimestamp > 0 ? max(0, min(100, round(($otpExpiryTimestamp - time()) / ($otpTotalMs / 1000) * 100, 1))) : 100 }}%"></div>
        </div>
    </div>

    <form wire:submit="verify" class="space-y-6" id="otp-form">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1.5">One-Time Password</label>

            <div wire:ignore class="flex gap-2 justify-center" id="otp-inputs">
                @foreach($otpDigits as $index => $digit)
                    <input type="text"
                           inputmode="numeric"
                           maxlength="1"
                           required
                           data-index="{{ $index }}"
                           autocomplete="{{ $index === 0 ? 'one-time-code' : 'off' }}"
                           class="otp-digit w-11 h-12 text-center text-xl font-semibold rounded-lg border border-[#E5E7EB] bg-white focus:outline-none focus:border-[#16A34A] focus:ring-1 focus:ring-[#16A34A] transition-all"
                           placeholder="•">
                @endforeach
            </div>

            <input type="hidden" wire:model="otp" name="otp" id="otp-hidden">
        </div>

        <button type="submit" wire:loading.attr="disabled" wire:target="verify" class="w-full inline-flex items-center justify-center gap-2 bg-black text-white text-sm font-semibold py-3 px-6 rounded hover:bg-gray-800 transition-colors disabled:opacity-70 disabled:cursor-not-allowed">
            <span wire:loading.remove wire:target="verify">Verify OTP</span>
            <span wire:loading wire:target="verify">Verifying...</span>
        </button>
    </form>

    <div class="mt-4">
        <button type="button"
                wire:click="resend"
                wire:loading.attr="disabled"
                wire:target="resend"
                @disabled($resendCooldownActive)
                class="w-full inline-flex items-center justify-center gap-2 py-3 px-6 rounded-lg border text-sm font-medium transition-all duration-200 {{ $resendCooldownActive ? 'border-orange-200 bg-orange-50 text-orange-500 cursor-not-allowed' : 'border-[#E5E7EB] bg-white text-orange-600 hover:border-orange-300 hover:bg-orange-50 hover:text-orange-700' }}">
            @if($resendCooldownActive)
                <svg class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/></svg>
                <span id="resend-cooldown-text">Resend OTP ({{ $resendCooldownTime }}s)</span>
            @else
                <svg wire:loading.remove wire:target="resend" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"/></svg>
                <span wire:loading.remove wire:target="resend">Resend OTP</span>
                <span wire:loading wire:target="resend">Resending...</span>
            @endif
        </button>
        <p class="text-center text-xs text-[#8E8E93] mt-3">Didn't receive the code? You can request a new one after the cooldown.</p>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('otp-form');
            const hiddenInput = document.getElementById('otp-hidden');
            const inputs = document.querySelectorAll('.otp-digit');
            const otpTimerEl = document.getElementById('otp-expiry-timer');
            const otpProgressEl = document.getElementById('otp-expiry-progress');
            const resendBtn = document.querySelector('[wire\\:click="resend"]');
            const resendCooldownText = document.getElementById('resend-cooldown-text');

            let otpExpiryEnd = {{ $otpExpiryTimestamp > 0 ? $otpExpiryTimestamp * 1000 : 'null' }};
            let otpTotalMs = {{ $otpTotalMs }};
            let resendCooldownEnd = {{ $resendCooldownUntilTimestamp > 0 ? $resendCooldownUntilTimestamp * 1000 : 'null' }};

            let otpInterval = null;
            let resendInterval = null;

            function formatTime(ms) {
                const totalSeconds = Math.max(0, Math.ceil(ms / 1000));
                const minutes = Math.floor(totalSeconds / 60);
                const seconds = totalSeconds % 60;
                return minutes + ':' + String(seconds).padStart(2, '0');
            }

            function startOtpCountdown() {
                if (otpInterval) clearInterval(otpInterval);
                if (!otpExpiryEnd) return;

                function update() {
                    const remaining = Math.max(0, otpExpiryEnd - Date.now());
                    if (otpTimerEl) otpTimerEl.textContent = formatTime(remaining);
                    if (otpProgressEl) {
                        const pct = otpTotalMs > 0 ? Math.max(0, Math.min(100, (remaining / otpTotalMs) * 100)) : 0;
                        otpProgressEl.style.width = pct + '%';
                    }
                    if (remaining <= 0) {
                        clearInterval(otpInterval);
                        otpInterval = null;
                    }
                }

                update();
                otpInterval = setInterval(update, 250);
            }

            function startResendCountdown() {
                if (resendInterval) clearInterval(resendInterval);
                if (!resendCooldownEnd) return;

                function update() {
                    const remaining = Math.max(0, resendCooldownEnd - Date.now());
                    const seconds = Math.ceil(remaining / 1000);

                    if (resendCooldownText) {
                        resendCooldownText.textContent = 'Resend OTP (' + seconds + 's)';
                    }
                    if (resendBtn) {
                        resendBtn.disabled = true;
                        resendBtn.classList.add('border-orange-200', 'bg-orange-50', 'text-orange-500', 'cursor-not-allowed');
                        resendBtn.classList.remove('border-[#E5E7EB]', 'bg-white', 'text-orange-600', 'hover:border-orange-300', 'hover:bg-orange-50', 'hover:text-orange-700');
                    }

                    if (remaining <= 0) {
                        clearInterval(resendInterval);
                        resendInterval = null;
                        resendCooldownEnd = null;

                        if (resendBtn) {
                            resendBtn.disabled = false;
                            resendBtn.classList.remove('border-orange-200', 'bg-orange-50', 'text-orange-500', 'cursor-not-allowed');
                            resendBtn.classList.add('border-[#E5E7EB]', 'bg-white', 'text-orange-600', 'hover:border-orange-300', 'hover:bg-orange-50', 'hover:text-orange-700');
                        }
                        if (resendCooldownText) {
                            resendCooldownText.textContent = 'Resend OTP';
                        }

                        if (window.Livewire) {
                            Livewire.first().call('clearResendCooldown');
                        }
                    }
                }

                update();
                resendInterval = setInterval(update, 250);
            }

            function collectOtp() {
                let otp = '';
                inputs.forEach(function(input) { otp += input.value; });
                return otp;
            }

            inputs.forEach(function(input, index) {
                input.addEventListener('input', function(e) {
                    let value = e.target.value.replace(/[^0-9]/g, '');
                    e.target.value = value.slice(-1);
                    if (value && index < inputs.length - 1) {
                        inputs[index + 1].focus();
                    }
                });

                input.addEventListener('keydown', function(e) {
                    if (e.key === 'Backspace' && !e.target.value && index > 0) {
                        inputs[index - 1].focus();
                        e.target.value = '';
                    }
                });

                input.addEventListener('paste', function(e) {
                    e.preventDefault();
                    let paste = (e.clipboardData || window.clipboardData).getData('text').replace(/[^0-9]/g, '').slice(0, 6);
                    for (let i = 0; i < inputs.length; i++) {
                        inputs[i].value = paste[i] || '';
                    }
                    if (paste.length < inputs.length) {
                        inputs[paste.length].focus();
                    } else {
                        inputs[inputs.length - 1].focus();
                    }
                });
            });

            form.addEventListener('submit', function() {
                hiddenInput.value = collectOtp();
                hiddenInput.dispatchEvent(new Event('input', { bubbles: true }));
            });

            Livewire.on('otp-resend-success', function(params) {
                const p = params && params[0] ? params[0] : params;
                if (p && p.otpExpiryEnd) {
                    otpExpiryEnd = p.otpExpiryEnd;
                    otpTotalMs = p.otpTotalMs || otpTotalMs;
                    startOtpCountdown();
                }
                if (p && p.resendCooldownEnd) {
                    resendCooldownEnd = p.resendCooldownEnd;
                    startResendCountdown();
                }
            });

            Livewire.on('reset-otp-inputs', function() {
                inputs.forEach(function(input) { input.value = ''; });
                if (inputs[0]) inputs[0].focus();
            });

            startOtpCountdown();
            startResendCountdown();
        });
    </script>
</div>