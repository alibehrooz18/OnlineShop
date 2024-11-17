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

    <title>Eduon - Shop</title>
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

    <!-- Navbar start -->
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
    <!-- Navbar end -->


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


    <!-- Shop start -->
    <div class="shop-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shop-card-wrap">
                        <div class="showing-result">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="showing-result-count">
                                        <?php
                                        $items_per_page = 9;

                                        $query = "SELECT COUNT(*) AS total_items FROM shop";
                                        $item_query = mysqli_query($connection, $query);
                                        confirmQuery($item_query);

                                        $row = mysqli_fetch_assoc($item_query);
                                        $total_items = $row['total_items'];

                                        $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                                        $current_page = max(1, $current_page);

                                        // Calculate start and end range
                                        $start_item = ($current_page - 1) * $items_per_page + 1;
                                        $end_item = min($start_item + $items_per_page - 1, $total_items);

                                        if ($total_items > 0) {
                                            echo "<p>Showing $start_item-$end_item of $total_items results</p>";
                                        } else {
                                            echo "<p>No results found.</p>";
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <!-- Category selection dropdown -->
                                    <div class="showing-top-bar-ordering">
                                        <form method="GET">
                                            <select name="category" onchange="this.form.submit()">
                                                <option value="">Default sorting</option>
                                                <?php
                                                $selected_category = isset($_GET['category']) ? $_GET['category'] : '';
                                                $query = "SELECT * FROM categories";
                                                $select_cat_query = mysqli_query($connection, $query);
                                                confirmQuery($select_cat_query);

                                                while ($row = mysqli_fetch_assoc($select_cat_query)) {
                                                    $cat_id = $row['cat_id'];
                                                    $cat_title = $row['cat_title'];
                                                    $selected_attr = ($cat_id == $selected_category) ? 'selected' : '';
                                                    echo "<option value='{$cat_id}' {$selected_attr}>{$cat_title}</option>";
                                                }
                                                ?>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            // Pagination logic 
                            $query = "SELECT COUNT(*) AS total_item FROM shop";
                            $item_query = mysqli_query($connection, $query);
                            confirmQuery($item_query);
                            $row = mysqli_fetch_assoc($item_query);
                            $total_items = $row['total_item'];
                            $total_pages = ceil($total_items / $items_per_page);
                            $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                            $current_page = max(1, min($current_page, $total_pages));
                            $offset = ($current_page - 1) * $items_per_page;

                            // Search 
                            $search_query = '';
                            if (isset($_GET['search']) && $_GET['search'] !== '') {
                                $search_query = " WHERE item_title LIKE '%" . mysqli_real_escape_string($connection, $_GET['search']) . "%'";
                            } elseif (isset($_GET['category']) && $_GET['category'] !== '') {
                                $category_id = mysqli_real_escape_string($connection, $_GET['category']);
                                $search_query = " WHERE item_category_id = '{$category_id}'";
                            }

                            $query = "SELECT * FROM shop" . $search_query . " LIMIT $items_per_page OFFSET $offset";
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
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="single-shop">
                                            <div class="shop-img">
                                                <img src="assets/img/shop/<?php echo $item_image; ?>" alt="Image">
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


                            <!-- Pagination -->
                            <div class="col-lg-12 col-md-12">
                                <div class="pagination-area">
                                    <?php

                                    if ($current_page > 1) {
                                        echo '<a href="shop.php?page=' . ($current_page - 1) . '" class="prev page-numbers">';
                                        echo '<i class="bx bx-chevron-left"></i>';
                                        echo '</a>';
                                    }
                                    for ($i = 1; $i <= $total_pages; $i++) {
                                        if ($i == $current_page) {
                                            echo '<span class="page-numbers current" aria-current="page">' . $i . '</span>';
                                        } else {
                                            echo '<a href="shop.php?page=' . $i . '" class="page-numbers">' . $i . '</a>';
                                        }
                                    }
                                    if ($current_page < $total_pages) {
                                        echo '<a href="shop.php?page=' . ($current_page + 1) . '" class="next page-numbers">';
                                        echo '<i class="bx bx-chevron-right"></i>';
                                        echo '</a>';
                                    }

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="widget-sidebar">
                        <div class="sidebar-widget search">
                            <!-- Search form -->
                            <form class="search-form" action="shop.php" method="GET">
                                <input class="form-control" name="search" placeholder="Search our courses" type="text">
                                <button class="search-button" type="submit">
                                    <i class="bx bx-search"></i>
                                </button>
                            </form>
                        </div>
                        <!-- Category on sidebar -->
                        <div class="sidebar-widget categories">
                            <h3>Categories</h3>
                            <ul>
                                <?php
                                echo
                                "<li>
                                    <a href='shop.php?category=2'>Education</a>
                                </li>
                                <li>
                                    <a href='shop.php?category=3'>Health coaching</a>
                                </li>
                                <li>
                                    <a href='shop.php?category=4'>Learning</a>
                                </li>
                                <li>
                                    <a href='shop.php?category=5'>Online</a>
                                </li>
                                <li>
                                    <a href='shop.php?category=6'>Academics</a>
                                </li>
                                <li>
                                    <a href='shop.php?category=7'>Admission</a>
                                </li>
                                <li>
                                    <a href='shop.php?category=4'>Student</a>
                                </li>
                                <li>
                                    <a href='shop.php?category=6'>Graduation</a>
                                </li>";

                                $query = "SELECT cat_id, cat_title FROM categories";
                                $result = mysqli_query($connection, $query);
                                confirmQuery($result);

                                $category_filter = '';

                                if (isset($_GET['category']) && $_GET['category'] !== '') {
                                    $cat_id = mysqli_escape_string($connection, $_GET['category']);
                                    $category_filter = " WHERE item_category_id = $cat_id";
                                }

                                ?>
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
    <!-- Shop end -->


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

    <!-- Footer -->
    <?php include "assets/includes/footer.php" ?>
</body>

</html>