<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Super Gestão - @yield('title')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    @include('site.layouts.header')
    @yield('content')
    @include('site.layouts.footer')
</body>


</html>