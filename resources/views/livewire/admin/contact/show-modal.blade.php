<div>
    <x-admin.modal :id="$modalID" :title="$modalTitle" wireClose="closeModalReset">
        <div class="fv-row mb-8">
            <x-admin.label class="required" :name="__('Name')" />
            <x-admin.input class="form-control-solid" placeholder="Enter Sub Category Name" wire:model="name" readonly=true/>
            <x-admin.input-error :messages="$errors->get('name')" />
        </div>

        <div class="fv-row mb-8">
            <x-admin.label class="required" :name="__('Phone')" />
            <x-admin.input class="form-control-solid" placeholder="Enter Sub Category Name" wire:model="phone" readonly=true />
            <x-admin.input-error :messages="$errors->get('Phone')" />
        </div>

        <div class="fv-row mb-8">
            <x-admin.label class="required" :name="__('Email')" />
            <x-admin.input class="form-control-solid" placeholder="Enter Sub Category Name" wire:model="email" readonly=true/>
            <x-admin.input-error :messages="$errors->get('Email')" />
        </div>

        <div class="fv-row mb-8">
            <x-admin.label class="required" :name="__('Subject')" />
            <x-admin.input class="form-control-solid" placeholder="Enter Sub Category Name" wire:model="subject" readonly=true/>
            <x-admin.input-error :messages="$errors->get('Subject')" />
        </div>

        <div class="fv-row mb-8">
            <x-admin.label class="required" :name="__('Request')" />
            <x-admin.textarea class="form-control-solid" placeholder="Enter Product Description" wire:model="request" readonly=true/>
            <x-admin.input-error :messages="$errors->get('Request')" />
        </div>

        {{-- <x-slot name="button">
            <x-admin.button class="btn-primary" wire:click.prevent="{{ $edit ? 'update' : 'store' }}" :disabled="$loading"
                data-kt-indicator="{{ $loading ? 'on' : 'off' }}">
                <x-admin.button-indicator :label="__($edit ? 'Update' : 'Create')" />
            </x-admin.button>
        </x-slot> --}}
    </x-admin.modal>
</div>
