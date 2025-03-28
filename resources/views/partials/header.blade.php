<flux:header class="lg:hidden">
    <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />
    <flux:spacer />
    <div class="flex flex-row items-center justify-center gap-x-1">
        <img src="{{ asset('img/logo_base.svg') }}" alt="" class="dark:hidden flex flex-row items-center justify-between w-[20px]">
        <img src="{{ asset('img/logo_white.svg') }}" alt="" class="dark:block hidden items-center justify-between w-[20px]">
        <span class="font-extrabold">{{$_ENV['APP_NAME']}}</span>
    </div>
    <flux:spacer />
    <flux:tooltip content="Theme changer">
        <flux:button x-data x-on:click="$flux.dark = ! $flux.dark" icon="moon" variant="subtle"/>
    </flux:tooltip>
    <flux:dropdown position="top" alignt="start">
        <flux:profile avatar="{{ asset('img/base.png') }}"/>
        <flux:menu>
            <flux:menu.radio.group>
                <flux:menu.radio checked>{{ $user->name }}</flux:menu.radio>
            </flux:menu.radio.group>
            <flux:menu.separator />
            <flux:menu.item icon="arrow-right-start-on-rectangle" onclick="Livewire.dispatch('logout')">
                Salir
            </flux:menu.item>
        </flux:menu>
    </flux:dropdown>
</flux:header>
