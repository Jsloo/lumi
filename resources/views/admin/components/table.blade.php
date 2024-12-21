<div class="table-responsive">
    <table class="table align-middle table-row-dashed fs-6 gy-5">
        <thead>
        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
            @foreach ($headers as $header)
                @if(isset($header['checkbox']) && $header['checkbox'])
                    <th class="{{ $header['classes'] }}">
                        <x-admin.input-checkbox value="1" wire:model="{{ $header['name'] }}" wire:change="{{ $header['action'] }}"/>
                    </th>
                @else
                    <th class="{{ $header['classes'] }}">{{ $header['name'] }}</th>
                @endif
            @endforeach
        </tr>
        </thead>
        <tbody class="text-gray-600 fw-semibold">
            {{ $slot }}
        </tbody>
    </table>
</div>
@if ($paginator)
    {{ $paginator->links() }}
@endif
