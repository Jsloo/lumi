@props(['disabled' => false])

<div wire:ignore>
    <select {{ $attributes->merge(['class' => 'form-select']) }} {{ $disabled ? 'disabled' : null }}>
        {{ $slot }}
    </select>
</div>

