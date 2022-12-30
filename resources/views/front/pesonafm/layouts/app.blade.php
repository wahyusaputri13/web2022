<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.pesonafm.includes.meta')
    @stack('before-style')
    @include('front.pesonafm.includes.style')
    @stack('after-style')
</head>

<body class="bg-fixed bg-no-repeat bg-cover font-ubuntu text-white semok">
    @include('front.pesonafm.includes.header')
    @yield('content')
    @include('front.pesonafm.includes.footer')
    @stack('before-script')
    @include('front.pesonafm.includes.script')
    @stack('after-script')
</body>

</html>