<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.meta')

    <title>@yield('title') | Football Analytics</title>

    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
</head>

<body>
    @include('includes.header')
    @yield('content')
    @include('includes.footer')
    @stack('before-script')
    @include('includes.script')
    @stack('after-script')

</body>

</html>