<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Edit Post</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
                    <h1 class="text-2xl font-semibold text-black tracking-tight">Edit Post</h1>
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

                <form method="POST" action="{{ route('admin.posts.update', $post) }}" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PUT')
                    <div class="bg-white border border-[#EAEAEA] rounded-xl p-6 md:p-8 space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Title</label>
                            <input type="text" name="title" value="{{ old('title', $post->title) }}" required class="w-full px-4 py-3 rounded-lg border border-[#E5E7EB] bg-white text-sm focus:outline-none focus:border-[#16A34A] focus:ring-1 focus:ring-[#16A34A] transition-all">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Excerpt</label>
                            <textarea name="excerpt" rows="3" class="w-full px-4 py-3 rounded-lg border border-[#E5E7EB] bg-white text-sm focus:outline-none focus:border-[#16A34A] focus:ring-1 focus:ring-[#16A34A] transition-all resize-none">{{ old('excerpt', $post->excerpt) }}</textarea>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Body</label>
                            <textarea name="body" rows="12" required class="w-full px-4 py-3 rounded-lg border border-[#E5E7EB] bg-white text-sm focus:outline-none focus:border-[#16A34A] focus:ring-1 focus:ring-[#16A34A] transition-all resize-none">{{ old('body', $post->body) }}</textarea>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">Category</label>
                                <select name="category" class="w-full px-4 py-3 rounded-lg border border-[#E5E7EB] bg-white text-sm focus:outline-none focus:border-[#16A34A] focus:ring-1 focus:ring-[#16A34A] transition-all">
                                    <option value="Technology" {{ old('category', $post->category) === 'Technology' ? 'selected' : '' }}>Technology</option>
                                    <option value="Design" {{ old('category', $post->category) === 'Design' ? 'selected' : '' }}>Design</option>
                                    <option value="Product" {{ old('category', $post->category) === 'Product' ? 'selected' : '' }}>Product</option>
                                    <option value="Development" {{ old('category', $post->category) === 'Development' ? 'selected' : '' }}>Development</option>
                                    <option value="Lifestyle" {{ old('category', $post->category) === 'Lifestyle' ? 'selected' : '' }}>Lifestyle</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">Read Time (min)</label>
                                <input type="number" name="read_time" value="{{ old('read_time', $post->read_time) }}" min="1" class="w-full px-4 py-3 rounded-lg border border-[#E5E7EB] bg-white text-sm focus:outline-none focus:border-[#16A34A] focus:ring-1 focus:ring-[#16A34A] transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">Cover Image</label>
                                @if($post->cover_image)
                                    <div class="mb-3">
                                        <img src="{{ asset('storage/' . $post->cover_image) }}" alt="{{ $post->title }}" class="w-full max-w-xs h-32 object-cover rounded-lg border border-[#EAEAEA]">
                                    </div>
                                @endif
                                <input type="file" name="cover_image" accept="image/*" class="w-full px-4 py-3 rounded-lg border border-[#E5E7EB] bg-white text-sm focus:outline-none focus:border-[#16A34A] focus:ring-1 focus:ring-[#16A34A] transition-all">
                                <p class="text-xs text-[#8E8E93] mt-1">Leave empty to keep current image. Recommended: 1200x630px, max 2MB</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 pt-2">
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="checkbox" name="featured" value="1" {{ old('featured', $post->featured) ? 'checked' : '' }} class="w-4 h-4 rounded border-[#E5E7EB] text-[#16A34A] focus:ring-[#16A34A]">
                                <span class="text-sm text-gray-700">Featured post</span>
                            </label>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 pt-2">
                        <button type="submit" class="bg-black text-white text-sm font-semibold py-3 px-6 rounded-lg hover:bg-gray-800 transition-all duration-200 shadow-sm hover:shadow-md">Update Post</button>
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

            document.addEventListener('mousemove', function(e) {
                mouseX = e.clientX;
                mouseY = e.clientY;
                dot.style.left = mouseX + 'px';
                dot.style.top = mouseY + 'px';
            });

            function animateRing() {
                ringX += (mouseX - ringX) * 0.15;
                ringY += (mouseY - ringY) * 0.15;
                ring.style.left = ringX + 'px';
                ring.style.top = ringY + 'px';
                requestAnimationFrame(animateRing);
            }
            animateRing();

            const hoverTargets = document.querySelectorAll('a, button, input, textarea, [role="button"], .cursor-pointer');
            hoverTargets.forEach(function(el) {
                el.addEventListener('mouseenter', function() {
                    ring.classList.add('hover');
                });
                el.addEventListener('mouseleave', function() {
                    ring.classList.remove('hover');
                });
            });
        })();
    </script>
</body>
</html>
