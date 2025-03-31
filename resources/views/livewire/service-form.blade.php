<div>
    @if(session('success'))
        <div class="bg-green-300 p-2 mb-2 text-[11px] text-green-900 font-semibold rounded-md tracking-wider shadow">
            {{ session('success') }}
        </div>
    @endif

    <form class="flex flex-col gap-2" wire:submit.prevent="submit">

        <flux:select placeholder="Selecciona una categoria" label="Categoria" wire:model="category">
            @foreach($categories as $categoria)
                <flux:select.option value="{{$categoria->id}}">{{$categoria->name}}</flux:select.option>
            @endforeach
        </flux:select>

        <flux:textarea
            rows="10"
            label="Solicitud"
            placeholder="Describa su solicitud porfavor"
            wire:model="description"
        />

        <flux:input type="file" wire:model="files" label="Adjuntos" multiple />

        <flux:button type="submit" variant="primary">Save</flux:button>
    </form>
</div>
