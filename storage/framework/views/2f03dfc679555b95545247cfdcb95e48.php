<div class="relative mb-4 w-full">
    
    <div class="theme-header-pink">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
            <div class="header-content">
                <div class="flex items-center space-x-2 sm:space-x-3 mb-2">
                    <div class="header-icon">
                        <?php if (isset($component)) { $__componentOriginal8318632d5261647b706c011e29964ab1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8318632d5261647b706c011e29964ab1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.book-open','data' => ['class' => 'size-12']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.book-open'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-12']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8318632d5261647b706c011e29964ab1)): ?>
<?php $attributes = $__attributesOriginal8318632d5261647b706c011e29964ab1; ?>
<?php unset($__attributesOriginal8318632d5261647b706c011e29964ab1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8318632d5261647b706c011e29964ab1)): ?>
<?php $component = $__componentOriginal8318632d5261647b706c011e29964ab1; ?>
<?php unset($__componentOriginal8318632d5261647b706c011e29964ab1); ?>
<?php endif; ?>
                    </div>
                    <div>
                        <h1 class="header-title">Syllabus</h1>
                        <p class="header-subtitle">Quản lý chương trình học chi tiết</p>
                    </div>
                </div>
                <div class="header-breadcrumbs">
                    <a href="<?php echo e(route('dashboard')); ?>">Bảng điều khiển</a>
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span>Syllabus</span>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-2 sm:space-y-0 sm:space-x-3">
                <div class="header-counter">
                    <span><?php echo e($syllabi->count() ?? 0); ?> bài học</span>
                </div>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', \App\Models\Syllabus::class)): ?>
                    <button wire:click="addSyllabus" class="header-button w-full sm:w-auto">
                        <?php if (isset($component)) { $__componentOriginal4ca64116c97e8cb412511f025b00da30 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4ca64116c97e8cb412511f025b00da30 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.plus-circle','data' => ['class' => 'w-4 h-4 sm:w-5 sm:h-5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.plus-circle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 sm:w-5 sm:h-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4ca64116c97e8cb412511f025b00da30)): ?>
<?php $attributes = $__attributesOriginal4ca64116c97e8cb412511f025b00da30; ?>
<?php unset($__attributesOriginal4ca64116c97e8cb412511f025b00da30); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4ca64116c97e8cb412511f025b00da30)): ?>
<?php $component = $__componentOriginal4ca64116c97e8cb412511f025b00da30; ?>
<?php unset($__componentOriginal4ca64116c97e8cb412511f025b00da30); ?>
<?php endif; ?>
                        <span class="hidden sm:inline">Thêm Syllabus</span>
                        <span class="sm:hidden">Thêm</span>
                    </button>
                <?php endif; ?>

            </div>
        </div>
    </div>

    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('back.management.syllabus.actions-syllabus', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1370343368-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <!-- Search and Filter Section -->
    <div class="mt-6">
        <div class="theme-card-pink mb-2">
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

                    <!-- Search -->
                    <div>
                        <label for="search" class="card-label">Tìm kiếm</label>
                        <input wire:model.live="search" type="text" id="search"
                            placeholder="Tìm theo bài học, nội dung, từ vựng..." class="card-input">
                    </div>
                    <!-- Program Selection -->
                    <div>
                        <label for="selectedProgramId" class="card-label">Chọn chương trình</label>
                        <select wire:model.live="selectedProgramId" id="selectedProgramId" class="card-input">
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($program->id); ?>"><?php echo e($program->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </select>
                    </div>

                    <!-- Subject Selection -->
                    <div>
                        <label for="selectedSubjectId" class="card-label">Chọn môn học</label>
                        <select wire:model.live="selectedSubjectId" id="selectedSubjectId" class="card-input">
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($subject->id); ?>"><?php echo e($subject->name); ?> (<?php echo e($subject->code); ?>)</option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </select>
                    </div>


                    <!-- URL Book Display -->
                    <div>
                        <!--[if BLOCK]><![endif]--><?php if($selectedSubjectId): ?>
                            <?php
                                $selectedSubject = $subjects->firstWhere('id', $selectedSubjectId);
                            ?>
                            <!--[if BLOCK]><![endif]--><?php if($selectedSubject && $selectedSubject->url_book): ?>
                                <div class="mt-2 md:mt-7">
                                    <?php if (isset($component)) { $__componentOriginalf5109f209df079b3a83484e1e6310749 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5109f209df079b3a83484e1e6310749 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::tooltip.index','data' => ['content' => 'Xem sách giáo khoa']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::tooltip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['content' => 'Xem sách giáo khoa']); ?>
                                        <a href="<?php echo e($selectedSubject->url_book); ?>" target="_blank"
                                            class="inline-flex items-center px-3 py-3 text-sm font-medium text-pink-600 bg-pink-50 border border-pink-200 rounded-lg hover:bg-pink-100 hover:text-pink-700 transition-colors duration-200 dark:bg-pink-900/20 dark:border-pink-800 dark:text-pink-400 dark:hover:bg-pink-900/30">
                                            <?php if (isset($component)) { $__componentOriginalf85a09e6911faf7375dfec728fe17fc4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf85a09e6911faf7375dfec728fe17fc4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.bookmark-square','data' => ['class' => 'w-4 h-4 mr-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.bookmark-square'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 mr-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf85a09e6911faf7375dfec728fe17fc4)): ?>
<?php $attributes = $__attributesOriginalf85a09e6911faf7375dfec728fe17fc4; ?>
<?php unset($__attributesOriginalf85a09e6911faf7375dfec728fe17fc4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf85a09e6911faf7375dfec728fe17fc4)): ?>
<?php $component = $__componentOriginalf85a09e6911faf7375dfec728fe17fc4; ?>
<?php unset($__componentOriginalf85a09e6911faf7375dfec728fe17fc4); ?>
<?php endif; ?>
                                            <?php echo e($selectedSubject->curriculum_name); ?>

                                        </a>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5109f209df079b3a83484e1e6310749)): ?>
<?php $attributes = $__attributesOriginalf5109f209df079b3a83484e1e6310749; ?>
<?php unset($__attributesOriginalf5109f209df079b3a83484e1e6310749); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5109f209df079b3a83484e1e6310749)): ?>
<?php $component = $__componentOriginalf5109f209df079b3a83484e1e6310749; ?>
<?php unset($__componentOriginalf5109f209df079b3a83484e1e6310749); ?>
<?php endif; ?>
                                </div>
                            <?php else: ?>
                                <div class="mt-4 md:mt-10 text-sm text-gray-500 dark:text-gray-400">
                                    Chưa có link sách giáo khoa
                                </div>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        <?php else: ?>
                            <div class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                                Vui lòng chọn môn học
                            </div>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    </div>

                </div>
            </div>
        </div>
    </div>



    <!-- Syllabus Table -->
    <div class="theme-table-pink">
        
        <div class="hidden md:block overflow-x-auto">
            <table>
                <thead>
                    <tr>
                        <th class="text-center  w-30">Bài học</th>
                        <th class="text-left">Nội dung</th>
                        <th class="text-left">Mục tiêu (CLO)</th>
                        <!--[if BLOCK]><![endif]--><?php if(
                            $syllabi->first() &&
                                (auth()->user()->can('update', $syllabi->first()) || auth()->user()->can('delete', $syllabi->first()))): ?>
                            <th class="text-center">Thao tác</th>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    </tr>
                </thead>
                <tbody id="sortable-syllabi">
                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $syllabi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $syllabus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="table-row sortable-row" data-id="<?php echo e($syllabus->id); ?>">
                            <td
                                class="table-cell text-center font-medium <?php echo e($syllabi->first() && (auth()->user()->can('update', $syllabi->first()) || auth()->user()->can('delete', $syllabi->first())) ? 'drag-handle cursor-move' : ''); ?>">
                                <?php echo e($syllabus->lesson_number); ?>

                            </td>
                            <td class="table-cell">
                                <div title="<?php echo e($syllabus->content); ?>">
                                    <?php echo e($syllabus->content); ?>

                                </div>
                            </td>
                            <td class="table-cell">
                                <!--[if BLOCK]><![endif]--><?php if($syllabus->is_url): ?>
                                    <!--[if BLOCK]><![endif]--><?php if($syllabus->CLO !== null && $syllabus->CLO !== ""): ?>
                                        <a href="<?php echo e($syllabus->CLO); ?>" target="_blank" rel="noopener noreferrer">
                                            <?php if (isset($component)) { $__componentOriginal4cc377eda9b63b796b6668ee7832d023 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4cc377eda9b63b796b6668ee7832d023 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::badge.index','data' => ['color' => 'green']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'green']); ?>Link bài test <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4cc377eda9b63b796b6668ee7832d023)): ?>
<?php $attributes = $__attributesOriginal4cc377eda9b63b796b6668ee7832d023; ?>
<?php unset($__attributesOriginal4cc377eda9b63b796b6668ee7832d023); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4cc377eda9b63b796b6668ee7832d023)): ?>
<?php $component = $__componentOriginal4cc377eda9b63b796b6668ee7832d023; ?>
<?php unset($__componentOriginal4cc377eda9b63b796b6668ee7832d023); ?>
<?php endif; ?>
                                        </a>
                                    <?php else: ?>
                                        <?php if (isset($component)) { $__componentOriginal4cc377eda9b63b796b6668ee7832d023 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4cc377eda9b63b796b6668ee7832d023 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::badge.index','data' => ['color' => 'red']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'red']); ?>Chưa có link bài test <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4cc377eda9b63b796b6668ee7832d023)): ?>
<?php $attributes = $__attributesOriginal4cc377eda9b63b796b6668ee7832d023; ?>
<?php unset($__attributesOriginal4cc377eda9b63b796b6668ee7832d023); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4cc377eda9b63b796b6668ee7832d023)): ?>
<?php $component = $__componentOriginal4cc377eda9b63b796b6668ee7832d023; ?>
<?php unset($__componentOriginal4cc377eda9b63b796b6668ee7832d023); ?>
<?php endif; ?>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                <?php else: ?>
                                    <div title="<?php echo e($syllabus->CLO); ?>">
                                        <?php echo e($syllabus->CLO); ?>

                                    </div>
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                            </td>
                            <!--[if BLOCK]><![endif]--><?php if(auth()->user()->can('update', $syllabus) || auth()->user()->can('delete', $syllabus)): ?>
                                <td class="table-cell text-center">
                                    <?php if (isset($component)) { $__componentOriginal2b4bb2cd4b8f1a3c08bae49ea918b888 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2b4bb2cd4b8f1a3c08bae49ea918b888 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::dropdown','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                        <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['icon:trailing' => 'chevron-down']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon:trailing' => 'chevron-down']); ?>Thao tác <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $attributes = $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $component = $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
                                        <?php if (isset($component)) { $__componentOriginalf7749b857446d2788d0b6ca0c63f9d3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf7749b857446d2788d0b6ca0c63f9d3a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::menu.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $syllabus)): ?>
                                                <?php if (isset($component)) { $__componentOriginal5027d420cfeeb03dd925cfc08ae44851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5027d420cfeeb03dd925cfc08ae44851 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::menu.item','data' => ['icon' => 'pencil','wire:click' => 'editSyllabus('.e($syllabus->id).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::menu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'pencil','wire:click' => 'editSyllabus('.e($syllabus->id).')']); ?>
                                                    Sửa thông tin
                                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5027d420cfeeb03dd925cfc08ae44851)): ?>
<?php $attributes = $__attributesOriginal5027d420cfeeb03dd925cfc08ae44851; ?>
<?php unset($__attributesOriginal5027d420cfeeb03dd925cfc08ae44851); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5027d420cfeeb03dd925cfc08ae44851)): ?>
<?php $component = $__componentOriginal5027d420cfeeb03dd925cfc08ae44851; ?>
<?php unset($__componentOriginal5027d420cfeeb03dd925cfc08ae44851); ?>
<?php endif; ?>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $syllabus)): ?>
                                                <?php if (isset($component)) { $__componentOriginald5e1eb3ae521062f8474178ba08933ca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald5e1eb3ae521062f8474178ba08933ca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::menu.separator','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::menu.separator'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald5e1eb3ae521062f8474178ba08933ca)): ?>
<?php $attributes = $__attributesOriginald5e1eb3ae521062f8474178ba08933ca; ?>
<?php unset($__attributesOriginald5e1eb3ae521062f8474178ba08933ca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald5e1eb3ae521062f8474178ba08933ca)): ?>
<?php $component = $__componentOriginald5e1eb3ae521062f8474178ba08933ca; ?>
<?php unset($__componentOriginald5e1eb3ae521062f8474178ba08933ca); ?>
<?php endif; ?>
                                                <?php if (isset($component)) { $__componentOriginal5027d420cfeeb03dd925cfc08ae44851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5027d420cfeeb03dd925cfc08ae44851 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::menu.item','data' => ['variant' => 'danger','icon' => 'trash','wire:click' => 'deleteSyllabus('.e($syllabus->id).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::menu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'danger','icon' => 'trash','wire:click' => 'deleteSyllabus('.e($syllabus->id).')']); ?>
                                                    Xóa
                                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5027d420cfeeb03dd925cfc08ae44851)): ?>
<?php $attributes = $__attributesOriginal5027d420cfeeb03dd925cfc08ae44851; ?>
<?php unset($__attributesOriginal5027d420cfeeb03dd925cfc08ae44851); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5027d420cfeeb03dd925cfc08ae44851)): ?>
<?php $component = $__componentOriginal5027d420cfeeb03dd925cfc08ae44851; ?>
<?php unset($__componentOriginal5027d420cfeeb03dd925cfc08ae44851); ?>
<?php endif; ?>
                                            <?php endif; ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf7749b857446d2788d0b6ca0c63f9d3a)): ?>
<?php $attributes = $__attributesOriginalf7749b857446d2788d0b6ca0c63f9d3a; ?>
<?php unset($__attributesOriginalf7749b857446d2788d0b6ca0c63f9d3a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf7749b857446d2788d0b6ca0c63f9d3a)): ?>
<?php $component = $__componentOriginalf7749b857446d2788d0b6ca0c63f9d3a; ?>
<?php unset($__componentOriginalf7749b857446d2788d0b6ca0c63f9d3a); ?>
<?php endif; ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2b4bb2cd4b8f1a3c08bae49ea918b888)): ?>
<?php $attributes = $__attributesOriginal2b4bb2cd4b8f1a3c08bae49ea918b888; ?>
<?php unset($__attributesOriginal2b4bb2cd4b8f1a3c08bae49ea918b888); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2b4bb2cd4b8f1a3c08bae49ea918b888)): ?>
<?php $component = $__componentOriginal2b4bb2cd4b8f1a3c08bae49ea918b888; ?>
<?php unset($__componentOriginal2b4bb2cd4b8f1a3c08bae49ea918b888); ?>
<?php endif; ?>
                                </td>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="4" class="table-cell">
                                <div class="empty-state flex flex-col items-center">
                                    <?php if (isset($component)) { $__componentOriginal8318632d5261647b706c011e29964ab1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8318632d5261647b706c011e29964ab1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.book-open','data' => ['class' => 'w-8 h-8 mb-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.book-open'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-8 h-8 mb-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8318632d5261647b706c011e29964ab1)): ?>
<?php $attributes = $__attributesOriginal8318632d5261647b706c011e29964ab1; ?>
<?php unset($__attributesOriginal8318632d5261647b706c011e29964ab1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8318632d5261647b706c011e29964ab1)): ?>
<?php $component = $__componentOriginal8318632d5261647b706c011e29964ab1; ?>
<?php unset($__componentOriginal8318632d5261647b706c011e29964ab1); ?>
<?php endif; ?>
                                    <div class="text-sm">Không có syllabus nào cho môn học này</div>
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </tbody>
            </table>
        </div>

        
        <div class="md:hidden space-y-3" x-data x-init="const mobileEl = document.getElementById('sortable-syllabi-mobile');
        if (mobileEl) {
            new Sortable(mobileEl, {
                animation: 150,
                handle: '.drag-handle',
                onEnd: function() {
                    let orderedIds = [];
                    mobileEl.querySelectorAll('[data-id]').forEach(item => {
                        orderedIds.push(item.getAttribute('data-id'));
                    });
                    window.Livewire.find('<?php echo e($_instance->getId()); ?>').call('updateLessonOrder', orderedIds);
                }
            });
        }" id="sortable-syllabi-mobile">
            <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $syllabi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $syllabus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="bg-white rounded-lg border border-gray-200 shadow-sm" x-data="{ expanded: false }"
                    wire:key="syllabus-mobile-<?php echo e($syllabus->id); ?>" data-id="<?php echo e($syllabus->id); ?>">

                    
                    <div class="p-4 flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div
                                class="w-8 h-8 bg-indigo-100 rounded-full flex items-center justify-center cursor-move drag-handle">
                                <span class="text-xs font-bold text-indigo-600"><?php echo e($syllabus->lesson_number); ?></span>
                            </div>
                            <div>
                                <div class="font-medium text-gray-900">Bài <?php echo e($syllabus->lesson_number); ?></div>
                                <div class="text-sm text-gray-500 truncate max-w-[200px]"><?php echo e($syllabus->content); ?>

                                </div>
                            </div>
                        </div>

                        <button @click="expanded = !expanded" class="p-2 rounded-full hover:bg-gray-100">
                            <svg class="w-5 h-5 text-gray-400" :class="{ 'rotate-180': expanded }" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                    </div>

                    
                    <div x-show="expanded" class="border-t border-gray-100 bg-gray-50">

                        <div class="p-4 space-y-3">

                            
                            <div class="flex flex-col space-y-1">
                                <span class="text-sm font-medium text-gray-600">Nội dung:</span>
                                <span class="text-sm text-gray-900"><?php echo e($syllabus->content); ?></span>
                            </div>

                            
                            <div class="flex flex-col space-y-1">
                                <span class="text-sm font-medium text-gray-600">Mục tiêu (CLO):</span>
                                <span class="text-sm text-gray-900"><?php echo e($syllabus->CLO); ?></span>
                            </div>

                            
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-600">Ngày tạo:</span>
                                <span
                                    class="text-sm text-gray-900"><?php echo e($syllabus->created_at->format('d/m/Y H:i')); ?></span>
                            </div>

                            
                            <!--[if BLOCK]><![endif]--><?php if(auth()->user()->can('update', $syllabus) || auth()->user()->can('delete', $syllabus)): ?>
                                <div class="pt-3 border-t border-gray-200">
                                    <div class="flex space-x-2">
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $syllabus)): ?>
                                            <button wire:click="editSyllabus(<?php echo e($syllabus->id); ?>)"
                                                class="flex-1 bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 transition-colors flex items-center justify-center space-x-2">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                    </path>
                                                </svg>
                                                <span>Sửa</span>
                                            </button>
                                        <?php endif; ?>

                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $syllabus)): ?>
                                            <button wire:click="deleteSyllabus(<?php echo e($syllabus->id); ?>)"
                                                class="flex-1 bg-red-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-red-700 transition-colors flex items-center justify-center space-x-2">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                    </path>
                                                </svg>
                                                <span>Xóa</span>
                                            </button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="bg-white rounded-lg border border-gray-200 p-8">
                    <div class="empty-state flex flex-col items-center">
                        <?php if (isset($component)) { $__componentOriginal8318632d5261647b706c011e29964ab1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8318632d5261647b706c011e29964ab1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.book-open','data' => ['class' => 'w-8 h-8 mb-2 text-gray-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.book-open'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-8 h-8 mb-2 text-gray-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8318632d5261647b706c011e29964ab1)): ?>
<?php $attributes = $__attributesOriginal8318632d5261647b706c011e29964ab1; ?>
<?php unset($__attributesOriginal8318632d5261647b706c011e29964ab1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8318632d5261647b706c011e29964ab1)): ?>
<?php $component = $__componentOriginal8318632d5261647b706c011e29964ab1; ?>
<?php unset($__componentOriginal8318632d5261647b706c011e29964ab1); ?>
<?php endif; ?>
                        <div class="text-sm text-gray-500">Không có syllabus nào cho môn học này</div>
                    </div>
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    </div>

    <!-- Summary -->
    <div class="mt-4 text-sm text-zinc-600 dark:text-zinc-400">
        Tổng số <?php echo e($syllabi->count()); ?> bài học
    </div>

    <script>
        document.addEventListener('livewire:init', () => {
            let sortable;

            function initSortable() {
                const tbody = document.getElementById('sortable-syllabi');
                if (tbody && !sortable) {
                    sortable = new Sortable(tbody, {
                        handle: '.drag-handle',
                        animation: 150,
                        ghostClass: 'sortable-ghost',
                        chosenClass: 'sortable-chosen',
                        dragClass: 'sortable-drag',
                        onEnd: function(evt) {
                            const orderedIds = Array.from(tbody.children).map(row => row.dataset.id);
                            window.Livewire.find('<?php echo e($_instance->getId()); ?>').call('updateLessonOrder', orderedIds);
                        }
                    });
                }
            }

            // Initialize sortable when component loads
            initSortable();

            // Re-initialize when Livewire updates
            Livewire.hook('morph.updated', ({
                component
            }) => {
                if (component.name === 'back.management.syllabus.syllabi') {
                    sortable = null;
                    setTimeout(initSortable, 100);
                }
            });
        });
    </script>
</div>
<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/livewire/back/management/syllabus/syllabi.blade.php ENDPATH**/ ?>