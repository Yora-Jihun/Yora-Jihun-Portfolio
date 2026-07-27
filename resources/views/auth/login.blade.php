@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md px-6">
        <div class="text-center mb-8">
            <a href="{{ url('/') }}" class="text-2xl font-semibold text-black">YJ<span class="text-emerald-500">.</span></a>
            <p class="text-sm text-[#8E8E93] mt-2">Sign in to your account</p>
        </div>

        @if($errors->any())
            <div class="bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded mb-6">
                <ul class="list-disc list-inside text-sm">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">Email</label>
                <input type="email" name="email" required autofocus class="w-full px-4 py-3 rounded-lg border border-[#E5E7EB] bg-white text-sm focus:outline-none focus:border-[#16A34A] focus:ring-1 focus:ring-[#16A34A] transition-all">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">Password</label>
                <input type="password" name="password" required class="w-full px-4 py-3 rounded-lg border border-[#E5E7EB] bg-white text-sm focus:outline-none focus:border-[#16A34A] focus:ring-1 focus:ring-[#16A34A] transition-all">
            </div>

            <div class="flex items-center justify-between">
                <label class="flex items-center gap-2">
                    <input type="checkbox" name="remember" class="w-4 h-4 rounded border-[#E5E7EB] text-[#16A34A] focus:ring-[#16A34A]">
                    <span class="text-sm text-gray-700">Remember me</span>
                </label>
            </div>

            <button type="submit" class="w-full bg-black text-white text-sm font-semibold py-3 px-6 rounded hover:bg-gray-800 transition-colors">Sign in</button>
        </form>

        <p class="text-center text-xs text-[#8E8E93] mt-6">
            Demo: admin@example.com / password
        </p>
    </div>
</div>
@endsection
