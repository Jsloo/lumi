<div>
    <x-admin.card>
        <x-slot name="header">
            <x-admin.card-header :search="true" placeholder="Search Contact">
            </x-admin.card-header>
        </x-slot>

        <x-slot name="body">
            <x-admin.card-body>
                <x-admin.table :headers="$headers" :paginator="$contacts">

                    @forelse ($contacts as $key => $item)
                        <tr class="fw-bold text-gray-600">
                            <td>
                                {{ $contacts->firstItem() + $key }}
                            </td>

                            <td>
                                {{ $item->name }}
                            </td>
                            <td>
                                {{ $item->email }}
                            </td>
                            <td>
                                {{ $item->subject }}
                            </td>
                            <td class="text-end">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#showContactModal"
                                    wire:click.prevent="$dispatch('showContact', { contact: {{ $item->id }} })"><i class="bi bi-eye"></i></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No Contact Found</td>
                        </tr>
                    @endforelse
                </x-admin.table>
            </x-admin.card-body>
        </x-slot>
    </x-admin.card>
    <livewire:admin.contact.show />

</div>
