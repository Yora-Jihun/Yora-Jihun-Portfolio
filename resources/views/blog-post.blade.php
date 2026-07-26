@extends('layouts.app')

@section('content')
<!-- Reading Progress Bar -->
<livewire:reading-progress-bar />

<!-- Blog Post Header -->
@include('components.blog-header', [
    'title' => 'Designing Systems That Scale Without Losing Soul',
    'excerpt' => 'Most design systems start with the best intentions and end in rigid sprawl. Here\'s how to build components that give teams speed without sacrificing craft.'
])

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