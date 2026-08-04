<footer class="bg-white border-t border-[#EAEAEA]">
    <div class="max-w-[1200px] mx-auto px-6">
        <div class="py-16 md:py-24">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 md:gap-10">
                <div class="md:col-span-4 space-y-6">
                    <h2 class="text-[2rem] md:text-[2.5rem] font-black tracking-tighter text-black leading-[0.9]">Yora Jihun</h2>
                    <p class="text-sm text-[#8E8E93] leading-relaxed max-w-xs">Lead System Engineer & AI Specialist building refined, scalable systems from Seoul.</p>
                    <div class="flex items-center gap-2 text-[#16A34A]">
                        <span class="text-[0.5625rem] md:text-[0.6875rem] font-mono tracking-widest">STATUS::ACTIVE</span>
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#16A34A] opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-[#16A34A]"></span>
                        </span>
                    </div>
                    <div class="flex items-center gap-3 pt-2">
                        <a href="#" aria-label="Twitter" class="w-9 h-9 flex items-center justify-center rounded-lg border border-[#E5E7EB] bg-white text-gray-500 hover:border-[#16A34A] hover:text-[#16A34A] transition-all duration-200">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        </a>
                        <a href="#" aria-label="GitHub" class="w-9 h-9 flex items-center justify-center rounded-lg border border-[#E5E7EB] bg-white text-gray-500 hover:border-[#16A34A] hover:text-[#16A34A] transition-all duration-200">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/></svg>
                        </a>
                        <a href="#" aria-label="LinkedIn" class="w-9 h-9 flex items-center justify-center rounded-lg border border-[#E5E7EB] bg-white text-gray-500 hover:border-[#16A34A] hover:text-[#16A34A] transition-all duration-200">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                    </div>
                </div>

                <div class="md:col-span-2">
                    <p class="text-[0.5625rem] font-semibold tracking-[0.2em] uppercase text-gray-400 mb-5">Navigate</p>
                    <ul class="space-y-3.5">
                        <li><a href="#hero-section" class="text-sm text-[#8E8E93] no-underline hover:text-black transition-colors duration-200">Home</a></li>
                        <li><a href="{{ route('blog') }}" class="text-sm text-[#8E8E93] no-underline hover:text-black transition-colors duration-200">Blog</a></li>
                        <li><a href="{{ route('experience') }}" class="text-sm text-[#8E8E93] no-underline hover:text-black transition-colors duration-200">Experience</a></li>
                        <li><a href="{{ route('skills') }}" class="text-sm text-[#8E8E93] no-underline hover:text-black transition-colors duration-200">Skills</a></li>
                        <li><a href="{{ route('projects') }}" class="text-sm text-[#8E8E93] no-underline hover:text-black transition-colors duration-200">Projects</a></li>
                    </ul>
                </div>

                <div class="md:col-span-3">
                    <p class="text-[0.5625rem] font-semibold tracking-[0.2em] uppercase text-gray-400 mb-5">Explore</p>
                    <ul class="space-y-3.5">
                        <li><a href="{{ route('blog') }}" class="text-sm text-[#8E8E93] no-underline hover:text-black transition-colors duration-200">Latest Articles</a></li>
                        <li><a href="{{ route('experience') }}" class="text-sm text-[#8E8E93] no-underline hover:text-black transition-colors duration-200">Work Experience</a></li>
                        <li><a href="{{ route('skills') }}" class="text-sm text-[#8E8E93] no-underline hover:text-black transition-colors duration-200">Skills & Tools</a></li>
                        <li><a href="{{ route('projects') }}" class="text-sm text-[#8E8E93] no-underline hover:text-black transition-colors duration-200">Selected Projects</a></li>
                        <li><a href="#hero-section" class="text-sm text-[#8E8E93] no-underline hover:text-black transition-colors duration-200">Back to Top</a></li>
                    </ul>
                </div>

                <div class="md:col-span-3">
                    <p class="text-[0.5625rem] font-semibold tracking-[0.2em] uppercase text-gray-400 mb-5">Contact</p>
                    <ul class="space-y-3.5">
                        <li class="flex items-start gap-2.5">
                            <svg class="w-4 h-4 text-[#16A34A] mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
                            <a href="mailto:yorajihun@gmail.com" class="text-sm text-[#8E8E93] no-underline hover:text-black transition-colors duration-200">yorajihun@gmail.com</a>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <svg class="w-4 h-4 text-[#16A34A] mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
                            <span class="text-sm text-[#8E8E93]">Seoul, South Korea</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <svg class="w-4 h-4 text-[#16A34A] mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span class="text-sm text-[#8E8E93]">Currently employed</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="border-t border-[#EAEAEA] py-6 flex flex-col md:flex-row items-center justify-between gap-3">
            <p class="text-xs text-[#8E8E93]">&copy; 2026 Yora Jihun. All rights reserved.</p>
            <p class="text-xs text-[#8E8E93]">Designed & built with precision in Seoul, South Korea.</p>
        </div>
    </div>
</footer>