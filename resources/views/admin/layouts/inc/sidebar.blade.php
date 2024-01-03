@php

    $secondParam = Request::segment(2);
    $thirdParam = Request::segment(3);
    $fourthParam = Request::segment(4);
@endphp
<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto">
                <a class="navbar-brand" href="{{ route('home.index') }}" target="_blank">
                    <span class="brand-logo"><img src="{{ asset('/website/img/logo1.jpeg') }}" alt=""
                            class=""></span>
                </a>
            </li>
            <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                        class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                        class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc"
                        data-ticon="disc"></i></a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item {{ $secondParam == 'dashboard' || $secondParam == '' ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('admin.dashboard.index') }}">
                    <i class="ti ti-home"></i><span class="menu-title text-wrap">Dashboard</span>
                </a>
            </li>
            <li class="navigation-header"><span>Catalog</span><i data-feather="more-horizontal"></i></li>
            @can('booking-list')
                <li class="nav-item {{ $secondParam == 'booking' ? 'active' : '' }}">
                    <a class="d-flex align-items-center" href="{{ route('admin.booking.index') }}">
                        <i class="ti ti-notebook"></i><span class="menu-title text-wrap">Booking</span>
                    </a>
                </li>
            @endcan
            @can('agent-list')
                <li class="nav-item {{ $secondParam == 'agent' ? 'active' : '' }}">
                    <a class="d-flex align-items-center" href="{{ route('admin.agent.index') }}">
                        <i data-feather="layers" class="avatar-icon"></i><span class="menu-title text-wrap">Agents</span>
                    </a>
                </li>
            @endcan

            @canany(['content-list'])
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"> <i data-feather="columns"
                            class="avatar-icon"></i>
                        <span class="menu-title text-truncate" data-i18n="Roles &amp; Permission">Contents</span></a>
                    <ul class="menu-content">
                        @can('content-list')
                            <li class="{{ $secondParam == 'content' ? 'active' : '' }}"><a class="d-flex align-items-center"
                                    href="{{ route('admin.content.index') }}"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="Roles">Content</span></a>
                            </li>
                        @endcan
                        @can('menu-list')
                            <li class="{{ $secondParam == 'menu' ? 'active' : '' }}"><a class="d-flex align-items-center"
                                    href="{{ route('admin.menu.index') }}"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="Roles">Menu</span></a>
                            </li>
                        @endcan
                        @can('city-list')
                            <li class="{{ $secondParam == 'city' ? 'active' : '' }}"><a class="d-flex align-items-center"
                                    href="{{ route('admin.city.index') }}"><i data-feather="circle"></i><span
                                        class="city-item text-truncate" data-i18n="Roles">City</span></a>
                            </li>
                        @endcan
                        @can('banner-list')
                            <li class="{{ $secondParam == 'banner' ? 'active' : '' }}"><a class="d-flex align-items-center"
                                    href="{{ route('admin.banner.index') }}"><i data-feather="circle"></i><span
                                        class="banner-item text-truncate" data-i18n="Roles">Banner</span></a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcanany
            @canany(['attribute-list', 'product-category-list', 'product-list', 'product-search'])
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"> <i data-feather="box"
                            class="avatar-icon"></i>
                        <span class="menu-title text-truncate" data-i18n="Roles &amp; Permission">Products </span></a>
                    <ul class="menu-content">
                        @can('attribute-list')
                            <li class="{{ $secondParam == 'attribute' ? 'active' : '' }}"><a class="d-flex align-items-center"
                                    href="{{ route('admin.attribute.index') }}"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="Roles">Attributes</span></a>
                            </li>
                        @endcan
                        @can('product-category-list')
                            <li class="{{ $secondParam == 'product-category' ? 'active' : '' }}"><a
                                    class="d-flex align-items-center" href="{{ route('admin.product-category.index') }}"><i
                                        data-feather="circle"></i><span class="menu-item text-truncate"
                                        data-i18n="Roles">Categories</span></a>
                            </li>
                        @endcan
                        @can('product-brand-list')
                            <li class="{{ $secondParam == 'product-brand' ? 'active' : '' }}"><a
                                    class="d-flex align-items-center" href="{{ route('admin.product-brand.index') }}"><i
                                        data-feather="circle"></i><span class="menu-item text-truncate"
                                        data-i18n="Roles">Brands</span></a>
                            </li>
                        @endcan
                        @can('product-list')
                            <li class="{{ $secondParam == 'product' ? 'active' : '' }}"><a class="d-flex align-items-center"
                                    href="{{ route('admin.product.index') }}"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="Permission">Products</span></a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcanany
            @canany(['role-list', 'user-list'])

                <li class="navigation-header"><span>User Management</span><i data-feather="more-horizontal"></i></li>
                @can('role-list')
                    <li class="nav-item {{ $secondParam == 'roles' ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href="{{ route('admin.roles.index') }}">
                            <i data-feather="shield"></i><span class="menu-title text-wrap">Roles</span>
                        </a>
                    </li>
                @endcan

                @can('user-list')
                    <li class="nav-item {{ $secondParam == 'user' ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href="{{ route('admin.user.index') }}">
                            <i class="ti ti-user-check"></i><span class="menu-title text-wrap">User</span>
                        </a>
                    </li>
                @endcan
                @can('customer-list')
                    <li class="nav-item {{ $secondParam == 'customer' ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href="{{ route('admin.customer.index') }}">
                            <i class="ti ti-user-check"></i><span class="menu-title text-wrap">Customer</span>
                        </a>
                    </li>
                @endcan
            @endcanany


        </ul>
    </div>
</div>
<!-- END: Main Menu-->
