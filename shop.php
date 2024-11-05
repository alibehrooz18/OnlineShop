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
                                <a href="#" class="nav-link">
                                    Courses
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="courses.php" class="nav-link">Courses</a>
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
                                <a href="#" class="nav-link active">
                                    Shop
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="shop.php" class="nav-link active">Shop</a>
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


    <div class="page-title-area bg-19">
        <div class="container">
            <div class="page-title-content">
                <h2>Shop</h2>
                <ul>
                    <li>
                        <a href="index.php">
                            Home
                        </a>
                    </li>
                    <li class="active">Shop</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="shop-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shop-card-wrap">
                        <div class="showing-result">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="showing-result-count">
                                        <p>Showing 1-8 of 14 results</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
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
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-shop">
                                    <div class="shop-img">
                                        <img src="assets\img\shop\shop-img-1.jpg" alt="Image">
                                        <ul>
                                            <li>
                                                <a href="#product-view-one" data-bs-toggle="modal">
                                                    <i class="bx bx-show-alt"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="cart.php">
                                                    <i class="bx bx-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3>Der liege augustine</h3>
                                    <span> <del>$49.00</del> $39.00</span>
                                    <a href="cart.php" class="default-btn">
                                        Add to cart
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-shop">
                                    <div class="shop-img">
                                        <img src="assets\img\shop\shop-img-2.jpg" alt="Image">
                                        <ul>
                                            <li>
                                                <a href="#product-view-one" data-bs-toggle="modal">
                                                    <i class="bx bx-show-alt"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="cart.php">
                                                    <i class="bx bx-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3>EGO ias the enemy</h3>
                                    <span> <del>$79.00</del> $59.00</span>
                                    <a href="cart.php" class="default-btn">
                                        Add to cart
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-shop">
                                    <div class="shop-img">
                                        <img src="assets\img\shop\shop-img-3.jpg" alt="Image">
                                        <ul>
                                            <li>
                                                <a href="#product-view-one" data-bs-toggle="modal">
                                                    <i class="bx bx-show-alt"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="cart.php">
                                                    <i class="bx bx-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3>Der liege augustine</h3>
                                    <span>$59.00</span>
                                    <a href="cart.php" class="default-btn">
                                        Add to cart
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-shop">
                                    <div class="shop-img">
                                        <img src="assets\img\shop\shop-img-4.jpg" alt="Image">
                                        <ul>
                                            <li>
                                                <a href="#product-view-one" data-bs-toggle="modal">
                                                    <i class="bx bx-show-alt"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="cart.php">
                                                    <i class="bx bx-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3>Failed IT!</h3>
                                    <span> <del>$49.00</del> $39.00</span>
                                    <a href="cart.php" class="default-btn">
                                        Add to cart
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-shop">
                                    <div class="shop-img">
                                        <img src="assets\img\shop\shop-img-5.jpg" alt="Image">
                                        <ul>
                                            <li>
                                                <a href="#product-view-one" data-bs-toggle="modal">
                                                    <i class="bx bx-show-alt"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="cart.php">
                                                    <i class="bx bx-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3>E.A.POE</h3>
                                    <span>$49.00</span>
                                    <a href="cart.php" class="default-btn">
                                        Add to cart
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-shop">
                                    <div class="shop-img">
                                        <img src="assets\img\shop\shop-img-6.jpg" alt="Image">
                                        <ul>
                                            <li>
                                                <a href="#product-view-one" data-bs-toggle="modal">
                                                    <i class="bx bx-show-alt"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="cart.php">
                                                    <i class="bx bx-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3>Dior</h3>
                                    <span>$59.00</span>
                                    <a href="cart.php" class="default-btn">
                                        Add to cart
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-shop">
                                    <div class="shop-img">
                                        <img src="assets\img\shop\shop-img-7.jpg" alt="Image">
                                        <ul>
                                            <li>
                                                <a href="#product-view-one" data-bs-toggle="modal">
                                                    <i class="bx bx-show-alt"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="cart.php">
                                                    <i class="bx bx-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3>Your a heart</h3>
                                    <span> <del>$49.00</del> $39.00</span>
                                    <a href="cart.php" class="default-btn">
                                        Add to cart
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-shop">
                                    <div class="shop-img">
                                        <img src="assets\img\shop\shop-img-8.jpg" alt="Image">
                                        <ul>
                                            <li>
                                                <a href="#product-view-one" data-bs-toggle="modal">
                                                    <i class="bx bx-show-alt"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="cart.php">
                                                    <i class="bx bx-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3>Hand cover amockup</h3>
                                    <span>$49.00</span>
                                    <a href="cart.php" class="default-btn">
                                        Add to cart
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                                <div class="single-shop">
                                    <div class="shop-img">
                                        <img src="assets\img\shop\shop-img-9.jpg" alt="Image">
                                        <ul>
                                            <li>
                                                <a href="#product-view-one" data-bs-toggle="modal">
                                                    <i class="bx bx-show-alt"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="cart.php">
                                                    <i class="bx bx-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3>Book cover mockup</h3>
                                    <span>$29.00</span>
                                    <a href="cart.php" class="default-btn">
                                        Add to cart
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="pagination-area">

                                    <span class="page-numbers current" aria-current="page">1</span>
                                    <a href="shop.php" class="page-numbers">2</a>
                                    <a href="shop.php" class="page-numbers">3</a>
                                    <a href="shop.php" class="page-numbers">4</a>
                                    <a href="shop.php" class="next page-numbers">
                                        <i class="bx bx-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget-sidebar">
                        <div class="sidebar-widget search">
                            <form class="search-form">
                                <input class="form-control" name="search" placeholder="Search here" type="text">
                                <button class="search-button" type="submit">
                                    <i class="bx bx-search"></i>
                                </button>
                            </form>
                        </div>
                        <div class="sidebar-widget categories">
                            <h3>Categories</h3>
                            <ul>
                                <li>
                                    <a href="courses.php">Education</a>
                                </li>
                                <li>
                                    <a href="courses.php">Health coaching</a>
                                </li>
                                <li>
                                    <a href="courses.php">Learning</a>
                                </li>
                                <li>
                                    <a href="courses.php">Online</a>
                                </li>
                                <li>
                                    <a href="courses.php">Academics</a>
                                </li>
                                <li>
                                    <a href="courses.php">Admission</a>
                                </li>
                                <li>
                                    <a href="courses.php">Student</a>
                                </li>
                                <li>
                                    <a href="courses.php">Graduation</a>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-widget popular-post">
                            <h3 class="widget-title">Popular Posts</h3>
                            <div class="post-wrap">
                                <div class="item">
                                    <a href="single-blog.php" class="thumb">
                                        <span class="fullimage cover bg1" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <h4 class="title">
                                            <a href="single-blog.php">We will begin to explore the next two levels</a>
                                            <span class="date">20-07-2020</span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="single-blog.php" class="thumb">
                                        <span class="fullimage cover bg2" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <h4 class="title">
                                            <a href="single-blog.php">Determining the true goal of a good education is
                                                difficult.</a>
                                            <span class="date">19-07-2020</span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="single-blog.php" class="thumb">
                                        <span class="fullimage cover bg3" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <h4 class="title">
                                            <a href="single-blog.php">Implementing peer assessment in online group</a>
                                            <span class="date">18-07-2020</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget tags">
                            <h3>Tags</h3>
                            <ul>
                                <li>
                                    <a href="courses.php">Education</a>
                                </li>
                                <li>
                                    <a href="courses.php">College</a>
                                </li>
                                <li>
                                    <a href="courses.php">College</a>
                                </li>
                                <li>
                                    <a href="courses.php">Math</a>
                                </li>
                                <li>
                                    <a href="courses.php">Design</a>
                                </li>
                                <li>
                                    <a href="courses.php">Learning</a>
                                </li>
                                <li>
                                    <a href="courses.php">Learning</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade product-view-one" id="product-view-one">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal">
                    <span aria-hidden="true">
                        <i class="bx bx-x"></i>
                    </span>
                </button>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="product-view-one-image">
                            <div id="big" class="owl-carousel owl-theme">
                                <div class="item">
                                    <img src="assets\img\shop\shop-img-1.jpg" alt="Image">
                                </div>
                                <div class="item">
                                    <img src="assets\img\shop\shop-img-2.jpg" alt="Image">
                                </div>
                                <div class="item">
                                    <img src="assets\img\shop\shop-img-3.jpg" alt="Image">
                                </div>
                                <div class="item">
                                    <img src="assets\img\shop\shop-img-4.jpg" alt="Image">
                                </div>
                                <div class="item">
                                    <img src="assets\img\shop\shop-img-5.jpg" alt="Image">
                                </div>
                                <div class="item">
                                    <img src="assets\img\shop\shop-img-6.jpg" alt="Image">
                                </div>
                            </div>
                            <div id="thumbs" class="owl-carousel owl-theme">
                                <div class="item">
                                    <img src="assets\img\shop\shop-img-1.jpg" alt="Image">
                                </div>
                                <div class="item">
                                    <img src="assets\img\shop\shop-img-2.jpg" alt="Image">
                                </div>
                                <div class="item">
                                    <img src="assets\img\shop\shop-img-3.jpg" alt="Image">
                                </div>
                                <div class="item">
                                    <img src="assets\img\shop\shop-img-4.jpg" alt="Image">
                                </div>
                                <div class="item">
                                    <img src="assets\img\shop\shop-img-5.jpg" alt="Image">
                                </div>
                                <div class="item">
                                    <img src="assets\img\shop\shop-img-6.jpg" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="product-content">
                            <h3>
                                <a href="single-product.php">EGO ias the enemy</a>
                            </h3>
                            <div class="price">
                                <del>$59.00</del> <span class="new-price">$39.00</span>
                            </div>
                            <div class="product-review">
                                <div class="rating">
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                </div>
                                <a href="single-product.php" class="rating-count">3 reviews</a>
                            </div>
                            <ul class="product-info">
                                <li>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At magnam ad
                                        reprehenderit fuga nam, non odit necessitatibus facilis beatae temporibus</p>
                                </li>
                                <li>
                                    <span>Availability:</span> <a href="shop.php">In stock (7 items)</a>
                                </li>
                                <li>
                                    <span>Product Type:</span> <a href="shop.php">Book</a>
                                </li>
                            </ul>
                            <div class="product-color-switch">
                                <h4>Color:</h4>
                                <ul>
                                    <li>
                                        <a href="javascript:;" title="Black" class="color-black"></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" title="White" class="color-white"></a>
                                    </li>
                                    <li class="active">
                                        <a href="javascript:;" title="Green" class="color-green"></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" title="Yellow Green" class="color-yellowgreen"></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" title="Teal" class="color-teal"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-add-to-cart">
                                <div class="input-counter">
                                    <span class="minus-btn">
                                        <i class="bx bx-minus"></i>
                                    </span>
                                    <input type="text" value="1">
                                    <span class="plus-btn">
                                        <i class="bx bx-plus"></i>
                                    </span>
                                </div>
                                <button type="submit" class="default-btn">
                                    Add to Cart
                                    <i class="flaticon-right"></i>
                                </button>
                            </div>
                            <div class="share-this-product">
                                <h3>Share this product</h3>
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class="bx bxl-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.twitter.com/" target="_blank">
                                            <i class="bx bxl-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank">
                                            <i class="bx bxl-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank">
                                            <i class="bx bxl-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
                                <a href="/cdn-cgi/l/email-protection#89e1ece5e5e6c9ecedfce6e7a7eae6e4"><span
                                        class="__cf_email__"
                                        data-cfemail="7a121f1616153a1f1e0f151454191517">[email&#160;protected]</span></a>
                                <a href="/cdn-cgi/l/email-protection#c2b2b7a0aeaba182a7a6b7adaceca1adaf"><span
                                        class="__cf_email__"
                                        data-cfemail="6d1d180f01040e2d0809180203430e0200">[email&#160;protected]</span></a>
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