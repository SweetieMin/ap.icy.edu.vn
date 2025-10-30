<div>
    {{-- Create and Update Permission Modal --}}
    <flux:modal :dismissible="false" name="modal-permission" class="md:w-900">
        @if ($showBulkForm)
            {{-- Bulk Permission Form --}}
            <form wire:submit='createBulkPermission' class="space-y-6">
                <div>
                    <flux:heading class="font-bold" size="lg">
                        Thêm nhiều Permission
                    </flux:heading>
                    <flux:text class="mt-2">
                        Chọn các route admin và nhập tên hiển thị cho từng route
                    </flux:text>
                </div>

                {{-- Route Selection --}}
                <div class="form-group">
                    <flux:fieldset>
                        <flux:legend>Chọn các route admin</flux:legend>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 max-h-60 overflow-y-auto border border-gray-200 dark:border-gray-700 rounded-lg p-4">
                            @foreach ($routeOptions as $route)
                                <flux:checkbox 
                                    wire:model.live="selectedRoutes" 
                                    value="{{ $route }}"
                                    label="{{ $route }}"
                                />
                            @endforeach
                        </div>
                    </flux:fieldset>
                </div>



                <div class="flex">
                    <flux:spacer />
                    @if(empty($bulkPermissions))
                        <flux:button type="submit" class="cursor-pointer" variant="primary" disabled>
                            Thêm {{ count($bulkPermissions) }} Permission
                        </flux:button>
                    @else
                        <flux:button type="submit" class="cursor-pointer" variant="primary">
                            Thêm {{ count($bulkPermissions) }} Permission
                        </flux:button>
                    @endif
                </div>
            </form>
        @else
            {{-- Single Permission Form --}}
            <form wire:submit='{{ $isEditPermissionMode ? 'updatePermission' : 'createPermission' }}' class="space-y-6">
                <div>
                    <flux:heading class="font-bold" size="lg">
                        {{ $isEditPermissionMode ? 'Cập nhật Permission' : 'Tạo mới Permission' }}
                    </flux:heading>
                    <flux:text class="mt-2">
                        {{ $isEditPermissionMode ? 'Chỉnh sửa thông tin permission:' . $router : 'Thêm mới permission' }}
                    </flux:text>
                </div>

                @if ($isEditPermissionMode)
                    <input type="text" wire:model='permissionId' hidden />
                @else
                    <div class="form-group">
                        <flux:select label="Router" placeholder="Chọn router..." wire:model='router'
                            :disabled="$isEditPermissionMode">
                            <flux:select.option value="">Chọn router</flux:select.option>
                            @foreach ($routeOptions as $route)
                                <flux:select.option value="{{ $route }}">{{ $route }}</flux:select.option>
                            @endforeach
                        </flux:select>
                    </div>
                @endif

                <div class="form-group">
                    <flux:input label="Tên hiển thị" placeholder="Nhập tên hiển thị..." wire:model='displayName' />
                </div>

                <div class="form-group">
                    <flux:checkbox label="Hiển thị" wire:model='isShow' />
                </div>

                <div class="flex">
                    <flux:spacer />
                    <flux:button type="submit" class="cursor-pointer" variant="primary">
                        {{ $isEditPermissionMode ? 'Cập nhật' : 'Thêm mới' }}
                    </flux:button>
                </div>
            </form>
        @endif
    </flux:modal>

    {{-- Delete Permission Modal --}}
    <flux:modal name="delete-permission" class="min-w-[22rem]">
        <form wire:submit='deletePermissionConfirm' class="space-y-6">
            <div>
                <flux:text class="mt-2">
                    <p>Bạn có muốn xoá permission này không?</p>
                    <p>Hành động này không thể hoàn tác.</p>
                </flux:text>
            </div>

            <div class="flex gap-2">
                <flux:spacer />

                <flux:modal.close>
                    <flux:button variant="ghost">Huỷ</flux:button>
                </flux:modal.close>

                <flux:button type="submit" class="cursor-pointer" variant="danger">Xoá
                </flux:button>
            </div>
        </form>
    </flux:modal>
</div>
