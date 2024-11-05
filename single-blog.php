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
                                <a href="#" class="nav-link active">
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
                                        <a href="single-blog.php" class="nav-link active">Single Blog</a>
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


    <div class="page-title-area bg-14">
        <div class="container">
            <div class="page-title-content">
                <h2>Single blog</h2>
                <ul>
                    <li>
                        <a href="index.php">
                            Home
                        </a>
                    </li>
                    <li class="active">Single blog</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="single-blog-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-blog-content">
                        <div class="blog-top-content">
                            <img src="assets\img\single-blog\single-blog-img.jpg" alt="Image">
                            <span class="research">Research</span>
                            <h3>Determining the true goal of a good education is difficult.</h3>
                            <ul class="post-details">
                                <li>
                                    By <a href="single-event.php">Admin</a>
                                </li>
                                <li>
                                    Posted on 13/07/2020
                                </li>
                                <li>
                                    <a href="events.php">2 Comments</a>
                                </li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                viverra maecenas accumsan lacus vel facilisis ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate
                                magna eros eu Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor,
                                facilisis luctus, metus.</p>
                            <p>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate
                                sem tristique Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi nulla quis
                                nibh. Quisque a lectus.</p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat
                                mattis eros. malesuada erat ut turpis. Suspendisse urna nibh, viverra non semper
                                suscipit.</p>
                            <blockquote>
                                <i class="flaticon-quote"></i>
                                <p>Phasellus ultrices nulla quis nibh. quisque a lectus. donec consectetuer ligula
                                    vulputate sem tristique cursus. nam nulla quam, gravida non, commodo a, sodales sit
                                    amet, nisi.</p>
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                viverra maecenas accumsan lacus vel facilisis ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                        <ul class="social-wrap">
                            <li>
                                <span>Share this post:</span>
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
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/" target="_blank">
                                    <i class="bx bxl-youtube"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="comments-wrap">
                            <h3>Comments (2)</h3>
                            <ul>
                                <li>
                                    <img src="assets\img\single-blog\comments-img-1.jpg" alt="Image">
                                    <h3>Juanita Jones</h3>
                                    <span>Monday, July 20, 2020</span>
                                    <p>Lorem ipsum dolora sit amet, consectetur adipiscing elit sed do eiusmod tempor
                                        incdidunt labore et dolore magna aliqua. Veniam quis nostrud exercitation ullaco
                                        laboris</p>
                                    <a href="single-blog.php">
                                        Reply
                                    </a>
                                </li>
                                <li>
                                    <img src="assets\img\single-blog\comments-img-2.jpg" alt="Image">
                                    <h3>Ward F. Nelson</h3>
                                    <span>Monday, July 20, 2020</span>
                                    <p>Lorem ipsum dolora sit amet, consectetur adipiscing elit sed do eiusmod tempor
                                        incdidunt labore et dolore magna aliqua. Veniam quis nostrud exercitation ullaco
                                        laboris</p>
                                    <a href="single-blog.php">
                                        Reply
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="leave-reply-wrap">
                            <h3>Leave a reply</h3>
                            <p>Your email address will not be published. Required fields are marked*</p>
                            <form>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Name*</label>
                                            <input type="text" name="name" id="name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Email address*</label>
                                            <input type="email" name="email" id="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your website</label>
                                            <input type="text" name="your-website-link" id="your-website-link"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label>Comment</label>
                                            <textarea name="message" class="form-control" id="message"
                                                rows="8"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="checkbox" id="chb2">
                                            <span>
                                                Save my name, email, and website in this browser for the next time I
                                                comment.
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn page-btn">
                                            Post A Comment
                                        </button>
                                    </div>
                                </div>
                            </form>
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
                            <h3 class="widget-title">Popular posts</h3>
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
                                <a href="/cdn-cgi/l/email-protection#f9919c959596b99c9d8c9697d79a9694"><span
                                        class="__cf_email__"
                                        data-cfemail="7f171a1313103f1a1b0a1011511c1012">[email&#160;protected]</span></a>
                                <a href="/cdn-cgi/l/email-protection#e4949186888d87a48180918b8aca878b89"><span
                                        class="__cf_email__"
                                        data-cfemail="a9d9dccbc5c0cae9cccddcc6c787cac6c4">[email&#160;protected]</span></a>
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