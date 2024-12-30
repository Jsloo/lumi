

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/site/img/favicon.ico') }}">
<!-- CSS here -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@400;600;700&family=Oswald:wght@700&display=swap"
    rel="stylesheet">


<link rel="stylesheet" href="{{ asset('assets/site/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/site/css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/site/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('assets/site/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/site/css/meanmenu.css') }}">
<link rel="stylesheet" href="{{ asset('assets/site/css/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('assets/site/css/jquery.barfiller.css') }}">
<link rel="stylesheet" href="{{ asset('assets/site/css/jquery-ui.css') }}">
<link rel="stylesheet" href="{{ asset('assets/site/css/nice-select.css') }}">
<link rel="stylesheet" href="{{ asset('assets/site/css/nav-tabs.css') }}">
<link rel="stylesheet" href="{{ asset('assets/site/css/jquery.barfiller.css') }}">


<link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('assets/site/css/style.css') }}">

<meta name="csrf-token" content="{{ csrf_token() }}">

@livewireStyles
@stack('styles')
