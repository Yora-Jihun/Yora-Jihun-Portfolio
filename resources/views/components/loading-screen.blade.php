<div id="loading-screen" class="fixed inset-0 z-[9999] bg-[#050505] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 pointer-events-none" style="background-image: radial-gradient(rgba(22,163,74,0.12) 1px, transparent 1px); background-size: 24px 24px;"></div>
    <div class="absolute inset-0 pointer-events-none opacity-40" style="background: repeating-linear-gradient(0deg, transparent, transparent 2px, rgba(22,163,74,0.08) 2px, rgba(22,163,74,0.08) 4px);"></div>
    
    <div class="absolute top-0 left-0 w-24 h-24 border-t-2 border-l-2 border-[#16A34A]/60"></div>
    <div class="absolute top-0 right-0 w-24 h-24 border-t-2 border-r-2 border-[#16A34A]/60"></div>
    <div class="absolute bottom-0 left-0 w-24 h-24 border-b-2 border-l-2 border-[#16A34A]/60"></div>
    <div class="absolute bottom-0 right-0 w-24 h-24 border-b-2 border-r-2 border-[#16A34A]/60"></div>
    
    <div class="relative z-10 text-center max-w-md mx-auto px-6">
        <div class="mb-16 relative">
            <div class="absolute -inset-4 bg-[#16A34A]/10 blur-xl rounded-full"></div>
            <span class="relative text-[3.5rem] md:text-[5rem] font-bold tracking-tighter text-white" style="text-shadow: 0 0 30px rgba(22,163,74,0.6), 0 0 60px rgba(22,163,74,0.3);">YJ<span class="text-[#16A34A]">.</span></span>
        </div>
        
        <div class="mb-10">
            <div id="matrix-rain" class="flex justify-center gap-[3px] h-16 items-end overflow-hidden">
                <div class="matrix-col flex flex-col-reverse gap-[3px]">
                    <div class="matrix-char w-2 h-2 bg-[#16A34A]/30 rounded-full"></div>
                    <div class="matrix-char w-2 h-2 bg-[#16A34A]/30 rounded-full"></div>
                    <div class="matrix-char w-2 h-2 bg-[#16A34A]/30 rounded-full"></div>
                    <div class="matrix-char w-2 h-2 bg-[#16A34A]/30 rounded-full"></div>
                    <div class="matrix-char w-2 h-2 bg-[#16A34A]/30 rounded-full"></div>
                </div>
                <div class="matrix-col flex flex-col-reverse gap-[3px]">
                    <div class="matrix-char w-2 h-2 bg-[#16A34A]/30 rounded-full"></div>
                    <div class="matrix-char w-2 h-2 bg-[#16A34A]/30 rounded-full"></div>
                    <div class="matrix-char w-2 h-2 bg-[#16A34A]/30 rounded-full"></div>
                    <div class="matrix-char w-2 h-2 bg-[#16A34A]/30 rounded-full"></div>
                    <div class="matrix-char w-2 h-2 bg-[#16A34A]/30 rounded-full"></div>
                </div>
                <div class="matrix-col flex flex-col-reverse gap-[3px]">
                    <div class="matrix-char w-2 h-2 bg-[#16A34A]/30 rounded-full"></div>
                    <div class="matrix-char w-2 h-2 bg-[#16A34A]/30 rounded-full"></div>
                    <div class="matrix-char w-2 h-2 bg-[#16A34A]/30 rounded-full"></div>
                    <div class="matrix-char w-2 h-2 bg-[#16A34A]/30 rounded-full"></div>
                    <div class="matrix-char w-2 h-2 bg-[#16A34A]/30 rounded-full"></div>
                </div>
                <div class="matrix-col flex flex-col-reverse gap-[3px]">
                    <div class="matrix-char w-2 h-2 bg-[#16A34A]/30 rounded-full"></div>
                    <div class="matrix-char w-2 h-2 bg-[#16A34A]/30 rounded-full"></div>
                    <div class="matrix-char w-2 h-2 bg-[#16A34A]/30 rounded-full"></div>
                    <div class="matrix-char w-2 h-2 bg-[#16A34A]/30 rounded-full"></div>
                    <div class="matrix-char w-2 h-2 bg-[#16A34A]/30 rounded-full"></div>
                </div>
                <div class="matrix-col flex flex-col-reverse gap-[3px]">
                    <div class="matrix-char w-2 h-2 bg-[#16A34A]/30 rounded-full"></div>
                    <div class="matrix-char w-2 h-2 bg-[#16A34A]/30 rounded-full"></div>
                    <div class="matrix-char w-2 h-2 bg-[#16A34A]/30 rounded-full"></div>
                    <div class="matrix-char w-2 h-2 bg-[#16A34A]/30 rounded-full"></div>
                    <div class="matrix-char w-2 h-2 bg-[#16A34A]/30 rounded-full"></div>
                </div>
            </div>
        </div>
        
        <div class="flex items-end justify-center gap-3 mb-8">
            <span id="loading-percent" class="text-4xl font-mono text-[#16A34A] font-light" style="text-shadow: 0 0 20px rgba(22,163,74,0.6);">00</span>
            <span class="text-xl text-[#16A34A]/50 font-mono mb-1">%</span>
        </div>
        
        <div class="relative w-72 h-[2px] bg-[#111] rounded-full overflow-hidden mx-auto mb-8 border border-[#16A34A]/10">
            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-[#16A34A]/20 to-transparent animate-pulse"></div>
            <div id="loading-bar" class="h-full bg-gradient-to-r from-[#16A34A] via-[#22c55e] to-[#16A34A] rounded-full relative" style="width: 0%; box-shadow: 0 0 20px rgba(22,163,74,0.8), 0 0 40px rgba(22,163,74,0.4); transition: width 0.1s ease-out;">
                <div class="absolute right-0 top-1/2 -translate-y-1/2 w-2 h-2 bg-white rounded-full shadow-[0_0_10px_rgba(22,163,74,1)]"></div>
            </div>
        </div>
        
        <div class="flex items-center justify-center gap-2 mb-4">
            <div class="w-1.5 h-1.5 rounded-full bg-[#16A34A] animate-pulse"></div>
            <p id="loading-text" class="text-xs font-mono text-[#16A34A]/70 tracking-[0.4em] uppercase">Initializing</p>
        </div>
        
        <div class="flex items-center justify-center gap-6 text-[0.625rem] font-mono text-[#16A34A]/30 tracking-wider">
            <span>SYS::BOOT</span>
            <span class="w-1 h-1 rounded-full bg-[#16A34A]/30"></span>
            <span>v2.0.76</span>
            <span class="w-1 h-1 rounded-full bg-[#16A34A]/30"></span>
            <span id="frame-counter">00</span>
        </div>
    </div>
</div>

<script>
(function() {
    const loadingScreen = document.getElementById('loading-screen');
    const loadingBar = document.getElementById('loading-bar');
    const loadingPercent = document.getElementById('loading-percent');
    const loadingText = document.getElementById('loading-text');
    const matrixChars = document.querySelectorAll('.matrix-char');
    const frameCounter = document.getElementById('frame-counter');
    
    if (!loadingScreen || !loadingBar) return;

    const messages = ['Initializing', 'Loading assets', 'Establishing connection', 'Decrypting data', 'Synchronizing', 'Almost ready'];
    let messageIndex = 0;
    let progress = 0;
    let currentDisplay = 0;
    const minDisplayTime = 2000;
    const startTime = Date.now();
    
    const interval = setInterval(() => {
        progress += Math.random() * 3 + 0.5;
        if (progress > 99) progress = 99;
        
        loadingBar.style.width = progress + '%';
        
        if (Math.random() > 0.6) {
            const randomChar = matrixChars[Math.floor(Math.random() * matrixChars.length)];
            if (randomChar) {
                randomChar.style.backgroundColor = 'rgba(22,163,74,0.9)';
                randomChar.style.boxShadow = '0 0 8px rgba(22,163,74,0.8)';
                randomChar.style.transform = 'scale(1.3)';
                randomChar.style.transition = 'all 0.1s ease-out';
                
                setTimeout(() => {
                    randomChar.style.backgroundColor = 'rgba(22,163,74,0.3)';
                    randomChar.style.boxShadow = 'none';
                    randomChar.style.transform = 'scale(1)';
                }, 200 + Math.random() * 300);
            }
        }
        
        if (Math.random() > 0.88 && messageIndex < messages.length - 1) {
            messageIndex++;
            loadingText.textContent = messages[messageIndex];
        }
    }, 100);

    let animationFrameId = null;
    
    function animateCounter() {
        if (currentDisplay < Math.floor(progress)) {
            currentDisplay++;
            loadingPercent.textContent = currentDisplay.toString().padStart(2, '0');
            frameCounter.textContent = Math.floor(Math.random() * 60).toString().padStart(2, '0');
        }
        if (currentDisplay < 100) {
            animationFrameId = requestAnimationFrame(animateCounter);
        }
    }
    animationFrameId = requestAnimationFrame(animateCounter);

    function finishLoading() {
        clearInterval(interval);
        loadingText.textContent = 'Ready';
        frameCounter.textContent = '60';
        
        progress = 100;
        currentDisplay = 100;
        loadingBar.style.width = '100%';
        loadingPercent.textContent = '100';
        
        matrixChars.forEach((char, i) => {
            setTimeout(() => {
                char.style.backgroundColor = 'rgba(22,163,74,1)';
                char.style.boxShadow = '0 0 12px rgba(22,163,74,1)';
                char.style.transform = 'scale(1.4)';
                char.style.transition = 'all 0.2s ease-out';
            }, i * 30);
        });
        
        setTimeout(() => {
            loadingScreen.style.transition = 'opacity 0.8s ease-out, transform 0.8s ease-out';
            loadingScreen.style.opacity = '0';
            loadingScreen.style.filter = 'brightness(1.5)';
            
            setTimeout(() => {
                loadingScreen.style.display = 'none';
            }, 800);
        }, 500);
    }

    window.addEventListener('load', () => {
        const elapsed = Date.now() - startTime;
        const remaining = Math.max(0, minDisplayTime - elapsed);
        setTimeout(finishLoading, remaining);
    });
})();
</script>