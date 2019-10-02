<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('fragments.head')

<body id="page-top">

@include('fragments.navigation')

<div id="content">
    @yield('content')
</div>

{{-- @include('fragments.footer') --}}

</body>

</html>