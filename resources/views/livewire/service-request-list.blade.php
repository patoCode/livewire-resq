<div class="space-y-4">
    <div class="flex w-full gap-2">
        <flux:input wire:model.live.debounce.500ms="search" icon="magnifying-glass" placeholder="Search request(s)" class="min-w-2/3" />
        <flux:select wire:model.live="perPage" class="min-w-1/3" >
            <flux:select.option>10</flux:select.option>
            <flux:select.option>20</flux:select.option>
            <flux:select.option>50</flux:select.option>
        </flux:select>
    </div>
    <div class="flex flex-col">
        @if($services->isEmpty())
            <p class="bg-yellow-200 text-[12px] text-yellow-900 p-4 rounded-sm font-bold tracking-[.7px]">
                No exiten elementos para mostrar!
            </p>
        @else
        <table class="datatable">
            <thead>
            <tr>
                <th>Code</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($services as $service)
                <tr>
                    <td>
                        <flux:tooltip content="{{ $service->code }}">
                            <flux:icon.qr-code />
                        </flux:tooltip>
                    </td>
                    <td>
                        {{ Str::limit($service->description, 50) }}
                    </td>
                    <td>
                        <flux:dropdown align="center" data-flux-dropdown="{{$service->id}}">
                            <flux:button icon="ellipsis-horizontal" size="sm" variant="primary"></flux:button>
                            <flux:navmenu>
                                <livewire:info-modal :id="$service->id" />
                                <flux:navmenu.item href="#" icon="archive-box-arrow-down">Adjuntos</flux:navmenu.item>
                                <flux:navmenu.item href="#" icon="printer">Imprimir</flux:navmenu.item>
                                <flux:navmenu.item href="#" icon="no-symbol" variant="danger">Cancelar</flux:navmenu.item>
                            </flux:navmenu>
                        </flux:dropdown>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $services->links() }}
            @endif
    </div>
</div>
