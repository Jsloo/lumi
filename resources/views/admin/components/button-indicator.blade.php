@props(['label', 'message'])

<span class="indicator-label">
    {{ $label ?? __('Submit') }}
</span>
<span class="indicator-progress">
    {{ $message ?? __('Please wait...') }}
    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
