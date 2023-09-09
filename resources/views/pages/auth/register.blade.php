@extends('pages.auth.layouts.index')
@section('title', 'Register new User')

@section('content')
    <div class="flex gap-4">
        <div class="flex items-center justify-center w-2/3">
            <h1 class="text-6xl font-bold text-slate-100">E-Commerce</h1>
        </div>
        <form action="{{ route('register.post') }}" method="POST" class="flex flex-col w-1/3 gap-4 p-6 bg-slate-50">
            @csrf
            <h1 class="text-xl font-bold text-red-500">Register</h1>
            <div class="flex flex-col gap-2">
                <label for="name" class="text-sm font-semibold uppercase">Name</label>
                <input type="text" name="name" id="name" placeholder="Enter your name..."
                    class="px-4 py-2 outline-none bg-slate-200 focus:outline-2 focus:outline-offset-2 focus:outline-slate-200">
            </div>
            <div class="flex flex-col gap-2">
                <label for="email" class="text-sm font-semibold uppercase">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your email..."
                    class="px-4 py-2 outline-none bg-slate-200 focus:outline-2 focus:outline-offset-2 focus:outline-slate-200">
            </div>
            <div class="flex flex-col gap-2">
                <label for="password" class="text-sm font-semibold uppercase">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password..."
                    class="px-4 py-2 outline-none bg-slate-200 focus:outline-2 focus:outline-offset-2 focus:outline-slate-200">
            </div>
            <button type="submit" class="px-4 py-2 font-bold uppercase duration-200 bg-red-500 text-slate-100 hover:bg-red-400">REGISTER</button>
        </form>
    </div>
@endsection
