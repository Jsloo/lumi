<div>
    <x-admin.card>
        <x-slot name="header">
            <x-admin.card-header :search="true" placeholder="Search Products">
                <x-admin.button class="btn-primary" data-bs-toggle="modal" data-bs-target="#productModal">
                    <i class="ki-duotone ki-plus fs-2"></i>
                    <x-admin.button-indicator label="Add Product" />
                </x-admin.button>
            </x-admin.card-header>
        </x-slot>

        <x-slot name="body">
            <x-admin.card-body>
                <x-admin.table :headers="$headers" :paginator="$products">

                    @forelse ($products as $key => $item)
                        <tr class="fw-bold text-gray-600">
                            <td>
                                {{ $products->firstItem() + $key }}
                            </td>

                            <td>
                                {{ $item->name }}
                            </td>

                            <td>
                                {{ $item->price }}
                            </td>
                            <td>

                                {{ $item->stock }}
                            </td>
                            <td class="text-end">
                                <a wire:click="active({{ $item->id }})" class="btn btn-success"><span class="svg-icon svg-icon-1"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-check-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                    <path
                                        d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
                                </svg></span> Activate </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No Products Found</td>
                        </tr>
                    @endforelse
                </x-admin.table>
            </x-admin.card-body>
        </x-slot>
    </x-admin.card>
    <livewire:admin.product.form />
</div>
