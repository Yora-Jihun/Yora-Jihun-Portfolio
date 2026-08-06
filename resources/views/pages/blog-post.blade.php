@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/themes/prism-tomorrow.css">
@endpush

@section('progress-bar')
<livewire:reading-progress-bar />
@endsection

@section('content')
<!-- Blog Post Header -->
@include('components.blog-header', [
    'title' => $post->title,
    'excerpt' => $post->excerpt,
    'category' => $post->category,
    'read_time' => $post->read_time,
    'published_at' => $post->published_at,
    'author' => $post->author
])

<!-- Article Content -->
<section class="border-t border-[#EAEAEA] reveal">
    <div class="max-w-[1200px] mx-auto px-6 py-12 md:py-16">
        <article class="max-w-[740px] mx-auto">
            @if($post->cover_image)
                <div class="mb-10">
                    <img src="{{ \Storage::url($post->cover_image) }}" alt="{{ $post->title }}" class="w-full h-auto cursor-pointer" id="cover-image-full">
                </div>
            @endif
            <div class="prose prose-gray max-w-none">
                {!! \Illuminate\Support\Str::markdown($post->body) !!}
            </div>

            <div class="mt-16 pt-8 border-t border-[#EAEAEA]">
                <div class="lg:hidden">
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center gap-3">
                            @if($post->author && $post->author->avatar)
                                <img src="{{ $post->author->avatar }}" alt="{{ $post->author->name }}" class="w-10 h-10 rounded-full object-cover ring-1 ring-gray-100">
                            @else
                                <img src="{{ asset('assets/Jerome_Edica.webp') }}" alt="Yora Jihun" class="w-10 h-10 rounded-full object-cover ring-1 ring-gray-100">
                            @endif
                            <div>
                                <p class="text-sm font-semibold text-black">{{ $post->author->name ?? 'Yora Jihun' }}</p>
                                <p class="text-xs text-[#8E8E93]">{{ format_post_date($post->published_at) }}</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <a href="#" class="text-[#8E8E93] hover:text-black transition-colors duration-200 no-underline">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                            </a>
                            <a href="#" class="text-[#8E8E93] hover:text-black transition-colors duration-200 no-underline">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            </a>
                            <a href="#" class="text-[#8E8E93] hover:text-black transition-colors duration-200 no-underline">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <a href="{{ url('/blog') }}" class="inline-flex items-center text-sm text-[#16A34A] font-medium hover:translate-x-1 transition-transform duration-200 no-underline">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"/></svg>
                    Back to all posts
                </a>
            </div>
        </article>
    </div>
</section>

<div id="image-lightbox" class="fixed inset-0 z-50 hidden bg-black/90 items-center justify-center p-6" onclick="closeLightbox()">
    <img src="" alt="Full view" class="max-w-full max-h-full object-contain" id="lightbox-image" onclick="event.stopPropagation()">
</div>

<script>
    // Reading Progress Bar
    var readingProgressInitialized = false;

    function initReadingProgress() {
        if (readingProgressInitialized) return;
        readingProgressInitialized = true;

        const progressBar = document.getElementById('reading-progress');
        const progressText = document.getElementById('reading-progress-text');
        if (!progressBar || !progressText) {
            readingProgressInitialized = false;
            return;
        }

        let ticking = false;

        function updateProgress() {
            const scrollTop = window.scrollY || document.documentElement.scrollTop;
            const article = document.querySelector('article');
            const viewportHeight = window.innerHeight;

            let progress = 0;

            if (article) {
                // Calculate progress based on the article content
                const articleTop = article.getBoundingClientRect().top + scrollTop;
                const articleBottom = articleTop + article.offsetHeight;
                const articleStart = articleTop - viewportHeight * 0.15; // Start when article enters viewport
                const articleEnd = articleBottom - viewportHeight * 0.85; // End when article bottom is near viewport bottom
                const articleRange = articleEnd - articleStart;

                if (articleRange > 0) {
                    progress = Math.min(100, Math.max(0, ((scrollTop - articleStart) / articleRange) * 100));
                }
            } else {
                // Fallback to full page progress
                const docHeight = document.documentElement.scrollHeight - viewportHeight;
                progress = docHeight > 0 ? Math.min(100, Math.max(0, (scrollTop / docHeight) * 100)) : 0;
            }

            progressBar.style.width = progress + '%';
            progressText.textContent = Math.round(progress) + '%';
            if (progress > 0 && progress < 100) {
                progressText.style.opacity = '1';
            } else {
                progressText.style.opacity = '0';
            }
            ticking = false;
        }

        function requestTick() {
            if (!ticking) {
                ticking = true;
                requestAnimationFrame(updateProgress);
            }
        }

        window.addEventListener('scroll', requestTick, { passive: true });
        window.addEventListener('resize', requestTick, { passive: true });
        updateProgress();
    }

    // Wait for Livewire to initialize and mount components
    document.addEventListener('livewire:init', function() {
        setTimeout(initReadingProgress, 50);
    });

    // Also handle Livewire navigation
    document.addEventListener('livewire:navigated', function() {
        readingProgressInitialized = false;
        setTimeout(initReadingProgress, 50);
    });

    // Fallback: try on DOMContentLoaded
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(initReadingProgress, 100);
        });
    } else {
        setTimeout(initReadingProgress, 100);
    }

    // Table of Contents Active State
    (function() {
        const tocLinks = document.querySelectorAll('.toc-link');
        const sections = [];
        tocLinks.forEach(function(link) {
            const href = link.getAttribute('href');
            if (href && href.startsWith('#')) {
                const section = document.getElementById(href.substring(1));
                if (section) sections.push({ link: link, section: section });
            }
        });

        if (sections.length === 0) return;

        function updateActiveToc() {
            let currentId = null;
            sections.forEach(function(item) {
                const rect = item.section.getBoundingClientRect();
                if (rect.top <= 120) {
                    currentId = item.link.getAttribute('href');
                }
            });
            tocLinks.forEach(function(link) {
                const href = link.getAttribute('href');
                if (href === currentId) {
                    link.classList.add('text-black');
                    link.classList.remove('text-[#8E8E93]');
                    link.style.borderColor = '#16A34A';
                } else {
                    link.classList.remove('text-black');
                    link.classList.add('text-[#8E8E93]');
                    link.style.borderColor = 'transparent';
                }
            });
        }

        window.addEventListener('scroll', updateActiveToc, { passive: true });
        updateActiveToc();
    })();

    const coverImage = document.getElementById('cover-image-full');
    if (coverImage) {
        coverImage.addEventListener('click', function() {
            const lightbox = document.getElementById('image-lightbox');
            const lightboxImg = document.getElementById('lightbox-image');
            lightboxImg.src = this.src;
            lightbox.classList.remove('hidden');
            lightbox.classList.add('flex');
            document.body.style.overflow = 'hidden';
        });
    }

    function closeLightbox() {
        const lightbox = document.getElementById('image-lightbox');
        lightbox.classList.add('hidden');
        lightbox.classList.remove('flex');
        document.body.style.overflow = '';
    }

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeLightbox();
        }
    });
</script>
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-core.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/plugins/autoloader/prism-autoloader.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof Prism !== 'undefined') {
            Prism.highlightAll();
        }
    });
</script>
@endpush
@endsection
