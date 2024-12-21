@props(['newThumbnail' => null, 'thumbnail' => null])

<div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false"
    x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">

    <div @class([
        'image-input',
        'border',
        'image-input-placeholder',
        'image-input-changed' => $newThumbnail,
        'image-input-empty' => !$newThumbnail,
    ]) data-kt-image-input="true"
        style="background-image: url('{{ secure_asset('assets/admin/media/svg/files/blank-image.svg') }}');">

        <div>
            {{ $slot }}
        </div>

        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change"
            data-bs-toggle="tooltip" title="Upload Image">
            <i class="ki-duotone ki-pencil fs-7">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
            <input type="file" name="thumbnail" accept=".png, .jpg, .jpeg" wire:model.live="{{ $attributes->get('livewire') }}" />
        </label>

        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel"
            data-bs-toggle="tooltip" title="Cancel">
            <i class="ki-duotone ki-cross fs-2">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </span>
    </div>
    <div x-show="isUploading">
        <progress max="100" x-bind:value="progress"></progress>
    </div>
</div>
