<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex, nofollow, noimageindex, nosnippet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="{{ secure_asset('assets/admin/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ secure_asset('assets/admin/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <livewire:styles />
    <title>{{ $pageTitle }} | {{ config('app.name') }}</title>
</head>

<body id="kt_body" class="app-blank">
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid justify-content-center">
            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
                <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                    <div class="w-100 w-lg-500px p-10">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0)" class="mb-12">
                                <img alt="Logo" src="{{ secure_asset('assets/site/img/lumiLogo.png') }}" class="h-60px h-lg-75px" />
                            </a>
                        </div>
                        {{ $slot }}
                    </div>
                </div>

            </div>
            <div class="d-none d-lg-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2"
                style="background-image: url({{ secure_asset('assets/admin/media/misc/auth-bg.png') }})">
                <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
                    <img class="mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20" src="{{ secure_asset('assets/admin/media/misc/safety.webp') }}"
                        alt="" />
                    <h1 class="text-white fs-2qx fw-bolder text-center mb-7">Fast, Efficient and Productive</h1>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ secure_asset('assets/admin/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ secure_asset('assets/admin/js/scripts.bundle.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
    <x-livewire-alert::scripts />
    <livewire:scripts />

</body>

</html>
