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

    <title>Eduon - پرداخت</title>
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
                            <!-- User should move to login botton when user login -->
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    کاربر
                                    <i class="bx bx-chevron-right"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="my-account.php" class="nav-link">داشبورد</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="log-in.php" class="nav-link">ورود</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="registration.php" class="nav-link">ثبت نام</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="recover-password.php" class="nav-link">بازیابی کلمه عبور</a>
                                    </li>
                                </ul>
                            </li>
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


    <!-- Banner section -->
    <div class="page-title-area bg-21">
        <div class="container">
            <div class="page-title-content">
                <h2>پرداخت</h2>
                <ul>
                    <li>
                        <a href="index.php">
                            خانه
                        </a>
                    </li>
                    <li class="active">پرداخت</li>
                </ul>
            </div>
        </div>
    </div>


    <!-- Main form start -->
    <section class="checkout-area ptb-100">
        <div class="container">
            <form action="checkout.php" method="POST">
                <div class="row" dir="ltr">
                    <div class="col-lg-8 col-md-12">
                        <div class="billing-details">
                            <h3 class="title">جزئیات مشخصات</h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>نام (کامل) <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="firstname">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>نام خانوادگی <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="lastname">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>نام شرکت (دلخواه)
                                        </label>
                                        <input type="text" class="form-control" name="company">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>ایمیل <span class="required">*</span></label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>تلفن <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="phone">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group" dir="rtl">
                                        <label dir="ltr">کشور <span class="required">*</span></label>
                                        <div class="select-box">
                                            <select class="form-control" name="country">
                                                <option value="5">ایران</option>
                                                <option value="1">چین</option>
                                                <option value="2">امارات</option>
                                                <option value="0">آلمان</option>
                                                <option value="3">فرانسه</option>
                                                <option value="4">ژاپن</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label>آدرس <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="street">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label>محله / شهر <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="town">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>استان<span class="required">*</span></label>
                                        <input type="text" class="form-control" name="state">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>فشرده <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="zip">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="ship-different-address" name="shipToDiffAdr">
                                        <label class="form-check-label" for="ship-different-address">
                                            به نشانی دیگری ارسال شود؟
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>یادداشت (دلخواه)</label>
                                        <textarea name="notes" id="notes" cols="30" rows="8"
                                            class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="order-details">
                            <!-- Checkout -->
                            <div class="cart-totals" dir="rtl">
                                <?php
                                if (isset($_GET['p_total'])) {
                                    $payable_total = $_GET['p_total'];
                                    $subtotal = $_GET['subtotal'];
                                    $shiping = $_GET['shiping'];
                                    $coupon = $_GET['coupon'];
                                }
                                ?>
                                <h3>صورت حساب</h3>
                                <ul>
                                    <li>جمع محصولات<span>$<?php echo number_format($subtotal, 2); ?></span></li>
                                    <li>حمل و نقل<span>$<?php echo number_format($shiping, 2); ?></span></li>
                                    <li>کد تخفیف<span>$<?php echo number_format($coupon, 2); ?></span></li>
                                    <li><b>جمع قابل پرداخت</b> <span><b>$<?php echo number_format($payable_total, 2); ?></b></span></li>
                                </ul>
                            </div>
                            <div class="faq-accordion">
                                <h3>روش پرداخت</h3>
                                <ul class="accordion">
                                    <li class="accordion-item active">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            انتقال مستقیم بانکی
                                        </a>
                                        <p class="accordion-content show">
                                            پرداخت خود را مستقیماً به حساب بانکی ما انجام دهید. لطفا از شناسه سفارش خود استفاده کنید
                                            به عنوان مرجع پرداخت سفارش شما تا زمانی که وجوه ارسال نشود ارسال نخواهد شد
                                            حساب ما
                                        </p>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            پرداخت در محل
                                        </a>
                                        <p class="accordion-content">
                                            لطفا چک خود را به نام فروشگاه، خیابان فروشگاه، شهرک فروشگاه، ایالت فروشگاه ارسال کنید
                                            / شهرستان، فروشگاه کدپستی.
                                        </p>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            چک بانکی
                                        </a>
                                        <p class="accordion-content">
                                            لطفا چک خود را به نام فروشگاه، خیابان فروشگاه، شهرک فروشگاه، ایالت فروشگاه ارسال کنید
                                            / شهرستان، فروشگاه کدپستی.
                                        </p>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            درگاه پرداخت
                                        </a>
                                        <p class="accordion-content">
                                            پرداخت از طریق پی پال؛ اگر پی پال ندارید می توانید با کارت اعتباری خود پرداخت کنید
                                            حساب کاربری
                                        </p>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            کارت اعتباری
                                        </a>
                                        <p class="accordion-content">
                                            پرداخت از طریق پی پال؛ اگر پی پال ندارید می توانید با کارت اعتباری خود پرداخت کنید
                                            حساب کاربری
                                        </p>
                                    </li>
                                    <li class="accordion-item">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input"
                                                id="ship-differents-address">
                                            <label class="form-check-label" for="ship-different-address">
                                                تمامی شرایط و ضوابط با میپذیرم
                                                <a href="terms-conditions.php">
                                                    شرایط و ضوابط
                                                </a>*</label>
                                        </div>
                                    </li>
                                    <li class="place-order">
                                        <button type="submit" class="default-btn two" name="order">ثبت سفارش</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Main form end -->

    <!-- Submit information to database -->
    <?php
    if (isset($_POST['order'])) {
        $info_firstname = $_POST['firstname'];
        $info_lastname = $_POST['lastname'];
        $info_company = $_POST['company'];
        $info_email = $_POST['email'];
        $info_phone = $_POST['phone'];
        $info_country = $_POST['country'];
        $info_street = $_POST['street'];
        $info_town = $_POST['town'];
        $info_state = $_POST['state'];
        $info_zip = $_POST['zip'];
        $info_notes = $_POST['notes'];

        $errors = [];

        // Define fields
        $fields = [
            'firstname' => true,
            'lastname' => true,
            'company' => false,
            'email' => true,
            'phone' => true,
            'country' => true,
            'street' => true,
            'town' => true,
            'state' => true,
            'zip' => true,
            'notes' => false,
        ];
        $data = [];


        foreach ($fields as $field => $isRequired) {
            if (!empty($_POST[$field])) {
                $data[$field] = $_POST[$field];
            } elseif ($isRequired) {
                $errors[] = ucfirst(str_replace('_', ' ', $field)) . " is required.";
            } else {
                $data[$field] = null;
            }
        }

        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo $error . "<br>";
            }
            exit;
        }

        $query = "INSERT INTO information (info_firstname, info_lastname, info_company, info_email, info_phone, info_country, info_street, info_town, info_state, info_zip, info_note)";
        $query .= " VALUES('$info_firstname', '$info_lastname', '$info_company', '$info_email', '$info_phone', '$info_country', '$info_street', '$info_town', '$info_state', '$info_zip', '$info_notes')";

        $result = mysqli_query($connection, $query);
        confirmQuery($result);
    }
    ?>

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