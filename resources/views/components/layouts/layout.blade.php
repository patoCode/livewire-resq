<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name', 'Laravel')}}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @fluxAppearance
</head>
<body class="bg-six dark:bg-one text-four dark:text-five min-h-screen">
    @livewire('logout')
    @include('partials.sidebar', $user)
    @include('partials.header', $user)
    <flux:main>


        {{ $slot }}

    </flux:main>
    <div class="absolute bottom-0 p-4 text-[10px] w-full text-center">
        Copyright &copy; | {{ date("Y") }}
    </div>
    @livewireScripts
    @fluxScripts
</body>
</html>
