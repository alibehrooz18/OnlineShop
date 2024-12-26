<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <?php include "./includes/header.php"; ?>
    <?php include "./app/controllers/AccountCtrl.php"; ?>

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

    <title>Eduon - ورود</title>
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
                                <a href="index.php" class="nav-link">
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
                                                    <a href="./admin" class="nav-link">داشبورد</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="/app/view/cart.php" class="nav-link">سفارش‌ها</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="logout.php" class="nav-link">خروج</a>
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

    <!-- Page title start -->
    <div class="page-title-area bg-7">
        <div class="container">
            <div class="page-title-content">
                <h2>ورود</h2>
                <ul>
                    <li>
                        <a href="index.php">
                            خانه
                        </a>
                    </li>
                    <li class="active">ورود</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page title end -->

    <!-- Login & register area start -->

    <section class="user-area-style ptb-100" dir="ltr">
        <div class="container">
            <div class="row">
                <!-- Login start  -->
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>ورود</h2>
                    </div>
                    <div class="contact-form-action mb-50">
                        <form method="post">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>ایمیل یا تلفن</label>
                                        <input class="form-control" type="text" name="username">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>کلمه عبور</label>
                                        <input class="form-control" type="password" name="password">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="login-action">
                                        <span class="log-rem mx-3">
                                            <input id="remember" type="checkbox" name="remember" value="1">
                                            <label for="remember">مرا به یاد داشته باش!</label>
                                        </span>
                                        <span class="forgot-login">
                                            <a href="recover-password.php">کلمه عبور خود را فراموش کرده‌اید؟</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="default-btn" type="submit" name="login">
                                        ورود
                                    </button>
                                </div>
                                <div class="col-12">
                                    <p>حساب کاربری ندارید؟ <a href="registration.php">ثبت نام کنید!</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Login end  -->

                <!-- Register start  -->
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>ثبت نام</h2>
                    </div>
                    <div class="contact-form-action">
                        <form method="post">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>نام (کامل)</label>
                                        <input class="form-control" type="text" name="fullname">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>ایمیل</label>
                                        <input class="form-control" type="email" name="email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>شماره تماس</label>
                                        <input class="form-control" type="tel" pattern="[0-9]{4}[0-9]{3}[0-9]{4}" name="number">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>کلمه عبور</label>
                                        <input class="form-control" type="password" name="password">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-sm-6">
                                            <button class="default-btn register" type="submit" name="register">
                                                ثبت نام
                                            </button>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 text-right">
                                            <input id="remember-1" type="checkbox">
                                            <label for="remember">نمایش کلمه عبور؟</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p>حساب کاربری دارید؟ <a href="log-in.php">وارد شوید!</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Register end  -->
            </div>
        </div>
    </section>
    <!-- Login & register area end -->


    <!-- Footer -->
    <?php include "includes/footer.php"; ?>

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