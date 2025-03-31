<flux:dropdown align="center" data-flux-dropdown="{{$id}}">
    <flux:button icon="ellipsis-horizontal" size="sm" variant="primary"></flux:button>
    <flux:navmenu>
        <livewire:commons.event-modal :id="$id" label="Add"/>
        <flux:navmenu.item href="#" icon="check-circle">Finish</flux:navmenu.item>
        <flux:menu.separator />
        <livewire:info-modal :id="$id" />
        <flux:navmenu.item href="#" icon="printer">Imprimir {{ $id }}</flux:navmenu.item>
        <flux:navmenu.item href="#" icon="archive-box-arrow-down">Adjuntos</flux:navmenu.item>
        <flux:menu.separator />
        <flux:navmenu.item href="#" icon="share">Derivar</flux:navmenu.item>
        <flux:navmenu.item href="#" icon="arrow-right-circle">Recategorizar</flux:navmenu.item>
    </flux:navmenu>
</flux:dropdown>
