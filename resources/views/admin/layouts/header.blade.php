<div id="kt_app_header" class="app-header">
    <div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
        {{-- begin::Sidebar mobile toggle --}}
        <div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
            <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                <span class="svg-icon svg-icon svg-icon-2 svg-icon-md-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none">
                        <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor"></path>
                        <path opacity="0.3"
                            d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                            fill="currentColor"></path>
                    </svg></span>
                {{-- {!! getSvgIcon('icons/duotune/abstract/abs015.svg', 'svg-icon svg-icon-2 svg-icon-md-1') !!} --}}
            </div>
        </div>
        {{-- end::Sidebar mobile toggle --}}

        {{-- begin::Mobile logo --}}
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="" class="d-lg-none">
                <img alt="Logo" src="{{ secure_asset('assets/new_site/img/apspace-black 2.png') }}" class="h-30px" />
            </a>
        </div>
        {{-- end::Mobile logo --}}

        {{-- begin::Header wrapper --}}
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
            @include('admin.layouts.partials._header-menu')
            @include('admin.layouts.partials._header-navbar')
        </div>
        {{-- end::Header wrapper --}}
    </div>
</div>
