<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
    <!--begin::Header Menu-->
    <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
        <!--begin::Header Nav-->
        <ul class="menu-nav">
            <li class="menu-item {{ request()->routeIs('dashboard') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{ route('dashboard') }}" class="menu-link">
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>
        </ul>

        <!--end::Header Nav-->
    </div>
    <!--end::Header Menu-->
</div>
