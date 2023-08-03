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
                                <h3 class="title">Course Details</h3>
                            </div>
                            <nav class="edu-breadcrumb-nav">
                                <ol class="edu-breadcrumb d-flex justify-content-start liststyle">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="separator"><i class="ri-arrow-drop-right-line"></i></li>
                                    <li class="breadcrumb-item active" aria-current="page">Course Details</li>
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
        <div class="edu-course-details-area edu-section-gap bg-color-white">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-12">
                        <div class="main-image thumbnail">
                            <img class="radius-small" src="{{ asset('storage/'. $course->path) }}"
                            style="width: 1300px; height: 700px; object-fit: cover;"
                                alt="Banner Images">
                        </div>
                    </div>
                </div>

                <div class="row g-5">
                    <div class="col-xl-8 col-lg-7">
                        <div class="course-details-content">
                            <div class="content-top">
                                <div class="author-meta">
                                    <div class="author-thumb">
                                        <a href="instructor-profile.html">
                                            <img src="assets/images/instructor/instructor-small/instructor-2.jpg"
                                                alt="Author Images">
                                            <span class="author-title">By Leone Xaviona</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="edu-rating rating-default">
                                    <div class="rating">
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                    </div>
                                    <span class="rating-count">(25 Review)</span>
                                </div>
                            </div>

                            <h3 class="title">Grow Personal Financial Security Thinking & Principles</h3>

                            <ul class="edu-course-tab nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="overview-tab" data-bs-toggle="tab"
                                        data-bs-target="#overview" type="button" role="tab"
                                        aria-controls="overview" aria-selected="true">Overview</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="curriculum-tab" data-bs-toggle="tab"
                                        data-bs-target="#curriculum" type="button" role="tab"
                                        aria-controls="curriculum" aria-selected="false">Curriculum</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="instructor-tab" data-bs-toggle="tab"
                                        data-bs-target="#instructor" type="button" role="tab"
                                        aria-controls="instructor" aria-selected="false">Instructor</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="review-tab" data-bs-toggle="tab"
                                        data-bs-target="#review" type="button" role="tab"
                                        aria-controls="review" aria-selected="false">Reviews</button>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                    aria-labelledby="overview-tab">
                                    <div class="course-tab-content">
                                        <h5>Course Description</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                                            ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                                            facilisis.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                                            ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                                            facilisis.</p>
                                        <h5>What You’ll Learn From This Course</h5>
                                        <ul>
                                            <li>Neque sodales ut etiam sit amet nisl purus non tellus orci ac auctor
                                            </li>
                                            <li>Tristique nulla aliquet enim tortor at auctor urna. Sit amet aliquam id
                                                diam maer</li>
                                            <li>Nam libero justo laoreet sit amet. Lacus sed viverra tellus in hac</li>
                                            <li>Tempus imperdiet nulla malesuada pellentesque elit eget gravida cum
                                                sociis</li>
                                        </ul>
                                        <h5>Certification</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                                            ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                                            facilisis.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="curriculum" role="tabpanel"
                                    aria-labelledby="curriculum-tab">
                                    <div class="course-tab-content">
                                        <div class="edu-accordion-02" id="accordionExample1">
                                            <div class="edu-accordion-item">
                                                <div class="edu-accordion-header" id="headingOne">
                                                    <button class="edu-accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        The First Steps
                                                    </button>
                                                </div>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample1">
                                                    <div class="edu-accordion-body">
                                                        <ul>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i>
                                                                    Introduction</div>
                                                                <div class="icon"><i
                                                                        class="icon-lock-password-line"></i></div>
                                                            </li>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i>
                                                                    Course Overview</div>
                                                                <div class="icon"><i
                                                                        class="icon-lock-password-line"></i></div>
                                                            </li>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i>
                                                                    Local Development Environment Tools</div>
                                                                <div class="icon"><i
                                                                        class="icon-lock-password-line"></i></div>
                                                            </li>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i>
                                                                    Course Excercise</div>
                                                                <div class="icon"><i
                                                                        class="icon-lock-password-line"></i></div>
                                                            </li>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i>
                                                                    Embedding PHP in HTML</div>
                                                                <div class="icon"><i
                                                                        class="icon-lock-password-line"></i></div>
                                                            </li>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i>
                                                                    Using Dynamic Data</div>
                                                                <div class="icon"><i
                                                                        class="icon-lock-password-line"></i></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="edu-accordion-item">
                                                <div class="edu-accordion-header" id="headingTwo">
                                                    <button class="edu-accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        Data Types and More
                                                    </button>
                                                </div>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample1">
                                                    <div class="edu-accordion-body">
                                                        <ul>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i>
                                                                    Introduction</div>
                                                                <div class="icon"><i
                                                                        class="icon-lock-password-line"></i></div>
                                                            </li>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i>
                                                                    Course Overview</div>
                                                                <div class="icon"><i
                                                                        class="icon-lock-password-line"></i></div>
                                                            </li>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i>
                                                                    Local Development Environment Tools</div>
                                                                <div class="icon"><i
                                                                        class="icon-lock-password-line"></i></div>
                                                            </li>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i>
                                                                    Course Excercise</div>
                                                                <div class="icon"><i
                                                                        class="icon-lock-password-line"></i></div>
                                                            </li>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i>
                                                                    Embedding PHP in HTML</div>
                                                                <div class="icon"><i
                                                                        class="icon-lock-password-line"></i></div>
                                                            </li>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i>
                                                                    Using Dynamic Data</div>
                                                                <div class="icon"><i
                                                                        class="icon-lock-password-line"></i></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="edu-accordion-item">
                                                <div class="edu-accordion-header" id="headingThree">
                                                    <button class="edu-accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        Control Structure
                                                    </button>
                                                </div>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    aria-labelledby="headingThree"
                                                    data-bs-parent="#accordionExample1">
                                                    <div class="edu-accordion-body">
                                                        <ul>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i>
                                                                    Introduction</div>
                                                                <div class="icon"><i
                                                                        class="icon-lock-password-line"></i></div>
                                                            </li>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i>
                                                                    Course Overview</div>
                                                                <div class="icon"><i
                                                                        class="icon-lock-password-line"></i></div>
                                                            </li>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i>
                                                                    Local Development Environment Tools</div>
                                                                <div class="icon"><i
                                                                        class="icon-lock-password-line"></i></div>
                                                            </li>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i>
                                                                    Course Excercise</div>
                                                                <div class="icon"><i
                                                                        class="icon-lock-password-line"></i></div>
                                                            </li>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i>
                                                                    Embedding PHP in HTML</div>
                                                                <div class="icon"><i
                                                                        class="icon-lock-password-line"></i></div>
                                                            </li>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i>
                                                                    Using Dynamic Data</div>
                                                                <div class="icon"><i
                                                                        class="icon-lock-password-line"></i></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="instructor" role="tabpanel"
                                    aria-labelledby="instructor-tab">
                                    <div class="course-tab-content">
                                        <div class="course-author-wrapper">
                                            <div class="thumbnail">
                                                <img src="assets/images/instructor/course-details/instructor-2.jpg"
                                                    alt="Author Images">
                                            </div>
                                            <div class="author-content">
                                                <h6 class="title">
                                                    <a href="instructor-profile.html">Leone Xaviona</a>
                                                </h6>
                                                <span class="subtitle">Digital Marketer</span>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text
                                                    ever since the 1500s, when an unknown printer took a galley...</p>
                                                <ul class="social-share border-style">
                                                    <li><a href="#"><i class="icon-Fb"></i></a></li>
                                                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                                    <li><a href="#"><i class="icon-Pinterest"></i></a></li>
                                                    <li><a href="#"><i class="icon-Twitter"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="review" role="tabpanel"
                                    aria-labelledby="review-tab">
                                    <div class="course-tab-content">
                                        <div class="row row--30">
                                            <div class="col-lg-4">
                                                <div class="rating-box">
                                                    <div class="rating-number">5.0</div>
                                                    <div class="rating">
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                    </div>
                                                    <span>(25 Review)</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="review-wrapper">

                                                    <div class="single-progress-bar">
                                                        <div class="rating-text">
                                                            5 <i class="icon-Star"></i>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 100%" aria-valuenow="100"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="rating-value">1</span>
                                                    </div>

                                                    <div class="single-progress-bar">
                                                        <div class="rating-text">
                                                            4 <i class="icon-Star"></i>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 0%" aria-valuenow="0" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="rating-value">0</span>
                                                    </div>

                                                    <div class="single-progress-bar">
                                                        <div class="rating-text">
                                                            3 <i class="icon-Star"></i>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 0%" aria-valuenow="0" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="rating-value">0</span>
                                                    </div>

                                                    <div class="single-progress-bar">
                                                        <div class="rating-text">
                                                            2 <i class="icon-Star"></i>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 0%" aria-valuenow="0" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="rating-value">0</span>
                                                    </div>

                                                    <div class="single-progress-bar">
                                                        <div class="rating-text">
                                                            1 <i class="icon-Star"></i>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 0%" aria-valuenow="0" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="rating-value">0</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment-wrapper pt--40">
                                            <div class="section-title">
                                                <h5 class="mb--25">Reviews</h5>
                                            </div>
                                            <div class="edu-comment">
                                                <div class="thumbnail">
                                                    <img src="assets/images/course/student-review/student-1.png"
                                                        alt="Comment Images">
                                                </div>
                                                <div class="comment-content">
                                                    <div class="comment-top">
                                                        <h6 class="title">Elen Saspita</h6>
                                                        <div class="rating">
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                        </div>
                                                    </div>
                                                    <span class="subtitle">“ Outstanding Course ”</span>
                                                    <p>As Thomas pointed out, Chegg’s survey appears more like a
                                                        scorecard that details obstacles and challenges that the current
                                                        university undergraduate student population is going through in
                                                        their universities and countries.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-5">
                        <div class="eduvibe-sidebar course-details-sidebar">
                            <div class="inner">
                                <div class="eduvibe-widget">
                                    <div class="video-area">
                                        <div class="thumbnail video-popup-wrapper">
                                            <img class="radius-small w-100"
                                                src="{{ asset('storage/'. $course->path) }}" 
                                                style="width: 370px; height: 270px; object-fit: cover;" alt="Course Images">
                                                
                                            <a href="{{ $firstEpisodeVideoUrl }}"
                                                class="video-play-btn position-to-top video-popup-activation">
                                                <span class="play-icon course-details-video-popup"></span>
                                            </a>
                                            
                                        </div>
                                    </div>
                                    <div class="eduvibe-widget-details mt--35">
                                        <div class="widget-content">
                                            <ul>
                                                <li><span><i class="icon-time-line"></i> Start Date</span><span>6 Hrs
                                                        40 Min</span></li>

                                                <li><span><i class="icon-user-2"></i> Enrolled</span><span>89</span>
                                                </li>

                                                <li><span><i class="icon-draft-line"></i>
                                                        Lectures</span><span>23</span></li>

                                                <li><span><i class="icon-bar-chart-2-line"></i> Skill
                                                        Level</span><span>Intermediate</span></li>

                                                <li><span><i class="icon-translate"></i>
                                                        Language</span><span>English</span></li>

                                                <li><span><i class="icon-artboard-line"></i>
                                                        Quizzes</span><span>25</span></li>

                                                <li><span><i class="icon-award-line"></i>
                                                        Certificate</span><span>Yes</span></li>

                                                <li><span><img class="eduvibe-course-sidebar-img-icon"
                                                            src="assets/images/icons/percent.svg" alt="icon Thumb">
                                                        Pass Percentage</span><span>90%</span></li>

                                                <li><span><i class="icon-calendar-2-line"></i> Deadline</span><span>25
                                                        Dec, 2022</span></li>

                                                <li><span><i class="icon-user-2-line_tie"></i>
                                                        Instructor</span><span>Daniel Stiva</span></li>
                                            </ul>

                                            <div class="read-more-btn mt--45">
                                                <a class="text-center edu-btn btn-bg-alt w-100" href="#">Price:
                                                    $79.00</a>
                                            </div>

                                            <div class="read-more-btn mt--15">
                                                <a class="text-center edu-btn w-100" href="#">Buy Now</a>
                                            </div>

                                            <div class="text-center read-more-btn mt--30">
                                                <div class="eduvibe-post-share">
                                                    <span>Share: </span>
                                                    <a class="linkedin" href="#"><i
                                                            class="icon-linkedin"></i></a>
                                                    <a class="facebook" href="#"><i class="icon-Fb"></i></a>
                                                    <a class="twitter" href="#"><i
                                                            class="icon-Twitter"></i></a>
                                                    <a class="youtube" href="#"><i
                                                            class="icon-youtube"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="row">
                    <div class="col-lg-12">
                        <div class="edu-course-wrapper pt--65">
                            <div class="section-title text-start mb--20">
                                <span class="pre-title">Related Courses</span>
                                <h3 class="title">Courses You May Like</h3>
                            </div>

                            <div
                                class="mt--40 edu-slick-button slick-activation-wrapper eduvibe-course-one-carousel eduvibe-course-details-related-course-carousel">
                                <div class="single-slick-card">
                                    <div class="edu-card card-type-3 radius-small">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="course-details.html">
                                                    <img class="w-100"
                                                        src="assets/images/course/course-01/course-01.jpg"
                                                        alt="Course Thumb">
                                                </a>
                                                <div class="wishlist-top-right">
                                                    <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                                </div>
                                                <div class="top-position status-group left-bottom">
                                                    <span class="eduvibe-status status-03">Language Learning</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="card-top">
                                                    <div class="author-meta">
                                                        <div class="author-thumb">
                                                            <a href="instructor-profile.html">
                                                                <img src="assets/images/instructor/instructor-small/instructor-2.jpg"
                                                                    alt="Author Images">
                                                                <span class="author-title">Nancy Phipps</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="edu-meta meta-02">
                                                        <li><i class="icon-file-list-3-line"></i>29 Lessons</li>
                                                    </ul>
                                                </div>
                                                <h6 class="title"><a href="#">Master Native English Class This
                                                        Speaking Skills</a>
                                                </h6>
                                                <div class="card-bottom">
                                                    <div class="price-list price-style-02">
                                                        <div class="price current-price">$29.99</div>
                                                        <div class="price old-price">$39.99</div>
                                                    </div>
                                                    <div class="edu-rating rating-default">
                                                        <div class="rating">
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                        </div>
                                                        <span class="rating-count">(18)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-hover-action">
                                            <div class="hover-content">
                                                <div class="content-top">
                                                    <div class="top-status-bar">
                                                        <span class="eduvibe-status status-03">Language Learning</span>
                                                    </div>
                                                    <div class="top-wishlist-bar">
                                                        <button class="wishlist-btn"><i
                                                                class="icon-Heart"></i></button>
                                                    </div>
                                                </div>

                                                <h6 class="title"><a href="course-details.html">Master Native English
                                                        Class This Speaking Skills</a></h6>

                                                <p class="description">There are many variations of passages of Lorem
                                                    Ipsaums available, but the majority have suffered alteration.
                                                    generators on the Internet tend to repeat.</p>

                                                <div class="price-list price-style-02">
                                                    <div class="price current-price">$29.99</div>
                                                    <div class="price old-price">$39.99</div>
                                                </div>

                                                <div class="hover-bottom-content">
                                                    <div class="author-meta">
                                                        <div class="author-thumb">
                                                            <a href="instructor-profile.html">
                                                                <img src="assets/images/instructor/instructor-small/instructor-2.jpg"
                                                                    alt="Author Images">
                                                                <span class="author-title">Nancy Phipps</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="edu-meta meta-02">
                                                        <li><i class="icon-file-list-3-line"></i>29 Lessons</li>
                                                    </ul>
                                                </div>
                                                <div class="read-more-btn">
                                                    <a class="edu-btn btn-medium btn-white"
                                                        href="course-details.html">Enroll Now<i
                                                            class="icon-arrow-right-line-right"></i></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slick-card">
                                    <div class="edu-card card-type-3 radius-small">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="course-details.html">
                                                    <img class="w-100"
                                                        src="assets/images/course/course-01/course-02.jpg"
                                                        alt="Course Thumb">
                                                </a>
                                                <div class="wishlist-top-right">
                                                    <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                                </div>
                                                <div class="top-position status-group left-bottom">
                                                    <span class="eduvibe-status status-03">Language Learning</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="card-top">
                                                    <div class="author-meta">
                                                        <div class="author-thumb">
                                                            <a href="instructor-profile.html">
                                                                <img src="assets/images/instructor/instructor-small/instructor-8.jpg"
                                                                    alt="Author Images">
                                                                <span class="author-title">Alice McCoy</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="edu-meta meta-02">
                                                        <li><i class="icon-file-list-3-line"></i>15 Lessons</li>
                                                    </ul>
                                                </div>
                                                <h6 class="title"><a href="#">The Basic Of Financial Analyst
                                                        Online Course</a>
                                                </h6>
                                                <div class="card-bottom">
                                                    <div class="price-list price-style-02">
                                                        <div class="price current-price">$35.99</div>
                                                        <div class="price old-price">$49.99</div>
                                                    </div>
                                                    <div class="edu-rating rating-default">
                                                        <div class="rating">
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                        </div>
                                                        <span class="rating-count">(17)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-hover-action">
                                            <div class="hover-content">
                                                <div class="content-top">
                                                    <div class="top-status-bar">
                                                        <span class="eduvibe-status status-03">Language Learning</span>
                                                    </div>
                                                    <div class="top-wishlist-bar">
                                                        <button class="wishlist-btn"><i
                                                                class="icon-Heart"></i></button>
                                                    </div>
                                                </div>

                                                <h6 class="title"><a href="course-details.html">The Basic Of
                                                        Financial Analyst Online Course</a></h6>

                                                <p class="description">There are many variations of passages of Lorem
                                                    Ipsaums available, but the majority have suffered alteration.
                                                    generators on the Internet tend to repeat.</p>

                                                <div class="price-list price-style-02">
                                                    <div class="price current-price">$35.99</div>
                                                    <div class="price old-price">$49.99</div>
                                                </div>

                                                <div class="hover-bottom-content">
                                                    <div class="author-meta">
                                                        <div class="author-thumb">
                                                            <a href="instructor-profile.html">
                                                                <img src="assets/images/instructor/instructor-small/instructor-8.jpg"
                                                                    alt="Author Images">
                                                                <span class="author-title">Alice McCoy</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="edu-meta meta-02">
                                                        <li><i class="icon-file-list-3-line"></i>15 Lessons</li>
                                                    </ul>
                                                </div>
                                                <div class="read-more-btn">
                                                    <a class="edu-btn btn-medium btn-white"
                                                        href="course-details.html">Enroll Now<i
                                                            class="icon-arrow-right-line-right"></i></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slick-card">
                                    <div class="edu-card card-type-3 radius-small">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="course-details.html">
                                                    <img class="w-100"
                                                        src="assets/images/course/course-01/course-03.jpg"
                                                        alt="Course Thumb">
                                                </a>
                                                <div class="wishlist-top-right">
                                                    <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                                </div>
                                                <div class="top-position status-group left-bottom">
                                                    <span class="eduvibe-status status-03">Language Learning</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="card-top">
                                                    <div class="author-meta">
                                                        <div class="author-thumb">
                                                            <a href="instructor-profile.html">
                                                                <img src="assets/images/instructor/instructor-small/instructor-1.jpg"
                                                                    alt="Author Images">
                                                                <span class="author-title">David Reija</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="edu-meta meta-02">
                                                        <li><i class="icon-file-list-3-line"></i>29 Lessons</li>
                                                    </ul>
                                                </div>
                                                <h6 class="title"><a href="#">Introduction to Javascript for
                                                        The Beginners</a>
                                                </h6>
                                                <div class="card-bottom">
                                                    <div class="price-list price-style-02">
                                                        <div class="price current-price">$67.99</div>
                                                        <div class="price old-price">$109.99</div>
                                                    </div>
                                                    <div class="edu-rating rating-default">
                                                        <div class="rating">
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                        </div>
                                                        <span class="rating-count">(20)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-hover-action">
                                            <div class="hover-content">
                                                <div class="content-top">
                                                    <div class="top-status-bar">
                                                        <span class="eduvibe-status status-03">Language Learning</span>
                                                    </div>
                                                    <div class="top-wishlist-bar">
                                                        <button class="wishlist-btn"><i
                                                                class="icon-Heart"></i></button>
                                                    </div>
                                                </div>

                                                <h6 class="title"><a href="course-details.html">Introduction to
                                                        Javascript for The Beginners</a></h6>

                                                <p class="description">There are many variations of passages of Lorem
                                                    Ipsaums available, but the majority have suffered alteration.
                                                    generators on the Internet tend to repeat.</p>

                                                <div class="price-list price-style-02">
                                                    <div class="price current-price">$67.99</div>
                                                    <div class="price old-price">$109.99</div>
                                                </div>

                                                <div class="hover-bottom-content">
                                                    <div class="author-meta">
                                                        <div class="author-thumb">
                                                            <a href="instructor-profile.html">
                                                                <img src="assets/images/instructor/instructor-small/instructor-1.jpg"
                                                                    alt="Author Images">
                                                                <span class="author-title">David Reija</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="edu-meta meta-02">
                                                        <li><i class="icon-file-list-3-line"></i>29 Lessons</li>
                                                    </ul>
                                                </div>
                                                <div class="read-more-btn">
                                                    <a class="edu-btn btn-medium btn-white"
                                                        href="course-details.html">Enroll Now<i
                                                            class="icon-arrow-right-line-right"></i></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slick-card">
                                    <div class="edu-card card-type-3 radius-small">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="course-details.html">
                                                    <img class="w-100"
                                                        src="assets/images/course/course-01/course-04.jpg"
                                                        alt="Course Thumb">
                                                </a>
                                                <div class="wishlist-top-right">
                                                    <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                                </div>
                                                <div class="top-position status-group left-bottom">
                                                    <span class="eduvibe-status status-03">Graphics Design</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="card-top">
                                                    <div class="author-meta">
                                                        <div class="author-thumb">
                                                            <a href="instructor-profile.html">
                                                                <img src="assets/images/instructor/instructor-small/instructor-1.jpg"
                                                                    alt="Author Images">
                                                                <span class="author-title">David Reija</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="edu-meta meta-02">
                                                        <li><i class="icon-file-list-3-line"></i>29 Lessons</li>
                                                    </ul>
                                                </div>
                                                <h6 class="title"><a href="#">Oracle SQL Developer : Essentials
                                                        Tips and Tricks</a>
                                                </h6>
                                                <div class="card-bottom">
                                                    <div class="price-list price-style-02">
                                                        <div class="price current-price">$67.99</div>
                                                        <div class="price old-price">$109.99</div>
                                                    </div>
                                                    <div class="edu-rating rating-default">
                                                        <div class="rating">
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                        </div>
                                                        <span class="rating-count">(20)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-hover-action">
                                            <div class="hover-content">
                                                <div class="content-top">
                                                    <div class="top-status-bar">
                                                        <span class="eduvibe-status status-03">Language Learning</span>
                                                    </div>
                                                    <div class="top-wishlist-bar">
                                                        <button class="wishlist-btn"><i
                                                                class="icon-Heart"></i></button>
                                                    </div>
                                                </div>

                                                <h6 class="title"><a href="course-details.html">Oracle SQL Developer
                                                        : Essentials Tips and Tricks</a></h6>

                                                <p class="description">There are many variations of passages of Lorem
                                                    Ipsaums available, but the majority have suffered alteration.
                                                    generators on the Internet tend to repeat.</p>

                                                <div class="price-list price-style-02">
                                                    <div class="price current-price">$67.99</div>
                                                    <div class="price old-price">$109.99</div>
                                                </div>

                                                <div class="hover-bottom-content">
                                                    <div class="author-meta">
                                                        <div class="author-thumb">
                                                            <a href="instructor-profile.html">
                                                                <img src="assets/images/instructor/instructor-small/instructor-1.jpg"
                                                                    alt="Author Images">
                                                                <span class="author-title">David Reija</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="edu-meta meta-02">
                                                        <li><i class="icon-file-list-3-line"></i>29 Lessons</li>
                                                    </ul>
                                                </div>
                                                <div class="read-more-btn">
                                                    <a class="edu-btn btn-medium btn-white"
                                                        href="course-details.html">Enroll Now<i
                                                            class="icon-arrow-right-line-right"></i></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slick-card">
                                    <div class="edu-card card-type-3 radius-small">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="course-details.html">
                                                    <img class="w-100"
                                                        src="assets/images/course/course-01/course-05.jpg"
                                                        alt="Course Thumb">
                                                </a>
                                                <div class="wishlist-top-right">
                                                    <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                                </div>
                                                <div class="top-position status-group left-bottom">
                                                    <span class="eduvibe-status status-03">Language Learning</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="card-top">
                                                    <div class="author-meta">
                                                        <div class="author-thumb">
                                                            <a href="instructor-profile.html">
                                                                <img src="assets/images/instructor/instructor-small/instructor-6.jpg"
                                                                    alt="Author Images">
                                                                <span class="author-title">Linda Bacote</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="edu-meta meta-02">
                                                        <li><i class="icon-file-list-3-line"></i>16 Lessons</li>
                                                    </ul>
                                                </div>
                                                <h6 class="title"><a href="#">Java Programming Masterclass for
                                                        Software Developers</a>
                                                </h6>
                                                <div class="card-bottom">
                                                    <div class="price-list price-style-02">
                                                        <div class="price current-price">$89.99</div>
                                                        <div class="price old-price">$99.99</div>
                                                    </div>
                                                    <div class="edu-rating rating-default">
                                                        <div class="rating">
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                        </div>
                                                        <span class="rating-count">(12)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-hover-action">
                                            <div class="hover-content">
                                                <div class="content-top">
                                                    <div class="top-status-bar">
                                                        <span class="eduvibe-status status-03">Language Learning</span>
                                                    </div>
                                                    <div class="top-wishlist-bar">
                                                        <button class="wishlist-btn"><i
                                                                class="icon-Heart"></i></button>
                                                    </div>
                                                </div>

                                                <h6 class="title"><a href="course-details.html">Java Programming
                                                        Masterclass for Software Developers</a></h6>

                                                <p class="description">There are many variations of passages of Lorem
                                                    Ipsaums available, but the majority have suffered alteration.
                                                    generators on the Internet tend to repeat.</p>

                                                <div class="price-list price-style-02">
                                                    <div class="price current-price">$89.99</div>
                                                    <div class="price old-price">$99.99</div>
                                                </div>

                                                <div class="hover-bottom-content">
                                                    <div class="author-meta">
                                                        <div class="author-thumb">
                                                            <a href="instructor-profile.html">
                                                                <img src="assets/images/instructor/instructor-small/instructor-6.jpg"
                                                                    alt="Author Images">
                                                                <span class="author-title">Linda Bacote</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="edu-meta meta-02">
                                                        <li><i class="icon-file-list-3-line"></i>16 Lessons</li>
                                                    </ul>
                                                </div>
                                                <div class="read-more-btn">
                                                    <a class="edu-btn btn-medium btn-white"
                                                        href="course-details.html">Enroll Now<i
                                                            class="icon-arrow-right-line-right"></i></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
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
