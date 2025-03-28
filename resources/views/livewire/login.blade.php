<div class="bg-seven dark:bg-three text-two dark:text-five text-[13px] leading-[20px] py-6 px-4 rounded-md flex-1 shadow-md">
    <div class="flex flex-col w-full items-center justify-center ">
        <img src="{{ asset('img/logo_base.svg') }}" alt="" class="dark:hidden flex flex-row items-center justify-between">
        <img src="{{ asset('img/logo_white.svg') }}" alt="" class="dark:block hidden flex flex-row items-center justify-between">
        <h2 class="mt-4 text-xl font-extrabold">
            <a href="{{route('dashboard')}}">
                {{ $_ENV['APP_NAME'] }}
            </a>
        </h2>
        <h3>Bienvenido otra vez</h3>
    </div>
    <form wire:submit.prevent="submit" class="flex flex-col gap-y-4 mt-4" >
        <flux:input wire:model="username" placeholder="Username" icon="user" required/>
        <flux:error name="username" />
        <flux:input wire:model="password" placeholder="Password" type="password" icon="key" required viewable>
            <x-slot name="iconTrailing">
                <flux:button size="sm" variant="subtle" icon="eye" class="-mr-1" />
            </x-slot>
        </flux:input>
        <flux:error name="password"/>
        <flux:button wire:click="submit">LOGIN</flux:button>
    </form>
    @if(session('warning'))
    <div class="flex items-center gap-x-2 mt-2 bg-warning px-2 py-1 rounded-md text-on-warning font-normal text-[10px] tracking-wide">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
            <path fill-rule="evenodd" d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
        </svg> {{ session('warning') }}
    </div>
    @endif
</div>
