<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.a.includes.meta')

    <title>{{ $data_website->web_name }}</title>

    @stack('before-style')
    @include('front.a.includes.style')
    @stack('after-style')
</head>

<body>
    @include('front.a.includes.header')
    @yield('content')
    @include('front.a.includes.footer')
    @stack('before-script')
    @include('front.a.includes.script')
    @stack('after-script')

</body>

</html>