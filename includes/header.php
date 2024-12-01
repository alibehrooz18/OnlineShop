<?php
ob_start();
session_start();
?>
<?php include_once __DIR__ . '/db.php'; ?>
<?php

// Function
function confirmQuery($result)
{
    global $connection;
    if (!$result) {
        die("QUERY FAILD" . mysqli_error($connection));
    }
}
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