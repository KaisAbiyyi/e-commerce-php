<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Simple E-commerce @yield('title')</title>
</head>

<body class="bg-slate-200">
    @include('components.navbar')
    <div class="container pt-4 mx-auto flex flex-col">
        @yield('content')
    </div>
</body>

</html>
