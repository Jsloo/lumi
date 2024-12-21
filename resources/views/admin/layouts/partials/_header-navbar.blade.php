<div class="app-navbar flex-shrink-0">
    <div class="app-navbar-item ms-1 ms-md-3" id="kt_header_user_menu_toggle">
        <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
            data-kt-menu-placement="bottom-end">
            <img class="object-fit-cover" src="{{ secure_asset('assets/admin/media/placeholder/placeholder-image.jpg') }}"
                alt="{{ auth()->user()->name }}" />
        </div>

        {{-- begin::User account menu --}}
        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
            data-kt-menu="true">
            <div class="menu-item px-3">
                <div class="menu-content d-flex align-items-center px-3">
                    <div class="symbol symbol-50px me-5">
                        <img class="object-fit-cover" src="{{ secure_asset('assets/admin/media/placeholder/placeholder-image.jpg') }}"
                            alt="{{ auth()->user()->name }}" />
                    </div>
                    <div class="d-flex flex-column">
                        <div class="fw-bold d-flex align-items-center fs-5">{{ auth()->user()->name }}</div>
                        <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">{{ auth()->user()->email }}</a>
                    </div>
                </div>
            </div>

            <div class="separator my-2"></div>



            <div class="menu-item px-5">
                <a href="{{ route('admin.logout') }}" class=" menu-link px-5">
                    {{ __('Sign Out') }}
                </a>
            </div>
        </div>
    </div>
    {{-- end::User account menu --}}
</div>
