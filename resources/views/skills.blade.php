@extends('layouts.app')

@section('content')
<!-- Skills Header -->
<section class="pt-24 pb-20 border-b border-[#EAEAEA] relative overflow-hidden">
    <div class="max-w-[1200px] mx-auto px-6 relative z-10">
        <p class="text-[0.6875rem] font-semibold tracking-[0.2em] uppercase text-[#8E8E93] mb-6">Skills</p>
        <h1 class="text-[3rem] md:text-[3.5rem] font-semibold tracking-[-0.03em] text-black mb-6 leading-[1.1] max-w-[900px]">Tools and Disciplines I Work With</h1>
        <p class="text-base md:text-lg text-[#8E8E93] max-w-[640px] leading-relaxed">A practical breakdown of the technologies, frameworks, and skills I use to build products and lead teams.</p>
    </div>
    <div class="absolute top-0 left-0 w-20 h-20 border-l-2 border-[#16A34A]/40" style="box-shadow: inset 4px 4px 8px rgba(22,163,74,0.1);"></div>
    <div class="absolute top-0 right-0 w-20 h-20 border-r-2 border-[#16A34A]/40" style="box-shadow: inset -4px 4px 8px rgba(22,163,74,0.1);"></div>
    <div class="absolute bottom-0 left-0 w-20 h-20 border-b-2 border-l-2 border-[#16A34A]/40" style="box-shadow: inset 4px -4px 8px rgba(22,163,74,0.1);"></div>
    <div class="absolute bottom-0 right-0 w-20 h-20 border-b-2 border-r-2 border-[#16A34A]/40" style="box-shadow: inset -4px -4px 8px rgba(22,163,74,0.1);"></div>
    <div class="absolute top-0 left-0 w-2.5 h-2.5 bg-[#16A34A]/50 rounded-full"></div>
    <div class="absolute top-0 right-0 w-2.5 h-2.5 bg-[#16A34A]/50 rounded-full"></div>
    <div class="absolute bottom-0 left-0 w-2.5 h-2.5 bg-[#16A34A]/50 rounded-full"></div>
    <div class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-[#16A34A]/50 rounded-full"></div>
    <div class="absolute top-6 left-6 text-[0.5625rem] font-mono text-[#16A34A]/50 tracking-wider">SEC::03</div>
    <div class="absolute top-6 right-6 text-[0.5625rem] font-mono text-[#16A34A]/50 tracking-wider">SYS::ONLINE</div>
    <div class="absolute bottom-6 left-6 text-[0.5625rem] font-mono text-[#16A34A]/50 tracking-wider">GRID::ACTIVE</div>
    <div class="absolute bottom-6 right-6 text-[0.5625rem] font-mono text-[#16A34A]/50 tracking-wider">NODE::READY</div>
    <div class="absolute top-0 left-0 w-full h-full pointer-events-none" style="background-image: radial-gradient(rgba(22,163,74,0.04) 1px, transparent 1px); background-size: 24px 24px;"></div>
    <div class="absolute top-0 left-0 w-full h-full pointer-events-none opacity-30" style="background: repeating-linear-gradient(0deg, transparent, transparent 2px, rgba(22,163,74,0.02) 2px, rgba(22,163,74,0.02) 4px);"></div>
</section>

<!-- Software & Development -->
<section class="py-24 border-b border-[#EAEAEA]">
    <div class="max-w-[1200px] mx-auto px-6">
        <div class="flex items-center gap-3 mb-12">
            <p class="text-xs font-semibold tracking-[0.1em] uppercase text-[#8E8E93]">Software & Development</p>
            <div class="flex-1 h-px bg-[#EAEAEA]"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="p-6 rounded-2xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] transition-all duration-300">
                <p class="text-[0.625rem] font-semibold tracking-[0.2em] uppercase text-[#16A34A] mb-3">Backend</p>
                <p class="text-sm text-gray-700 leading-relaxed">Laravel · PHP · Node.js · Python · PostgreSQL · MySQL · Redis · MongoDB</p>
            </div>
            <div class="p-6 rounded-2xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] transition-all duration-300">
                <p class="text-[0.625rem] font-semibold tracking-[0.2em] uppercase text-[#16A34A] mb-3">Frontend</p>
                <p class="text-sm text-gray-700 leading-relaxed">JavaScript · TypeScript · Vue.js · React · Tailwind CSS · HTML5 · CSS3</p>
            </div>
            <div class="p-6 rounded-2xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] transition-all duration-300">
                <p class="text-[0.625rem] font-semibold tracking-[0.2em] uppercase text-[#16A34A] mb-3">DevOps & Cloud</p>
                <p class="text-sm text-gray-700 leading-relaxed">Docker · AWS · CI/CD · Linux · Nginx · Git · GitHub Actions · Terraform</p>
            </div>
            <div class="p-6 rounded-2xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] transition-all duration-300">
                <p class="text-[0.625rem] font-semibold tracking-[0.2em] uppercase text-[#16A34A] mb-3">AI & Machine Learning</p>
                <p class="text-sm text-gray-700 leading-relaxed">TensorFlow · PyTorch · scikit-learn · OpenAI API · LLM Integration · Computer Vision</p>
            </div>
            <div class="p-6 rounded-2xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] transition-all duration-300">
                <p class="text-[0.625rem] font-semibold tracking-[0.2em] uppercase text-[#16A34A] mb-3">Testing</p>
                <p class="text-sm text-gray-700 leading-relaxed">PHPUnit · Pest · Jest · Cypress · TDD · Integration Testing · E2E Testing</p>
            </div>
            <div class="p-6 rounded-2xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] transition-all duration-300">
                <p class="text-[0.625rem] font-semibold tracking-[0.2em] uppercase text-[#16A34A] mb-3">Design & UX</p>
                <p class="text-sm text-gray-700 leading-relaxed">Figma · UI/UX Design · Design Systems · Accessibility · Responsive Design</p>
            </div>
        </div>
    </div>
</section>

<!-- Engineering & Robotics -->
<section class="py-24 border-b border-[#EAEAEA]">
    <div class="max-w-[1200px] mx-auto px-6">
        <div class="flex items-center gap-3 mb-12">
            <p class="text-xs font-semibold tracking-[0.1em] uppercase text-[#8E8E93]">Engineering & Robotics</p>
            <div class="flex-1 h-px bg-[#EAEAEA]"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="p-6 rounded-2xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] transition-all duration-300">
                <p class="text-[0.625rem] font-semibold tracking-[0.2em] uppercase text-[#16A34A] mb-3">Robotics</p>
                <p class="text-sm text-gray-700 leading-relaxed">ROS · Autonomous Navigation · SLAM · Sensor Fusion · Computer Vision · Motion Planning</p>
            </div>
            <div class="p-6 rounded-2xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] transition-all duration-300">
                <p class="text-[0.625rem] font-semibold tracking-[0.2em] uppercase text-[#16A34A] mb-3">Aerospace</p>
                <p class="text-sm text-gray-700 leading-relaxed">Flight Dynamics · Trajectory Optimization · GNC · Propulsion Systems · Aerodynamics</p>
            </div>
            <div class="p-6 rounded-2xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] transition-all duration-300">
                <p class="text-[0.625rem] font-semibold tracking-[0.2em] uppercase text-[#16A34A] mb-3">Mechanical Design</p>
                <p class="text-sm text-gray-700 leading-relaxed">CAD · FEA · Structural Analysis · Thermal Systems · Manufacturing · GD&T</p>
            </div>
            <div class="p-6 rounded-2xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] transition-all duration-300">
                <p class="text-[0.625rem] font-semibold tracking-[0.2em] uppercase text-[#16A34A] mb-3">Embedded Systems</p>
                <p class="text-sm text-gray-700 leading-relaxed">Arduino · Raspberry Pi · STM32 · IoT · Real-Time Systems · PCB Design</p>
            </div>
            <div class="p-6 rounded-2xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] transition-all duration-300">
                <p class="text-[0.625rem] font-semibold tracking-[0.2em] uppercase text-[#16A34A] mb-3">System Architecture</p>
                <p class="text-sm text-gray-700 leading-relaxed">Distributed Systems · Microservices · API Design · Scalability · Performance Optimization</p>
            </div>
            <div class="p-6 rounded-2xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] transition-all duration-300">
                <p class="text-[0.625rem] font-semibold tracking-[0.2em] uppercase text-[#16A34A] mb-3">Data Analysis</p>
                <p class="text-sm text-gray-700 leading-relaxed">Python · R · SQL · Data Visualization · Statistical Analysis · Time Series</p>
            </div>
        </div>
    </div>
</section>

<!-- Leadership & Soft Skills -->
<section class="py-24 border-b border-[#EAEAEA]">
    <div class="max-w-[1200px] mx-auto px-6">
        <div class="flex items-center gap-3 mb-12">
            <p class="text-xs font-semibold tracking-[0.1em] uppercase text-[#8E8E93]">Leadership & Soft Skills</p>
            <div class="flex-1 h-px bg-[#EAEAEA]"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="p-6 rounded-2xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] transition-all duration-300">
                <p class="text-[0.625rem] font-semibold tracking-[0.2em] uppercase text-[#16A34A] mb-3">Team Leadership</p>
                <p class="text-sm text-gray-700 leading-relaxed">Team Mentoring · Code Review · Sprint Planning · Agile/Scrum · Stakeholder Management</p>
            </div>
            <div class="p-6 rounded-2xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] transition-all duration-300">
                <p class="text-[0.625rem] font-semibold tracking-[0.2em] uppercase text-[#16A34A] mb-3">Communication</p>
                <p class="text-sm text-gray-700 leading-relaxed">Technical Writing · Public Speaking · Documentation · Cross-functional Collaboration</p>
            </div>
            <div class="p-6 rounded-2xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] transition-all duration-300">
                <p class="text-[0.625rem] font-semibold tracking-[0.2em] uppercase text-[#16A34A] mb-3">Community</p>
                <p class="text-sm text-gray-700 leading-relaxed">Open Source · Conference Talks · Workshop Facilitation · Blogging · Mentorship</p>
            </div>
            <div class="p-6 rounded-2xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] transition-all duration-300">
                <p class="text-[0.625rem] font-semibold tracking-[0.2em] uppercase text-[#16A34A] mb-3">Consulting</p>
                <p class="text-sm text-gray-700 leading-relaxed">Tech Strategy · Architecture Review · MVP Development · Team Augmentation</p>
            </div>
            <div class="p-6 rounded-2xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] transition-all duration-300">
                <p class="text-[0.625rem] font-semibold tracking-[0.2em] uppercase text-[#16A34A] mb-3">Creative</p>
                <p class="text-sm text-gray-700 leading-relaxed">Visual Design · Photography · Cooking · Design Thinking · Problem Solving</p>
            </div>
            <div class="p-6 rounded-2xl border border-[#EAEAEA] bg-white hover:border-[#16A34A]/30 hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] transition-all duration-300">
                <p class="text-[0.625rem] font-semibold tracking-[0.2em] uppercase text-[#16A34A] mb-3">Research</p>
                <p class="text-sm text-gray-700 leading-relaxed">Academic Writing · Literature Review · Experimental Design · Data Collection · Analysis</p>
            </div>
        </div>
    </div>
</section>

<!-- Tools & Technologies -->
<section class="py-24">
    <div class="max-w-[1200px] mx-auto px-6">
        <div class="flex items-center gap-3 mb-12">
            <p class="text-xs font-semibold tracking-[0.1em] uppercase text-[#8E8E93]">Tools & Technologies</p>
            <div class="flex-1 h-px bg-[#EAEAEA]"></div>
        </div>
        <div class="flex flex-wrap gap-3">
            <span class="text-sm font-medium text-gray-700 bg-[#F3F4F6] px-4 py-2 rounded-lg hover:bg-emerald-50 hover:text-[#16A34A] transition-colors duration-200">Laravel</span>
            <span class="text-sm font-medium text-gray-700 bg-[#F3F4F6] px-4 py-2 rounded-lg hover:bg-emerald-50 hover:text-[#16A34A] transition-colors duration-200">PHP</span>
            <span class="text-sm font-medium text-gray-700 bg-[#F3F4F6] px-4 py-2 rounded-lg hover:bg-emerald-50 hover:text-[#16A34A] transition-colors duration-200">JavaScript</span>
            <span class="text-sm font-medium text-gray-700 bg-[#F3F4F6] px-4 py-2 rounded-lg hover:bg-emerald-50 hover:text-[#16A34A] transition-colors duration-200">TypeScript</span>
            <span class="text-sm font-medium text-gray-700 bg-[#F3F4F6] px-4 py-2 rounded-lg hover:bg-emerald-50 hover:text-[#16A34A] transition-colors duration-200">Vue.js</span>
            <span class="text-sm font-medium text-gray-700 bg-[#F3F4F6] px-4 py-2 rounded-lg hover:bg-emerald-50 hover:text-[#16A34A] transition-colors duration-200">React</span>
            <span class="text-sm font-medium text-gray-700 bg-[#F3F4F6] px-4 py-2 rounded-lg hover:bg-emerald-50 hover:text-[#16A34A] transition-colors duration-200">Node.js</span>
            <span class="text-sm font-medium text-gray-700 bg-[#F3F4F6] px-4 py-2 rounded-lg hover:bg-emerald-50 hover:text-[#16A34A] transition-colors duration-200">PostgreSQL</span>
            <span class="text-sm font-medium text-gray-700 bg-[#F3F4F6] px-4 py-2 rounded-lg hover:bg-emerald-50 hover:text-[#16A34A] transition-colors duration-200">MySQL</span>
            <span class="text-sm font-medium text-gray-700 bg-[#F3F4F6] px-4 py-2 rounded-lg hover:bg-emerald-50 hover:text-[#16A34A] transition-colors duration-200">Redis</span>
            <span class="text-sm font-medium text-gray-700 bg-[#F3F4F6] px-4 py-2 rounded-lg hover:bg-emerald-50 hover:text-[#16A34A] transition-colors duration-200">Docker</span>
            <span class="text-sm font-medium text-gray-700 bg-[#F3F4F6] px-4 py-2 rounded-lg hover:bg-emerald-50 hover:text-[#16A34A] transition-colors duration-200">AWS</span>
            <span class="text-sm font-medium text-gray-700 bg-[#F3F4F6] px-4 py-2 rounded-lg hover:bg-emerald-50 hover:text-[#16A34A] transition-colors duration-200">Git</span>
            <span class="text-sm font-medium text-gray-700 bg-[#F3F4F6] px-4 py-2 rounded-lg hover:bg-emerald-50 hover:text-[#16A34A] transition-colors duration-200">Figma</span>
            <span class="text-sm font-medium text-gray-700 bg-[#F3F4F6] px-4 py-2 rounded-lg hover:bg-emerald-50 hover:text-[#16A34A] transition-colors duration-200">Python</span>
            <span class="text-sm font-medium text-gray-700 bg-[#F3F4F6] px-4 py-2 rounded-lg hover:bg-emerald-50 hover:text-[#16A34A] transition-colors duration-200">TensorFlow</span>
            <span class="text-sm font-medium text-gray-700 bg-[#F3F4F6] px-4 py-2 rounded-lg hover:bg-emerald-50 hover:text-[#16A34A] transition-colors duration-200">ROS</span>
            <span class="text-sm font-medium text-gray-700 bg-[#F3F4F6] px-4 py-2 rounded-lg hover:bg-emerald-50 hover:text-[#16A34A] transition-colors duration-200">Arduino</span>
            <span class="text-sm font-medium text-gray-700 bg-[#F3F4F6] px-4 py-2 rounded-lg hover:bg-emerald-50 hover:text-[#16A34A] transition-colors duration-200">Raspberry Pi</span>
        </div>
    </div>
</section>
@endsection