<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
    <script>
        // Apply dark mode immediately to prevent flash
        (function() {
            const isDark = localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches);
            if (isDark) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        })();
    </script>
    @stack('styles')
</head>

<body class="h-screen bg-white dark:bg-zinc-800 overflow-hidden">
    <div class="flex h-full">
        {{-- Sidebar bên trái --}}
        <flux:sidebar sticky stashable
            class="w-[320px] border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 h-full flex flex-col">

            {{-- Header cố định --}}
            <div class="flex-shrink-0 p-4 border-b border-zinc-200 dark:border-zinc-700">

                <a href="{{ route('dashboard') }}" class="me-5 flex items-center space-x-2 rtl:space-x-reverse"
                    wire:navigate>
                    <x-app-logo />
                </a>
            </div>

            {{-- Menu items có thể scroll --}}
            <div class="flex-1 overflow-y-auto">
                <flux:navlist variant="outline" class="[&_[data-flux-icon]]:!size-5">
                    <flux:navlist.group :heading="__('General')" class="grid">

                        <flux:navlist.item icon="home" :href="route('dashboard')"
                            :current="request()->routeIs('dashboard')" wire:navigate>
                            Bảng điều khiển
                        </flux:navlist.item>

                        @if (auth()->user()->hasPermission('admin.general.management-course'))
                            <flux:navlist.item icon="queue-list" :href="route('admin.general.management-course')"
                                :current="request()->routeIs('admin.general.management-course')" wire:navigate>
                                Lớp học của tôi
                            </flux:navlist.item>
                        @endif

                        @if (auth()->user()->hasPermission('admin.general.libraries'))
                            <flux:navlist.item icon="briefcase" :href="route('admin.general.libraries')"
                                :current="request()->routeIs('admin.general.libraries')" wire:navigate>
                                Thư viện
                            </flux:navlist.item>
                        @endif

                    </flux:navlist.group>



                    @if (auth()->user()->hasPermission('admin.management.locations') ||
                            auth()->user()->hasPermission('admin.management.seasons') ||
                            auth()->user()->hasPermission('admin.management.programs') ||
                            auth()->user()->hasPermission('admin.management.subjects') ||
                            auth()->user()->hasPermission('admin.management.courses') ||
                            auth()->user()->hasPermission('admin.management.syllabi') ||
                            auth()->user()->hasPermission('admin.management.curricula') ||
                            auth()->user()->hasPermission('admin.management.placement-tests'))
                        <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">
                        <flux:navlist.group :heading="__('Management')" class="grid">

                            @if (auth()->user()->hasPermission('admin.management.locations'))
                                <flux:navlist.item icon="map-pin-house" :href="route('admin.management.locations')"
                                    :current="request()->routeIs('admin.management.locations')" wire:navigate>
                                    Cơ sở
                                </flux:navlist.item>
                            @endif

                            @if (auth()->user()->hasPermission('admin.management.seasons'))
                                <flux:navlist.item icon="calendar" :href="route('admin.management.seasons')"
                                    :current="request()->routeIs('admin.management.seasons')" wire:navigate>
                                    Học kỳ
                                </flux:navlist.item>
                            @endif

                            @if (auth()->user()->hasPermission('admin.management.programs'))
                                <flux:navlist.item icon="book-marked" :href="route('admin.management.programs')"
                                    :current="request()->routeIs('admin.management.programs')" wire:navigate>
                                    Chương trình học
                                </flux:navlist.item>
                            @endif

                            @if (auth()->user()->hasPermission('admin.management.subjects'))
                                <flux:navlist.item icon="book-open" :href="route('admin.management.subjects')"
                                    :current="request()->routeIs('admin.management.subjects')" wire:navigate>
                                    Môn học
                                </flux:navlist.item>
                            @endif

                            @if (auth()->user()->hasPermission('admin.management.courses'))
                                <flux:navlist.item icon="academic-cap" :href="route('admin.management.courses')"
                                    :current="request()->routeIs('admin.management.courses')" wire:navigate>
                                    Lớp học
                                </flux:navlist.item>
                            @endif

                            @if (auth()->user()->hasPermission('admin.management.syllabi'))
                                <flux:navlist.item icon="list-bullet" :href="route('admin.management.syllabi')"
                                    :current="request()->routeIs('admin.management.syllabi')" wire:navigate>
                                    Syllabus
                                </flux:navlist.item>
                            @endif

                            @if (auth()->user()->hasPermission('admin.management.placement-tests'))
                                <flux:navlist.item icon="list-bullet" :href="route('admin.management.placement-tests')"
                                    :current="request()->routeIs('admin.management.placement-tests')" wire:navigate>
                                    Kiểm tra đầu vào
                                </flux:navlist.item>
                            @endif

                            @if (auth()->user()->hasPermission('admin.management.curricula'))
                                <flux:navlist.item icon="book-open-text" :href="route('admin.management.curricula')"
                                    :current="request()->routeIs('admin.management.curricula')" wire:navigate>
                                    Giáo trình
                                </flux:navlist.item>
                            @endif

                        </flux:navlist.group>
                    @endif



                    @if (auth()->user()->hasPermission('admin.finance.program-prices') ||
                            auth()->user()->hasPermission('admin.finance.bank-accounts') ||
                            auth()->user()->hasPermission('admin.finance.tuitions-payment') ||
                            auth()->user()->hasPermission('admin.finance.tuition-history'))
                        <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">
                        <flux:navlist.group :heading="__('Finance')" class="grid">

                            @if (auth()->user()->hasPermission('admin.finance.program-prices'))
                                <flux:navlist.item icon="currency-dollar" :href="route('admin.finance.program-prices')"
                                    :current="request()->routeIs('admin.finance.program-prices')" wire:navigate>
                                    Quản lý giá tiền
                                </flux:navlist.item>
                            @endif
                            @if (auth()->user()->hasPermission('admin.finance.bank-accounts'))
                                <flux:navlist.item icon="banknotes" :href="route('admin.finance.bank-accounts')"
                                    :current="request()->routeIs('admin.finance.bank-accounts')" wire:navigate>
                                    Tài khoản ngân hàng
                                </flux:navlist.item>
                            @endif
                            @if (auth()->user()->hasPermission('admin.finance.tuitions-payment'))
                                <flux:navlist.item icon="credit-card" :href="route('admin.finance.tuitions-payment')"
                                    :current="request()->routeIs('admin.finance.tuitions-payment')" wire:navigate>
                                    Thanh toán học phí
                                </flux:navlist.item>
                            @endif
                            @if (auth()->user()->hasPermission('admin.finance.tuition-history'))
                                <flux:navlist.item icon="banknotes" :href="route('admin.finance.tuition-history')"
                                    :current="request()->routeIs('admin.finance.tuition-history')" wire:navigate>
                                    Lịch sử đóng học phí
                                </flux:navlist.item>
                            @endif
                        </flux:navlist.group>
                    @endif



                    @if (auth()->user()->hasPermission('admin.arrangement.class-assignment') ||
                            auth()->user()->hasPermission('admin.arrangement.time-table'))
                        <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">
                        <flux:navlist.group :heading="__('Arrangement')" class="grid">

                            @if (auth()->user()->hasPermission('admin.arrangement.class-assignment'))
                                <flux:navlist.item icon="adjustments-horizontal"
                                    :href="route('admin.arrangement.class-assignment')"
                                    :current="request()->routeIs('admin.arrangement.class-assignment')" wire:navigate>
                                    Xếp lớp học
                                </flux:navlist.item>
                            @endif
                            @if (auth()->user()->hasPermission('admin.arrangement.time-table'))
                                <flux:navlist.item icon="calendar-days" :href="route('admin.arrangement.time-table')"
                                    :current="request()->routeIs('admin.arrangement.time-table')" wire:navigate>
                                    Xếp lịch học
                                </flux:navlist.item>
                            @endif
                        </flux:navlist.group>
                    @endif

                    @if (auth()->user()->hasPermission('admin.access.roles') || auth()->user()->hasPermission('admin.access.permissions'))
                        <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">
                        <flux:navlist.group :heading="__('Access')" class="grid">

                            @if (auth()->user()->hasPermission('admin.access.roles'))
                                <flux:navlist.item icon="user-lock" :href="route('admin.access.roles')"
                                    :current="request()->routeIs('admin.access.roles')" wire:navigate>
                                    Chức vụ
                                </flux:navlist.item>
                            @endif
                            @if (auth()->user()->hasPermission('admin.access.permissions'))
                                <flux:navlist.item icon="shield-check" :href="route('admin.access.permissions')"
                                    :current="request()->routeIs('admin.access.permissions')" wire:navigate>
                                    Quyền
                                </flux:navlist.item>
                            @endif
                        </flux:navlist.group>
                    @endif

                    @if (auth()->user()->hasPermission('admin.personnel.staff') || auth()->user()->hasPermission('admin.personnel.students') || auth()->user()->hasPermission('admin.personnel.student-care'))

                        <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">
                        <flux:navlist.group :heading="__('Human resources')" class="grid">

                            @if (auth()->user()->hasPermission('admin.personnel.staff'))
                                <flux:navlist.item icon="users" :href="route('admin.personnel.staff')"
                                    :current="request()->routeIs('admin.personnel.staff')" wire:navigate>
                                    Nhân viên
                                </flux:navlist.item>
                            @endif
                            @if (auth()->user()->hasPermission('admin.personnel.students'))
                                <flux:navlist.item icon="user-group" :href="route('admin.personnel.students')"
                                    :current="request()->routeIs('admin.personnel.students')" wire:navigate>
                                    Học viên
                                </flux:navlist.item>
                            @endif

                            @if (auth()->user()->hasPermission('admin.personnel.student-care'))
                                <flux:navlist.item icon="chat-bubble-left-right" :href="route('admin.personnel.student-care')"
                                    :current="request()->routeIs('admin.personnel.student-care')" wire:navigate>
                                    Chăm sóc học viên
                                </flux:navlist.item>
                            @endif
                        </flux:navlist.group>

                    @endif

                </flux:navlist>
            </div>

            {{-- Footer cố định --}}
            <div class="flex-shrink-0  border-t border-zinc-200 dark:border-zinc-700">
                <flux:dropdown class="hidden lg:block" position="bottom" align="start">
                    <flux:profile :name="auth()->user()->name" avatar="{{ auth()->user()->detail?->avatar }}"
                        icon:trailing="chevrons-up-down" />
                    <flux:menu>
                        <flux:menu.radio.group>
                            <div class="p-0 text-sm font-normal">
                                <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                    <flux:avatar src="{{ auth()->user()->detail?->avatar }}" />
                                    <div class="grid flex-1 text-start text-sm leading-tight">
                                        <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                        <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                                    </div>
                                </div>
                            </div>
                        </flux:menu.radio.group>

                        <flux:menu.separator />

                        <flux:menu.radio.group>
                            <flux:menu.item :href="route('admin.settings.profile')" icon="cog" wire:navigate>
                                Cài đặt</flux:menu.item>
                        </flux:menu.radio.group>

                        <flux:menu.separator />

                        <form method="POST" action="{{ route('logout') }}" class="w-full">
                            @csrf
                            <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle"
                                class="w-full">
                                Đăng xuất
                            </flux:menu.item>
                        </form>
                    </flux:menu>
                </flux:dropdown>
            </div>
        </flux:sidebar>

        <div class="flex flex-col flex-1 h-full bg-white dark:bg-zinc-800 overflow-hidden">
            {{-- Mobile header --}}
            <flux:header class="lg:hidden">
                <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />
                <flux:spacer />
                <flux:dropdown class="cursor-pointer" position="top" align="end">
                    <flux:profile avatar="{{ auth()->user()->detail?->avatar }}" icon-trailing="chevron-down" />

                    <flux:menu>
                        <flux:menu.radio.group>
                            <div class="p-0 text-sm font-normal">
                                <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                    <flux:avatar src="{{ auth()->user()->detail?->avatar }}" />
                                    <div class="grid flex-1 text-start text-sm leading-tight">
                                        <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                        <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                                    </div>
                                </div>
                            </div>
                        </flux:menu.radio.group>

                        <flux:menu.separator />

                        <flux:menu.radio.group>
                            <flux:menu.item :href="route('admin.settings.profile')" icon="cog" wire:navigate>
                                Cài đặt</flux:menu.item>
                        </flux:menu.radio.group>

                        <flux:menu.separator />

                        <form method="POST" action="{{ route('logout') }}" class="w-full">
                            @csrf
                            <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle"
                                class="w-full ">
                                Đăng xuất
                            </flux:menu.item>
                        </form>
                    </flux:menu>
                </flux:dropdown>
            </flux:header>

            {{-- Nội dung --}}
            <main class="flex-grow p-4 overflow-auto">
                {{ $slot }}
            </main>

            {{-- Alert Messages --}}
            <x-alert-toastr />

            {{-- Footer --}}
            @include('components.layouts.app.footer')
            {{-- @include('components.layouts.app.dial') --}}
        </div>
    </div>
    @stack('scripts')
    @fluxScripts
    @livewireCalendarScripts
</body>


</html>
