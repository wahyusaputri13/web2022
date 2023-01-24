<!-- Favicons -->
@if($data_website->favicon == 'assets/pemda.ico')
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('') }}{{ $data_website->favicon }}" />
<link rel="icon" type="image/png" href="{{ asset('') }}{{ $data_website->favicon }}" />
@else
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('storage') }}/{{ $data_website->favicon }}" />
<link rel="icon" type="image/png" href="{{ asset('storage') }}/{{ $data_website->favicon }}" />
@endif

<!-- Fonts-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link
    href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

<!-- Css-->
<link rel="stylesheet" href="{{ asset('assets/front/asting/assets/css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/front/asting/assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/front/asting/assets/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/front/asting/assets/css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/front/asting/assets/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('assets/front/asting/assets/css/fontawesome-all.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/front/asting/assets/css/swiper.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/front/asting/assets/css/bootstrap-select.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/front/asting/assets/css/jarallax.css') }}">

<link rel="stylesheet" href="{{ asset('assets/front/asting/assets/css/jquery.mCustomScrollbar.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/front/asting/assets/css/bootstrap-datepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/front/asting/assets/css/vegas.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/front/asting/assets/css/nouislider.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/front/asting/assets/css/nouislider.pips.css') }}">
<link rel="stylesheet" href="{{ asset('assets/front/asting/assets/css/asting.css') }}">

<!-- Template styles -->
<link rel="stylesheet" href="{{ asset('assets/front/asting/assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/front/asting/assets/css/responsive.css') }}">