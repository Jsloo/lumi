<div>
    <x-admin.modal :id="$modalID" :title="$modalTitle" wireClose="closeModalReset">

        <div class="fv-row mb-8">
            <x-admin.label :name="__('Product Image')" />
            
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
            <x-admin.input class="form-control-solid" placeholder="Enter Product Name" wire:model="name" />
            <x-admin.input-error :messages="$errors->get('name')" />
        </div>
    
        <div class="fv-row mb-8">
            <x-admin.label class="required" :name="__('Price')" />
            <x-admin.input class="form-control-solid" placeholder="Enter Product Price" wire:model="price" />
            <x-admin.input-error :messages="$errors->get('price')" />
        </div>
    
    
        <div class="fv-row mb-8">
            <x-admin.label class="required" :name="__('Stock')" />
            <x-admin.input class="form-control-solid" placeholder="Enter Product Price" wire:model="stock" />
            <x-admin.input-error :messages="$errors->get('stock')" />
        </div>

        <div class="fv-row mb-8">
            <x-admin.label class="required" :name="__('Sub Category')" />
            <x-admin.input-select id="productTypeSelect2" class="form-select-solid" wire:model="subCategory" data-dropdown-parent="#{{ $modalID }}">
                @forelse (\App\Models\SubCategory::all() as $item)
                    <option value="{{ $item->id }}" {{ $item->id == $subCategory ? 'selected' : '' }}>{{ $item->name }}</option>
                @empty
                    <option value="">No Sub Category Found</option>
                @endforelse
            </x-admin.input-select>
            <x-admin.input-error :messages="$errors->get('category')" />
        </div>

        <div class="fv-row mb-8" wire:ignore>
            <x-admin.label class="required" :name="__('Description')" />
            <x-admin.textarea class="form-control-solid" placeholder="Enter Product Description"  id="task-textarea" wire:model.live="description" />
            <x-admin.input-error :messages="$errors->get('description')" />
        </div>

        <x-slot name="button">
            <x-admin.button class="btn-primary" wire:click.prevent="{{ $edit ? 'update' : 'store' }}" :disabled="$loading"
                data-kt-indicator="{{ $loading ? 'on' : 'off' }}">
                <x-admin.button-indicator :label="__($edit ? 'Update' : 'Create')" />
            </x-admin.button>
        </x-slot>
    </x-admin.modal>
</div>
@push('styles')
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/44.1.0/ckeditor5.css" />
@endpush

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
<script>
   let editorInstance;

    function initializeEditor() {
        const editorElement = document.querySelector('#task-textarea');
        if (editorElement) {
            ClassicEditor
                .create(editorElement, {})
                .then(editor => {
                    editorInstance = editor;
                    console.log("Editor initialized");

                    window.addEventListener('load-editor-content', event => {
                        const editorContent = event.detail[0]; 
                        console.log(editorContent); 

                        if (editorInstance) {
                            editorInstance.setData(editorContent.description);
                        } else {
                            console.warn("Editor instance not available. Retrying...");
                            setTimeout(() => {
                                if (editorInstance) {
                                    editorInstance.setData(editorContent.description);
                                }
                            }, 100);
                        }
                    });


                    editor.model.document.on('change:data', () => {
                        Livewire.dispatch('updateDescription', { value: editor.getData() });
                    });
                })
                .catch(error => {
                    console.error("Editor initialization failed:", error);
                });
        } else {
            console.warn("Editor element not found.");
        }
    }



    document.addEventListener('livewire:load', () => {
        console.log("Livewire: updated11");

        console.log("Livewire: load");
        initializeEditor();
    });

    // Livewire 更新后重新初始化
    document.addEventListener('livewire:updated', () => {
        console.log("Livewire: updated");
        initializeEditor();
    });

    // 回退机制
    document.addEventListener('DOMContentLoaded', () => {
        console.log("Fallback: DOMContentLoaded");
        initializeEditor();
    });
</script>

@endpush
