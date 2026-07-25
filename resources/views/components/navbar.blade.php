<nav class="fixed top-0 left-0 right-0 h-16 bg-white border-b border-[#EAEAEA] z-[1000]" role="navigation" aria-label="Main navigation">
    <div class="flex items-center h-full max-w-[1200px] mx-auto px-4 md:px-6">
        <div class="w-[80px] md:w-[112px] h-full flex items-center border-r border-[#EAEAEA] pl-4 md:pl-6 flex-shrink-0">
            <a href="{{ url('/') }}" class="text-[1.1rem] md:text-[1.5rem] font-semibold tracking-tight text-black no-underline leading-none" aria-label="YJ Home">
                YJ<span class="text-emerald-500">.</span>
            </a>
        </div>

        <div class="flex-1 flex items-center justify-center h-full hidden md:flex">
            <a href="{{ url('/') }}" class="relative inline-block uppercase text-[0.6875rem] font-semibold tracking-[0.15em] text-[#8E8E93] no-underline py-2 px-7 transition-colors duration-200 whitespace-nowrap hover:text-black {{ request()->is('/') ? 'active:text-black after:content-[\'\'] after:absolute after:bottom-0 after:left-[28px] after:right-[28px] after:h-[2px] after:bg-black' : '' }}">About</a>
            <a href="{{ url('/projects') }}" class="relative inline-block uppercase text-[0.6875rem] font-semibold tracking-[0.15em] text-[#8E8E93] no-underline py-2 px-7 transition-colors duration-200 whitespace-nowrap hover:text-black {{ request()->is('projects') ? 'active:text-black after:content-[\'\'] after:absolute after:bottom-0 after:left-[28px] after:right-[28px] after:h-[2px] after:bg-black' : '' }}">Projects</a>
            <a href="{{ url('/skills') }}" class="relative inline-block uppercase text-[0.6875rem] font-semibold tracking-[0.15em] text-[#8E8E93] no-underline py-2 px-7 transition-colors duration-200 whitespace-nowrap hover:text-black {{ request()->is('skills') ? 'active:text-black after:content-[\'\'] after:absolute after:bottom-0 after:left-[28px] after:right-[28px] after:h-[2px] after:bg-black' : '' }}">Skills</a>
            <a href="{{ url('/experience') }}" class="relative inline-block uppercase text-[0.6875rem] font-semibold tracking-[0.15em] text-[#8E8E93] no-underline py-2 px-7 transition-colors duration-200 whitespace-nowrap hover:text-black {{ request()->is('experience') ? 'active:text-black after:content-[\'\'] after:absolute after:bottom-0 after:left-[28px] after:right-[28px] after:h-[2px] after:bg-black' : '' }}">Experience</a>
            <a href="{{ url('/story') }}" class="relative inline-block uppercase text-[0.6875rem] font-semibold tracking-[0.15em] text-[#8E8E93] no-underline py-2 px-7 transition-colors duration-200 whitespace-nowrap hover:text-black {{ request()->is('story') ? 'active:text-black after:content-[\'\'] after:absolute after:bottom-0 after:left-[28px] after:right-[28px] after:h-[2px] after:bg-black' : '' }}">Story</a>
        </div>

        <div class="w-[80px] md:w-[112px] h-full flex items-center justify-end border-l border-[#EAEAEA] pr-4 md:pr-6 flex-shrink-0 hidden md:flex">
            <a href="{{ url('/contact') }}" class="inline-flex items-center bg-black text-white text-[0.625rem] font-semibold tracking-[0.1em] uppercase no-underline py-[10px] px-3 rounded-[3px] hover:bg-[#333333] transition-colors duration-200 whitespace-nowrap group">
                LET'S WORK TOGETHER <svg class="inline-block ml-1.5 w-3.5 h-3.5 transition-transform duration-200 group-hover:translate-x-[3px]" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12L12 4"/><path d="M5 4h7v7"/></svg>
            </a>
        </div>

        <button id="mobile-menu-btn" class="md:hidden flex items-center justify-center w-10 h-10 ml-auto relative" aria-label="Toggle menu" aria-expanded="false">
            <span class="hamburger-line absolute w-5 h-0.5 bg-black transition-all duration-300 ease-in-out" style="top: 14px; transform-origin: center;"></span>
            <span class="hamburger-line absolute w-5 h-0.5 bg-black transition-all duration-300 ease-in-out" style="top: 20px; transform-origin: center;"></span>
            <span class="hamburger-line absolute w-5 h-0.5 bg-black transition-all duration-300 ease-in-out" style="top: 26px; transform-origin: center;"></span>
        </button>
    </div>

    <div id="mobile-menu" class="md:hidden fixed inset-0 top-16 bg-white z-[999] hidden flex-col transition-opacity duration-300 opacity-0">
        <a href="{{ url('/') }}" class="mobile-nav-link block w-full text-center uppercase text-[0.6875rem] font-semibold tracking-[0.15em] text-[#8E8E93] no-underline py-4 border-b border-[#EAEAEA] hover:text-black transition-colors duration-200">About</a>
        <a href="{{ url('/projects') }}" class="mobile-nav-link block w-full text-center uppercase text-[0.6875rem] font-semibold tracking-[0.15em] text-[#8E8E93] no-underline py-4 border-b border-[#EAEAEA] hover:text-black transition-colors duration-200">Projects</a>
        <a href="{{ url('/skills') }}" class="mobile-nav-link block w-full text-center uppercase text-[0.6875rem] font-semibold tracking-[0.15em] text-[#8E8E93] no-underline py-4 border-b border-[#EAEAEA] hover:text-black transition-colors duration-200">Skills</a>
        <a href="{{ url('/experience') }}" class="mobile-nav-link block w-full text-center uppercase text-[0.6875rem] font-semibold tracking-[0.15em] text-[#8E8E93] no-underline py-4 border-b border-[#EAEAEA] hover:text-black transition-colors duration-200">Experience</a>
        <a href="{{ url('/story') }}" class="mobile-nav-link block w-full text-center uppercase text-[0.6875rem] font-semibold tracking-[0.15em] text-[#8E8E93] no-underline py-4 border-b border-[#EAEAEA] hover:text-black transition-colors duration-200">Story</a>
        <div class="p-4">
            <a href="{{ url('/contact') }}" class="mobile-nav-link block w-full text-center bg-black text-white text-[0.625rem] font-semibold tracking-[0.1em] uppercase no-underline py-4 rounded-[3px] hover:bg-[#333333] transition-colors duration-200">
                LET'S WORK TOGETHER
            </a>
        </div>
    </div>
</nav>

<script>
    (function() {
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const lines = btn ? btn.querySelectorAll('.hamburger-line') : [];
        if (!btn || !menu) return;

        function openMenu() {
            menu.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
            btn.setAttribute('aria-expanded', 'true');
            requestAnimationFrame(function() {
                menu.classList.remove('opacity-0');
                menu.classList.add('opacity-100');
            });
            if (lines[0]) { lines[0].style.transform = 'translateY(6px) rotate(45deg)'; }
            if (lines[1]) { lines[1].style.opacity = '0'; }
            if (lines[2]) { lines[2].style.transform = 'translateY(-6px) rotate(-45deg)'; }
        }

        function closeMenu() {
            document.body.style.overflow = '';
            btn.setAttribute('aria-expanded', 'false');
            menu.classList.remove('opacity-100');
            menu.classList.add('opacity-0');
            if (lines[0]) { lines[0].style.transform = 'translateY(0) rotate(0deg)'; }
            if (lines[1]) { lines[1].style.opacity = '1'; }
            if (lines[2]) { lines[2].style.transform = 'translateY(0) rotate(0deg)'; }
            setTimeout(function() {
                menu.classList.add('hidden');
            }, 300);
        }

        btn.addEventListener('click', function() {
            const isHidden = menu.classList.contains('hidden');
            if (isHidden) {
                openMenu();
            } else {
                closeMenu();
            }
        });

        menu.querySelectorAll('a').forEach(function(link) {
            link.addEventListener('click', function() {
                setTimeout(closeMenu, 150);
            });
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !menu.classList.contains('hidden')) {
                closeMenu();
            }
        });
    })();
</script>
