<div>
    
    <div class="theme-header-pink">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
            <div class="header-content">
                <div class="flex items-center space-x-2 sm:space-x-3 mb-2">
                    <div class="header-icon">
                        <?php if (isset($component)) { $__componentOriginal9d976d16d2d40e73349b791bdc546089 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d976d16d2d40e73349b791bdc546089 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.folder','data' => ['class' => 'size-12']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.folder'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-12']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d976d16d2d40e73349b791bdc546089)): ?>
<?php $attributes = $__attributesOriginal9d976d16d2d40e73349b791bdc546089; ?>
<?php unset($__attributesOriginal9d976d16d2d40e73349b791bdc546089); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d976d16d2d40e73349b791bdc546089)): ?>
<?php $component = $__componentOriginal9d976d16d2d40e73349b791bdc546089; ?>
<?php unset($__componentOriginal9d976d16d2d40e73349b791bdc546089); ?>
<?php endif; ?>
                    </div>
                    <div>
                        <h1 class="header-title">File Manager</h1>
                        <p class="header-subtitle">Quản lý file và thư mục</p>
                    </div>
                </div>
                <div class="header-breadcrumbs">
                    <a href="<?php echo e(route('dashboard')); ?>">Bảng điều khiển</a>
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span>File Manager</span>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row gap-2">
                <button wire:click="$set('showCreateFolderModal', true)" class="theme-header-pink header-button">
                    <?php if (isset($component)) { $__componentOriginal153eae880c80b4d7fc5bce086a05e0cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal153eae880c80b4d7fc5bce086a05e0cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.folder-plus','data' => ['class' => 'size-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.folder-plus'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal153eae880c80b4d7fc5bce086a05e0cf)): ?>
<?php $attributes = $__attributesOriginal153eae880c80b4d7fc5bce086a05e0cf; ?>
<?php unset($__attributesOriginal153eae880c80b4d7fc5bce086a05e0cf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal153eae880c80b4d7fc5bce086a05e0cf)): ?>
<?php $component = $__componentOriginal153eae880c80b4d7fc5bce086a05e0cf; ?>
<?php unset($__componentOriginal153eae880c80b4d7fc5bce086a05e0cf); ?>
<?php endif; ?>
                    <span>Tạo thư mục</span>
                </button>
                <button wire:click="$set('showUploadModal', true)" class="theme-header-pink header-button">
                    <?php if (isset($component)) { $__componentOriginal37c717510e7a32140849d8d5dd9d632e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal37c717510e7a32140849d8d5dd9d632e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.plus','data' => ['class' => 'size-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.plus'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal37c717510e7a32140849d8d5dd9d632e)): ?>
<?php $attributes = $__attributesOriginal37c717510e7a32140849d8d5dd9d632e; ?>
<?php unset($__attributesOriginal37c717510e7a32140849d8d5dd9d632e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal37c717510e7a32140849d8d5dd9d632e)): ?>
<?php $component = $__componentOriginal37c717510e7a32140849d8d5dd9d632e; ?>
<?php unset($__componentOriginal37c717510e7a32140849d8d5dd9d632e); ?>
<?php endif; ?>
                    <span>Upload File</span>
                </button>
            </div>
        </div>
    </div>

    
    <div class="theme-card-pink mb-6">
        <div class="card-body">
            <div class="flex items-center space-x-2 text-sm">

                <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $breadcrumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!--[if BLOCK]><![endif]--><?php if($index > 0): ?>
                        <svg fill="currentColor" viewBox="0 0 20 20" class="size-4 text-gray-400">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                    <!--[if BLOCK]><![endif]--><?php if($index === count($breadcrumbs) - 1): ?>
                        <span class="text-gray-900 dark:text-white font-medium"><?php echo e($breadcrumb['name']); ?></span>
                    <?php else: ?>
                        <button wire:click="navigateToDirectory('<?php echo e($breadcrumb['path']); ?>')"
                            class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">
                            <?php echo e($breadcrumb['name']); ?>

                        </button>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </div>

    
    <div class="theme-card-pink mb-6">
        <div class="card-body">
            <div class="flex flex-col sm:flex-row gap-4">
                <div class="flex-1">
                    <div class="relative">
                        <?php if (isset($component)) { $__componentOriginalc3d062a579167d374258253d48d4177f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc3d062a579167d374258253d48d4177f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.magnifying-glass','data' => ['class' => 'absolute left-3 top-1/2 transform -translate-y-1/2 size-4 text-gray-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.magnifying-glass'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'absolute left-3 top-1/2 transform -translate-y-1/2 size-4 text-gray-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc3d062a579167d374258253d48d4177f)): ?>
<?php $attributes = $__attributesOriginalc3d062a579167d374258253d48d4177f; ?>
<?php unset($__attributesOriginalc3d062a579167d374258253d48d4177f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3d062a579167d374258253d48d4177f)): ?>
<?php $component = $__componentOriginalc3d062a579167d374258253d48d4177f; ?>
<?php unset($__componentOriginalc3d062a579167d374258253d48d4177f); ?>
<?php endif; ?>
                        <input type="text" wire:model.live.debounce.300ms="search"
                            placeholder="Tìm kiếm file và thư mục..."
                            class="w-full pl-10 pr-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500 bg-white dark:bg-gray-800 text-gray-900 dark:text-white">
                    </div>
                </div>
                <div class="flex items-center space-x-2 text-sm text-gray-600 dark:text-gray-400">
                    <?php if (isset($component)) { $__componentOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.document','data' => ['class' => 'size-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.document'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf)): ?>
<?php $attributes = $__attributesOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf; ?>
<?php unset($__attributesOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf)): ?>
<?php $component = $__componentOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf; ?>
<?php unset($__componentOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf); ?>
<?php endif; ?>
                    <span><?php echo e(count($filteredItems)); ?> mục</span>
                </div>
            </div>
        </div>
    </div>

    
    <div class="theme-table-pink">
        <!--[if BLOCK]><![endif]--><?php if(count($filteredItems) > 0): ?>
            
            <div class="hidden md:block overflow-x-auto">
                <table>
                    <thead>
                        <tr>
                            <th>Tên</th>
                            <th class="text-center">Loại</th>
                            <th class="text-center">Ngày sửa</th>
                            <th class="text-center">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $filteredItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="w-8 h-8 bg-pink-100 dark:bg-pink-900 rounded-lg flex items-center justify-center">
                                            <!--[if BLOCK]><![endif]--><?php if($item['type'] === 'directory'): ?>
                                                <?php if (isset($component)) { $__componentOriginal9d976d16d2d40e73349b791bdc546089 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d976d16d2d40e73349b791bdc546089 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.folder','data' => ['class' => 'size-4 text-pink-600']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.folder'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4 text-pink-600']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d976d16d2d40e73349b791bdc546089)): ?>
<?php $attributes = $__attributesOriginal9d976d16d2d40e73349b791bdc546089; ?>
<?php unset($__attributesOriginal9d976d16d2d40e73349b791bdc546089); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d976d16d2d40e73349b791bdc546089)): ?>
<?php $component = $__componentOriginal9d976d16d2d40e73349b791bdc546089; ?>
<?php unset($__componentOriginal9d976d16d2d40e73349b791bdc546089); ?>
<?php endif; ?>
                                            <?php elseif(in_array($item['extension'] ?? '', ['jpg', 'jpeg', 'png', 'gif', 'webp'])): ?>
                                                <?php if (isset($component)) { $__componentOriginal2d7605e1adbee8a1737ebec29a91da61 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2d7605e1adbee8a1737ebec29a91da61 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.photo','data' => ['class' => 'size-4 text-pink-600']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.photo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4 text-pink-600']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2d7605e1adbee8a1737ebec29a91da61)): ?>
<?php $attributes = $__attributesOriginal2d7605e1adbee8a1737ebec29a91da61; ?>
<?php unset($__attributesOriginal2d7605e1adbee8a1737ebec29a91da61); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2d7605e1adbee8a1737ebec29a91da61)): ?>
<?php $component = $__componentOriginal2d7605e1adbee8a1737ebec29a91da61; ?>
<?php unset($__componentOriginal2d7605e1adbee8a1737ebec29a91da61); ?>
<?php endif; ?>
                                            <?php elseif(in_array($item['extension'] ?? '', ['pdf'])): ?>
                                                <?php if (isset($component)) { $__componentOriginal74697c151ccb8418c53b50a995b31225 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal74697c151ccb8418c53b50a995b31225 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.document-text','data' => ['class' => 'size-4 text-pink-600']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.document-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4 text-pink-600']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal74697c151ccb8418c53b50a995b31225)): ?>
<?php $attributes = $__attributesOriginal74697c151ccb8418c53b50a995b31225; ?>
<?php unset($__attributesOriginal74697c151ccb8418c53b50a995b31225); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal74697c151ccb8418c53b50a995b31225)): ?>
<?php $component = $__componentOriginal74697c151ccb8418c53b50a995b31225; ?>
<?php unset($__componentOriginal74697c151ccb8418c53b50a995b31225); ?>
<?php endif; ?>
                                            <?php elseif(in_array($item['extension'] ?? '', ['doc', 'docx'])): ?>
                                                <?php if (isset($component)) { $__componentOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.document','data' => ['class' => 'size-4 text-pink-600']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.document'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4 text-pink-600']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf)): ?>
<?php $attributes = $__attributesOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf; ?>
<?php unset($__attributesOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf)): ?>
<?php $component = $__componentOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf; ?>
<?php unset($__componentOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf); ?>
<?php endif; ?>
                                            <?php elseif(in_array($item['extension'] ?? '', ['xls', 'xlsx'])): ?>
                                                <?php if (isset($component)) { $__componentOriginal189181f4980e61ed42db6956a42cd67c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal189181f4980e61ed42db6956a42cd67c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.table-cells','data' => ['class' => 'size-4 text-pink-600']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.table-cells'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4 text-pink-600']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal189181f4980e61ed42db6956a42cd67c)): ?>
<?php $attributes = $__attributesOriginal189181f4980e61ed42db6956a42cd67c; ?>
<?php unset($__attributesOriginal189181f4980e61ed42db6956a42cd67c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal189181f4980e61ed42db6956a42cd67c)): ?>
<?php $component = $__componentOriginal189181f4980e61ed42db6956a42cd67c; ?>
<?php unset($__componentOriginal189181f4980e61ed42db6956a42cd67c); ?>
<?php endif; ?>
                                            <?php elseif(in_array($item['extension'] ?? '', ['zip', 'rar', '7z'])): ?>
                                                <?php if (isset($component)) { $__componentOriginalfd4200f6696edf75af02a07ca2efbbbb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfd4200f6696edf75af02a07ca2efbbbb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.archive-box','data' => ['class' => 'size-4 text-pink-600']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.archive-box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4 text-pink-600']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfd4200f6696edf75af02a07ca2efbbbb)): ?>
<?php $attributes = $__attributesOriginalfd4200f6696edf75af02a07ca2efbbbb; ?>
<?php unset($__attributesOriginalfd4200f6696edf75af02a07ca2efbbbb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfd4200f6696edf75af02a07ca2efbbbb)): ?>
<?php $component = $__componentOriginalfd4200f6696edf75af02a07ca2efbbbb; ?>
<?php unset($__componentOriginalfd4200f6696edf75af02a07ca2efbbbb); ?>
<?php endif; ?>
                                            <?php else: ?>
                                                <?php if (isset($component)) { $__componentOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.document','data' => ['class' => 'size-4 text-pink-600']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.document'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4 text-pink-600']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf)): ?>
<?php $attributes = $__attributesOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf; ?>
<?php unset($__attributesOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf)): ?>
<?php $component = $__componentOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf; ?>
<?php unset($__componentOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf); ?>
<?php endif; ?>
                                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        </div>
                                        <div>
                                            <div class="font-medium text-gray-900 dark:text-white break-words">
                                                <!--[if BLOCK]><![endif]--><?php if($item['type'] === 'directory'): ?>
                                                    <button wire:click="navigateToDirectory('<?php echo e($item['path']); ?>')"
                                                        class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">
                                                        <?php echo e($item['name']); ?>

                                                    </button>
                                                <?php else: ?>
                                                    <?php echo e($item['name']); ?>

                                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <!--[if BLOCK]><![endif]--><?php if($item['type'] === 'directory'): ?>
                                        <span
                                            class="px-2 py-1 text-xs font-medium bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full">
                                            THƯ MỤC
                                        </span>
                                    <?php else: ?>
                                        <span
                                            class="px-2 py-1 text-xs font-medium bg-pink-100 dark:bg-pink-900 text-pink-800 dark:text-pink-200 rounded-full">
                                            <?php echo e(strtoupper($item['extension'] ?? 'FILE')); ?>

                                        </span>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </td>

                                <td class="text-center text-sm text-gray-600 dark:text-gray-400">
                                    <?php echo e($this->formatDate($item['modified'])); ?>

                                </td>
                                <td class="text-center">
                                    <div class="flex items-center justify-center space-x-2">
                                        <!--[if BLOCK]><![endif]--><?php if($item['type'] === 'directory'): ?>
                                            <button wire:click="navigateToDirectory('<?php echo e($item['path']); ?>')"
                                                class="p-2 text-blue-600 hover:text-blue-800 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-lg transition-all duration-200">
                                                <?php if (isset($component)) { $__componentOriginal5c84e1af936cb00c34687173a7f14ca8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c84e1af936cb00c34687173a7f14ca8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.arrow-right','data' => ['class' => 'size-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.arrow-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5c84e1af936cb00c34687173a7f14ca8)): ?>
<?php $attributes = $__attributesOriginal5c84e1af936cb00c34687173a7f14ca8; ?>
<?php unset($__attributesOriginal5c84e1af936cb00c34687173a7f14ca8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5c84e1af936cb00c34687173a7f14ca8)): ?>
<?php $component = $__componentOriginal5c84e1af936cb00c34687173a7f14ca8; ?>
<?php unset($__componentOriginal5c84e1af936cb00c34687173a7f14ca8); ?>
<?php endif; ?>
                                            </button>
                                        <?php else: ?>
                                            <a href="<?php echo e(asset($item['path'])); ?>" target="_blank"
                                                class="p-2 text-blue-600 hover:text-blue-800 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-lg transition-all duration-200">
                                                <?php if (isset($component)) { $__componentOriginal2e57535a42d25d5415c31aa83132341b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2e57535a42d25d5415c31aa83132341b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.eye','data' => ['class' => 'size-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.eye'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2e57535a42d25d5415c31aa83132341b)): ?>
<?php $attributes = $__attributesOriginal2e57535a42d25d5415c31aa83132341b; ?>
<?php unset($__attributesOriginal2e57535a42d25d5415c31aa83132341b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2e57535a42d25d5415c31aa83132341b)): ?>
<?php $component = $__componentOriginal2e57535a42d25d5415c31aa83132341b; ?>
<?php unset($__componentOriginal2e57535a42d25d5415c31aa83132341b); ?>
<?php endif; ?>
                                            </a>
                                            <button wire:click="downloadFile('<?php echo e($item['name']); ?>')"
                                                class="p-2 text-green-600 hover:text-green-800 hover:bg-green-50 dark:hover:bg-green-900/20 rounded-lg transition-all duration-200">
                                                <?php if (isset($component)) { $__componentOriginal2ec15606c28ac475c0acbe5c53b8b490 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2ec15606c28ac475c0acbe5c53b8b490 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.arrow-down-tray','data' => ['class' => 'size-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.arrow-down-tray'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2ec15606c28ac475c0acbe5c53b8b490)): ?>
<?php $attributes = $__attributesOriginal2ec15606c28ac475c0acbe5c53b8b490; ?>
<?php unset($__attributesOriginal2ec15606c28ac475c0acbe5c53b8b490); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2ec15606c28ac475c0acbe5c53b8b490)): ?>
<?php $component = $__componentOriginal2ec15606c28ac475c0acbe5c53b8b490; ?>
<?php unset($__componentOriginal2ec15606c28ac475c0acbe5c53b8b490); ?>
<?php endif; ?>
                                            </button>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        <button wire:click="deleteItem('<?php echo e($item['name']); ?>', '<?php echo e($item['type']); ?>')"
                                            wire:confirm="Bạn có chắc chắn muốn xóa <?php echo e($item['type'] === 'directory' ? 'thư mục' : 'file'); ?> này?"
                                            class="p-2 text-red-600 hover:text-red-800 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg transition-all duration-200">
                                            <?php if (isset($component)) { $__componentOriginalca0d7d887f05c1393a9d98702b6659ea = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalca0d7d887f05c1393a9d98702b6659ea = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.trash','data' => ['class' => 'size-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.trash'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalca0d7d887f05c1393a9d98702b6659ea)): ?>
<?php $attributes = $__attributesOriginalca0d7d887f05c1393a9d98702b6659ea; ?>
<?php unset($__attributesOriginalca0d7d887f05c1393a9d98702b6659ea); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalca0d7d887f05c1393a9d98702b6659ea)): ?>
<?php $component = $__componentOriginalca0d7d887f05c1393a9d98702b6659ea; ?>
<?php unset($__componentOriginalca0d7d887f05c1393a9d98702b6659ea); ?>
<?php endif; ?>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </tbody>
                </table>
            </div>

            
            <div class="md:hidden space-y-2 p-3">
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $filteredItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div
                        class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 shadow-sm">
                        <div class="p-3">
                            
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center space-x-2 flex-1 min-w-0">


                                    <div
                                        class="w-8 h-8 bg-pink-100 dark:bg-pink-900 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <!--[if BLOCK]><![endif]--><?php if($item['type'] === 'directory'): ?>
                                            <?php if (isset($component)) { $__componentOriginal9d976d16d2d40e73349b791bdc546089 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d976d16d2d40e73349b791bdc546089 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.folder','data' => ['class' => 'size-4 text-pink-600']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.folder'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4 text-pink-600']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d976d16d2d40e73349b791bdc546089)): ?>
<?php $attributes = $__attributesOriginal9d976d16d2d40e73349b791bdc546089; ?>
<?php unset($__attributesOriginal9d976d16d2d40e73349b791bdc546089); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d976d16d2d40e73349b791bdc546089)): ?>
<?php $component = $__componentOriginal9d976d16d2d40e73349b791bdc546089; ?>
<?php unset($__componentOriginal9d976d16d2d40e73349b791bdc546089); ?>
<?php endif; ?>
                                        <?php elseif(in_array($item['extension'] ?? '', ['jpg', 'jpeg', 'png', 'gif', 'webp'])): ?>
                                            <?php if (isset($component)) { $__componentOriginal2d7605e1adbee8a1737ebec29a91da61 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2d7605e1adbee8a1737ebec29a91da61 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.photo','data' => ['class' => 'size-4 text-pink-600']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.photo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4 text-pink-600']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2d7605e1adbee8a1737ebec29a91da61)): ?>
<?php $attributes = $__attributesOriginal2d7605e1adbee8a1737ebec29a91da61; ?>
<?php unset($__attributesOriginal2d7605e1adbee8a1737ebec29a91da61); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2d7605e1adbee8a1737ebec29a91da61)): ?>
<?php $component = $__componentOriginal2d7605e1adbee8a1737ebec29a91da61; ?>
<?php unset($__componentOriginal2d7605e1adbee8a1737ebec29a91da61); ?>
<?php endif; ?>
                                        <?php elseif(in_array($item['extension'] ?? '', ['pdf'])): ?>
                                            <?php if (isset($component)) { $__componentOriginal74697c151ccb8418c53b50a995b31225 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal74697c151ccb8418c53b50a995b31225 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.document-text','data' => ['class' => 'size-4 text-pink-600']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.document-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4 text-pink-600']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal74697c151ccb8418c53b50a995b31225)): ?>
<?php $attributes = $__attributesOriginal74697c151ccb8418c53b50a995b31225; ?>
<?php unset($__attributesOriginal74697c151ccb8418c53b50a995b31225); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal74697c151ccb8418c53b50a995b31225)): ?>
<?php $component = $__componentOriginal74697c151ccb8418c53b50a995b31225; ?>
<?php unset($__componentOriginal74697c151ccb8418c53b50a995b31225); ?>
<?php endif; ?>
                                        <?php elseif(in_array($item['extension'] ?? '', ['doc', 'docx'])): ?>
                                            <?php if (isset($component)) { $__componentOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.document','data' => ['class' => 'size-4 text-pink-600']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.document'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4 text-pink-600']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf)): ?>
<?php $attributes = $__attributesOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf; ?>
<?php unset($__attributesOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf)): ?>
<?php $component = $__componentOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf; ?>
<?php unset($__componentOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf); ?>
<?php endif; ?>
                                        <?php elseif(in_array($item['extension'] ?? '', ['xls', 'xlsx'])): ?>
                                            <?php if (isset($component)) { $__componentOriginal189181f4980e61ed42db6956a42cd67c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal189181f4980e61ed42db6956a42cd67c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.table-cells','data' => ['class' => 'size-4 text-pink-600']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.table-cells'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4 text-pink-600']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal189181f4980e61ed42db6956a42cd67c)): ?>
<?php $attributes = $__attributesOriginal189181f4980e61ed42db6956a42cd67c; ?>
<?php unset($__attributesOriginal189181f4980e61ed42db6956a42cd67c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal189181f4980e61ed42db6956a42cd67c)): ?>
<?php $component = $__componentOriginal189181f4980e61ed42db6956a42cd67c; ?>
<?php unset($__componentOriginal189181f4980e61ed42db6956a42cd67c); ?>
<?php endif; ?>
                                        <?php elseif(in_array($item['extension'] ?? '', ['zip', 'rar', '7z'])): ?>
                                            <?php if (isset($component)) { $__componentOriginalfd4200f6696edf75af02a07ca2efbbbb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfd4200f6696edf75af02a07ca2efbbbb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.archive-box','data' => ['class' => 'size-4 text-pink-600']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.archive-box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4 text-pink-600']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfd4200f6696edf75af02a07ca2efbbbb)): ?>
<?php $attributes = $__attributesOriginalfd4200f6696edf75af02a07ca2efbbbb; ?>
<?php unset($__attributesOriginalfd4200f6696edf75af02a07ca2efbbbb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfd4200f6696edf75af02a07ca2efbbbb)): ?>
<?php $component = $__componentOriginalfd4200f6696edf75af02a07ca2efbbbb; ?>
<?php unset($__componentOriginalfd4200f6696edf75af02a07ca2efbbbb); ?>
<?php endif; ?>
                                        <?php else: ?>
                                            <?php if (isset($component)) { $__componentOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.document','data' => ['class' => 'size-4 text-pink-600']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.document'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4 text-pink-600']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf)): ?>
<?php $attributes = $__attributesOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf; ?>
<?php unset($__attributesOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf)): ?>
<?php $component = $__componentOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf; ?>
<?php unset($__componentOriginalcd5e2a7f8ed74ae073a6098cd6bb0fbf); ?>
<?php endif; ?>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    </div>

                                    <div class="flex-1 min-w-0">
                                        <div class="font-medium text-gray-900 dark:text-white text-sm leading-tight">
                                            <!--[if BLOCK]><![endif]--><?php if($item['type'] === 'directory'): ?>
                                                <button wire:click="navigateToDirectory('<?php echo e($item['path']); ?>')"
                                                    class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300 text-left">
                                                    <?php echo e($item['name']); ?>

                                                </button>
                                            <?php else: ?>
                                                <span class="break-words"><?php echo e($item['name']); ?></span>
                                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center space-x-1 flex-shrink-0">
                                    <!--[if BLOCK]><![endif]--><?php if($item['type'] === 'directory'): ?>
                                        <button wire:click="navigateToDirectory('<?php echo e($item['path']); ?>')"
                                            class="p-1.5 text-blue-600 hover:text-blue-800 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-lg transition-all duration-200">
                                            <?php if (isset($component)) { $__componentOriginal5c84e1af936cb00c34687173a7f14ca8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c84e1af936cb00c34687173a7f14ca8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.arrow-right','data' => ['class' => 'size-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.arrow-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5c84e1af936cb00c34687173a7f14ca8)): ?>
<?php $attributes = $__attributesOriginal5c84e1af936cb00c34687173a7f14ca8; ?>
<?php unset($__attributesOriginal5c84e1af936cb00c34687173a7f14ca8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5c84e1af936cb00c34687173a7f14ca8)): ?>
<?php $component = $__componentOriginal5c84e1af936cb00c34687173a7f14ca8; ?>
<?php unset($__componentOriginal5c84e1af936cb00c34687173a7f14ca8); ?>
<?php endif; ?>
                                        </button>
                                    <?php else: ?>
                                        <a href="<?php echo e(asset($item['path'])); ?>" target="_blank"
                                            class="p-1.5 text-blue-600 hover:text-blue-800 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-lg transition-all duration-200">
                                            <?php if (isset($component)) { $__componentOriginal2e57535a42d25d5415c31aa83132341b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2e57535a42d25d5415c31aa83132341b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.eye','data' => ['class' => 'size-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.eye'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2e57535a42d25d5415c31aa83132341b)): ?>
<?php $attributes = $__attributesOriginal2e57535a42d25d5415c31aa83132341b; ?>
<?php unset($__attributesOriginal2e57535a42d25d5415c31aa83132341b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2e57535a42d25d5415c31aa83132341b)): ?>
<?php $component = $__componentOriginal2e57535a42d25d5415c31aa83132341b; ?>
<?php unset($__componentOriginal2e57535a42d25d5415c31aa83132341b); ?>
<?php endif; ?>
                                        </a>
                                        <button wire:click="downloadFile('<?php echo e($item['name']); ?>')"
                                            class="p-1.5 text-green-600 hover:text-green-800 hover:bg-green-50 dark:hover:bg-green-900/20 rounded-lg transition-all duration-200">
                                            <?php if (isset($component)) { $__componentOriginal2ec15606c28ac475c0acbe5c53b8b490 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2ec15606c28ac475c0acbe5c53b8b490 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.arrow-down-tray','data' => ['class' => 'size-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.arrow-down-tray'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2ec15606c28ac475c0acbe5c53b8b490)): ?>
<?php $attributes = $__attributesOriginal2ec15606c28ac475c0acbe5c53b8b490; ?>
<?php unset($__attributesOriginal2ec15606c28ac475c0acbe5c53b8b490); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2ec15606c28ac475c0acbe5c53b8b490)): ?>
<?php $component = $__componentOriginal2ec15606c28ac475c0acbe5c53b8b490; ?>
<?php unset($__componentOriginal2ec15606c28ac475c0acbe5c53b8b490); ?>
<?php endif; ?>
                                        </button>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    <button wire:click="deleteItem('<?php echo e($item['name']); ?>', '<?php echo e($item['type']); ?>')"
                                        wire:confirm="Bạn có chắc chắn muốn xóa <?php echo e($item['type'] === 'directory' ? 'thư mục' : 'file'); ?> này?"
                                        class="p-1.5 text-red-600 hover:text-red-800 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg transition-all duration-200">
                                        <?php if (isset($component)) { $__componentOriginalca0d7d887f05c1393a9d98702b6659ea = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalca0d7d887f05c1393a9d98702b6659ea = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.trash','data' => ['class' => 'size-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.trash'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalca0d7d887f05c1393a9d98702b6659ea)): ?>
<?php $attributes = $__attributesOriginalca0d7d887f05c1393a9d98702b6659ea; ?>
<?php unset($__attributesOriginalca0d7d887f05c1393a9d98702b6659ea); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalca0d7d887f05c1393a9d98702b6659ea)): ?>
<?php $component = $__componentOriginalca0d7d887f05c1393a9d98702b6659ea; ?>
<?php unset($__componentOriginalca0d7d887f05c1393a9d98702b6659ea); ?>
<?php endif; ?>
                                    </button>
                                </div>
                            </div>

                            
                            <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400">
                                <div class="flex items-center space-x-2">
                                    <!--[if BLOCK]><![endif]--><?php if($item['type'] === 'directory'): ?>
                                        <span
                                            class="px-2 py-0.5 text-xs font-medium bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full">
                                            THƯ MỤC
                                        </span>
                                    <?php else: ?>
                                        <span
                                            class="px-2 py-0.5 text-xs font-medium bg-pink-100 dark:bg-pink-900 text-pink-800 dark:text-pink-200 rounded-full">
                                            <?php echo e(strtoupper($item['extension'] ?? 'FILE')); ?>

                                        </span>
                                        <span class="text-xs text-gray-500 dark:text-gray-400">
                                            <?php echo e($this->formatFileSize($item['size'] ?? 0)); ?>

                                        </span>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">
                                    <?php echo e($this->formatDate($item['modified'])); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        <?php else: ?>
            
            <div class="p-8">
                <div class="empty-state flex flex-col items-center">
                    <?php if (isset($component)) { $__componentOriginalaf2fb790fcb67bb9dde08c2ddc18df9a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaf2fb790fcb67bb9dde08c2ddc18df9a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.folder-open','data' => ['class' => 'w-16 h-16 mb-4 text-gray-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.folder-open'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-16 h-16 mb-4 text-gray-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaf2fb790fcb67bb9dde08c2ddc18df9a)): ?>
<?php $attributes = $__attributesOriginalaf2fb790fcb67bb9dde08c2ddc18df9a; ?>
<?php unset($__attributesOriginalaf2fb790fcb67bb9dde08c2ddc18df9a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaf2fb790fcb67bb9dde08c2ddc18df9a)): ?>
<?php $component = $__componentOriginalaf2fb790fcb67bb9dde08c2ddc18df9a; ?>
<?php unset($__componentOriginalaf2fb790fcb67bb9dde08c2ddc18df9a); ?>
<?php endif; ?>
                    <h3 class="text-lg font-medium mb-2 text-gray-500">
                        <!--[if BLOCK]><![endif]--><?php if($search): ?>
                            Không tìm thấy mục nào
                        <?php else: ?>
                            Thư mục trống
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    </h3>
                    <p class="text-gray-400 text-center mb-4">
                        <!--[if BLOCK]><![endif]--><?php if($search): ?>
                            Thử tìm kiếm với từ khóa khác
                        <?php else: ?>
                            Tạo thư mục hoặc upload file để bắt đầu
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    </p>
                    <!--[if BLOCK]><![endif]--><?php if(!$search): ?>
                        <div class="flex flex-col sm:flex-row gap-2">
                            <button wire:click="$set('showCreateFolderModal', true)"
                                class="theme-header-pink header-button">
                                <?php if (isset($component)) { $__componentOriginal153eae880c80b4d7fc5bce086a05e0cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal153eae880c80b4d7fc5bce086a05e0cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.folder-plus','data' => ['class' => 'size-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.folder-plus'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal153eae880c80b4d7fc5bce086a05e0cf)): ?>
<?php $attributes = $__attributesOriginal153eae880c80b4d7fc5bce086a05e0cf; ?>
<?php unset($__attributesOriginal153eae880c80b4d7fc5bce086a05e0cf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal153eae880c80b4d7fc5bce086a05e0cf)): ?>
<?php $component = $__componentOriginal153eae880c80b4d7fc5bce086a05e0cf; ?>
<?php unset($__componentOriginal153eae880c80b4d7fc5bce086a05e0cf); ?>
<?php endif; ?>
                                <span>Tạo thư mục</span>
                            </button>
                            <button wire:click="$set('showUploadModal', true)"
                                class="theme-header-pink header-button">
                                <?php if (isset($component)) { $__componentOriginal37c717510e7a32140849d8d5dd9d632e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal37c717510e7a32140849d8d5dd9d632e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.plus','data' => ['class' => 'size-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.plus'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal37c717510e7a32140849d8d5dd9d632e)): ?>
<?php $attributes = $__attributesOriginal37c717510e7a32140849d8d5dd9d632e; ?>
<?php unset($__attributesOriginal37c717510e7a32140849d8d5dd9d632e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal37c717510e7a32140849d8d5dd9d632e)): ?>
<?php $component = $__componentOriginal37c717510e7a32140849d8d5dd9d632e; ?>
<?php unset($__componentOriginal37c717510e7a32140849d8d5dd9d632e); ?>
<?php endif; ?>
                                <span>Upload File</span>
                            </button>
                        </div>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>

    
    <!--[if BLOCK]><![endif]--><?php if($showUploadModal): ?>
        <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50"
            wire:click.self="$set('showUploadModal', false)">
            <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 w-full max-w-md mx-4">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Upload File</h3>
                    <button wire:click="$set('showUploadModal', false)"
                        class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                        <?php if (isset($component)) { $__componentOriginal155e76c41fe51242bc25d269fabf82f5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal155e76c41fe51242bc25d269fabf82f5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.x-mark','data' => ['class' => 'size-5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.x-mark'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal155e76c41fe51242bc25d269fabf82f5)): ?>
<?php $attributes = $__attributesOriginal155e76c41fe51242bc25d269fabf82f5; ?>
<?php unset($__attributesOriginal155e76c41fe51242bc25d269fabf82f5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal155e76c41fe51242bc25d269fabf82f5)): ?>
<?php $component = $__componentOriginal155e76c41fe51242bc25d269fabf82f5; ?>
<?php unset($__componentOriginal155e76c41fe51242bc25d269fabf82f5); ?>
<?php endif; ?>
                    </button>
                </div>

                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Chọn file (tối đa 10MB mỗi file)
                        </label>
                        <input type="file" wire:model="uploadedFiles" multiple
                            class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500 bg-white dark:bg-gray-800 text-gray-900 dark:text-white">
                        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['uploadedFiles.*'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                    </div>

                    <div class="flex justify-end space-x-3">
                        <button wire:click="$set('showUploadModal', false)"
                            class="px-4 py-2 text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200">
                            Hủy
                        </button>
                        <button wire:click="uploadFiles" class="theme-header-pink header-button">
                            <?php if (isset($component)) { $__componentOriginal85dd2b36d9d92722bb4a9b898e37dffe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal85dd2b36d9d92722bb4a9b898e37dffe = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.arrow-up-tray','data' => ['class' => 'size-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.arrow-up-tray'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal85dd2b36d9d92722bb4a9b898e37dffe)): ?>
<?php $attributes = $__attributesOriginal85dd2b36d9d92722bb4a9b898e37dffe; ?>
<?php unset($__attributesOriginal85dd2b36d9d92722bb4a9b898e37dffe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal85dd2b36d9d92722bb4a9b898e37dffe)): ?>
<?php $component = $__componentOriginal85dd2b36d9d92722bb4a9b898e37dffe; ?>
<?php unset($__componentOriginal85dd2b36d9d92722bb4a9b898e37dffe); ?>
<?php endif; ?>
                            <span>Upload</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    
    <!--[if BLOCK]><![endif]--><?php if($showCreateFolderModal): ?>
        <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50"
            wire:click.self="$set('showCreateFolderModal', false)">
            <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 w-full max-w-md mx-4">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Tạo thư mục mới</h3>
                    <button wire:click="$set('showCreateFolderModal', false)"
                        class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                        <?php if (isset($component)) { $__componentOriginal155e76c41fe51242bc25d269fabf82f5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal155e76c41fe51242bc25d269fabf82f5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.x-mark','data' => ['class' => 'size-5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.x-mark'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal155e76c41fe51242bc25d269fabf82f5)): ?>
<?php $attributes = $__attributesOriginal155e76c41fe51242bc25d269fabf82f5; ?>
<?php unset($__attributesOriginal155e76c41fe51242bc25d269fabf82f5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal155e76c41fe51242bc25d269fabf82f5)): ?>
<?php $component = $__componentOriginal155e76c41fe51242bc25d269fabf82f5; ?>
<?php unset($__componentOriginal155e76c41fe51242bc25d269fabf82f5); ?>
<?php endif; ?>
                    </button>
                </div>

                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Tên thư mục
                        </label>
                        <input type="text" wire:model="newFolderName" placeholder="Nhập tên thư mục..."
                            class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500 bg-white dark:bg-gray-800 text-gray-900 dark:text-white">
                        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['newFolderName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                    </div>

                    <div class="flex justify-end space-x-3">
                        <button wire:click="$set('showCreateFolderModal', false)"
                            class="px-4 py-2 text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200">
                            Hủy
                        </button>
                        <button wire:click="createFolder" class="theme-header-pink header-button">
                            <?php if (isset($component)) { $__componentOriginal153eae880c80b4d7fc5bce086a05e0cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal153eae880c80b4d7fc5bce086a05e0cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.folder-plus','data' => ['class' => 'size-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.folder-plus'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal153eae880c80b4d7fc5bce086a05e0cf)): ?>
<?php $attributes = $__attributesOriginal153eae880c80b4d7fc5bce086a05e0cf; ?>
<?php unset($__attributesOriginal153eae880c80b4d7fc5bce086a05e0cf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal153eae880c80b4d7fc5bce086a05e0cf)): ?>
<?php $component = $__componentOriginal153eae880c80b4d7fc5bce086a05e0cf; ?>
<?php unset($__componentOriginal153eae880c80b4d7fc5bce086a05e0cf); ?>
<?php endif; ?>
                            <span>Tạo</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

</div>
<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/livewire/back/management/test/placement-tests.blade.php ENDPATH**/ ?>