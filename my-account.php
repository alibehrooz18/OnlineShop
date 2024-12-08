<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <?php include "includes/header.php"; ?>

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
                                <a href="/eduon/app/view/courses.php" class="nav-link">
                                    دروس
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/eduon/app/view/gallery.php" class="nav-link">نمایشگاه</a>
                            </li>
                            <li class="nav-item">
                                <a href="/eduon/app/view/events.php" class="nav-link">رویدادها</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    فروشگاه
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="/eduon/app/view/shop.php" class="nav-link">فروشگاه</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/eduon/app/view/wishlist.php" class="nav-link">علاقه‌مندی ها</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="/eduon/app/view/contact.php" class="nav-link">ارتباط با ما</a>
                            </li>
                            <li class="nav-item">
                                <a href="/eduon/app/view/about.php" class="nav-link">درباره ما</a>
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
                                <a href="app/view/cart.php">
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
                                                    <a href="./admin" class="nav-link">داشبورد</a>
                                                </li>
                                                <li class="dropdown-item">/eduon/app/view/
                                                    <a href="./admin/offers.php" class="nav-link">آموزش‌ها</a>
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

    <?php
    // Login section
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $username = mysqli_escape_string($connection, $username);
        $password = mysqli_escape_string($connection, $password);

        if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
            $query = "SELECT * FROM users WHERE user_email = '{$username}'";
        } else {
            $query = "SELECT * FROM users WHERE user_num = '{$username}'";
        }
        $select_user = mysqli_query($connection, $query);
        if (!$select_user) {
            die("QUERY FAILED" . mysqli_error($connection));
        }

        if ($row = mysqli_fetch_array($select_user)) {
            $db_id = $row['user_id'];
            $db_username = $username;
            $db_password = $row['password'];
            $db_role = $row['user_role'];

            if (password_verify($password, $db_password)) {
                echo "ورود موفق!";
                $_SESSION['username'] = $db_username;
                $_SESSION['user_role'] = $db_role;

                // // Remember
                if (isset($_POST['remember'])) {
                    $token = bin2hex(random_bytes(16));

                    $user_id = $row['user_id'];
                    $query = "UPDATE users SET remember_token = '$token' WHERE user_id = '$user_id'";
                    $remember_query = mysqli_query($connection, $query);

                    setcookie("remember_token", $token, time() + (86400 * 2), "/");
                }

                // Redirect to the panel or dashboard page
                if ($_SESSION['user_role'] === 'admin') {
                    // Redirect to admin section
                    header("Location: ./admin");
                } else {
                    // Redirect to user dashboard
                    header("Location: index.php");
                }
                exit();
            } else {
                echo "کلمه عبور نامعتبر!";
            }
        } else {
            echo "کاربر پیدا نشد!";
        }
    }

    ?>

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

                <?php
                // Register section
                if (isset($_POST['register'])) {
                    $fullname = mysqli_escape_string($connection, $_POST['fullname']);
                    $email = mysqli_escape_string($connection, $_POST['email']);
                    $number = mysqli_escape_string($connection, $_POST['number']);
                    $password = mysqli_escape_string($connection, $_POST['password']);

                    if (email_exists($email)) {
                        echo $message = "ایمیل موجود است!";
                    } elseif (mobile_exists($number)) {
                        echo $message = "تلفن موجود است!";
                    } elseif (!empty($fullname) && !empty($email) && !empty($number) && !empty($password)) {
                        $hash_password = password_hash($password, PASSWORD_DEFAULT);

                        $query = "INSERT INTO users (user_fullname, user_email, user_num, password, user_role) ";
                        $query .= "VALUES ('{$fullname}', '{$email}', '{$number}', '{$hash_password}', 'subscriber')";
                        $register_query = mysqli_query($connection, $query);

                        if (!$register_query) {
                            die("QUERY FAILED" . mysqli_error($connection));
                        }
                        echo $message = "ثبت نام شما با موفقیت انجام شد!";
                        // Redirect to the panel or dashboard page
                        header("Location: log-in.php");
                        
                    } else {
                        echo $message = "فیلدها نباید خالی باشند!";
                    }
                } else {
                    echo $message = "";
                }
                ?>

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