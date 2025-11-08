<section class="max-w-3xl">
    @include('partials.settings-heading')

    <x-settings.layout :heading="__('Giao diện')" :subheading=" __('Cập nhật cài đặt giao diện cho tài khoản của bạn')">
        <livewire:passkeys />
    </x-settings.layout>
</section>
