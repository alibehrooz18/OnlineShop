<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <?php include "./includes/header.php"; ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="public\css\bootstrap.rtl.min.css">

    <link rel="stylesheet" href="public\css\owl.theme.default.min.css">

    <link rel="stylesheet" href="public\css\owl.carousel.min.css">

    <link rel="stylesheet" href="public\css\magnific-popup.min.css">

    <link rel="stylesheet" href="public\css\animate.min.css">

    <link rel="stylesheet" href="public\css\boxicons.min.css">

    <link rel="stylesheet" href="public\css\flaticon.css">

    <link rel="stylesheet" href="public\css\meanmenu.min.css">

    <link rel="stylesheet" href="public\css\nice-select.min.css">

    <link rel="stylesheet" href="public\css\odometer.min.css">

    <link rel="stylesheet" href="public\css\style.css">

    <link rel="stylesheet" href="public\css\dark.css">

    <link rel="stylesheet" href="public\css\responsive.css">

    <link rel="icon" type="image/png" href="public\img\favicon.png">

    <title>Eduon</title>
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


    <!-- Subscribe modal -->
    <div class="modal-newsletter-area">
        <div class="modal fade" id="exampleModal" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-bs-dismiss="modal">
                        <i class="bx bx-x"></i>
                    </button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5 col-sm-5 p-0">
                                <div class="newsletter-img">
                                    <img src="public\img\newsletter-img.jpg" alt="Image">
                                </div>
                            </div>
                            <div class="col-lg-7 col-sm-7 pl-0">
                                <div class="modal-newsletter-wrap">
                                    <h3>در خبرنامه ما عضو شوید</h3>
                                    <p>برای دریافت آخرین به روز رسانی ها و پیشنهادات، در لیست پستی ما ثبت نام کنید.</p>
                                    <form class="newsletter-form" data-toggle="validator">
                                        <input type="email" class="form-control" placeholder="ایمیل خود را وارد کنید"
                                            name="EMAIL" required="" autocomplete="off">
                                        <button class="default-btn" type="submit">
                                            عضویت
                                        </button>
                                        <div id="validator-newsletter-2" class="form-result"></div>
                                        <div class="agree-label">
                                            <input type="checkbox" id="chb1">
                                            <label for="chb1">
                                                دیگر این پیغام را نشان نده
                                            </label>
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

    <!-- Navbar start -->
    <div class="navbar-area">

        <div class="mobile-nav">
            <a href="index.php" class="logo">
                <img src="public\img\logo.png" class="main-logo" alt="Logo">
                <img src="public\img\logo-2.png" class="white-logo" alt="Logo">
            </a>
        </div>

        <div class="main-nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md">
                    <a class="navbar-brand" href="index.php">
                        <img src="public\img\logo.png" class="main-logo" alt="Logo">
                        <img src="public\img\logo-2.png" class="white-logo" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link active">
                                    خانه
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="app/view/courses.php" class="nav-link">
                                    دروس
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="app/view/gallery.php" class="nav-link">نمایشگاه</a>
                            </li>
                            <li class="nav-item">
                                <a href="app/view/events.php" class="nav-link">رویدادها</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    فروشگاه
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="app/view/shop.php" class="nav-link">فروشگاه</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="app/view/wishlist.php" class="nav-link">علاقه‌مندی ها</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="app/view/contact.php" class="nav-link">ارتباط با ما</a>
                            </li>
                            <li class="nav-item">
                                <a href="app/view/about.php" class="nav-link">درباره ما</a>
                            </li>
                            <!-- User should move to login botton when user login -->
                            <!-- <li class="nav-item">
                                <a href="#" class="nav-link">
                                    کاربر
                                    <i class="bx bx-chevron-right"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="app/view/my-account.php" class="nav-link">داشبورد</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="app/view/log-in.php" class="nav-link">ورود</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="app/view/registration.php" class="nav-link">ثبت نام</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="app/view/recover-password.php" class="nav-link">بازیابی کلمه عبور</a>
                                    </li>
                                </ul>
                            </li> -->
                            <!-- ********************************************************************************** -->
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
                                <a href="app/view/cart.php">
                                    <i class="flaticon-shopping-cart"></i>
                                    <span>0</span>
                                </a>
                            </div>
                            <div class="register">
                                <a href="app/view/my-account.php" class="default-btn">
                                    ورود / ثبت نام
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
                                            <input class="search-input" name="search" placeholder="جست‌وجو" type="text">
                                            <button class="search-button" type="submit"><i
                                                    class="bx bx-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-icon">
                                <a href="app/view/cart.php">
                                    <i class="flaticon-shopping-cart"></i>
                                    <span>0</span>
                                </a>
                            </div>
                            <div class="register">
                                <a href="app/view/my-account.php" class="default-btn">
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


    <!-- Home banner start -->
    <section class="banner-area f5f6fa-bg-color">
        <div class="container-fluid social">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-content">
                        <h1 class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.3s">
                            یک مدرک معتبر را با کارشناسان آموزش آنلاین مطالعه کنید
                        </h1>
                        <p class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.6s">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ،
                            و با استفاده از طراحان گرافیک است، چاپگرها و
                        </p>
                        <a href="app/view/courses.php" class="default-btn wow animate__animated animate__fadeInLeft"
                            data-wow-delay="0.9s">
                            نمایش آموزش‌ها
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-img wow animate__animated animate__fadeInRight" data-wow-delay="0.3s">
                        <img src="public\img\banner-img\banner-img-1.jpg" alt="Image">
                    </div>
                </div>
            </div>

            <ul class="social-wrap">
                <li class="follow-us">
                    مارا دنبال کنید:
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
                    <a href="https://www.linkedin.com/" target="_blank">
                        <i class="bx bxl-linkedin"></i>
                    </a>
                </li>
            </ul>

        </div>
    </section>
    <!-- Home banner end -->


    <!-- Partner start -->
    <div class="partner-area f5f6fa-bg-color ptb-100">
        <div class="container">
            <div class="partner-wrap owl-theme owl-carousel">
                <div class="partner-item">
                    <a href="app/view/about.php">
                        <img src="public\img\partner-logo\partner-logo-1.png" alt="Image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="app/view/about.php">
                        <img src="public\img\partner-logo\partner-logo-2.png" alt="Image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="app/view/about.php">
                        <img src="public\img\partner-logo\partner-logo-3.png" alt="Image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="app/view/about.php">
                        <img src="public\img\partner-logo\partner-logo-4.png" alt="Image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="app/view/about.php">
                        <img src="public\img\partner-logo\partner-logo-5.png" alt="Image">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner end -->


    <!-- Benefits start -->
    <section class="achieve-area f5f6fa-bg-color pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>رهبر در آموزش و پرورش</span>
                <h2>به اهداف خود برسید</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-achieve">
                        <div class="achieve-shape shape-1">
                            <img src="public\img\achieve-shape\achieve-shape-1.png" alt="Image">
                            <i class="flaticon-skills"></i>
                        </div>
                        <h3>آخرین مهارت ها را یاد بگیرید</h3>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-achieve">
                        <div class="achieve-shape shape-2">
                            <img src="public\img\achieve-shape\achieve-shape-2.png" alt="Image">
                            <i class="flaticon-career"></i>
                        </div>
                        <h3>آماده شوید برای یک حرفه</h3>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-achieve">
                        <div class="achieve-shape shape-3">
                            <img src="public\img\achieve-shape\achieve-shape-3.png" alt="Image">
                            <i class="flaticon-certificate"></i>
                        </div>
                        <h3>مدرک یا درجه کسب کنید</h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده
                            sis.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-achieve">
                        <div class="achieve-shape shape-4">
                            <img src="public\img\achieve-shape\achieve-shape-4.png" alt="Image">
                            <i class="flaticon-group"></i>
                        </div>
                        <h3>سازمان خود را ارتقا دهید</h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده
                            sis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Benefits end -->


    <!-- Seconde banner start -->
    <section class="education-area ebeef5-bg-color">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-6">
                    <div class="education-img">
                        <img src="public\img\education-img.png" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="education-content ptb-100">
                        <span class="top-title">آموزش برای همه</span>
                        <h2>چرا یک آموزش آنلاین با<span> EDUON </span>بسازیم ؟</h2>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و
                        </p>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با
                        </p>
                        <ul>
                            <li>
                                <i class="bx bx-check"></i>
                                همه چیز نامحدود
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                بدون کارمزد معامله
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                بدون سردرد فنی
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                پشتیبانی در سطح جهانی از افراد واقعی
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                مهاجرت رایگان
                            </li>
                        </ul>
                        <a href="app/view/courses.php" class="default-btn">
                            نمایش آموزش‌ها
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Seconde banner end -->

    <!-- *********************************************** fix to get data from database ****************************************** -->
    <!-- Best course start -->
    <section class="courses-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>آموزش‌های محبوب</span>
                <h2>برای کسب اطلاعات بیشتر یک دوره را انتخاب کنید</h2>
            </div>
            <div class="row">
                <?php
                $query = "SELECT * FROM courses";
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
                                    <img src="public/img/course-img/<?php echo $course_image ?>" alt="Image">
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
                                        <li><?php echo $course_lesson ?> درس‌ها</li>
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
    <!-- Best course end -->


    <!-- Counter start -->
    <?php
    // Functions



    ?>
    <section class="counter-area ebeef5-bg-color pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <div class="counter-shape shape-1">
                            <img src="public\img\counter-shape\counter-shape-1.png" alt="Image">
                            <h2>
                                <span class="odometer" data-count="100">00</span>
                                <span class="target">%</span>
                            </h2>
                        </div>
                        <p>درصد موفقیت</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <div class="counter-shape shape-2">
                            <img src="public\img\counter-shape\counter-shape-2.png" alt="Image">
                            <h2>
                                <span class="odometer" data-count="5253">00</span>
                            </h2>
                        </div>
                        <p>دانشجو</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <div class="counter-shape shape-3">
                            <img src="public\img\counter-shape\counter-shape-3.png" alt="Image">
                            <h2>
                                <span class="odometer" data-count="325">00</span>
                            </h2>
                        </div>
                        <p>معلمان معتبر</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <div class="counter-shape shape-4">
                            <img src="public\img\counter-shape\counter-shape-4.png" alt="Image">
                            <h2>
                                <span class="odometer" data-count="565">00</span>
                            </h2>
                        </div>
                        <p>آموزش تمام شده</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter end -->


    <section class="enroll-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="enroll-wrap">
                        <form class="courses-form">
                            <span>هرآموزشی که نیاز دارید</span>
                            <h3>اکنون ثبت نام کنید</h3>
                            <div class="form-group">
                                <input type="text" class="form-control" id="Name" placeholder="نام">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="ایمیل">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="Number" placeholder="شماره تماس">
                            </div>
                            <div class="form-group">
                                <select>
                                    <option value="">نوع آموزش</option>
                                    <option value="">نوع آموزش 1</option>
                                    <option value="">نوع آموزش 2</option>
                                    <option value="">نوع آموزش 3</option>
                                    <option value="">نوع آموزش 4</option>
                                    <option value="">نوع آموزش 5</option>
                                    <option value="">نوع آموزش 6</option>
                                </select>
                            </div>
                            <button type="submit" class="default-btn">
                                ارسال
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="enroll-img">
                        <img src="public\img\enroll-img.png" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="teachers-area ebeef5-bg-color pt-100">
        <div class="container">
            <div class="section-title">
                <span>معلمان ما</span>
                <h2>معلمان بین‌المللی ما</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-teachers">
                        <img src="public\img\teachers-img\teachers-img-1.jpg" alt="Image">
                        <div class="teachers-content">
                            <ul>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank"><i
                                            class="bx bxl-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank"><i
                                            class="bx bxl-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank"><i
                                            class="bx bxl-linkedin-square"></i></a>
                                </li>
                            </ul>
                            <h3>Earl Mcgowan</h3>
                            <span>IT & Software</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-teachers">
                        <img src="public\img\teachers-img\teachers-img-2.jpg" alt="Image">
                        <div class="teachers-content">
                            <ul>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank"><i
                                            class="bx bxl-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank"><i
                                            class="bx bxl-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank"><i
                                            class="bx bxl-linkedin-square"></i></a>
                                </li>
                            </ul>
                            <h3>Chris Miller</h3>
                            <span>Mathematic</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-teachers">
                        <img src="public\img\teachers-img\teachers-img-3.jpg" alt="Image">
                        <div class="teachers-content">
                            <ul>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank"><i
                                            class="bx bxl-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank"><i
                                            class="bx bxl-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank"><i
                                            class="bx bxl-linkedin-square"></i></a>
                                </li>
                            </ul>
                            <h3>Mark Dent</h3>
                            <span>Programmer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-teachers">
                        <img src="public\img\teachers-img\teachers-img-4.jpg" alt="Image">
                        <div class="teachers-content">
                            <ul>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank"><i
                                            class="bx bxl-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank"><i
                                            class="bx bxl-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank"><i
                                            class="bx bxl-linkedin-square"></i></a>
                                </li>
                            </ul>
                            <h3>Lena Bodie</h3>
                            <span>English</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***************************************************** fix to get data from database ******************************************* -->
    <section class="event-area ptb-70">
        <div class="container">
            <div class="section-title">
                <span>رویدادهای آموزشی</span>
                <h2>رویدادهای پیش رو</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="single-event">
                        <a href="single-event.php">
                            <img src="public\img\event-img\event-img-1.png" alt="Image">
                        </a>
                        <div class="event-content">
                            <ul>
                                <li>
                                    <i class="bx bx-calendar"></i>
                                    13 مهر، 1403
                                </li>
                                <li>
                                    <i class="bx bx-time"></i>
                                    دوشنبه 3:00AM - 5:00PM
                                </li>
                            </ul>
                            <a href="single-event.php">
                                <h3>همایش جامع بازیابی سواد و خواندن</h3>
                            </a>
                            <span>
                                <i class="bx bxs-location-plus"></i>
                                Washington, DC
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="single-event">
                        <a href="single-event.php">
                            <img src="public\img\event-img\event-img-2.png" alt="Image">
                        </a>
                        <div class="event-content">
                            <ul>
                                <li>
                                    <i class="bx bx-calendar"></i>
                                    14 شهریور، 1403
                                </li>
                                <li>
                                    <i class="bx bx-time"></i>
                                    دوشنبه 4:00AM - 6:00PM
                                </li>
                            </ul>
                            <a href="single-event.php">
                                <h3>آینده آموزش عالی: دعوت به رهبری</h3>
                            </a>
                            <span>
                                <i class="bx bxs-location-plus"></i>
                                New Orleans, LA
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="single-event">
                        <a href="single-event.php">
                            <img src="public\img\event-img\event-img-3.png" alt="Image">
                        </a>
                        <div class="event-content">
                            <ul>
                                <li>
                                    <i class="bx bx-calendar"></i>
                                    01 آبان، 1403
                                </li>
                                <li>
                                    <i class="bx bx-time"></i>
                                    دوشنبه 3:00AM - 5:00PM
                                </li>
                            </ul>
                            <a href="single-event.php">
                                <h3>کنفرانس ملی بازیابی و سواد خواندن</h3>
                            </a>
                            <span>
                                <i class="bx bxs-location-plus"></i>
                                Bellevue, WA
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="single-event">
                        <a href="single-event.php">
                            <img src="public\img\event-img\event-img-4.png" alt="Image">
                        </a>
                        <div class="event-content">
                            <ul>
                                <li>
                                    <i class="bx bx-calendar"></i>
                                    13 آذر، 1403
                                </li>
                                <li>
                                    <i class="bx bx-time"></i>
                                    دوشنبه 3:00AM - 5:00PM
                                </li>
                            </ul>
                            <a href="single-event.php">
                                <h3>کنفرانس بزرگ چالش پروژه جهانی</h3>
                            </a>
                            <span>
                                <i class="bx bxs-location-plus"></i>
                                London, UK
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="video-area f5f6fa-bg-color">
        <div class="container">
            <div class="video-wrap">
                <img src="public\img\video-img.jpg" alt="Image">
                <div class="video-content">
                    <a href="https://www.youtube.com/watch?v=iLS_YP1uEK8" class="video-btn popup-youtube">
                        <i class="flaticon-play-button"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <section class="feedback-area f5f6fa-bg-color ptb-100">
        <div class="container">
            <div class="section-title">
                <span>نظرات</span>
                <h2>نظر دانشجویان</h2>
            </div>
            <div class="feedback-slider owl-theme owl-carousel">
                <div class="feedback-item">
                    <i class="flaticon-quotation"></i>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله
                        در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع
                        با هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی در شصت و سه درصد گذشته حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد
                    </p>
                    <div class="feedback-title">
                        <img src="public\img\feedback-img\feedback-img-1.jpg" alt="Image">
                        <h3>Jessica Molony</h3>
                        <span>طراح</span>
                    </div>
                </div>
                <div class="feedback-item">
                    <i class="flaticon-quotation"></i>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله
                        در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع
                        با هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی در شصت و سه درصد گذشته حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد
                    </p>
                    <div class="feedback-title">
                        <img src="public\img\feedback-img\feedback-img-2.jpg" alt="Image">
                        <h3>Juhon Dew</h3>
                        <span>بازاریاب </span>
                    </div>
                </div>
                <div class="feedback-item">
                    <i class="flaticon-quotation"></i>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله
                        در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع
                        با هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی در شصت و سه درصد گذشته حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد
                    </p>
                    <div class="feedback-title">
                        <img src="public\img\feedback-img\feedback-img-3.jpg" alt="Image">
                        <h3>Kilva Smith</h3>
                        <span>طراح</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ********************************************************************************************** -->
    <section class="discover-area ebeef5-bg-color ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="discover-content">
                        <span class="top-title">دوره هارا پیدا کنید</span>
                        <h2>تمرین های آنلاین همراه با آموزش</h2>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله
                            با هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی در شصت و سه درصد گذشته حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد
                        </p>
                        <ul>
                            <li>
                                <span>1</span>
                                کاوش کنید
                            </li>
                            <li>
                                <span>2</span>
                                مقایسه کنید
                            </li>
                            <li>
                                <span>3</span>
                                تصمیم بگیرید
                            </li>
                            <li>
                                <span>4</span>
                                ثبت نام کنید
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="discover-slider owl-theme owl-carousel">
                        <div class="single-course">
                            <a href="single-course.php">
                                <img src="public\img\course-img\course-img-1.jpg" alt="Image">
                            </a>
                            <div class="course-content">
                                <span class="price">$35</span>
                                <span class="tag">Education</span>
                                <a href="single-course.php">
                                    <h3>Programming foundations: real-world examples</h3>
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
                                </ul>
                                <ul class="lessons">
                                    <li>0 Lessons</li>
                                    <li class="float">44 Students</li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-course">
                            <a href="single-course.php">
                                <img src="public\img\course-img\course-img-2.jpg" alt="Image">
                            </a>
                            <div class="course-content">
                                <span class="price">$39</span>
                                <span class="tag">School</span>
                                <a href="single-course.php">
                                    <h3>Teaching assistant certificate in learning in schools</h3>
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
                                </ul>
                                <ul class="lessons">
                                    <li>0 Lessons</li>
                                    <li class="float">44 Students</li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-course">
                            <a href="single-course.php">
                                <img src="public\img\course-img\course-img-3.jpg" alt="Image">
                            </a>
                            <div class="course-content">
                                <span class="price">$29</span>
                                <span class="tag">Language</span>
                                <a href="single-course.php">
                                    <h3>English: spelling, punctuation and grammar</h3>
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
                                </ul>
                                <ul class="lessons">
                                    <li>0 Lessons</li>
                                    <li class="float">39 Students</li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-course">
                            <a href="single-course.php">
                                <img src="public\img\course-img\course-img-4.jpg" alt="Image">
                            </a>
                            <div class="course-content">
                                <span class="price">$49</span>
                                <span class="tag">Teaching</span>
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
                                </ul>
                                <ul class="lessons">
                                    <li>0 Lessons</li>
                                    <li class="float">50 Students</li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-course">
                            <a href="single-course.php">
                                <img src="public\img\course-img\course-img-5.jpg" alt="Image">
                            </a>
                            <div class="course-content">
                                <span class="price">$39</span>
                                <span class="tag">Teaching</span>
                                <a href="single-course.php">
                                    <h3>Learning implementing lormative assessment</h3>
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
                                </ul>
                                <ul class="lessons">
                                    <li>0 Lessons</li>
                                    <li class="float">44 Students</li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-course">
                            <a href="single-course.php">
                                <img src="public\img\course-img\course-img-6.jpg" alt="Image">
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
                                </ul>
                                <ul class="lessons">
                                    <li>0 Lessons</li>
                                    <li class="float">44 Students</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="discover-img">
            <img src="public\img\discover-img.png" alt="Image">
        </div>
    </section>


    <!-- ************************************************************************************************ -->
    <section class="news-area f5f6fa-bg-color pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>خبرنامه ما</span>
                <h2>اخبار اخیر را دنبال کنید</h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-news">
                        <a href="single-blog.php">
                            <img src="public\img\news-img\news-img-1.jpg" alt="Image">
                        </a>
                        <div class="news-content">
                            <span class="tag">توسعه</span>
                            <a href="single-blog.php">
                                <h3>یادگیری مادام العمر چیست و چگونه می تواند به یادگیری شما کمک کند؟</h3>
                            </a>
                            <ul class="lessons">
                                <li>توسط: <a href="single-blog.php">ادمین</a></li>
                                <li class="float">پست شده در 13/07/2020</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row mb-30">
                        <div class="col-lg-4 col-sm-4 pr-0">
                            <div class="news-img bg-2"></div>
                        </div>
                        <div class="col-lg-8 col-sm-8 pl-0">
                            <div class="news-listing-content">
                                <span class="tag">روندهای بازار</span>
                                <a href="single-blog.php">
                                    <h3>همه دانشجویان آینده اکنون واجد شرایط کارت دانشجویی هستند!</h3>
                                </a>
                                <ul class="lessons">
                                    <li>توسط: <a href="single-blog.php">ادمین</a></li>
                                    <li class="float">پست شده در 12/07/2020</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-30">
                        <div class="col-lg-4 col-sm-4 pr-0">
                            <div class="news-img bg-3"></div>
                        </div>
                        <div class="col-lg-8 col-sm-8 pl-0">
                            <div class="news-listing-content">
                                <span class="tag">تحقیقات</span>
                                <a href="single-blog.php">
                                    <h3>تعیین هدف واقعی یک آموزش خوب دشوار است.</h3>
                                </a>
                                <ul class="lessons">
                                    <li>توسط: <a href="single-blog.php">ادمین</a></li>
                                    <li class="float">پست شده در 11/07/2020</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row r-p-mb">
                        <div class="col-lg-4 col-sm-4 pr-0">
                            <div class="news-img bg-4"></div>
                        </div>
                        <div class="col-lg-8 col-sm-8 pl-0">
                            <div class="news-listing-content">
                                <span class="tag">مشاوره شغلی</span>
                                <a href="single-blog.php">
                                    <h3>پیشروی با یادگیری مادام العمر</h3>
                                </a>
                                <ul class="lessons">
                                    <li>توسط: <a href="single-blog.php">ادمین</a></li>
                                    <li class="float">پست شده در 10/07/2020</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="subscribe-area ebeef5-bg-color ptb-100">
        <div class="container">
            <div class="subscribe-wrap">
                <h2>عضویت</h2>
                <p>در خبرنامه ما عضو شوید و به‌روز بمانید</p>
                <form class="newsletter-form" data-toggle="validator">
                    <input type="email" class="form-control" placeholder="ایمیل خود را وارد کنید" name="EMAIL" required=""
                        autocomplete="off">
                    <button class="default-btn" type="submit">
                        اکنون عضو شوید
                    </button>
                    <div id="validator-newsletter" class="form-result"></div>
                </form>
                <div class="subscribe-img">
                    <img src="public\img\subscribe-img.png" alt="Image">
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="footer-top-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <h3>راه های ارتباط با ما</h3>
                        <ul class="address">
                            <li class="location">
                                <i class="bx bxs-location-plus"></i>
                                ایران، اصفهان، خیابان خاقانی، نبش کوچه 123
                            </li>
                            <li>
                                <i class="bx bxs-envelope"></i>
                                <a href="/cdn-cgi/l/email-protection#91f9f4fdfdfed1f4f5e4feffbff2fefc"><span
                                        class="__cf_email__"
                                        data-cfemail="8ee6ebe2e2e1ceebeafbe1e0a0ede1e3">[ایمیل&#160;محافظت شده]</span></a>
                                <a href="/cdn-cgi/l/email-protection#91e1e4f3fdf8f2d1f4f5e4feffbff2fefc"><span
                                        class="__cf_email__"
                                        data-cfemail="08787d6a64616b486d6c7d6766266b6765">[ایمیل&#160;محافظت شده]</span></a>
                            </li>
                            <li dir="ltr">
                                <i class="bx bxs-phone-call"></i>
                                <a href="tel:+1(514)312-5678">+98 912 345 6789</a>
                                <a href="tel:+1(514)312-6688">+98 313 132 6688</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <h3>راهنما</h3>
                        <ul class="link">
                            <li>
                                <a href="app/view/courses.php">آموزش ها</a>
                            </li>
                            <li>
                                <a href="app/view/about.php">درباره ما</a>
                            </li>
                            <li>
                                <a href="app/view/faq.php">راهنما (FAQ)</a>
                            </li>
                            <li>
                                <a href="app/view/terms-conditions.php">شرایط و ضوابط</a>
                            </li>
                            <li>
                                <a href="app/view/privacy-policy.php">سیاست حفظ حریم شخصی</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <h3>آموزش‌های آنلاین پر بازدید</h3>
                        <ul class="link">
                            <li>
                                <a href="app/view/courses.php">AI برای همه</a>
                            </li>
                            <li>
                                <a href="app/view/courses.php">شبکه ها و یادگیری عمیق</a>
                            </li>
                            <li>
                                <a href="app/view/courses.php">یادگیری با پایتون</a>
                            </li>
                            <li>
                                <a href="app/view/courses.php">بازارهای مالی</a>
                            </li>
                            <li>
                                <a href="app/view/courses.php">سخنوری حرفه‌ای انگلیسی</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <h3>موضوعات پرطرفدار</h3>
                        <ul class="link">
                            <li>
                                <a href="app/view/courses.php">علوم داده</a>
                            </li>
                            <li>
                                <a href="app/view/courses.php">علوم کامپیوتر</a>
                            </li>
                            <li>
                                <a href="app/view/courses.php">تجارت و مدیریت</a>
                            </li>
                            <li>
                                <a href="app/view/courses.php">تجارت و مدیریت</a>
                            </li>
                            <li>
                                <a href="app/view/../app/view/courses.php">طبیعت و محیط زیست</a>
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
                <p>© ساخته شده با ❤️ و ☕ توسط <a href="https://alibi2002.com/" target="_blank">تیم فنی</a></p>
            </div>
        </div>
    </footer>

    <div class="go-top">
        <i class="bx bx-chevrons-up"></i>
        <i class="bx bx-chevrons-up"></i>
    </div>




    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="public/js/jquery.min.js"></script>

    <script src="public/js/bootstrap.bundle.min.js"></script>

    <script src="public/js/meanmenu.min.js"></script>

    <script src="public/js/owl.carousel.min.js"></script>

    <script src="public/js/wow.min.js"></script>

    <script src="public/js/nice-select.min.js"></script>

    <script src="public/js/magnific-popup.min.js"></script>

    <script src="public/js/jarallax.min.js"></script>

    <script src="public/js/appear.min.js"></script>

    <script src="public/js/odometer.min.js"></script>

    <script src="public/js/form-validator.min.js"></script>

    <script src="public/js/contact-form-script.js"></script>

    <script src="public/js/ajaxchimp.min.js"></script>

    <script src="public/js/custom.js"></script>
</body>

</html>