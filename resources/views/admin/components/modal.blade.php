@props(['id', 'title', 'button' => null])

<div wire:ignore.self class="modal fade" id="{{ $id }}" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable mw-700px">
        <div class="modal-content">
            <div class="modal-header" id="kt_modal_header">
                <h2 class="fw-bold">{{ $title ?? '' }}</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="{{ $attributes->get('wireClose') }}"></button>
                {{-- <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" wire:click="{{ $attributes->get('wireClose') }}">
                </div> --}}
            </div>
            <div class="modal-body py-10 px-lg-17">
                <div class="scroll-y me-n7 pe-7" id="kt_modal_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                    data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_header" data-kt-scroll-wrappers="#kt_modal_scroll"
                    data-kt-scroll-offset="300px">
                    {{ $slot }}
                </div>
            </div>
            <div class="modal-footer flex-center">
                <x-admin.button class="btn-light me-3" data-bs-dismiss="modal"
                    wire:click="{{ $attributes->get('wireClose') }}">{{ __('Discard') }}</x-admin.button>
                {{ $button }}
            </div>
        </div>
    </div>
</div>
