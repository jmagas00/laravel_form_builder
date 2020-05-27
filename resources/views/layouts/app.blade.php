<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('layouts.partials.head')

    <body>

        @yield('content')
     
    </body>


</html>
