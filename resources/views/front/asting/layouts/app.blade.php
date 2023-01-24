<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.asting.includes.meta')
    @stack('before-style')
    @include('front.asting.includes.style')
    @stack('after-style')
</head>

<body>
    @include('sweetalert::alert')
    @include('front.asting.includes.header')
    @yield('content')
    @include('front.asting.includes.footer')
    @stack('before-script')
    @include('front.asting.includes.script')
    @stack('after-script')
</body>

</html>