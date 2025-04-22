<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-light">

    <header class="sticky top-0 header-bg flex justify-between items-center fix z-20">
        <p class="text-2xl font-bold ms-10 p-0 m-0 leading-none">LISTA</p>

        <nav class="w-max">
            <ul class="flex flex-nowrap items-center">

                <li class="m-2 text-gray-600"><a href="#">Calendar</a></li>
                <li class="m-2 text-gray-600"><a href="#">New Task</a></li>
                <li class="m-2 text-gray-600"><a href="#">Profile</a></li>
                <li class="m-1 me-5 text-gray-600 btn-outline"><a href="{{ route('logout')}}">Log Out</a></li>

            </ul>
        </nav>
    </header>

    <main class=" w-full border">
        {{ $slot }}
    </main>
</body>

</html>