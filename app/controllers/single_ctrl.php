<?php include "../models/single_model.php";?>
<?php include "../controllers/courses_ctrl.php";?>

<?php
if (isset($_GET['c_id'])) {
    $course_id = (int)$_GET['c_id'];
}
$course_query = getCourseDataById($course_id);

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