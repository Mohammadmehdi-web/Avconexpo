<!DOCTYPE html>
<html lang="zxx" style="overflow-x:hidden;">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author"/>
    <meta name="description"/>
    <!-- ======== Page title ============ -->
    <title>Avconexpo | Global Engineering & Technology, Trading and Sourcing Solution Company.</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="assets/img/logo/favicon.png" />
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="assets/css/animate.css" />
    <!--<< Splitting.css >>-->
    <link rel="stylesheet" href="assets/css/splitting.css" />
    <!--<< Magnific popup.css >>-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <!--<< Icomoon.css >>-->
    <link rel="stylesheet" href="assets/css/icomoon.css" />
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="assets/css/meanmenu.css" />
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <!--<< NiceSelect.css >>-->
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css"/>
    <!-- <style>
        .hero-section-4::before {

            background: none !important;
        }

        .header-top-section.style-bg::before {

            left: 0px;

        }

        .header-3.header-4 .header-logo-2 {
            display: block !important;
        }

        .hero-section-4 .array-button .array-prevs,
        .hero-section-4 .array-button .array-nexts {
            width: 50px !important;
        }

        .left-arrow-btn-div {
            position: absolute;
            top: 0px;
            left: 0px;
            height: 100%;
        }

        .right-arrow-btn-div {
            position: absolute;
            top: 0px;
            right: 0px;
            height: 100%;
        }

        .left-arrow-btn-div button,
        .right-arrow-btn-div button {
            height: 100% !important;
            background-color: #ffffff21 !important;
        }

        @media screen and (max-width:1500px) {

            .hero-section-4 .array-button .array-prevs,
            .hero-section-4 .array-button .array-nexts {
                width: 40px !important;
            }
        }

        @media (max-width: 1199px) {
            .hero-section-4 .array-button {
                display: block !important;
            }

            .left-arrow-btn-div button,
            .right-arrow-btn-div button {
                height: 100% !important;
                background: none !important;
            }

            .left-arrow-btn-div button i,
            .right-arrow-btn-div button i {
                font-size: 30px;
            }
        }

        @media screen and (max-width:1500px) {}

        @media screen and (max-width:1500px) {}
    </style> -->
    <style>
        .text-justify {
            text-align: justify;
        }

        @media screen and (min-width: 1200px) {
            .submenu {
                min-width: 340px !important;
            }
        }

        @media screen and (max-width: 500px) {
            .about-wrapper-4 .about-content .list-title li {
                font-size: 15px;
            }
        }

        .hero-4 .hero-content h1 {
            font-size: 45px;
        }
        
        .testimonial-card.style3 .testimonial-header .profile .thumb img {
            max-width: 86%;
        
        }
       .select2-results {
            height: 200px;
        }


    </style>
</head>

<body>

   <?php
    include('header.php');
   ?>

    <!-- Intro Section S T A R T -->
    <section class="intro-section fix">
        <div class="swiper hero-slider-3">
            <div class="swiper-wrapper">
                <?php
					include('db_con.php');
					$result = $con->query("SELECT image_path, details FROM banners_projects");

					while ($row = $result->fetch_assoc()):
                ?>
                <div class="swiper-slide">
                    <div class="intro-container-wrapper style3">
                        <div class="slider-image bg-cover" style="background-image: url('admin/<?php echo ($row['image_path']); ?>');"></div>
                        <div class="container-fluid">
                            <div class="intro-wrapper style3">
                                <div class="intro-content">
                                    <h1 data-animation="fadeInUp" data-delay="1.3s">
                                    <?php echo ($row['details']); ?>
                                        
                                    </h1>
                                    <img src="assets/img/icon/hero3ArrowIcon.svg" alt="icon" data-animation="fadeInUp"
                                        data-delay="1.4s" />
                                    <span class="big-text" data-animation="fadeInUp" data-delay="1.4s">AVCONEXPO</span>

                                    <div class="intro-bottom">
                                        <div class="row">
                                            <div class="col-xl-6"></div>
                                            <div class="col-xl-6">
                                                <div class="intro-bottom-content-box">
                                                    <div class="intro-bottom-content">
                                                        <div class="box-wrapper">
                                                            <div class="bottom-box">
                                                                <p class="text">
                                                                    Avconexpo provides first-class industrial
                                                                    solutions & services for governmental and
                                                                    private organizations worldwide.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="bottom-thumb">
                                                            <img src="assets/img/intro/introBottomThumb3_1.jpg"
                                                                alt="thumb" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="array-button">
            <button class="array-prevs">Previews</button>
            <button class="array-nexts">Next</button>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section-4 fix section-padding">
        <div class="container">
            <div class="about-wrapper-4">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="about-image">
                            <img src="assets/img/about/03.jpg" alt="img" class="wow img-custom-anim-left" />
                            <div class="border-shape">
                                <img src="assets/img/about/border-shape.png" alt="img" />
                            </div>
                            <div class="about-image-2">
                                <img src="assets/img/about/04.jpg" alt="img" class="wow img-custom-anim-right"
                                    data-wow-duration="1.5s" data-wow-delay="0.3s" />
                            </div>
                            <div class="wcu-counter">
                                <h5 class="counter">
                                    <span class="counter-number">20</span>+
                                </h5>
                                <p class="text">
                                    Years <br />
                                    Experience
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title">
                                <span class="subtitle wow fadeInUp"><img src="assets/img/icon/subTitleIcon.svg"
                                        alt="icon" />
                                    About Our Company
                                </span>
                                <h2 class="splt-txt wow fadeInUp" data-wow-delay=".3s">
                                    Transform Your Business with Expert Solutions
                                </h2>
                                <p class="text wow fadeInUp text-justify" data-wow-delay=".5s">
                                    AVCONEXPO is a global Engineering and technology, Trading
                                    and Sourcing, and Architecture Solution Company. We engage
                                    with customers across their value chain helping to design,
                                    build, operate, and maintain the products and services that
                                    make them leaders and respected brands in their industries
                                    and markets. We, AVCONEXPO enjoy the pride of providing the
                                    best engineering solutions with our pool of technical
                                    experts which include technologists, Engineers, Architects,
                                    Energy conservators, System/Process Engineers, and other
                                    professionals. We’ve been in the business for more than a
                                    decade now and have built an operation predicated on
                                    constant refinement and relentless growth.
                                </p>
                            </div>
                            <ul class="list-title wow fadeInUp" data-wow-delay=".3s">
                                <li>
                                    <img width="25" height="25" src="https://img.icons8.com/windows/50/approval.png"
                                        alt="approval" />
                                    Global Engineering & Technology Solutions
                                </li>
                                <li>
                                    <img width="25" height="25" src="https://img.icons8.com/windows/50/approval.png"
                                        alt="approval" />
                                    Expertise in Trading & Sourcing
                                </li>
                                <li>
                                    <img width="25" height="25" src="https://img.icons8.com/windows/50/approval.png"
                                        alt="approval" />
                                    Innovative Architectural Solutions
                                </li>
                            </ul>
                            <a class="theme-btn wow fadeInUp" data-wow-delay=".5s" href="https://auctest.rf.gd/avconexpo_test/about.php">
                                Read more <i class="fa-sharp fa-regular fa-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Marquee Section -->
    <div class="marquee-section mb-5">
        <div class="mycustom-marque">
            <div class="scrolling-wrap">
                <div class="comm style1">
                    <div class="cmn-textslide style2">Innovate Boldly</div>
                    <div class="line">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="54" viewBox="0 0 50 54" fill="none">
                            <path
                                d="M29.703 54H19.802V37.5L5.44554 45L0 36L14.8515 26.5L0 17.5L5.44554 8.5L19.802 17.5V0H29.703V17.5L44.5545 8.5L50 17.5L35.6436 27.5L50 37.5L44.5545 45L29.703 36V54Z"
                                fill="#AEC0C9"></path>
                        </svg>
                    </div>
                    <div class="cmn-textslide style1">Your Vision, Our Mission!</div>
                    <div class="dot">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="54" viewBox="0 0 50 54" fill="none">
                            <path
                                d="M29.703 54H19.802V37.5L5.44554 45L0 36L14.8515 26.5L0 17.5L5.44554 8.5L19.802 17.5V0H29.703V17.5L44.5545 8.5L50 17.5L35.6436 27.5L50 37.5L44.5545 45L29.703 36V54Z"
                                fill="#AEC0C9"></path>
                        </svg>
                    </div>
                    <div class="cmn-textslide style2">Innovate. Lead. Dominate!</div>
                    <div class="line">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="54" viewBox="0 0 50 54" fill="none">
                            <path
                                d="M29.703 54H19.802V37.5L5.44554 45L0 36L14.8515 26.5L0 17.5L5.44554 8.5L19.802 17.5V0H29.703V17.5L44.5545 8.5L50 17.5L35.6436 27.5L50 37.5L44.5545 45L29.703 36V54Z"
                                fill="#AEC0C9"></path>
                        </svg>
                    </div>
                    <div class="cmn-textslide style1">Smart Solutions</div>
                    <div class="dot">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="54" viewBox="0 0 50 54" fill="none">
                            <path
                                d="M29.703 54H19.802V37.5L5.44554 45L0 36L14.8515 26.5L0 17.5L5.44554 8.5L19.802 17.5V0H29.703V17.5L44.5545 8.5L50 17.5L35.6436 27.5L50 37.5L44.5545 45L29.703 36V54Z"
                                fill="#AEC0C9"></path>
                        </svg>
                    </div>
                </div>
                <div class="comm style1">
                    <div class="line">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="54" viewBox="0 0 50 54" fill="none">
                            <path
                                d="M29.703 54H19.802V37.5L5.44554 45L0 36L14.8515 26.5L0 17.5L5.44554 8.5L19.802 17.5V0H29.703V17.5L44.5545 8.5L50 17.5L35.6436 27.5L50 37.5L44.5545 45L29.703 36V54Z"
                                fill="#AEC0C9"></path>
                        </svg>
                    </div>
                    <div class="cmn-textslide style1">Your Vision, Our Mission!</div>
                    <div class="dot">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="54" viewBox="0 0 50 54" fill="none">
                            <path
                                d="M29.703 54H19.802V37.5L5.44554 45L0 36L14.8515 26.5L0 17.5L5.44554 8.5L19.802 17.5V0H29.703V17.5L44.5545 8.5L50 17.5L35.6436 27.5L50 37.5L44.5545 45L29.703 36V54Z"
                                fill="#AEC0C9"></path>
                        </svg>
                    </div>
                    <div class="cmn-textslide style2">Innovate. Lead. Dominate!</div>
                    <div class="line">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="54" viewBox="0 0 50 54" fill="none">
                            <path
                                d="M29.703 54H19.802V37.5L5.44554 45L0 36L14.8515 26.5L0 17.5L5.44554 8.5L19.802 17.5V0H29.703V17.5L44.5545 8.5L50 17.5L35.6436 27.5L50 37.5L44.5545 45L29.703 36V54Z"
                                fill="#AEC0C9"></path>
                        </svg>
                    </div>
                    <div class="cmn-textslide style1">Smart Solutions</div>
                    <div class="dot">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="54" viewBox="0 0 50 54" fill="none">
                            <path
                                d="M29.703 54H19.802V37.5L5.44554 45L0 36L14.8515 26.5L0 17.5L5.44554 8.5L19.802 17.5V0H29.703V17.5L44.5545 8.5L50 17.5L35.6436 27.5L50 37.5L44.5545 45L29.703 36V54Z"
                                fill="#AEC0C9"></path>
                        </svg>
                    </div>
                </div>
                <div class="comm style1">
                    <div class="line">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="54" viewBox="0 0 50 54" fill="none">
                            <path
                                d="M29.703 54H19.802V37.5L5.44554 45L0 36L14.8515 26.5L0 17.5L5.44554 8.5L19.802 17.5V0H29.703V17.5L44.5545 8.5L50 17.5L35.6436 27.5L50 37.5L44.5545 45L29.703 36V54Z"
                                fill="#AEC0C9"></path>
                        </svg>
                    </div>
                    <div class="cmn-textslide style1">Your Vision, Our Mission!</div>
                    <div class="dot">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="54" viewBox="0 0 50 54" fill="none">
                            <path
                                d="M29.703 54H19.802V37.5L5.44554 45L0 36L14.8515 26.5L0 17.5L5.44554 8.5L19.802 17.5V0H29.703V17.5L44.5545 8.5L50 17.5L35.6436 27.5L50 37.5L44.5545 45L29.703 36V54Z"
                                fill="#AEC0C9"></path>
                        </svg>
                    </div>
                    <div class="cmn-textslide style2">Innovate. Lead. Dominate!</div>
                    <div class="line">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="54" viewBox="0 0 50 54" fill="none">
                            <path
                                d="M29.703 54H19.802V37.5L5.44554 45L0 36L14.8515 26.5L0 17.5L5.44554 8.5L19.802 17.5V0H29.703V17.5L44.5545 8.5L50 17.5L35.6436 27.5L50 37.5L44.5545 45L29.703 36V54Z"
                                fill="#AEC0C9"></path>
                        </svg>
                    </div>
                    <div class="cmn-textslide style1">Smart Solutions</div>
                    <div class="dot">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="54" viewBox="0 0 50 54" fill="none">
                            <path
                                d="M29.703 54H19.802V37.5L5.44554 45L0 36L14.8515 26.5L0 17.5L5.44554 8.5L19.802 17.5V0H29.703V17.5L44.5545 8.5L50 17.5L35.6436 27.5L50 37.5L44.5545 45L29.703 36V54Z"
                                fill="#AEC0C9"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Service Section -->
    <section class="service-section fix section-padding section-bg mt-5">
        <div class="container custom-container-2">
            <div class="service-wrapper-4">
                <div class="row g-5">
                    <div class="col-lg-5">
                        <div class="service-left-content">
                            <div class="section-title">
                                <span class="subtitle wow fadeInUp"><img src="assets/img/icon/subTitleIcon.svg"
                                        alt="icon" />Our Services</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    Engineering Brilliance, Architectural Perfection
                                </h2>
                            </div>
                            <ul class="service-list">
                                <li>End-to-End Industrial Solutions for Global Clients</li>
                                <li>Expert Business Consultancy for Sustainable Growth</li>
                                <li>Customized Solutions for Government & Private Sectors</li>
                            </ul>
                            <a class="theme-btn" href="https://auctest.rf.gd/avconexpo_test/services.php">
                                Read more <i class="fa-sharp fa-regular fa-arrow-up-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row g-4">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="service-box-items wow fadeInUp" data-wow-delay=".3s">
                                    <div class="icon">
                                        <img src="assets/img/icon/06.svg" alt="img" />
                                    </div>
                                    <div class="content">
                                        <h3>
                                            <a href="https://auctest.rf.gd/avconexpo_test/business-technical-consulting.php">Business Consultancy</a>
                                        </h3>
                                        <p>
                                            At Avconexpo, our seasoned engineers boast extensive
                                            years of experience in the various domains of
                                            engineering we specialize in.Our dedicated consulting
                                        </p>
                                        <div class="link">
                                            <a href="https://auctest.rf.gd/avconexpo_test/business-technical-consulting.php">Explore More
                                                <i class="fa-solid fa-arrow-up-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="service-box-items wow fadeInUp" data-wow-delay=".4s">
                                    <div class="icon">
                                        <img src="assets/img/icon/07.svg" alt="img" />
                                    </div>
                                    <div class="content">
                                        <h3>
                                            <a href="https://auctest.rf.gd/avconexpo_test/project-management.php">Project Management</a>
                                        </h3>
                                        <p>
                                            Avconexpo leverages its extensive expertise in
                                            engineering & design services capabilities with
                                            excellent domain knowledge and technical know-how to
                                            provide
                                        </p>
                                        <div class="link">
                                            <a href="https://auctest.rf.gd/avconexpo_test/project-management.php">Explore More
                                                <i class="fa-solid fa-arrow-up-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="service-box-items wow fadeInUp" data-wow-delay=".5s">
                                    <div class="icon">
                                        <img src="assets/img/icon/08.svg" alt="img" />
                                    </div>
                                    <div class="content">
                                        <h3>
                                            <a href="https://auctest.rf.gd/avconexpo_test/trading-sourcing.php">Trading & Sourcing</a>
                                        </h3>
                                        <p>
                                            Avconexpo offers its clients comprehensive and
                                            satisfying sourcing solutions, with the help of its
                                            well-connected network of manufacturing companies and
                                            infrastructure.
                                        </p>
                                        <div class="link">
                                            <a href="https://auctest.rf.gd/avconexpo_test/trading-sourcing.php">Explore More
                                                <i class="fa-solid fa-arrow-up-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="service-box-items wow fadeInUp" data-wow-delay=".7s">
                                    <div class="icon">
                                        <img src="assets/img/icon/09.svg" alt="img" />
                                    </div>
                                    <div class="content">
                                        <h3>
                                            <a href="https://auctest.rf.gd/avconexpo_test/architecture-design.php">Architecture & Design</a>
                                        </h3>
                                        <p>
                                            Our architecture team strives to create design solutions
                                            that suit the needs of the client and the community
                                            while considering their effects on the environment.
                                        </p>
                                        <div class="link">
                                            <a href="https://auctest.rf.gd/avconexpo_test/architecture-design.php">Explore More
                                                <i class="fa-solid fa-arrow-up-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Achievement Section S T A R T -->
    <div class="achievement-section bg-color3 fix">
        <div class="achievement-container-wrapper style3">
            <div class="achievement-thumb"
                style="background-image: url('assets/img/achievement/achievementThumb3_1.jpg');">

            </div>
            <div class="container">
                <div class="achievement-wrapper style3">
                    <div class="row g-4">
                        <div class="col-xl-7">
                            <div class="about-service-meta">
                                <div class="meta-box wow fadeInUp" data-wow-delay=".3s">
                                    <div class="counter">
                                        <img width="50" height="50"
                                            src="https://img.icons8.com/ios-filled/50/FFFFFF/worldwide-location--v1.png"
                                            alt="worldwide-location--v1" />
                                        <span class="counter-number"> 12 </span>
                                    </div>
                                    <p class="text">Global Presence</p>
                                </div>
                                <div class="meta-box wow fadeInUp" data-wow-delay=".6s">
                                    <div class="counter">
                                        <img width="50" height="50"
                                            src="https://img.icons8.com/external-flatart-icons-solid-flatarticons/64/FFFFFF/external-star-success-flatart-icons-solid-flatarticons.png"
                                            alt="star-success" />
                                        <span class="counter-number"> 20 </span>
                                    </div>
                                    <p class="text">Years Of Industry Experience</p>
                                </div>
                                <div class="meta-box wow fadeInUp" data-wow-delay=".8s">
                                    <div class="counter">
                                        <img width="50" height="50"
                                            src="https://img.icons8.com/comic/100/FFFFFF/facebook-like.png"
                                            alt="facebook-like" />
                                        <span class="counter-number"> 100 </span>%
                                    </div>
                                    <p class="text">Customer Satisfaction</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 d-flex justify-content-end">
                            <div class="achievement-contact-meta">
                                <a href="https://auctest.rf.gd/avconexpo_test/about.php">
                                    <img src="assets/img/achievement/achievement-circle.png" alt="circle">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Service Section S T A R T -->
    <section class="service-section section-padding section-bg fix">
        <div class="service-container-wrapper style1">
            <div class="shape">
                <img src="assets/img/shape/serviceShape1_1.png" alt="shape" />
            </div>
            <div class="container">
                <div class="section-title maxw-470 text-center mx-auto">
                    <span class="subtitle wow fadeInUp">
                        <img src="assets/img/icon/subTitleIcon.svg" alt="icon" />What We
                        Do
                    </span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        Our General Business Principles.
                    </h2>
                </div>
                <div class="service-wrapper style1">
                    <div class="row g-4">
                        <div class="col-xl-4 col-md-6">
                            <div class="service-card style1 wow fadeInUp" data-tilt data-tilt-max="15"
                                data-wow-delay="0.2s">
                                <div class="thumb">
                                    <img src="assets/img/service/serviceCardThumb1_1.jpg" alt="thumb" />
                                </div>
                                <div class="content">
                                    <h4>
                                        Technical Expertise
                                    </h4>
                                    <p class="text">
                                        We are backed by a pool of experienced Technologists,
                                        Engineers, and Process Experts, delivering top-notch
                                        engineering solutions across various industries.
                                    </p>
                                    <div class="icon"><i class="icon-serviceIcon1_1"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="service-card style1 wow fadeInUp" data-tilt data-tilt-max="15"
                                data-wow-delay="0.4s">
                                <div class="thumb">
                                    <img src="assets/img/service/serviceCardThumb1_2.jpg" alt="thumb" />
                                </div>
                                <div class="content">
                                    <h4>
                                        Diverse Industry Solutions
                                    </h4>
                                    <p class="text">
                                        Our services cater to Plastic Factories, Power
                                        Substations, Boilers, Refineries, and Manufacturing
                                        Plants, offering customized solutions for each sector.
                                    </p>
                                    <div class="icon"><i class="icon-serviceIcon1_2"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="service-card style1 wow fadeInUp" data-tilt data-tilt-max="15"
                                data-wow-delay="0.7s">
                                <div class="thumb">
                                    <img src="assets/img/service/serviceCardThumb1_3.jpg" alt="thumb" />
                                </div>
                                <div class="content">
                                    <h4>
                                        Innovative Utility Solutions
                                    </h4>
                                    <p class="text">
                                        From Water Treatment Plants to Chilled Water Systems, we
                                        specialize in sizing utilities, piping, and electrical
                                        systems to ensure maximum efficiency.
                                    </p>
                                    <div class="icon"><i class="icon-serviceIcon1_3"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="service-card style1 wow fadeInUp" data-tilt data-tilt-max="15"
                                data-wow-delay="0.2s">
                                <div class="thumb">
                                    <img src="assets/img/service/serviceCardThumb1_1.jpg" alt="thumb" />
                                </div>
                                <div class="content">
                                    <h4>
                                        Complete Lab Setup
                                    </h4>
                                    <p class="text">
                                        We provide Laboratory Solutions with all necessary
                                        equipment and human resources, enhancing operational
                                        capabilities across industries.
                                    </p>
                                    <div class="icon"><i class="icon-serviceIcon1_1"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="service-card style1 wow fadeInUp" data-tilt data-tilt-max="15"
                                data-wow-delay="0.4s">
                                <div class="thumb">
                                    <img src="assets/img/service/serviceCardThumb1_2.jpg" alt="thumb" />
                                </div>
                                <div class="content">
                                    <h4>
                                        Heavy Industrial Solutions
                                    </h4>
                                    <p class="text">
                                        With expertise in Mining, Packaging, and Industrial
                                        Equipment, we deliver comprehensive solutions for heavy
                                        industrial projects.
                                    </p>
                                    <div class="icon"><i class="icon-serviceIcon1_2"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="service-card style1 wow fadeInUp" data-tilt data-tilt-max="15"
                                data-wow-delay="0.7s">
                                <div class="thumb">
                                    <img src="assets/img/service/serviceCardThumb1_3.jpg" alt="thumb" />
                                </div>
                                <div class="content">
                                    <h4>
                                       Industry-Specific Expertise
                                    </h4>
                                    <p class="text">
                                        Our team of specialized engineers and technologists
                                        provides tailored solutions for Plastic Factories, Power
                                        Plants, Refineries, and Manufacturing Units.
                                    </p>
                                    <div class="icon"><i class="icon-serviceIcon1_3"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Contact Section    S T A R T -->
    <div class="contact-form-section section-padding fix">
        <div class="contact-form-container-wrapper style1">
            <div class="container-fluid">
                <div class="contact-title-wrapper pb-425 section-bg2 section-padding border-radius">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7">
                                <div class="section-title text-left">
                                    <span class="subtitle text-white wow fadeInUp"><img
                                            src="assets/img/icon/subTitleIconWhite.svg" alt="icon" />Contact Us</span>
                                    <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                                        Feel Free To Contact Us
                                    </h2>
                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="title-content wow fadeInUp" data-wow-delay=".5s">
                                    <p class="text-white">
                                        Looking for expert engineering solutions? AVCONEXPO delivers excellence with
                                        innovative technology and unmatched expertise. Let's build something great
                                        together!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="contact-form-wrapper style1 mt-n368">
                    <div class="row gx-60 gy-5">
                        <div class="col-xl-7">
                            <div class="contact-form style1 wow fadeInUp" data-wow-delay=".3s">
                                <h2>Get in Touch</h2>
                                <form method="POST" action="save_contact.php" id="enquiryForm" class="row">
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Full Name" id="name" name="name" required />
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email" id="email" placeholder="Email Address" required  />
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" name="phone" id="phone" placeholder="Phone Number" required class="form-control">
                                    </div>
                                   
                                    <div class="col-md-12">
                                       <select  class="single-select" aria-label="Shop order" name="subject" id="subject" required >
                                            <option value="">--Select a Service--</option>
                                            <option value="architechture &amp; design">Architechture &amp; Design </option>
                                            <option value="business and technical consultancy">Business and Technical Consultancy </option>
                                            <option value="blast free mining and rock excavation">Blast free mining and rock excavation</option>
                                            <option value="engineering solutions">Engineering solutions</option>
                                            <option value="hotel clubs resorts golf course horticulture and landscaping">Hotel, clubs, resorts, Golf course, Horticulture &amp; landscaping</option>
                                            
                                            <option value="project management">Project Management ( Greenfield &amp; Brownfields)</option>
                                            <option value="startups">Startups</option>
                                            <option value="talent management">Talent Management</option>
                                            <option value="trading and sourcing">Trading and sourcing</option>
                                            
                                            
                                            <option value="reviving and running the sick industries">Reviving and Running the Sick industries</option>
                                            <option value="waste management">Waste Management</option>
                                            <option value="wellness equipment">Wellness Equipment</option>
                                            
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <textarea id="message" name="message" class="form-control"
                                            placeholder="Write your message here..." rows="5"></textarea>
                                    </div>
                                    <div class="col-12 form-group">
                                        <p>
                                            Have a query? Let's connect to find the best solution for your needs!
                                        </p>
                                    </div>
                                    <div class="col-12 form-group mb-0">
                                        <button class="theme-btn w-100" type="submit" name="submit">
                                            Submit Now
                                            <i
                                                class="fa-sharp fa-regular fa-arrow-right-long bg-transparent text-white"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="contact-map style2 wow fadeInUp" data-wow-delay=".3s">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7122.900348842653!2d81.003747!3d26.793791!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399be58bd02108ab%3A0xd8873eb8a3d56332!2sAVCONEXPO!5e0!3m2!1sen!2sin!4v1740640375987!5m2!1sen!2sin"
                                    style="width: 100%; height: 687px" allowfullscreen loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>

                                <div class="contact-info-wrapper style2">
                                    <h2>Contact Info</h2>
                                    <div class="shape-left">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="39"
                                            viewBox="0 0 29 39" fill="none">
                                            <path d="M0 0L29 39V0H0Z" fill="#1E292E" />
                                        </svg>
                                    </div>
                                    <div class="shape-right">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="39"
                                            viewBox="0 0 29 39" fill="none">
                                            <path d="M29 0L0 39V0H29Z" fill="#1E292E" />
                                        </svg>
                                    </div>
                                    <div class="contact-info style2">
                                        <div class="icon">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <div class="content">
                                            <h3>
                                                1/6/55, Sector J, Pocket 6, <br> Sushant
                                                Golf City, Lucknow - 226030, UP, India
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="contact-info style2">
                                        <div class="icon">
                                            <i class="fa-regular fa-phone"></i>
                                        </div>
                                        <div class="content">
                                            <h3>
                                                <a href="tel:+91-7007729873">
                                                    +91-7007729873
                                                </a><br>
                                                <a href="tel: +91-7860563231">
                                                    +91-7860563231
                                                </a>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="contact-info style2 border-none">
                                        <div class="icon">
                                            <i class="fa-regular fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <h3>
                                                <a
                                                    href="mailto:consult@avconexpo.com"><span>consult@avconexpo.com</span></a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Brand Section S T A R T -->
    <div class="brand-section section-padding pt-5 fix">
        <div class="brand-wrapper style1">
            <div class="container">
                <div class="brand-title mb-5">
                    <h2>Our Clients</h2>
                </div>
                <div class="slider-area brandSliderOne">
                    <div class="swiper gt-slider" id="BrandSliderTwo"
                        data-slider-options='{"loop": true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":2},"768":{"slidesPerView":2},"992":{"slidesPerView":3},"1200":{"slidesPerView":4}}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="brand-logo-box">
                                    <a href="#">
                                        <img class="original" src="assets/img/brand/1.png" alt="Brand Logo">
                                        <img class="gray" src="assets/img/brand/1.png" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo-box">
                                    <a href="#">
                                        <img class="original" src="assets/img/brand/2.png" alt="Brand Logo">
                                        <img class="gray" src="assets/img/brand/2.png" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo-box">
                                    <a href="#">
                                        <img class="original" src="assets/img/brand/3.png" alt="Brand Logo">
                                        <img class="gray" src="assets/img/brand/3.png" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo-box">
                                    <a href="#">
                                        <img class="original" src="assets/img/brand/4.png" alt="Brand Logo">
                                        <img class="gray" src="assets/img/brand/4.png" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo-box">
                                    <a href="#">
                                        <img class="original" src="assets/img/brand/5.png" alt="Brand Logo">
                                        <img class="gray" src="assets/img/brand/5.png" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo-box">
                                    <a href="#">
                                        <img class="original" src="assets/img/brand/6.png" alt="Brand Logo">
                                        <img class="gray" src="assets/img/brand/6.png" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo-box">
                                    <a href="#">
                                        <img class="original" src="assets/img/brand/7.png" alt="Brand Logo">
                                        <img class="gray" src="assets/img/brand/7.png" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo-box">
                                    <a href="#">
                                        <img class="original" src="assets/img/brand/8.png" alt="Brand Logo">
                                        <img class="gray" src="assets/img/brand/8.png" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Testimonial Section S T A R T -->
    <section class="testimonial-section bg-color1 fix">
        <div class="container">
            <div class="testimonial-wrapper style3">
                <div class="row g-5">
                    <div class="col-xl-5 col-lg-6">
                        <div class="testimonial-thumb">
                            <div class="thumb">
                                <img src="assets/img/testimonial/testimonialThumb3_1.jpg" alt="thumb"
                                    class="wow img-custom-anim-left">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="slider-area testimonialSliderThree section-padding fix">
                            <div class="section-title text-left mxw-412">
                                <span class="subtitle wow fadeInUp"><img src="assets/img/icon/subTitleIcon.svg"
                                        alt="icon">Clients Feedback</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">Some Of Our Respected Happy Clients Says
                                </h2>
                            </div>

                            <div class="swiper gt-slider" id="testimonialSliderThree"
                                data-slider-options='{"loop": true,"autoplay": false,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":1},"768":{"slidesPerView":1},"992":{"slidesPerView":1},"1200":{"slidesPerView":2}}}'>
                                <div class="swiper-wrapper">
                                    <?php
									$result = $con->query("SELECT paragraph, name, address, image FROM add_price");
									?>
                                    <?php while ($row = $result->fetch_assoc()): ?>
                                    <div class="swiper-slide">
                                        <div class="testimonial-card style3">
                                            <div class="testimonial-header">
                                                <div class="profile">
                                                    <div class="thumb">
                                                        <img src="admin/testimonials_uploads/<?php echo htmlspecialchars($row['image']); ?>"
                                                            alt="thumb" width="100px">
                                                    </div>
                                                    <div class="content">
                                                        <div class="name"><?php echo htmlspecialchars($row['name']); ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="testimonial-content">
                                                <p class="text">
                                                <?php echo htmlspecialchars($row['paragraph']); ?>
                                                </p>

                                                <div class="icon-wrapper">
                                                    <div class="star">
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endwhile; ?>
                                </div>

                                <div class="arrow-btn text-end wow fadeInUp" data-wow-delay=".4s">
                                    <button data-slider-prev="#testimonialSliderThree"
                                        class="slider-arrow slider-prev"><i
                                            class="fa-sharp fa-regular fa-arrow-left-long"></i></button>
                                    <button data-slider-next="#testimonialSliderThree"
                                        class="slider-arrow slider-next"><i
                                            class="fa-regular fa-arrow-right-long"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Blog Section S T A R T -->
    <div class="blog-section">
        <div class="blog-container-wrapper style2 section-padding fix">
            <div class="container">
                <div class="blog-wrapper style2">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-xl-6">
                            <div class="section-title text-start">
                                <span class="subtitle wow fadeInUp"><img src="assets/img/icon/subTitleIcon.svg"
                                        alt="icon" />Our Blog</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                   Our Latest Blog
                                </h2>
                            </div>
                        </div>
                        <div class="col-xl-6 d-flex justify-content-lg-end">
                            <div class="btn-wrapper wow fadeInUp" data-wow-delay="0.3s">
                                <a class="theme-btn" href="https://auctest.rf.gd/avconexpo_test/blogs.php">
                                    Read More
                                    <i class="fa-sharp fa-regular fa-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php
                        include('db_con.php'); 

                        $sql = "SELECT DISTINCT blogs.id, blogs.blog_heading AS heading, blogs.blog_desc_first, blogs.blog_url, blogs.created_at, 
                        (SELECT image FROM blogs_images WHERE blogs_images.blog_id = blogs.id LIMIT 1) AS image 
                        FROM blogs ORDER BY blogs.id DESC LIMIT 6";

                        $result = $con->query($sql);
                        $blogs = [];

                        while ($row = $result->fetch_assoc()) {
                            $blogs[] = $row;
                        }
                    ?>

                    <div class="row">
                        <?php if (empty($blogs)): ?>
                          
                            <div class="col-12 text-center">
                                <div class="alert alert-warning">
                                    <h4>No blogs found</h4>
                                    
                                </div>
                            </div>
                        <?php else: ?>
                            <?php foreach ($blogs as $index => $blog): ?>
                                <?php
                                $heading = htmlspecialchars($blog['heading']);
                                $image = htmlspecialchars($blog['image']);
                                $blog_desc_first = htmlspecialchars($blog['blog_desc_first']);
                                $blog_url = htmlspecialchars($blog['blog_url']);
                                $created_at = date("F d, Y", strtotime($blog['created_at']));
                                ?>

                                <?php if ($index === 0): ?>
                                    <!-- First Blog (Bigger Card) -->
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="blog-card style5 wow fadeInUp" data-wow-delay="0.3s">
                                            <div class="thumb img-shine">
                                                <a href="blog/<?php echo $blog_url; ?>">
                                                    <img src="blog/blog_uploads/<?php echo $image; ?>" alt="thumb" />
                                                </a>
                                            </div>
                                            <div class="blog-content">
                                                <div class="blog-meta-wrapper">
                                                    <div class="tag"><a href="blog/<?php echo $blog_url; ?>">business</a></div>
                                                    <div class="blog-meta">
                                                        <div class="date">
                                                            <img src="assets/img/icon/calendarIcon1_1.svg" alt="icon" /><?= $created_at; ?>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                                <h4><a href="blog/<?php echo $blog_url; ?>"><?= $heading; ?></a></h4>
                                                <p class="text"><?= substr($blog_desc_first, 0, 100); ?>...</p>
                                                <div class="link-meta">
                                                    <a href="blog/<?php echo $blog_url; ?>">Read more <i class="fa-regular fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <!-- Other Blogs (Smaller Cards) -->
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="blog-card style6 mb-30 wow fadeInUp" data-wow-delay="0.5s">
                                            <div class="thumb img-shine">
                                                <a href="blog/<?php echo $blog_url; ?>">
                                                    <img src="<blog/blog_uploads/<?php echo $image; ?>" alt="thumb" />
                                                </a>
                                            </div>
                                            <div class="blog-content">
                                                <div class="tag"><a href="blog/<?php echo $blog_url; ?>">business</a></div>
                                                <h4><a href="blog/<?php echo $blog_url; ?>"><?= $heading; ?></a></h4>
                                                <div class="blog-meta">
                                                    <div class="date">
                                                        <img src="assets/img/icon/calendarIcon1_1.svg" alt="icon" /> October 19, 2024
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section    S T A R T -->
   <?php
        include('footer.php');
   ?>

    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!--<< Bootstrap Js >>-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--<< Waypoints Js >>-->
    <script src="assets/js/jquery.waypoints.js"></script>
    <!--<< Counterup Js >>-->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!--<< Viewport Js >>-->
    <script src="assets/js/viewport.jquery.js"></script>
    <!--<< Tilt Js >>-->
    <script src="assets/js/tilt.min.js"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!--<< MeanMenu Js >>-->
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <!--<< Magnific popup Js >>-->
    <script src="assets/js/magnific-popup.min.js"></script>
    <!--<< Wow Animation Js >>-->
    <script src="assets/js/wow.min.js"></script>
    <!--<< Splitting Animation Js >>-->
    <script src="assets/js/splitting.js"></script>
    <!--<< NIce Select Js >>-->
    <script src="assets/js/nice-select.min.js"></script>

    <!--<< Main.js >>-->
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    
   <script>
       
        var input = document.querySelector("#phone");
        var iti = window.intlTelInput(input, {
            initialCountry: "in",
            separateDialCode: true,
            preferredCountries: ["in", "us", "gb", "ca"],
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
        });

        $(document).ready(function() {
            $('#enquiryForm').submit(function(e) {
                e.preventDefault(); 
                var fullPhoneNumber = iti.getNumber();
                var formData = $(this).serialize() + "&phone=" + encodeURIComponent(fullPhoneNumber);

                $.ajax({
                    url: 'save_contact.php',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        if (response == 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Message Sent!',
                                text: 'Your message has been sent successfully.',
                            }).then(function() {
                                $('#enquiryForm')[0].reset();
                                iti.setNumber(""); 
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Something went wrong. Please try again later.',
                            });
                        }
                    },
                    error: function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong. Please try again later.',
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>