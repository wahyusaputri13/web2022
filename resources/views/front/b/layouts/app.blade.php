<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.b.includes.meta')

    <title>{{ $data_website->web_name }}</title>

    @stack('before-style')
    @include('front.b.includes.style')
    @stack('after-style')
</head>

<body>
    @include('front.b.includes.header')
    @yield('content')
    @include('front.b.includes.footer')
    @stack('before-script')
    @include('front.b.includes.script')
    @stack('after-script')

</body>

</html>