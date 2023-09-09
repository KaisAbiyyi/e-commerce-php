<div class="py-4 bg-red-500">
    <div class="container flex gap-4 mx-auto">
        <a href="/" class="text-3xl font-bold uppercase text-slate-100">E-Commerce</a>
        <form class="flex flex-grow">
            <input type="search" name="search" id="search" class="flex-grow px-4 py-2 outline-none bg-slate-100 focus:outline-2 focus:outline-offset-2 focus:outline-slate-100">
            <button type="submit" class="px-4 py-2 font-bold text-red-500 uppercase duration-200 bg-slate-100 hover:bg-orange-500 hover:text-slate-100">Search</button>
        </form>
        <div class="flex gap-4">
            <a href="{{ route('register.view') }}" class="px-4 py-2 font-bold text-red-500 uppercase duration-200 bg-slate-100 hover:bg-orange-500 hover:text-slate-100">Register</a>
            <a href="/" class="px-4 py-2 font-bold text-red-500 uppercase duration-200 bg-slate-100 hover:bg-orange-500 hover:text-slate-100">Login</a>
        </div>
    </div>
</div>
