@extends('pages.auth.layouts.index')
@section('title', 'Log In User')
@section('navTitle', 'Log in')

@section('content')
    <div class="flex gap-4">
        <div class="flex items-center justify-center w-2/3">
            <h1 class="text-6xl font-bold text-slate-100">E-Commerce</h1>
        </div>
        <form action="{{ route('login.post') }}" method="POST" class="flex flex-col w-1/3 gap-4 p-6 bg-slate-50">
            @csrf
            <h1 class="text-xl font-bold text-red-500">Login</h1>
            @error('credentials')
                <div class="px-2 py-1 font-bold text-center bg-red-700 errors text-slate-100">
                    {{ $message }}
                </div>
            @enderror
            <div class="flex flex-col gap-2">
                <label for="email" class="text-sm font-semibold uppercase">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your email..." required
                    class="px-4 py-2 outline-none bg-slate-200 focus:outline-2 focus:outline-offset-2 focus:outline-slate-200">
                @error('email')
                    <div class="text-sm font-bold text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="flex flex-col gap-2">
                <label for="password" class="text-sm font-semibold uppercase">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password..." required
                    class="px-4 py-2 outline-none bg-slate-200 focus:outline-2 focus:outline-offset-2 focus:outline-slate-200">
                @error('password')
                    <div class="text-sm font-bold text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="px-4 py-2 font-bold uppercase duration-200 bg-red-500 text-slate-100 hover:bg-red-400">Log In</button>
            <span>
                New to E-commerce?
                <a href="{{ route('register.get') }}" class="font-semibold text-red-500">Register</a>
            </span>
        </form>
    </div>

    <script type="module">
        if ($('.errors')) {
            setTimeout(() => {
                $('.errors').remove()
            }, 5000);
        }
    </script>
@endsection
