<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <?php include "../../includes/header.php"; ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../../public\css\bootstrap.rtl.min.css">

    <link rel="stylesheet" href="../../public\css\owl.theme.default.min.css">

    <link rel="stylesheet" href="../../public\css\owl.carousel.min.css">

    <link rel="stylesheet" href="../../public\css\magnific-popup.min.css">

    <link rel="stylesheet" href="../../public\css\animate.min.css">

    <link rel="stylesheet" href="../../public\css\boxicons.min.css">

    <link rel="stylesheet" href="../../public\css\flaticon.css">

    <link rel="stylesheet" href="../../public\css\meanmenu.min.css">

    <link rel="stylesheet" href="../../public\css\nice-select.min.css">

    <link rel="stylesheet" href="../../public\css\odometer.min.css">

    <link rel="stylesheet" href="../../public\css\style.css">

    <link rel="stylesheet" href="../../public\css\dark.css">

    <link rel="stylesheet" href="../../public\css\responsive.css">

    <link rel="icon" type="image/png" href="public\img\favicon.png">

    <title>Eduon - Online Courses & Training HTML Template</title>
</head>

<body>

    <div class="loader-wrapper">
        <div class="loader">
            <div class="dot-wrap">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </div>


    <!-- Modal start -->
    <div class="modal-newsletter-area">
        <div class="modal fade" id="exampleModal" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-bs-dismiss="modal">
                        <i class="bx bx-x"></i>
                    </button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5 col-sm-5 p-0">
                                <div class="newsletter-img">
                                    <img src="../../public\img\newsletter-img.jpg" alt="Image">
                                </div>
                            </div>
                            <div class="col-lg-7 col-sm-7 pl-0">
                                <div class="modal-newsletter-wrap">
                                    <h3>Subscribe to our newsletter</h3>
                                    <p>Sign up for our mailing list to get the latest updates & offers.</p>
                                    <form class="newsletter-form" data-toggle="validator">
                                        <input type="email" class="form-control" placeholder="Enter email address"
                                            name="EMAIL" required="" autocomplete="off">
                                        <button class="default-btn" type="submit">
                                            Subscribe Now
                                        </button>
                                        <div id="validator-newsletter-2" class="form-result"></div>
                                        <div class="agree-label">
                                            <input type="checkbox" id="chb1">
                                            <label for="chb1">
                                                Do not show this popup again
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->


    <!-- Navbar start -->
    <div class="navbar-area">

        <div class="mobile-nav">
            <a href="../../index.php" class="logo">
                <img src="../../public\img\logo.png" class="main-logo" alt="Logo">
                <img src="../../public\img\logo-2.png" class="white-logo" alt="Logo">
            </a>
        </div>

        <div class="main-nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md">
                    <a class="navbar-brand" href="../../index.php">
                        <img src="../../public\img\logo.png" class="main-logo" alt="Logo">
                        <img src="../../public\img\logo-2.png" class="white-logo" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="../../index.php" class="nav-link active">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="courses.php" class="nav-link">
                                    Courses
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="gallery.php" class="nav-link">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a href="events.php" class="nav-link">Events</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Shop
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="shop.php" class="nav-link">Shop</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="wishlist.php" class="nav-link">Wishlist</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="contact.php" class="nav-link">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a href="about.php" class="nav-link">About</a>
                            </li>
                            <!-- User should move to login botton when user login -->
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    User
                                    <i class="bx bx-chevron-right"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="my-account.php" class="nav-link">My Account</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="log-in.php" class="nav-link">Log In</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="registration.php" class="nav-link">Registration</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="recover-password.php" class="nav-link">Recover Password</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- ********************************************************************************** -->
                        </ul>

                        <div class="others-option">
                            <div class="option-item">
                                <i class="search-btn bx bx-search"></i>
                                <i class="close-btn bx bx-x"></i>
                                <div class="search-overlay search-popup">
                                    <div class="search-box">
                                        <form class="search-form">
                                            <input class="search-input" name="search" placeholder="Search" type="text">
                                            <button class="search-button" type="submit"><i
                                                    class="bx bx-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-icon">
                                <a href="cart.php">
                                    <i class="flaticon-shopping-cart"></i>
                                    <span>0</span>
                                </a>
                            </div>
                            <div class="register">
                                <a href="my-account.php" class="default-btn">
                                    Login / Register
                                </a>
                            </div>
                        </div>

                    </div>
                </nav>
            </div>
        </div>

        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="option-inner">
                        <div class="others-option justify-content-center d-flex align-items-center">
                            <div class="option-item">
                                <i class="search-btn bx bx-search"></i>
                                <i class="close-btn bx bx-x"></i>
                                <div class="search-overlay search-popup">
                                    <div class="search-box">
                                        <form class="search-form">
                                            <input class="search-input" name="search" placeholder="Search" type="text">
                                            <button class="search-button" type="submit"><i
                                                    class="bx bx-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-icon">
                                <a href="cart.php">
                                    <i class="flaticon-shopping-cart"></i>
                                    <span>0</span>
                                </a>
                            </div>
                            <div class="register">
                                <a href="my-account.php" class="default-btn">
                                    Login / Register
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Navbar end -->


    <section class="banner-area-three jarallax" data-jarallax="{&quot;speed&quot;: 0.3}">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container-fluid social">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="banner-content">
                                <h1 class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.3s">Get 100%
                                    free online courses</h1>
                                <p class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.6s">Lorem ipsum
                                    dolor sit amet consectetur adipisicing elit. Voluptas architecto doloremque fugiat!
                                    Tempora, molestias minus mollitia optio laboriosam nulla</p>
                                <a href="courses.php" class="default-btn wow animate__animated animate__fadeInLeft"
                                    data-wow-delay="0.9s">
                                    View Courses
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="enroll-wrap wow animate__animated animate__fadeInRight" data-wow-delay="0.3s">
                                <div class="courses-title">
                                    <span>Need any Courses</span>
                                    <h3>Enroll Now</h3>
                                </div>
                                <form class="courses-form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="Name" placeholder="Your name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" placeholder="Your email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="Number" placeholder="Phone Number">
                                    </div>
                                    <div class="form-group">
                                        <select>
                                            <option value="">Courses Type</option>
                                            <option value="">Courses Type 1</option>
                                            <option value="">Courses Type 2</option>
                                            <option value="">Courses Type 3</option>
                                            <option value="">Courses Type 4</option>
                                            <option value="">Courses Type 5</option>
                                            <option value="">Courses Type 6</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="default-btn">
                                        Apply
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="categories-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Categories</span>
                <h2>Course categories</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-categories">
                        <img src="../../public\img\categories-img\categories-img-1.jpg" alt="Image">
                        <div class="categories-content-wrap">
                            <div class="categories-content">
                                <a href="courses.php">
                                    <h3>Design</h3>
                                </a>
                                <span>Over 200+ courses</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-categories">
                        <img src="../../public\img\categories-img\categories-img-2.jpg" alt="Image">
                        <div class="categories-content-wrap">
                            <div class="categories-content">
                                <a href="courses.php">
                                    <h3>Development</h3>
                                </a>
                                <span>Over 300 courses</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-categories">
                        <img src="../../public\img\categories-img\categories-img-3.jpg" alt="Image">
                        <div class="categories-content-wrap">
                            <div class="categories-content">
                                <a href="courses.php">
                                    <h3>Business</h3>
                                </a>
                                <span>Over 150 courses</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-categories">
                        <img src="../../public\img\categories-img\categories-img-4.jpg" alt="Image">
                        <div class="categories-content-wrap">
                            <div class="categories-content">
                                <a href="courses.php">
                                    <h3>Marketing</h3>
                                </a>
                                <span>Over 200+ courses</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-categories">
                        <img src="../../public\img\categories-img\categories-img-5.jpg" alt="Image">
                        <div class="categories-content-wrap">
                            <div class="categories-content">
                                <a href="courses.php">
                                    <h3>IT & Software</h3>
                                </a>
                                <span>Over 250 courses</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-categories">
                        <img src="../../public\img\categories-img\categories-img-6.jpg" alt="Image">
                        <div class="categories-content-wrap">
                            <div class="categories-content">
                                <a href="courses.php">
                                    <h3>Data Science</h3>
                                </a>
                                <span>Over 50 courses</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-categories">
                        <img src="../../public\img\categories-img\categories-img-7.jpg" alt="Image">
                        <div class="categories-content-wrap">
                            <div class="categories-content">
                                <a href="courses.php">
                                    <h3>Photography</h3>
                                </a>
                                <span>Over 700 courses</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-categories">
                        <img src="../../public\img\categories-img\categories-img-8.jpg" alt="Image">
                        <div class="categories-content-wrap">
                            <div class="categories-content">
                                <a href="courses.php">
                                    <h3>Music</h3>
                                </a>
                                <span>Over 150 courses</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="text-center">
                        <a href="courses.php" class="default-btn">All Catagories</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="tutor-area pt-100 pb-70 jarallax" data-jarallax="{&quot;speed&quot;: 0.3}">
        <div class="container">
            <div class="section-title white-title">
                <span>Our Tutor</span>
                <h2>How can I help you?</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-tutor">
                        <i class="flaticon-instructor-1"></i>
                        <h3>Face to face learning</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-tutor">
                        <i class="flaticon-instructor"></i>
                        <h3>Experienced instructor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-tutor">
                        <i class="flaticon-certificate-1"></i>
                        <h3>International certificate</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-tutor">
                        <i class="flaticon-consulting"></i>
                        <h3>Online support 24/7</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="education-area-two ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="education-content">
                        <span class="top-title">Education For All</span>
                        <h2>Why create an online course with <span>EDUON</span>?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida dolor sit amet,
                            consectetur adipiscing elit consectetur.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li>
                                        <i class="bx bx-check"></i>
                                        Unlimited everything
                                    </li>
                                    <li>
                                        <i class="bx bx-check"></i>
                                        No transaction fees
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li>
                                        <i class="bx bx-check"></i>
                                        No technical headaches
                                    </li>
                                    <li>
                                        <i class="bx bx-check"></i>
                                        Free migrations
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="courses.php" class="default-btn">
                            View All Courses
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="education-img-wrap">
                        <div class="education-img-2">
                            <img src="../../public\img\education-img-2.jpg" alt="Image">
                        </div>
                        <div class="education-img-3">
                            <img src="../../public\img\education-img-3.jpg" alt="Image">
                        </div>
                        <div class="education-img-4">
                            <img src="../../public\img\education-img-4.jpg" alt="Image">
                        </div>
                        <div class="education-shape-1">
                            <img src="../../public\img\education-shape-1.jpg" alt="Image">
                        </div>
                        <div class="education-shape-2">
                            <img src="../../public\img\education-shape-2.png" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="courses-area-three ptb-100 jarallax" data-jarallax="{&quot;speed&quot;: 0.3}">
        <div class="container">
            <div class="section-title white-title">
                <span>Popular Courses</span>
                <h2>Popular online courses</h2>
            </div>
            <div class="courses-slider-three owl-theme owl-carousel">
                <div class="single-course">
                    <a href="single-course.php">
                        <img src="../../public\img\course-img\course-img-1.jpg" alt="Image">
                    </a>
                    <div class="course-content">
                        <span class="price">$35</span>
                        <span class="tag">Education</span>
                        <a href="single-course.php">
                            <h3>Programming foundations: real-world examples</h3>
                        </a>
                        <ul class="rating">
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                        </ul>
                        <ul class="lessons">
                            <li>0 Lessons</li>
                            <li class="float">44 Students</li>
                        </ul>
                    </div>
                </div>
                <div class="single-course">
                    <a href="single-course.php">
                        <img src="../../public\img\course-img\course-img-2.jpg" alt="Image">
                    </a>
                    <div class="course-content">
                        <span class="price">$39</span>
                        <span class="tag">School</span>
                        <a href="single-course.php">
                            <h3>Teaching assistant certificate in learning in schools</h3>
                        </a>
                        <ul class="rating">
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                        </ul>
                        <ul class="lessons">
                            <li>0 Lessons</li>
                            <li class="float">44 Students</li>
                        </ul>
                    </div>
                </div>
                <div class="single-course">
                    <a href="single-course.php">
                        <img src="../../public\img\course-img\course-img-3.jpg" alt="Image">
                    </a>
                    <div class="course-content">
                        <span class="price">$29</span>
                        <span class="tag">Language</span>
                        <a href="single-course.php">
                            <h3>English: spelling, punctuation and grammar</h3>
                        </a>
                        <ul class="rating">
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                        </ul>
                        <ul class="lessons">
                            <li>0 Lessons</li>
                            <li class="float">39 Students</li>
                        </ul>
                    </div>
                </div>
                <div class="single-course">
                    <a href="single-course.php">
                        <img src="../../public\img\course-img\course-img-4.jpg" alt="Image">
                    </a>
                    <div class="course-content">
                        <span class="price">$49</span>
                        <span class="tag">Teaching</span>
                        <a href="single-course.php">
                            <h3>Introduction to cybersecurity for teachers</h3>
                        </a>
                        <ul class="rating">
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                        </ul>
                        <ul class="lessons">
                            <li>0 Lessons</li>
                            <li class="float">50 Students</li>
                        </ul>
                    </div>
                </div>
                <div class="single-course">
                    <a href="single-course.php">
                        <img src="../../public\img\course-img\course-img-5.jpg" alt="Image">
                    </a>
                    <div class="course-content">
                        <span class="price">$39</span>
                        <span class="tag">Teaching</span>
                        <a href="single-course.php">
                            <h3>Learning Implementing Formative Assessment</h3>
                        </a>
                        <ul class="rating">
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                        </ul>
                        <ul class="lessons">
                            <li>0 Lessons</li>
                            <li class="float">44 Students</li>
                        </ul>
                    </div>
                </div>
                <div class="single-course">
                    <a href="single-course.php">
                        <img src="../../public\img\course-img\course-img-1.jpg" alt="Image">
                    </a>
                    <div class="course-content">
                        <span class="price">$59</span>
                        <span class="tag">Education</span>
                        <a href="single-course.php">
                            <h3>Teaching languages in primary schools: putting research</h3>
                        </a>
                        <ul class="rating">
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                        </ul>
                        <ul class="lessons">
                            <li>0 Lessons</li>
                            <li class="float">44 Students</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="teachers-area-three pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Course Instructors</span>
                <h2>Our international teachers</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-teachers">
                        <img src="../../public\img\teachers-img\teachers-img-1.jpg" alt="Image">
                        <div class="teachers-content">
                            <ul>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank"><i
                                            class="bx bxl-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank"><i
                                            class="bx bxl-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank"><i
                                            class="bx bxl-linkedin-square"></i></a>
                                </li>
                            </ul>
                            <h3>Earl McGowan</h3>
                            <span>IT & Software</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-teachers">
                        <img src="../../public\img\teachers-img\teachers-img-2.jpg" alt="Image">
                        <div class="teachers-content">
                            <ul>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank"><i
                                            class="bx bxl-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank"><i
                                            class="bx bxl-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank"><i
                                            class="bx bxl-linkedin-square"></i></a>
                                </li>
                            </ul>
                            <h3>Chris Miller</h3>
                            <span>Mathematic</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-teachers">
                        <img src="../../public\img\teachers-img\teachers-img-3.jpg" alt="Image">
                        <div class="teachers-content">
                            <ul>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank"><i
                                            class="bx bxl-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank"><i
                                            class="bx bxl-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank"><i
                                            class="bx bxl-linkedin-square"></i></a>
                                </li>
                            </ul>
                            <h3>Mark Dent</h3>
                            <span>Programmer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-teachers">
                        <img src="../../public\img\teachers-img\teachers-img-4.jpg" alt="Image">
                        <div class="teachers-content">
                            <ul>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank"><i
                                            class="bx bxl-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank"><i
                                            class="bx bxl-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank"><i
                                            class="bx bxl-linkedin-square"></i></a>
                                </li>
                            </ul>
                            <h3>Lena Bodie</h3>
                            <span>English</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="feature-area">
        <div class="container">
            <div class="feature-wrap-two jarallax" data-jarallax="{&quot;speed&quot;: 0.3}">
                <div class="row m-0">
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-feature">
                            <i class="flaticon-online"></i>
                            <h3>Go at your own course</h3>
                            <p>Enjoy lifetime access to courses on Eduon website</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-feature">
                            <i class="flaticon-expert"></i>
                            <h3>Learn from our experts</h3>
                            <p>Enjoy lifetime access to courses on Eduon website</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                        <div class="single-feature">
                            <i class="flaticon-online-class"></i>
                            <h3>Find video courses</h3>
                            <p>Enjoy lifetime access to courses on Eduon website</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="event-area-three ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title">
                                <span>Education Events</span>
                                <h2>Upcoming events</h2>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-6">
                            <div class="single-event">
                                <a href="single-event.php">
                                    <img src="../../public\img\event-img\event-img-1.png" alt="Image">
                                </a>
                                <div class="event-content">
                                    <ul>
                                        <li>
                                            <i class="bx bx-calendar"></i>
                                            Aug 13, 2020
                                        </li>
                                        <li>
                                            <i class="bx bx-time"></i>
                                            Monday 3:00AM - 5:00PM
                                        </li>
                                    </ul>
                                    <a href="single-event.php">
                                        <h3>Comprehensive literacy and reading recovery conference</h3>
                                    </a>
                                    <span>
                                        <i class="bx bxs-location-plus"></i>
                                        Washington, DC
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-6">
                            <div class="single-event mb-0">
                                <a href="single-event.php">
                                    <img src="../../public\img\event-img\event-img-2.png" alt="Image">
                                </a>
                                <div class="event-content">
                                    <ul>
                                        <li>
                                            <i class="bx bx-calendar"></i>
                                            Sep 14, 2020
                                        </li>
                                        <li>
                                            <i class="bx bx-time"></i>
                                            Monday 4:00AM - 6:00PM
                                        </li>
                                    </ul>
                                    <a href="single-event.php">
                                        <h3>Future of higher education: an invitation to lead</h3>
                                    </a>
                                    <span>
                                        <i class="bx bxs-location-plus"></i>
                                        New Orleans, LA
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="event-img-three">
                        <div class="video-content">
                            <a href="https://www.youtube.com/watch?v=iLS_YP1uEK8" class="video-btn popup-youtube">
                                <i class="flaticon-play-button"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="feedback-area feedback-area-three ptb-100 jarallax" data-jarallax="{&quot;speed&quot;: 0.3}">
        <div class="container">
            <div class="section-title white-title">
                <span>Feedback</span>
                <h2>What student say</h2>
            </div>
            <div class="feedback-slider owl-theme owl-carousel">
                <div class="feedback-item">
                    <i class="flaticon-quotation"></i>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                        sit amet.</p>
                    <div class="feedback-title">
                        <img src="../../public\img\feedback-img\feedback-img-1.jpg" alt="Image">
                        <h3>Jessica Molony</h3>
                        <span>Designer</span>
                    </div>
                </div>
                <div class="feedback-item">
                    <i class="flaticon-quotation"></i>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                        sit amet.</p>
                    <div class="feedback-title">
                        <img src="../../public\img\feedback-img\feedback-img-2.jpg" alt="Image">
                        <h3>Juhon Dew</h3>
                        <span>Marketer </span>
                    </div>
                </div>
                <div class="feedback-item">
                    <i class="flaticon-quotation"></i>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                        sit amet.</p>
                    <div class="feedback-title">
                        <img src="../../public\img\feedback-img\feedback-img-3.jpg" alt="Image">
                        <h3>Kilva Smith</h3>
                        <span>Designer</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="news-area-two pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Our News</span>
                <h2>Explore recent news</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-news">
                        <a href="single-blog.php">
                            <img src="../../public\img\news-img\news-img-5.jpg" alt="Image">
                        </a>
                        <div class="news-content">
                            <span class="tag">Career Advice</span>
                            <a href="single-blog.php">
                                <h3>Leading the way with lifelong learning</h3>
                            </a>
                            <ul class="lessons">
                                <li>By: <a href="single-blog.php">Admin</a></li>
                                <li class="float">Posted aon 13/07/2020</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news">
                        <a href="single-blog.php">
                            <img src="../../public\img\news-img\news-img-6.jpg" alt="Image">
                        </a>
                        <div class="news-content">
                            <span class="tag">Market Trends</span>
                            <a href="single-blog.php">
                                <h3>All Aspire Students are Now Student Card Eligible!</h3>
                            </a>
                            <ul class="lessons">
                                <li>By: <a href="single-blog.php">Admin</a></li>
                                <li class="float">Posted aon 12/07/2020</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="single-news">
                        <a href="single-blog.php">
                            <img src="../../public\img\news-img\news-img-7.jpg" alt="Image">
                        </a>
                        <div class="news-content">
                            <span class="tag">Research</span>
                            <a href="single-blog.php">
                                <h3>Determining the true goal of a good education is difficult.</h3>
                            </a>
                            <ul class="lessons">
                                <li>By: <a href="single-blog.php">Admin</a></li>
                                <li class="float">Posted aon 11/07/2020</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="partner-area f5f6fa-bg-color ptb-100">
        <div class="container">
            <div class="partner-wrap owl-theme owl-carousel">
                <div class="partner-item">
                    <a href="about.php">
                        <img src="../../public\img\partner-logo\partner-logo-1.png" alt="Image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="about.php">
                        <img src="../../public\img\partner-logo\partner-logo-2.png" alt="Image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="about.php">
                        <img src="../../public\img\partner-logo\partner-logo-3.png" alt="Image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="about.php">
                        <img src="../../public\img\partner-logo\partner-logo-4.png" alt="Image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="about.php">
                        <img src="../../public\img\partner-logo\partner-logo-5.png" alt="Image">
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <?php include "../../includes/footer.php"; ?>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="../../public/js/jquery.min.js"></script>

    <script src="../../public/js/bootstrap.bundle.min.js"></script>

    <script src="../../public/js/meanmenu.min.js"></script>

    <script src="../../public/js/owl.carousel.min.js"></script>

    <script src="../../public/js/wow.min.js"></script>

    <script src="../../public/js/nice-select.min.js"></script>

    <script src="../../public/js/magnific-popup.min.js"></script>

    <script src="../../public/js/jarallax.min.js"></script>

    <script src="../../public/js/appear.min.js"></script>

    <script src="../../public/js/odometer.min.js"></script>

    <script src="../../public/js/form-validator.min.js"></script>

    <script src="../../public/js/contact-form-script.js"></script>

    <script src="../../public/js/ajaxchimp.min.js"></script>

    <script src="../../public/js/custom.js"></script>
</body>

</html>