@extends('layouts.app')

@section('preload')
    @include('components.loading-screen')
@endsection

@section('content')

<!-- Hero / Landing -->
<section id="hero-section" class="relative min-h-screen px-6 overflow-hidden flex items-start justify-center pt-0">
    <div class="absolute inset-0 pointer-events-none"></div>

    <div class="absolute inset-0 z-[5] overflow-hidden pointer-events-none">
        <div class="absolute inset-0 pointer-events-none" style="background-image: radial-gradient(rgba(0,255,200,0.04) 1px, transparent 1px); background-size: 32px 32px;"></div>
    </div>

    <div class="relative z-10 w-full max-w-[1200px] mx-auto flex flex-col items-center">
        <div class="w-full h-[80vh] mt-8 mb-6">
            <div class="cyber-card w-full h-full rounded-2xl md:rounded-[20px] px-6 py-10 md:px-10 md:py-14 flex flex-col items-center justify-between">
                <div class="cyber-card-bg"></div>
                <div class="cyber-border-glow tl"></div>
                <div class="cyber-border-glow tr"></div>
                <div class="cyber-border-glow bl"></div>
                <div class="cyber-border-glow br"></div>

                <div class="w-full flex items-center justify-between relative z-10">
                    <div class="flex items-center gap-3">
                        <span class="relative flex h-2.5 w-2.5">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#16A34A] opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-[#16A34A]"></span>
                        </span>
                        <span class="cyber-label text-[0.5625rem] md:text-[0.6875rem] font-semibold uppercase text-[#9ca3af]">System Online</span>
                    </div>
                    <span class="text-[0.5625rem] md:text-[0.6875rem] font-mono text-[#9ca3af]">v4.2.1</span>
                </div>

                <div class="flex flex-col items-center gap-5 relative z-10">
                    <h1 class="cyber-title text-5xl md:text-7xl lg:text-8xl xl:text-9xl font-black tracking-tight text-white text-center leading-[0.9]">YORA JIHUN</h1>
                    <span class="text-[0.6875rem] md:text-[0.875rem] font-medium tracking-wide text-[#9ca3af]">Lead System Engineer &amp; AI Specialist</span>
                </div>

                <div class="w-full flex flex-col md:flex-row items-start md:items-center justify-between gap-4 relative z-10">
                    <div class="flex flex-wrap items-center gap-3">
                        <span class="text-[0.5625rem] md:text-[0.6875rem] font-mono text-[#9ca3af]">LOC::SEOUL</span>
                        <span class="text-[#16A34A]">/</span>
                        <span class="text-[0.5625rem] md:text-[0.6875rem] font-mono text-[#9ca3af]">FOCUS::AI_ROBOTICS</span>
                        <span class="text-[#16A34A]">/</span>
                        <span class="text-[0.5625rem] md:text-[0.6875rem] font-mono text-[#9ca3af]">EXP::7Y</span>
                    </div>
                    <div class="flex items-center gap-2 text-[#16A34A]">
                        <span class="text-[0.5625rem] md:text-[0.6875rem] font-mono tracking-widest">STATUS::ACTIVE</span>
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#16A34A] opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-[#16A34A]"></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center mb-2 relative z-10">
            <img src="{{ asset('assets/Jerome_Edica.webp') }}" alt="Yora Jihun" class="w-24 h-24 md:w-32 md:h-32 rounded-full object-cover border-2 border-gray-100 shadow-sm">
        </div>
        <div class="flex flex-col items-center relative z-10">
            <p class="text-[0.5rem] md:text-[0.625rem] font-semibold tracking-[0.1em] md:tracking-[0.25em] uppercase text-emerald-500">Current Role: Lead System Engineer &amp; AI Specialist</p>
            <div class="w-full overflow-hidden mt-6 relative">
                <div class="flex whitespace-nowrap animate-marquee" role="marquee" aria-label="Technology stack">
                    <div class="flex items-center gap-6 shrink-0 pr-6">
                        <span class="px-4 py-2 rounded-lg bg-white border border-[#E5E7EB] text-sm font-semibold text-gray-600 shadow-sm hover:border-[#16A34A] hover:text-[#16A34A] hover:shadow-md transition-all duration-200">Laravel</span>
                        <span class="px-4 py-2 rounded-lg bg-white border border-[#E5E7EB] text-sm font-semibold text-gray-600 shadow-sm hover:border-[#16A34A] hover:text-[#16A34A] hover:shadow-md transition-all duration-200">Google</span>
                        <span class="px-4 py-2 rounded-lg bg-white border border-[#E5E7EB] text-sm font-semibold text-gray-600 shadow-sm hover:border-[#16A34A] hover:text-[#16A34A] hover:shadow-md transition-all duration-200">Microsoft</span>
                        <span class="px-4 py-2 rounded-lg bg-white border border-[#E5E7EB] text-sm font-semibold text-gray-600 shadow-sm hover:border-[#16A34A] hover:text-[#16A34A] hover:shadow-md transition-all duration-200">Vue.js</span>
                        <span class="px-4 py-2 rounded-lg bg-white border border-[#E5E7EB] text-sm font-semibold text-gray-600 shadow-sm hover:border-[#16A34A] hover:text-[#16A34A] hover:shadow-md transition-all duration-200">Python</span>
                        <span class="px-4 py-2 rounded-lg bg-white border border-[#E5E7EB] text-sm font-semibold text-gray-600 shadow-sm hover:border-[#16A34A] hover:text-[#16A34A] hover:shadow-md transition-all duration-200">PostgreSQL</span>
                        <span class="px-4 py-2 rounded-lg bg-white border border-[#E5E7EB] text-sm font-semibold text-gray-600 shadow-sm hover:border-[#16A34A] hover:text-[#16A34A] hover:shadow-md transition-all duration-200">Docker</span>
                        <span class="px-4 py-2 rounded-lg bg-white border border-[#E5E7EB] text-sm font-semibold text-gray-600 shadow-sm hover:border-[#16A34A] hover:text-[#16A34A] hover:shadow-md transition-all duration-200">AWS</span>
                        <span class="px-4 py-2 rounded-lg bg-white border border-[#E5E7EB] text-sm font-semibold text-gray-600 shadow-sm hover:border-[#16A34A] hover:text-[#16A34A] hover:shadow-md transition-all duration-200">React</span>
                        <span class="px-4 py-2 rounded-lg bg-white border border-[#E5E7EB] text-sm font-semibold text-gray-600 shadow-sm hover:border-[#16A34A] hover:text-[#16A34A] hover:shadow-md transition-all duration-200">Node.js</span>
                        <span class="px-4 py-2 rounded-lg bg-white border border-[#E5E7EB] text-sm font-semibold text-gray-600 shadow-sm hover:border-[#16A34A] hover:text-[#16A34A] hover:shadow-md transition-all duration-200">TypeScript</span>
                        <span class="px-4 py-2 rounded-lg bg-white border border-[#E5E7EB] text-sm font-semibold text-gray-600 shadow-sm hover:border-[#16A34A] hover:text-[#16A34A] hover:shadow-md transition-all duration-200">Redis</span>
                        <span class="px-4 py-2 rounded-lg bg-white border border-[#E5E7EB] text-sm font-semibold text-gray-600 shadow-sm hover:border-[#16A34A] hover:text-[#16A34A] hover:shadow-md transition-all duration-200">Kubernetes</span>
                        <span class="px-4 py-2 rounded-lg bg-white border border-[#E5E7EB] text-sm font-semibold text-gray-600 shadow-sm hover:border-[#16A34A] hover:text-[#16A34A] hover:shadow-md transition-all duration-200">TensorFlow</span>
                    </div>
                    <div class="flex items-center gap-6 shrink-0 pr-6">
                        <span class="px-4 py-2 rounded-lg bg-white border border-[#E5E7EB] text-sm font-semibold text-gray-600 shadow-sm hover:border-[#16A34A] hover:text-[#16A34A] hover:shadow-md transition-all duration-200">Laravel</span>
                        <span class="px-4 py-2 rounded-lg bg-white border border-[#E5E7EB] text-sm font-semibold text-gray-600 shadow-sm hover:border-[#16A34A] hover:text-[#16A34A] hover:shadow-md transition-all duration-200">Google</span>
                        <span class="px-4 py-2 rounded-lg bg-white border border-[#E5E7EB] text-sm font-semibold text-gray-600 shadow-sm hover:border-[#16A34A] hover:text-[#16A34A] hover:shadow-md transition-all duration-200">Microsoft</span>
                        <span class="px-4 py-2 rounded-lg bg-white border border-[#E5E7EB] text-sm font-semibold text-gray-600 shadow-sm hover:border-[#16A34A] hover:text-[#16A34A] hover:shadow-md transition-all duration-200">Vue.js</span>
                        <span class="px-4 py-2 rounded-lg bg-white border border-[#E5E7EB] text-sm font-semibold text-gray-600 shadow-sm hover:border-[#16A34A] hover:text-[#16A34A] hover:shadow-md transition-all duration-200">Python</span>
                        <span class="px-4 py-2 rounded-lg bg-white border border-[#E5E7EB] text-sm font-semibold text-gray-600 shadow-sm hover:border-[#16A34A] hover:text-[#16A34A] hover:shadow-md transition-all duration-200">PostgreSQL</span>
                        <span class="px-4 py-2 rounded-lg bg-white border border-[#E5E7EB] text-sm font-semibold text-gray-600 shadow-sm hover:border-[#16A34A] hover:text-[#16A34A] hover:shadow-md transition-all duration-200">Docker</span>
                        <span class="px-4 py-2 rounded-lg bg-white border border-[#E5E7EB] text-sm font-semibold text-gray-600 shadow-sm hover:border-[#16A34A] hover:text-[#16A34A] hover:shadow-md transition-all duration-200">AWS</span>
                        <span class="px-4 py-2 rounded-lg bg-white border border-[#E5E7EB] text-sm font-semibold text-gray-600 shadow-sm hover:border-[#16A34A] hover:text-[#16A34A] hover:shadow-md transition-all duration-200">React</span>
                        <span class="px-4 py-2 rounded-lg bg-white border border-[#E5E7EB] text-sm font-semibold text-gray-600 shadow-sm hover:border-[#16A34A] hover:text-[#16A34A] hover:shadow-md transition-all duration-200">Node.js</span>
                        <span class="px-4 py-2 rounded-lg bg-white border border-[#E5E7EB] text-sm font-semibold text-gray-600 shadow-sm hover:border-[#16A34A] hover:text-[#16A34A] hover:shadow-md transition-all duration-200">TypeScript</span>
                        <span class="px-4 py-2 rounded-lg bg-white border border-[#E5E7EB] text-sm font-semibold text-gray-600 shadow-sm hover:border-[#16A34A] hover:text-[#16A34A] hover:shadow-md transition-all duration-200">Redis</span>
                        <span class="px-4 py-2 rounded-lg bg-white border border-[#E5E7EB] text-sm font-semibold text-gray-600 shadow-sm hover:border-[#16A34A] hover:text-[#16A34A] hover:shadow-md transition-all duration-200">Kubernetes</span>
                        <span class="px-4 py-2 rounded-lg bg-white border border-[#E5E7EB] text-sm font-semibold text-gray-600 shadow-sm hover:border-[#16A34A] hover:text-[#16A34A] hover:shadow-md transition-all duration-200">TensorFlow</span>
                    </div>
                </div>
            </div>
            <div class="w-px h-56 md:h-64 mt-3 relative bg-gray-200">
                <span class="absolute left-1/2 -translate-x-1/2 flex h-3 w-3">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#16A34A] opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-[#16A34A]"></span>
                </span>
            </div>
    </div>
</section>

<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(8px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in {
        animation: fadeIn 0.4s ease-out forwards;
    }
    @keyframes scanline {
        0% { transform: translateY(-100%); }
        100% { transform: translateY(100vh); }
    }
    @keyframes flicker {
        0%, 100% { opacity: 1; }
        92% { opacity: 1; }
        93% { opacity: 0.6; }
        94% { opacity: 1; }
        96% { opacity: 0.7; }
        97% { opacity: 1; }
    }
    .cyber-card {
        position: relative;
        background: linear-gradient(180deg, rgba(10,10,14,0.92), rgba(6,6,10,0.96));
        border: 1px solid rgba(0,255,200,0.18);
        box-shadow: 0 0 0 1px rgba(0,255,200,0.06), 0 20px 60px rgba(0,0,0,0.35), inset 0 0 30px rgba(0,255,200,0.04);
        overflow: hidden;
    }
    .cyber-card-bg {
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 50% 50%, rgba(0,255,200,0.08) 0%, transparent 60%), radial-gradient(circle at 20% 80%, rgba(0,255,200,0.04) 0%, transparent 50%), radial-gradient(circle at 80% 20%, rgba(0,255,200,0.04) 0%, transparent 50%);
        pointer-events: none;
    }
    .cyber-card::before {
        content: '';
        position: absolute;
        inset: 0;
        background: repeating-linear-gradient(0deg, transparent, transparent 2px, rgba(0,255,200,0.03) 2px, rgba(0,255,200,0.03) 4px);
        pointer-events: none;
    }
    .cyber-card::after {
        content: '';
        position: absolute;
        left: 0;
        right: 0;
        height: 120px;
        background: linear-gradient(to bottom, rgba(0,255,200,0.08), transparent);
        animation: scanline 6s linear infinite;
        pointer-events: none;
    }
    .cyber-border-glow {
        position: absolute;
        width: 18px;
        height: 18px;
        border: 1px solid rgba(0,255,200,0.7);
        box-shadow: 0 0 8px rgba(0,255,200,0.4), inset 0 0 6px rgba(0,255,200,0.25);
    }
    .cyber-border-glow.tl { top: 10px; left: 10px; border-right: none; border-bottom: none; }
    .cyber-border-glow.tr { top: 10px; right: 10px; border-left: none; border-bottom: none; }
    .cyber-border-glow.bl { bottom: 10px; left: 10px; border-right: none; border-top: none; }
    .cyber-border-glow.br { bottom: 10px; right: 10px; border-left: none; border-top: none; }
    .cyber-title {
        animation: flicker 8s infinite;
        text-shadow: 0 0 20px rgba(0,255,200,0.55), 0 0 60px rgba(0,255,200,0.18);
    }
    .cyber-label {
        letter-spacing: 0.35em;
        text-shadow: 0 0 10px rgba(0,255,200,0.4);
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
    :fullscreen #network-svg,
    :fullscreen #network-svg *,
    :-webkit-full-screen #network-svg,
    :-webkit-full-screen #network-svg *,
    html:fullscreen #network-svg,
    html:fullscreen #network-svg *,
    html:-webkit-full-screen #network-svg,
    html:-webkit-full-screen #network-svg *,
    body:fullscreen #network-svg,
    body:fullscreen #network-svg *,
    body:-webkit-full-screen #network-svg,
    body:-webkit-full-screen #network-svg * {
        cursor: auto !important;
    }
    :fullscreen .cursor-grab,
    :fullscreen .cursor-grabbing,
    :fullscreen .cursor-pointer,
    :-webkit-full-screen .cursor-grab,
    :-webkit-full-screen .cursor-grabbing,
    :-webkit-full-screen .cursor-pointer,
    html:fullscreen .cursor-grab,
    html:fullscreen .cursor-grabbing,
    html:fullscreen .cursor-pointer,
    html:-webkit-full-screen .cursor-grab,
    html:-webkit-full-screen .cursor-grabbing,
    html:-webkit-full-screen .cursor-pointer,
    body:fullscreen .cursor-grab,
    body:fullscreen .cursor-grabbing,
    body:fullscreen .cursor-pointer,
    body:-webkit-full-screen .cursor-grab,
    body:-webkit-full-screen .cursor-grabbing,
    body:-webkit-full-screen .cursor-pointer {
        cursor: auto !important;
    }
</style>

<!-- Profile Overview -->
<section class="pt-0 pb-24 border-b border-[#EAEAEA]">
    <div class="max-w-[1100px] mx-auto px-6 relative z-10 mb-0 md:mb-2">
        <div class="bg-white rounded-2xl border border-[#EAEAEA] overflow-hidden">

            <div class="px-5 py-5 md:px-12 md:py-10">
                <p class="text-[0.6875rem] font-semibold tracking-[0.2em] uppercase text-[#8E8E93] mb-4 md:mb-10">Profile Overview</p>
                <div class="grid grid-cols-1 md:grid-cols-3 divide-y md:divide-y-0 md:divide-x divide-[#EAEAEA]">
                    <div class="group flex items-start gap-4 md:gap-5 p-4 md:p-6 transition-all duration-200 ease-out">
                        <div class="flex-shrink-0 w-10 h-10 md:w-12 md:h-12 rounded-full bg-gray-50 border border-gray-100 flex items-center justify-center transition-all duration-200 ease-out group-hover:border-[#16A34A]/30 group-hover:text-[#16A34A]">
                            <x-icon name="location" class="w-4 h-4 md:w-5 md:h-5 text-gray-400 transition-colors duration-200" />
                        </div>
                        <div class="min-w-0">
                            <p class="text-[0.5625rem] font-semibold tracking-[0.15em] uppercase text-gray-400 mb-1">Hometown</p>
                            <p class="text-base md:text-[1.25rem] font-semibold text-gray-700 tracking-tight leading-tight">Seoul, South Korea</p>
                        </div>
                    </div>
                    <div class="group flex items-start gap-4 md:gap-5 p-4 md:p-6 transition-all duration-200 ease-out">
                        <div class="flex-shrink-0 w-10 h-10 md:w-12 md:h-12 rounded-full bg-gray-50 border border-gray-100 flex items-center justify-center transition-all duration-200 ease-out group-hover:border-[#16A34A]/30 group-hover:text-[#16A34A]">
                            <x-icon name="globe" class="w-4 h-4 md:w-5 md:h-5 text-gray-400 transition-colors duration-200" />
                        </div>
                        <div class="min-w-0">
                            <p class="text-[0.5625rem] font-semibold tracking-[0.15em] uppercase text-gray-400 mb-1">Country</p>
                            <p class="text-base md:text-[1.25rem] font-semibold text-gray-700 tracking-tight leading-tight">South Korea</p>
                        </div>
                    </div>
                    <div class="group flex items-start gap-4 md:gap-5 p-4 md:p-6 transition-all duration-200 ease-out">
                        <div class="flex-shrink-0 w-10 h-10 md:w-12 md:h-12 rounded-full bg-gray-50 border border-gray-100 flex items-center justify-center transition-all duration-200 ease-out group-hover:border-[#16A34A]/30 group-hover:text-[#16A34A]">
                            <x-icon name="lightning" class="w-4 h-4 md:w-5 md:h-5 text-gray-400 transition-colors duration-200" />
                        </div>
                        <div class="min-w-0">
                            <p class="text-[0.5625rem] font-semibold tracking-[0.15em] uppercase text-gray-400 mb-1">Current Role</p>
                            <p class="text-base md:text-[1.25rem] font-semibold text-gray-700 tracking-tight leading-tight">Lead System Engineer &amp; AI Specialist</p>
                        </div>
                    </div>
                    <div class="group flex items-start gap-4 md:gap-5 p-4 md:p-6 transition-all duration-200 ease-out">
                        <div class="flex-shrink-0 w-10 h-10 md:w-12 md:h-12 rounded-full bg-gray-50 border border-gray-100 flex items-center justify-center transition-all duration-200 ease-out group-hover:border-[#16A34A]/30 group-hover:text-[#16A34A]">
                            <x-icon name="clock" class="w-4 h-4 md:w-5 md:h-5 text-gray-400 transition-colors duration-200" />
                        </div>
                        <div class="min-w-0">
                            <p class="text-[0.5625rem] font-semibold tracking-[0.15em] uppercase text-gray-400 mb-1">Total Work Experience</p>
                            <p class="text-base md:text-[1.25rem] font-semibold text-gray-700 tracking-tight leading-tight">7 Years</p>
                        </div>
                    </div>
                    <div class="group flex items-start gap-4 md:gap-5 p-4 md:p-6 transition-all duration-200 ease-out">
                        <div class="flex-shrink-0 w-10 h-10 md:w-12 md:h-12 rounded-full bg-gray-50 border border-gray-100 flex items-center justify-center transition-all duration-200 ease-out group-hover:border-[#16A34A]/30 group-hover:text-[#16A34A]">
                            <svg class="w-4 h-4 md:w-5 md:h-5 text-gray-400 transition-colors duration-200" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
    <path stroke-linecap="round" stroke-linejoin="round" d="M12 5.25a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5z"></path>
</svg>
                        </div>
                        <div class="min-w-0">
                            <p class="text-[0.5625rem] font-semibold tracking-[0.15em] uppercase text-gray-400 mb-1">Focus</p>
                            <p class="text-base md:text-[1.25rem] font-semibold text-gray-700 tracking-tight leading-tight">Full Stack, AI, Robotics</p>
                        </div>
                    </div>
                    <a href="{{ url('/experience') }}" class="group flex items-start gap-4 md:gap-5 p-4 md:p-6 transition-all duration-200 ease-out bg-emerald-50/50 hover:bg-emerald-50 border-l-2 md:border-l-0 border-emerald-500/80 no-underline">
                        <div class="flex-shrink-0 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white border border-emerald-200 flex items-center justify-center transition-all duration-200 ease-out group-hover:border-[#16A34A] group-hover:text-[#16A34A]">
                            <svg class="w-4 h-4 md:w-5 md:h-5 text-[#16A34A] transition-colors duration-200" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.25h15.75c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H4.125c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z"></path>
</svg>
                        </div>
                        <div class="min-w-0">
                            <p class="text-[0.5625rem] font-semibold tracking-[0.15em] uppercase text-[#16A34A] mb-1">Get to know him</p>
                            <div class="flex items-center gap-1.5 text-[#16A34A]">
                                <span class="text-xs font-medium transition-all duration-200 group-hover:translate-x-0.5">Explore more</span>
                                <svg class="w-3.5 h-3.5 md:w-4 md:h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
</svg>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="px-8 py-8 md:px-12 md:py-10 border-t border-[#F0F0F0]/60">
                <p class="text-[0.6875rem] font-semibold tracking-[0.2em] uppercase text-[#8E8E93] mb-8">Education Highlights</p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-0">
                    <div class="md:pr-8 md:border-r md:border-[#F0F0F0]/60">
                        <div class="flex items-center gap-2 mb-4">
                            <span class="relative flex h-2.5 w-2.5">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#16A34A] opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-[#16A34A]"></span>
                            </span>
                            <p class="text-[0.625rem] font-semibold tracking-[0.15em] uppercase text-[#8E8E93]">Junior High</p>
                        </div>
                        <p class="text-[0.6875rem] font-semibold tracking-[0.1em] uppercase text-gray-400 mb-2">Rank 1</p>
                        <p class="text-sm font-semibold text-gray-900 mb-3">Top of Class</p>
                        <ul class="space-y-2.5">
                            <li class="flex items-start gap-2.5">
                                <x-icon name="check" class="w-4 h-4 text-[#16A34A] mt-0.5 flex-shrink-0" />
                                <span class="text-sm text-gray-600">Featured in School Poster</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <x-icon name="check" class="w-4 h-4 text-[#16A34A] mt-0.5 flex-shrink-0" />
                                <span class="text-sm text-gray-600">Computer Lab Leader</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <x-icon name="check" class="w-4 h-4 text-[#16A34A] mt-0.5 flex-shrink-0" />
                                <span class="text-sm text-gray-600">PBA All-Star League Jr High — Player of the Game</span>
                            </li>
                        </ul>
                    </div>
                    <div class="md:pl-8 md:pr-8 md:border-x md:border-[#F0F0F0]/60 mt-8 md:mt-0">
                        <div class="flex items-center gap-2 mb-4">
                            <span class="relative flex h-2.5 w-2.5">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#16A34A] opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-[#16A34A]"></span>
                            </span>
                            <p class="text-[0.625rem] font-semibold tracking-[0.15em] uppercase text-[#8E8E93]">Senior High School (STEM)</p>
                        </div>
                        <p class="text-[0.6875rem] font-semibold tracking-[0.1em] uppercase text-gray-900 mb-2">With High Honors</p>
                        <p class="text-sm text-gray-500 leading-relaxed mb-4">Graduated with High Honors under the STEM strand.</p>
                        <ul class="space-y-2.5">
                            <li class="flex items-start gap-2.5">
                                <x-icon name="check" class="w-4 h-4 text-[#16A34A] mt-0.5 flex-shrink-0" />
                                <span class="text-sm text-gray-600">Led development in National Science Technology Expo Team</span>
                            </li>
                        </ul>
                    </div>
                    <div class="md:pl-8 mt-8 md:mt-0">
                        <div class="flex items-center gap-2 mb-4">
                            <span class="relative flex h-2.5 w-2.5">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#16A34A] opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-[#16A34A]"></span>
                            </span>
                            <p class="text-[0.625rem] font-semibold tracking-[0.15em] uppercase text-[#8E8E93]">SHS — Academic High</p>
                        </div>
                        <ul class="space-y-2.5">
                            <li class="flex items-start gap-2.5">
                                <x-icon name="check" class="w-4 h-4 text-[#16A34A] mt-0.5 flex-shrink-0" />
                                <span class="text-sm text-gray-600">99% Work Immersion</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <x-icon name="check" class="w-4 h-4 text-[#16A34A] mt-0.5 flex-shrink-0" />
                                <span class="text-sm text-gray-600">97% Earth Science</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <x-icon name="check" class="w-4 h-4 text-[#16A34A] mt-0.5 flex-shrink-0" />
                                <span class="text-sm text-gray-600">98% Media & Information Literacy</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="px-8 py-8 md:px-12 md:py-10 border-t border-[#F0F0F0]/60">
                <p class="text-[0.6875rem] font-semibold tracking-[0.2em] uppercase text-[#8E8E93] mb-8">Achievements & Recognition</p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
                    <div>
                        <p class="text-[0.5625rem] font-semibold tracking-[0.2em] uppercase text-gray-400 mb-4">Recognition</p>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-2.5">
                                <x-icon name="check" class="w-4 h-4 text-[#16A34A] mt-0.5 flex-shrink-0" />
                                <span class="text-sm text-gray-600">Best Speaker, SHS</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <x-icon name="check" class="w-4 h-4 text-[#16A34A] mt-0.5 flex-shrink-0" />
                                <span class="text-sm text-gray-600">6× Research Defended</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <x-icon name="check" class="w-4 h-4 text-[#16A34A] mt-0.5 flex-shrink-0" />
                                <span class="text-sm text-gray-600">Quezon Best Research Presenter</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <x-icon name="check" class="w-4 h-4 text-[#16A34A] mt-0.5 flex-shrink-0" />
                                <span class="text-sm text-gray-600">National Science Technology Expo Team</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <x-icon name="check" class="w-4 h-4 text-[#16A34A] mt-0.5 flex-shrink-0" />
                                <span class="text-sm text-gray-600">Teachers Council Presenter: AI in Education</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <x-icon name="check" class="w-4 h-4 text-[#16A34A] mt-0.5 flex-shrink-0" />
                                <span class="text-sm text-gray-600">Solo Research: Flood Control</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <x-icon name="check" class="w-4 h-4 text-[#16A34A] mt-0.5 flex-shrink-0" />
                                <span class="text-sm text-gray-600">Sci-Tech Benchmark & Newspaper</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <x-icon name="check" class="w-4 h-4 text-[#16A34A] mt-0.5 flex-shrink-0" />
                                <span class="text-sm text-gray-600">Overall Best Research</span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p class="text-[0.5625rem] font-semibold tracking-[0.2em] uppercase text-gray-400 mb-4">Academic Excellence</p>
                        <ul class="space-y-3">
                            <li class="flex items-center justify-between">
                                <span class="text-sm text-[#8E8E93]">Entrepreneurship</span>
                                <span class="text-sm font-semibold text-black">94%</span>
                            </li>
                            <li class="flex items-center justify-between">
                                <span class="text-sm text-[#8E8E93]">PE and Health</span>
                                <span class="text-sm font-semibold text-black">98%</span>
                            </li>
                            <li class="flex items-center justify-between">
                                <span class="text-sm text-[#8E8E93]">Physics</span>
                                <span class="text-sm font-semibold text-black">96%</span>
                            </li>
                            <li class="flex items-center justify-between">
                                <span class="text-sm text-[#8E8E93]">Chemistry</span>
                                <span class="text-sm font-semibold text-black">96%</span>
                            </li>
                            <li class="flex items-center justify-between">
                                <span class="text-sm text-[#8E8E93]">CPAR</span>
                                <span class="text-sm font-semibold text-black">96%</span>
                            </li>
                            <li class="flex items-center justify-between">
                                <span class="text-sm text-[#8E8E93]">Research</span>
                                <span class="text-sm font-semibold text-black">96%</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="px-8 py-8 md:px-12 md:py-10 border-t border-[#F0F0F0]/60">
                <p class="text-[0.6875rem] font-semibold tracking-[0.2em] uppercase text-[#8E8E93] mb-8">About Me</p>
                <div class="flex flex-col md:flex-row gap-8">
                    <div class="flex-shrink-0 flex justify-center md:justify-start">
                        <div class="relative">
                            <div class="w-[110px] h-[110px] md:w-[130px] md:h-[130px] rounded-full p-[3px] border-2 border-[#16A34A]">
                                <img src="{{ asset('assets/Jerome_Edica.webp') }}" alt="Yora Jihun" class="w-full h-full rounded-full object-cover">
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-base leading-[1.7] text-gray-500 mb-6">Self-taught engineer building elegant systems at the intersection of software, AI, and hardware. From facial recognition platforms to API gateways — a curated view of production-grade projects across Laravel, robotics, and aerospace.</p>
                        <div class="flex flex-wrap gap-2.5">
                            <span class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full border border-[#E5E7EB] bg-white text-xs font-semibold text-gray-600 tracking-wide hover:border-[#16A34A] hover:text-[#16A34A] transition-all duration-200 ease-out cursor-default">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M12 2a7 7 0 00-7 7c0 2.5 1.5 4.5 3 6v2h10v-2c1.5-1.5 3-3.5 3-6a7 7 0 00-7-7z"></path>
    <path stroke-linecap="round" stroke-linejoin="round" d="M9 21h6"></path>
</svg>
                                Problem Solver
                            </span>
                            <span class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full border border-[#E5E7EB] bg-white text-xs font-semibold text-gray-600 tracking-wide hover:border-[#16A34A] hover:text-[#16A34A] transition-all duration-200 ease-out cursor-default">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75"></path>
</svg>
                                System Architect
                            </span>
                            <span class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full border border-[#E5E7EB] bg-white text-xs font-semibold text-gray-600 tracking-wide hover:border-[#16A34A] hover:text-[#16A34A] transition-all duration-200 ease-out cursor-default">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 11.715l.258 1.118-.258-1.118zm0 0L18 13.5l.259-1.785.258 1.118z"></path>
</svg>
                                AI Specialist
                            </span>
                            <span class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full border border-[#E5E7EB] bg-white text-xs font-semibold text-gray-600 tracking-wide hover:border-[#16A34A] hover:text-[#16A34A] transition-all duration-200 ease-out cursor-default">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 9.75c3.535 0 6.837.466 9.75 1.338V15"></path>
</svg>
                                Continuous Learner
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Bottom Information Strip -->
<section class="border-t border-[#E5E7EB]">
    <div class="max-w-[1200px] mx-auto grid grid-cols-2 md:grid-cols-4">
        <div class="p-10 border-r border-[#E5E7EB]">
            <p class="text-[0.6875rem] font-semibold tracking-[0.2em] uppercase text-[#8E8E93] mb-2">Clean Architecture</p>
            <p class="text-[0.9375rem] font-medium text-[#374151] leading-relaxed">Building scalable applications that remain maintainable.</p>
        </div>
        <div class="p-10 border-r border-[#E5E7EB]">
            <p class="text-[0.6875rem] font-semibold tracking-[0.2em] uppercase text-[#8E8E93] mb-2">Performance First</p>
            <p class="text-[0.9375rem] font-medium text-[#374151] leading-relaxed">Optimizing every layer for speed and efficiency.</p>
        </div>
        <div class="p-10 border-r border-[#E5E7EB]">
            <p class="text-[0.6875rem] font-semibold tracking-[0.2em] uppercase text-[#8E8E93] mb-2">Security Focused</p>
            <p class="text-[0.9375rem] font-medium text-[#374151] leading-relaxed">Secure by design using modern best practices.</p>
        </div>
        <div class="p-10">
            <p class="text-[0.6875rem] font-semibold tracking-[0.2em] uppercase text-[#8E8E93] mb-2">Full Stack Experience</p>
            <p class="text-[0.9375rem] font-medium text-[#374151] leading-relaxed">Building modern Laravel applications end-to-end.</p>
        </div>
    </div>
</section>

<!-- Connections -->
<section class="py-24 border-b border-[#EAEAEA]">
    <div class="max-w-[1400px] mx-auto px-6">
        <p class="text-[0.6875rem] font-semibold tracking-[0.2em] uppercase text-[#8E8E93] mb-12">Connections</p>
        <div class="flex items-center justify-between mb-8">
            <h2 class="text-[1.875rem] font-semibold tracking-[-0.02em] text-black">Trusted collaborators &amp; friends</h2>
            <div class="flex items-center gap-3">
                <button id="zoom-in" class="w-8 h-8 flex items-center justify-center rounded-lg border border-[#E5E7EB] bg-white text-gray-600 hover:border-[#16A34A] hover:text-[#16A34A] transition-all duration-200" title="Zoom in">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
                </button>
                <button id="zoom-out" class="w-8 h-8 flex items-center justify-center rounded-lg border border-[#E5E7EB] bg-white text-gray-600 hover:border-[#16A34A] hover:text-[#16A34A] transition-all duration-200" title="Zoom out">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M20 12H4"/></svg>
                </button>
                <button id="fullscreen-btn" class="w-8 h-8 flex items-center justify-center rounded-lg border border-[#E5E7EB] bg-white text-gray-600 hover:border-[#16A34A] hover:text-[#16A34A] transition-all duration-200" title="Fullscreen">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m15 0v4.5m0-4.5h-4.5M3.75 20.25v-4.5m0 4.5h4.5m15 0v-4.5m0 4.5h-4.5"/></svg>
                </button>
            </div>
        </div>
        <div id="network-container" class="relative w-full rounded-2xl border border-[#F0F0F0]/60 bg-white shadow-[0_8px_30px_rgba(0,0,0,0.04)] overflow-hidden md:h-[600px] h-[400px]">
            <svg id="network-svg" class="w-full h-full cursor-grab active:cursor-grabbing" viewBox="0 0 1200 600" preserveAspectRatio="xMidYMid meet">
                <defs>
                    <filter id="node-glow" x="-100%" y="-100%" width="300%" height="300%">
                        <feGaussianBlur stdDeviation="3" result="blur"/>
                        <feMerge>
                            <feMergeNode in="blur"/>
                            <feMergeNode in="SourceGraphic"/>
                        </feMerge>
                    </filter>
                    <filter id="trace-glow" x="-50%" y="-50%" width="200%" height="200%">
                        <feGaussianBlur stdDeviation="1.5" result="blur"/>
                        <feMerge>
                            <feMergeNode in="blur"/>
                            <feMergeNode in="SourceGraphic"/>
                        </feMerge>
                    </filter>
                    <pattern id="circuit-grid" width="50" height="50" patternUnits="userSpaceOnUse">
                        <path d="M 50 0 L 0 0 0 50" fill="none" stroke="#F3F4F6" stroke-width="0.5"/>
                        <circle cx="25" cy="25" r="1" fill="#E5E7EB"/>
                    </pattern>
                    <linearGradient id="trace-gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" stop-color="#16A34A" stop-opacity="0.2"/>
                        <stop offset="100%" stop-color="#16A34A" stop-opacity="0.8"/>
                    </linearGradient>
                    <style>
                        .trace-path {
                            stroke: #E5E7EB;
                            stroke-width: 2;
                            fill: none;
                            opacity: 0.6;
                            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                        }
                        .trace-path.active {
                            stroke: url(#trace-gradient);
                            stroke-width: 3;
                            opacity: 1;
                            filter: url(#trace-glow);
                        }
                        #network-svg .node-group {
                            cursor: pointer;
                        }
                        #network-svg .node-circle-inner {
                            pointer-events: all;
                            cursor: pointer;
                        }
                        #network-svg .node-circle-outer,
                        #network-svg .node-label,
                        #network-svg .node-sublabel {
                            pointer-events: none;
                        }

                        :fullscreen #network-svg .node-group,
                        :fullscreen #network-svg .node-circle-inner,
                        :-webkit-full-screen #network-svg .node-group,
                        :-webkit-full-screen #network-svg .node-circle-inner,
                        html:fullscreen #network-svg .node-group,
                        html:fullscreen #network-svg .node-circle-inner,
                        html:-webkit-full-screen #network-svg .node-group,
                        html:-webkit-full-screen #network-svg .node-circle-inner,
                        body:fullscreen #network-svg .node-group,
                        body:fullscreen #network-svg .node-circle-inner,
                        body:-webkit-full-screen #network-svg .node-group,
                        body:-webkit-full-screen #network-svg .node-circle-inner {
                            cursor: pointer !important;
                        }
                        .node-circle-outer {
                            transition: all 0.3s ease;
                            transform-origin: center;
                            transform-box: fill-box;
                        }
                        .node-circle-inner {
                            transition: all 0.3s ease;
                            transform-origin: center;
                            transform-box: fill-box;
                        }
                        .node-group:hover .node-circle-outer {
                            opacity: 0.3;
                        }
                        .node-group:hover .node-circle-inner {
                            filter: drop-shadow(0 0 8px rgba(255, 255, 255, 0.8));
                        }
                        .node-label {
                            font-family: ui-sans-serif, system-ui, sans-serif;
                            transition: all 0.3s ease;
                        }
                        .node-sublabel {
                            font-family: ui-sans-serif, system-ui, sans-serif;
                            transition: all 0.3s ease;
                        }
                        @keyframes pulse-ring {
                            0% { transform: scale(1); opacity: 0.6; }
                            50% { transform: scale(1.3); opacity: 0; }
                            100% { transform: scale(1); opacity: 0; }
                        }
                        .pulse-ring {
                            animation: pulse-ring 2.5s ease-out infinite;
                            transform-origin: center;
                        }
                        @keyframes data-flow {
                            0% { stroke-dashoffset: 24; }
                            100% { stroke-dashoffset: 0; }
                        }
                        .trace-animated {
                            stroke-dasharray: 12 6;
                            animation: data-flow 1.2s linear infinite;
                        }
                        .tooltip {
                            position: absolute;
                            background: rgba(17, 24, 39, 0.95);
                            color: #F3F4F6;
                            padding: 16px 20px;
                            border-radius: 12px;
                            font-size: 13px;
                            font-family: ui-sans-serif, system-ui, sans-serif;
                            pointer-events: none;
                            opacity: 0;
                            transition: opacity 0.25s ease;
                            z-index: 100;
                            white-space: nowrap;
                            backdrop-filter: blur(12px);
                            border: 1px solid rgba(255, 255, 255, 0.1);
                            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
                            max-width: 260px;
                            white-space: normal;
                        }
                        .tooltip.visible {
                            opacity: 1;
                            pointer-events: all;
                        }
                        .tooltip-title {
                            font-weight: 700;
                            font-size: 14px;
                            margin-bottom: 6px;
                            color: #F9FAFB;
                        }
                        .tooltip-desc {
                            color: #D1D5DB;
                            font-size: 12px;
                            line-height: 1.5;
                        }
                        .tooltip-close {
                            position: absolute;
                            top: 8px;
                            right: 10px;
                            background: none;
                            border: none;
                            color: #9CA3AF;
                            cursor: pointer;
                            font-size: 16px;
                            line-height: 1;
                            padding: 0 4px;
                        }
                        .tooltip-close:hover {
                            color: #F3F4F6;
                        }
                        @media (prefers-reduced-motion: reduce) {
                            .pulse-ring, .trace-animated {
                                animation: none;
                            }
                            .trace-path, .node-group, .node-circle-outer, .node-circle-inner, .node-label, .node-sublabel {
                                transition: none;
                            }
                        }
                        @keyframes marquee {
                            0% { transform: translateX(0); }
                            100% { transform: translateX(-50%); }
                        }
                        .animate-marquee {
                            animation: marquee 40s linear infinite;
                            width: max-content;
                        }
                    </style>
                </defs>

                <!-- Circuit grid background -->
                <rect width="1200" height="600" fill="url(#circuit-grid)" opacity="0.6"/>

                <!-- Connection traces -->
                <g class="traces">
                    <path class="trace-path trace-animated" d="M 600 300 L 600 60"/>
                    <path class="trace-path trace-animated" d="M 600 300 L 673 300 L 673 77"/>
                    <path class="trace-path trace-animated" d="M 600 300 L 737 300 L 737 115"/>
                    <path class="trace-path trace-animated" d="M 600 300 L 794 300 L 794 161"/>
                    <path class="trace-path trace-animated" d="M 600 300 L 828 300 L 828 226"/>
                    <path class="trace-path trace-animated" d="M 600 300 L 840 300"/>
                    <path class="trace-path trace-animated" d="M 600 300 L 828 300 L 828 374"/>
                    <path class="trace-path trace-animated" d="M 600 300 L 794 300 L 794 439"/>
                    <path class="trace-path trace-animated" d="M 600 300 L 737 300 L 737 485"/>
                    <path class="trace-path trace-animated" d="M 600 300 L 673 300 L 673 523"/>
                    <path class="trace-path trace-animated" d="M 600 300 L 600 540"/>
                    <path class="trace-path trace-animated" d="M 600 300 L 527 300 L 527 523"/>
                    <path class="trace-path trace-animated" d="M 600 300 L 463 300 L 463 485"/>
                    <path class="trace-path trace-animated" d="M 600 300 L 406 300 L 406 439"/>
                    <path class="trace-path trace-animated" d="M 600 300 L 372 300 L 372 374"/>
                    <path class="trace-path trace-animated" d="M 600 300 L 360 300"/>
                    <path class="trace-path trace-animated" d="M 600 300 L 372 300 L 372 226"/>
                    <path class="trace-path trace-animated" d="M 600 300 L 406 300 L 406 161"/>
                    <path class="trace-path trace-animated" d="M 600 300 L 463 300 L 463 115"/>
                    <path class="trace-path trace-animated" d="M 600 300 L 527 300 L 527 77"/>
                </g>

                <!-- Central CPU -->
                <g class="cpu-node" filter="url(#node-glow)" style="cursor: default;">
                    <rect x="540" y="240" width="120" height="120" rx="12" fill="#16A34A" opacity="0.08"/>
                    <rect x="550" y="250" width="100" height="100" rx="8" fill="white" stroke="#E5E7EB" stroke-width="2.5"/>
                    <rect x="560" y="260" width="80" height="80" rx="6" fill="url(#trace-gradient)" opacity="0.05"/>
                    <text x="600" y="294" text-anchor="middle" class="node-label" font-size="13" font-weight="700" fill="#16A34A">YORA</text>
                    <text x="600" y="310" text-anchor="middle" class="node-label" font-size="11" font-weight="500" fill="#6B7280">JIHUN</text>
                </g>

                <!-- Partner nodes -->
                <g class="partner-nodes">
                    <g class="node-group" data-name="Maria Santos" data-desc="ABS-CBN - Media and broadcasting">
                        <circle cx="600" cy="60" r="28" fill="#76B900" opacity="0.1" class="node-circle-outer"/>
                        <circle cx="600" cy="60" r="18" fill="white" stroke="#E5E7EB" stroke-width="2" class="node-circle-inner"/>
                        <circle cx="600" cy="60" r="5" fill="#76B900"/>
                        <text x="600" y="42" text-anchor="middle" class="node-label" font-size="10" font-weight="600" fill="#76B900">Maria</text>
                        <text x="600" y="95" text-anchor="middle" class="node-sublabel" font-size="9" fill="#6B7280">ABS-CBN</text>
                    </g>
                    <g class="node-group" data-name="Jose Cruz" data-desc="Globe Telecom - Telecommunications">
                        <circle cx="673" cy="77" r="28" fill="#4285F4" opacity="0.1" class="node-circle-outer"/>
                        <circle cx="673" cy="77" r="18" fill="white" stroke="#E5E7EB" stroke-width="2" class="node-circle-inner"/>
                        <circle cx="673" cy="77" r="5" fill="#4285F4"/>
                        <text x="673" y="59" text-anchor="middle" class="node-label" font-size="10" font-weight="600" fill="#4285F4">Jose</text>
                        <text x="673" y="112" text-anchor="middle" class="node-sublabel" font-size="9" fill="#6B7280">Globe</text>
                    </g>
                    <g class="node-group" data-name="Ana Reyes" data-desc="Jollibee Foods - Fast food industry">
                        <circle cx="737" cy="115" r="28" fill="#00A4EF" opacity="0.1" class="node-circle-outer"/>
                        <circle cx="737" cy="115" r="18" fill="white" stroke="#E5E7EB" stroke-width="2" class="node-circle-inner"/>
                        <circle cx="737" cy="115" r="5" fill="#00A4EF"/>
                        <text x="737" y="97" text-anchor="middle" class="node-label" font-size="10" font-weight="600" fill="#00A4EF">Ana</text>
                        <text x="737" y="150" text-anchor="middle" class="node-sublabel" font-size="9" fill="#6B7280">Jollibee</text>
                    </g>
                    <g class="node-group" data-name="Carlos Garcia" data-desc="SM Investments - Retail and real estate">
                        <circle cx="794" cy="161" r="28" fill="#FF9900" opacity="0.1" class="node-circle-outer"/>
                        <circle cx="794" cy="161" r="18" fill="white" stroke="#E5E7EB" stroke-width="2" class="node-circle-inner"/>
                        <circle cx="794" cy="161" r="5" fill="#FF9900"/>
                        <text x="794" y="143" text-anchor="middle" class="node-label" font-size="10" font-weight="600" fill="#FF9900">Carlos</text>
                        <text x="794" y="196" text-anchor="middle" class="node-sublabel" font-size="9" fill="#6B7280">SM Group</text>
                    </g>
                    <g class="node-group" data-name="Elena Torres" data-desc="Ayala Corporation - Diversified holding">
                        <circle cx="828" cy="226" r="28" fill="#CC0000" opacity="0.1" class="node-circle-outer"/>
                        <circle cx="828" cy="226" r="18" fill="white" stroke="#E5E7EB" stroke-width="2" class="node-circle-inner"/>
                        <circle cx="828" cy="226" r="5" fill="#CC0000"/>
                        <text x="828" y="208" text-anchor="middle" class="node-label" font-size="10" font-weight="600" fill="#CC0000">Elena</text>
                        <text x="828" y="261" text-anchor="middle" class="node-sublabel" font-size="9" fill="#6B7280">Ayala</text>
                    </g>
                    <g class="node-group" data-name="Miguel Flores" data-desc="PLDT - Telecommunications">
                        <circle cx="840" cy="300" r="28" fill="#1428A0" opacity="0.1" class="node-circle-outer"/>
                        <circle cx="840" cy="300" r="18" fill="white" stroke="#E5E7EB" stroke-width="2" class="node-circle-inner"/>
                        <circle cx="840" cy="300" r="5" fill="#1428A0"/>
                        <text x="840" y="282" text-anchor="middle" class="node-label" font-size="10" font-weight="600" fill="#1428A0">Miguel</text>
                        <text x="840" y="335" text-anchor="middle" class="node-sublabel" font-size="9" fill="#6B7280">PLDT</text>
                    </g>
                    <g class="node-group" data-name="Sofia Mendoza" data-desc="BPI - Banking and finance">
                        <circle cx="828" cy="374" r="28" fill="#A31F34" opacity="0.1" class="node-circle-outer"/>
                        <circle cx="828" cy="374" r="18" fill="white" stroke="#E5E7EB" stroke-width="2" class="node-circle-inner"/>
                        <circle cx="828" cy="374" r="5" fill="#A31F34"/>
                        <text x="828" y="356" text-anchor="middle" class="node-label" font-size="10" font-weight="600" fill="#A31F34">Sofia</text>
                        <text x="828" y="409" text-anchor="middle" class="node-sublabel" font-size="9" fill="#6B7280">BPI</text>
                    </g>
                    <g class="node-group" data-name="Daniel Villanueva" data-desc="San Miguel Corp - Conglomerate">
                        <circle cx="794" cy="439" r="28" fill="#8C1515" opacity="0.1" class="node-circle-outer"/>
                        <circle cx="794" cy="439" r="18" fill="white" stroke="#E5E7EB" stroke-width="2" class="node-circle-inner"/>
                        <circle cx="794" cy="439" r="5" fill="#8C1515"/>
                        <text x="794" y="421" text-anchor="middle" class="node-label" font-size="10" font-weight="600" fill="#8C1515">Daniel</text>
                        <text x="794" y="474" text-anchor="middle" class="node-sublabel" font-size="9" fill="#6B7280">San Miguel</text>
                    </g>
                    <g class="node-group" data-name="Isabella Ramos" data-desc="Nestle Philippines - Food and beverage">
                        <circle cx="737" cy="485" r="28" fill="#0038A8" opacity="0.1" class="node-circle-outer"/>
                        <circle cx="737" cy="485" r="18" fill="white" stroke="#E5E7EB" stroke-width="2" class="node-circle-inner"/>
                        <circle cx="737" cy="485" r="5" fill="#0038A8"/>
                        <text x="737" y="467" text-anchor="middle" class="node-label" font-size="10" font-weight="600" fill="#0038A8">Isabella</text>
                        <text x="737" y="520" text-anchor="middle" class="node-sublabel" font-size="9" fill="#6B7280">Nestle</text>
                    </g>
                    <g class="node-group" data-name="Paolo Aguirre" data-desc="Accenture PH - Consulting">
                        <circle cx="673" cy="523" r="28" fill="#CE1126" opacity="0.1" class="node-circle-outer"/>
                        <circle cx="673" cy="523" r="18" fill="white" stroke="#E5E7EB" stroke-width="2" class="node-circle-inner"/>
                        <circle cx="673" cy="523" r="5" fill="#CE1126"/>
                        <text x="673" y="505" text-anchor="middle" class="node-label" font-size="10" font-weight="600" fill="#CE1126">Paolo</text>
                        <text x="673" y="558" text-anchor="middle" class="node-sublabel" font-size="9" fill="#6B7280">Accenture</text>
                    </g>
                    <g class="node-group" data-name="Catherine Lim" data-desc="Convergent Tech - Technology solutions">
                        <circle cx="600" cy="540" r="28" fill="#86BC25" opacity="0.1" class="node-circle-outer"/>
                        <circle cx="600" cy="540" r="18" fill="white" stroke="#E5E7EB" stroke-width="2" class="node-circle-inner"/>
                        <circle cx="600" cy="540" r="5" fill="#86BC25"/>
                        <text x="600" y="522" text-anchor="middle" class="node-label" font-size="10" font-weight="600" fill="#86BC25">Catherine</text>
                        <text x="600" y="575" text-anchor="middle" class="node-sublabel" font-size="9" fill="#6B7280">Convergent</text>
                    </g>
                    <g class="node-group" data-name="Rafael Ong" data-desc="Telstra PH - Telecommunications">
                        <circle cx="527" cy="523" r="28" fill="#D85C00" opacity="0.1" class="node-circle-outer"/>
                        <circle cx="527" cy="523" r="18" fill="white" stroke="#E5E7EB" stroke-width="2" class="node-circle-inner"/>
                        <circle cx="527" cy="523" r="5" fill="#D85C00"/>
                        <text x="527" y="505" text-anchor="middle" class="node-label" font-size="10" font-weight="600" fill="#D85C00">Rafael</text>
                        <text x="527" y="558" text-anchor="middle" class="node-sublabel" font-size="9" fill="#6B7280">Telstra</text>
                    </g>
                    <g class="node-group" data-name="Grace Uy" data-desc="DITO Telecommunity - Telecom">
                        <circle cx="463" cy="485" r="28" fill="#7B1FA2" opacity="0.1" class="node-circle-outer"/>
                        <circle cx="463" cy="485" r="18" fill="white" stroke="#E5E7EB" stroke-width="2" class="node-circle-inner"/>
                        <circle cx="463" cy="485" r="5" fill="#7B1FA2"/>
                        <text x="463" y="467" text-anchor="middle" class="node-label" font-size="10" font-weight="600" fill="#7B1FA2">Grace</text>
                        <text x="463" y="520" text-anchor="middle" class="node-sublabel" font-size="9" fill="#6B7280">DITO</text>
                    </g>
                    <g class="node-group" data-name="Antonio Co" data-desc="UnionBank - Digital banking">
                        <circle cx="406" cy="439" r="28" fill="#00838F" opacity="0.1" class="node-circle-outer"/>
                        <circle cx="406" cy="439" r="18" fill="white" stroke="#E5E7EB" stroke-width="2" class="node-circle-inner"/>
                        <circle cx="406" cy="439" r="5" fill="#00838F"/>
                        <text x="406" y="421" text-anchor="middle" class="node-label" font-size="10" font-weight="600" fill="#00838F">Antonio</text>
                        <text x="406" y="474" text-anchor="middle" class="node-sublabel" font-size="9" fill="#6B7280">UnionBank</text>
                    </g>
                    <g class="node-group" data-name="Liza Chua" data-desc="Robinsons Retail - E-commerce">
                        <circle cx="372" cy="374" r="28" fill="#F4B400" opacity="0.1" class="node-circle-outer"/>
                        <circle cx="372" cy="374" r="18" fill="white" stroke="#E5E7EB" stroke-width="2" class="node-circle-inner"/>
                        <circle cx="372" cy="374" r="5" fill="#F4B400"/>
                        <text x="372" y="356" text-anchor="middle" class="node-label" font-size="10" font-weight="600" fill="#F4B400">Liza</text>
                        <text x="372" y="409" text-anchor="middle" class="node-sublabel" font-size="9" fill="#6B7280">Robinsons</text>
                    </g>
                    <g class="node-group" data-name="Benito Sy" data-desc="Chinabank - Banking services">
                        <circle cx="360" cy="300" r="28" fill="#C2185B" opacity="0.1" class="node-circle-outer"/>
                        <circle cx="360" cy="300" r="18" fill="white" stroke="#E5E7EB" stroke-width="2" class="node-circle-inner"/>
                        <circle cx="360" cy="300" r="5" fill="#C2185B"/>
                        <text x="360" y="282" text-anchor="middle" class="node-label" font-size="10" font-weight="600" fill="#C2185B">Benito</text>
                        <text x="360" y="335" text-anchor="middle" class="node-sublabel" font-size="9" fill="#6B7280">Chinabank</text>
                    </g>
                    <g class="node-group" data-name="Patricia Go" data-desc="Pilipinas Shell - Energy sector">
                        <circle cx="372" cy="226" r="28" fill="#4CAF50" opacity="0.1" class="node-circle-outer"/>
                        <circle cx="372" cy="226" r="18" fill="white" stroke="#E5E7EB" stroke-width="2" class="node-circle-inner"/>
                        <circle cx="372" cy="226" r="5" fill="#4CAF50"/>
                        <text x="372" y="208" text-anchor="middle" class="node-label" font-size="10" font-weight="600" fill="#4CAF50">Patricia</text>
                        <text x="372" y="261" text-anchor="middle" class="node-sublabel" font-size="9" fill="#6B7280">Shell PH</text>
                    </g>
                    <g class="node-group" data-name="Samuel Dy" data-desc="Monde Nissin - Food manufacturing">
                        <circle cx="406" cy="161" r="28" fill="#FF6D00" opacity="0.1" class="node-circle-outer"/>
                        <circle cx="406" cy="161" r="18" fill="white" stroke="#E5E7EB" stroke-width="2" class="node-circle-inner"/>
                        <circle cx="406" cy="161" r="5" fill="#FF6D00"/>
                        <text x="406" y="143" text-anchor="middle" class="node-label" font-size="10" font-weight="600" fill="#FF6D00">Samuel</text>
                        <text x="406" y="196" text-anchor="middle" class="node-sublabel" font-size="9" fill="#6B7280">Monde</text>
                    </g>
                    <g class="node-group" data-name="Jessica Tan" data-desc="BDO Unibank - Financial services">
                        <circle cx="463" cy="115" r="28" fill="#5C6BC0" opacity="0.1" class="node-circle-outer"/>
                        <circle cx="463" cy="115" r="18" fill="white" stroke="#E5E7EB" stroke-width="2" class="node-circle-inner"/>
                        <circle cx="463" cy="115" r="5" fill="#5C6BC0"/>
                        <text x="463" y="97" text-anchor="middle" class="node-label" font-size="10" font-weight="600" fill="#5C6BC0">Jessica</text>
                        <text x="463" y="150" text-anchor="middle" class="node-sublabel" font-size="9" fill="#6B7280">BDO</text>
                    </g>
                    <g class="node-group" data-name="Victor Sia" data-desc="Cal-Comp Tech - Electronics">
                        <circle cx="527" cy="77" r="28" fill="#26A69A" opacity="0.1" class="node-circle-outer"/>
                        <circle cx="527" cy="77" r="18" fill="white" stroke="#E5E7EB" stroke-width="2" class="node-circle-inner"/>
                        <circle cx="527" cy="77" r="5" fill="#26A69A"/>
                        <text x="527" y="59" text-anchor="middle" class="node-label" font-size="10" font-weight="600" fill="#26A69A">Victor</text>
                        <text x="527" y="112" text-anchor="middle" class="node-sublabel" font-size="9" fill="#6B7280">Cal-Comp</text>
                    </g>
                </g>
            </svg>
            <div id="tooltip" class="tooltip">
                <button class="tooltip-close" id="tooltip-close">&times;</button>
                <div class="tooltip-title"></div>
                <div class="tooltip-desc"></div>
            </div>
        </div>
    </div>
</section>

<script>
    (function() {
        const container = document.getElementById('network-container');
        const svg = document.getElementById('network-svg');
        const tooltip = document.getElementById('tooltip');
        const zoomInBtn = document.getElementById('zoom-in');
        const zoomOutBtn = document.getElementById('zoom-out');
        const fullscreenBtn = document.getElementById('fullscreen-btn');

        if (!container || !svg) return;

        const isMobile = window.innerWidth < 768;
        let scale = isMobile ? 5 : 1;
        let pointX = 0;
        let pointY = 0;
        let isPanning = false;
        let startX = 0;
        let startY = 0;
        let touchStartX = 0;
        let touchStartY = 0;
        let hasMoved = false;
        let initialPinchDistance = 0;
        let initialScale = 1;

        function updateTransform() {
            svg.style.transform = `scale(${scale}) translate(${pointX}px, ${pointY}px)`;
            svg.style.transformOrigin = 'center center';
        }

        function setZoom(newScale) {
            const maxZoom = isMobile ? 6 : 3;
            scale = Math.min(Math.max(newScale, 0.5), maxZoom);
            updateTransform();
        }

        zoomInBtn.addEventListener('click', () => setZoom(scale + 0.25));
        zoomOutBtn.addEventListener('click', () => setZoom(scale - 0.25));

        fullscreenBtn.addEventListener('click', () => {
            if (document.fullscreenElement) {
                document.exitFullscreen();
            } else {
                container.requestFullscreen();
            }
        });

        svg.addEventListener('wheel', (e) => {
            e.preventDefault();
            const delta = e.deltaY > 0 ? -0.1 : 0.1;
            setZoom(scale + delta);
        }, { passive: false });

        svg.addEventListener('mousedown', (e) => {
            isPanning = true;
            startX = e.clientX - pointX;
            startY = e.clientY - pointY;
            svg.style.cursor = 'grabbing';
        });

        svg.addEventListener('mousemove', (e) => {
            if (isPanning) {
                pointX = e.clientX - startX;
                pointY = e.clientY - startY;
                updateTransform();
            }
        });

        svg.addEventListener('mouseup', () => {
            isPanning = false;
            svg.style.cursor = 'grab';
        });

        svg.addEventListener('mouseleave', () => {
            isPanning = false;
            svg.style.cursor = 'grab';
        });

        svg.addEventListener('touchstart', (e) => {
            if (e.touches.length === 2) {
                initialPinchDistance = Math.hypot(
                    e.touches[0].clientX - e.touches[1].clientX,
                    e.touches[0].clientY - e.touches[1].clientY
                );
                initialScale = scale;
            } else if (e.touches.length === 1) {
                isPanning = true;
                startX = e.touches[0].clientX - pointX;
                startY = e.touches[0].clientY - pointY;
                touchStartX = e.touches[0].clientX;
                touchStartY = e.touches[0].clientY;
                hasMoved = false;
            }
        }, { passive: true });

        svg.addEventListener('touchmove', (e) => {
            if (e.touches.length === 2) {
                e.preventDefault();
                const currentDistance = Math.hypot(
                    e.touches[0].clientX - e.touches[1].clientX,
                    e.touches[0].clientY - e.touches[1].clientY
                );
                const newScale = initialScale * (currentDistance / initialPinchDistance);
                setZoom(newScale);
            } else if (isPanning && e.touches.length === 1) {
                const dx = e.touches[0].clientX - touchStartX;
                const dy = e.touches[0].clientY - touchStartY;

                if (!hasMoved && (Math.abs(dx) > 5 || Math.abs(dy) > 5)) {
                    hasMoved = true;
                }

                if (hasMoved) {
                    e.preventDefault();
                    pointX = e.touches[0].clientX - startX;
                    pointY = e.touches[0].clientY - startY;
                    updateTransform();
                }
            }
        }, { passive: false });

        svg.addEventListener('touchend', () => {
            isPanning = false;
            hasMoved = false;
        });

        svg.addEventListener('touchcancel', () => {
            isPanning = false;
            hasMoved = false;
        });

        const nodes = document.querySelectorAll('.node-circle-inner');
        const traces = document.querySelectorAll('.trace-path');
        const tooltipTitle = tooltip.querySelector('.tooltip-title');
        const tooltipDesc = tooltip.querySelector('.tooltip-desc');
        let activeNode = null;

        function positionTooltip(circle) {
            const rect = circle.getBoundingClientRect();
            const containerRect = container.getBoundingClientRect();
            const cx = rect.left + rect.width / 2 - containerRect.left;
            const cy = rect.top - containerRect.top;
            tooltip.style.left = cx + 'px';
            tooltip.style.top = (cy - 10) + 'px';
            tooltip.style.transform = 'translate(-50%, -100%)';
        }

        nodes.forEach((circle, index) => {
            const nodeGroup = circle.closest('.node-group');
            circle.addEventListener('click', (e) => {
                e.stopPropagation();
                if (activeNode === nodeGroup) {
                    tooltip.classList.remove('visible');
                    if (traces[index]) traces[index].classList.remove('active');
                    activeNode = null;
                    return;
                }
                if (activeNode) {
                    const prevIndex = Array.from(nodes).indexOf(activeNode.querySelector('.node-circle-inner'));
                    if (traces[prevIndex]) traces[prevIndex].classList.remove('active');
                }
                const name = nodeGroup.getAttribute('data-name');
                const desc = nodeGroup.getAttribute('data-desc');
                tooltipTitle.textContent = name;
                tooltipDesc.textContent = desc;
                positionTooltip(circle);
                tooltip.classList.add('visible');
                if (traces[index]) traces[index].classList.add('active');
                activeNode = nodeGroup;
            });
        });

        document.addEventListener('click', (e) => {
            if (!tooltip.contains(e.target) && !e.target.closest('.node-circle-inner')) {
                tooltip.classList.remove('visible');
                if (activeNode) {
                    const idx = Array.from(nodes).indexOf(activeNode.querySelector('.node-circle-inner'));
                    if (traces[idx]) traces[idx].classList.remove('active');
                    activeNode = null;
                }
            }
        });

        document.getElementById('tooltip-close').addEventListener('click', () => {
            tooltip.classList.remove('visible');
            if (activeNode) {
                const idx = Array.from(nodes).indexOf(activeNode.querySelector('.node-circle-inner'));
                if (traces[idx]) traces[idx].classList.remove('active');
                activeNode = null;
            }
        });
    })();
</script>

<!-- Featured Blog -->
@if($featuredPosts->count() > 0)
<section class="py-24 border-b border-[#EAEAEA]">
    <div class="max-w-[1200px] mx-auto px-6">
        <p class="text-[0.6875rem] font-semibold tracking-[0.2em] uppercase text-[#8E8E93] mb-12">Featured Writing</p>
        <h2 class="text-[1.875rem] font-semibold tracking-[-0.02em] text-black mb-10">From the blog</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($featuredPosts as $post)
                <a href="{{ url('/blog/' . $post->slug) }}" class="group block">
                    <div class="w-full aspect-[16/9] bg-[#F3F4F6] rounded-2xl overflow-hidden flex items-center justify-center mb-5">
                        @if($post->cover_image)
                            <img src="{{ asset('storage/' . $post->cover_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                        @else
                            <span class="text-[0.625rem] font-semibold tracking-[0.05em] uppercase text-[#9CA3AF]">Image</span>
                        @endif
                    </div>
                    <div class="flex items-center gap-2 mb-3">
                        <p class="text-[0.6875rem] font-medium tracking-[0.1em] uppercase text-[#16A34A]">{{ $post->category }}</p>
                        <span class="text-[#EAEAEA]">·</span>
                        <p class="text-[0.6875rem] font-medium text-[#8E8E93]">{{ $post->read_time }} min read</p>
                        <span class="text-[#EAEAEA]">·</span>
                        <p class="text-[0.6875rem] font-medium text-[#8E8E93]">{{ format_post_date($post->published_at) }}</p>
                    </div>
                    <h3 class="text-base font-semibold tracking-[-0.01em] text-black mb-2 leading-[1.4] group-hover:text-[#16A34A] transition-colors duration-300">{{ $post->title }}</h3>
                    <p class="text-sm text-gray-500 leading-relaxed mb-4">{{ str($post->excerpt)->limit(120) }}</p>
                    <div class="flex items-center text-[#16A34A] text-sm font-medium opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300 ease-out">
                        Read article <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Published Books -->
<section class="py-24 border-b border-[#EAEAEA]">
    <div class="max-w-[960px] mx-auto px-6">
        <p class="text-[0.6875rem] font-semibold tracking-[0.2em] uppercase text-[#8E8E93] mb-12">Published Work</p>
        <h2 class="text-[1.875rem] font-semibold tracking-[-0.02em] text-black mb-10">Books</h2>
        <div class="border-t border-[#EAEAEA]">
            <a href="#" onclick="openBookModal('The Quiet Interface', 'https://example.com/books/quiet-interface.pdf'); return false;" class="group flex items-start gap-6 py-8 border-b border-[#EAEAEA] no-underline hover:bg-[#FAFAFA] transition-all duration-300">
                <div class="w-20 h-28 bg-[#F3F4F6] border border-[#EAEAEA] flex-shrink-0 flex items-center justify-center shadow-sm group-hover:shadow-md group-hover:border-[#16A34A]/20 transition-all duration-300 relative overflow-hidden">
                    <span class="text-[0.625rem] font-semibold tracking-[0.05em] uppercase text-[#9CA3AF] relative z-10">Cover</span>
                    <div class="absolute inset-0 bg-gradient-to-br from-transparent to-[#16A34A]/0 group-hover:to-[#16A34A]/5 transition-all duration-300"></div>
                </div>
                <div class="flex-1 pt-1">
                    <h3 class="text-xl font-semibold tracking-[-0.01em] text-black mb-2 group-hover:text-[#16A34A] transition-colors duration-300">The Quiet Interface</h3>
                    <p class="text-sm text-[#8E8E93] mb-3">2025 · Design Philosophy</p>
                    <p class="text-sm text-gray-500 leading-relaxed mb-4">In a world of noisy products, the quietest interfaces often feel the most premium. Here's why restraint is a feature, not a compromise.</p>
                    <div class="flex items-center text-[#16A34A] text-sm font-medium opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300 ease-out">
                        View book
                        <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </div>
                </div>
            </a>
            <a href="#" onclick="openBookModal('Structured Thought', 'https://example.com/books/structured-thought.pdf'); return false;" class="group flex items-start gap-6 py-8 border-b border-[#EAEAEA] no-underline hover:bg-[#FAFAFA] transition-all duration-300">
                <div class="w-20 h-28 bg-[#F3F4F6] border border-[#EAEAEA] flex-shrink-0 flex items-center justify-center shadow-sm group-hover:shadow-md group-hover:border-[#16A34A]/20 transition-all duration-300 relative overflow-hidden">
                    <span class="text-[0.625rem] font-semibold tracking-[0.05em] uppercase text-[#9CA3AF] relative z-10">Cover</span>
                    <div class="absolute inset-0 bg-gradient-to-br from-transparent to-[#16A34A]/0 group-hover:to-[#16A34A]/5 transition-all duration-300"></div>
                </div>
                <div class="flex-1 pt-1">
                    <h3 class="text-xl font-semibold tracking-[-0.01em] text-black mb-2 group-hover:text-[#16A34A] transition-colors duration-300">Structured Thought</h3>
                    <p class="text-sm text-[#8E8E93] mb-3">2023 · Systems Design</p>
                    <p class="text-sm text-gray-500 leading-relaxed mb-4">How to build and maintain large-scale design systems without losing creative flexibility.</p>
                    <div class="flex items-center text-[#16A34A] text-sm font-medium opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300 ease-out">
                        View book
                        <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </div>
                </div>
            </a>
            <a href="#" onclick="openBookModal('Letters to a Junior Designer', 'https://example.com/books/letters-junior-designer.pdf'); return false;" class="group flex items-start gap-6 py-8 border-b border-[#EAEAEA] no-underline hover:bg-[#FAFAFA] transition-all duration-300">
                <div class="w-20 h-28 bg-[#F3F4F6] border border-[#EAEAEA] flex-shrink-0 flex items-center justify-center shadow-sm group-hover:shadow-md group-hover:border-[#16A34A]/20 transition-all duration-300 relative overflow-hidden">
                    <span class="text-[0.625rem] font-semibold tracking-[0.05em] uppercase text-[#9CA3AF] relative z-10">Cover</span>
                    <div class="absolute inset-0 bg-gradient-to-br from-transparent to-[#16A34A]/0 group-hover:to-[#16A34A]/5 transition-all duration-300"></div>
                </div>
                <div class="flex-1 pt-1">
                    <h3 class="text-xl font-semibold tracking-[-0.01em] text-black mb-2 group-hover:text-[#16A34A] transition-colors duration-300">Letters to a Junior Designer</h3>
                    <p class="text-sm text-[#8E8E93] mb-3">2021 · Career & Craft</p>
                    <p class="text-sm text-gray-500 leading-relaxed mb-4">Practical advice and hard-won lessons for designers navigating their first years in the industry.</p>
                    <div class="flex items-center text-[#16A34A] text-sm font-medium opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300 ease-out">
                        View book
                        <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-24 border-b border-[#EAEAEA] overflow-hidden">
    <div class="max-w-[1200px] mx-auto px-6 mb-12">
        <p class="text-[0.6875rem] font-semibold tracking-[0.2em] uppercase text-[#8E8E93] mb-4">Testimonials</p>
        <h2 class="text-[1.875rem] font-semibold tracking-[-0.02em] text-black">What people say</h2>
    </div>
    <div class="relative">
        <div class="flex gap-6 animate-marquee hover:[animation-play-state:paused]">
            <div class="w-[300px] p-6 rounded-xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 hover:shadow-sm transition-all duration-300 flex flex-col">
                <div class="flex items-center gap-1 mb-4 text-[#16A34A]">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4.995v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4.994v10h-9.994z"></path></svg>
                </div>
                <p class="text-[0.8125rem] text-gray-600 leading-[1.7] mb-5 italic">"Yora's ability to translate complex requirements into elegant, scalable systems is unmatched. Working with them elevated our entire product. The attention to detail and architectural foresight made all the difference."</p>
                <div class="flex items-center gap-3 pt-4 border-t border-[#EAEAEA] mt-auto">
                    <img src="{{ asset('assets/Jerome_Edica.webp') }}" alt="Yora Jihun" class="w-8 h-8 rounded-full object-cover ring-1 ring-gray-100">
                    <div>
                        <p class="text-sm font-semibold text-black tracking-[-0.01em]">Anna Santos</p>
                        <p class="text-[0.6875rem] text-[#8E8E93] mt-0.5">CTO, TechVentures Inc.</p>
                    </div>
                </div>
            </div>
            <div class="w-[300px] p-6 rounded-xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 hover:shadow-sm transition-all duration-300 flex flex-col">
                <div class="flex items-center gap-1 mb-4 text-[#16A34A]">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4.995v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4.994v10h-9.994z"></path></svg>
                </div>
                <p class="text-[0.8125rem] text-gray-600 leading-[1.7] mb-5 italic">"An exceptional engineer who brings both technical depth and design sensibility. Every collaboration has been outstanding. Yora consistently finds elegant solutions to hard problems."</p>
                <div class="flex items-center gap-3 pt-4 border-t border-[#EAEAEA] mt-auto">
                    <img src="{{ asset('assets/Jerome_Edica.webp') }}" alt="Yora Jihun" class="w-8 h-8 rounded-full object-cover ring-1 ring-gray-100">
                    <div>
                        <p class="text-sm font-semibold text-black tracking-[-0.01em]">James Cruz</p>
                        <p class="text-[0.6875rem] text-[#8E8E93] mt-0.5">VP Engineering, CloudScale</p>
                    </div>
                </div>
            </div>
            <div class="w-[300px] p-6 rounded-xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 hover:shadow-sm transition-all duration-300 flex flex-col">
                <div class="flex items-center gap-1 mb-4 text-[#16A34A]">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4.995v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4.994v10h-9.994z"></path></svg>
                </div>
                <p class="text-[0.8125rem] text-gray-600 leading-[1.7] mb-5 italic">"Rare combination of systems thinking and creative problem-solving. Yora consistently delivers work that exceeds expectations. Every system they design is built to scale."</p>
                <div class="flex items-center gap-3 pt-4 border-t border-[#EAEAEA] mt-auto">
                    <img src="{{ asset('assets/Jerome_Edica.webp') }}" alt="Yora Jihun" class="w-8 h-8 rounded-full object-cover ring-1 ring-gray-100">
                    <div>
                        <p class="text-sm font-semibold text-black tracking-[-0.01em]">Maria Reyes</p>
                        <p class="text-[0.6875rem] text-[#8E8E93] mt-0.5">Design Director, Studio Nine</p>
                    </div>
                </div>
            </div>
            <div class="w-[300px] p-6 rounded-xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 hover:shadow-sm transition-all duration-300 flex flex-col">
                <div class="flex items-center gap-1 mb-4 text-[#16A34A]">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4.995v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4.994v10h-9.994z"></path></svg>
                </div>
                <p class="text-[0.8125rem] text-gray-600 leading-[1.7] mb-5 italic">"A true partner in innovation. Yora's insights on architecture and AI integration transformed our platform. The way they bridge infrastructure and product is truly rare."</p>
                <div class="flex items-center gap-3 pt-4 border-t border-[#EAEAEA] mt-auto">
                    <img src="{{ asset('assets/Jerome_Edica.webp') }}" alt="Yora Jihun" class="w-8 h-8 rounded-full object-cover ring-1 ring-gray-100">
                    <div>
                        <p class="text-sm font-semibold text-black tracking-[-0.01em]">David Lim</p>
                        <p class="text-[0.6875rem] text-[#8E8E93] mt-0.5">Founder, NextGen Robotics</p>
                    </div>
                </div>
            </div>
            <div class="w-[300px] p-6 rounded-xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 hover:shadow-sm transition-all duration-300 flex flex-col">
                <div class="flex items-center gap-1 mb-4 text-[#16A34A]">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4.995v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4.994v10h-9.994z"></path></svg>
                </div>
                <p class="text-[0.8125rem] text-gray-600 leading-[1.7] mb-5 italic">"Working with Yora was a game-changer. Their expertise in Laravel and AI helped us ship features in record time. The quality and speed were unlike anything we had experienced before."</p>
                <div class="flex items-center gap-3 pt-4 border-t border-[#EAEAEA] mt-auto">
                    <img src="{{ asset('assets/Jerome_Edica.webp') }}" alt="Yora Jihun" class="w-8 h-8 rounded-full object-cover ring-1 ring-gray-100">
                    <div>
                        <p class="text-sm font-semibold text-black tracking-[-0.01em]">Sarah Park</p>
                        <p class="text-[0.6875rem] text-[#8E8E93] mt-0.5">PM, Enterprise Solutions</p>
                    </div>
                </div>
            </div>
            <div class="w-[300px] p-6 rounded-xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 hover:shadow-sm transition-all duration-300 flex flex-col">
                <div class="flex items-center gap-1 mb-4 text-[#16A34A]">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4.995v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4.994v10h-9.994z"></path></svg>
                </div>
                <p class="text-[0.8125rem] text-gray-600 leading-[1.7] mb-5 italic">"Yora brings a rare blend of engineering rigor and creative vision. Every project touched by their hand turns into something special. I continue to be impressed by their depth of knowledge."</p>
                <div class="flex items-center gap-3 pt-4 border-t border-[#EAEAEA] mt-auto">
                    <img src="{{ asset('assets/Jerome_Edica.webp') }}" alt="Yora Jihun" class="w-8 h-8 rounded-full object-cover ring-1 ring-gray-100">
                    <div>
                        <p class="text-sm font-semibold text-black tracking-[-0.01em]">Robert Kim</p>
                        <p class="text-[0.6875rem] text-[#8E8E93] mt-0.5">CEO, Horizon Labs</p>
                    </div>
                </div>
            </div>
            <div class="w-[300px] p-6 rounded-xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 hover:shadow-sm transition-all duration-300 flex flex-col">
                <div class="flex items-center gap-1 mb-4 text-[#16A34A]">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4.995v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4.994v10h-9.994z"></path></svg>
                </div>
                <p class="text-[0.8125rem] text-gray-600 leading-[1.7] mb-5 italic">"Yora's ability to translate complex requirements into elegant, scalable systems is unmatched. Working with them elevated our entire product. The attention to detail and architectural foresight made all the difference."</p>
                <div class="flex items-center gap-3 pt-4 border-t border-[#EAEAEA] mt-auto">
                    <img src="{{ asset('assets/Jerome_Edica.webp') }}" alt="Yora Jihun" class="w-8 h-8 rounded-full object-cover ring-1 ring-gray-100">
                    <div>
                        <p class="text-sm font-semibold text-black tracking-[-0.01em]">Anna Santos</p>
                        <p class="text-[0.6875rem] text-[#8E8E93] mt-0.5">CTO, TechVentures Inc.</p>
                    </div>
                </div>
            </div>
            <div class="w-[300px] p-6 rounded-xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 hover:shadow-sm transition-all duration-300 flex flex-col">
                <div class="flex items-center gap-1 mb-4 text-[#16A34A]">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4.995v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4.994v10h-9.994z"></path></svg>
                </div>
                <p class="text-[0.8125rem] text-gray-600 leading-[1.7] mb-5 italic">"An exceptional engineer who brings both technical depth and design sensibility. Every collaboration has been outstanding. Yora consistently finds elegant solutions to hard problems."</p>
                <div class="flex items-center gap-3 pt-4 border-t border-[#EAEAEA] mt-auto">
                    <img src="{{ asset('assets/Jerome_Edica.webp') }}" alt="Yora Jihun" class="w-8 h-8 rounded-full object-cover ring-1 ring-gray-100">
                    <div>
                        <p class="text-sm font-semibold text-black tracking-[-0.01em]">James Cruz</p>
                        <p class="text-[0.6875rem] text-[#8E8E93] mt-0.5">VP Engineering, CloudScale</p>
                    </div>
                </div>
            </div>
            <div class="w-[300px] p-6 rounded-xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 hover:shadow-sm transition-all duration-300 flex flex-col">
                <div class="flex items-center gap-1 mb-4 text-[#16A34A]">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4.995v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4.994v10h-9.994z"></path></svg>
                </div>
                <p class="text-[0.8125rem] text-gray-600 leading-[1.7] mb-5 italic">"Rare combination of systems thinking and creative problem-solving. Yora consistently delivers work that exceeds expectations. Every system they design is built to scale."</p>
                <div class="flex items-center gap-3 pt-4 border-t border-[#EAEAEA] mt-auto">
                    <img src="{{ asset('assets/Jerome_Edica.webp') }}" alt="Yora Jihun" class="w-8 h-8 rounded-full object-cover ring-1 ring-gray-100">
                    <div>
                        <p class="text-sm font-semibold text-black tracking-[-0.01em]">Maria Reyes</p>
                        <p class="text-[0.6875rem] text-[#8E8E93] mt-0.5">Design Director, Studio Nine</p>
                    </div>
                </div>
            </div>
            <div class="w-[300px] p-6 rounded-xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 hover:shadow-sm transition-all duration-300 flex flex-col">
                <div class="flex items-center gap-1 mb-4 text-[#16A34A]">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4.995v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4.994v10h-9.994z"></path></svg>
                </div>
                <p class="text-[0.8125rem] text-gray-600 leading-[1.7] mb-5 italic">"A true partner in innovation. Yora's insights on architecture and AI integration transformed our platform. The way they bridge infrastructure and product is truly rare."</p>
                <div class="flex items-center gap-3 pt-4 border-t border-[#EAEAEA] mt-auto">
                    <img src="{{ asset('assets/Jerome_Edica.webp') }}" alt="Yora Jihun" class="w-8 h-8 rounded-full object-cover ring-1 ring-gray-100">
                    <div>
                        <p class="text-sm font-semibold text-black tracking-[-0.01em]">David Lim</p>
                        <p class="text-[0.6875rem] text-[#8E8E93] mt-0.5">Founder, NextGen Robotics</p>
                    </div>
                </div>
            </div>
            <div class="w-[300px] p-6 rounded-xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 hover:shadow-sm transition-all duration-300 flex flex-col">
                <div class="flex items-center gap-1 mb-4 text-[#16A34A]">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4.995v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4.994v10h-9.994z"></path></svg>
                </div>
                <p class="text-[0.8125rem] text-gray-600 leading-[1.7] mb-5 italic">"Working with Yora was a game-changer. Their expertise in Laravel and AI helped us ship features in record time. The quality and speed were unlike anything we had experienced before."</p>
                <div class="flex items-center gap-3 pt-4 border-t border-[#EAEAEA] mt-auto">
                    <img src="{{ asset('assets/Jerome_Edica.webp') }}" alt="Yora Jihun" class="w-8 h-8 rounded-full object-cover ring-1 ring-gray-100">
                    <div>
                        <p class="text-sm font-semibold text-black tracking-[-0.01em]">Sarah Park</p>
                        <p class="text-[0.6875rem] text-[#8E8E93] mt-0.5">PM, Enterprise Solutions</p>
                    </div>
                </div>
            </div>
            <div class="w-[300px] p-6 rounded-xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 hover:shadow-sm transition-all duration-300 flex flex-col">
                <div class="flex items-center gap-1 mb-4 text-[#16A34A]">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4.995v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4.994v10h-9.994z"></path></svg>
                </div>
                <p class="text-[0.8125rem] text-gray-600 leading-[1.7] mb-5 italic">"Yora brings a rare blend of engineering rigor and creative vision. Every project touched by their hand turns into something special. I continue to be impressed by their depth of knowledge."</p>
                <div class="flex items-center gap-3 pt-4 border-t border-[#EAEAEA] mt-auto">
                    <img src="{{ asset('assets/Jerome_Edica.webp') }}" alt="Yora Jihun" class="w-8 h-8 rounded-full object-cover ring-1 ring-gray-100">
                    <div>
                        <p class="text-sm font-semibold text-black tracking-[-0.01em]">Robert Kim</p>
                        <p class="text-[0.6875rem] text-[#8E8E93] mt-0.5">CEO, Horizon Labs</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-24 border-b border-[#EAEAEA]">
    <div class="max-w-[640px] mx-auto px-6 text-center">
        <h2 class="text-[1.875rem] font-semibold tracking-[-0.02em] text-black mb-3">Let's build something refined together.</h2>
        <p class="text-sm text-[#8E8E93] mb-10">Tell me about your project. I usually reply within a day.</p>
        @livewire('contact-form')
    </div>
</section>

<!-- Footer -->
<footer class="bg-white border-t border-[#EAEAEA]">
    <div class="max-w-[1200px] mx-auto px-6">
        <div class="py-16 md:py-24">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 md:gap-8">
                <div class="md:col-span-4 space-y-5">
                    <h2 class="text-[2rem] md:text-[2.5rem] font-black tracking-tighter text-black leading-[0.9]">Yora Jihun</h2>
                    <p class="text-sm text-[#8E8E93] leading-relaxed max-w-xs">Lead System Engineer & AI Specialist building refined, scalable systems from Seoul.</p>
                    <div class="flex items-center gap-2 text-[#16A34A]">
                        <span class="text-[0.5625rem] md:text-[0.6875rem] font-mono tracking-widest">STATUS::ACTIVE</span>
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#16A34A] opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-[#16A34A]"></span>
                        </span>
                    </div>
                </div>
                <div class="md:col-span-4">
                    <p class="text-[0.5625rem] font-semibold tracking-[0.2em] uppercase text-gray-400 mb-5">Navigate</p>
                    <ul class="space-y-3.5">
                        <li><a href="#hero-section" class="text-sm text-[#8E8E93] no-underline hover:text-black transition-colors duration-200">Home</a></li>
                        <li><a href="{{ route('blog') }}" class="text-sm text-[#8E8E93] no-underline hover:text-black transition-colors duration-200">Blog</a></li>
                        <li><a href="{{ route('experience') }}" class="text-sm text-[#8E8E93] no-underline hover:text-black transition-colors duration-200">Experience</a></li>
                        <li><a href="{{ route('skills') }}" class="text-sm text-[#8E8E93] no-underline hover:text-black transition-colors duration-200">Skills</a></li>
                        <li><a href="{{ route('projects') }}" class="text-sm text-[#8E8E93] no-underline hover:text-black transition-colors duration-200">Projects</a></li>
                    </ul>
                </div>
                <div class="md:col-span-4">
                    <p class="text-[0.5625rem] font-semibold tracking-[0.2em] uppercase text-gray-400 mb-5">Social</p>
                    <ul class="space-y-3.5">
                        <li><a href="#" class="text-sm text-[#8E8E93] no-underline hover:text-black transition-colors duration-200">Twitter</a></li>
                        <li><a href="#" class="text-sm text-[#8E8E93] no-underline hover:text-black transition-colors duration-200">GitHub</a></li>
                        <li><a href="#" class="text-sm text-[#8E8E93] no-underline hover:text-black transition-colors duration-200">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="border-t border-[#EAEAEA] py-6 flex flex-col md:flex-row items-center justify-between gap-3">
            <p class="text-xs text-[#8E8E93]">&copy; 2026 Yora Jihun. All rights reserved.</p>
            <p class="text-xs text-[#8E8E93]">Designed & built with precision in Seoul, South Korea.</p>
        </div>
    </div>
</footer>

<div id="book-modal" class="fixed inset-0 z-50 hidden bg-black/70 backdrop-blur-sm items-center justify-center p-4 md:p-8" onclick="closeBookModal(event)">
    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-4xl max-h-[90vh] flex flex-col overflow-hidden" onclick="event.stopPropagation()">
        <div class="flex items-center justify-between px-6 py-4 border-b border-[#EAEAEA]">
            <h3 id="book-modal-title" class="text-lg font-semibold text-black tracking-tight">Book Preview</h3>
            <div class="flex items-center gap-3">
                <a id="book-modal-download" href="#" target="_blank" class="inline-flex items-center gap-2 text-sm font-medium text-[#16A34A] hover:text-emerald-700 transition-colors duration-200 no-underline">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"></path></svg>
                    Download PDF
                </a>
                <button onclick="closeBookModal()" class="text-gray-400 hover:text-black transition-colors duration-200 p-1">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
        </div>
        <div class="flex-1 bg-gray-50 min-h-0">
            <iframe id="book-modal-iframe" src="" class="w-full h-full min-h-[60vh] border-0" frameborder="0"></iframe>
        </div>
    </div>
</div>

<script>
    function openBookModal(title, pdfUrl) {
        const modal = document.getElementById('book-modal');
        const titleEl = document.getElementById('book-modal-title');
        const iframe = document.getElementById('book-modal-iframe');
        const downloadLink = document.getElementById('book-modal-download');

        titleEl.textContent = title;
        iframe.src = pdfUrl;
        downloadLink.href = pdfUrl;

        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    function closeBookModal(event) {
        if (event && event.target !== event.currentTarget) return;
        const modal = document.getElementById('book-modal');
        const iframe = document.getElementById('book-modal-iframe');

        modal.classList.add('hidden');
        modal.classList.remove('flex');
        iframe.src = '';
        document.body.style.overflow = '';
    }

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeBookModal();
        }
    });
</script>

@endsection
