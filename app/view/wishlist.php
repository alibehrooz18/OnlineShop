<?php
ob_start();
?>

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

    <title>Eduon - علاقه‌مندی ها</title>
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
                                        <a href="shop.php" class="nav-link">فروشگاه</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="wishlist.php" class="nav-link active">علاقه‌مندی ها</a>
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
    <div class="page-title-area bg-22">
        <div class="container">
            <div class="page-title-content">
                <h2>علاقه‌مندی ها</h2>
                <ul>
                    <li>
                        <a href="index.php">
                            خانه
                        </a>
                    </li>
                    <li class="active">علاقه‌مندی ها</li>
                </ul>
            </div>
        </div>
    </div>


    <!-- Main area -->
    <div class="cart-area ptb-100">
        <div class="container">
            <form>
                <div class="cart-wraps wishlist-wrap">
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">تصویر محصول</th>
                                    <th scope="col">نام محصول</th>
                                    <th scope="col">قیمت</th>
                                    <th scope="col">تعداد</th>
                                    <th scope="col">کل</th>
                                    <!-- <th scope="col">افزودن به سبد خرید</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $subtotal = 0;
                                // Get product id and send to wishlist
                                if (isset($_GET['wishlist'])) {
                                    $shop_id = mysqli_real_escape_string($connection, $_GET['wishlist']);
                                    $query = "SELECT * FROM wishlists WHERE wish_shop_id = $shop_id";
                                    $check_exist = mysqli_query($connection, $query);
                                    confirmQuery($check_exist);

                                    // Check if not find create on wishlist
                                    if (mysqli_num_rows($check_exist) === 0) {

                                        $query = "INSERT INTO wishlists (wish_shop_id) VALUES ('$shop_id')";
                                        $result = mysqli_query($connection, $query);
                                        confirmQuery($result);
                                    } else {
                                        echo "<h3 class='mb-5' style='color: red;'>محصول انتخابی در لیست موجود است</h3>";
                                    }
                                }
                                $query = "SELECT * FROM wishlists";
                                $result = mysqli_query($connection, $query);
                                confirmQuery($result);

                                while ($wish_row = mysqli_fetch_assoc($result)) {
                                    $wish_id = $wish_row['wish_id'];
                                    $shop_id = $wish_row['wish_shop_id'];
                                    $quantity = $wish_row['wish_quantity'];

                                    // Get information from shop for wishlist
                                    $query = "SELECT * FROM shop WHERE item_id = $shop_id";
                                    $get_wish = mysqli_query($connection, $query);
                                    confirmQuery($get_wish);

                                    if ($row = mysqli_fetch_assoc($get_wish)) {
                                        $wish_image = $row['item_image'];
                                        $wish_title = $row['item_title'];
                                        $wish_price = $row['item_price'];
                                        $wish_dis = $row['item_discount'];

                                        $dis_price = $wish_price - ($wish_price * ($wish_dis / 100));
                                        $dis_price = floor($dis_price);

                                        $total_price = $dis_price * $quantity;
                                        $subtotal += $total_price;
                                ?>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="single-product.php">
                                                    <img src="../../public/img/shop/<?php echo $wish_image; ?>" alt="Image">
                                                </a>
                                            </td>
                                            <td class="product-name">
                                                <a href="single-product.php"><?php echo $wish_title; ?></a>
                                            </td>
                                            <td class="product-price">
                                                <span class="unit-amount">$<?php echo number_format($dis_price, 2); ?></span>
                                            </td>
                                            <td class="product-quantity">
                                                <div class="input-counter">
                                                    <button class="minus-btn" name="minus-<?php echo $wish_id; ?>" value="<?php echo $wish_id; ?>">
                                                        <i class="bx bx-minus"></i>
                                                    </button>
                                                    <input type="text" value="<?php echo $quantity; ?>" min="0" class="quantity-input" name="quantity_<?php echo $wish_id; ?>">
                                                    <button class="plus-btn" name="plus-<?php echo $wish_id; ?>" value="<?php echo $wish_id; ?>">
                                                        <i class="bx bx-plus"></i>
                                                    </button>
                                                </div>
                                                <?php
                                                // Change value of quantity
                                                if (isset($_GET['minus-' . $wish_id])) {
                                                    $minus = $_GET['minus-' . $wish_id];
                                                    $minus_quantity = $quantity - 1;
                                                    $query = "UPDATE wishlists SET wish_quantity = $minus_quantity WHERE wish_id = $minus";
                                                    $update_quantity = mysqli_query($connection, $query);
                                                    confirmQuery($update_quantity);

                                                    header("Location: wishlist.php");
                                                }
                                                if (isset($_GET['plus-' . $wish_id])) {
                                                    $plus = $_GET['plus-' . $wish_id];
                                                    $plus_quantity = $quantity + 1;
                                                    $query = "UPDATE wishlists SET wish_quantity = $plus_quantity WHERE wish_id = $plus";
                                                    $update_quantity = mysqli_query($connection, $query);
                                                    confirmQuery($update_quantity);

                                                    header("Location: wishlist.php");
                                                }
                                                ?>
                                            </td>
                                            <td class="product-subtotal">
                                                <span class="subtotal-amount" id="subtotal">$<?php echo number_format($total_price, 2); ?></span>
                                            </td>
                                            <td class="product-subtotal">
                                                <a href="cart.php?p_id=<?php echo $shop_id; ?>&quantity=<?php echo $quantity; ?>" class="default-btn">
                                                    افزودن به سبد خرید
                                                </a>
                                            </td>
                                    <?php
                                    }
                                }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
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

<?php
ob_end_flush();
?>


</html>