<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<?php include_once "./assets/includes/db.php"; ?>

<?php
// Functions
function email_exists($email){
    global $connection;

    $query = "SELECT user_email FROM users WHERE user_email = '$email'";
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }
}
function mobile_exists($number){
    global $connection;
    $query = "SELECT user_num FROM users WHERE user_num = '$number'";
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }
}

?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <?php include "./assets/includes/header.php" ?>

    <title>Eduon - My account</title>
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
                <img src="assets\img\logo.png" class="main-logo" alt="Logo">
                <img src="assets\img\logo-2.png" class="white-logo" alt="Logo">
            </a>
        </div>

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
                                <a href="#" class="nav-link active">
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
                                        <a href="#" class="nav-link active">
                                            User
                                            <i class="bx bx-chevron-right"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="my-account.php" class="nav-link active">My Account</a>
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
                                <a href="#" class="nav-link">
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
    <!-- Navbar end -->

    <!-- Page title start -->
    <div class="page-title-area bg-7">
        <div class="container">
            <div class="page-title-content">
                <h2>My account</h2>
                <ul>
                    <li>
                        <a href="index.php">
                            Home
                        </a>
                    </li>
                    <li class="active">My account</li>
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

        if(filter_var($username, FILTER_VALIDATE_EMAIL)) {
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
                echo "Login successful!";
                $_SESSION['username'] = $db_username;
                $_SESSION['user_role'] = $db_role;
    
                // // Remember
                // if(isset($_POST['remember'])) {
                //     $token = bin2hex(random_bytes(16));

                //     $user_id = $row['user_id'];
                //     $query = "UPDATE users SET remember_token = '$token' WHERE user_id = '$user_id'";
                //     $remember_query = mysqli_query($connection, $query);

                //     setcookie("remember_token", $token, time() + (86400 * 2), "/");
                // }

                // // Redirect to the panel or dashboard page
                // header("Location: log-in.php");
                // exit();
            } else {
                echo "Invalid password!";
            }
        } else {
            echo "User not found!";
        }
    }

    ?>

    <section class="user-area-style ptb-100" dir="ltr">
        <div class="container">
            <div class="row">
                <!-- Login start  -->
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>Log In</h2>
                    </div>
                    <div class="contact-form-action mb-50">
                        <form method="post">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Email or Phone</label>
                                        <input class="form-control" type="text" name="username">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" type="password" name="password">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="login-action">
                                        <span class="log-rem mx-3">
                                            <input id="remember" type="checkbox" name="remember" value="1">
                                            <label for="remember">Remember me!</label>
                                        </span>
                                        <span class="forgot-login">
                                            <a href="recover-password.php">Forgot your password?</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="default-btn" type="submit" name="login">
                                        Log In Now
                                    </button>
                                </div>
                                <div class="col-12">
                                    <p>Have an account? <a href="registration.php">Registration Now!</a></p>
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
                        echo $message = "Email exists!";
                    } elseif (mobile_exists($number)) {
                        echo $message = "Mobile number exists!";
                    } elseif (!empty($fullname) && !empty($email) && !empty($number) && !empty($password)) {
                        $hash_password = password_hash($password, PASSWORD_DEFAULT);

                        $query = "INSERT INTO users (user_fullname, user_email, user_num, password, user_role) ";
                        $query .= "VALUES ('{$fullname}', '{$email}', '{$number}', '{$hash_password}', 'subscriber')";
                        $register_query = mysqli_query($connection, $query);

                        if(!$register_query) {
                            die("QUERY FAILED" . mysqli_error($connection));
                        }
                        echo $message = "Your registration has been submitted";
                    } else {
                        echo $message = "Fields cannot be empty";
                    }
                } else {
                    echo $message = "";
                }
                ?>

                <!-- Register start  -->
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>Registration</h2>
                    </div>
                    <div class="contact-form-action">
                        <form method="post">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Full name</label>
                                        <input class="form-control" type="text" name="fullname">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input class="form-control" type="email" name="email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Mobile No</label>
                                        <input class="form-control" type="tel" pattern="[0-9]{4}[0-9]{3}[0-9]{4}" name="number">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" type="password" name="password">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-sm-6">
                                            <button class="default-btn register" type="submit" name="register">
                                                Register Now
                                            </button>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 text-right">
                                            <input id="remember-1" type="checkbox">
                                            <label for="remember">Show password ?</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p>Have an account? <a href="log-in.php">Login Now!</a></p>
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
    <?php include "assets/includes/footer.php" ?>
</body>

</html>