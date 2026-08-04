<div>
    @if(session('status'))
        <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 px-4 py-3 rounded mb-6 text-sm">
            {{ session('status') }}
        </div>
    @endif

    @if($errors->any())
        <div class="bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded mb-6 text-sm">
            {{ $errors->first() }}
        </div>
    @endif

    <form wire:submit="send" class="space-y-6">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1.5">Email</label>
            <input type="email" wire:model="email" required autofocus class="w-full px-4 py-3 rounded-lg border border-[#E5E7EB] bg-white text-sm focus:outline-none focus:border-[#16A34A] focus:ring-1 focus:ring-[#16A34A] transition-all" placeholder="you@example.com">
        </div>

        <button type="submit" wire:loading.attr="disabled" class="w-full inline-flex items-center justify-center gap-2 bg-black text-white text-sm font-semibold py-3 px-6 rounded hover:bg-gray-800 transition-colors disabled:opacity-70 disabled:cursor-not-allowed">
            <span wire:loading.remove wire:target="send">Send OTP</span>
            <span wire:loading wire:target="send">Sending...</span>
            <svg wire:loading.remove wire:target="send" class="w-4 h-4" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12L12 4"/><path d="M5 4h7v7"/></svg>
        </button>
    </form>
</div>