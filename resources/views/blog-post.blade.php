@extends('layouts.app')

@section('content')
<!-- Reading Progress Bar -->
<livewire:reading-progress-bar />

<!-- Blog Post Header -->
<section class="py-24 border-b border-[#EAEAEA]">
    <div class="max-w-[1200px] mx-auto px-6">
        <a href="{{ url('/blog') }}" class="inline-flex items-center text-sm text-[#8E8E93] hover:text-black transition-colors duration-200 mb-10 no-underline group">
            <svg class="w-4 h-4 mr-2 transition-transform duration-200 group-hover:-translate-x-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"/></svg>
            Back to blog
        </a>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            <div class="lg:col-span-3">
                <div class="lg:sticky lg:top-24">
                    <span class="inline-block text-[0.625rem] font-semibold tracking-[0.08em] uppercase text-[#16A34A] bg-emerald-50 px-2.5 py-1 rounded-full mb-4">Design</span>
                    <div class="flex items-center gap-2 mb-2">
                        <p class="text-sm font-medium text-black">June 2026</p>
                        <span class="text-[#EAEAEA]">·</span>
                        <p class="text-sm text-[#8E8E93]">8 min read</p>
                    </div>
                    <div class="h-px bg-[#EAEAEA] my-6"></div>
                    <p class="text-xs font-semibold tracking-[0.1em] uppercase text-[#8E8E93] mb-4">Share</p>
                    <div class="flex flex-col gap-3">
                        <a href="#" class="inline-flex items-center text-sm text-[#8E8E93] hover:text-black transition-colors duration-200 no-underline">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                            Twitter
                        </a>
                        <a href="#" class="inline-flex items-center text-sm text-[#8E8E93] hover:text-black transition-colors duration-200 no-underline">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            LinkedIn
                        </a>
                        <a href="#" class="inline-flex items-center text-sm text-[#8E8E93] hover:text-black transition-colors duration-200 no-underline">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>
                            Copy link
                        </a>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-6">
                <h1 class="text-[2.5rem] md:text-[3rem] font-semibold tracking-[-0.02em] text-black mb-6 leading-[1.15]">Designing Systems That Scale Without Losing Soul</h1>
                <p class="text-base text-gray-500 leading-relaxed">Most design systems start with the best intentions and end in rigid sprawl. Here's how to build components that give teams speed without sacrificing craft.</p>
            </div>
            <div class="lg:col-span-3">
                <div class="hidden lg:block">
                    <div class="p-6 rounded-2xl border border-[#EAEAEA] bg-white mb-8">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-[#F3F4F6] flex items-center justify-center text-sm font-semibold text-gray-600 flex-shrink-0">YJ</div>
                            <div>
                                <p class="text-sm font-semibold text-black">Yora Jihun</p>
                                <p class="text-xs text-[#8E8E93]">Lead System Engineer</p>
                                <p class="text-xs text-[#8E8E93]">June 15, 2026</p>
                            </div>
                        </div>
                    </div>
                    <p class="text-xs font-semibold tracking-[0.1em] uppercase text-[#8E8E93] mb-4">Table of contents</p>
                    <nav class="flex flex-col gap-1 border-l border-[#EAEAEA] pl-4">
                        <a href="#section-1" class="text-sm text-[#8E8E93] hover:text-black hover:border-l-2 hover:pl-3 hover:border-[#16A34A] transition-all duration-200 no-underline -ml-4 pl-4 border-l-2 border-transparent">The tension between speed and craft</a>
                        <a href="#section-2" class="text-sm text-[#8E8E93] hover:text-black hover:border-l-2 hover:pl-3 hover:border-[#16A34A] transition-all duration-200 no-underline -ml-4 pl-4 border-l-2 border-transparent">Practical guardrails</a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Image -->
<section class="border-b border-[#EAEAEA]">
    <div class="max-w-[1000px] mx-auto px-6">
        <div class="w-full aspect-[16/9] bg-[#F3F4F6] flex items-center justify-center">
            <span class="text-[0.625rem] font-semibold tracking-[0.05em] uppercase text-[#9CA3AF]">Image</span>
        </div>
    </div>
</section>

<!-- Article Content -->
<section class="py-24">
    <div class="max-w-[1200px] mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            <!-- Left Sidebar -->
            <aside class="hidden lg:block lg:col-span-3">
                <div class="sticky top-24">
                    <p class="text-xs font-semibold tracking-[0.1em] uppercase text-[#8E8E93] mb-3">Share</p>
                    <div class="flex flex-col gap-3">
                        <a href="#" class="text-sm text-[#8E8E93] hover:text-black transition-colors duration-200 no-underline">Twitter</a>
                        <a href="#" class="text-sm text-[#8E8E93] hover:text-black transition-colors duration-200 no-underline">LinkedIn</a>
                        <a href="#" class="text-sm text-[#8E8E93] hover:text-black transition-colors duration-200 no-underline">Copy link</a>
                    </div>
                </div>
            </aside>

            <!-- Main Content -->
            <article class="lg:col-span-6">
                <div class="prose prose-gray max-w-none">
                    <p class="text-base text-gray-700 leading-[1.8] mb-6 text-justify">
                        Most design systems start with the best intentions and end in rigid sprawl. You know the pattern: a small team builds something elegant, it gets adopted, and then a dozen product squads start extending it in ways the original authors never imagined. Within a year, the system is a patchwork of overrides, deprecated props, and tribal knowledge.
                    </p>
                    <p class="text-base text-gray-700 leading-[1.8] mb-6 text-justify">
                        The problem isn't scale itself. It's the assumption that consistency means uniformity. Too many systems treat every button, card, and form field as an opportunity to standardize, when the real job of a system is to give designers and developers enough structure to move quickly without painting themselves into corners.
                    </p>
                    <h2 id="section-1" class="text-xl font-semibold text-black mt-12 mb-4">The tension between speed and craft</h2>
                    <p class="text-base text-gray-700 leading-[1.8] mb-6 text-justify">
                        When teams move fast, they reach for abstractions. That's natural. But the best systems I've worked on share a common trait: they distinguish between what must be consistent and what can vary. A design token for color spacing is non-negotiable. A mandatory card layout for every data display is not.
                    </p>
                    <p class="text-base text-gray-700 leading-[1.8] mb-6 text-justify">
                        The art is in knowing where to draw the line. And the only way to learn that line is to build, observe where the system breaks, and then refine. A system that doesn't evolve becomes a museum piece — technically consistent, but useless for real work.
                    </p>
                    <h2 id="section-2" class="text-xl font-semibold text-black mt-12 mb-4">Practical guardrails</h2>
                    <p class="text-base text-gray-700 leading-[1.8] mb-6 text-justify">
                        Start with principles, not patterns. A short, lived document that says "we value accessibility, performance, and clarity" will serve you better than a 200-page pattern library. Principles give people permission to make good decisions; patterns only tell them what to do when the pattern already exists.
                    </p>
                    <p class="text-base text-gray-700 leading-[1.8] mb-6 text-justify">
                        Build for removal, not just addition. Every component, token, and guideline should have an owner and a sunset date. If nobody can tell you why something exists, delete it. The space you create is more valuable than the thing you remove.
                    </p>
                    <blockquote class="border-l-2 border-[#16A34A] pl-6 my-10 text-lg text-gray-800 italic leading-relaxed">
                        "The best design systems are not the ones that control every pixel. They are the ones that disappear, letting teams do their best work without noticing the rails."
                    </blockquote>
                    <p class="text-base text-gray-700 leading-[1.8] mb-6 text-justify">
                        Finally, treat your system as a product. It has users, it has a roadmap, and it needs care. Assign a small, dedicated team to steward it. Open contribution channels. Measure adoption and satisfaction. A design system that isn't maintained will be abandoned, no matter how well it was built.
                    </p>
                </div>

                <div class="mt-16 pt-8 border-t border-[#EAEAEA]">
                    <a href="{{ url('/blog') }}" class="inline-flex items-center text-sm text-[#16A34A] font-medium hover:translate-x-1 transition-transform duration-200 no-underline">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"/></svg>
                        Back to all posts
                    </a>
                </div>
            </article>

            <!-- Right Sidebar -->
            <aside class="hidden lg:block lg:col-span-3">
                <div class="sticky top-24">
                    <div class="p-6 rounded-2xl border border-[#EAEAEA] bg-white">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-12 h-12 rounded-full bg-[#F3F4F6] flex items-center justify-center text-sm font-semibold text-gray-600">YJ</div>
                            <div>
                                <p class="text-sm font-semibold text-black">Yora Jihun</p>
                                <p class="text-xs text-[#8E8E93]">Lead System Engineer</p>
                            </div>
                        </div>
                        <p class="text-sm text-gray-500 leading-relaxed mb-4">Writing about design, engineering, and the craft of building refined digital products.</p>
                        <a href="{{ url('/blog') }}" class="text-sm text-[#16A34A] font-medium no-underline hover:underline">More posts →</a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>
@endsection