@extends('layouts.app')

@section('content')
<!-- Projects Header -->
<section class="pt-24 pb-20 border-b border-[#EAEAEA] relative overflow-hidden reveal">
    <div class="max-w-[1200px] mx-auto px-6 relative z-10">
        <p class="text-[0.6875rem] font-semibold tracking-[0.2em] uppercase text-[#8E8E93] mb-6">Projects</p>
        <h1 class="text-[3rem] md:text-[3.5rem] font-semibold tracking-[-0.03em] text-black mb-6 leading-[1.1] max-w-[900px]">Selected Work</h1>
        <p class="text-base md:text-lg text-[#8E8E93] max-w-[640px] leading-relaxed">A curated collection of projects spanning fullstack development, AI integration, robotics, and aerospace engineering.</p>
    </div>
    <div class="absolute top-0 left-0 w-20 h-20 border-l-2 border-[#16A34A]/40" style="box-shadow: inset 4px 4px 8px rgba(22,163,74,0.1);"></div>
    <div class="absolute top-0 right-0 w-20 h-20 border-r-2 border-[#16A34A]/40" style="box-shadow: inset -4px 4px 8px rgba(22,163,74,0.1);"></div>
    <div class="absolute bottom-0 left-0 w-20 h-20 border-b-2 border-l-2 border-[#16A34A]/40" style="box-shadow: inset 4px -4px 8px rgba(22,163,74,0.1);"></div>
    <div class="absolute bottom-0 right-0 w-20 h-20 border-b-2 border-r-2 border-[#16A34A]/40" style="box-shadow: inset -4px -4px 8px rgba(22,163,74,0.1);"></div>
    <div class="absolute top-0 left-0 w-2.5 h-2.5 bg-[#16A34A]/50 rounded-full"></div>
    <div class="absolute top-0 right-0 w-2.5 h-2.5 bg-[#16A34A]/50 rounded-full"></div>
    <div class="absolute bottom-0 left-0 w-2.5 h-2.5 bg-[#16A34A]/50 rounded-full"></div>
    <div class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-[#16A34A]/50 rounded-full"></div>
    <div class="absolute top-6 left-6 text-[0.5625rem] font-mono text-[#16A34A]/50 tracking-wider">SEC::02</div>
    <div class="absolute top-6 right-6 text-[0.5625rem] font-mono text-[#16A34A]/50 tracking-wider">SYS::ONLINE</div>
    <div class="absolute bottom-6 left-6 text-[0.5625rem] font-mono text-[#16A34A]/50 tracking-wider">GRID::ACTIVE</div>
    <div class="absolute bottom-6 right-6 text-[0.5625rem] font-mono text-[#16A34A]/50 tracking-wider">NODE::READY</div>
    <div class="absolute top-0 left-0 w-full h-full pointer-events-none" style="background-image: radial-gradient(rgba(22,163,74,0.04) 1px, transparent 1px); background-size: 24px 24px;"></div>
    <div class="absolute top-0 left-0 w-full h-full pointer-events-none opacity-30" style="background: repeating-linear-gradient(0deg, transparent, transparent 2px, rgba(22,163,74,0.02) 2px, rgba(22,163,74,0.02) 4px);"></div>
</section>

<!-- Featured Project -->
<section class="py-24 border-b border-[#EAEAEA] reveal">
    <div class="max-w-[1200px] mx-auto px-6">
        <div class="flex items-center gap-3 mb-10">
            <p class="text-xs font-semibold tracking-[0.1em] uppercase text-[#8E8E93]">Featured Project</p>
            <div class="flex-1 h-px bg-[#EAEAEA]"></div>
        </div>
        <a href="#" class="group block">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
                <div class="lg:col-span-7">
                    <div class="w-full aspect-[16/9] lg:aspect-[16/10] bg-[#F3F4F6] rounded-2xl overflow-hidden flex items-center justify-center">
                        <span class="text-[0.625rem] font-semibold tracking-[0.05em] uppercase text-[#9CA3AF]">Image</span>
                    </div>
                </div>
                <div class="lg:col-span-5 flex flex-col justify-center">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="inline-block text-[0.625rem] font-semibold tracking-[0.08em] uppercase text-[#16A34A] bg-emerald-50 px-2.5 py-1 rounded-full">Featured</span>
                        <span class="text-[#EAEAEA]">·</span>
                        <p class="text-[0.6875rem] font-medium text-[#8E8E93]">2024 — Present</p>
                    </div>
                    <h2 class="text-2xl md:text-[1.875rem] font-semibold tracking-[-0.02em] text-black mb-3 leading-[1.3] group-hover:text-[#16A34A] transition-colors duration-300">Enterprise Laravel Platform</h2>
                    <p class="text-sm text-gray-500 leading-relaxed mb-6">A comprehensive business management platform handling 10k+ daily active users. Features include real-time analytics, AI-powered reporting, and multi-tenant architecture.</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">Laravel</span>
                        <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">Vue.js</span>
                        <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">PostgreSQL</span>
                        <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">Redis</span>
                        <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">AWS</span>
                    </div>
                    <div class="flex items-center text-[#16A34A] text-sm font-medium opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300 ease-out">
                        View case study <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </div>
                </div>
            </div>
        </a>
    </div>
</section>

<!-- All Projects -->
<section class="py-24 reveal">
    <div class="max-w-[1200px] mx-auto px-6">
        <div class="flex items-center justify-between mb-10">
            <h2 class="text-[1.5rem] font-semibold tracking-[-0.02em] text-black">All projects</h2>
            <div class="hidden md:flex items-center gap-1">
                <button class="px-4 py-2 text-sm font-medium text-black bg-gray-100 rounded-lg">All</button>
                <button class="px-4 py-2 text-sm font-medium text-[#8E8E93] hover:text-black transition-colors duration-200">Software</button>
                <button class="px-4 py-2 text-sm font-medium text-[#8E8E93] hover:text-black transition-colors duration-200">AI/ML</button>
                <button class="px-4 py-2 text-sm font-medium text-[#8E8E93] hover:text-black transition-colors duration-200">Robotics</button>
                <button class="px-4 py-2 text-sm font-medium text-[#8E8E93] hover:text-black transition-colors duration-200">Open Source</button>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <a href="#" class="group block">
                <div class="w-full aspect-[16/9] bg-[#F3F4F6] rounded-2xl overflow-hidden flex items-center justify-center mb-5">
                    <span class="text-[0.625rem] font-semibold tracking-[0.05em] uppercase text-[#9CA3AF]">Image</span>
                </div>
                <div class="flex items-center gap-2 mb-3">
                    <p class="text-[0.6875rem] font-medium tracking-[0.1em] uppercase text-[#16A34A]">Software</p>
                    <span class="text-[#EAEAEA]">·</span>
                    <p class="text-[0.6875rem] font-medium text-[#8E8E93]">2024</p>
                </div>
                <h3 class="text-base font-semibold tracking-[-0.01em] text-black mb-2 leading-[1.4] group-hover:text-[#16A34A] transition-colors duration-300">AI-Powered API Gateway</h3>
                <p class="text-sm text-gray-500 leading-relaxed mb-4">Intelligent API gateway with rate limiting, caching, and ML-based anomaly detection. Handles 50k+ requests per minute.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">Laravel</span>
                    <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">Redis</span>
                    <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">Docker</span>
                </div>
            </a>
            <a href="#" class="group block">
                <div class="w-full aspect-[16/9] bg-[#F3F4F6] rounded-2xl overflow-hidden flex items-center justify-center mb-5">
                    <span class="text-[0.625rem] font-semibold tracking-[0.05em] uppercase text-[#9CA3AF]">Image</span>
                </div>
                <div class="flex items-center gap-2 mb-3">
                    <p class="text-[0.6875rem] font-medium tracking-[0.1em] uppercase text-[#16A34A]">AI/ML</p>
                    <span class="text-[#EAEAEA]">·</span>
                    <p class="text-[0.6875rem] font-medium text-[#8E8E93]">2023</p>
                </div>
                <h3 class="text-base font-semibold tracking-[-0.01em] text-black mb-2 leading-[1.4] group-hover:text-[#16A34A] transition-colors duration-300">Facial Recognition System</h3>
                <p class="text-sm text-gray-500 leading-relaxed mb-4">Real-time face detection and recognition system using deep learning. Deployed for access control and attendance tracking.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">Python</span>
                    <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">TensorFlow</span>
                    <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">OpenCV</span>
                </div>
            </a>
            <a href="#" class="group block">
                <div class="w-full aspect-[16/9] bg-[#F3F4F6] rounded-2xl overflow-hidden flex items-center justify-center mb-5">
                    <span class="text-[0.625rem] font-semibold tracking-[0.05em] uppercase text-[#9CA3AF]">Image</span>
                </div>
                <div class="flex items-center gap-2 mb-3">
                    <p class="text-[0.6875rem] font-medium tracking-[0.1em] uppercase text-[#16A34A]">Robotics</p>
                    <span class="text-[#EAEAEA]">·</span>
                    <p class="text-[0.6875rem] font-medium text-[#8E8E93]">2023</p>
                </div>
                <h3 class="text-base font-semibold tracking-[-0.01em] text-black mb-2 leading-[1.4] group-hover:text-[#16A34A] transition-colors duration-300">Autonomous Navigation Robot</h3>
                <p class="text-sm text-gray-500 leading-relaxed mb-4">Mobile robot with SLAM-based mapping and autonomous path planning. Built for warehouse automation research.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">ROS</span>
                    <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">C++</span>
                    <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">Python</span>
                </div>
            </a>
            <a href="#" class="group block">
                <div class="w-full aspect-[16/9] bg-[#F3F4F6] rounded-2xl overflow-hidden flex items-center justify-center mb-5">
                    <span class="text-[0.625rem] font-semibold tracking-[0.05em] uppercase text-[#9CA3AF]">Image</span>
                </div>
                <div class="flex items-center gap-2 mb-3">
                    <p class="text-[0.6875rem] font-medium tracking-[0.1em] uppercase text-[#16A34A]">Open Source</p>
                    <span class="text-[#EAEAEA]">·</span>
                    <p class="text-[0.6875rem] font-medium text-[#8E8E93]">2022 — Present</p>
                </div>
                <h3 class="text-base font-semibold tracking-[-0.01em] text-black mb-2 leading-[1.4] group-hover:text-[#16A34A] transition-colors duration-300">Laravel UI Component Library</h3>
                <p class="text-sm text-gray-500 leading-relaxed mb-4">Popular open-source component library with 500+ GitHub stars. Provides accessible, customizable UI primitives for Laravel apps.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">Laravel</span>
                    <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">Vue.js</span>
                    <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">Tailwind</span>
                </div>
            </a>
            <a href="#" class="group block">
                <div class="w-full aspect-[16/9] bg-[#F3F4F6] rounded-2xl overflow-hidden flex items-center justify-center mb-5">
                    <span class="text-[0.625rem] font-semibold tracking-[0.05em] uppercase text-[#9CA3AF]">Image</span>
                </div>
                <div class="flex items-center gap-2 mb-3">
                    <p class="text-[0.6875rem] font-medium tracking-[0.1em] uppercase text-[#16A34A]">Aerospace</p>
                    <span class="text-[#EAEAEA]">·</span>
                    <p class="text-[0.6875rem] font-medium text-[#8E8E93]">2022</p>
                </div>
                <h3 class="text-base font-semibold tracking-[-0.01em] text-black mb-2 leading-[1.4] group-hover:text-[#16A34A] transition-colors duration-300">Satellite Trajectory Optimizer</h3>
                <p class="text-sm text-gray-500 leading-relaxed mb-4">Algorithm for optimizing satellite deployment trajectories. Reduced fuel consumption by 15% using numerical optimization techniques.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">Python</span>
                    <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">MATLAB</span>
                    <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">Astrodynamics</span>
                </div>
            </a>
            <a href="#" class="group block">
                <div class="w-full aspect-[16/9] bg-[#F3F4F6] rounded-2xl overflow-hidden flex items-center justify-center mb-5">
                    <span class="text-[0.625rem] font-semibold tracking-[0.05em] uppercase text-[#9CA3AF]">Image</span>
                </div>
                <div class="flex items-center gap-2 mb-3">
                    <p class="text-[0.6875rem] font-medium tracking-[0.1em] uppercase text-[#16A34A]">Software</p>
                    <span class="text-[#EAEAEA]">·</span>
                    <p class="text-[0.6875rem] font-medium text-[#8E8E93]">2021</p>
                </div>
                <h3 class="text-base font-semibold tracking-[-0.01em] text-black mb-2 leading-[1.4] group-hover:text-[#16A34A] transition-colors duration-300">E-Commerce Microservices Platform</h3>
                <p class="text-sm text-gray-500 leading-relaxed mb-4">Scalable microservices architecture for high-traffic e-commerce. Processed $2M+ in transactions with 99.9% uptime.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">Laravel</span>
                    <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">Docker</span>
                    <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">AWS</span>
                </div>
            </a>
            <a href="#" class="group block">
                <div class="w-full aspect-[16/9] bg-[#F3F4F6] rounded-2xl overflow-hidden flex items-center justify-center mb-5">
                    <span class="text-[0.625rem] font-semibold tracking-[0.05em] uppercase text-[#9CA3AF]">Image</span>
                </div>
                <div class="flex items-center gap-2 mb-3">
                    <p class="text-[0.6875rem] font-medium tracking-[0.1em] uppercase text-[#16A34A]">AI/ML</p>
                    <span class="text-[#EAEAEA]">·</span>
                    <p class="text-[0.6875rem] font-medium text-[#8E8E93]">2020</p>
                </div>
                <h3 class="text-base font-semibold tracking-[-0.01em] text-black mb-2 leading-[1.4] group-hover:text-[#16A34A] transition-colors duration-300">Predictive Maintenance System</h3>
                <p class="text-sm text-gray-500 leading-relaxed mb-4">ML model for predicting equipment failures in manufacturing. Achieved 92% accuracy using sensor data and time-series analysis.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">Python</span>
                    <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">scikit-learn</span>
                    <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">IoT</span>
                </div>
            </a>
        </div>
    </div>
</section>
@endsection