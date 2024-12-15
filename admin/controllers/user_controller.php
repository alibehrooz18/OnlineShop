<?php
require_once('./models/user_model.php');

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

    if (isset($_POST['send'])) {
        if (isset($_POST['approve'])) {
            $fullname = $_POST['user_fullname'];
            $email = $_POST['user_email'];
            $showname = $_POST['user_showname'];
            $phone = $_POST['user_num'];
            $age = $_POST['user_age'];
            $province = $_POST['user_province'];
            $address = $_POST['user_address'];

            if (updateUser($user_id, $fullname, $email, $showname, $phone, $age, $province, $address)) {
                echo "<p style='color:green;'>اطلاعات با موفقیت به‌روزرسانی شد</p>";
                header("Refresh: 2; URL=/eduon/admin");
            } else {
                header("Location: /eduon/admin/dev_tol/error_500.php");
            }
        } else {
            echo "<p style='color:red;'>لطفا ابتدا اطلاعات خود را تایید کنید</p>";
        }
    }
} else {
    header("Location: ../index.php");
    exit;
}
