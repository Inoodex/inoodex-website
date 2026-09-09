<?php $__env->startSection('title', 'Admin Dashboard'); ?>

<?php $__env->startSection('content'); ?>
    <div class="flex flex-col flex-root">
        <div class="flex flex-row flex-column-fluid page">
            
            <?php echo $__env->make('admin.layout.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <div class="flex flex-col flex-1 wrapper" id="kt_wrapper">

                <div class="w-full flex items-stretch justify-between">
                    
                    <?php echo $__env->make('admin.layout.header_menu_wrapper', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php echo $__env->make('admin.layout.topbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>

                
                <div class="content flex flex-col flex-column-fluid" id="kt_content">
                    <div class="container">
                        <?php echo $__env->yieldContent('admin_content'); ?>
                    </div>
                </div>

                
                <?php echo $__env->make('admin.layout.user_panel', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php echo $__env->make('admin.layout.quick_panel', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php echo $__env->make('admin.layout.chat_panel', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                
                <?php echo $__env->make('admin.layout.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\inoodex_latest\resources\views/admin/layout/admin_dashboard.blade.php ENDPATH**/ ?>