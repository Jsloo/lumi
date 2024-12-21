@props(['name' => null, 'value' => null, 'checked' => false])

<label {{ $attributes->merge(['class' => 'form-check form-check-sm form-check-custom form-check-solid']) }}>
    <input class="form-check-input"
           type="checkbox"
           value="{{ $value }}"
           wire:model="{{ $attributes->get('livewire') }}"
           @checked($checked)>
    <span class="form-check-label">{{ $name }}</span>
</label>
