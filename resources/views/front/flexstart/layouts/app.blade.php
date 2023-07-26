<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.flexstart.includes.meta')
    @stack('before-style')
    @include('front.flexstart.includes.style')
    @stack('after-style')
</head>

<body id="main">
    <a href="#" id="websitename" hidden>{{ $data_website->web_name }}</a>
    @include('sweetalert::alert')
    @include('front.flexstart.includes.header')
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4623751537139602"
        crossorigin="anonymous"></script>
    <!-- Pesona Dashboards -->
    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4623751537139602" data-ad-slot="3106864972"
        data-ad-format="auto" data-full-width-responsive="true"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    @yield('content')
    @include('front.flexstart.includes.footer')
    @stack('before-script')
    @include('front.flexstart.includes.script')
    @include('components.responsive-voice')
    @stack('after-script')
</body>

</html>