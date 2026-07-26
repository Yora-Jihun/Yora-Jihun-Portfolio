@extends('layouts.app')

@section('content')
<!-- Blog Header -->
<section class="pt-24 pb-20 border-b border-[#EAEAEA] relative overflow-hidden">
    <div class="max-w-[1200px] mx-auto px-6 relative z-10">
        <p class="text-[0.6875rem] font-semibold tracking-[0.2em] uppercase text-[#8E8E93] mb-6">Blog</p>
        <h1 class="text-[3rem] md:text-[3.5rem] font-semibold tracking-[-0.03em] text-black mb-6 leading-[1.1] max-w-[900px]">Your Passion Will Lead You to New Discoveries</h1>
        <p class="text-base md:text-lg text-[#8E8E93] max-w-[640px] leading-relaxed">Explore my latest articles, insights, and stories on design, engineering, and the craft of building refined digital products.</p>
    </div>
    <div class="absolute top-0 left-0 w-20 h-20 border-l-2 border-[#16A34A]/40" style="box-shadow: inset 4px 4px 8px rgba(22,163,74,0.1);"></div>
    <div class="absolute top-0 right-0 w-20 h-20 border-r-2 border-[#16A34A]/40" style="box-shadow: inset -4px 4px 8px rgba(22,163,74,0.1);"></div>
    <div class="absolute bottom-0 left-0 w-20 h-20 border-b-2 border-l-2 border-[#16A34A]/40" style="box-shadow: inset 4px -4px 8px rgba(22,163,74,0.1);"></div>
    <div class="absolute bottom-0 right-0 w-20 h-20 border-b-2 border-r-2 border-[#16A34A]/40" style="box-shadow: inset -4px -4px 8px rgba(22,163,74,0.1);"></div>
    <div class="absolute top-0 left-0 w-2.5 h-2.5 bg-[#16A34A]/50 rounded-full"></div>
    <div class="absolute top-0 right-0 w-2.5 h-2.5 bg-[#16A34A]/50 rounded-full"></div>
    <div class="absolute bottom-0 left-0 w-2.5 h-2.5 bg-[#16A34A]/50 rounded-full"></div>
    <div class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-[#16A34A]/50 rounded-full"></div>
    <div class="absolute top-6 left-6 text-[0.5625rem] font-mono text-[#16A34A]/50 tracking-wider">SEC::01</div>
    <div class="absolute top-6 right-6 text-[0.5625rem] font-mono text-[#16A34A]/50 tracking-wider">SYS::ONLINE</div>
    <div class="absolute bottom-6 left-6 text-[0.5625rem] font-mono text-[#16A34A]/50 tracking-wider">GRID::ACTIVE</div>
    <div class="absolute bottom-6 right-6 text-[0.5625rem] font-mono text-[#16A34A]/50 tracking-wider">NODE::READY</div>
    <div class="absolute top-0 left-0 w-full h-full pointer-events-none" style="background-image: radial-gradient(rgba(22,163,74,0.04) 1px, transparent 1px); background-size: 24px 24px;"></div>
    <div class="absolute top-0 left-0 w-full h-full pointer-events-none opacity-30" style="background: repeating-linear-gradient(0deg, transparent, transparent 2px, rgba(22,163,74,0.02) 2px, rgba(22,163,74,0.02) 4px);"></div>
</section>

<!-- Featured Post -->
<section class="py-16 border-b border-[#EAEAEA]">
    <div class="max-w-[1200px] mx-auto px-6">
        <a href="{{ url('/blog/dummy-post') }}" class="group block">
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
                        <p class="text-[0.6875rem] font-medium tracking-[0.1em] uppercase text-[#8E8E93]">June 2026</p>
                        <span class="text-[#EAEAEA]">·</span>
                        <p class="text-[0.6875rem] font-medium text-[#8E8E93]">8 min read</p>
                    </div>
                    <h2 class="text-2xl md:text-[1.875rem] font-semibold tracking-[-0.02em] text-black mb-3 leading-[1.3] group-hover:text-[#16A34A] transition-colors duration-300">Designing Systems That Scale Without Losing Soul</h2>
                    <p class="text-sm text-gray-500 leading-relaxed mb-6">Most design systems start with the best intentions and end in rigid sprawl. Here's how to build components that give teams speed without sacrificing craft.</p>
                    <div class="flex items-center text-[#16A34A] text-sm font-medium opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300 ease-out">
                        Read article <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </div>
                </div>
            </div>
        </a>
    </div>
</section>

<!-- Recent Posts -->
<section class="py-24">
    <div class="max-w-[1200px] mx-auto px-6">
        <div class="flex items-center justify-between mb-10">
            <h2 class="text-[1.5rem] font-semibold tracking-[-0.02em] text-black">Recent posts</h2>
            <div class="hidden md:flex items-center gap-1">
                <button class="px-4 py-2 text-sm font-medium text-black bg-gray-100 rounded-lg">All</button>
                <button class="px-4 py-2 text-sm font-medium text-[#8E8E93] hover:text-black transition-colors duration-200">Design</button>
                <button class="px-4 py-2 text-sm font-medium text-[#8E8E93] hover:text-black transition-colors duration-200">Engineering</button>
                <button class="px-4 py-2 text-sm font-medium text-[#8E8E93] hover:text-black transition-colors duration-200">Career</button>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <a href="{{ url('/blog/dummy-post') }}" class="group block">
                <div class="w-full aspect-[16/9] bg-[#F3F4F6] rounded-2xl overflow-hidden flex items-center justify-center mb-5">
                    <span class="text-[0.625rem] font-semibold tracking-[0.05em] uppercase text-[#9CA3AF]">Image</span>
                </div>
                <div class="flex items-center gap-2 mb-3">
                    <p class="text-[0.6875rem] font-medium tracking-[0.1em] uppercase text-[#16A34A]">Design</p>
                    <span class="text-[#EAEAEA]">·</span>
                    <p class="text-[0.6875rem] font-medium text-[#8E8E93]">6 min read</p>
                </div>
                <h3 class="text-base font-semibold tracking-[-0.01em] text-black mb-2 leading-[1.4] group-hover:text-[#16A34A] transition-colors duration-300">The Case for Restraint in Interface Design</h3>
                <p class="text-sm text-gray-500 leading-relaxed mb-4">Every pixel competes for attention. The strongest interfaces don't add more — they remove everything that doesn't serve the user.</p>
                <div class="flex items-center text-[#16A34A] text-sm font-medium opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300 ease-out">
                    Read article <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </div>
            </a>
            <a href="{{ url('/blog/dummy-post') }}" class="group block">
                <div class="w-full aspect-[16/9] bg-[#F3F4F6] rounded-2xl overflow-hidden flex items-center justify-center mb-5">
                    <span class="text-[0.625rem] font-semibold tracking-[0.05em] uppercase text-[#9CA3AF]">Image</span>
                </div>
                <div class="flex items-center gap-2 mb-3">
                    <p class="text-[0.6875rem] font-medium tracking-[0.1em] uppercase text-[#16A34A]">Engineering</p>
                    <span class="text-[#EAEAEA]">·</span>
                    <p class="text-[0.6875rem] font-medium text-[#8E8E93]">10 min read</p>
                </div>
                <h3 class="text-base font-semibold tracking-[-0.01em] text-black mb-2 leading-[1.4] group-hover:text-[#16A34A] transition-colors duration-300">Typography as Architecture</h3>
                <p class="text-sm text-gray-500 leading-relaxed mb-4">Type isn't just decoration — it's the structure through which users read, scan, and understand. Good typography makes complex information feel simple.</p>
                <div class="flex items-center text-[#16A34A] text-sm font-medium opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300 ease-out">
                    Read article <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </div>
            </a>
            <a href="{{ url('/blog/dummy-post') }}" class="group block">
                <div class="w-full aspect-[16/9] bg-[#F3F4F6] rounded-2xl overflow-hidden flex items-center justify-center mb-5">
                    <span class="text-[0.625rem] font-semibold tracking-[0.05em] uppercase text-[#9CA3AF]">Image</span>
                </div>
                <div class="flex items-center gap-2 mb-3">
                    <p class="text-[0.6875rem] font-medium tracking-[0.1em] uppercase text-[#16A34A]">Career</p>
                    <span class="text-[#EAEAEA]">·</span>
                    <p class="text-[0.6875rem] font-medium text-[#8E8E93]">5 min read</p>
                </div>
                <h3 class="text-base font-semibold tracking-[-0.01em] text-black mb-2 leading-[1.4] group-hover:text-[#16A34A] transition-colors duration-300">On Discipline and Creative Freedom</h3>
                <p class="text-sm text-gray-500 leading-relaxed mb-4">Some of the best work comes from working within tight limits. This is about the creative power of saying no.</p>
                <div class="flex items-center text-[#16A34A] text-sm font-medium opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300 ease-out">
                    Read article <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </div>
            </a>
            <a href="{{ url('/blog/dummy-post') }}" class="group block">
                <div class="w-full aspect-[16/9] bg-[#F3F4F6] rounded-2xl overflow-hidden flex items-center justify-center mb-5">
                    <span class="text-[0.625rem] font-semibold tracking-[0.05em] uppercase text-[#9CA3AF]">Image</span>
                </div>
                <div class="flex items-center gap-2 mb-3">
                    <p class="text-[0.6875rem] font-medium tracking-[0.1em] uppercase text-[#16A34A]">Design</p>
                    <span class="text-[#EAEAEA]">·</span>
                    <p class="text-[0.6875rem] font-medium text-[#8E8E93]">7 min read</p>
                </div>
                <h3 class="text-base font-semibold tracking-[-0.01em] text-black mb-2 leading-[1.4] group-hover:text-[#16A34A] transition-colors duration-300">The Quiet Interface</h3>
                <p class="text-sm text-gray-500 leading-relaxed mb-4">In a world of noisy products, the quietest interfaces often feel the most premium. Here's why restraint is a feature, not a compromise.</p>
                <div class="flex items-center text-[#16A34A] text-sm font-medium opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300 ease-out">
                    Read article <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </div>
            </a>
        </div>
    </div>
</section>
@endsection