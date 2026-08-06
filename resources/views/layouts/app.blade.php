<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Yora Jihun - Portfolio">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Yora Jihun</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
     @livewireStyles
     @stack('styles')
     <style>
        .page-enter {
            animation: pageFadeIn 0.7s cubic-bezier(0.22, 1, 0.36, 1) both;
        }
        @keyframes pageFadeIn {
            from { opacity: 0; transform: translateY(18px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .reveal {
            opacity: 0;
            transform: translateY(28px);
            transition: opacity 0.7s cubic-bezier(0.22, 1, 0.36, 1), transform 0.7s cubic-bezier(0.22, 1, 0.36, 1);
            will-change: opacity, transform;
        }
        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }
        .reveal-delay-1 { transition-delay: 0.1s; }
        .reveal-delay-2 { transition-delay: 0.2s; }
        .reveal-delay-3 { transition-delay: 0.3s; }
        .reveal-delay-4 { transition-delay: 0.4s; }
        .reveal-delay-5 { transition-delay: 0.5s; }
        @media (prefers-reduced-motion: reduce) {
            .page-enter { animation: none; }
            .reveal { opacity: 1; transform: none; transition: none; }
        }
        :fullscreen .cursor-dot,
        :fullscreen .cursor-ring,
        :-webkit-full-screen .cursor-dot,
        :-webkit-full-screen .cursor-ring,
        html:fullscreen .cursor-dot,
        html:fullscreen .cursor-ring,
        html:-webkit-full-screen .cursor-dot,
        html:-webkit-full-screen .cursor-ring,
        body:fullscreen .cursor-dot,
        body:fullscreen .cursor-ring,
        body:-webkit-full-screen .cursor-dot,
        body:-webkit-full-screen .cursor-ring {
            display: none !important;
            visibility: hidden !important;
            opacity: 0 !important;
        }
        :fullscreen *,
        :-webkit-full-screen *,
        html:fullscreen *,
        html:-webkit-full-screen *,
        body:fullscreen *,
        body:-webkit-full-screen * {
            cursor: auto !important;
        }
    </style>
</head>
<body class="font-sans antialiased text-gray-900 bg-white">
    <div class="cursor-dot hidden md:block" id="cursor-dot"></div>
    <div class="cursor-ring hidden md:block" id="cursor-ring"></div>
    @yield('preload')
    @include('components.navbar')
    @yield('progress-bar')

    <main class="main-content pt-16 page-enter">
        @yield('content')
    </main>

    @include('components.footer')

     @livewireScripts
     @stack('scripts')
     <script>
        (function() {
            const dot = document.getElementById('cursor-dot');
            const ring = document.getElementById('cursor-ring');
            if (!dot || !ring) return;

            let mouseX = 0;
            let mouseY = 0;
            let ringX = 0;
            let ringY = 0;
            let animationId = null;

            function animateRing() {
                ringX += (mouseX - ringX) * 0.15;
                ringY += (mouseY - ringY) * 0.15;
                ring.style.left = ringX + 'px';
                ring.style.top = ringY + 'px';
                animationId = requestAnimationFrame(animateRing);
            }

            function startCursor() {
                if (animationId) return;
                animateRing();
            }

            function stopCursor() {
                if (animationId) {
                    cancelAnimationFrame(animationId);
                    animationId = null;
                }
            }

            document.addEventListener('mousemove', function(e) {
                mouseX = e.clientX;
                mouseY = e.clientY;
                dot.style.left = mouseX + 'px';
                dot.style.top = mouseY + 'px';
            });

            startCursor();

            const hoverTargets = document.querySelectorAll('a, button, input, textarea, [role="button"], .cursor-pointer');
            hoverTargets.forEach(function(el) {
                el.addEventListener('mouseenter', function() {
                    ring.classList.add('hover');
                });
                el.addEventListener('mouseleave', function() {
                    ring.classList.remove('hover');
                });
            });

            document.addEventListener('fullscreenchange', function() {
                if (document.fullscreenElement) {
                    stopCursor();
                } else {
                    startCursor();
                }
            });

            document.addEventListener('webkitfullscreenchange', function() {
                if (document.webkitFullscreenElement) {
                    stopCursor();
                } else {
                    startCursor();
                }
            });
        })();

        (function() {
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0, rootMargin: '0px 0px -40px 0px' });

            document.querySelectorAll('.reveal').forEach(function(el) {
                observer.observe(el);
            });
        })();
    </script>
</body>
</html>