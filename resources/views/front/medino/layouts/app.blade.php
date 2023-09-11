<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.medino.includes.meta')
    @stack('before-style')
    @include('front.medino.includes.style')
    @stack('after-style')
    @vite([])
</head>

<body>
    <a href="#" id="websitename" hidden>{{ $data_website->web_name }}</a>
    @include('sweetalert::alert')
    @include('front.medino.includes.header')

    @yield('content')
    @include('front.medino.includes.footer')
    @stack('before-script')
    @include('front.medino.includes.script')
    @include('components.responsive-voice')
    @stack('after-script')
</body>

</html>