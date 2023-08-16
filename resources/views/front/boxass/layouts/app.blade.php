<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.boxass.includes.meta')
    @stack('before-style')
    @include('front.boxass.includes.style')
    @stack('after-style')
</head>

<body>
    <main>
        <a href="#" id="websitename" hidden>{{ $data_website->web_name }}</a>
        @include('sweetalert::alert')
        @include('front.boxass.includes.header')
        @yield('content')
        @include('front.boxass.includes.footer')
        @stack('before-script')
        @include('front.boxass.includes.script')
        @include('components.responsive-voice')
        @stack('after-script')
    </main>
</body>

</html>