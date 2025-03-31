<div>
<flux:modal.trigger  :name="'event-'.$id" >
    <flux:navmenu.item href="#" icon="squares-plus">{{ $label }}</flux:navmenu.item>
</flux:modal.trigger>

<flux:modal :name="'event-'.$id" class="min-w-full md:min-w-2/3" variant="flyout">
    <div class="space-y-6">
        <div>
            <flux:heading size="lg">Update profile</flux:heading>
            <flux:text class="mt-2">Make changes to your personal details.</flux:text>
        </div>

        <flux:input label="Name" placeholder="Your name" />

        <flux:input label="Date of birth" type="date" />

        <div class="flex">
            <flux:spacer />

            <flux:button type="submit" variant="primary">Save changes</flux:button>
        </div>
    </div>
</flux:modal>
</div>
