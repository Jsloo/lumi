<div>
    <x-admin.modal :id="$modalID" :title="$modalTitle" wireClose="closeModalReset">
        <div class="fv-row mb-8">
            <x-admin.label :name="__('Category Image')" />
            
            <x-admin.avatar :newThumbnail="$newThumbnail" :thumbnail="$thumbnail" livewire="newThumbnail">
                <div class="image-input-wrapper w-125px h-125px" @style([
                    'background-image: url(../../assets/admin/media/svg/files/blank-image.svg)' => !$thumbnail && !$newThumbnail,
                    'background-image:' . $thumbnail => $thumbnail,
                    'background-image:' . $temporaryUrl => $newThumbnail,
                ])>
                </div>
            </x-admin.avatar>
            <x-admin.input-error :messages="$errors->get('newThumbnail')" />
        </div>

        <div class="fv-row mb-8">
            <x-admin.label class="required" :name="__('Name')" />
            <x-admin.input class="form-control-solid" placeholder="Enter Category Name" wire:model="name" />
            <x-admin.input-error :messages="$errors->get('name')" />
        </div>
    
        <x-slot name="button">
            <x-admin.button class="btn-primary" wire:click.prevent="{{ $edit ? 'update' : 'store' }}" :disabled="$loading"
                data-kt-indicator="{{ $loading ? 'on' : 'off' }}">
                <x-admin.button-indicator :label="__($edit ? 'Update' : 'Create')" />
            </x-admin.button>
        </x-slot>
    </x-admin.modal>
</div>
