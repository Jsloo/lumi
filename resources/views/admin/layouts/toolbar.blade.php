<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" @class([
        'app-container',
        'd-flex flex-stack',
        'container-xxl' => !$containerFluid,
        'container-fluid' => $containerFluid,
    ])>
        {{-- begin::Breadcrumb --}}
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">{{ $pageTitle }}</h1>
            {{-- {{ Breadcrumbs::render() }} --}}
        </div>
    </div>
</div>
