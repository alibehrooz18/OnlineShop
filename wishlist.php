<?php include "./assets/includes/db.php"; ?>
<?php
ob_start();
session_start();
?>
<?php
// Function
function confirmQuery($result)
{
    global $connection;
    if (!$result) {
        die("QUERY FAILD" . mysqli_error($connection));
    }
}
?>



<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <?php include "./assets/includes/header.php" ?>

    <title>Eduon - Wishlist</title>
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


    <!-- Navbar area -->
    <div class="navbar-area">

        <!-- Mobile section -->
        <div class="mobile-nav">
            <a href="index.php" class="logo">
                <img src="assets\img\logo.png" class="main-logo" alt="Logo">
                <img src="assets\img\logo-2.png" class="white-logo" alt="Logo">
            </a>
        </div>

        <!-- Main section -->
        <div class="main-nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md">
                    <a class="navbar-brand" href="index.php">
                        <img src="assets\img\logo.png" class="main-logo" alt="Logo">
                        <img src="assets\img\logo-2.png" class="white-logo" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Home
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="index.php" class="nav-link">Home One</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-2.php" class="nav-link">Home Two</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-3.php" class="nav-link">Home Three</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Courses
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="courses.php" class="nav-link">Courses</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="single-course.php" class="nav-link">Single Course</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Pages
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="about.php" class="nav-link">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="feedback.php" class="nav-link">Feedback</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Events
                                            <i class="bx bx-chevron-right"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="events.php" class="nav-link">Events</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="single-event.php" class="nav-link">Single Event</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="instructors.php" class="nav-link">Instructors</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            User
                                            <i class="bx bx-chevron-right"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="my-account.php" class="nav-link">My Account</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="log-in.php" class="nav-link">Log In</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="registration.php" class="nav-link">Registration</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="recover-password.php" class="nav-link">Recover Password</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="gallery.php" class="nav-link">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="faq.php" class="nav-link">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="privacy-policy.php" class="nav-link">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="terms-conditions.php" class="nav-link">Terms & Conditions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="coming-soon.php" class="nav-link">Coming Soon</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="404.php" class="nav-link">404 Error Page</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    Shop
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="shop.php" class="nav-link">Shop</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="cart.php" class="nav-link">Cart</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="checkout.php" class="nav-link">Checkout</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="single-product.php" class="nav-link">Single Product</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="wishlist.php" class="nav-link active">Wishlist</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Blog
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="blog-column-one.php" class="nav-link">Blog Column One</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-column-two.php" class="nav-link">Blog Column Two</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-column-three.php" class="nav-link">Blog Column Three</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-left-sidebar.php" class="nav-link">Blog Left Sidebar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="single-blog.php" class="nav-link">Single Blog</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="contact.php" class="nav-link">Contact</a>
                            </li>
                        </ul>

                        <div class="others-option">
                            <div class="option-item">
                                <i class="search-btn bx bx-search"></i>
                                <i class="close-btn bx bx-x"></i>
                                <div class="search-overlay search-popup">
                                    <div class="search-box">
                                        <form class="search-form">
                                            <input class="search-input" name="search" placeholder="Search" type="text">
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
                                    Login / Register
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
                                            <input class="search-input" name="search" placeholder="Search" type="text">
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
                                    Login / Register
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Banner section -->
    <div class="page-title-area bg-22">
        <div class="container">
            <div class="page-title-content">
                <h2>Wishlist</h2>
                <ul>
                    <li>
                        <a href="index.php">
                            Home
                        </a>
                    </li>
                    <li class="active">Wishlist</li>
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
                                    <th scope="col">Image</th>
                                    <th scope="col">Product name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Add to cart</th>
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
                                        echo "<h3 class='mb-5' style='color: red;'>your selected item exist in wishlist</h3>";
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
                                                    <img src="assets/img/shop/<?php echo $wish_image; ?>" alt="Image">
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
                                                    Add to cart
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
    <?php include "assets/includes/footer.php" ?>
</body>

</html>