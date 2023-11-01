<!doctype html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        @include('Admin/includes/head')

    </head>

    <body class="layout-boxed enable-secondaryNav">
        <div class="header-container container-xxl">
            <header class="header navbar navbar-expand-sm expand-header">

                <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-menu">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg></a>

                <ul class="navbar-item theme-brand flex-row  text-center">
                    <li class="nav-item theme-logo">
                        <a href="index.html">
                            <img src="{{ asset('assetsAdmin/src/assets/img/logo2.svg') }}" class="navbar-logo"
                                alt="logo">
                        </a>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="#" class="nav-link"> CORK </a>
                    </li>
                </ul>

                <div class="search-animated toggle-search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-search">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    <form class="form-inline search-full form-inline search" role="search">
                        <div class="search-bar">
                            <input type="text" class="form-control search-form-control  ml-lg-auto"
                                placeholder="Search...">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-x search-close">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </div>
                    </form>
                    <span class="badge badge-secondary">Ctrl + /</span>
                </div>

                <ul class="navbar-item flex-row ms-lg-auto ms-0 action-area">

                    <li class="nav-item dropdown language-dropdown">
                        <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{asset('assetsAdmin/src/assets/img/1x1/us.svg')}}" class="flag-width" alt="flag">
                        </a>
                        <div class="dropdown-menu position-absolute" aria-labelledby="language-dropdown">
                            <a class="dropdown-item d-flex" href="javascript:void(0);"><img
                                    src="{{asset('assetsAdmin/src/assets/img/1x1/us.svg')}}" class="flag-width"
                                    alt="flag"> <span class="align-self-center">&nbsp;English</span></a>
                            <a class="dropdown-item d-flex" href="javascript:void(0);"><img
                                    src="{{asset('assetsAdmin/src/assets/img/1x1/tr.svg')}}" class="flag-width"
                                    alt="flag"> <span class="align-self-center">&nbsp;Turkish</span></a>
                            <a class="dropdown-item d-flex" href="javascript:void(0);"><img
                                    src="{{asset('assetsAdmin/src/assets/img/1x1/br.svg')}}" class="flag-width"
                                    alt="flag"> <span class="align-self-center">&nbsp;Portuguese</span></a>
                            <a class="dropdown-item d-flex" href="javascript:void(0);"><img
                                    src="{{asset('assetsAdmin/src/assets/img/1x1/in.svg')}}" class="flag-width"
                                    alt="flag"> <span class="align-self-center">&nbsp;Hindi</span></a>
                            <a class="dropdown-item d-flex" href="javascript:void(0);"><img
                                    src="{{asset('assetsAdmin/src/assets/img/1x1/de.svg')}}" class="flag-width"
                                    alt="flag"> <span class="align-self-center">&nbsp;German</span></a>
                        </div>
                    </li>

                    <li class="nav-item theme-toggle-item">
                        <a href="javascript:void(0);" class="nav-link theme-toggle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-moon dark-mode">
                                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-sun light-mode">
                                <circle cx="12" cy="12" r="5"></circle>
                                <line x1="12" y1="1" x2="12" y2="3"></line>
                                <line x1="12" y1="21" x2="12" y2="23"></line>
                                <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                <line x1="1" y1="12" x2="3" y2="12"></line>
                                <line x1="21" y1="12" x2="23" y2="12"></line>
                                <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                            </svg>
                        </a>
                    </li>

                    <li class="nav-item dropdown notification-dropdown">
                        <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-bell">
                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg><span class="badge badge-success"></span>
                        </a>

                        <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                            <div class="drodpown-title message">
                                <h6 class="d-flex justify-content-between">
                                    <span class="align-self-center">Messages</span>
                                    <span class="badge badge-primary">
                                        @auth
                                            @if (auth()->user()->status == 1)
                                                0
                                            @else
                                                {{ auth()->user()->unreadNotifications->count() }}
                                            @endif
                                        @else
                                            0
                                        @endauth
                                        Unread
                                    </span>
                                </h6>
                            </div>
                            <div class="notification-scroll">
                                @auth
                                    @if (auth()->user()->status == 1)
                                        <div class="dropdown-item">
                                            <div class="media server-log">
                                                <div class="media-body">
                                                    <div class="data-info">
                                                        <a href="{{ route('order.index') }}"><h6 class="">New order created by a user</h6></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        @if (auth()->user()->unreadNotifications->count() > 0)
                                            @foreach (auth()->user()->unreadNotifications as $notification)
                                                <div class="dropdown-item">
                                                    <div class="media server-log">
                                                        <div class="media-body">
                                                            <div class="data-info">
                                                                <h6>{{ $notification->data['message'] }}</h6>
                                                            </div>
                                                            <div class="icon-status">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-x">
                                                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="dropdown-item">
                                                <div class="media server-log">
                                                    <div class="media-body">
                                                        <div class="data-info">
                                                            <h6 class="">No unread notifications</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endif
                                @else
                                    <div class="dropdown-item">
                                        <div class="media server-log">
                                            <div class "media-body">
                                                <div class="data-info">
                                                    <h6 class="">No notifications for guest</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endauth
                            </div>
                        </div>



                    </li>

                    <li class="nav-item dropdown user-profile-dropdown order-lg-0 order-1">
                        <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar-container">
                                <div class="avatar avatar-sm avatar-indicators avatar-online">
                                    <img alt="avatar" src="{{asset('assetsAdmin/src/assets/img/profile-30.png')}}"
                                        class="rounded-circle">
                                </div>
                            </div>
                        </a>
                    
                        <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                            <div class="user-profile-section">
                                <div class="media mx-auto">
                                    <div class="emoji me-2">
                                        &#x1F44B;
                                    </div>
                                    <div class="media-body">
                                        <h5>admin</h5>
                                        <p>Project Leader</p>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <a href="user-profile.html">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg> <span>Profile</span>
                                </a>
                            </div>
                            <form method="post" action="{{ route('admin.logout') }}">
                                @csrf
                                @method('delete')
                                <button class="dropdown-item">
                                    <span>Log Out</span>
                                </button>
                            </form>
                        </div>
                    </li>
                    
                </ul>
            </header>
        </div>
        <!--  END NAVBAR  -->

        <!--  BEGIN MAIN CONTAINER  -->
        <div class="main-container" id="container">

            <div class="overlay"></div>
            <div class="search-overlay"></div>

            <!--  BEGIN SIDEBAR  -->
            @include('Admin.includes.sidebar')
            <!--  END SIDEBAR  -->

            <!--  BEGIN CONTENT AREA  -->
            @yield('content')
            <!--  END CONTENT AREA  -->

        </div>
        <!-- END MAIN CONTAINER -->

        <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
        @include('Admin.includes.footer')
        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    </body>

</html>
</body>

</html>
