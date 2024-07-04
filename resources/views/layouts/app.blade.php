@props(['title'])


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{isset($title) ? $title . '-' : ''}}  {{config('app.name','Laravel')}}</title>

    <script src="https://cdn.tailwindcss.com"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

</head>

<body class="font-light antialiased">
 
<x-shared.header/>

@yield('hero')

<main class="container mx-auto px-5 flex flex-grow">

    {{$slot}}
</main>

<x-shared.footer/>

 

@stack('modals')

@livewireScripts
</body>

</html>