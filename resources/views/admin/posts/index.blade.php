<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Posts</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(8px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in {
            animation: fadeIn 0.4s ease-out forwards;
        }
        :fullscreen .cursor-dot,
        :fullscreen .cursor-ring,
        :-webkit-full-screen .cursor-dot,
        :-webkit-full-screen .cursor-ring,
        html:fullscreen .cursor-dot,
        html:fullscreen .cursor-ring,
        html:-webkit-full-screen .cursor-dot,
        html:-webkit-full-screen .cursor-ring,
        body:fullscreen .cursor-dot,
        body:fullscreen .cursor-ring,
        body:-webkit-full-screen .cursor-dot,
        body:-webkit-full-screen .cursor-ring {
            display: none !important;
            visibility: hidden !important;
            opacity: 0 !important;
        }
        :fullscreen *,
        :-webkit-full-screen *,
        html:fullscreen *,
        html:-webkit-full-screen *,
        body:fullscreen *,
        body:-webkit-full-screen * {
            cursor: auto !important;
        }
    </style>
</head>
<body class="font-sans antialiased text-gray-900 bg-white">
    <div class="cursor-dot hidden md:block" id="cursor-dot"></div>
    <div class="cursor-ring hidden md:block" id="cursor-ring"></div>
    <div class="min-h-screen">
        <nav class="border-b border-[#EAEAEA]">
            <div class="max-w-[1200px] mx-auto px-6 h-16 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-lg bg-black flex items-center justify-center">
                        <span class="text-white text-xs font-bold">A</span>
                    </div>
                    <a href="{{ url('/admin/posts') }}" class="text-xl font-semibold text-black tracking-tight">Admin</a>
                </div>
                <div class="flex items-center gap-6">
                    <a href="{{ url('/') }}" class="text-sm text-[#8E8E93] hover:text-black transition-colors duration-200">View Site</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-sm text-[#8E8E93] hover:text-black transition-colors duration-200">Logout</button>
                    </form>
                </div>
            </div>
        </nav>

        <main class="max-w-[1200px] mx-auto px-6 py-8">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <p class="text-[0.625rem] font-semibold tracking-[0.2em] uppercase text-[#8E8E93] mb-1">Content Management</p>
                    <h1 class="text-2xl font-semibold text-black tracking-tight">Posts</h1>
                </div>
                <a href="{{ route('admin.posts.create') }}" class="bg-black text-white text-sm font-semibold py-2.5 px-5 rounded-lg hover:bg-gray-800 transition-all duration-200 shadow-sm hover:shadow-md">
                    New Post
                </a>
            </div>

            @if(session('status'))
                <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 px-4 py-3 rounded-lg mb-6 text-sm animate-fade-in">
                    {{ session('status') }}
                </div>
            @endif

            <div class="border border-[#EAEAEA] rounded-xl overflow-hidden bg-white">
                <table class="w-full">
                    <thead>
                        <tr class="border-b border-[#EAEAEA]">
                            <th class="text-left px-6 py-4 text-[0.625rem] font-semibold text-gray-500 uppercase tracking-wider">Title</th>
                            <th class="text-left px-6 py-4 text-[0.625rem] font-semibold text-gray-500 uppercase tracking-wider">Category</th>
                            <th class="text-left px-6 py-4 text-[0.625rem] font-semibold text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="text-left px-6 py-4 text-[0.625rem] font-semibold text-gray-500 uppercase tracking-wider">Published</th>
                            <th class="text-left px-6 py-4 text-[0.625rem] font-semibold text-gray-500 uppercase tracking-wider">Featured</th>
                            <th class="text-right px-6 py-4 text-[0.625rem] font-semibold text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#EAEAEA]">
                        @forelse($posts as $post)
                            <tr class="hover:bg-gray-50/80 transition-colors duration-150 group">
                                <td class="px-6 py-4">
                                    <div>
                                        <p class="text-sm font-medium text-black group-hover:text-[#16A34A] transition-colors duration-200">{{ $post->title }}</p>
                                        <p class="text-xs text-gray-400 mt-0.5 font-mono">{{ $post->slug }}</p>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-gray-100 text-gray-700 border border-gray-200">
                                        {{ $post->category }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md text-xs font-medium {{ $post->is_published ? 'bg-emerald-50 text-emerald-700 border border-emerald-200' : 'bg-gray-100 text-gray-600 border border-gray-200' }}">
                                        <span class="w-1.5 h-1.5 rounded-full {{ $post->is_published ? 'bg-emerald-500' : 'bg-gray-400' }}"></span>
                                        {{ $post->is_published ? 'Published' : 'Draft' }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-600">{{ $post->published_at ? format_post_date($post->published_at) : '—' }}</td>
                                <td class="px-6 py-4 text-sm text-gray-600">
                                    @if($post->featured)
                                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-md text-xs font-medium bg-amber-50 text-amber-700 border border-amber-200">
                                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                            Featured
                                        </span>
                                    @else
                                        <span class="text-gray-400">—</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-right text-sm">
                                    <a href="{{ route('admin.posts.edit', $post) }}" class="inline-flex items-center gap-1 text-[#16A34A] hover:text-emerald-700 font-medium transition-colors duration-200 mr-4">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"/></svg>
                                        Edit
                                    </a>
                                    <form method="POST" action="{{ route('admin.posts.destroy', $post) }}" class="inline" onsubmit="return confirm('Delete this post?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="inline-flex items-center gap-1 text-red-600 hover:text-red-700 font-medium transition-colors duration-200">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.061-.94-1.75-1.816-1.51l-1.488.743a.75.75 0 01-.912-.279l-.763-1.524a48.054 48.054 0 00-7.256 0l-.764 1.524a.75.75 0 01-.912.28l-1.488-.742c-.876.24-1.816.449-1.816 1.51v.916"/></svg>
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-6 py-12 text-center">
                                    <div class="flex flex-col items-center gap-3">
                                        <div class="w-12 h-12 rounded-full bg-gray-50 border border-gray-100 flex items-center justify-center">
                                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                        </div>
                                        <div>
                                            <p class="text-sm font-medium text-gray-900">No posts yet</p>
                                            <p class="text-xs text-gray-500 mt-0.5">Create your first post to get started.</p>
                                        </div>
                                        <a href="{{ route('admin.posts.create') }}" class="mt-2 text-sm text-[#16A34A] hover:text-emerald-700 font-medium transition-colors duration-200">
                                            Create Post →
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($posts->hasPages())
                <div class="mt-6">
                    {{ $posts->links() }}
                </div>
            @endif
        </main>
    </div>
    <script>
        (function() {
            const dot = document.getElementById('cursor-dot');
            const ring = document.getElementById('cursor-ring');
            if (!dot || !ring) return;

            let mouseX = 0;
            let mouseY = 0;
            let ringX = 0;
            let ringY = 0;
            let animationId = null;

            function animateRing() {
                ringX += (mouseX - ringX) * 0.15;
                ringY += (mouseY - ringY) * 0.15;
                ring.style.left = ringX + 'px';
                ring.style.top = ringY + 'px';
                animationId = requestAnimationFrame(animateRing);
            }

            function startCursor() {
                if (animationId) return;
                animateRing();
            }

            function stopCursor() {
                if (animationId) {
                    cancelAnimationFrame(animationId);
                    animationId = null;
                }
            }

            document.addEventListener('mousemove', function(e) {
                mouseX = e.clientX;
                mouseY = e.clientY;
                dot.style.left = mouseX + 'px';
                dot.style.top = mouseY + 'px';
            });

            startCursor();

            const hoverTargets = document.querySelectorAll('a, button, input, textarea, [role="button"], .cursor-pointer');
            hoverTargets.forEach(function(el) {
                el.addEventListener('mouseenter', function() {
                    ring.classList.add('hover');
                });
                el.addEventListener('mouseleave', function() {
                    ring.classList.remove('hover');
                });
            });

            document.addEventListener('fullscreenchange', function() {
                if (document.fullscreenElement) {
                    stopCursor();
                } else {
                    startCursor();
                }
            });

            document.addEventListener('webkitfullscreenchange', function() {
                if (document.webkitFullscreenElement) {
                    stopCursor();
                } else {
                    startCursor();
                }
            });
        })();
    </script>
</body>
</html>
