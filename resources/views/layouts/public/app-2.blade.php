<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrainSpace | @yield("name")</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</head>
<body>
    <div id="wrapper">

        @include('layouts.public.nav')

        <div class="overflow-y-auto overflow-x-hidden pt-[80px] w-full h-screen">
            <div class="sm:p-2 p-1">

                @yield('content')

            </div>
        </div>
    </div>
</body>
</html>
