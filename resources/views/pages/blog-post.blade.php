@extends('layouts.app')

@section('content')
<!-- Reading Progress Bar -->
<livewire:reading-progress-bar />

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
                @php
                    $paragraphs = explode("\n\n", $post->body);
                @endphp
                @foreach($paragraphs as $paragraph)
                    @if(trim($paragraph))
                        <p class="text-[1.0625rem] text-gray-700 leading-[1.85] mb-7 text-justify">
                            {{ trim($paragraph) }}
                        </p>
                    @endif
                @endforeach
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
@endsection
