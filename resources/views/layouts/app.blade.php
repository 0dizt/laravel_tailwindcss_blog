<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    {{-- Style --}}
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="font-sans antialiased text-gray-600 min-h-full flex flex-col" scroll-region="" data-new-gr-c-s-check-loaded="14.1095.0" data-gr-ext-installed="" cz-shortcut-listen="true">
    @include('partials.navbar')

    {{-- @if (session()->has('success'))
    <div class="flex p-4 mb-4 text-sm text-green-800 bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
        </svg>
        <span class="sr-only">Info</span>
        <div>
            {{session()->get('success')}}
    </div>
    </div>
    @endif --}}

    @yield('content')


    @include('partials.footer')
</body>
</html>
