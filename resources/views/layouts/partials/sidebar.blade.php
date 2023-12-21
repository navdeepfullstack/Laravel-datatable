<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mx-auto"><a class="navbar-brand" href="{{ route('user.home') }}"><span class="brand-logo">
                        <img src="{{ asset('images/logo1.png') }}">
                    </span>
                    <!-- <h2 class="brand-text">{{ config('app.name') }}</h2> -->
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                        class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                        class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc"
                        data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li
                class=" nav-item {{ request()->is('/') || request()->is('production') || request()->is('cutting') ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('user.home') }}"><i data-feather="home"></i><span
                        class="menu-title text-truncate" data-i18n="Dashboards">Dashboard</span></a>
            </li>

            <li class=" nav-item {{ request()->is('users') || request()->is('users/*') ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('users.index') }}"><i data-feather="user"></i><span
                        class="menu-title text-truncate" data-i18n="Users">Users</span></a>
            </li>
            <li class=" nav-item {{ request()->is('restaurant') || request()->is('restaurant/*') ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('restaurant.index') }}"><i
                        data-feather="award"></i><span class="menu-title text-truncate"
                        data-i18n="Restaurant">Restaurants</span></a>
            </li>
            <li class=" nav-item {{ request()->is('iceCream') || request()->is('iceCream/*') ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('iceCream.index') }}"><i
                        data-feather="droplet"></i><span class="menu-title text-truncate"
                        data-i18n="iceCream">iceCreams</span></a>
            </li>
            <li class=" nav-item {{ request()->is('flavor') || request()->is('flavor/*') ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('flavor.index') }}"><i
                        data-feather="stop-circle"></i><span class="menu-title text-truncate"
                        data-i18n="flavor">Flavors</span></a>
            </li>
            <li class=" nav-item {{ request()->is('category') || request()->is('category/*') ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('category.index') }}"><i
                        data-feather="stop-circle"></i><span class="menu-title text-truncate"
                        data-i18n="flavor">Category</span></a>
            </li>


            </li>
            <li class=" nav-item {{ request()->is('page') || request()->is('page/*') ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('page.index') }}"><i
                        data-feather="stop-circle"></i><span class="menu-title text-truncate"
                        data-i18n="flavor">Pages</span></a>
            </li>
            <li class=" nav-item {{ request()->is('support') || request()->is('support/*') ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('support.index') }}"><i
                        data-feather="stop-circle"></i><span class="menu-title text-truncate"
                        data-i18n="flavor">Supports</span></a>
            </li>




        </ul>
    </div>
</div>
<!-- END: Main Menu
