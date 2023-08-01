<header class="edu-header disable-transparent  header-sticky">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-xl-2 col-md-6 col-6">
                <div class="logo">
                    <a href="/">
                        <img class="logo-light" src="assets/images/logo/logo.png" alt="Site Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-8 d-none d-xl-block">
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
            <div class="col-lg-6 col-xl-2 col-md-6 col-6">
                <div class="header-right d-flex justify-content-end">
                    <div class="header-quote">
                        <div class="quote-icon quote-search">
                            <button class="search-trigger"><i class="ri-search-line"></i></button>
                        </div>
                        @guest
                            <div class="quote-icon quote-user">
                                <a href="/login"><i class="ri-user-line"></i></a>
                            </div>
                        @endguest

                        @auth <!-- Check if the user is authenticated -->
                            <form method="post" action="{{ route('logout') }}">
                                @csrf
                                <div class="quote-icon quote-user">
                                    <button type="submit">{{ Auth::user()->name }} <i class="ri-user-line"></i>(Logout)</button>
                                </div>
                            </form>
                        @endauth
                        <div class="hamberger quote-icon d-block d-xl-none">
                            <button class="hamberger-button"><i class="ri-menu-line"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
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
