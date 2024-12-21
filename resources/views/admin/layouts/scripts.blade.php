{{-- begin::Global Javascript Bundle(used by all pages) --}}
<script src="{{ secure_asset('assets/admin/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ secure_asset('assets/admin/js/scripts.bundle.js') }}"></script>
{{-- end::Global Javascript Bundle(used by all pages) --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- begin::Livewire --}}
{{-- end::Livewire --}}
<livewire:scripts />

<x-livewire-alert::scripts />
{{-- begin::Sweet Alert Settings) --}}
<script>
    document.addEventListener('DOMContentLoaded', () => {
        Livewire.on('closeModal', (modal) => {
            $(modal).modal('hide');
        });
    });
</script>
<script>
    $(document).on('click', '.button-ajax', function(e) {
        e.preventDefault();
        var action = $(this).data('action');
        var method = $(this).data('method');
        var csrf = $(this).data('csrf');
        var reload = $(this).data('reload');

        axios.request({
                url: action,
                method: method,
                data: {
                    _token: csrf
                },
            })
            .then(function(response) {
                console.log(response);
            })
            .catch(function(error) {
                console.log(error);
            })
            .then(function() {
                if (reload) {
                    window.location.reload();
                }
            });
    });
</script>
{{-- end::Sweet Alert Settings) --}}

{{-- begin::Page Custom Javascript(used by this page) --}}
@stack('scripts')
{{-- end::Page Custom Javascript(used by this page) --}}
