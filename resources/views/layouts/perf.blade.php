<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
@include('partials.head')
<body >

<!-- Header -->

@include('partials.header')
<!-- Content -->

@yield('content')

<!-- Footer
<div class="footer">


</div>
 -->
<!-- Scripts -->
@include('partials.javascripts')
</body>
</html>
