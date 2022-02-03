<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="" />
	<meta name="description" content="" />    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Livewire-Blog') }}</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/livewire.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/livewire.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/livewire.png">
    <link rel="mask-icon" href="/favicon/livewire.png" color="#ff2d20">
    <link rel="shortcut icon" href="favicon/favicon.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- TINY CLOUD // text editor -->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <!-- FONTAWESOME JS -->
    <script src="{{ asset('lib/fontawesome.js') }}" defer></script>
    @yield('head')
</head>
<body>
    @include('components.navbar')

    <div id="app">        

        @yield('content')

    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
</body>
</html>
