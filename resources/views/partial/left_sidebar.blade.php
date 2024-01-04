<aside class="app-sidebar sticky" id="sidebar">

    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <img src="{{ asset('backend/images/brand-logos/favicon.ico') }}" alt="logo" class="toggle-white" width="20%">

        {{-- <a href="index.html" class="header-logo">
            <img src="{{asset('backend/images/brand-logos/desktop-logo.png')}}" alt="logo" class="desktop-logo">
            <img src="{{asset('backend/images/brand-logos/toggle-logo.png')}}" alt="logo" class="toggle-logo">
            <img src="{{asset('backend/images/brand-logos/desktop-dark.png')}}" alt="logo" class="desktop-dark">
            <img src="{{asset('backend/images/brand-logos/toggle-dark.png')}}" alt="logo" class="toggle-dark">
            <img src="{{asset('backend/images/brand-logos/desktop-white.png')}}" alt="logo" class="desktop-white">
            <img src="{{asset('backend/images/brand-logos/toggle-white.png')}}" alt="logo" class="toggle-white">
        </a> --}}
    </div>
    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll">

        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                    viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                </svg>
            </div>
            <ul class="main-menu">
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Main</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="{{ route('dashboard') }}"
                        class="side-menu__item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="bx bx-store-alt side-menu__icon"></i>
                        <span class="side-menu__label">Dashboard</span>
                    </a>
                </li>

                @php
                    $videoCategoryRoutes = ['list.category', 'add.category', 'edit.category', 'video-category.index', 'video-category.create', 'video-category.edit','service.index','service.create','service.edit'];
                @endphp

                <li class="slide has-sub active  {{ request()->routeIs($videoCategoryRoutes) ? 'open' : '' }}">

                    <a href="javascript:void(0);" class="side-menu__item ">
                        <i class="bx bx-file-blank side-menu__icon"></i>
                        <span class="side-menu__label">Masters</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1 {{ request()->routeIs($videoCategoryRoutes) ? 'active' : '' }}">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Masters</a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('list.category') }}"
                                class="side-menu__item {{ request()->routeIs('list.category') || request()->routeIs('add.category') || request()->routeIs('edit.category') ? 'active' : '' }}">Category
                                Master</a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('video-category.index') }}"
                                class="side-menu__item {{ request()->routeIs('video-category.index') || request()->routeIs('video-category.create') || request()->routeIs('video-category.edit') ? 'active' : '' }}">Video
                                Category</a>
                        </li>

                        <li class="slide">
                            <a href="{{ route('service.index') }}"
                                class="side-menu__item {{ request()->routeIs('service.index') || request()->routeIs('service.create') || request()->routeIs('service.edit') ? 'active' : '' }}">Services
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="slide">
                    <a href="{{ route('subscriptions.index') }}"
                        class="side-menu__item {{ request()->routeIs('subscriptions.index') || request()->routeIs('subscriptions.create') || request()->routeIs('subscriptions.edit') ? 'active' : '' }}">
                        <i class="ti ti-brand-tabler side-menu__icon"></i>
                        <span class="side-menu__label">Subscriptions</span>
                    </a>
                </li>

                <li class="slide">
                    <a href="{{ route('news-letter.index') }}"
                        class="side-menu__item {{ request()->routeIs('news-letter.index') || request()->routeIs('news-letter.create') || request()->routeIs('news-letter.edit') ? 'active' : '' }}">
                        <i class="side-menu__icon las la-sort"></i>
                        <span class="side-menu__label">Newsletter</span>
                    </a>
                </li>

                <li class="slide">
                    <a href="{{ route('page.index') }}"
                        class="side-menu__item {{ request()->routeIs('page.index') || request()->routeIs('page.create') || request()->routeIs('page.edit') ? 'active' : '' }}">
                        <i class="bx bx-file-blank side-menu__icon"></i>
                        <span class="side-menu__label">Pages</span>
                    </a>
                </li>


                <li class="slide">
                    <a href="{{ route('information.index') }}"
                        class="side-menu__item {{ request()->routeIs('information.index') ? 'active' : '' }}">
                        <i class="bx bx-info-circle side-menu__icon"></i>
                        <span class="side-menu__label">Informations</span>
                    </a>
                </li>

                <li class="slide">
                    <a href="{{ route('user.index') }}"
                        class="side-menu__item {{ request()->routeIs('user.index') || request()->routeIs('user.create') || request()->routeIs('user.edit') ? 'active' : '' }}">
                        <i class="bx bi-people  side-menu__icon"></i>
                        <span class="side-menu__label">Manage Users</span>
                    </a>
                </li>

                <li class="slide">
                    <a href="{{ route('videos.index') }}"
                        class="side-menu__item {{ request()->routeIs('videos.index') || request()->routeIs('videos.create') || request()->routeIs('videos.edit') ? 'active' : '' }}">
                        <i class="bx bi-camera-video-fill side-menu__icon"></i>
                        <span class="side-menu__label">Manage Videos</span>
                    </a>
                </li>

                <li class="slide">
                    <a href="{{ route('logout') }}"
                        class="side-menu__item {{ request()->routeIs('logout') ? 'active' : '' }}">
                        <i class="ti ti-logout fs-18 me-2 op-7"></i>
                        <span class="side-menu__label">Logout</span>
                    </a>
                </li>

                <li class="slide">
                    <a href="{{ route('videos.index') }}"
                        class="side-menu__item {{ request()->routeIs('videos.index') || request()->routeIs('videos.create') || request()->routeIs('videos.edit') ? 'active' : '' }}">
                        <i class="bx bi-camera-video-fill side-menu__icon"></i>
                        <span class="side-menu__label">Settings</span>
                    </a>
                </li>

            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                </svg></div>
        </nav>
        <!-- End::nav -->

    </div>
    <!-- End::main-sidebar -->

</aside>
