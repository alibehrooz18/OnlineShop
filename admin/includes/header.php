<?php
ob_start();
session_start();
?>
<?php include_once __DIR__ . '/../../includes/db.php'; ?>


<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="images\favicon.ico">



<!-- Vendors Style-->
<link rel="stylesheet" href="src\css\vendors_css.css">

<!-- Style-->
<link rel="stylesheet" href="src\css\style.css">
<link rel="stylesheet" href="src\css\skin_color.css">



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


