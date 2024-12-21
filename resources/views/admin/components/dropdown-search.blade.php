@props(['search'])
<div>
    <select class="form-select form-select-solid " wire:model="{{ $search }}" data-hide-search="true">
        {{ $slot }}
    </select>
</div>
