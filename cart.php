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
                                        <a href="shop.php" class="nav-link">Shop</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="cart.php" class="nav-link active">Cart</a>
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


    <div class="page-title-area bg-20">
        <div class="container">
            <div class="page-title-content">
                <h2>Cart</h2>
                <ul>
                    <li>
                        <a href="index.php">
                            Home
                        </a>
                    </li>
                    <li class="active">Cart</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="cart-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <form>
                        <div class="cart-wraps">
                            <div class="cart-table table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Image</th>
                                            <th scope="col">Product name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="single-product.php">
                                                    <img src="assets\img\cart\cart-img-1.jpg" alt="Image">
                                                </a>
                                            </td>
                                            <td class="product-name">
                                                <a href="single-product.php">Book cover mockup</a>
                                            </td>
                                            <td class="product-price">
                                                <span class="unit-amount">$29.00</span>
                                            </td>
                                            <td class="product-quantity">
                                                <div class="input-counter">
                                                    <span class="minus-btn">
                                                        <i class="bx bx-minus"></i>
                                                    </span>
                                                    <input type="text" value="1">
                                                    <span class="plus-btn">
                                                        <i class="bx bx-plus"></i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="product-subtotal">
                                                <span class="subtotal-amount">$29.00</span>
                                                <a href="cart.php" class="remove">
                                                    <i class="bx bx-x"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="single-product.php">
                                                    <img src="assets\img\cart\cart-img-2.jpg" alt="Image">
                                                </a>
                                            </td>
                                            <td class="product-name">
                                                <a href="single-product.php">Your heart is the sea</a>
                                            </td>
                                            <td class="product-price">
                                                <span class="unit-amount">$20.00</span>
                                            </td>
                                            <td class="product-quantity">
                                                <div class="input-counter">
                                                    <span class="minus-btn">
                                                        <i class="bx bx-minus"></i>
                                                    </span>
                                                    <input type="text" value="1">
                                                    <span class="plus-btn">
                                                        <i class="bx bx-plus"></i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="product-subtotal">
                                                <span class="subtotal-amount">$20.50</span>
                                                <a href="cart.php" class="remove">
                                                    <i class="bx bx-x"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="single-product.php">
                                                    <img src="assets\img\cart\cart-img-3.jpg" alt="Image">
                                                </a>
                                            </td>
                                            <td class="product-name">
                                                <a href="single-product.php">Hardcober mockup</a>
                                            </td>
                                            <td class="product-price">
                                                <span class="unit-amount">$15.00</span>
                                            </td>
                                            <td class="product-quantity">
                                                <div class="input-counter">
                                                    <span class="minus-btn">
                                                        <i class="bx bx-minus"></i>
                                                    </span>
                                                    <input type="text" value="1">
                                                    <span class="plus-btn">
                                                        <i class="bx bx-plus"></i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="product-subtotal">
                                                <span class="subtotal-amount">$15.00</span>
                                                <a href="cart.php" class="remove">
                                                    <i class="bx bx-x"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="single-product.php">
                                                    <img src="assets\img\cart\cart-img-4.jpg" alt="Image">
                                                </a>
                                            </td>
                                            <td class="product-name">
                                                <a href="single-product.php">Dior</a>
                                            </td>
                                            <td class="product-price">
                                                <span class="unit-amount">$59.50</span>
                                            </td>
                                            <td class="product-quantity">
                                                <div class="input-counter">
                                                    <span class="minus-btn">
                                                        <i class="bx bx-minus"></i>
                                                    </span>
                                                    <input type="text" value="1">
                                                    <span class="plus-btn">
                                                        <i class="bx bx-plus"></i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="product-subtotal">
                                                <span class="subtotal-amount">$59.50</span>
                                                <a href="cart.php" class="remove">
                                                    <i class="bx bx-x"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="coupon-cart">
                                <div class="row">
                                    <div class="col-lg-8 col-sm-7">
                                        <div class="form-group mb-0">
                                            <input type="text" class="form-control" placeholder="Coupon code">
                                            <a href="cart.php" class="default-btn">Apply coupon</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-5 text-right">
                                        <a href="cart.php" class="default-btn update">
                                            Update cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <h3 class="cart-checkout-title">Checkout summary</h3>
                    <div class="cart-totals">
                        <ul>
                            <li>Subtotal <span>$123.00</span></li>
                            <li>Shipping <span>$00.00</span></li>
                            <li>Total <span>$123.00</span></li>
                            <li><b>Payable Total</b> <span><b>$123.00</b></span></li>
                        </ul>
                        <a href="checkout.php" class="default-btn two">
                            Buy now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <?php include "assets/includes/footer.php" ?>
</body>

</html>