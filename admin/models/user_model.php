<?php

function confirmQuery($result)
{
    global $connection;
    if (!$result) {
        die("QUERY FAILED: " . mysqli_error($connection));
    }
}

function emailExists($email)
{
    global $connection;
    $query = "SELECT user_email FROM users WHERE user_email = '$email'";
    $result = mysqli_query($connection, $query);
    return mysqli_num_rows($result) > 0;
}

function mobileExists($number)
{
    global $connection;
    $query = "SELECT user_num FROM users WHERE user_num = '$number'";
    $result = mysqli_query($connection, $query);
    return mysqli_num_rows($result) > 0;
}

function getUserByUsername($username)
{
    global $connection;
    if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
        $query = "SELECT * FROM users WHERE user_email = '{$username}'";
    } else {
        $query = "SELECT * FROM users WHERE user_num = '{$username}'";
    }
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    return mysqli_fetch_assoc($result);
}

function countUsers()
{
    global $connection;
    $query = "SELECT COUNT(*) AS total_user FROM users";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    $row = mysqli_fetch_assoc($result);
    return isset($row['total_user']) ? intval($row['total_user']) : 0;
}

function countSubscribers()
{
    global $connection;
    $query = "SELECT COUNT(*) AS total_subscribers FROM users WHERE user_role = 'subscriber'";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    $row = mysqli_fetch_assoc($result);
    return isset($row['total_subscribers']) ? intval($row['total_subscribers']) : 0;
}

function countCourses()
{
    global $connection;
    $query = "SELECT COUNT(*) AS total_course FROM courses";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    $row = mysqli_fetch_assoc($result);
    return isset($row['total_course']) ? intval($row['total_course']) : 0;
}

function getUserById($user_id)
{
    global $connection;
    $query = "SELECT * FROM users WHERE user_id = $user_id";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    return mysqli_fetch_assoc($result);
}

function updateUser($user_id, $fullname, $email, $showname, $phone, $age, $province, $address)
{
    global $connection;
    $query = "UPDATE users SET user_fullname = '$fullname', user_email = '$email', user_showname = '$showname', 
              user_num = '$phone', user_age = '$age', user_province = '$province', user_address = '$address' 
              WHERE user_id = $user_id";
    return mysqli_query($connection, $query);
}


