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

    <title>Eduon - فروشگاه</title>
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
                                <a href="../../index.php" class="nav-link">
                                    خانه
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="courses.php" class="nav-link">
                                    دروس
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="gallery.php" class="nav-link">نمایشگاه</a>
                            </li>
                            <li class="nav-item">
                                <a href="events.php" class="nav-link">رویدادها</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    فروشگاه
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="shop.php" class="nav-link active">فروشگاه</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="wishlist.php" class="nav-link">علاقه‌مندی ها</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="contact.php" class="nav-link">ارتباط با ما</a>
                            </li>
                            <li class="nav-item">
                                <a href="about.php" class="nav-link">درباره ما</a>
                            </li>
                        </ul>

                        <div class="others-option">
                            <div class="option-item">
                                <i class="search-btn bx bx-search"></i>
                                <i class="close-btn bx bx-x"></i>
                                <div class="search-overlay search-popup">
                                    <div class="search-box">
                                        <form class="search-form">
                                            <input class="search-input" name="search" placeholder="جست‌وجو" type="text">
                                            <button class="search-button" type="submit"><i
                                                    class="bx bx-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-icon">
                                <?php
                                if (isset($_SESSION['username'])) {


                                    $query = "SELECT COUNT(*) AS item_count FROM cart";
                                    $get_cart_data = mysqli_query($connection, $query);

                                    confirmQuery($get_cart_data);

                                    // Fetch the count from the result
                                    $row = mysqli_fetch_assoc($get_cart_data);
                                    $item_cart = isset($row['item_count']) ? intval($row['item_count']) : 0;
                                } else {
                                    $item_cart = 0;
                                }
                                ?>
                                <a href="cart.php">
                                    <i class="flaticon-shopping-cart"></i>
                                    <span><?php echo $item_cart; ?></span>
                                </a>
                            </div>
                            <div class="register">
                                <?php if (isset($_SESSION['username'])): ?>
                                    <ul class="navbar-nav m-auto">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <span><?php echo htmlspecialchars($_SESSION['username']); ?></span>
                                                <i class="bx bx-chevron-down"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item">
                                                    <a href="../../admin" class="nav-link">داشبورد</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="../../admin/offers.php" class="nav-link">آموزش‌ها</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="cart.php" class="nav-link">سفارش‌ها</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="../../logout.php" class="nav-link">خروج</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                <?php else: ?>
                                    <a href="/eduon/my-account.php" class="default-btn">ورود / ثبت نام</a>
                                <?php endif; ?>
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
                                            <input class="search-input" name="search" placeholder="جست‌وجو" type="text">
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
                                ورود / ثبت نام
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Navbar end -->


    <!-- Banner section -->
    <div class="page-title-area bg-19">
        <div class="container">
            <div class="page-title-content">
                <h2>فروشگاه</h2>
                <ul>
                    <li>
                        <a href="index.php">
                            خانه
                        </a>
                    </li>
                    <li class="active">فروشگاه</li>
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
                                            echo "<p>نمایش $start_item-$end_item از $total_items نتیجه</p>";
                                        } else {
                                            echo "<p>هیچ نتیجه ای یافت نشد</p>";
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <!-- Category selection dropdown -->
                                    <div class="showing-top-bar-ordering">
                                        <form method="GET">
                                            <select name="category" onchange="this.form.submit()">
                                                <option value="">تمامی محصولات</option>
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
                                                <img src="../../public/img/shop/<?php echo $item_image; ?>" alt="Image">
                                                <ul>
                                                    <li>
                                                        <a href="single-product.php?s_pro=<?php echo $item_id; ?>">
                                                            <i class="bx bx-show-alt"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="wishlist.php?wishlist=<?php echo $item_id; ?>">
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
                                                افزودن به سبد خرید
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
                                <input class="form-control" name="search" placeholder="محصول خود را پیدا کنید" type="text">
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
                                    <a href='shop.php?category=2'>آموزش و پرورش</a>
                                </li>
                                <li>
                                    <a href='shop.php?category=3'>مربیگری سلامت</a>
                                </li>
                                <li>
                                    <a href='shop.php?category=4'>یادگیری</a>
                                </li>
                                <li>
                                    <a href='shop.php?category=5'>آنلاین</a>
                                </li>
                                <li>
                                    <a href='shop.php?category=6'>دانشگاهی</a>
                                </li>
                                <li>
                                    <a href='shop.php?category=7'>پذیرش</a>
                                </li>
                                <li>
                                    <a href='shop.php?category=4'>دانشجو</a>
                                </li>
                                <li>
                                    <a href='shop.php?category=6'>فارغ التحصیلی</a>
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
                            <h3 class="widget-title">پست ها محبوب</h3>
                            <div class="post-wrap">
                                <div class="item">
                                    <a href="single-blog.php" class="thumb">
                                        <span class="fullimage cover bg1" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <h4 class="title">
                                            <a href="single-blog.php">ما شروع به بررسی دو سطح بعدی خواهیم کرد</a>
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
                                            <a href="single-blog.php">
                                            تعیین هدف واقعی یک آموزش خوب دشوار است.
                                            </a>
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
                                            <a href="single-blog.php">اجرای ارزیابی همتا در گروه آنلاین</a>
                                            <span class="date">18-07-2020</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget tags">
                            <h3>تگ ها</h3>
                            <ul>
                                <li>
                                    <a href="courses.php">آموزش و پرورش</a>
                                </li>
                                <li>
                                    <a href="courses.php">دانشگاه</a>
                                </li>
                                <li>
                                    <a href="courses.php">دانشگاه</a>
                                </li>
                                <li>
                                    <a href="courses.php">ریاضی</a>
                                </li>
                                <li>
                                    <a href="courses.php">طراحی</a>
                                </li>
                                <li>
                                    <a href="courses.php">یادگیری</a>
                                </li>
                                <li>
                                    <a href="courses.php">یادگیری</a>
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
                                    <img src="../../public\img\shop\shop-img-1.jpg" alt="Image">
                                </div>
                                <div class="item">
                                    <img src="../../public\img\shop\shop-img-2.jpg" alt="Image">
                                </div>
                                <div class="item">
                                    <img src="../../public\img\shop\shop-img-3.jpg" alt="Image">
                                </div>
                                <div class="item">
                                    <img src="../../public\img\shop\shop-img-4.jpg" alt="Image">
                                </div>
                                <div class="item">
                                    <img src="../../public\img\shop\shop-img-5.jpg" alt="Image">
                                </div>
                                <div class="item">
                                    <img src="../../public\img\shop\shop-img-6.jpg" alt="Image">
                                </div>
                            </div>
                            <div id="thumbs" class="owl-carousel owl-theme">
                                <div class="item">
                                    <img src="../../public\img\shop\shop-img-1.jpg" alt="Image">
                                </div>
                                <div class="item">
                                    <img src="../../public\img\shop\shop-img-2.jpg" alt="Image">
                                </div>
                                <div class="item">
                                    <img src="../../public\img\shop\shop-img-3.jpg" alt="Image">
                                </div>
                                <div class="item">
                                    <img src="../../public\img\shop\shop-img-4.jpg" alt="Image">
                                </div>
                                <div class="item">
                                    <img src="../../public\img\shop\shop-img-5.jpg" alt="Image">
                                </div>
                                <div class="item">
                                    <img src="../../public\img\shop\shop-img-6.jpg" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="product-content" dir="ltr">
                            <?php

                            if (isset($_GET['item_id'])) {
                                $item_id = mysqli_real_escape_string($connection, $_GET['item_id']);
                                $query = "SELECT * FROM shop WHERE item_id = $item_id";
                                $result = mysqli_query($connection, $query);
                                confirmQuery($result);

                                if ($result) {
                                    $row = mysqli_fetch_assoc($result);
                                    $item_id = $row['item_id'];
                                    $item_image = $row['item_image'];
                                    $item_title = $row['item_title'];
                                    $item_price = $row['item_price'];
                                    $item_discount = $row['item_discount'];

                                    $dis_price = $item_price - ($item_price * ($item_discount / 100));
                                    $dis_price = floor($dis_price);

                                    echo json_encode([
                                        'item_title' => $row['item_title'],
                                        'item_price' => $item_price,
                                        'item_discount' => $item_discount,
                                        'discounted_price' => $discounted_price,
                                        'item_image' => $row['item_image']
                                    ]);
                                } else {
                                    echo json_encode(['error' => 'Item not found.']);
                                }
                            } else {
                                echo json_encode(['error' => 'Invalid request.']);
                            }
                            ?>
                            <h3>
                                <a href="single-product.php"><?php echo $item_title; ?></a>
                            </h3>
                            <div class="price">
                                <?php if ($item_discount) { ?>
                                    <del>$<?php echo $item_price; ?>.00</del>
                                    $<?php echo $dis_price; ?>.00
                                <?php } else { ?>
                                    $<?php echo $item_price; ?>.00
                                <?php } ?>
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
                            <br>
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