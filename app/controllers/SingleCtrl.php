<?php include "../models/SingleModel.php"; ?>
<?php include "../controllers/CoursesCtrl.php"; ?>

<?php
// Use for single_course.php
if (isset($_GET['c_id'])) {
    $course_id = (int)$_GET['c_id'];
    $course_query = getCourseDataById($course_id);
}

$row = mysqli_fetch_assoc($course_query);
$course_author = $row['course_author'];
$author_image = $row['author_image'];
$course_image = $row['course_image'];
$course_price = $row['course_price'];
$course_tags = $row['course_tags'];
$course_title = $row['course_title'];
$course_content = $row['course_content'];
$course_lesson = $row['course_lesson'];
$course_student = $row['course_student'];


// Use for single_product.php
if (isset($_GET['s_pro'])) {
    $item_id = $_GET['s_pro'];
    $get_data = getShopById($item_id);
}

$row = mysqli_fetch_assoc($get_data);
$item_image = $row['item_image'];
$item_title = $row['item_title'];
$item_price = $row['item_price'];
$item_category = $row['item_category_id'];
$item_discount = $row['item_discount'];

$dis_price = $item_price - ($item_price * ($item_discount / 100));
$dis_price = floor($dis_price);


// Get category item
$get_category = getCategoryById($item_category);

$cat_row = mysqli_fetch_assoc($get_category);
$cat_id = $cat_row['cat_id'];
$category = $cat_row['cat_title'];
