<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.anada.includes.meta')
    @stack('before-style')
    @include('front.anada.includes.style')
    @stack('after-style')
</head>

<body>
    <a href="#" id="websitename" hidden>{{ $data_website->web_name }}</a>
    @include('sweetalert::alert')
    @include('front.anada.includes.header')
    
    @yield('content')
    @include('front.anada.includes.footer')
    @stack('before-script')
    @include('front.anada.includes.script')
    @include('components.responsive-voice')
    @stack('after-script')
</body>

</html>
