<!DOCTYPE html>
<html lang="en">

<head>
    @include('back.material.includes.meta')

    <title>{{ $data_website->web_name }}</title>

    @stack('before-style')
    @include('back.material.includes.style')
    @stack('after-style')
    @vite([])
</head>

<body>
    @include('sweetalert::alert')
    @auth
    @include('back.material.includes.header')
    @endauth
    @yield('content')
    @include('back.material.includes.footer')
    @stack('before-script')
    @include('back.material.includes.script')
    @stack('after-script')
</body>

</html>