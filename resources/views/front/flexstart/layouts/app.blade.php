<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.flexstart.includes.meta')

    <title>{{ $data_website->web_name }}</title>

    @stack('before-style')
    @include('front.flexstart.includes.style')
    @stack('after-style')
</head>

<body>
    @include('sweetalert::alert')
    @include('front.flexstart.includes.header')
    @yield('content')
    @include('front.flexstart.includes.footer')
    @stack('before-script')
    @include('front.flexstart.includes.script')
    @stack('after-script')

</body>

</html>