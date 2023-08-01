@include('layouts.head')

<body>
    <div class="main-wrapper">
        {{--  --}}
        @include('layouts.navBar2')
        {{--  --}}

        <div class="edu-breadcrumb-area breadcrumb-style-1 ptb--60 ptb_md--40 ptb_sm--40 bg-image">
            <div class="container eduvibe-animated-shape">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-inner text-start">
                            <div class="page-title">
                                <h3 class="title">Login & Register</h3>
                            </div>
                            <nav class="edu-breadcrumb-nav">
                                <ol class="edu-breadcrumb d-flex justify-content-start liststyle">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="separator"><i class="ri-arrow-drop-right-line"></i></li>
                                    <li class="breadcrumb-item active" aria-current="page">Login & Register</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                        <div class="shape-image shape-image-1">
                            <img src="assets/images/shapes/shape-11-07.png" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-2">
                            <img src="assets/images/shapes/shape-01-02.png" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-3">
                            <img src="assets/images/shapes/shape-03.png" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-4">
                            <img src="assets/images/shapes/shape-13-12.png" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-5">
                            <img src="assets/images/shapes/shape-36.png" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-6">
                            <img src="assets/images/shapes/shape-05-07.png" alt="Shape Thumb" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="login-register-page-wrapper edu-section-gap bg-color-white">
            <div class="container checkout-page-style">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="login-form-box">
                            <h3 class="mb-30">Login</h3>
                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('login.submit') }}">
                                @csrf
                                <div class="input-box mb--30">
                                    <input type="email" name="email" :value="old('email')" required autofocus />
                                </div>
                                <div class="input-box mb--30">
                                    <input type="password" name="password" required autocomplete="current-password" />
                                </div>
                                <div class="comment-form-consent input-box mb--30">
                                    <input id="checkbox-1" type="checkbox" />
                                    <label for="checkbox-1">Remember Me</label>
                                </div>
                                <button class="rn-btn edu-btn w-100 mb--30" type="submit">
                                    <span>Login</span>
                                </button>
                                <div class="input-box">
                                    <a href="#" class="lost-password">Lost your password?</a>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="login-form-box">
                            <h3 class="mb-30">Register</h3>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="input-box mb--30">
                                    <input type="text" name="name" :value="old('name')" required autofocus autocomplete="name"  />
                                </div>
                                <div class="input-box mb--30">
                                    <input type="email" name="email" :value="old('email')" required />
                                </div>
                                <div class="input-box mb--30">
                                    <input type="password" name="password" required autocomplete="new-password" />
                                </div>
                                <div class="input-box mb--30">
                                    <input type="password" name="password_confirmation" required autocomplete="new-password"  />
                                </div>
                                <button class="rn-btn edu-btn w-100 mb--30" type="submit">
                                    <span>Register</span>
                                </button>
                                <div class="input-box">
                                    <input id="checkbox-2" type="checkbox" />
                                    <label for="checkbox-2">I read & agree the terms & conditions.</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footer')
    </div>

    <script src="assets/js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/sal.min.js"></script>
    <script src="assets/js/vendor/backtotop.js"></script>
    <script src="assets/js/vendor/magnifypopup.js"></script>
    <script src="assets/js/vendor/slick.js"></script>
    <script src="assets/js/vendor/countdown.js"></script>
    <script src="assets/js/vendor/jquery-appear.js"></script>
    <script src="assets/js/vendor/odometer.js"></script>
    <script src="assets/js/vendor/isotop.js"></script>
    <script src="assets/js/vendor/imageloaded.js"></script>
    <script src="assets/js/vendor/lightbox.js"></script>
    <script src="assets/js/vendor/wow.js"></script>
    <script src="assets/js/vendor/paralax.min.js"></script>
    <script src="assets/js/vendor/paralax-scroll.js"></script>
    <script src="assets/js/vendor/jquery-ui.js"></script>
    <script src="assets/js/vendor/tilt.jquery.min.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>
