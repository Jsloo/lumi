<div>
    <x-admin.modal :id="$modalID" :title="$modalTitle" wireClose="closeModalReset">
    
        <div class="fv-row mb-8">
            <x-admin.label class="required" :name="__('Name')" />
            <x-admin.input class="form-control-solid" placeholder="Enter Sub Category Name" wire:model="name" />
            <x-admin.input-error :messages="$errors->get('name')" />
        </div>

        <div class="fv-row mb-8">
            <x-admin.label class="required" :name="__('Category')" />
            <x-admin.input-select id="productTypeSelect2" class="form-select-solid" wire:model="category" data-dropdown-parent="#{{ $modalID }}">
                @forelse (\App\Models\Category::all() as $item)
                    <option value="{{ $item->id }} {{ $item->id == $category ? 'selected' : '' }}">{{ $item->name }}</option>
                @empty
                    <option value="">No Category Found</option>
                @endforelse
            </x-admin.input-select>
            <x-admin.input-error :messages="$errors->get('category')" />
        </div>

        <x-slot name="button">
            <x-admin.button class="btn-primary" wire:click.prevent="{{ $edit ? 'update' : 'store' }}" :disabled="$loading"
                data-kt-indicator="{{ $loading ? 'on' : 'off' }}">
                <x-admin.button-indicator :label="__($edit ? 'Update' : 'Create')" />
            </x-admin.button>
        </x-slot>
    </x-admin.modal>
</div>
