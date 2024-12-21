<x-user.app-layout :pageTitle="$pageTitle ?? null">
    <x-admin.base-layout :containerFluid="$containerFluid ?? false" :pageTitle="$pageTitle">
        {{ $slot }}
    </x-admin.base-layout>
</x-user.app-layout>
