<div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="{{route('admin.home')}}">
                            <img src="{{asset('dashboard/assets/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{asset('dashboard/assets/images/brand/logo-1.png')}}" class="header-brand-img toggle-logo" alt="logo">
                            <img src="{{asset('dashboard/assets/images/brand/logo-2.png')}}" class="header-brand-img light-logo" alt="logo">
                            <img src="{{asset('dashboard/assets/images/brand/logo-3.png')}}" class="header-brand-img light-logo1" alt="logo">
                        </a>
                        <!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg></div>
                        <ul class="side-menu">
                            <li class="sub-category">
                                <h3>Main</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{route('admin.home')}}"><i
                                        class="side-menu__icon fe fe-home"></i><span
                                        class="side-menu__label">Dashboard</span></a>
                            </li>
                            <li class="sub-category">
                                <h3>Reservation</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fa fa-ticket"></i>
                                        <span
                                        class="side-menu__label">Reservation</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Reservation</a></li>
                                    <li><a href="{{route('reservation.index')}}" class="slide-item">Show All</a></li>
                                    <li><a href="{{route('reservation.create')}}" class="slide-item">Add New</a></li>
                                </ul>
                            </li>
                            <li class="sub-category">
                                <h3>Categories</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-tag"></i><span
                                        class="side-menu__label">Categories</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Apps</a></li>
                                    <li><a href="{{route('category.index')}}" class="slide-item"> All Categories</a></li>
                                    <li><a href="{{route('category.create')}}" class="slide-item"> Add New Categories</a></li>
                                    <li><a href="{{route('category.trashed')}}" class="slide-item"> Trashed</a></li>
                                </ul>
                            </li>
                            <li class="sub-category">
                                <h3>Messages</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                    <i class="side-menu__icon fe fe-message-square"></i>
                                    <span class="side-menu__label">Messages</span>
                                    <span class="badge bg-pink side-badge">{{ $messagesCount }}</span>
                                    <i class="angle fe fe-chevron-right hor-angle"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Messages</a></li>
                                    <li><a href="{{route('messages.index')}}" class="slide-item"> Show All</a></li>
                                </ul>
                            </li>
                            <li class="sub-category">
                                <h3>Products</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-shopping-bag"></i><span
                                        class="side-menu__label">Products</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Products</a></li>

                                    <li><a href="{{route('products.index')}}" class="slide-item">Show All</a></li>

                                    <li><a href="{{route('products.create')}}" class="slide-item">Add New</a></li>

                                    <li><a href="#" class="slide-item">Trash</a></li>

                                </ul>
                            </li>
                            
                            <li class="sub-category">
                                <h3>Slider</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-sliders"></i>
                                        <span
                                        class="side-menu__label">Slider</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Slider</a></li>
                                    <li><a href="{{route('slider.index')}}" class="slide-item">Show All</a></li>
                                    <li><a href="{{route('slider.create')}}" class="slide-item">Add New</a></li>
                                    <li><a href="#" class="slide-item">Trashed</a></li>

                                </ul>
                            </li>
                            <li class="sub-category">
                                <h3>Blogs</h3>
                            </li>
                            <li class="slide {{request()->routeIs('blogs.*') ? 'is-expanded' : '' }}">
                                <a class="side-menu__item {{request()->routeIs('blogs.*') ? 'active' : '' }}" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fa fa-newspaper-o"></i>
                                        <span
                                        class="side-menu__label">Blogs</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="#">Blogs</a></li>
                                    <li><a href="{{route('blogs.index') }}" class="slide-item {{request()->routeIs('blogs.index') ? 'active' : '' }}">Show All</a></li>
                                    <li><a href="{{route('blogs.create')}} {{request()->routeIs('blogs.create') ? 'active' : '' }}" class="slide-item">Add New</a></li>
                                    <li><a href="#" class="slide-item">Trashed</a></li>

                                </ul>
                            </li>
                            <li class="sub-category">
                                <h3>Employee</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-users"></i><span
                                        class="side-menu__label">Employee</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Employee</a></li>
                                    <li><a href="{{route('employees.index')}}" class="slide-item">Show All</a></li>
                                    <li><a href="{{route('employees.create')}}" class="slide-item">Add New</a></li>

                                </ul>
                            </li>
                            <li class="sub-category">
                                <h3>Users</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-users"></i><span
                                        class="side-menu__label">Users</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Users</a></li>
                                    <li><a href="{{route('users.index')}}" class="slide-item">Show All</a></li>
                                    <li><a href="{{route('users.create')}}" class="slide-item">Add New</a></li>

                                </ul>
                            </li>

                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                                width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                            </svg></div>
                    </div>
                </div>
                <!--/APP-SIDEBAR-->
            </div>