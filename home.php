<?php include 'header.php'; ?>
<title>Welcome</title>
<div class="home_container container mt_20">
    <div class="row">
        <div class="col-sm-12 col-lg-12 col-md-12" style="width: unset;overflow:hidden;">
            <!-- HEADER -->
            <div class="header">
                <nav class="navbar navbar-expand-md navbar-expand-lg ">
                    <div class="navbar-header flexbox_container">
                        <a class="navbar-brand text_black wow fadeInDown" href="home.html">Ariene Ray</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                            </svg>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarDropdown">
                        <ul class="navbar-nav home_menu ml-lg-auto mr-auto">
                            <li class="nav-item wow fadeInDown" data-wow-delay="0.25s"><a href="home.php" class="nav-link active">Home</a></li>
                            <li class="nav-item wow fadeInDown" data-wow-delay="0.45s"><a href="about.php" class="nav-link">About</a></li>
                            <li class="nav-item wow fadeInDown" data-wow-delay="0.65s"><a href="projects.php" class="nav-link">Project</a></li>
                            <li class="nav-item wow fadeInDown" data-wow-delay="0.75s"><a href="about.php?u=contact" class="nav-link">Contact</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="container  mt_20">
                    <div class="row">
                        <!-- LEFT , ABOUT -->
                        <div class="col-lg-6">
                            <div class="textbox_container wow slideInLeft" data-wow-delay="0.75s">
                                <div class="text_grey" style="font-size: 24px;line-height: 36px;">Hey!</div>
                                <h1 class="div_title">I'm <span class="text_yellow">Ariene Ray</span>.<br>an UI/UX Designer.</h1>
                                <div><img src="assets/images/Line_Vector.png" alt=""></div>
                                <h4 style="font-size: 18px;line-height: 30px;">UX Designer based in Jakarta, Indonesia.<br> I am designing with a minimal and beautiful design<br>in mind.</h4>
                                <div class="social_icons width_100">
                                    <div class="text_grey" style="font-size: 18px;line-height: 30px;">Follow Me</div>
                                    <div class="wow fadeInDown" data-wow-delay='1.5s'>
                                        <img src="assets/vectors/instagram.svg ">
                                    </div>
                                    <div class="wow fadeInUp" data-wow-delay='1.5s'>
                                        <img src="assets/vectors/youtube.svg ">
                                    </div>
                                    <div class="wow fadeInDown" data-wow-delay='1.5s'>
                                        <img src="assets/vectors/dribbble.svg ">
                                    </div>
                                </div>
                            </div>
                            <div class="btn_container width_100 wow slideInRight" data-wow-delay="1.5s">
                                <div>
                                    <div class="btn_normal flexbox_container"><img src="assets/vectors/mail_white.svg"><span>Mail Me</span></div>
                                </div>
                                <div>
                                    <div class="btn_inverted flexbox_container"><img src="assets/vectors/download.svg"><span>Download CV</span></div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-1"></div> -->
                        <!-- RIGHT , IMAGE -->
                        <div class=" col-lg-6">           
                            <div class="image_container">
                                <img src="assets/images/img_bg_1.png" id="img_1">
                                <img src="assets/images/home_image.jpg" id="img_2" class="wow fadeInDown" data-wow-duration="3s" data-wow-delay="0.45s">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CONTENT 1 MORE DETAILS-->
            <div class="container mt_75 sm">
                <div class="content_1 flexbox_container justify-content-between">
                    <div class="image_container width_100 wow fadeInLeftBig" data-wow-delay="0.65s"></div>
                    <div class="content_1_right flexbox_container width_100">
                        <div class="flexbox_container projects_reviews wow fadeInLeftBig" data-wow-delay="0.45s">
                            <div class="completed_projects">
                                <div class="flexbox_container large_text">
                                    <div>120</div>
                                    <div style="color:var(--green_light);font-weight: bold;">+</div>
                                </div>
                                <div class="text_grey fs_24 lh_36">Completed Projects</div>
                            </div>
                            <div class="positive_review">
                                <div class="flexbox_container div_title" style="font-weight: bold;">
                                    <div>A+</div>
                                    <div class="flexbox_container ml_10"><img src="assets/images/stars.png"></div>
                                </div>
                                <div class="text_grey fs_24 lh_36">Positive Review's</div>
                            </div>
                        </div>
                        <div class="textbox_container mt_20 wow fadeInLeftBig" data-wow-delay="0.25s">
                            <div class="div_title">Glad to Help You!</div>
                            <div style="font-size: 24px;line-height: 45px;">As a full-service digital designer, I work closely with my clients to define, design and develop transformative user experiences across all platforms and brand’s touchpoints.</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CONTENT 2 RECENT PROJECTS-->
            <div class="container mt_75 sm">
                <div class="content_2 ">
                    <div class="flexbox_container content2_header justify-content-between">
                        <div>
                            <h1 class="text_sm">Recent Projects</h1>
                        </div>
                        <a href="projects.html">
                            <div class="btn_normal">View More</div>
                        </a>
                    </div>
                    <div class="projects mt_20 flexbox_container justify-content-between">
                        <div class="project_1 wow slideInLeft" data-wow-delay="0.75s">
                            <div class="project_image" ><img src="assets/images/project1.png" class="image_fit"></div>
                            <h3 class="mt_20">UI Portofolio</h3>
                            <div class="flexbox_container">
                                <div class="study_case flexbox_container ">
                                    <img src="assets/vectors/layers.svg" alt="">
                                    <h4 class="ml_10 text_overflow">View Study Case</h4>
                                </div>
                                <div class="preview flexbox_container ml_10">
                                    <img src="assets/vectors/show.svg" alt="">
                                    <h4 class="ml_10 text_overflow">Live Preview</h4>
                                </div>
                            </div>
                        </div>
                        <div class="project_2 wow slideInLeft" data-wow-delay="0.95s">
                            <div class="project_image" ><img src="assets/images/project2.png" class="image_fit"></div>
                            <h3 class="mt_20">UI Portofolio</h3>
                            <div class="flexbox_container">
                                <div class="study_case flexbox_container">
                                    <img src="assets/vectors/layers.svg" alt="">
                                    <h4 class="ml_10 text_overflow">View Study Case</h4>
                                </div>
                                <div class="preview flexbox_container ml_10">
                                    <img src="assets/vectors/show.svg" alt="">
                                    <h4 class="ml_10 text_overflow">Live Preview</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CONTENT 3 STRENGTHS -->
            <div class="container mt_75 sm">
                <div class="content_3">
                    <div class="content3_title">
                        <h1 style="text-align: center;">Why Hire Me?</h1>
                    </div>
                    <!-- CARD DECK -->
                    <div class="card-deck mt_10 ">
                        <!-- CARD 1 -->
                        <div class="card">
                            <div class="card-body text-center reason1 wow fadeInDownBig" data-wow-delay="0.25s">
                                <div class="card-image"><img src="assets/images/reason1.png"></div>
                                <div class="mt_20">
                                    <h3>Communicative</h3>
                                    <p class="fs_18 lh_30 text_grey card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
                                </div>
                            </div>
                        </div>
                        <!-- CARD 2 -->
                        <div class="card">
                            <div class="card-body text-center reason2 wow fadeInUpBig" data-wow-delay="0.35s">
                                <div class="card-image"><img src="assets/images/reason2.png"></div>
                                <div class="mt_20">
                                    <h3>Professional</h3>
                                    <p class="fs_18 lh_30 text_grey card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
                                </div>
                            </div>
                        </div>
                        <!-- CARD 3 -->
                        <div class="card">
                            <div class="card-body text-center reason3 wow fadeInDownBig" data-wow-delay="0.25s">
                                <div class="card-image"><img src="assets/images/reason3.png"></div>
                                <div class="mt_20">
                                    <h3>Collaborative</h3>
                                    <p class="fs_18 lh_30 text_grey card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
                                </div>
                            </div>
                        </div>
                        <!-- CARD 4 -->
                        <div class="card">
                            <div class="card-body text-center reason3 wow fadeInUpBig" data-wow-delay="0.35s">
                                <div class="card-image"><img src="assets/images/reason4.png"></div>
                                <div class="mt_20">
                                    <h3>Client's Favourite</h3>
                                    <p class="fs_18 lh_30 text_grey card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CONTENT 4 CONTACT, PROJECT DETAILS-->
            <div class="container mt_75 sm">
                <div class="content_4 flexbox_container div_title">
                    <div class="width_100" style="width:30%">Interested working with me?</div>
                    <div class="btn_container width_100">
                        <div>
                            <div class="btn_normal flexbox_container wow pulse" data-wow-delay="0.25s">
                                <img src="assets/vectors/mail_black.svg">
                                <span class="fs_24 lh_36">Email Me</span>
                            </div>
                        </div>
                        <div class="btn_inverted ml-5 wow pulse" data-wow-delay="0.65s">
                            <a href="projects.html"><span class="fs_24 lh_36">See More Projects</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CONTENT 5 LOGOS -->
            <div class="container mt_75 sm">
                <div class="content_5 text-center">
                    <img src="assets/vectors/vector.svg">
                </div>
            </div>
            <!-- CONTENT 6 TESTIMONIAL-->
            <div class="container mt_75 sm">
                <div class="content_6">
                    <div class="text-center mb_20 text-white div_title">We Are Loved By Users<br> And Clients Worldwide</div>
                    <div id="carousel_testimonials" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel_testimonials" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel_testimonials" data-slide-to="1"></li>
                            <li data-target="#carousel_testimonials" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <!-- SLIDE 1 -->
                            <div class="item active">
                                <div class="flexbox_container testimonials">
                                    <!-- TESTIMONIAL 1 -->
                                    <div class="testimonial1 border_curved fs_24 lh_36 ">
                                        <p class="mb_20">One of the best additions to our feedback loop has been the company-wide adoption of Fellow.</p>
                                        <div class="profile flexbox_container">
                                            <div class="flexbox_container">
                                                <div class="profile_image"><img src="assets/images/profile1.png"></div>
                                                <div class="ml_10 profile_details">
                                                    <p class="fs_16 lh_24 mb-0">Ronald Richards</p>
                                                    <p class="fs_14 lh_24 text_grey mb-0">UI/UX Designer</p>
                                                </div>
                                            </div>
                                            <div class="flexbox_container positive_review">
                                                <div class="fs_16 lh_24 font-weight-bold">4.5</div>
                                                <div class="flexbox_container ml_10"><img src="assets/images/stars.png"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TESTIMONIAL 2 -->
                                    <div class="testimonial2 border_curved fs_24 lh_36">
                                        <p class="mb_20 ">It provides an amazing platform for constant conversations and direct feedback between managers and direct reports.</p>
                                        <div class="profile flexbox_container">
                                            <div class="flexbox_container">
                                                <div><img src="assets/images/profile2.png"></div>
                                                <div class="ml_10">
                                                    <p class="fs_16 lh_24 mb-0">Ronald Richards</p>
                                                    <p class="fs_14 lh_24 text_grey mb-0">UI/UX Designer</p>
                                                </div>
                                            </div>
                                            <div class="flexbox_container positive_review justify-content-between">
                                                <div class="fs_16 lh_24 font-weight-bold">4.5</div>
                                                <div class="flexbox_container ml_10"><img src="assets/images/stars.png"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- SLIDE 2 -->
                            <div class="item">
                                <div class="flexbox_container testimonials">
                                    <!-- TESTIMONIAL 1 -->
                                    <div class="testimonial1 border_curved fs_24 lh_36 ">
                                        <p class="mb_20">One of the best additions to our feedback loop has been the company-wide adoption of Fellow.</p>
                                        <div class="profile flexbox_container">
                                            <div class="flexbox_container">
                                                <div class="profile_image"><img src="assets/images/profile1.png"></div>
                                                <div class="ml_10 profile_details">
                                                    <p class="fs_16 lh_24 mb-0">Ronald Richards</p>
                                                    <p class="fs_14 lh_24 text_grey mb-0">UI/UX Designer</p>
                                                </div>
                                            </div>
                                            <div class="flexbox_container positive_review">
                                                <div class="fs_16 lh_24 font-weight-bold">4.5</div>
                                                <div class="flexbox_container ml_10"><img src="assets/images/stars.png"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TESTIMONIAL 2 -->
                                    <div class="testimonial2 border_curved fs_24 lh_36">
                                        <p class="mb_20 ">It provides an amazing platform for constant conversations and direct feedback between managers and direct reports.</p>
                                        <div class="profile flexbox_container">
                                            <div class="flexbox_container">
                                                <div><img src="assets/images/profile2.png"></div>
                                                <div class="ml_10">
                                                    <p class="fs_16 lh_24 mb-0">Ronald Richards</p>
                                                    <p class="fs_14 lh_24 text_grey mb-0">UI/UX Designer</p>
                                                </div>
                                            </div>
                                            <div class="flexbox_container positive_review">
                                                <div class="fs_16 lh_24 font-weight-bold">4.5</div>
                                                <div class="flexbox_container ml_10"><img src="assets/images/stars.png"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- SLIDE 3 -->
                            <div class="item">
                                <div class="flexbox_container testimonials">
                                    <!-- TESTIMONIAL 1 -->
                                    <div class="testimonial1 border_curved fs_24 lh_36 ">
                                        <p class="mb_20">One of the best additions to our feedback loop has been the company-wide adoption of Fellow.</p>
                                        <div class="profile flexbox_container">
                                            <div class="flexbox_container">
                                                <div class="profile_image"><img src="assets/images/profile1.png"></div>
                                                <div class="ml_10 profile_details">
                                                    <p class="fs_16 lh_24 mb-0">Ronald Richards</p>
                                                    <p class="fs_14 lh_24 text_grey mb-0">UI/UX Designer</p>
                                                </div>
                                            </div>
                                            <div class="flexbox_container positive_review">
                                                <div class="fs_16 lh_24 font-weight-bold">4.5</div>
                                                <div class="flexbox_container ml_10"><img src="assets/images/stars.png"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TESTIMONIAL 2 -->
                                    <div class="testimonial2 border_curved fs_24 lh_36">
                                        <p class="mb_20 ">It provides an amazing platform for constant conversations and direct feedback between managers and direct reports.</p>
                                        <div class="profile flexbox_container">
                                            <div class="flexbox_container">
                                                <div><img src="assets/images/profile2.png"></div>
                                                <div class="ml_10">
                                                    <p class="fs_16 lh_24 mb-0">Ronald Richards</p>
                                                    <p class="fs_14 lh_24 text_grey mb-0">UI/UX Designer</p>
                                                </div>
                                            </div>
                                            <div class="flexbox_container positive_review">
                                                <div class="fs_16 lh_24 font-weight-bold">4.5</div>
                                                <div class="flexbox_container ml_10"><img src="assets/images/stars.png"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FOOTER -->
            <div class="container mt_75 sm">
                <div class="footer flexbox_container">
                    <div class="fs_36 lh_46">Let's Connect</div>
                    <div class="social_icons">
                        <div class="wow fadeInUp" data-wow-delay="0.25s">
                            <img src="assets/vectors/instagram.svg ">
                        </div>
                        <div class="wow fadeInDown" data-wow-delay="0.25s">
                            <img src="assets/vectors/youtube.svg ">
                        </div>
                        <div class="wow fadeInUp" data-wow-delay="0.25s">
                            <img src="assets/vectors/dribbble.svg ">
                        </div>
                    </div>
                    <div class="flexbox_container backtotop">
                        <p class="fs_36 lh_46">Back to Top</p><img src="assets/vectors/short_up.svg" class="ml_10">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
</body>

</html>