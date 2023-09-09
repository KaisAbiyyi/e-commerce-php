<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>

<body>
    @include('pages.auth.components.navbar')
    <div class="bg-gradient-to-br from-red-700 to-rose-500">
        <div class="container p-4 py-10 mx-auto">
            @yield('content')
        </div>
    </div>
</body>

</html>
