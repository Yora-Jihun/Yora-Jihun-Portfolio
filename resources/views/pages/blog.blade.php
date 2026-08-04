@extends('layouts.app')

@section('content')
<!-- Blog Header -->
<section class="pt-24 pb-20 border-b border-[#EAEAEA] relative overflow-hidden reveal">
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
@if($featuredPost)
    <section class="py-16 border-b border-[#EAEAEA] reveal">
        <div class="max-w-[1200px] mx-auto px-6">
            <a href="{{ url('/blog/' . $featuredPost->slug) }}" class="group block">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
                    <div class="lg:col-span-7">
                        <div class="w-full aspect-[16/9] lg:aspect-[16/10] bg-[#F3F4F6] rounded-2xl overflow-hidden flex items-center justify-center">
                            @if($featuredPost->cover_image)
                                <img src="{{ asset('storage/' . $featuredPost->cover_image) }}" alt="{{ $featuredPost->title }}" class="w-full h-full object-cover">
                            @else
                                <span class="text-[0.625rem] font-semibold tracking-[0.05em] uppercase text-[#9CA3AF]">Image</span>
                            @endif
                        </div>
                    </div>
                    <div class="lg:col-span-5 flex flex-col justify-center">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="inline-block text-[0.625rem] font-semibold tracking-[0.08em] uppercase text-[#16A34A] bg-emerald-50 px-2.5 py-1 rounded-full">Pinned</span>
                            <span class="text-[#EAEAEA]">·</span>
                            <p class="text-[0.6875rem] font-medium tracking-[0.1em] uppercase text-[#8E8E93]">{{ format_post_date($featuredPost->published_at) }}</p>
                            <span class="text-[#EAEAEA]">·</span>
                            <p class="text-[0.6875rem] font-medium text-[#8E8E93]">{{ $featuredPost->read_time }} min read</p>
                        </div>
                        <h2 class="text-2xl md:text-[1.875rem] font-semibold tracking-[-0.02em] text-black mb-3 leading-[1.3] group-hover:text-[#16A34A] transition-colors duration-300">{{ $featuredPost->title }}</h2>
                        <p class="text-sm text-gray-500 leading-relaxed mb-6">{{ str($featuredPost->excerpt)->limit(120) }}</p>
                        <div class="flex items-center text-[#16A34A] text-sm font-medium opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300 ease-out">
                            Read article <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </section>
@endif

<!-- Recent Posts -->
<section class="py-24 reveal">
    <div class="max-w-[1200px] mx-auto px-6">
        <div class="flex items-center justify-between mb-10">
            <h2 class="text-[1.5rem] font-semibold tracking-[-0.02em] text-black">Recent posts</h2>
            <div class="hidden md:flex items-center gap-1" id="category-filters">
                <button data-category="" class="category-tab px-4 py-2 text-sm font-medium {{ !$category ? 'text-black bg-gray-100 rounded-lg' : 'text-[#8E8E93] hover:text-black transition-colors duration-200' }}">All</button>
                <button data-category="Technology" class="category-tab px-4 py-2 text-sm font-medium {{ $category === 'Technology' ? 'text-black bg-gray-100 rounded-lg' : 'text-[#8E8E93] hover:text-black transition-colors duration-200' }}">Technology</button>
                <button data-category="Design" class="category-tab px-4 py-2 text-sm font-medium {{ $category === 'Design' ? 'text-black bg-gray-100 rounded-lg' : 'text-[#8E8E93] hover:text-black transition-colors duration-200' }}">Design</button>
                <button data-category="Product" class="category-tab px-4 py-2 text-sm font-medium {{ $category === 'Product' ? 'text-black bg-gray-100 rounded-lg' : 'text-[#8E8E93] hover:text-black transition-colors duration-200' }}">Product</button>
                <button data-category="Development" class="category-tab px-4 py-2 text-sm font-medium {{ $category === 'Development' ? 'text-black bg-gray-100 rounded-lg' : 'text-[#8E8E93] hover:text-black transition-colors duration-200' }}">Development</button>
                <button data-category="Lifestyle" class="category-tab px-4 py-2 text-sm font-medium {{ $category === 'Lifestyle' ? 'text-black bg-gray-100 rounded-lg' : 'text-[#8E8E93] hover:text-black transition-colors duration-200' }}">Lifestyle</button>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="posts-grid">
            @if($posts->count() > 0)
                @foreach($posts as $post)
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
            @else
                <div class="col-span-full text-center py-16">
                    <p class="text-sm text-gray-500">No posts found in this category yet.</p>
                </div>
            @endif
        </div>

        <div class="mt-12" id="posts-pagination">
            {{ $posts->links() }}
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterContainer = document.getElementById('category-filters');
        const postsGrid = document.getElementById('posts-grid');
        const postsPagination = document.getElementById('posts-pagination');

        if (!filterContainer || !postsGrid || !postsPagination) return;

        filterContainer.addEventListener('click', function(e) {
            const tab = e.target.closest('.category-tab');
            if (!tab) return;

            e.preventDefault();
            loadCategory(tab.dataset.category || '');
        });

        postsPagination.addEventListener('click', function(e) {
            const link = e.target.closest('a');
            if (!link || !link.href) return;

            e.preventDefault();
            const url = new URL(link.href, window.location.origin);
            const category = url.searchParams.get('category') || '';
            const page = url.searchParams.get('page') || '';

            let fetchUrl = '/blog';
            const params = new URLSearchParams();
            if (category) params.set('category', category);
            if (page) params.set('page', page);
            if (params.toString()) fetchUrl += '?' + params.toString();

            fetch(fetchUrl, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.text())
            .then(html => {
                const parser = new DOMParser();
                const doc = parser.parseFromString(html, 'text/html');

                const newGrid = doc.getElementById('posts-grid');
                const newPagination = doc.getElementById('posts-pagination');

                if (newGrid) {
                    postsGrid.innerHTML = newGrid.innerHTML;
                }

                if (newPagination) {
                    postsPagination.innerHTML = newPagination.innerHTML;
                }

                history.pushState({ category: category, page: page }, '', fetchUrl);

                document.querySelectorAll('.category-tab').forEach(function(t) {
                    t.classList.remove('text-black', 'bg-gray-100', 'rounded-lg');
                    t.classList.add('text-[#8E8E93]');
                });

                const activeTab = document.querySelector(`.category-tab[data-category="${category}"]`);
                if (activeTab) {
                    activeTab.classList.remove('text-[#8E8E93]');
                    activeTab.classList.add('text-black', 'bg-gray-100', 'rounded-lg');
                } else if (!category) {
                    const allTab = document.querySelector('.category-tab[data-category=""]');
                    if (allTab) {
                        allTab.classList.remove('text-[#8E8E93]');
                        allTab.classList.add('text-black', 'bg-gray-100', 'rounded-lg');
                    }
                }

                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        });

        window.addEventListener('popstate', function(e) {
            const category = e.state && e.state.category ? e.state.category : '';
            loadCategory(category);
        });
    });

    function loadCategory(category) {
        const postsGrid = document.getElementById('posts-grid');
        const postsPagination = document.getElementById('posts-pagination');
        const url = category ? `/blog?category=${encodeURIComponent(category)}` : '/blog';

        fetch(url, {
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.text())
        .then(html => {
            const parser = new DOMParser();
            const doc = parser.parseFromString(html, 'text/html');

            const newGrid = doc.getElementById('posts-grid');
            const newPagination = doc.getElementById('posts-pagination');

            if (newGrid) {
                postsGrid.innerHTML = newGrid.innerHTML;
            }

            if (newPagination) {
                postsPagination.innerHTML = newPagination.innerHTML;
            }

            history.pushState({ category: category }, '', url);

            document.querySelectorAll('.category-tab').forEach(function(t) {
                t.classList.remove('text-black', 'bg-gray-100', 'rounded-lg');
                t.classList.add('text-[#8E8E93]');
            });

            const tab = document.querySelector(`.category-tab[data-category="${category}"]`);
            if (tab) {
                tab.classList.remove('text-[#8E8E93]');
                tab.classList.add('text-black', 'bg-gray-100', 'rounded-lg');
            } else if (!category) {
                const allTab = document.querySelector('.category-tab[data-category=""]');
                if (allTab) {
                    allTab.classList.remove('text-[#8E8E93]');
                    allTab.classList.add('text-black', 'bg-gray-100', 'rounded-lg');
                }
            }
        });
    }
</script>
@endsection
