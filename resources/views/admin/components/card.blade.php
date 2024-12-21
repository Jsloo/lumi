@props(['header' => null, 'body' => null, 'footer' => null])

<div {{ $attributes->merge(['class' => 'card card-flush']) }}>
    {{ $header }}
    {{ $body }}
    {{ $footer }}
</div>
