<!-- php artisan make:model NAME -mc -->

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('fa/css/font-awesome.min.css') }}">
    </head>
    <body>
        @include('layouts.header')
       
        @yield('content')
       
       
    
       
        
            
    </body>
</html>