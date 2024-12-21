<div>
    <x-admin.card>
        <x-slot name="header">
            <x-admin.card-header :search="true" placeholder="Search Sub Category">
                <x-admin.button class="btn-primary" data-bs-toggle="modal" data-bs-target="#subCategoryModal">
                    <i class="ki-duotone ki-plus fs-2"></i>
                    <x-admin.button-indicator label="Add Sub Category" />
                </x-admin.button>
            </x-admin.card-header>
        </x-slot>

        <x-slot name="body">
            <x-admin.card-body>
                <x-admin.table :headers="$headers" :paginator="$subCategory">

                    @forelse ($subCategory as $key => $item)
                        <tr class="fw-bold text-gray-600">
                            <td>
                                {{ $subCategory->firstItem() + $key }}
                            </td>

                            <td>
                                {{ $item->name }}
                            </td>
                            <td class="text-end">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#subCategoryModal"
                                    wire:click.prevent="$dispatch('editSubCategory', { subCategory: {{ $item->id }} })"><i class="bi bi-pencil-square"></i></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No Sub Category Found</td>
                        </tr>
                    @endforelse
                </x-admin.table>
            </x-admin.card-body>
        </x-slot>
    </x-admin.card>
    <livewire:admin.sub-category.form />
</div>
