<div class="py-8 md:py-12 lg:py-16 border-b border-[#EAEAEA] reveal">
    <div class="max-w-[1200px] mx-auto px-6">
        <a href="{{ url('/blog') }}" class="inline-flex items-center text-sm text-[#8E8E93] hover:text-black transition-all duration-200 mb-6 md:mb-8 no-underline group">
            <svg class="w-4 h-4 mr-2 transition-transform duration-200 group-hover:-translate-x-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"/></svg>
            Back to blog
        </a>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2">
                @include('components.blog-sidebar-left', [
                    'category' => $category ?? null,
                    'read_time' => $read_time ?? null,
                    'published_at' => $published_at ?? null,
                    'author' => $author ?? null
                ])
            </div>
            <div class="lg:col-span-7">
                <h1 class="text-[2rem] md:text-[2.75rem] lg:text-[3.5rem] font-semibold tracking-[-0.03em] text-black mb-4 md:mb-5 leading-[1.1]">{{ $title }}</h1>
                <p class="text-base text-gray-600 leading-relaxed mt-5">{{ $excerpt }}</p>
            </div>
            <div class="lg:col-span-3">
                @include('components.blog-sidebar-right', [
                    'author' => $author ?? null,
                    'published_at' => $published_at ?? null
                ])
            </div>
        </div>
    </div>
</div>
