<?php require_once('../models/user_model.php'); ?>
<?php require_once('../models/courses_model.php'); ?>
<?php
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    // Get user details
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

    // Statistics
    $all_user = countUsers();
    $sub_user = countSubscribers();
    $all_courses = countCourses();

    // User form data
    if (isset($_GET['p_id'])) {
        $user_id = $_GET['p_id'];
        $user_data = getUserById($user_id);

        $fullname = $user_data['user_fullname'];
        $email = $user_data['user_email'];
        $showname = $user_data['user_showname'];
        $phone = $user_data['user_num'];
        $age = $user_data['user_age'];
        $province = $user_data['user_province'];
        $address = $user_data['user_address'];
    }
    
    class CourseController
    {
        public function getCoursesForUser($user_showname)
        {
            if (isset($user_showname)) {
                return getCoursesByAuthor($user_showname);
            }
            
            return [];
        }
    }
    
}