@props(['disabled' => false])

<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn d-flex justify-content-center align-items-center']) }} {{ $disabled ? 'disabled' : null }}>
    {{ $slot }}
</button>
