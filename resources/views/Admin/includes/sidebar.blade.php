<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">

        <div class="navbar-nav theme-brand flex-row  text-center">
            <div class="nav-logo">
                <div class="nav-item theme-logo">
                    <a href="">
                        <img src="{{ asset('assetsAdmin/src/assets/img/logo.svg') }}" class="navbar-logo" alt="logo">
                    </a>
                </div>
                <div class="nav-item theme-text">
                    <a href="" class="nav-link"> CORK </a>
                </div>
            </div>
            <div class="nav-item sidebar-toggle">
                <div class="btn-toggle sidebarCollapse">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-chevrons-left">
                        <polyline points="11 17 6 12 11 7"></polyline>
                        <polyline points="18 17 13 12 18 7"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu active">
                <a href="#dashboard" data-bs-toggle="dropdown" aria-expanded="true" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span>Dashboard</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="dropdown-menu submenu list-unstyled" id="dashboard" data-bs-parent="#accordionExample">
                    <li class="active">
                        <a href="{{ route('endUser.index') }}"> User Interface </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.index') }}"> Admin Home </a>
                    </li>
                </ul>
            </li>

            <li class="menu menu-heading">
                <div class="heading">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-minus">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    <span>APPLICATIONS</span>
                </div>
            </li>

            <li class="menu">
                <a href="#apps" data-bs-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-folder">
                            <path d="M21 8h-8l-2-2H3a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1z"></path>
                        </svg>
                        <span>Category</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="dropdown-menu submenu list-unstyled" id="apps" data-bs-parent="#accordionExample">
                    <li>
                        <a href="{{ route('admin.category.index') }}"> Categories </a>
                    </li>
                    <li>
                        <a href="{{route('admin.category.create')}}"> Add New Category </a>
                    </li>



                </ul>
            </li>

            <li class="menu menu-heading">
                <div class="heading">

                    <span>USER INTERFACE</span>
                </div>
            </li>

            <li class="menu">
                <a href="#components" data-bs-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-package">
                            <path d="M23 9h-6.3a2 2 0 0 0-1.4.6l-1.4 1.4a2 2 0 0 1-2.8 0L8.7 9.6a2 2 0 0 0-2.8 0L4.7 11a2 2 0 0 1-2.8 0L1 9a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h22a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2zM9 21h6"></path>
                            <path d="M20.4 10.6L23 9"></path>
                            <path d="M16 3.5L21 9l-5 5.5"></path>
                            <path d="M21 9l-5 5.5"></path>
                            <path d="M5 18.5L10 14l5 4.5"></path>
                        </svg>
                        <span>Products</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="dropdown-menu submenu list-unstyled" id="components" data-bs-parent="#accordionExample">
                    <li>
                        <a href="{{ route('admin.product.index') }}"> Products </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.product.create') }}"> Create New Product </a>
                    </li>
                </ul>
            </li>
             <li class="menu">
                <a href="#components" data-bs-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-shopping-bag">
                            <path
                                d="M9 2l-4 5v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7l-4-5H9zm7 7H8"></path>
                            <path d="M3 6h18"></path>
                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                        </svg>
                        @php
                        $orders=App\Models\Order::get();
                        $orderCount = $orders->count();
                        @endphp
                        <span style="margin-left: 5px;">Orders</span>

                        <span style="display: inline-block; width: 20px; height: 20px; text-align: center; line-height: 20px; border-radius: 50%; background-color: red; color: #fff;">
                            {{ $orderCount > 0 ? $orderCount : '0' }}
                        </span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="dropdown-menu submenu list-unstyled" id="components" data-bs-parent="#accordionExample">
                    <li>

                        <a href="{{ route('order.index') }}">Orders</a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="#elements" data-bs-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-megaphone">
                            <path
                                d="M5 9C5 6.79086 6.79086 5 9 5H15C17.2091 5 19 6.79086 19 9V15C19 17.2091 17.2091 19 15 19H9C6.79086 19 5 17.2091 5 15V9Z"></path>
                            <path
                                d="M9.94997 15L9.24268 15.7073C8.92271 16.0273 8.92271 16.5343 9.24268 16.8543C9.42266 17.0343 9.65687 17.1243 9.89096 17.1243C10.125 17.1243 10.3591 17.0343 10.5391 16.8543L11.2427 16.1508C11.5627 15.8308 11.5627 15.3238 11.2427 15.0038L10.5364 14.2973C10.5364 14.2973 10.5364 14.2973 10.5364 14.2973L10.5354 14.2963L9.94997 15Z"></path>
                            <path d="M15 9H17V15H15V9Z"></path>
                        </svg>
                        <span>Ads</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="dropdown-menu submenu list-unstyled" id="elements" data-bs-parent="#accordionExample">
                    <li>
                        <a href="{{ route('admin.ad.index') }}">Ads</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.ad.create') }}"> Create New Ad </a>
                    </li>

                </ul>
            </li>

            <li class="menu menu-heading">
                <div class="heading">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-minus">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    <span>TABLES AND FORMS</span>
                </div>
            </li>

            <li class="menu">
                <a href="#forms" data-bs-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-clipboard">
                            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                            <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                        </svg>
                        <span>Forms</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="dropdown-menu submenu list-unstyled" id="forms" data-bs-parent="#accordionExample">
                    <li>
                        <a href="./form-bootstrap-basic.html"> Basic </a>
                    </li>
                    <li>
                        <a href="./form-input-group-basic.html"> Input Group </a>
                    </li>
                    <li>
                        <a href="./form-layouts.html"> Layouts </a>
                    </li>
                    <li>
                        <a href="./form-validation.html"> Validation </a>
                    </li>
                    <li>
                        <a href="./form-input-mask.html"> Input Mask </a>
                    </li>
                    <li>
                        <a href="./form-tom-select.html"> Tom Select </a>
                    </li>
                    <li>
                        <a href="./form-tagify.html"> Tagify </a>
                    </li>
                    <li>
                        <a href="./form-bootstrap-touchspin.html"> TouchSpin </a>
                    </li>
                    <li>
                        <a href="./form-maxlength.html"> Maxlength </a>
                    </li>
                    <li>
                        <a href="./form-checkbox.html"> Checkbox </a>
                    </li>
                    <li>
                        <a href="./form-radio.html"> Radio </a>
                    </li>
                    <li>
                        <a href="./form-switches.html"> Switches </a>
                    </li>
                    <li>
                        <a href="./form-wizard.html"> Wizards </a>
                    </li>
                    <li>
                        <a href="./form-fileupload.html"> File Upload </a>
                    </li>
                    <li>
                        <a href="./form-quill.html"> Quill Editor </a>
                    </li>
                    <li>
                        <a href="./form-markdown.html"> Markdown Editor </a>
                    </li>
                    <li>
                        <a href="./form-date-time-picker.html"> Date Time Picker </a>
                    </li>
                    <li>
                        <a href="./form-slider.html"> Slider </a>
                    </li>
                    <li>
                        <a href="./form-clipboard.html"> Clipboard </a>
                    </li>
                    <li>
                        <a href="./form-autoComplete.html"> Auto Complete </a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="#pages" data-bs-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-file">
                            <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                            <polyline points="13 2 13 9 20 9"></polyline>
                        </svg>
                        <span>Pages</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="dropdown-menu submenu list-unstyled" id="pages" data-bs-parent="#accordionExample">
                    <li>
                        <a href="./pages-knowledge-base.html"> Knowledge Base </a>
                    </li>
                    <li>
                        <a href="./pages-faq.html"> FAQ </a>
                    </li>
                    <li>
                        <a href="#"> Contact Form </a>
                    </li>
                    <li>
                        <a href="./user-profile.html"> Users </a>
                    </li>
                    <li>
                        <a href="./user-account-settings.html"> Account Settings </a>
                    </li>
                    <li>
                        <a href="./pages-error404.html" target="_blank"> Error </a>
                    </li>
                    <li>
                        <a href="./pages-maintenence.html" target="_blank"> Maintanence </a>
                    </li>
                    <li class="sub-submenu dropend">
                        <a href="#login" data-bs-toggle="dropdown" aria-expanded="false"
                            class="dropdown-toggle collapsed"> Sign In
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                        <ul class="dropdown-menu list-unstyled sub-submenu" id="login" data-bs-parent="#pages">
                            <li>
                                <a target="_blank" href="./auth-boxed-signin.html"> Boxed </a>
                            </li>
                            <li>
                                <a target="_blank" href="./auth-cover-signin.html"> Cover </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-submenu dropend">
                        <a href="#signup" data-bs-toggle="dropdown" aria-expanded="false"
                            class="dropdown-toggle collapsed"> Sign Up
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                        <ul class="dropdown-menu list-unstyled sub-submenu" id="signup" data-bs-parent="#pages">
                            <li>
                                <a target="_blank" href="./auth-boxed-signup.html"> Boxed </a>
                            </li>
                            <li>
                                <a target="_blank" href="./auth-cover-signup.html"> Cover </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-submenu dropend">
                        <a href="#unlock" data-bs-toggle="dropdown" aria-expanded="false"
                            class="dropdown-toggle collapsed"> Unlock
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                        <ul class="dropdown-menu list-unstyled sub-submenu" id="unlock" data-bs-parent="#pages">
                            <li>
                                <a target="_blank" href="./auth-boxed-lockscreen.html"> Boxed </a>
                            </li>
                            <li>
                                <a target="_blank" href="./auth-cover-lockscreen.html"> Cover </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-submenu dropend">
                        <a href="#reset" data-bs-toggle="dropdown" aria-expanded="false"
                            class="dropdown-toggle collapsed"> Reset
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                        <ul class="dropdown-menu list-unstyled sub-submenu" id="reset" data-bs-parent="#pages">
                            <li>
                                <a target="_blank" href="./auth-boxed-password-reset.html"> Boxed </a>
                            </li>
                            <li>
                                <a target="_blank" href="./auth-cover-password-reset.html"> Cover </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-submenu dropend">
                        <a href="#twoStep" data-bs-toggle="dropdown" aria-expanded="false"
                            class="dropdown-toggle collapsed"> Two Step
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                        <ul class="dropdown-menu list-unstyled sub-submenu" id="twoStep" data-bs-parent="#pages">
                            <li>
                                <a target="_blank" href="./auth-boxed-2-step-verification.html"> Boxed </a>
                            </li>
                            <li>
                                <a target="_blank" href="./auth-cover-2-step-verification.html"> Cover </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="#more" data-bs-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-settings">
                            <circle cx="12" cy="12" r="3"></circle>
                            <path
                                d="M19.4 14c.3-.6.5-1.3.5-2s-.2-1.4-.5-2l2.3-1.8c.4-.3.6-.8.5-1.3l-2-3.5c-.2-.4-.7-.6-1.2-.4l-2.5 1c-.6-.4-1.3-.7-2.1-.7h-3c-.8 0-1.5.3-2.1.7l-2.5-1c-.4-.2-.9 0-1.2.4l-2 3.5c-.2.4-.1.9.3 1.3l2.3 1.8c-.3.6-.5 1.3-.5 2s.2 1.4.5 2l-2.3 1.8c-.4.3-.6.8-.5 1.3l2 3.5c.2.4.7.6 1.2.4l2.5-1c.6.4 1.3.7 2.1.7h3c.8 0 1.5-.3 2.1-.7l2.5 1c.4.2.9 0 1.2-.4l2-3.5c.2-.4.1-.9-.3-1.3l-2.3-1.8zM12 15.5A3.5 3.5 0 1 1 12 8a3.5 3.5 0 0 1 0 7z">
                            </path>
                        </svg>
                        <span>Settings</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="dropdown-menu submenu list-unstyled" id="more" data-bs-parent="#accordionExample">
                    <li>
                        <a href="{{ route('admin.setting.index') }}"> Setting </a>
                    </li>
                    
                </ul>
            </li>

        </ul>

    </nav>

</div>
