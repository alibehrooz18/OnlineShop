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

    <title>Eduon - ارتباط با ما</title>
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
                                <a href="contact.php" class="nav-link active">ارتباط با ما</a>
                            </li>
                            <li class="nav-item">
                                <a href="about.php" class="nav-link">درباره ما</a>
                            </li>
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
    <div class="page-title-area bg-5">
        <div class="container">
            <div class="page-title-content">
                <h2>ارتباط با ما</h2>
                <ul>
                    <li>
                        <a href="index.php">
                            خانه
                        </a>
                    </li>
                    <li class="active">ارتباط با ما</li>
                </ul>
            </div>
        </div>
    </div>


    <!-- info section start -->
    <section class="contact-info-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-contact-info" dir="ltr">
                        <i class="flaticon-call"></i>
                        <h3>با ما تماس بگیرید</h3>
                        <a href="tel:+1(514)312-5678">+98 912 345 6789</a>
                        <a href="tel:+1(514)312-6688">+98 313 132 6688</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-contact-info">
                        <i class="flaticon-pin"></i>
                        <h3>مکان ما</h3>
                        <a href="contact.php">ایران، اصفهان، خیابان خاقانی، نبش کوچه 123</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                    <div class="single-contact-info">
                        <i class="flaticon-email"></i>
                        <h3>ایمیل</h3>
                        <a href="/cdn-cgi/l/email-protection#91f9f4fdfdfed1f4f5e4feffbff2fefc"><span
                                class="__cf_email__"
                                data-cfemail="8ee6ebe2e2e1ceebeafbe1e0a0ede1e3">[ایمیل&#160;محافظت شده]</span></a>
                        <a href="/cdn-cgi/l/email-protection#91e1e4f3fdf8f2d1f4f5e4feffbff2fefc"><span
                                class="__cf_email__"
                                data-cfemail="08787d6a64616b486d6c7d6766266b6765">[ایمیل&#160;محافظت شده]</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- info secton end -->


    <!-- Main section start -->
    <section class="main-contact-area pb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-wrap contact-pages mb-0">
                        <div class="contact-form">
                            <div class="section-title">
                                <h2>برای هر سوالی به ما پیام دهید</h2>
                                <p>برای اطلاعات بیشتر در مورد دوره های ما با ما تماس بگیرید <br> با مخاطبین eduon</p>
                            </div>
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <label>نام</label>
                                            <input type="text" name="name" id="name" class="form-control" required=""
                                                data-error="لطفا نام خود را وارد کنید">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <label>نشانی ایمیل</label>
                                            <input type="email" name="email" id="email" class="form-control" required=""
                                                data-error="لطفا ایمیل خود را وارد کنید">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>موضوع</label>
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                                required="" data-error="لطفا موضوع را مشخص کنید">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>پیغام</label>
                                            <textarea name="message" class="form-control" id="message" cols="30"
                                                rows="10" required="" data-error="پیغام رو را بنویسید"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-two">
                                            ارسال پیغام
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main section end -->


    <!-- Map area -->
    <div class="map-area">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1595487039539!5m2!1sen!2sbd"></iframe>
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