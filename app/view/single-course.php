<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <?php include "../../includes/header.php"; ?>
    <?php include "../controllers/single_ctrl.php"; ?>

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

    <title>Eduon - آموزش</title>
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
                                <a href="cart.php">
                                    <i class="flaticon-shopping-cart"></i>
                                    <span><?php echo $item_cart; ?></span>
                                </a>
                            </div>
                            <div class="register">
                                <?php if (isset($user_name)): ?>
                                    <ul class="navbar-nav m-auto">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <span><?php echo htmlspecialchars($user_name); ?></span>
                                                <i class="bx bx-chevron-down"></i>
                                            </a>
                                            <ul class="dropdown-menu" style="width: 200px;">
                                                <li class="dropdown-item">
                                                    <a href="../../admin" class="nav-link">داشبورد</a>
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

    <!-- Banner -->
    <div class="page-title-area bg-25">
        <div class="container">
            <div class="page-title-content">
                <h2>آموزش</h2>
                <ul>
                    <li>
                        <a href="index.php">
                            خانه
                        </a>
                    </li>
                    <li class="active">آموزش</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Main course -->
    <section class="single-course-area ptb-100" dir="ltr">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-course-content">
                        <h3><?php echo $course_title ?></h3>
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-sm-4">
                                <div class="course-rating">
                                    <img src="../../public/img/single-course/<?php echo $author_image ?>" alt="Image">
                                    <h4><a href="instructors.php">مدرس:</a></h4>
                                    <span><?php echo $course_author ?></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="course-rating pl-0 text-center">
                                    <h4>دسته‌بندی:</h4>
                                    <span><?php echo $course_tags ?></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="course-rating star pl-0">
                                    <h4>ارزیابی</h4>
                                    <div class="product-review">
                                        <div class="rating">
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star-half"></i>
                                        </div>
                                        <a href="single-course.php" class="rating-count">2 نظر</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="../../public/img/course-img/<?php echo $course_image ?>" alt="Image" width="100%">
                    </div>
                    <!-- Course content -->
                    <div class="tab single-course-tab">
                        <ul class="tabs">
                            <li>
                                <a href="javascript:;">نمای کلی</a>
                            </li>
                            <li>
                                <a href="javascript:;">برنامه درسی</a>
                            </li>
                            <li>
                                <a href="javascript:;"> مدرس</a>
                            </li>
                            <li>
                                <a href="javascript:;">بررسی ها</a>
                            </li>
                        </ul>
                        <!-- Review and content -->
                        <div class="tab_content">
                            <div class="tabs_item">
                                <h3>شرح دوره</h3>
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و
                                    متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                    است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد کتابهای
                                    زیادی در شصت و سه درصد گذشته حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت
                                    بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد در این صورت
                                    می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز
                                    شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                                </p>
                                <h3>صدور گواهینامه آنلاین</h3>
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و
                                    متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                    است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد کتابهای
                                    زیادی در شصت و سه درصد گذشته حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت
                                    بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد در این صورت
                                    می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز
                                    شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                                </p>
                                <h3>چه چیزی یاد خواهید گرفت؟</h3>
                                <ul class="course-list">
                                    <li>
                                        <i class="bx bx-check"></i>
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                    </li>
                                    <li>
                                        <i class="bx bx-check"></i>
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                    </li>
                                    <li>
                                        <i class="bx bx-check"></i>
                                        لورم ایپسوم متن ساختگی با صنعت
                                    </li>
                                    <li>
                                        <i class="bx bx-check"></i>
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                    </li>
                                </ul>
                                <h3>Who This Course is for</h3>
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و
                                    متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                    است و برای شرایط فعلی تکنولوژی مورد نیاز می باشد کتابهای
                                    زیادی در شصت و سه درصد گذشته حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت
                                    بیشتری را برای طراحان رایانه ای علی در این صورت
                                    می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز
                                    شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته
                                </p>
                            </div>
                            <!-- Video section -->
                            <div class="tabs_item">
                                <div class="curriculum-content">
                                    <h3>مقدمه آموزش</h3>
                                    <div class="curriculum-list">
                                        <h4>بخش 1</h4>
                                        <ul>
                                            <li>
                                                <a href="instructors.php" class="meet-title">
                                                    <i class="bx bx-right-arrow"></i>
                                                    مقدمه
                                                </a>
                                                <a href="single-course.php" class="meet-time">
                                                    <span class="min">01 ساعت</span>
                                                    <span class="preview">پیش نمایش</span>
                                                </a>
                                            </li>
                                            <li class="transparent">
                                                <a href="instructors.php" class="meet-title">
                                                    <i class="bx bx-right-arrow"></i>
                                                    راه اندازی محیط
                                                </a>
                                                <a href="single-course.php" class="meet-time">
                                                    <span class="min">02 ساعت</span>
                                                    <span class="preview">پیش نمایش</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="instructors.php" class="meet-title">
                                                    <i class="bx bx-right-arrow"></i>
                                                    امتحان یک
                                                </a>
                                                <a href="single-course.php" class="meet-time">
                                                    <span class="min">01 دقیقه</span>
                                                    <span class="preview">4 سوال</span>
                                                    <i class="bx bxs-lock-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="curriculum-list">
                                        <h4>بخش 2</h4>
                                        <ul>
                                            <li>
                                                <a href="instructors.php" class="meet-title">
                                                    <i class="bx bx-right-arrow"></i>
                                                    ماژول های کاربردی
                                                </a>
                                                <a href="single-course.php" class="meet-time">
                                                    <span class="min">03 ساعت</span>
                                                    <i class="bx bxs-lock-alt"></i>
                                                </a>
                                            </li>
                                            <li class="transparent">
                                                <a href="instructors.php" class="meet-title">
                                                    <i class="bx bx-right-arrow"></i>
                                                    فریم ورک فشرده
                                                </a>
                                                <a href="single-course.php" class="meet-time">
                                                    <span class="min">05 ذقیقه</span>
                                                    <i class="bx bxs-lock-alt"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="instructors.php" class="meet-title">
                                                    <i class="bx bx-right-arrow"></i>
                                                    ماژول وب
                                                </a>
                                                <a href="single-course.php" class="meet-time">
                                                    <span class="min">01 ساعت</span>
                                                    <i class="bx bxs-lock-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="curriculum-list">
                                        <h4>بخش 3</h4>
                                        <ul>
                                            <li>
                                                <a href="instructors.php" class="meet-title">
                                                    <i class="bx bx-right-arrow"></i>
                                                    معرفی ویدیویی
                                                </a>
                                                <a href="single-course.php" class="meet-time">
                                                    <span class="min">30 دقیقه</span>
                                                    <i class="bx bxs-lock-alt"></i>
                                                </a>
                                            </li>
                                            <li class="transparent">
                                                <a href="instructors.php" class="meet-title">
                                                    <i class="bx bx-right-arrow"></i>
                                                    ماژول وب
                                                </a>
                                                <a href="single-course.php" class="meet-time">
                                                    <span class="min">05 ساعت</span>
                                                    <i class="bx bxs-lock-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs_item">
                                <div class="instructor-content">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4">
                                            <div class="advisor-img">
                                                <img src="../../public\img\instructor-img.jpg" alt="Image">
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="advisor-content">
                                                <a href="single-course.php">
                                                    <h3>Anna Dew</h3>
                                                </a>
                                                <span>کارشناس پروژه زبردست</span>
                                                <p>
                                                    جون اسمیت یک عکاس، نویسنده و نویسنده مشهور است که می آورد
                                                    اشتیاق به هر کاری که انجام می دهد
                                                </p>
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
                                                        <a href="https://www.youtube.com/" target="_blank">
                                                            <i class="bx bxl-youtube"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.behance.com/" target="_blank">
                                                            <i class="bx bxl-behance"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Course rate -->
                            <div class="tabs_item" dir="rtl">
                                <div class="review-content">
                                    <h3>رتبه بندی دوره</h3>
                                    <ul class="rating-star">
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
                                    <span>میانگین 5.00 بر اساس 1 رتبه</span>
                                    <div class="rating-bar-content">
                                        <div class="single-bar">
                                            <p class="start">ستاره</p>
                                            <div class="rating-bar">
                                                <div class="skills html"></div>
                                            </div>
                                            <p class="percent">90%</p>
                                        </div>
                                        <div class="single-bar">
                                            <p class="start">ستاره</p>
                                            <div class="rating-bar">
                                                <div class="skills css"></div>
                                            </div>
                                            <p class="percent">80%</p>
                                        </div>
                                        <div class="single-bar">
                                            <p class="start">ستاره</p>
                                            <div class="rating-bar">
                                                <div class="skills js"></div>
                                            </div>
                                            <p class="percent">65%</p>
                                        </div>
                                        <div class="single-bar">
                                            <p class="start">ستاره</p>
                                            <div class="rating-bar">
                                                <div class="skills php"></div>
                                            </div>
                                            <p class="percent">60%</p>
                                        </div>
                                    </div>
                                    <div class="course-reviews-content">
                                        <h3>ارزیابی</h3>
                                        <ul class="course-reviews">
                                            <li>
                                                <img src="../../public\img\course-reviews-img.jpg" alt="Image">
                                                <h3>Anna Dew</h3>
                                                <span>تمام نیازهای من را پوشش دهد</span>
                                                <p>
                                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و
                                                    متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                                    است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد کتابهای
                                                    زیادی در شصت و سه درصد گذشته حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت
                                                    بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد در این صورت
                                                    می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز
                                                    شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" dir="rtl">
                    <div class="account-wrap">
                        <ul>
                            <li>
                                قیمت <span class="bold">$<?php echo $course_price ?></span>
                            </li>
                            <li>
                                شروع <span>20 آذر، 1403</span>
                            </li>
                            <li>
                                پایان <span>25 آذر، 1403</span>
                            </li>
                            <li>
                                دسته‌بندی رویداد <span><?php echo $course_tags ?></span>
                            </li>
                            <li>
                                کل مجموعه: <span>100</span>
                            </li>
                            <li>
                                رزرو شده: <span>00</span>
                            </li>
                            <li>
                                وبسایت: <a href="javascript:;">www.eduon.com</a>
                            </li>
                        </ul>
                        <a href="contact.php" class="default-btn">رزرو کنید</a>
                        <div class="social-content">
                            <p>
                                این دوره را به اشتراک بگذارید
                                <i class="bx bxs-share-alt"></i>
                            </p>
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
                                    <a href="https://www.behance.com/" target="_blank">
                                        <i class="bx bxl-behance"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php


                ?>
            </div>
        </div>
    </section>
    <!-- Main course end -->


    <!-- Suggest course -->
    <section class="courses-area-style pb-70">
        <div class="container">
            <div class="section-title">
                <h2>دوره های مرتبط</h2>
            </div>
            <div class="row">
                <?php

                $course_query = getCourseLimit3();

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
                                        <li><?php echo $course_lesson ?> درس</li>
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
        </div>
    </section>


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