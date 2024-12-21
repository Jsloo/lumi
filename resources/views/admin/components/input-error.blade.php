@props(['messages'])

@if ($messages)
    @foreach ((array) $messages as $message)
        <span {{ $attributes->merge(['class' => 'fv-plugins-message-container invalid-feedback']) }}>{{ $message }}</span>
    @endforeach
@endif


