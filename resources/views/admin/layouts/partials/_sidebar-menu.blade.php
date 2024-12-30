<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true"
        data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
        data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
        {{-- begin::Sidebar menu --}}
        <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">

            <div class="menu-item pt-5">
                <div class="menu-content">
                    <span class="menu-heading fw-bold text-uppercase fs-7">Product Management</span>
                </div>
            </div>
            <div class="menu-item">
                <a class="menu-link {{ Route::is('admin.products.lists') ? 'active' : null }}" href="{{ route('admin.products.lists') }}">
                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                    <span class="menu-title">Product List</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link {{ Route::is('admin.category.lists') ? 'active' : null }}" href="{{ route('admin.category.lists') }}">
                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                    <span class="menu-title">Category List</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link {{ Route::is('admin.sub-category.lists') ? 'active' : null }}" href="{{ route('admin.sub-category.lists') }}">
                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                    <span class="menu-title">Sub Category List</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link {{ Route::is('admin.contact.lists') ? 'active' : null }}" href="{{ route('admin.contact.lists') }}">
                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                    <span class="menu-title">Contact List</span>
                </a>
            </div>
        </div>
        {{-- end::Sidebar menu --}}
    </div>
</div>
