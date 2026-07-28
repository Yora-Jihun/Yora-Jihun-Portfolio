<div>
    @if($status)
        <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 px-4 py-3 rounded-lg mb-6 text-sm animate-fade-in">
            {{ $status }}
        </div>
    @endif
    <form class="text-left space-y-4" wire:submit="submit">
        <div>
            <label class="block text-xs font-medium text-gray-700 mb-1.5">Name</label>
            <input type="text" wire:model="name" required class="w-full px-4 py-3 rounded-lg border border-[#E5E7EB] bg-white text-sm focus:outline-none focus:border-[#16A34A] focus:ring-1 focus:ring-[#16A34A] transition-all" placeholder="Your name">
            @error('name')<p class="text-red-600 text-xs mt-1">{{ $message }}</p>@enderror
        </div>
        <div>
            <label class="block text-xs font-medium text-gray-700 mb-1.5">Email</label>
            <input type="email" wire:model="email" required class="w-full px-4 py-3 rounded-lg border border-[#E5E7EB] bg-white text-sm focus:outline-none focus:border-[#16A34A] focus:ring-1 focus:ring-[#16A34A] transition-all" placeholder="you@example.com">
            @error('email')<p class="text-red-600 text-xs mt-1">{{ $message }}</p>@enderror
        </div>
        <div>
            <label class="block text-xs font-medium text-gray-700 mb-1.5">Message</label>
            <textarea wire:model="message" rows="5" required class="w-full px-4 py-3 rounded-lg border border-[#E5E7EB] bg-white text-sm focus:outline-none focus:border-[#16A34A] focus:ring-1 focus:ring-[#16A34A] transition-all resize-none" placeholder="What are you working on?"></textarea>
            @error('message')<p class="text-red-600 text-xs mt-1">{{ $message }}</p>@enderror
        </div>
        <button type="submit" wire:loading.attr="disabled" class="w-full inline-flex items-center justify-center bg-black text-white text-[0.6875rem] font-semibold tracking-[0.1em] uppercase py-[14px] px-7 rounded-[3px] hover:bg-[#333333] transition-colors duration-200 group disabled:opacity-70 disabled:cursor-not-allowed">
            <span wire:loading.remove>Send message</span>
            <span wire:loading>Sending...</span>
            <svg class="arrow inline-block ml-2 w-3.5 h-3.5 transition-transform duration-200 group-hover:translate-x-[3px]" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12L12 4"/><path d="M5 4h7v7"/></svg>
        </button>
    </form>
</div>
