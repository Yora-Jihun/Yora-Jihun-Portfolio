<div class="py-24 border-b border-[#EAEAEA]">
    <div class="max-w-[1200px] mx-auto px-6">
        <a href="{{ url('/blog') }}" class="inline-flex items-center text-sm text-[#8E8E93] hover:text-black transition-colors duration-200 mb-10 no-underline group">
            <svg class="w-4 h-4 mr-2 transition-transform duration-200 group-hover:-translate-x-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"/></svg>
            Back to blog
        </a>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            <div class="lg:col-span-3">
                @include('components.blog-sidebar-left')
            </div>
            <div class="lg:col-span-6">
                <h1 class="text-[2.5rem] md:text-[3rem] font-semibold tracking-[-0.02em] text-black mb-6 leading-[1.15]">{{ $title }}</h1>
                <p class="text-base text-gray-500 leading-relaxed">{{ $excerpt }}</p>
            </div>
            <div class="lg:col-span-3">
                @include('components.blog-sidebar-right')
            </div>
        </div>
    </div>
</div>