<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dapur Panen | {{ $title }}</title>
    <link rel="icon" type="image/x-icon" href="assets/icon.png">
    @vite('resources/css/app.css')
</head>

<body>

    @include('components.navbar')
    <main class="relative">
        <img src="assets/vector5.png" class="absolute left-[-20px] top-[1000px]" />
        @yield('main')
    </main>
    @include('components.footer')
    @vite('resources/js/events.js')
</body>

</html>
