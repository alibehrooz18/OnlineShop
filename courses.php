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

    <title>Eduon - Online Courses</title>
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
                                <a href="#" class="nav-link active">
                                    Courses
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="courses.php" class="nav-link active">Courses</a>
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


    <!-- Banner start -->
    <div class="page-title-area bg-4">
        <div class="container">
            <div class="page-title-content">
                <h2>Courses</h2>
                <ul>
                    <li>
                        <a href="index.php">
                            Home
                        </a>
                    </li>
                    <li class="active">courses</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Banner end -->


    <!-- Course section start -->
    <section class="courses-area-style ptb-100">
        <div class="container">
            <div class="showing-result">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-4">
                        <div class="showing-result-count">
                            <p>Showing 1-8 of 14 results</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <!-- Category selection dropdown -->
                        <div class="showing-top-bar-ordering">
                            <form method="GET">
                                <select name="category" onchange="this.form.submit()">
                                    <option value="">Default sorting</option>
                                    <?php
                                    $selected_category = isset($_GET['category']) ? $_GET['category'] : '';
                                    $query = "SELECT * FROM categories";
                                    $select_cat_query = mysqli_query($connection, $query);
                                    confirmQuery($select_cat_query);

                                    while ($row = mysqli_fetch_assoc($select_cat_query)) {
                                        $cat_id = $row['cat_id'];
                                        $cat_title = $row['cat_title'];
                                        $selected_attr = ($cat_id == $selected_category) ? 'selected' : '';
                                        echo "<option value='{$cat_id}' {$selected_attr}>{$cat_title}</option>";
                                    }
                                    ?>
                                </select>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <!-- Search form -->
                        <form class="search-form" action="courses.php" method="GET">
                            <input class="form-control" name="search" placeholder="Search our courses" type="text">
                            <button class="search-btn" type="submit">
                                <i class="bx bx-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Display filtered courses -->
            <div class="row">
                <?php
                // Pagination logic 
                $courses_per_page = 6;
                $query = "SELECT COUNT(*) AS total_courses FROM courses";
                $course_query = mysqli_query($connection, $query);
                confirmQuery($course_query);
                $row = mysqli_fetch_assoc($course_query);
                $total_courses = $row['total_courses'];
                $total_pages = ceil($total_courses / $courses_per_page);
                $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                $current_page = max(1, min($current_page, $total_pages));
                $offset = ($current_page - 1) * $courses_per_page;

                // Search 
                $search_query = '';
                if (isset($_GET['search']) && $_GET['search'] !== '') {
                    $search_query = " WHERE course_tags LIKE '%" . mysqli_real_escape_string($connection, $_GET['search']) . "%'";
                } elseif (isset($_GET['category']) && $_GET['category'] !== '') {
                    $category_id = mysqli_real_escape_string($connection, $_GET['category']);
                    $search_query = " WHERE course_category_id = '{$category_id}'";
                }

                $query = "SELECT * FROM courses" . $search_query. " LIMIT $courses_per_page OFFSET $offset";
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
                                    <img src="assets/img/course-img/<?php echo $course_image ?>" alt="Image">
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
                                        <li><span>0.5</span><a href="single-course.php">(1 rating)</a></li>
                                    </ul>
                                    <p><?php echo $course_content ?></p>
                                    <ul class="lessons">
                                        <li><?php echo $course_lesson ?> Lessons</li>
                                        <li class="float"><?php echo $course_student ?> Students</li>
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

            <!-- Pagination -->
            <div class="col-lg-12 col-md-12">
                <div class="pagination-area">
                <?php

                if ($current_page > 1) {
                    echo '<a href="courses.php?page=' . ($current_page - 1) . '" class="prev page-numbers">';
                    echo '<i class="bx bx-chevron-left"></i>';
                    echo '</a>';
                }
                for ($i = 1; $i <= $total_pages; $i++) {
                    if ($i == $current_page) {
                        echo '<span class="page-numbers current" aria-current="page">' . $i . '</span>';
                    } else {
                        echo '<a href="courses.php?page=' . $i . '" class="page-numbers">' . $i . '</a>';
                    }
                }
                if ($current_page < $total_pages) {
                    echo '<a href="courses.php?page=' . ($current_page + 1) . '" class="next page-numbers">';
                    echo '<i class="bx bx-chevron-right"></i>';
                    echo '</a>';
                }

                ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Course section end -->



    <!-- Footer -->
    <?php include "assets/includes/footer.php" ?>
</body>

</html>