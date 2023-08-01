        <header class="edu-header header-sticky header-transparent header-style-2 header-default ">
            <div class="row align-items-center">
                <div class="col-lg-4 col-xl-3 col-md-6 col-6">
                    <div class="logo">
                        <a href="/">
                            <img class="logo-light" src="assets/images/logo/logo.png" alt="Site Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-xl-block">
                    <nav class="mainmenu-nav d-none d-lg-block">
                        <ul class="mainmenu">
                            <li><a href="/">Home</a>
                            </li>
                            <li><a href="/allCourses">Courses</a>
                            </li>
                            <li><a href="/Profile">Profile</a>
                            </li>
                            <li><a href="/Contact">Contact Us</a>
                            </li>
                            <li><a href="/Blog">Blog</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-8 col-xl-3 col-md-6 col-6">
                    <div class="header-right d-flex justify-content-end">
                        <div class="header-menu-bar">
                            <div class="quote-icon quote-search">
                                <button class="white-box-icon search-trigger header-search"><i
                                        class="ri-search-line"></i></button>
                            </div>
                            <!-- navigation.blade.php -->

                            <div class="quote-icon quote-user d-none d-md-block ml--15 ml_sm--5">
                                @guest <!-- Check if the user is not authenticated -->
                                    <a class="edu-btn btn-medium left-icon header-button" href="/Login">
                                        <i class="ri-user-line"></i>Login / Register
                                    </a>
                                @endguest

                                @auth <!-- Check if the user is authenticated -->
                                    <form method="post" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="edu-btn btn-medium left-icon header-button">
                                            <i class="ri-user-line"></i>{{ Auth::user()->name }} (Logout)
                                        </button>
                                    </form>
                                @endauth
                            </div>

                            <div class="quote-icon quote-user d-block d-md-none ml--15 ml_sm--5">
                                <a class="white-box-icon" href="/Login"><i class="ri-user-line"></i></a>
                            </div>
                        </div>

                        <div class="mobile-menu-bar ml--15 ml_sm--5 d-block d-xl-none">
                            <div class="hamberger">
                                <button class="white-box-icon hamberger-button header-menu">
                                    <i class="ri-menu-line"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="popup-mobile-menu">
            <div class="inner">
                <div class="header-top">
                    <div class="logo">
                        <a href="index.html">
                            <img src="assets/images/logo/logo.png" alt="Site Logo">
                        </a>
                    </div>
                    <div class="close-menu">
                        <button class="close-button">
                            <i class="ri-close-line"></i>
                        </button>
                    </div>
                </div>
                <ul class="mainmenu">
                    <li><a href="/">Home</a>
                    </li>
                    <li><a href="/allCourses">Courses</a>
                    </li>
                    <li><a href="/Profile">Profile</a>
                    </li>
                    <li><a href="/Contact">Contact Us</a>
                    </li>
                    <li><a href="/Blog">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Start Search Popup  -->
        <div class="edu-search-popup">
            <div class="close-button">
                <button class="close-trigger"><i class="ri-close-line"></i></button>
            </div>
            <div class="inner">
                <form class="search-form" action="#">
                    <input type="text" class="eduvibe-search-popup-field" placeholder="Search Here...">
                    <button class="submit-button"><i class="icon-search-line"></i></button>
                </form>
            </div>
        </div>
