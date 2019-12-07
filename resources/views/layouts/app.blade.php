<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">        
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div id="app">                
        @include('partials.header')
        
        <main class="py-4">
            @yield('content')
        </main>    
    </div>
    @include('sweetalert::alert')
    <script src="https://kit.fontawesome.com/e440d58f67.js" crossorigin="anonymous"></script>
    
</body>
</html>
