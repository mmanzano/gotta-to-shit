<!DOCTYPE html>
<html lang="es">
<head>
    @include('scripts.head')
</head>
<body>

@include('sections.header')

@include('sections.navigation')

@include('sections.disclaimer')

@yield('content')

@include('sections.call_to_action')
@include('sections.footer')

@include('scripts.javascript')

<script>

    @yield('javascript')

</script>

</body>
</html>
