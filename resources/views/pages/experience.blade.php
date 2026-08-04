@extends('layouts.app')

@section('content')
<!-- Experience Header -->
<section class="pt-24 pb-20 border-b border-[#EAEAEA] relative overflow-hidden reveal">
    <div class="max-w-[1200px] mx-auto px-6 relative z-10">
        <p class="text-[0.6875rem] font-semibold tracking-[0.2em] uppercase text-[#8E8E93] mb-6">Experience</p>
        <h1 class="text-[3rem] md:text-[3.5rem] font-semibold tracking-[-0.03em] text-black mb-6 leading-[1.1] max-w-[900px]">7 Years of Building, Leading, and Learning</h1>
        <p class="text-base md:text-lg text-[#8E8E93] max-w-[640px] leading-relaxed">A blend of formal employment, freelance work, and side projects across software engineering, robotics, and design.</p>
    </div>
    <div class="absolute top-0 left-0 w-20 h-20 border-l-2 border-[#16A34A]/40" style="box-shadow: inset 4px 4px 8px rgba(22,163,74,0.1);"></div>
    <div class="absolute top-0 right-0 w-20 h-20 border-r-2 border-[#16A34A]/40" style="box-shadow: inset -4px 4px 8px rgba(22,163,74,0.1);"></div>
    <div class="absolute bottom-0 left-0 w-20 h-20 border-b-2 border-l-2 border-[#16A34A]/40" style="box-shadow: inset 4px -4px 8px rgba(22,163,74,0.1);"></div>
    <div class="absolute bottom-0 right-0 w-20 h-20 border-b-2 border-r-2 border-[#16A34A]/40" style="box-shadow: inset -4px -4px 8px rgba(22,163,74,0.1);"></div>
    <div class="absolute top-0 left-0 w-2.5 h-2.5 bg-[#16A34A]/50 rounded-full"></div>
    <div class="absolute top-0 right-0 w-2.5 h-2.5 bg-[#16A34A]/50 rounded-full"></div>
    <div class="absolute bottom-0 left-0 w-2.5 h-2.5 bg-[#16A34A]/50 rounded-full"></div>
    <div class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-[#16A34A]/50 rounded-full"></div>
    <div class="absolute top-6 left-6 text-[0.5625rem] font-mono text-[#16A34A]/50 tracking-wider">SEC::04</div>
    <div class="absolute top-6 right-6 text-[0.5625rem] font-mono text-[#16A34A]/50 tracking-wider">SYS::ONLINE</div>
    <div class="absolute bottom-6 left-6 text-[0.5625rem] font-mono text-[#16A34A]/50 tracking-wider">GRID::ACTIVE</div>
    <div class="absolute bottom-6 right-6 text-[0.5625rem] font-mono text-[#16A34A]/50 tracking-wider">NODE::READY</div>
    <div class="absolute top-0 left-0 w-full h-full pointer-events-none" style="background-image: radial-gradient(rgba(22,163,74,0.04) 1px, transparent 1px); background-size: 24px 24px;"></div>
    <div class="absolute top-0 left-0 w-full h-full pointer-events-none opacity-30" style="background: repeating-linear-gradient(0deg, transparent, transparent 2px, rgba(22,163,74,0.02) 2px, rgba(22,163,74,0.02) 4px);"></div>
</section>

<!-- Formal Experience -->
<section class="py-24 border-b border-[#EAEAEA] reveal">
    <div class="max-w-[1200px] mx-auto px-6">
        <div class="flex items-center gap-3 mb-12">
            <p class="text-xs font-semibold tracking-[0.1em] uppercase text-[#8E8E93]">Formal Experience</p>
            <div class="flex-1 h-px bg-[#EAEAEA]"></div>
        </div>
        <div class="space-y-0">
            <div class="group relative pl-8 pb-12 border-l border-[#EAEAEA] hover:border-[#16A34A] transition-colors duration-300">
                <div class="absolute left-0 top-0 w-2 h-2 rounded-full bg-[#16A34A] -translate-x-[5px] group-hover:shadow-[0_0_8px_rgba(22,163,74,0.4)] transition-shadow duration-300"></div>
                <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-2 mb-3">
                    <div>
                        <h3 class="text-xl font-semibold text-black group-hover:text-[#16A34A] transition-colors duration-300">Senior Software Engineer</h3>
                        <p class="text-sm text-[#8E8E93]">TechVentures Inc.</p>
                    </div>
                    <p class="text-sm text-[#8E8E93] md:text-right">2023 — Present</p>
                </div>
                <p class="text-sm text-gray-500 leading-relaxed">Leading fullstack development on enterprise Laravel applications. Architecting AI-powered features and mentoring junior developers.</p>
                <div class="flex flex-wrap gap-2 mt-4">
                    <span class="text-[0.625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2.5 py-1 rounded-full">Laravel</span>
                    <span class="text-[0.625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2.5 py-1 rounded-full">AI/ML</span>
                    <span class="text-[0.625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2.5 py-1 rounded-full">System Design</span>
                </div>
            </div>
            <div class="group relative pl-8 pb-12 border-l border-[#EAEAEA] hover:border-[#16A34A] transition-colors duration-300">
                <div class="absolute left-0 top-0 w-2 h-2 rounded-full bg-[#16A34A] -translate-x-[5px] group-hover:shadow-[0_0_8px_rgba(22,163,74,0.4)] transition-shadow duration-300"></div>
                <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-2 mb-3">
                    <div>
                        <h3 class="text-xl font-semibold text-black group-hover:text-[#16A34A] transition-colors duration-300">Software Engineer</h3>
                        <p class="text-sm text-[#8E8E93]">CloudScale Systems</p>
                    </div>
                    <p class="text-sm text-[#8E8E93] md:text-right">2021 — 2023</p>
                </div>
                <p class="text-sm text-gray-500 leading-relaxed">Built scalable backend services and REST APIs. Improved system performance by 40% through database optimization and caching strategies.</p>
                <div class="flex flex-wrap gap-2 mt-4">
                    <span class="text-[0.625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2.5 py-1 rounded-full">PHP</span>
                    <span class="text-[0.625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2.5 py-1 rounded-full">MySQL</span>
                    <span class="text-[0.625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2.5 py-1 rounded-full">Redis</span>
                </div>
            </div>
            <div class="group relative pl-8 pb-12 border-l border-[#EAEAEA] hover:border-[#16A34A] transition-colors duration-300">
                <div class="absolute left-0 top-0 w-2 h-2 rounded-full bg-[#16A34A] -translate-x-[5px] group-hover:shadow-[0_0_8px_rgba(22,163,74,0.4)] transition-shadow duration-300"></div>
                <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-2 mb-3">
                    <div>
                        <h3 class="text-xl font-semibold text-black group-hover:text-[#16A34A] transition-colors duration-300">Junior Developer</h3>
                        <p class="text-sm text-[#8E8E93]">Digital Solutions Agency</p>
                    </div>
                    <p class="text-sm text-[#8E8E93] md:text-right">2019 — 2021</p>
                </div>
                <p class="text-sm text-gray-500 leading-relaxed">Developed custom web applications and e-commerce platforms. Collaborated with design teams to implement pixel-perfect interfaces.</p>
                <div class="flex flex-wrap gap-2 mt-4">
                    <span class="text-[0.625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2.5 py-1 rounded-full">JavaScript</span>
                    <span class="text-[0.625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2.5 py-1 rounded-full">Vue.js</span>
                    <span class="text-[0.625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2.5 py-1 rounded-full">API Integration</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Non-Formal Experience -->
<section class="py-24 border-b border-[#EAEAEA] reveal">
    <div class="max-w-[1200px] mx-auto px-6">
        <div class="flex items-center gap-3 mb-12">
            <p class="text-xs font-semibold tracking-[0.1em] uppercase text-[#8E8E93]">Non-Formal / Freelance</p>
            <div class="flex-1 h-px bg-[#EAEAEA]"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="group p-8 rounded-2xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] transition-all duration-300">
                <div class="flex items-start justify-between gap-4 mb-4">
                    <div>
                        <h3 class="text-lg font-semibold text-black group-hover:text-[#16A34A] transition-colors duration-300">Independent Consultant</h3>
                        <p class="text-sm text-[#8E8E93]">Self-employed</p>
                    </div>
                    <p class="text-xs text-[#8E8E93] whitespace-nowrap">2022 — Present</p>
                </div>
                <p class="text-sm text-gray-500 leading-relaxed mb-4">Advising startups on architecture, tech stack selection, and engineering team structure. Shipped MVPs for 5+ early-stage products.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">Consulting</span>
                    <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">MVP</span>
                    <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">Architecture</span>
                </div>
            </div>
            <div class="group p-8 rounded-2xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] transition-all duration-300">
                <div class="flex items-start justify-between gap-4 mb-4">
                    <div>
                        <h3 class="text-lg font-semibold text-black group-hover:text-[#16A34A] transition-colors duration-300">Open Source Contributor</h3>
                        <p class="text-sm text-[#8E8E93]">GitHub / Community</p>
                    </div>
                    <p class="text-xs text-[#8E8E93] whitespace-nowrap">2020 — Present</p>
                </div>
                <p class="text-sm text-gray-500 leading-relaxed mb-4">Active contributor to Laravel packages and developer tools. Maintained a popular UI component library with 500+ GitHub stars.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">Open Source</span>
                    <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">Packages</span>
                    <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">Community</span>
                </div>
            </div>
            <div class="group p-8 rounded-2xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] transition-all duration-300">
                <div class="flex items-start justify-between gap-4 mb-4">
                    <div>
                        <h3 class="text-lg font-semibold text-black group-hover:text-[#16A34A] transition-colors duration-300">Technical Writer</h3>
                        <p class="text-sm text-[#8E8E93]">Personal Blog / Medium</p>
                    </div>
                    <p class="text-xs text-[#8E8E93] whitespace-nowrap">2021 — Present</p>
                </div>
                <p class="text-sm text-gray-500 leading-relaxed mb-4">Writing about system design, Laravel internals, and engineering leadership. 50+ articles with 100k+ total views across platforms.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">Writing</span>
                    <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">Tutorials</span>
                    <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">100k+ Views</span>
                </div>
            </div>
            <div class="group p-8 rounded-2xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] transition-all duration-300">
                <div class="flex items-start justify-between gap-4 mb-4">
                    <div>
                        <h3 class="text-lg font-semibold text-black group-hover:text-[#16A34A] transition-colors duration-300">Robotics Researcher</h3>
                        <p class="text-sm text-[#8E8E93]">University Lab</p>
                    </div>
                    <p class="text-xs text-[#8E8E93] whitespace-nowrap">2018 — 2019</p>
                </div>
                <p class="text-sm text-gray-500 leading-relaxed mb-4">Worked on autonomous navigation systems and embedded AI. Published research on sensor fusion algorithms for mobile robots.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">Robotics</span>
                    <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">AI</span>
                    <span class="text-[0.5625rem] font-semibold tracking-[0.05em] uppercase text-[#16A34A] bg-emerald-50 px-2 py-0.5 rounded-full">Research</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills by Experience -->
<section class="py-24 reveal">
    <div class="max-w-[1200px] mx-auto px-6">
        <div class="flex items-center gap-3 mb-12">
            <p class="text-xs font-semibold tracking-[0.1em] uppercase text-[#8E8E93]">Core Competencies</p>
            <div class="flex-1 h-px bg-[#EAEAEA]"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-8 rounded-2xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 transition-all duration-300">
                <p class="text-[0.625rem] font-semibold tracking-[0.2em] uppercase text-[#16A34A] mb-4">Software</p>
                <p class="text-sm text-gray-700 leading-relaxed">Laravel · PHP · JavaScript · TypeScript · Vue.js · Node.js · PostgreSQL · Redis · Docker · AWS</p>
            </div>
            <div class="p-8 rounded-2xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 transition-all duration-300">
                <p class="text-[0.625rem] font-semibold tracking-[0.2em] uppercase text-[#16A34A] mb-4">Engineering</p>
                <p class="text-sm text-gray-700 leading-relaxed">Robotics · Aerospace · Mechanical Design · System Architecture · Embedded Systems · Sensor Fusion</p>
            </div>
            <div class="p-8 rounded-2xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 transition-all duration-300">
                <p class="text-[0.625rem] font-semibold tracking-[0.2em] uppercase text-[#16A34A] mb-4">Leadership</p>
                <p class="text-sm text-gray-700 leading-relaxed">Team Mentoring · Technical Writing · Public Speaking · Consulting · Open Source · Community Building</p>
            </div>
        </div>
    </div>
</section>
@endsection