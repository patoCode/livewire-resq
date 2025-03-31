<x-layouts.layout title="Formulario de solicitud" :user="Auth::user()">
    <div class="flex flex-col md:flex-row space-y-2 space-x-2">
        <div class="w-full md:w-1/3">
            <livewire:service-form />
        </div>
        <flux:separator class="my-5 md:hidden"/>
        <div class="w-full md:w-2/3">
            <flux:heading class="mb-2">Listado de requisiones</flux:heading>
            <livewire:service-request-list />
        </div>
    </div>
</x-layouts.layout>
