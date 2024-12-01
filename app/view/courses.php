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

    <title>Eduon - آموزش آنلاین</title>
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
                                <a href="courses.php" class="nav-link active">
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


    <!-- Banner start -->
    <div class="page-title-area bg-4">
        <div class="container">
            <div class="page-title-content">
                <h2>آموزش ها</h2>
                <ul>
                    <li>
                        <a href="../../index.php">
                            خانه
                        </a>
                    </li>
                    <li class="active">آموزش ها</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Banner end -->


    <!-- Course section start -->
    <section class="courses-area-style ptb-100">
        <div class="container">
            <div class="showing-result">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-4">
                        <div class="showing-result-count">
                            <?php
                            $courses_per_page = 6;

                            $query = "SELECT COUNT(*) AS total_items FROM courses";
                            $item_query = mysqli_query($connection, $query);
                            confirmQuery($item_query);

                            $row = mysqli_fetch_assoc($item_query);
                            $total_items = $row['total_items'];

                            $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                            $current_page = max(1, $current_page);

                            // Calculate start and end range
                            $start_item = ($current_page - 1) * $courses_per_page + 1;
                            $end_item = min($start_item + $courses_per_page - 1, $total_items);

                            if ($total_items > 0) {
                                echo "<p>نمایش $start_item-$end_item از $total_items نتیجه</p>";
                            } else {
                                echo "<p>هیچ نتیجه ای یافت نشد</p>";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <!-- Category selection dropdown -->
                        <div class="showing-top-bar-ordering">
                            <form method="GET">
                                <select name="category" onchange="this.form.submit()">
                                    <option value="">همه آموزش ها</option>
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

                    <div class="col-lg-3 col-md-4">
                        <!-- Search form -->
                        <div class="sidebar-widget search">
                            <form class="search-form" action="sourses.php" method="GET">
                                <input class="form-control" name="search" placeholder="آموزش خود را پیدا کنید" type="text">
                                <button class="search-button" type="submit">
                                    <i class="bx bx-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Display filtered courses -->
            <div class="row">
                <?php
                // Pagination logic 
                $query = "SELECT COUNT(*) AS total_courses FROM courses";
                $course_query = mysqli_query($connection, $query);
                confirmQuery($course_query);
                $row = mysqli_fetch_assoc($course_query);
                $total_courses = $row['total_courses'];
                $total_pages = ceil($total_courses / $courses_per_page);
                $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                $current_page = max(1, min($current_page, $total_pages));
                $offset = ($current_page - 1) * $courses_per_page;

                // Search 
                $search_query = '';
                if (isset($_GET['search']) && $_GET['search'] !== '') {
                    $search_query = " WHERE course_tags LIKE '%" . mysqli_real_escape_string($connection, $_GET['search']) . "%'";
                } elseif (isset($_GET['category']) && $_GET['category'] !== '') {
                    $category_id = mysqli_real_escape_string($connection, $_GET['category']);
                    $search_query = " WHERE course_category_id = '{$category_id}'";
                }

                $query = "SELECT * FROM courses" . $search_query . " LIMIT $courses_per_page OFFSET $offset";
                $course_query = mysqli_query($connection, $query);
                confirmQuery($course_query);

                if (mysqli_num_rows($course_query) > 0) {
                    while ($row = mysqli_fetch_assoc($course_query)) {
                        $course_id = $row['course_id'];
                        $course_image = $row['course_image'];
                        $course_price = $row['course_price'];
                        $course_tags = $row['course_tags'];
                        $course_title = $row['course_title'];
                        $course_content = $row['course_content'];
                        $course_lesson = $row['course_lesson'];
                        $course_student = $row['course_student'];
                ?>
                        <!-- Single course item -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-course">
                                <a href="single-course.php?c_id=<?php echo $course_id; ?>">
                                    <img src="../../public/img/course-img/<?php echo $course_image ?>" alt="Image">
                                </a>
                                <div class="course-content">
                                    <span class="price">$<?php echo $course_price ?></span>
                                    <span class="tag"><?php echo $course_tags ?></span>
                                    <a href="single-course.php?c_id=<?php echo $course_id ?>">
                                        <h3><?php echo $course_title ?></h3>
                                    </a>
                                    <ul class="rating">
                                        <li><i class="bx bxs-star"></i></li>
                                        <li><i class="bx bxs-star"></i></li>
                                        <li><i class="bx bxs-star"></i></li>
                                        <li><i class="bx bxs-star"></i></li>
                                        <li><i class="bx bxs-star"></i></li>
                                        <li><span>0.5</span><a href="single-course.php">(1 نظر)</a></li>
                                    </ul>
                                    <p><?php echo $course_content ?></p>
                                    <ul class="lessons">
                                        <li><?php echo $course_lesson ?> درس ها</li>
                                        <li class="float"><?php echo $course_student ?> دانشجو</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "<p>No courses found.</p>";
                }
                ?>
            </div>

            <!-- Pagination -->
            <div class="col-lg-12 col-md-12">
                <div class="pagination-area">
                    <?php

                    if ($current_page > 1) {
                        echo '<a href="courses.php?page=' . ($current_page - 1) . '" class="prev page-numbers">';
                        echo '<i class="bx bx-chevron-left"></i>';
                        echo '</a>';
                    }
                    for ($i = 1; $i <= $total_pages; $i++) {
                        if ($i == $current_page) {
                            echo '<span class="page-numbers current" aria-current="page">' . $i . '</span>';
                        } else {
                            echo '<a href="courses.php?page=' . $i . '" class="page-numbers">' . $i . '</a>';
                        }
                    }
                    if ($current_page < $total_pages) {
                        echo '<a href="courses.php?page=' . ($current_page + 1) . '" class="next page-numbers">';
                        echo '<i class="bx bx-chevron-right"></i>';
                        echo '</a>';
                    }

                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Course section end -->



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