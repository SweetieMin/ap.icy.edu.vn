<flux:tooltip content="{{ __('Copy to clipboard') }}" class="contents">
    <flux:editor.button x-on:click="navigator.clipboard?.writeText($el.closest('[data-flux-editor]').value); $el.setAttribute('data-copied', ''); setTimeout(() => $el.removeAttribute('data-copied'), 2000)">
        <flux:icon.clipboard variant="outline" class="in-data-copied:hidden size-5!" />
        <flux:icon.clipboard-document-check variant="outline" class="hidden in-data-copied:block size-5!" />
    </flux:editor.button>
</flux:tooltip>