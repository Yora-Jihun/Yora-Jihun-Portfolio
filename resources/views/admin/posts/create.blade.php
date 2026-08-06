<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - New Post</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
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
            <div class="max-w-3xl">
                <div class="mb-8">
                    <p class="text-[0.625rem] font-semibold tracking-[0.2em] uppercase text-[#8E8E93] mb-1">Content Management</p>
                    <h1 class="text-2xl font-semibold text-black tracking-tight">New Post</h1>
                </div>

                @if($errors->any())
                    <div class="bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded-lg mb-6 text-sm">
                        <ul class="list-disc list-inside text-sm">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    <div class="bg-white border border-[#EAEAEA] rounded-xl p-6 md:p-8 space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Title</label>
                            <input type="text" name="title" value="{{ old('title') }}" required class="w-full px-4 py-3 rounded-lg border border-[#E5E7EB] bg-white text-sm focus:outline-none focus:border-[#16A34A] focus:ring-1 focus:ring-[#16A34A] transition-all" placeholder="Enter post title">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Excerpt</label>
                            <textarea name="excerpt" rows="3" class="w-full px-4 py-3 rounded-lg border border-[#E5E7EB] bg-white text-sm focus:outline-none focus:border-[#16A34A] focus:ring-1 focus:ring-[#16A34A] transition-all resize-none" placeholder="Brief description of the post">{{ old('excerpt') }}</textarea>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Body <span class="text-xs text-[#8E8E93] font-normal">(Markdown supported)</span></label>
                            <textarea name="body" rows="12" required class="w-full px-4 py-3 rounded-lg border border-[#E5E7EB] bg-white text-sm focus:outline-none focus:border-[#16A34A] focus:ring-1 focus:ring-[#16A34A] transition-all resize-none" placeholder="# Heading&#10;## Subheading&#10;&#10;Write your post content in Markdown...">{{ old('body') }}</textarea>
                            <p class="text-xs text-[#8E8E93] mt-1.5">Supports: <code class="text-xs bg-gray-100 px-1 rounded">**bold**</code> <code class="text-xs bg-gray-100 px-1 rounded">*italic*</code> <code class="text-xs bg-gray-100 px-1 rounded">~~strikethrough~~</code> <code class="text-xs bg-gray-100 px-1 rounded">`code`</code> <code class="text-xs bg-gray-100 px-1 rounded">``` lang</code> <code class="text-xs bg-gray-100 px-1 rounded">- list</code> <code class="text-xs bg-gray-100 px-1 rounded">1. list</code> <code class="text-xs bg-gray-100 px-1 rounded">- [ ] todo</code> <code class="text-xs bg-gray-100 px-1 rounded">[link](url)</code> <code class="text-xs bg-gray-100 px-1 rounded">![alt](src)</code> <code class="text-xs bg-gray-100 px-1 rounded">---</code> <code class="text-xs bg-gray-100 px-1 rounded">| table |</code></p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">Category</label>
                                <div class="relative">
                                    <select name="category" class="w-full px-4 py-3 pr-10 rounded-lg border border-[#E5E7EB] bg-white text-sm focus:outline-none focus:border-[#16A34A] focus:ring-1 focus:ring-[#16A34A] transition-all appearance-none">
                                        <option value="Technology">Technology</option>
                                        <option value="Design">Design</option>
                                        <option value="Product">Product</option>
                                        <option value="Development">Development</option>
                                        <option value="Lifestyle">Lifestyle</option>
                                    </select>
                                    <span class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none text-gray-500">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">Read Time (min)</label>
                                <input type="number" name="read_time" value="{{ old('read_time', 5) }}" min="1" class="w-full px-4 py-3 rounded-lg border border-[#E5E7EB] bg-white text-sm focus:outline-none focus:border-[#16A34A] focus:ring-1 focus:ring-[#16A34A] transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">Cover Image</label>
                                <input type="file" name="cover_image" accept="image/*" class="w-full px-4 py-3 rounded-lg border border-[#E5E7EB] bg-white text-sm focus:outline-none focus:border-[#16A34A] focus:ring-1 focus:ring-[#16A34A] transition-all">
                                <p class="text-xs text-[#8E8E93] mt-1">Recommended: 1200x630px, max 2MB</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 pt-2">
                            <label class="flex items-center cursor-pointer select-none">
                                <input type="checkbox" name="featured" value="1" {{ old('featured') ? 'checked' : '' }} class="sr-only peer" onchange="var dot=this.nextElementSibling.querySelector('.toggle-dot'); if(dot){dot.style.transform=this.checked?'translateX(20px)':'translateX(0)';}">
                                <span class="relative inline-flex items-center h-6 w-11 rounded-full bg-gray-200 peer-checked:bg-[#16A34A] transition-colors duration-200 ease-out">
                                    <span class="toggle-dot absolute left-0.5 top-0.5 inline-block h-5 w-5 rounded-full bg-white shadow-sm transform transition-transform duration-200 ease-out"></span>
                                </span>
                                <span class="ml-3 text-sm text-gray-700">Featured post</span>
                            </label>
                            <label class="flex items-center cursor-pointer select-none">
                                <input type="checkbox" name="pin_post" value="1" {{ old('pin_post') ? 'checked' : '' }} class="sr-only peer" onchange="var dot=this.nextElementSibling.querySelector('.toggle-dot'); if(dot){dot.style.transform=this.checked?'translateX(20px)':'translateX(0)';}">
                                <span class="relative inline-flex items-center h-6 w-11 rounded-full bg-gray-200 peer-checked:bg-[#16A34A] transition-colors duration-200 ease-out">
                                    <span class="toggle-dot absolute left-0.5 top-0.5 inline-block h-5 w-5 rounded-full bg-white shadow-sm transform transition-transform duration-200 ease-out"></span>
                                </span>
                                <span class="ml-3 text-sm text-gray-700">Pin to homepage</span>
                            </label>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 pt-2">
                        <button type="submit" class="bg-black text-white text-sm font-semibold py-3 px-6 rounded-lg hover:bg-gray-800 transition-all duration-200 shadow-sm hover:shadow-md">Create Post</button>
                        <a href="{{ route('admin.posts.index') }}" class="text-sm text-gray-600 hover:text-black transition-colors duration-200">Cancel</a>
                    </div>
                </form>
            </div>
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

            document.querySelectorAll('input[name="featured"], input[name="pin_post"]').forEach(function(toggle) {
                var dot = toggle.nextElementSibling.querySelector('.toggle-dot');
                if (dot) {
                    dot.style.transform = toggle.checked ? 'translateX(20px)' : 'translateX(0)';
                }
            });
        })();
    </script>
</body>
</html>
