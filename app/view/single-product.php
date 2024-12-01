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

    <title>Eduon - نمایش محصول</title>
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
                                <a href="#" class="nav-link">
                                    فروشگاه
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="shop.php" class="nav-link">فروشگاه</a>
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


    <!-- Banner area -->
    <div class="page-title-area bg-23">
        <div class="container">
            <div class="page-title-content">
                <h2>محصول</h2>
                <ul>
                    <li>
                        <a href="index.php">
                            خانه
                        </a>
                    </li>
                    <li class="active">محصول</li>
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
                        <img src="../../public/img/shop/<?php echo $item_image; ?>" alt="Image" style="height: 800px;">
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
                            <a href="single-product.php?s_pro=<?php echo $item_id; ?>" class="rating-count">(5 بررسی ها)</a>
                        </div>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و
                            متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                            است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد کتابهای
                            زیادی در شصت و سه درصد گذشته حال افزارها شناخت
                            بیشتری را برای در این صورت
                            می توان امید داشت که تمام و دشواری موجود در و زمان مورد نیاز
                            شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>
                        <ul class="product-summery">
                            <li>صفحات: <span>132</span></li>
                            <li>دسته‌بندی: <span><?php echo $category; ?></span></li>
                            <li>تگ ها: <span>Book</span></li>
                            <li>10 در انبار</li>
                        </ul>
                        <ul class="social-wrap">
                            <li>
                                <span>به اشتراک بگذارید:</span>
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
                            افزودن به سبد خرید
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
                                            توضیحات
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            نظرات
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-12 col-md-12" dir="rtl">
                                <div class="tab_content">
                                    <div class="tabs_item">
                                        <div class="products-details-tab-content">
                                            <h3 class="mb-2">توضیحات</h3>
                                            <p>
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و
                                                متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                                است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد کتابهای
                                                زیادی در شصت و سه درصد گذشته حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت
                                                بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد در این صورت
                                                می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز
                                                شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tabs_item">
                                        <div class="products-details-tab-content">
                                            <div class="product-review-form">
                                                <h3>نظرات مشتریان</h3>
                                                <div class="review-title">
                                                    <div class="rating">
                                                        <i class="bx bxs-star"></i>
                                                        <i class="bx bxs-star"></i>
                                                        <i class="bx bxs-star"></i>
                                                        <i class="bx bxs-star"></i>
                                                        <i class="bx bxs-star"></i>
                                                    </div>
                                                    <p>بر اساس 2 بررسی</p>
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
                                                        <h3>خوب</h3>
                                                        <span><strong>ادمین</strong> در <strong>آبان 21,
                                                                1403</strong></span>
                                                        <p>
                                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                            طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                                                        </p>
                                                        <a href="single-product.php"
                                                            class="review-report-link">پاسخ</a>
                                                    </div>
                                                    <div class="review-item">
                                                        <div class="rating">
                                                            <i class="bx bxs-star"></i>
                                                            <i class="bx bxs-star"></i>
                                                            <i class="bx bxs-star"></i>
                                                            <i class="bx bxs-star"></i>
                                                            <i class="bx bxs-star"></i>
                                                        </div>
                                                        <h3>خوب</h3>
                                                        <span><strong>ادمین</strong> در <strong>آبان 21,
                                                                1403</strong></span>
                                                        <p>
                                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                            طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                                                        </p>
                                                        <a href="single-product.php"
                                                            class="review-report-link">پاسخ</a>
                                                    </div>
                                                </div>
                                                <div class="review-form">
                                                    <h3>یک نظر بنویسید</h3>
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="form-group">
                                                                    <label>نام</label>
                                                                    <input type="text" id="name" name="name"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="form-group">
                                                                    <label>ایمیل</label>
                                                                    <input type="email" id="email" name="email"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>عنوان بررسی</label>
                                                                    <input type="text" id="review-title"
                                                                        name="review-title" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>متن بررسی (1500)</label>
                                                                    <textarea name="review-body" id="review-body"
                                                                        cols="30" rows="8"
                                                                        class="form-control"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <button type="submit" class="btn default-btn two">
                                                                    ارسال نظر
                                                                </button>
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
                <h2>آخرین محصولات</h2>
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
                    echo "<p>هیج ایتمی پیدا نشد</p>";
                }
                ?>
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
                                    افزودن به سبد خرید
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