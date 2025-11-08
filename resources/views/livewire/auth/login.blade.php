<div class="flex flex-col gap-4 sm:gap-6">


        <x-auth-header :title="__('Đăng nhập hệ thống')" :description="__('Sử dụng Username và Email để đăng nhập.')" />
        <!-- Form login gốc -->
        <x-auth-session-status class="text-center" :status="session('status')" />
        
        @if (session('error'))
            <div class="bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-700 rounded-lg p-4">
                <div class="flex items-center">
                    <svg class="w-5 h-5 text-red-600 dark:text-red-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-red-800 dark:text-red-200 font-medium text-sm">
                        {{ session('error') }}
                    </span>
                </div>
            </div>
        @endif
        <form wire:submit="login" class="flex flex-col gap-4 sm:gap-6">
            <flux:input wire:model="login_id" :label="__('Địa chỉ Email / Username')" type="text" required
                placeholder="email@example.com / Username" autofocus autocomplete="on" />

            <div class="relative">
                <flux:input wire:model="password" :label="__('Password')" type="password" required
                    autocomplete="current-password" placeholder="Mật khẩu" viewable />

                @if (Route::has('password.request'))
                    <flux:link class="absolute end-0 top-0 text-sm text-pink-600 hover:text-pink-700" :href="route('password.request')" wire:navigate>
                        {{ __('Quên mật khẩu?') }}
                    </flux:link>
                @endif
            </div>

            <flux:checkbox wire:model="remember" :label="__('Ghi nhớ đăng nhập')" />



            <flux:button variant="primary" color="pink" type="submit" class="w-full">
                {{ __('Đăng nhập') }}
            </flux:button>
        </form>

        <x-authenticate-passkey />

</div>
