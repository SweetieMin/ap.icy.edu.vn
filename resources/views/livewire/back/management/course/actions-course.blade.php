<div>
    <flux:modal :dismissible="false" name="modal-course" class="md:w-900">
        <form wire:submit='{{ $isEditCourseMode ? 'updateCourse' : 'createCourse' }}' class="space-y-6">
            <div>
                <flux:heading class="font-bold" size="lg">
                    {{ $isEditCourseMode ? 'Cập nhật lớp học' : 'Tạo mới lớp học' }}
                </flux:heading>
                <flux:text class="mt-2">{{ $isEditCourseMode ? 'Chỉnh sửa thông tin lớp học' : 'Thêm mới lớp học' }}.
                </flux:text>
            </div>



            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                {{-- Cơ sở --}}
                <div class="form-group">
                    <flux:select wire:model="location_id" placeholder="Chọn cơ sở" label="Cơ sở">

                        @foreach ($locations as $location)
                            <flux:select.option value="{{ $location->id }}">{{ $location->name }}</flux:select.option>
                        @endforeach
                    </flux:select>
                </div>

                {{-- Học kỳ --}}
                <div class="form-group">
                    <flux:select wire:model="season_id" placeholder="Chọn học kỳ" label="Học kỳ">

                        @foreach ($seasons as $season)
                            <flux:select.option value="{{ $season->id }}">{{ $season->name }}</flux:select.option>
                        @endforeach
                    </flux:select>
                </div>

                {{-- Môn học --}}
                <div class="form-group">
                    <flux:select wire:model="subject_id" wire:change="subjectSelected" placeholder="Chọn môn học"
                        label="Môn học">
                        <flux:select.option value="">Chọn môn học</flux:select.option>
                        @foreach ($subjects as $subject)
                            <flux:select.option value="{{ $subject->id }}">{{ $subject->name }}</flux:select.option>
                        @endforeach
                    </flux:select>
                </div>
            </div>

            {{-- Tên lớp học --}}
            <div class="form-group">
                <flux:input wire:model="name" placeholder="Nhập tên lớp học" label="Tên lớp học" disabled />
            </div>

            {{-- Mô tả --}}
            <div class="form-group">
                <flux:textarea wire:model="description" placeholder="Nhập mô tả lớp học" label="Mô tả"
                    rows="3" />
            </div>

            <div class="flex">
                <flux:spacer />
                <flux:button type="submit" class="cursor-pointer" variant="primary">
                    {{ $isEditCourseMode ? 'Cập nhật' : 'Thêm mới' }}
                </flux:button>
            </div>
        </form>
    </flux:modal>
</div>
