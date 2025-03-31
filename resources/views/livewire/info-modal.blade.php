<div>
    <flux:modal.trigger :name="'info-service-request-'.$service->id">
        <flux:navmenu.item href="#" icon="information-circle">Info</flux:navmenu.item>
    </flux:modal.trigger>
    <flux:modal :name="'info-service-request-'.$service->id" class="min-w-full md:min-w-2/3" variant="flyout">
        <div class="space-y-6">
            <div class="flex flex-row gap-2 items-center justify-start">
                <flux:badge color="lime" icon="swatch">{{ $service->category->name }}</flux:badge>
                <flux:heading size="lg">{{ $service->code }}</flux:heading>
            </div>
            <flux:text>{{ $service->description }}</flux:text>

                <div class="grid grid-cols-3 gap-2">
                @foreach($service->events as $event)
                    <div class="rounded-md shadow p-2 col-span-full md:col-span-1 bg-four dark:bg-three bg-six">
                        <flux:text class="text-four dark:text-five">{{ $event->description }}</flux:text>
                        <div class="flex items-center justify-end">
                            <div class="flex flex-row gap-x-2 mr-3">
                                @if($event->additional_desc != '-')
                                    <flux:tooltip content="{{$event->additional_desc}}" position="bottom">
                                        <flux:icon.information-circle />
                                    </flux:tooltip>
                                @endif
                                <flux:tooltip content="+3 files" position="bottom" class="hover:font-extrabold">
                                    <flux:icon.folder/>
                                </flux:tooltip>
                            </div>
                            <flux:tooltip content="{{ $event->user->name  }}" position="bottom" class="hover:font-extrabold">
                                <flux:icon.user-circle/>
                            </flux:tooltip>
                        </div>
                    </div>
                @endforeach
                </div>

        </div>
    </flux:modal>
</div>
