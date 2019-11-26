<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('fragments.head')

<body>
@include('fragments.navigation')
@yield('content')
@include('fragments.footer')

</body>
</html>