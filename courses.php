<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <?php include "./assets/includes/header.php" ?>

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


    <div class="navbar-area">

        <div class="mobile-nav">
            <a href="index.php" class="logo">
                <img src="assets\img\logo.png" class="main-logo" alt="Logo">
                <img src="assets\img\logo-2.png" class="white-logo" alt="Logo">
            </a>
        </div>

        <div class="main-nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md">
                    <a class="navbar-brand" href="index.php">
                        <img src="assets\img\logo.png" class="main-logo" alt="Logo">
                        <img src="assets\img\logo-2.png" class="white-logo" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Home
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="index.php" class="nav-link">Home One</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-2.php" class="nav-link">Home Two</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-3.php" class="nav-link">Home Three</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    Courses
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="courses.php" class="nav-link active">Courses</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="single-course.php" class="nav-link">Single Course</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Pages
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="about.php" class="nav-link">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="feedback.php" class="nav-link">Feedback</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Events
                                            <i class="bx bx-chevron-right"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="events.php" class="nav-link">Events</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="single-event.php" class="nav-link">Single Event</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="instructors.php" class="nav-link">Instructors</a>
                                    </li>
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
                                    <li class="nav-item">
                                        <a href="gallery.php" class="nav-link">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="faq.php" class="nav-link">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="privacy-policy.php" class="nav-link">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="terms-conditions.php" class="nav-link">Terms & Conditions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="coming-soon.php" class="nav-link">Coming Soon</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="404.php" class="nav-link">404 Error Page</a>
                                    </li>
                                </ul>
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
                                        <a href="cart.php" class="nav-link">Cart</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="checkout.php" class="nav-link">Checkout</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="single-product.php" class="nav-link">Single Product</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="wishlist.php" class="nav-link">Wishlist</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Blog
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="blog-column-one.php" class="nav-link">Blog Column One</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-column-two.php" class="nav-link">Blog Column Two</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-column-three.php" class="nav-link">Blog Column Three</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-left-sidebar.php" class="nav-link">Blog Left Sidebar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="single-blog.php" class="nav-link">Single Blog</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="contact.php" class="nav-link">Contact</a>
                            </li>
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


    <div class="page-title-area bg-4">
        <div class="container">
            <div class="page-title-content">
                <h2>Courses</h2>
                <ul>
                    <li>
                        <a href="index.php">
                            Home
                        </a>
                    </li>
                    <li class="active">courses</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="courses-area-style ptb-100">
        <div class="container">
            <div class="showing-result">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-4">
                        <div class="showing-result-count">
                            <p>Showing 1-8 of 14 results</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="showing-top-bar-ordering">
                            <select>
                                <option value="1">Default sorting</option>
                                <option value="2">Education</option>
                                <option value="0">Accounting</option>
                                <option value="3">Language</option>
                                <option value="4">Teaching</option>
                                <option value="5">Research</option>
                                <option value="5">Assessment</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <form class="search-form">
                            <input class="form-control" name="search" placeholder="Search our courses" type="text">
                            <button class="search-btn" type="submit">
                                <i class="bx bx-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-course">
                        <a href="single-course.php">
                            <img src="assets\img\course-img\course-img-1.jpg" alt="Image">
                        </a>
                        <div class="course-content">
                            <span class="price">$39</span>
                            <span class="tag">Education</span>
                            <a href="single-course.php">
                                <h3>Developing strategies for online teaching and learning</h3>
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
                                <li>
                                    <span>0.5</span>
                                    <a href="single-course.php">(1 rating)</a>
                                </li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adip iscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. </p>
                            <ul class="lessons">
                                <li>0 Lessons</li>
                                <li class="float">44 Students</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-course">
                        <a href="single-course.php">
                            <img src="assets\img\course-img\course-img-2.jpg" alt="Image">
                        </a>
                        <div class="course-content">
                            <span class="price">$59</span>
                            <span class="tag">Accounting</span>
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
                                <li>
                                    <span>0.5</span>
                                    <a href="single-course.php">(3 rating)</a>
                                </li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adip iscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. </p>
                            <ul class="lessons">
                                <li>0 Lessons</li>
                                <li class="float">24 Students</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-course">
                        <a href="single-course.php">
                            <img src="assets\img\course-img\course-img-3.jpg" alt="Image">
                        </a>
                        <div class="course-content">
                            <span class="price">$29</span>
                            <span class="tag">Language</span>
                            <a href="single-course.php">
                                <h3>English: spelling, punctuation, and grammar</h3>
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
                                <li>
                                    <span>0.5</span>
                                    <a href="single-course.php">(5 rating)</a>
                                </li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adip iscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. </p>
                            <ul class="lessons">
                                <li>0 Lessons</li>
                                <li class="float">39 Students</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-course">
                        <a href="single-course.php">
                            <img src="assets\img\course-img\course-img-4.jpg" alt="Image">
                        </a>
                        <div class="course-content">
                            <span class="price">$49</span>
                            <span class="tag">Teaching</span>
                            <a href="single-courses.php">
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
                                <li>
                                    <span>0.5</span>
                                    <a href="single-course.php">(2 rating)</a>
                                </li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adip iscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. </p>
                            <ul class="lessons">
                                <li>0 Lessons</li>
                                <li class="float">50 Students</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-course">
                        <a href="single-course.php">
                            <img src="assets\img\course-img\course-img-5.jpg" alt="Image">
                        </a>
                        <div class="course-content">
                            <span class="price">$39</span>
                            <span class="tag">Teaching</span>
                            <a href="single-course.php">
                                <h3>Learning implementing formative assessment</h3>
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
                                <li>
                                    <span>0.5</span>
                                    <a href="single-course.php">(1 rating)</a>
                                </li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adip iscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. </p>
                            <ul class="lessons">
                                <li>0 Lessons</li>
                                <li class="float">44 Students</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-course">
                        <a href="single-course.php">
                            <img src="assets\img\course-img\course-img-6.jpg" alt="Image">
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
                                <li>
                                    <span>0.5</span>
                                    <a href="single-course.php">(3 rating)</a>
                                </li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adip iscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. </p>
                            <ul class="lessons">
                                <li>0 Lessons</li>
                                <li class="float">44 Students</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="pagination-area">

                        <span class="page-numbers current" aria-current="page">1</span>
                        <a href="courses.php" class="page-numbers">2</a>
                        <a href="courses.php" class="page-numbers">3</a>
                        <a href="courses.php" class="page-numbers">4</a>
                        <a href="courses.php" class="next page-numbers">
                            <i class="bx bx-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer-top-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <h3>Find Us</h3>
                        <ul class="address">
                            <li class="location">
                                <i class="bx bxs-location-plus"></i>
                                6890 Blvd, The Bronx, NY 1058 New York, USA
                            </li>
                            <li>
                                <i class="bx bxs-envelope"></i>
                                <a href="/cdn-cgi/l/email-protection#c3aba6afafac83a6a7b6acadeda0acae"><span
                                        class="__cf_email__"
                                        data-cfemail="aac2cfc6c6c5eacfcedfc5c484c9c5c7">[email&#160;protected]</span></a>
                                <a href="/cdn-cgi/l/email-protection#c9b9bcaba5a0aa89acadbca6a7e7aaa6a4"><span
                                        class="__cf_email__"
                                        data-cfemail="017174636d6862416465746e6f2f626e6c">[email&#160;protected]</span></a>
                            </li>
                            <li>
                                <i class="bx bxs-phone-call"></i>
                                <a href="tel:+1(514)312-5678">+1 (514) 312-5678</a>
                                <a href="tel:+1(514)312-6688">+1 (514) 312-6688</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <h3>Useful links</h3>
                        <ul class="link">
                            <li>
                                <a href="courses.php">All Courses</a>
                            </li>
                            <li>
                                <a href="about.php">About us</a>
                            </li>
                            <li>
                                <a href="faq.php">Help (FAQ)</a>
                            </li>
                            <li>
                                <a href="terms-conditions.php">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="privacy-policy.php">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <h3>Top online courses</h3>
                        <ul class="link">
                            <li>
                                <a href="courses.php">AI for everyone</a>
                            </li>
                            <li>
                                <a href="courses.php">Networks and deep learning</a>
                            </li>
                            <li>
                                <a href="courses.php">Learning with python</a>
                            </li>
                            <li>
                                <a href="courses.php">Financial markets</a>
                            </li>
                            <li>
                                <a href="courses.php">Speak English professionally</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <h3>Popular subjects</h3>
                        <ul class="link">
                            <li>
                                <a href="courses.php">Data science</a>
                            </li>
                            <li>
                                <a href="courses.php">Computer science</a>
                            </li>
                            <li>
                                <a href="courses.php">Business and Management</a>
                            </li>
                            <li>
                                <a href="courses.php">Business and Management</a>
                            </li>
                            <li>
                                <a href="courses.php">Nature & Environment</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <footer class="footer-bottom-area">
        <div class="container">
            <div class="copyright-wrap">
                <p>© Eduon is Proudly Owned by <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a></p>
            </div>
        </div>
    </footer>


    <div class="go-top">
        <i class="bx bx-chevrons-up"></i>
        <i class="bx bx-chevrons-up"></i>
    </div>


    <?php include "assets/includes/footer.php" ?>
</body>

</html>