<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>
        @section('title') {{ config('app.name') }} @show
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="mx-auto w-[900px]">
        <img src="../logoTest.png" alt="logo" width="200">
        <div class="w-[900px] h-[10px] rounded bg-amber-900"></div>
    </div>

    @yield('content')
</body>
</html>