<div class="hidden lg:block">
    <div class="sticky top-24 space-y-8">
        <div class="p-6 rounded-xl border border-[#EAEAEA] bg-white">
            <div class="flex items-center gap-3.5">
                @if($author && $author->avatar)
                    <img src="{{ $author->avatar }}" alt="{{ $author->name }}" class="w-10 h-10 rounded-full object-cover flex-shrink-0 ring-1 ring-gray-100">
                @else
                    <img src="{{ asset('assets/Jerome_Edica.webp') }}" alt="Yora Jihun" class="w-10 h-10 rounded-full object-cover flex-shrink-0 ring-1 ring-gray-100">
                @endif
                <div>
                    <p class="text-sm font-semibold text-black tracking-[-0.01em">{{ $author->name ?? 'Yora Jihun' }}</p>
                    <p class="text-xs text-[#8E8E93] mt-0.5">{{ $author->role ?? 'Lead System Engineer' }}</p>
                </div>
            </div>
        </div>
        <div>
            <p class="text-[0.6875rem] font-semibold tracking-[0.1em] uppercase text-[#8E8E93] mb-3">Table of contents</p>
            <nav id="toc-nav" class="flex flex-col gap-1.5 border-l border-[#EAEAEA] pl-4">
                <a href="#section-1" class="toc-link text-[0.8125rem] text-[#8E8E93] hover:text-black transition-all duration-200 no-underline -ml-4 pl-4 border-l-2 border-transparent">The tension between speed and craft</a>
                <a href="#section-2" class="toc-link text-[0.8125rem] text-[#8E8E93] hover:text-black transition-all duration-200 no-underline -ml-4 pl-4 border-l-2 border-transparent">Practical guardrails</a>
            </nav>
        </div>
    </div>
</div>
