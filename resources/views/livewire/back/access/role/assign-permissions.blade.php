<div>
    {{-- Assign Permissions Modal --}}
    <flux:modal :dismissible="false" name="assign-permissions" class="md:w-[800px] max-h-[90vh]">
        <div class="space-y-6">
            {{-- Header --}}
            <div class="flex items-center space-x-3">
                <div
                    class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center">
                    <flux:icon.key class="w-6 h-6 text-white" />
                </div>
                <div>
                    <flux:heading class="font-bold text-xl">Gán quyền hạn</flux:heading>
                    <flux:text class="text-gray-600">
                        Phân quyền cho vai trò: <span class="font-semibold text-gray-900">{{ $role->name ?? '' }}</span>
                    </flux:text>
                </div>
            </div>

            @if ($role)
                {{-- Search and Controls --}}
                <div class="flex flex-col sm:flex-row gap-4">
                    <div class="flex-1">
                        <flux:input placeholder="Tìm kiếm quyền hạn..." wire:model.live="search"
                            icon="magnifying-glass" />
                    </div>
                    <div class="flex gap-2">
                        <flux:button variant="outline" size="sm" wire:click="selectAll">
                            Chọn tất cả
                        </flux:button>
                        <flux:button variant="outline" size="sm" wire:click="deselectAll">
                            Bỏ chọn tất cả
                        </flux:button>
                    </div>
                </div>

                {{-- Permissions List --}}
                <div class="max-h-96 overflow-y-auto border border-gray-200 rounded-lg">
                    @if (count($permissions) > 0)
                        <div class="divide-y divide-gray-100">
                            @foreach ($permissions as $permission)
                                <div class="p-4 hover:bg-gray-50 transition-colors">
                                    <label class="flex items-start space-x-3 cursor-pointer">
                                        <input type="checkbox"
                                            class="mt-1 rounded border-gray-300 text-green-600 focus:ring-green-500"
                                            wire:click="togglePermission({{ $permission['id'] }})"
                                            @checked(in_array($permission['id'], $selectedPermissions))>

                                        <div class="flex-1 min-w-0">
                                            <div class="flex items-center justify-between">
                                                <div>
                                                    <p class="text-sm font-medium text-gray-900">
                                                        {{ $permission['displayName'] }}
                                                    </p>
                                                    <p class="text-xs text-gray-500 mt-1">
                                                        {{ $permission['router'] }}
                                                    </p>
                                                </div>

                                                @if (in_array($permission['id'], $selectedPermissions))
                                                    <div class="flex-shrink-0">
                                                        <flux:badge variant="solid" color="green" size="sm">
                                                            Đã chọn
                                                        </flux:badge>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="p-8 text-center">
                            <flux:icon.magnifying-glass class="w-12 h-12 text-gray-400 mx-auto mb-4" />
                            <h3 class="text-lg font-medium text-gray-500 mb-2">
                                Không tìm thấy quyền hạn
                            </h3>
                            <p class="text-gray-400">
                                Thử thay đổi từ khóa tìm kiếm
                            </p>
                        </div>
                    @endif
                </div>

                {{-- Summary --}}
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                    <div class="flex items-center space-x-2">
                        <flux:icon.information-circle class="w-5 h-5 text-blue-600" />
                        <span class="text-sm font-medium text-blue-800">
                            Đã chọn {{ count($selectedPermissions) }} quyền hạn
                        </span>
                    </div>
                </div>

                {{-- Actions --}}
                <div class="flex justify-end space-x-3 pt-4 border-t border-gray-200">
                    <flux:modal.close>
                        <flux:button variant="ghost">
                            Hủy bỏ
                        </flux:button>
                    </flux:modal.close>

                    <flux:button  icon="check" variant="primary" wire:click="savePermissions"
                        class="bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-700 hover:to-emerald-700">
                        Lưu quyền hạn
                    </flux:button>
                </div>
            @endif
        </div>
    </flux:modal>
</div>
