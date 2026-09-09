<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
    <!--begin::Header Menu-->
    <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
        <!--begin::Header Nav-->
        <ul class="menu-nav">
            <li class="menu-item <?php echo e(request()->routeIs('dashboard') ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                <a href="<?php echo e(route('dashboard')); ?>" class="menu-link">
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>
        </ul>

        <!--end::Header Nav-->
    </div>
    <!--end::Header Menu-->
</div>
<?php /**PATH C:\laragon\www\inoodex_latest\resources\views/admin/layout/header_menu_wrapper.blade.php ENDPATH**/ ?>