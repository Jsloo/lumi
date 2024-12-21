<!DOCTYPE html>
<html class="no-js" lang="en-us" data-theme="light">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    {{-- <title>Tractour - Industrial / Manufacturing Tailwind CSS Template</title> --}}
    <meta name="keywords"
        content="Corporate Business HTML5 Css3 Template Tailwindcss Business, Chemicals, Commercial, Company, Engineering, Factory, Industry, Machinery, Manufacturing, Oil And Gas, Petroleum, Power, Refinery, Small Scale">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>{{ $pageTitle ? $pageTitle . ' | ' . config('app.name') : config('app.name') }}</title>

    <meta name="apple-mobile-web-app-capable" content="yes">
    @include('site.layouts.styles')

</head>

<body>
    @include('site.layouts.header')
    @include('site.layouts.sidebar')
    {{ $slot }}
    @include('site.layouts.footer')
    @include('site.layouts.scripts')
</body>

</html>
