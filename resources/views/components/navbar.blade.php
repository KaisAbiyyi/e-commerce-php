<div class="py-4 bg-red-500">
    <div class="container flex gap-4 mx-auto">
        <a href="/" class="text-3xl font-bold uppercase text-slate-100">E-Commerce</a>
        <form class="flex flex-grow">
            <input type="search" name="search" id="search" class="flex-grow px-4 py-2 outline-none bg-slate-100 focus:outline-2 focus:outline-offset-2 focus:outline-slate-100">
            <button type="submit" class="px-4 py-2 font-bold uppercase duration-200 text-slate-600 bg-slate-100 hover:bg-slate-200">Search</button>
        </form>
        <div class="flex">
            @guest
                <a href="{{ route('register.get') }}" class="px-4 py-2 font-bold uppercase duration-200 text-slate-600 bg-slate-100 hover:bg-slate-200">Register</a>
                <a href="{{ route('login.get') }}" class="px-4 py-2 font-bold uppercase duration-200 text-slate-600 bg-slate-100 hover:bg-slate-200">Log In</a>

            @endguest
            @auth
                <div class="relative flex flex-col">
                    <button class="h-full px-4 text-2xl font-bold uppercase duration-200 text-slate-600 bg-slate-100 hover:bg-slate-200"
                        id="mainNavProfileDropdownToggler">{{ Auth::user()->name[0] }}</button>
                    <div class="absolute right-0 flex flex-col gap-2 p-2 translate-y-2 top-full bg-slate-100 drop-shadow-sm" id="mainNavProfileDropdown">
                        <a href="" class="w-full px-2 py-1 text-sm font-semibold duration-200 whitespace-nowrap text-slate-600 hover:bg-slate-200">Profile</a>
                        <a href="{{ route('logout') }}" class="w-full px-2 py-1 text-sm font-semibold duration-200 whitespace-nowrap text-slate-600 hover:bg-slate-200">Log Out</a>
                    </div>
                </div>
            @endauth
        </div>
    </div>
</div>

<script type="module">
    $(document).ready(() => {
        $("#mainNavProfileDropdown").slideUp()
        let state = 0
        $("#mainNavProfileDropdownToggler").click(() => {
            if (state === 0) {
                $("#mainNavProfileDropdown").slideDown(200)
                state = 1
            } else {
                $("#mainNavProfileDropdown").slideUp(200)
                state = 0
            }
        })

        $(window).click((e) => {
            if (e.target.id !== 'mainNavProfileDropdown' && e.target.id !== 'mainNavProfileDropdownToggler') {
                state = 0
                $("#mainNavProfileDropdown").slideUp(200)
            }
        })
    })
</script>
