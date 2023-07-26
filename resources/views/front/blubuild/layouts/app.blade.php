<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.blubuild.includes.meta')
    @stack('before-style')
    @include('front.blubuild.includes.style')
    @stack('after-style')
</head>

<body>
    <main>
        <a href="#" id="websitename" hidden>{{ $data_website->web_name }}</a>
        @include('sweetalert::alert')
        @include('front.blubuild.includes.header')
        <script async
            src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4623751537139602"
            crossorigin="anonymous"></script>
        <!-- Pesona Dashboards -->
        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4623751537139602"
            data-ad-slot="3106864972" data-ad-format="auto" data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        @yield('content')
        @include('front.blubuild.includes.footer')
        @stack('before-script')
        @include('front.blubuild.includes.script')
        @include('components.responsive-voice')
        @stack('after-script')
    </main>
</body>

</html>