<?php include "../models/CoursesModel.php"; ?>
<?php require_once "../models/MainModel.php"; ?>

<?php
// Check for entered user and get them data
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    $user_data = getUserByUsername($username);
    if ($user_data) {
        $user_id = $user_data['user_id'];
        $user_name = $user_data['user_fullname'];
        $user_showname = $user_data['user_showname'];
        $user_email = $user_data['user_email'];
        $user_role = $user_data['user_role'];

        $user_role = ($user_role === "subscriber") ? "مشترک" : "ادمین";
    } else {
        header("Location: ../index.php");
        exit;
    }

    $get_cart_data = getCartItemCount($user_id);
    // Fetch the count from the result
    $row = mysqli_fetch_assoc($get_cart_data);
    $item_cart = isset($row['item_count']) ? intval($row['item_count']) : 0;
} else {
    $item_cart = 0;
}


// Get course data for show total item
$courses_per_page = 6;

$result = getCoursesTotal();
$row = mysqli_fetch_assoc($result);
$total_items = $row['total_items'];

$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$current_page = max(1, $current_page);
// Calculate start and end range
$start_item = ($current_page - 1) * $courses_per_page + 1;
$end_item = min($start_item + $courses_per_page - 1, $total_items);


// get category query and show 
$result = getCategoryItem();


// Pagination logic
$per_result = getCoursesTotal();
$row = mysqli_fetch_assoc($per_result);
$total_courses = $row['total_items'];
$total_pages = ceil($total_courses / $courses_per_page);
$total_pages = ceil($total_courses / $courses_per_page);
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$current_page = max(1, min($current_page, $total_pages));
$offset = ($current_page - 1) * $courses_per_page;


// Filter course
$filters = [
    'search' => isset($_GET['search']) ? $_GET['search'] : '',
    'category' => isset($_GET['category']) ? $_GET['category'] : '',
];

$offset = isset($_GET['offset']) ? intval($_GET['offset']) : 0;

$course_query = getFilteredCourses($filters, $courses_per_page, $offset);
