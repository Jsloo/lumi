{{-- begin::Fonts --}}
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
{{-- end::Fonts --}}

{{-- begin::Global Stylesheets Bundle(used by all pages) --}}
<link href="{{ secure_asset('assets/admin/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ secure_asset('assets/admin/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
{{-- end::Global Stylesheets Bundle(used by all pages) --}}

{{-- begin::Livewire --}}
<livewire:styles />
{{-- end::Livewire --}}

{{-- begin::Page Vendor Stylesheets(used by this page) --}}
@stack('styles')
{{-- end::Page Vendor Stylesheets(used by this page) --}}
