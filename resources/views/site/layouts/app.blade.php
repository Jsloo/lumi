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
    <div class="hero-area relative mt-[50px]">
        @include('site.layouts.menu')
        {{-- @if (!Route::is('home'))
            <div class="sc-breadcrumbs">
                <div class="container">
                    <div class="breadcrumbs-text">
                        <h1 class="page-title sc-sm-pt-20 text-uppercase">{{ $pageTitle }}</h1>
                        {{ Breadcrumbs::render() }}
                    </div>
                </div>
            </div>
        @endif --}}

        @if(!Route::is('home'))
            <div class="tractour-breadcroumb breadcroumb-bg text-center bg-[center_center] bg-cover relative h-[300px] bg-[url({{ asset('assets/site/img/breadcroumb/breadcroumb.jpg') }})] pt-[130px] pb-5 px-0 before:content-[''] before:absolute before:w-full before:h-full before:opacity-80 before:left-0 before:top-0 before:!bg-black">
                <div class="container relative">
                    <div class="flex flex-wrap mx-[-12px]">
                        <div class="w-full flex-[0_0_auto] px-[12px] max-w-full">
                            <h2 class=" text-white text-[40px] font-semibold leading-[45px] capitalize mb-20 font-Montserrat sm:mb-[50px]">{{ $pageTitle }}</h2>
                            <h4 class=" text-white text-[17px] float-left font-OpenSans">
                                {{ Breadcrumbs::render() }}
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="slider-area">
                <div class="tractor-main-slider owl-carousel owl-theme">
                    <div style="background-image: url('{{ asset('assets/site/img/home1.jpg') }}')"
                        class="tractor-single-slider slid-bg-1 bg-[url(assets/site/img/home1.jpg)] bg-[center_center] bg-cover text-white h-[700px] relative before:content-[''] before:w-full before:h-full before:absolute before:left-0 before:top-0 before:bg-[linear-gradient(to_right,rgba(0,0,0,0.87)0%,rgba(0,0,0,0.87)50%,rgba(0,0,0,0)100%)] z-[1] before:z-[-1]">
                        <div class="tractor-single-table table h-full w-full">
                            <div class="tractor-single-tablecell table-cell align-middle">
                                <div class="container relative">
                                    <div class="flex flex-wrap mx-[-12px]">
                                        <div class="w-full flex-[0_0_auto] px-[12px] max-w-full">
                                            <h1 class=" text-white text-[55px] font-bold uppercase leading-[80px]">
                                                Your 
                                                <span class="text-[#ffab00]"> Trusted</span> 
                                                Partner in
                                                <br />
                                                <span class="text-[#ffab00]"> Safety</span> 
                                                Solutions  
                                            </h1>
                                            <p class=" text-white text-lg mt-5 mb-[33px] mx-0">
                                                Delivering trusted safety solutions for traffic management, personal protection, and 
                                                industrial needs across Malaysia and beyond.                                            
                                            </p>
                                            <a href="{{ route('category') }}"
                                                class=" text-[#222222] text-[15px] font-semibold tracking-[1px] leading-[21px] uppercase px-5 py-2.5 border-0 font-OpenSans inline-block btnl btn-type-1 m-[0_7px]">our
                                                products</a>
                                            <a href="{{ route('contact')}}"
                                                class=" text-[#222222] text-[15px] font-semibold tracking-[1px] leading-[21px] uppercase px-5 py-2.5 border-0 font-OpenSans inline-block btnl btn-type-2 m-[0_7px]">enquire
                                                now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="background-image: url('{{ asset('assets/site/img/home2.jpg') }}')"
                        class="tractor-single-slider slid-bg-2 bg-[url(assets/site/img/home1.jpg)] bg-[center_center] bg-cover text-white h-[700px] relative before:content-[''] before:w-full before:h-full before:absolute before:left-0 before:top-0 before:bg-[linear-gradient(to_right,rgba(0,0,0,0.87)0%,rgba(0,0,0,0.87)50%,rgba(0,0,0,0)100%)] z-[1] before:z-[-1]">
                        <div class="tractor-single-table table h-full w-full">
                            <div class="tractor-single-tablecell table-cell align-middle">
                                <div class="container">
                                    <div class="flex flex-wrap mx-[-12px]">
                                        <div class="w-full flex-[0_0_auto] px-[12px] max-w-full">
                                            <h1 class=" text-white text-[55px] font-bold uppercase leading-[80px]">
                                                Your 
                                                <span class="text-[#ffab00]"> Trusted</span> 
                                                Partner in
                                                <br />
                                                <span class="text-[#ffab00]"> Safety</span> 
                                                Solutions  
                                            </h1>
                                            <p class=" text-white text-lg mt-5 mb-[33px] mx-0">
                                                Delivering trusted safety solutions for traffic management, personal protection, and 
                                                industrial needs across Malaysia and beyond.                                            
                                            </p>
                                            <a href="{{ route('category') }}"
                                                class=" text-[#222222] text-[15px] font-semibold tracking-[1px] leading-[21px] uppercase px-5 py-2.5 border-0 font-OpenSans inline-block btnl btn-type-1 m-[0_7px]">our
                                                products</a>
                                            <a href="{{ route('contact')}}"
                                                class=" text-[#222222] text-[15px] font-semibold tracking-[1px] leading-[21px] uppercase px-5 py-2.5 border-0 font-OpenSans inline-block btnl btn-type-2 m-[0_7px]">enquire
                                                now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider area end -->
            <!-- blocks services area stat -->
            {{-- <div class="blocks-services-area text-center mb-[100px] mt-[-100px] wow fadeInUp z-[9] relative">
                <div class="container">
                    <div class="flex flex-wrap mx-[-12px]">
                        <div class="w-4/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                            <div class="single-blocks-services group sm:mb-5">
                                <div
                                    class="single-blocks-img relative before:content-[''] before:absolute before:rounded-[5px] before:border-2 before:border-solid before:border-white before:inset-2.5">
                                    <img src="{{ asset('assets/site/img/blocks/blocks-1.jpg')  }}" alt=""
                                        class="img-fluid w-full rounded-[5px]" />
                                </div>
                                <h3>
                                    <a class=" text-lg font-semibold capitalize block mt-[15px] font-Montserrat"
                                        href="#">welding machine using</a>
                                </h3>
                                <p class=" text-[#363636] m-[15px_20px_20px]">On the other hand, we denounce with righteous
                                    indignation and dislike men who are so beguiled and demor</p>
                                <a href="#"
                                    class=" text-[#222222] text-[15px] font-semibold tracking-[1px] leading-[21px] uppercase px-5 py-2.5 border-0 font-OpenSans inline-block">
                                    <i
                                        class="fa fa-angle-right text-[30px] leading-[48px] w-[50px] h-[50px] text-white transition-all duration-[0.3s] rounded-[50%] bg-[#484848] group-hover:bg-[#ffab00]"></i>
                                </a>
                            </div>
                        </div>
                        <div class="w-4/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                            <div class="single-blocks-services group sm:mb-5">
                                <div
                                    class="single-blocks-img relative before:content-[''] before:absolute before:rounded-[5px] before:border-2 before:border-solid before:border-white before:inset-2.5">
                                    <img src="{{ asset('assets/site/img/blocks/blocks-2.jpg')  }}" alt=""
                                        class="img-fluid w-full rounded-[5px]" />
                                </div>
                                <h3>
                                    <a class=" text-lg font-semibold capitalize block mt-[15px] font-Montserrat"
                                        href="#">new compost technology</a>
                                </h3>
                                <p class=" text-[#363636] m-[15px_20px_20px]">On the other hand, we denounce with righteous
                                    indignation and dislike men who are so beguiled and demor</p>
                                <a href="#"
                                    class=" text-[#222222] text-[15px] font-semibold tracking-[1px] leading-[21px] uppercase px-5 py-2.5 border-0 font-OpenSans inline-block">
                                    <i
                                        class="fa fa-angle-right text-[30px] leading-[48px] w-[50px] h-[50px] text-white transition-all duration-[0.3s] rounded-[50%] bg-[#484848] group-hover:bg-[#ffab00]"></i>
                                </a>
                            </div>
                        </div>
                        <div class="w-4/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                            <div class="single-blocks-services group sm:mb-5">
                                <div
                                    class="single-blocks-img relative before:content-[''] before:absolute before:rounded-[5px] before:border-2 before:border-solid before:border-white before:inset-2.5">
                                    <img src="{{ asset('assets/site/img/blocks/blocks-3.jpg')  }}" alt=""
                                        class="img-fluid w-full rounded-[5px]" />
                                </div>
                                <h3>
                                    <a class=" text-lg font-semibold capitalize block mt-[15px] font-Montserrat"
                                        href="#">new welding machine</a>
                                </h3>
                                <p class=" text-[#363636] m-[15px_20px_20px]">On the other hand, we denounce with righteous
                                    indignation and dislike men who are so beguiled and demor</p>
                                <a href="#"
                                    class=" text-[#222222] text-[15px] font-semibold tracking-[1px] leading-[21px] uppercase px-5 py-2.5 border-0 font-OpenSans inline-block">
                                    <i
                                        class="fa fa-angle-right text-[30px] leading-[48px] w-[50px] h-[50px] text-white transition-all duration-[0.3s] rounded-[50%] bg-[#484848] group-hover:bg-[#ffab00]"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        @endif
        {{ $slot }}
    </div>
    @include('site.layouts.footer')
    @include('site.layouts.scripts')
</body>

</html>
