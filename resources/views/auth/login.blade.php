cls
@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md px-6">
        <div class="text-center mb-8">
            <a href="{{ url('/') }}" class="text-2xl font-semibold text-black">YJ<span class="text-emerald-500">.</span></a>
            <p class="text-sm text-[#8E8E93] mt-2">Sign in to your account</p>
        </div>

        <livewire:auth.send-otp />

        <p class="text-center text-xs text-[#8E8E93] mt-6">
            Admin access only
        </p>
    </div>
</div>
@endsection
