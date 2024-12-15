<?php include "../controllers/user_controller.php"; ?>
<?php
require_once '../model/details_model.php';

if (isset($_GET['c_id'])) {
    $course_id = $_GET['c_id'];

    // Fetch course details
    $course_details = getCourseDetails($connection, $course_id);

    $detail_id = $course_details['course_id'];
    $detail_category_id = $course_details['course_category_id'];
    $detail_title = $course_details['course_title'];
    $detail_content = $course_details['course_content'];
    $detail_date = $course_details['course_date'];
    $detail_tags = $course_details['course_tags'];
    $detail_price = $course_details['course_price'];
    $detail_status = $course_details['course_status'];

    // Fetch category details if available
    if (isset($detail_category_id)) {
        $category_details = getCategoryDetails($connection, $detail_category_id);
        $category_title = $category_details['cat_title'];
    }

    // Translate course status
    if (isset($detail_status)) {
        switch ($detail_status) {
            case "published":
                $detail_status = "منتشر شده";
                break;
            case "drafted":
                $detail_status = "پیش نویس";
                break;
            case "stoped":
                $detail_status = "بسته شده";
                break;
        }
    }

    // Update course status if requested
    if (isset($_GET['status'])) {
        $status = $_GET['status'];
        updateCourseStatus($connection, $course_id, $status);
        header("Location: ./course-details.php?c_id=$course_id");
        exit;
    }
}
