<!DOCTYPE html>
<html lang="en">
<head>
    @include('global.header')
    @yield('styles')
    <title>{{\Config::get('app.appName')}} - @yield('title')</title>
</head>
<body>
@include('global.navbar')
<div class="container">
    @yield('content')
</div>
@include('global.js')
@yield('js')
</body>