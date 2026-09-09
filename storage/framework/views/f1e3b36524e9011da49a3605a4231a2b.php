<div class="aside aside-left aside-fixed flex flex-col flex-row-auto" id="kt_aside">
    <!--begin::Brand-->
    <div class="brand flex-column-auto px-6 py-4" id="kt_brand" style="background: #1e1e2d;">
        <!--begin::Logo-->
        <a href="<?php echo e(route('admin.dashboard')); ?>" class="brand-logo flex items-center">
            <img alt="Inoodex" style="max-height: 32px; width: auto; object-fit: contain;" src="<?php echo e(asset('frontend/assets/images/logo.png')); ?>" />
        </a>
        <!--end::Logo-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside Menu-->
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
        <!--begin::Menu Container-->
        <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1"
            data-menu-dropdown-timeout="500">
            <!--begin::Menu Nav-->
            <ul class="menu-nav">
                <li class="menu-item menu-item-active" aria-haspopup="true">
                    <a href="<?php echo e(route('admin.dashboard')); ?>" class="menu-link">
                        <i class="menu-icon flaticon2-architecture-and-city"></i>
                        <span class="menu-text">Home</span>
                    </a>
                </li>

                
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon2-laptop"></i>
                        <span class="menu-text">Slider</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item" aria-haspopup="true">
                                <a href="<?php echo e(route('admin.sliders.create')); ?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Create</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="<?php echo e(route('admin.sliders.index')); ?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Manage</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon2-layers"></i>
                        <span class="menu-text">Portfolio</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item" aria-haspopup="true">
                                <a href="<?php echo e(route('admin.portfolios.create')); ?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Create</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="<?php echo e(route('admin.portfolios.index')); ?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Manage</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon2-box"></i>
                        <span class="menu-text">Product</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item" aria-haspopup="true">
                                <a href="<?php echo e(route('admin.products.create')); ?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Create</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="<?php echo e(route('admin.products.index')); ?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Manage</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon2-laptop"></i>
                        <span class="menu-text">Theme</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item" aria-haspopup="true">
                                <a href="<?php echo e(route('admin.themes.create')); ?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Create</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="<?php echo e(route('admin.themes.index')); ?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Manage</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="click">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon2-pen"></i>
                        <span class="menu-text">Blog</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <ul class="menu-subnav">
                            <li class="menu-item" aria-haspopup="true">
                                <a href="<?php echo e(route('admin.blogs.create')); ?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                    <span class="menu-text">Create</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="<?php echo e(route('admin.blogs.index')); ?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                    <span class="menu-text">Manage</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="click">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon2-phone"></i>
                        <span class="menu-text">Contact</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <ul class="menu-subnav">
                            <li class="menu-item" aria-haspopup="true">
                                <a href="<?php echo e(route('admin.contacts.create')); ?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                    <span class="menu-text">Create</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="<?php echo e(route('admin.contacts.index')); ?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                    <span class="menu-text">Manage</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="click">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon2-chat"></i>
                        <span class="menu-text">Messages</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <ul class="menu-subnav">
                            
                            <li class="menu-item" aria-haspopup="true">
                                <a href="<?php echo e(route('admin.contact.index')); ?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                    <span class="menu-text">Manage</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="click">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon2-analytics"></i>
                        <span class="menu-text">Category</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <ul class="menu-subnav">
                            <li class="menu-item" aria-haspopup="true">
                                <a href="<?php echo e(route('admin.categories.create')); ?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                    <span class="menu-text">Create</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="<?php echo e(route('admin.categories.index')); ?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                    <span class="menu-text">Manage</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="click">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon2-user-outline-symbol"></i>
                        <span class="menu-text">Team</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <ul class="menu-subnav">
                            <li class="menu-item" aria-haspopup="true">
                                <a href="<?php echo e(route('admin.teams.create')); ?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                    <span class="menu-text">Create</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="<?php echo e(route('admin.teams.index')); ?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                    <span class="menu-text">Manage</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="click">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon2-group"></i>
                        <span class="menu-text">Partner</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <ul class="menu-subnav">
                            <li class="menu-item" aria-haspopup="true">
                                <a href="<?php echo e(route('admin.partners.create')); ?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                    <span class="menu-text">Create</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="<?php echo e(route('admin.partners.index')); ?>" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                    <span class="menu-text">Manage</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                

            </ul>
            <!--end::Menu Nav-->
        </div>
        <!--end::Menu Container-->
    </div>
    <!--end::Aside Menu-->
</div>
<?php /**PATH C:\laragon\www\inoodex_latest\resources\views/admin/layout/sidebar.blade.php ENDPATH**/ ?>