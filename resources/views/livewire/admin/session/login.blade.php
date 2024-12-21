<div>
    <form class="form w-100" wire:submit.prevent="login">
        <div class="text-center mb-11">
            <h1 class="text-dark fw-bolder mb-3">Sign In</h1>
            <div class="text-gray-500 fw-semibold fs-6">Administrator Login</div>
        </div>

        <div class="separator separator-content my-14">
            <span class="w-125px text-gray-500 fw-semibold fs-7">Welcome</span>
        </div>

        <div class="fv-row mb-8">
            <x-admin.input type="text" class="bg-transparent" placeholder="Email" wire:model="email" autocomplete="off" />
            <x-admin.input-error :messages="$errors->get('email')" />
        </div>

        <div class="fv-row mb-3">
            <x-admin.input type="password" class="bg-transparent" placeholder="Password" wire:model="password" autocomplete="off" />
            <x-admin.input-error :messages="$errors->get('password')" />
        </div>



        <div class="d-grid mb-10">
            <x-admin.button class="btn-primary">
                <x-admin.button-indicator label="{{ __('Sign In') }}" />
            </x-admin.button>
        </div>
    </form>
</div>
