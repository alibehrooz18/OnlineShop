<?php include "./assets/includes/db.php"; ?>
<?php
// Function
function confirmQuery($result)
{
    global $connection;
    if (!$result) {
        die("QUERY FAILD" . mysqli_error($connection));
    }
}
?>



<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <?php include "./assets/includes/header.php" ?>

    <title>Eduon - Single Product</title>
</head>

<body>

    <!-- <div class="loader-wrapper">
        <div class="loader">
            <div class="dot-wrap">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </div> -->


    <!-- Navbar -->
    <div class="navbar-area">

        <!-- Mobile navbar -->
        <div class="mobile-nav">
            <a href="index.php" class="logo">
                <img src="assets\img\logo.png" class="main-logo" alt="Logo">
                <img src="assets\img\logo-2.png" class="white-logo" alt="Logo">
            </a>
        </div>

        <!-- Main navbar -->
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
                                        <a href="cart.php" class="nav-link">Cart</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="checkout.php" class="nav-link">Checkout</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="single-product.php" class="nav-link active">Single Product</a>
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


    <!-- Banner area -->
    <div class="page-title-area bg-23">
        <div class="container">
            <div class="page-title-content">
                <h2>Single product</h2>
                <ul>
                    <li>
                        <a href="index.php">
                            Home
                        </a>
                    </li>
                    <li class="active">Single product</li>
                </ul>
            </div>
        </div>
    </div>


    <!-- Main area -->
    <section class="product-details-area ptb-100" dir="ltr">
        <div class="container">
            <div class="row align-items-center">
                <?php
                if (isset($_GET['s_pro'])) {
                    $item_id = $_GET['s_pro'];
                }
                $query = "SELECT * FROM shop WHERE item_id = $item_id";
                $get_data = mysqli_query($connection, $query);
                confirmQuery($get_data);

                $row = mysqli_fetch_assoc($get_data);
                $item_image = $row['item_image'];
                $item_title = $row['item_title'];
                $item_price = $row['item_price'];
                $item_category = $row['item_category_id'];
                $item_discount = $row['item_discount'];

                $dis_price = $item_price - ($item_price * ($item_discount / 100));
                $dis_price = floor($dis_price);


                $query = "SELECT * FROM categories WHERE cat_id = $item_category";
                $get_category = mysqli_query($connection, $query);
                confirmQuery($get_category);

                $cat_row = mysqli_fetch_assoc($get_category);
                $cat_id = $cat_row['cat_id'];
                $category = $cat_row['cat_title'];


                ?>
                <div class="col-lg-6 col-md-12">
                    <div class="product-details-image">
                        <img src="assets/img/shop/<?php echo $item_image; ?>" alt="Image" style="height: 800px;">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="product-details-desc">
                        <h3><?php echo $item_title; ?></h3>
                        <div class="price">
                            <span class="new-price">
                                <?php if ($item_discount) { ?>
                                    <del>$<?php echo $item_price; ?>.00</del>
                                    $<?php echo $dis_price; ?>.00
                                <?php } else { ?>
                                    $<?php echo $item_price; ?>.00
                                <?php } ?>
                            </span>
                        </div>
                        <div class="product-review">
                            <div class="rating">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star-half"></i>
                            </div>
                            <a href="single-product.php?s_pro=<?php echo $item_id; ?>" class="rating-count">(5 reviews)</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                            et justo duo dolores et ea rebum. Stet clita kasd gubergren at vero eos et accusam amet,
                            consetetur sadipscing elitr.</p>
                        <ul class="product-summery">
                            <li>SUK: <span>132</span></li>
                            <li>Category: <span><?php echo $category; ?></span></li>
                            <li>Tags: <span>Book</span></li>
                            <li>10 in stock</li>
                        </ul>
                        <ul class="social-wrap">
                            <li>
                                <span>Share:</span>
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
                        </ul>
                        <!-- <div class="product-add-to-cart">
                            <h3>Quantities:</h3>
                            <div class="input-counter">
                                <span class="minus-btn">
                                    <i class="bx bx-minus"></i>
                                </span>
                                <input type="text" value="1" min="1" class="quantity-input" name="quantity">
                                <span class="plus-btn">
                                    <i class="bx bx-plus"></i>
                                </span>
                            </div>
                        </div> -->
                        <br>
                        <a href="cart.php?p_id=<?php echo $item_id; ?>" class="default-btn">
                            Add to cart
                        </a>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="tab products-details-tab">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <ul class="tabs">
                                    <li>
                                        <a href="javascript:;">
                                            Description
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            Reviews
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="tab_content">
                                    <div class="tabs_item">
                                        <div class="products-details-tab-content">
                                            <h3 class="mb-2">Description</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                com modo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                                velit esse cillum dolore fugiat nulla pariatur. Excepteur sint occaecat
                                                cupidatat non proident. Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                                laboris nisi ut aliquip ex ea com modo consequat. Duis aute irure dolor
                                                in reprehenderit in voluptate velit esse cillum dolore fugiat nulla
                                                pariatur.</p>
                                        </div>
                                    </div>
                                    <div class="tabs_item">
                                        <div class="products-details-tab-content">
                                            <div class="product-review-form">
                                                <h3>Customer reviews</h3>
                                                <div class="review-title">
                                                    <div class="rating">
                                                        <i class="bx bxs-star"></i>
                                                        <i class="bx bxs-star"></i>
                                                        <i class="bx bxs-star"></i>
                                                        <i class="bx bxs-star"></i>
                                                        <i class="bx bxs-star"></i>
                                                    </div>
                                                    <p>Based on 2 reviews</p>
                                                </div>
                                                <div class="review-comments">
                                                    <div class="review-item">
                                                        <div class="rating">
                                                            <i class="bx bxs-star"></i>
                                                            <i class="bx bxs-star"></i>
                                                            <i class="bx bxs-star"></i>
                                                            <i class="bx bxs-star"></i>
                                                            <i class="bx bxs-star"></i>
                                                        </div>
                                                        <h3>Good</h3>
                                                        <span><strong>Admin</strong> on <strong>July 21,
                                                                2020</strong></span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                            do eiusmod tempor incididunt ut labore et dolore magna
                                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                                                        </p>
                                                        <a href="single-product.php"
                                                            class="review-report-link">Reply</a>
                                                    </div>
                                                    <div class="review-item">
                                                        <div class="rating">
                                                            <i class="bx bxs-star"></i>
                                                            <i class="bx bxs-star"></i>
                                                            <i class="bx bxs-star"></i>
                                                            <i class="bx bxs-star"></i>
                                                            <i class="bx bxs-star"></i>
                                                        </div>
                                                        <h3>Good</h3>
                                                        <span><strong>Admin</strong> on <strong>July 21,
                                                                2020</strong></span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                            do eiusmod tempor incididunt ut labore et dolore magna
                                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                                                        </p>
                                                        <a href="single-product.php"
                                                            class="review-report-link">Reply</a>
                                                    </div>
                                                </div>
                                                <div class="review-form">
                                                    <h3>Write a Review</h3>
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="form-group">
                                                                    <label>Name</label>
                                                                    <input type="text" id="name" name="name"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="form-group">
                                                                    <label>Email</label>
                                                                    <input type="email" id="email" name="email"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Review title</label>
                                                                    <input type="text" id="review-title"
                                                                        name="review-title" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Body of review (1500)</label>
                                                                    <textarea name="review-body" id="review-body"
                                                                        cols="30" rows="8"
                                                                        class="form-control"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <button type="submit" class="btn default-btn two">Submit
                                                                    Review</button>
                                                            </div>
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
                </div>
            </div>
        </div>
    </section>


    <!-- Shop section -->
    <section class="related-product-area pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Related Products</h2>
            </div>
            <div class="row">
                <?php
                $query = "SELECT * FROM shop LIMIT 4";
                $item_query = mysqli_query($connection, $query);
                confirmQuery($item_query);

                if (mysqli_num_rows($item_query) > 0) {
                    while ($row = mysqli_fetch_assoc($item_query)) {
                        $item_id = $row['item_id'];
                        $item_image = $row['item_image'];
                        $item_title = $row['item_title'];
                        $item_price = $row['item_price'];
                        $item_discount = $row['item_discount'];

                        $dis_price = $item_price - ($item_price * ($item_discount / 100));
                        $dis_price = floor($dis_price);
                ?>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-shop">
                                <div class="shop-img">
                                    <img src="assets/img/shop/<?php echo $item_image; ?>" alt="Image">
                                    <ul>
                                        <li>
                                            <a href="single-product.php?s_pro=<?php echo $item_id; ?>">
                                                <i class="bx bx-show-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.php">
                                                <i class="bx bx-heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <h3><?php echo $item_title; ?></h3>
                                <span>
                                    <?php if ($item_discount) { ?>
                                        <del>$<?php echo $item_price; ?>.00</del>
                                        $<?php echo $dis_price; ?>.00
                                    <?php } else { ?>
                                        $<?php echo $item_price; ?>.00
                                    <?php } ?>
                                </span>
                                <a href="cart.php?p_id=<?php echo $item_id; ?>" class="default-btn">
                                    Add to cart
                                </a>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "<p>No item found.</p>";
                }
                ?>
                <!-- <div class="col-lg-3 col-sm-6">
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
                <div class="col-lg-3 col-sm-6">
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
                <div class="col-lg-3 col-sm-6">
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
                </div> -->
            </div>
        </div>
    </section>


    <!-- Modal section -->
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
                                <a href="single-product.php">Book cover mockup</a>
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


    <!-- Footer -->
    <?php include "assets/includes/footer.php" ?>
</body>

</html>