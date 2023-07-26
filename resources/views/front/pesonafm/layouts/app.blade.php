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
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4623751537139602"
        crossorigin="anonymous"></script>
    <!-- Pesona Dashboards -->
    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4623751537139602" data-ad-slot="3106864972"
        data-ad-format="auto" data-full-width-responsive="true"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    @yield('content')
    @include('front.pesonafm.includes.footer')
    @stack('before-script')
    @include('front.pesonafm.includes.script')
    @stack('after-script')
</body>

</html>