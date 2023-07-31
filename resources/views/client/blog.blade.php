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
                                <h3 class="title">Blog</h3>
                            </div>
                            <nav class="edu-breadcrumb-nav">
                                <ol class="edu-breadcrumb d-flex justify-content-start liststyle">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="separator"><i class="ri-arrow-drop-right-line"></i></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
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

        <div class="edu-elements-area edu-section-gap bg-color-white">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-12">
                        <div class="row g-5">

                            <!-- Start Blog Grid  -->
                            <div class="col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                data-sal-duration="800">
                                <div class="edu-blog blog-type-2 radius-small">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="/blog-details">
                                                <img src="assets/images/blog/post-01/post-01.jpg" alt="Blog Images">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <div class="status-group">
                                                <a href="#" class="eduvibe-status status-05"><i
                                                        class="icon-price-tag-3-line"></i> Education</a>
                                            </div>
                                            <h5 class="title"><a href="/blog-details">Introduction to Javascript
                                                    for the Beginners</a></h5>
                                            <div class="blog-card-bottom">
                                                <ul class="blog-meta">
                                                    <li><i class="icon-calendar-2-line"></i>06 Nov, 2022</li>
                                                </ul>
                                                <div class="read-more-btn">
                                                    <a class="btn-transparent" href="/blog-details">Read More<i
                                                            class="icon-arrow-right-line-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Blog Grid  -->
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mt--60">
                                <nav>
                                    <ul class="edu-pagination">
                                        <li><a href="#"><i class="ri-arrow-drop-left-line"></i></a></li>
                                        <li><a href="#">1</a></li>
                                        <li class="active"><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">...</a></li>
                                        <li><a href="#">8</a></li>
                                        <li><a href="#"><i class="ri-arrow-drop-right-line"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
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
