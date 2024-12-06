<?php
// Function
function confirmQuery($result)
{
    global $connection;
    if (!$result) {
        die("QUERY FAILD" . mysqli_error($connection));
    }
    
}

function email_exists($email)
{
    global $connection;

    $query = "SELECT user_email FROM users WHERE user_email = '$email'";
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }
}

function mobile_exists($number)
{
    global $connection;
    $query = "SELECT user_num FROM users WHERE user_num = '$number'";
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }
}


// Controll for check user login or not 
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    // Filter value of username
    if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
        $query = "SELECT * FROM users WHERE user_email = '{$username}'";
    } else {
        $query = "SELECT * FROM users WHERE user_num = '{$username}'";
    }
    $user_data = mysqli_query($connection, $query);
    confirmQuery($user_data);

    $row = mysqli_fetch_assoc($user_data);
    $user_id = $row['user_id'];
    $user_name = $row['user_fullname'];
    $user_showname = $row['user_showname'];
    $user_email = $row['user_email'];
    $user_role = $row['user_role'];

    if ($user_role == "subscriber") {
        $user_role = " مشترک ";
    } else {
        $user_role = " ادمین ";
    }
} else {
    header("Location: ../index.php");
}


// Use diffrent query for get data from database
$sub_user = 0;

$query_user = "SELECT COUNT(*) AS total_user FROM users";
$total_user = mysqli_query($connection, $query_user);
confirmQuery($total_user);

$row = mysqli_fetch_assoc($total_user);
$all_user = isset($row['total_user']) ? intval($row['total_user']) : 0;

// Query to count subscribers
$query_subscribers = "SELECT COUNT(*) AS total_subscribers FROM users WHERE user_role = 'subscriber'";
$total_subscribers = mysqli_query($connection, $query_subscribers);
confirmQuery($total_subscribers);

$row_subscribers = mysqli_fetch_assoc($total_subscribers);
$sub_user = isset($row_subscribers['total_subscribers']) ? intval($row_subscribers['total_subscribers']) : 0;

// Query to count courses
$query_courses = "SELECT COUNT(*) AS total_course FROM courses";
$total_courses = mysqli_query($connection, $query_courses);
confirmQuery($total_courses);

$row_courses = mysqli_fetch_assoc($total_courses);
$all_courses = isset($row_courses['total_course']) ? intval($row_courses['total_course']) : 0;


// Get data for user information in form_information.php
$fullname   = isset($_POST['user_fullname']) ? htmlspecialchars($_POST['user_fullname']) : '';
$email      = isset($_POST['user_email']) ? htmlspecialchars($_POST['user_email']) : '';
$showname   = isset($_POST['user_showname']) ? htmlspecialchars($_POST['user_showname']) : '';
$phone      = isset($_POST['user_num']) ? htmlspecialchars($_POST['user_num']) : '';
$age        = isset($_POST['user_age']) ? htmlspecialchars($_POST['user_age']) : '';
$province   = isset($_POST['user_province']) ? htmlspecialchars($_POST['user_province']) : '';
$address    = isset($_POST['user_address']) ? htmlspecialchars($_POST['user_address']) : '';

if (isset($_GET['p_id'])) {
    $user_id = $_GET['p_id'];
    $query = "SELECT * FROM users WHERE user_id = $user_id";
    $get_user_data = mysqli_query($connection, $query);
    confirmQuery($get_user_data);

    $row = mysqli_fetch_assoc($get_user_data);

    $fullname   = $row['user_fullname'];
    $email      = $row['user_email'];
    $showname   = $row['user_showname'];
    $phone      = $row['user_num'];
    $age        = $row['user_age'];
    $province   = $row['user_province'];
    $address    = $row['user_address'];
}
if (isset($_POST['send'])) {
    if (isset($_POST['approve'])) {
        $fullname   = $_POST['user_fullname'];
        $email      = $_POST['user_email'];
        $showname   = $_POST['user_showname'];
        $phone      = $_POST['user_num'];
        $age        = $_POST['user_age'];
        $province   = $_POST['user_province'];
        $address    = $_POST['user_address'];

        $query = "UPDATE users SET user_fullname = '$fullname', user_email = '$email',";
        $query .= " user_showname = '$showname', user_num = '$phone', user_age = '$age',";
        $query .= " user_province = '$province', user_address = '$address' WHERE user_id = $user_id";
        $update_user = mysqli_query($connection, $query);
        if ($update_user) {
            echo "<p style='color:green;'>اطلاعات با موفقیت به‌روزرسانی شد</p>";
            header("Refresh: 2; URL=/eduon/admin");
        } else {
            header("Location: /eduon/admin/dev_tol/error_500.php");
        }
    } else {
        echo "<p style='color:red;'>لطفا ابتدااطلاعات خود را تایید کنید</p>";
    }
}







