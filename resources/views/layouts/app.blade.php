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
    <style>
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

    <main class="main-content pt-16">
        @yield('content')
    </main>

    @include('components.footer')

    @livewireScripts
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
    </script>
</body>
</html>
