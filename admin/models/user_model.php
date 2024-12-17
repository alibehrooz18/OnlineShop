<?php

function confirmQuery($result)
{
    $db = Database::getInstance();
    $connection = $db->getConnection();
    if (!$result) {
        die("QUERY FAILED: " . mysqli_error($connection));
    }
}

function emailExists($email)
{
    $db = Database::getInstance();
    $connection = $db->getConnection();
    $query = "SELECT user_email FROM users WHERE user_email = '$email'";
    $result = mysqli_query($connection, $query);
    return mysqli_num_rows($result) > 0;
}

function mobileExists($number)
{
    $db = Database::getInstance();
    $connection = $db->getConnection();
    $query = "SELECT user_num FROM users WHERE user_num = '$number'";
    $result = mysqli_query($connection, $query);
    return mysqli_num_rows($result) > 0;
}

function getUserByUsername($username)
{
    $db = Database::getInstance();
    $connection = $db->getConnection();
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
    $db = Database::getInstance();
    $connection = $db->getConnection();
    $query = "SELECT COUNT(*) AS total_user FROM users";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    $row = mysqli_fetch_assoc($result);
    return isset($row['total_user']) ? intval($row['total_user']) : 0;
}

function countSubscribers()
{
    $db = Database::getInstance();
    $connection = $db->getConnection();
    $query = "SELECT COUNT(*) AS total_subscribers FROM users WHERE user_role = 'subscriber'";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    $row = mysqli_fetch_assoc($result);
    return isset($row['total_subscribers']) ? intval($row['total_subscribers']) : 0;
}

function countCourses()
{
    $db = Database::getInstance();
    $connection = $db->getConnection();
    $query = "SELECT COUNT(*) AS total_course FROM courses";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    $row = mysqli_fetch_assoc($result);
    return isset($row['total_course']) ? intval($row['total_course']) : 0;
}

function getUserById($user_id)
{
    $db = Database::getInstance();
    $connection = $db->getConnection();
    $query = "SELECT * FROM users WHERE user_id = $user_id";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    return mysqli_fetch_assoc($result);
}

function updateUser($user_id, $fullname, $email, $showname, $phone, $age, $province, $address)
{
    $db = Database::getInstance();
    $connection = $db->getConnection();
    $query = "UPDATE users SET user_fullname = '$fullname', user_email = '$email', user_showname = '$showname', 
              user_num = '$phone', user_age = '$age', user_province = '$province', user_address = '$address' 
              WHERE user_id = $user_id";
    return mysqli_query($connection, $query);
}


