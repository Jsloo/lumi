@props(['readonly' => false])

<input {!! $attributes->merge(['class' => 'form-control']) !!} {{ $readonly ? 'readonly' : null }} />
