<?php include "./assets/includes/db.php"; ?>
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

    <title>Eduon - Checkout</title>
</head>

<body>

    <!-- <div class="loader-wrapper">
        <div class="loader">
            <div class="dot-wrap">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </div> -->


    <!-- Navbar start -->
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
                                        <a href="checkout.php" class="nav-link active">Checkout</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="single-product.php" class="nav-link">Single Product</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="wishlist.php" class="nav-link">Wishlist</a>
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
    <div class="page-title-area bg-21">
        <div class="container">
            <div class="page-title-content">
                <h2>Checkout</h2>
                <ul>
                    <li>
                        <a href="index.php">
                            Home
                        </a>
                    </li>
                    <li class="active">Checkout</li>
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
                            <h3 class="title">Billing details</h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>First name <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="firstname">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Last name <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="lastname">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Company name (Optional)
                                        </label>
                                        <input type="text" class="form-control" name="company">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Email <span class="required">*</span></label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Phone <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="phone">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group" dir="rtl">
                                        <label dir="ltr">Country <span class="required">*</span></label>
                                        <div class="select-box">
                                            <select class="form-control" name="country">
                                                <option value="5">United Kingdom</option>
                                                <option value="1">China</option>
                                                <option value="2">United Arab Emirates</option>
                                                <option value="0">Germany</option>
                                                <option value="3">France</option>
                                                <option value="4">Japan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label>Street address <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="street">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label>Town / City <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="town">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>State<span class="required">*</span></label>
                                        <input type="text" class="form-control" name="state">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Zip <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="zip">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="ship-different-address" name="shipToDiffAdr">
                                        <label class="form-check-label" for="ship-different-address">Ship to a different
                                            address?</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Order notes (Optional)</label>
                                        <textarea name="notes" id="notes" cols="30" rows="8"
                                            class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="order-details">
                            <div class="cart-totals">
                                <h3>Checkout summary</h3>
                                <ul>
                                    <li>Subtotal <span>$170.00</span></li>
                                    <li>Shipping <span>$170.00</span></li>
                                    <li>Coupon <span>$20.00</span></li>
                                    <li>Total <span>$150.00</span></li>
                                    <li><b>Payable Total</b> <span><b>$150.00</b></span></li>
                                </ul>
                            </div>
                            <div class="faq-accordion">
                                <h3>Payment method</h3>
                                <ul class="accordion">
                                    <li class="accordion-item active">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            Direct bank transfer
                                        </a>
                                        <p class="accordion-content show">
                                            Make your payment directly into our bank account. Please use your Order ID
                                            as the payment reference. Your order won’t be shipped until the funds have
                                            our account.
                                        </p>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            Cash on delivery
                                        </a>
                                        <p class="accordion-content">
                                            Please send your cheque to Store Name, Store Street, Store Town, Store State
                                            / County, Store Postcode.
                                        </p>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            Check payments
                                        </a>
                                        <p class="accordion-content">
                                            Please send your cheque to Store Name, Store Street, Store Town, Store State
                                            / County, Store Postcode.
                                        </p>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            PayPal
                                        </a>
                                        <p class="accordion-content">
                                            Pay via PayPal; you can pay with your credit card if you don’t have a PayPal
                                            account.
                                        </p>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            Credit card
                                        </a>
                                        <p class="accordion-content">
                                            Pay via PayPal; you can pay with your credit card if you don’t have a PayPal
                                            account.
                                        </p>
                                    </li>
                                    <li class="accordion-item">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input"
                                                id="ship-differents-address">
                                            <label class="form-check-label" for="ship-different-address">I’ve read and
                                                accept the <a href="terms-conditions.php">terms &
                                                    conditions</a>*</label>
                                        </div>
                                    </li>
                                    <li class="place-order">
                                        <button type="submit" class="default-btn two" name="order">Place order</button>
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
    if(isset($_POST['order'])) {
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
            if(!empty($_POST[$field])) {
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
    <?php include "assets/includes/footer.php" ?>
</body>

</html>