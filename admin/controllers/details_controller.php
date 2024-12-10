<?php include "../controllers/user_controller.php"; ?>
<?php
if (isset($_GET['c_id'])) {
    $course_id = $_GET['c_id'];
    $query = "SELECT * FROM courses WHERE course_id = $course_id";
    $course_details = mysqli_query($connection, $query);
    confirmQuery($course_details);

    $row = mysqli_fetch_assoc($course_details);
    $detail_id = $row['course_id'];
    $detail_category_id = $row['course_category_id'];
    $detail_title = $row['course_title'];
    $detail_content = $row['course_content'];
    $detail_date = $row['course_date'];
    $detail_tags = $row['course_tags'];
    $detail_price = $row['course_price'];
    $detail_status = $row['course_status'];

    if (isset($detail_category_id)) {
        $query = "SELECT * FROM categories WHERE cat_id = $detail_category_id";
        $get_category = mysqli_query($connection, $query);
        confirmQuery($get_category);

        $row = mysqli_fetch_assoc($get_category);

        $category_title = $row['cat_title'];
    }
    if (isset($detail_status)) {
        if ($detail_status == "published") {
            $detail_status = "منتشر شده";
        } elseif ($detail_status == "drafted") {
            $detail_status = "پیش نویس";
        } elseif ($detail_status == "stoped") {
            $detail_status = "بسته شده";
        }
    }
    if (isset($_GET['status']) && isset($_GET['c_id'])) {
        $status_id = $_GET['c_id'];
        $status = $_GET['status'];

        if ($status == "published") {
            $query = "UPDATE courses SET course_status = 'published'";
            $update_status = mysqli_query($connection, $query);
            confirmQuery($update_status);
            header("Location: ./course-details.php?c_id=$status_id");
        } elseif ($status == "drafted") {
            $query = "UPDATE courses SET course_status = 'drafted'";
            $update_status = mysqli_query($connection, $query);
            confirmQuery($update_status);
            header("Location: ./course-details.php?c_id=$status_id");
        } elseif ($status == "stoped") {
            $query = "UPDATE courses SET course_status = 'stoped'";
            $update_status = mysqli_query($connection, $query);
            confirmQuery($update_status);
            header("Location: ./course-details.php?c_id=$status_id");
        }
    }
}
