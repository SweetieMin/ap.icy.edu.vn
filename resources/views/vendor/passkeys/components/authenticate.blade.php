<div>
    @include('passkeys::components.partials.authenticateScript')

    <form id="passkey-login-form" method="POST" action="{{ route('passkeys.login') }}">
        @csrf
    </form>

    @if ($message = session()->get('authenticatePasskey::message'))
        <div class="bg-red-100 text-red-700 p-4 border border-red-400 rounded">
            {{ $message }}
        </div>
    @endif

    @if ($slot->isEmpty())

        <flux:button icon="key" class='w-full mt-1' @click.prevent="authenticateWithPasskey()">Đăng nhập bằng Passkey</flux:button>
    @else
        {{ $slot }}
    @endif

</div>
