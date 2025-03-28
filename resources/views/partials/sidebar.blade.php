<flux:sidebar sticky stashable class="bg-six dark:bg-one border-r rtl:border-r-0 rtl:border-l border-zinc-200 dark:border-zinc-700">
    <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

    <flux:brand href="#" logo="{{asset('img/logo_base.svg')}}" name="{{ $_ENV['APP_NAME'] }}" class="px-2 dark:hidden" />
    <flux:brand href="#" logo="{{asset('img/logo_white.svg')}}" name="{{ $_ENV['APP_NAME'] }}" class="px-2 hidden dark:flex" />

{{--    <flux:input as="button" variant="filled" placeholder="Search..." icon="magnifying-glass" />--}}

    <flux:navlist variant="outline">
        @if(session()->has('menu'))
            @foreach(session('menu') as $vista)
                <flux:navlist.item icon="{{$vista->icon}}" href="{{route($vista->route)}}">{{ $vista->name }}</flux:navlist.item>
            @endforeach
        @endif


{{--        <flux:navlist.item icon="home" href="#" current>Home</flux:navlist.item>--}}
{{--        <flux:navlist.item icon="inbox" badge="12" href="#">Inbox</flux:navlist.item>--}}
{{--        <flux:navlist.item icon="document-text" href="#">Documents</flux:navlist.item>--}}
{{--        <flux:navlist.item icon="calendar" href="#">Calendar</flux:navlist.item>--}}

        <flux:navlist.group expandable heading="Favorites" class="hidden lg:grid">
            <flux:navlist.item href="#">Marketing site</flux:navlist.item>
            <flux:navlist.item href="#">Android app</flux:navlist.item>
            <flux:navlist.item href="#">Brand guidelines</flux:navlist.item>
        </flux:navlist.group>
    </flux:navlist>

    <flux:spacer />

    <flux:navlist variant="outline">
        <flux:navlist.item icon="cog-6-tooth" href="#">Settings</flux:navlist.item>
        <flux:navlist.item icon="information-circle" href="#">Help</flux:navlist.item>
    </flux:navlist>
    <flux:dropdown position="top" align="start" class="max-lg:hidden">
        <flux:profile avatar="{{ asset('img/base.png') }}" name="{{ $user->name }}" />

        <flux:menu>
            <flux:menu.radio.group>
                <flux:menu.radio checked>{{ $user->name }}</flux:menu.radio>
            </flux:menu.radio.group>

            <flux:menu.separator />

            <flux:menu.item icon="arrow-right-start-on-rectangle" onclick="Livewire.dispatch('logout')">Logout - Salir</flux:menu.item>
        </flux:menu>
    </flux:dropdown>
</flux:sidebar>
