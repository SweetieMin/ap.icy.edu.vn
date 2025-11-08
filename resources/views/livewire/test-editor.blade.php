<div>
    <form wire:submit='saveData()'>
       
        <flux:editor>
            <flux:editor.toolbar>
                <flux:editor.heading />
                <flux:editor.separator />
                <flux:editor.bold />
                <flux:editor.italic />
                <flux:editor.strike />
                <flux:editor.separator />
                <flux:editor.bullet />
                <flux:editor.ordered />
                <flux:editor.blockquote />
                <flux:editor.separator />
                <flux:editor.highlight />
                <flux:editor.link />
                <flux:editor.separator />
                <flux:editor.align />

                <flux:editor.spacer />

                <flux:editor.undo />
                <flux:editor.redo />

                <flux:dropdown position="bottom end" offset="-15">
                    <flux:editor.button icon="ellipsis-horizontal" tooltip="More" />

                    <flux:menu>
                        <flux:menu.item wire:click="…" icon="arrow-top-right-on-square">Preview</flux:menu.item>
                        <flux:menu.item wire:click="…" icon="arrow-down-tray">Export</flux:menu.item>
                        <flux:menu.item wire:click="…" icon="share">Share</flux:menu.item>
                    </flux:menu>
                </flux:dropdown>

                <flux:editor.copy />
                
            </flux:editor.toolbar>

            <flux:editor.content />
        </flux:editor>

        <div class="flex">
            <flux:spacer />
            <flux:button type="submit" class="cursor-pointer" variant="primary">
                Lưu
            </flux:button>
        </div>
    </form>
</div>
