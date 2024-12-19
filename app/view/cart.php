<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <?php include "../../includes/header.php"; ?>
    <?php include "../controllers/cart_ctrl.php"; ?>

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

    <title>Eduon - سبد خرید</title>
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



    <!-- Banner section -->
    <div class="page-title-area bg-20">
        <div class="container">
            <div class="page-title-content">
                <h2>سبد خرید</h2>
                <ul>
                    <li>
                        <a href="index.php">
                            خانه
                        </a>
                    </li>
                    <li class="active">سبد خرید</li>
                </ul>
            </div>
        </div>
    </div>


    <!-- Main section start -->
    <section class="cart-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <form>
                        <div class="cart-wraps">
                            <div class="cart-table table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">تصویر محصول</th>
                                            <th scope="col">نام محصول</th>
                                            <th scope="col">قیمت</th>
                                            <th scope="col">تعداد</th>
                                            <th scope="col">کل</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        if (isset($_GET['p_id']) && isset($_GET['user'])) {
                                            if (mysqli_num_rows($check_exist) === 0) {
                                                $quantity = 1;

                                                $post_item = postProductCart($shop_id, $quantity, $user_id);
                                                header("Location: cart.php");
                                            } else {
                                                echo "<h3 class='mb-5' style='color: red;'>محصول انتخابی در لیست موجود است</h3>";
                                            }
                                        }

                                        while ($cart_row = mysqli_fetch_assoc($cart_item)) {
                                            $cart_id = $cart_row['cart_id'];
                                            $cart_shop_id = $cart_row['cart_shop_id'];
                                            $cart_quantity = $cart_row['cart_quantity'];

                                            // Get information from shop for cart
                                            $get_cart = getItemById($cart_shop_id);

                                            if ($row = mysqli_fetch_assoc($get_cart)) {
                                                $cart_image = $row['item_image'];
                                                $cart_title = $row['item_title'];
                                                $cart_price = $row['item_price'];
                                                $cart_dis = $row['item_discount'];

                                                $dis_price = $cart_price - ($cart_price * ($cart_dis / 100));
                                                $dis_price = floor($dis_price);

                                                $total_price = $dis_price * $cart_quantity;
                                                $subtotal += $total_price;
                                        ?>
                                                <tr>
                                                    <td class="product-thumbnail">
                                                        <a href="single-product.php">
                                                            <img src="../../public/img/shop/<?php echo $cart_image; ?>" alt="Image">
                                                        </a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="single-product.php"><?php echo $cart_title; ?></a>
                                                    </td>
                                                    <td class="product-price">
                                                        <span class="unit-amount">$<?php echo number_format($dis_price, 2); ?></span>
                                                    </td>
                                                    <td class="product-quantity">
                                                        <div class="input-counter">
                                                            <span class="minus-btn">
                                                                <i class="bx bx-minus"></i>
                                                            </span>
                                                            <input type="text" value="<?php echo $cart_quantity; ?>" min="1" class="quantity-input" name="quantity_<?php echo $cart_id; ?>">
                                                            <span class="plus-btn">
                                                                <i class="bx bx-plus"></i>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="product-subtotal">
                                                        <span class="subtotal-amount" id="subtotal">$<?php echo number_format($total_price, 2); ?></span>
                                                        <a href="cart.php?remove=<?php echo $cart_id; ?>" class="remove">
                                                            <i class="bx bx-x"></i>
                                                        </a>
                                                        <?php
                                                        if (isset($_GET['update'])) {

                                                            $quantity = intval($_GET['quantity_' . $cart_id]);

                                                            $query = "UPDATE cart SET cart_quantity = $quantity WHERE cart_id = $cart_id";
                                                            $update_quantity = mysqli_query($connection, $query);
                                                            confirmQuery($update_quantity);

                                                            header("Location: cart.php");
                                                        }


                                                        if (isset($_GET['remove'])) {
                                                            $remove = intval($_GET['remove']);

                                                            $remove = mysqli_real_escape_string($connection, $remove);

                                                            $query = "DELETE FROM cart WHERE cart_id = $remove";
                                                            $result = mysqli_query($connection, $query);

                                                            if ($result) {
                                                                header("Location: cart.php");
                                                                exit();
                                                            } else {
                                                                echo "خطا: مورد حذف نشد. لطفا دوباره امتحان کنید.";
                                                            }
                                                        }
                                                        ?>
                                                    </td>
                                            <?php
                                            }
                                        }
                                            ?>
                                                </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="coupon-cart">
                                <div class="row">
                                    <div class="col-lg-8 col-sm-7">
                                        <div class="form-group mb-0">
                                            <input type="text" class="form-control" placeholder="کد تخفیف">
                                            <a href="cart.php" class="default-btn">اعمال کد تخفیف</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-5 text-right">
                                        <button class="default-btn update" name="update">بروزرسانی سبد خرید</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <h3 class="cart-checkout-title">صورت حساب</h3>
                    <div class="cart-totals">
                        <?php
                        $shiping = 50;
                        $coupon = 00;
                        $payable_total = $subtotal + $shiping - $coupon;
                        ?>
                        <ul>
                            <li>جمع محصولات<span>$<?php echo number_format($subtotal, 2); ?></span></li>
                            <li>حمل و نقل<span>$<?php echo number_format($shiping, 2); ?></span></li>
                            <li>کد تخفیف<span>$<?php echo number_format($coupon, 2); ?></span></li>
                            <li><b>جمع قابل پرداخت</b> <span><b>$<?php echo number_format($payable_total, 2); ?></b></span></li>
                        </ul>
                        <a href="checkout.php?p_total=<?php echo $payable_total;?>&user=<?php echo $user_id;?>&subtotal=<?php echo $subtotal;?>&shiping=<?php echo $shiping;?>&coupon=<?php echo $coupon;?>"
                            class="default-btn two">
                            پرداخت
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main section end -->


    <!-- Footer -->
    <?php include "../../includes/footer.php"
    ?>

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