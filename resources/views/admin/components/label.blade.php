@props(['name'])

<label {{ $attributes->merge(['class' => 'form-label fs-6 fw-bold mb-2']) }}>{{ $name }}</label>
