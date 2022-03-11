<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.includes.meta')

    <title>{{ $data_website->web_name }}</title>

    @stack('before-style')
    @include('front.includes.style')
    @stack('after-style')
</head>

<body>
    @include('front.includes.header')
    @yield('content')
    @include('front.includes.footer')
    @stack('before-script')
    @include('front.includes.script')
    @stack('after-script')

</body>

</html>