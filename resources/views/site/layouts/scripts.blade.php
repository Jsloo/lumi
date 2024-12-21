<script src="{{ asset('assets/site/js/jquery-3.7.0.min.js') }}"></script>
<script src="{{ asset('assets/site/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/site/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/site/js/meanmenu.min.js') }}"></script>
<script src="{{ asset('assets/site/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/site/js/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/site/js/counterup.min.js') }}"></script>
<script src="{{ asset('assets/site/js/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/site/js/jquery.barfiller.js') }}"></script>
<script src="{{ asset('assets/site/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/site/js/imagesloaded.min.js') }}"></script>
<script src="{{ asset('assets/site/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/site/js/nice-select.min.js') }}"></script>
<script src="{{ asset('assets/site/js/scrolltop.js') }}"></script>
<script src="{{ asset('assets/site/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/site/js/ajax-form.js') }}"></script>
<script src="{{ asset('assets/site/js/plugins.js') }}"></script>
<script src="{{ asset('assets/site/js/main.js') }}"></script>

@livewireScripts
{{-- <x-livewire-alert::scripts /> --}}

<script>
    window.livewire.on('success', (message, modal) => {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: message,
            showConfirmButton: false,
            timer: 3000
        });
    });

    window.livewire.on('warning', (message, action) => {
        Swal.fire({
            title: message,
            text: "You cannot revert this decision!",
            icon: "warning",
            showCancelButton: true,
            buttonsStyling: false,
            confirmButtonText: "Proceed",
            cancelButtonText: "Cancel",
            customClass: {
                confirmButton: "btn btn-warning",
                cancelButton: "btn btn-secondary"
            }
        }).then((result) => {
            if (result['isConfirmed']) {
                window.livewire.emit(action);
            }
        });
    });

    window.livewire.on('error', (message) => {
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: message,
            showConfirmButton: false,
            timer: 3000
        }).then((result) => {
            if (result['isConfirmed']) {
                window.location.reload();
            }
        });
    });

    window.livewire.on('info', (message, modal) => {
        $(modal).modal('hide');
        Swal.fire({
            position: 'center',
            icon: 'info',
            title: message,
            showConfirmButton: false,
            timer: 3000
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

@if (session()->has('success'))
    <script>
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 3000
        });
    </script>
@endif

@if (session()->has('warning'))
    <script>
        Swal.fire({
            position: 'center',
            icon: 'warning',
            title: "{{ session('warning') }}",
            timer: 3000
        });
    </script>
@endif
@stack('scripts')
