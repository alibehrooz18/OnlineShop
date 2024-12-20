<?php
// Login section
function updateRememberToken($userId, $token)
{
    $db = Database::getInstance();
    $connection = $db->getConnection();

    $query = "UPDATE users SET remember_token = '$token' WHERE user_id = '$userId'";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    return $result;
}


// Register section
function register_user($fullname, $email, $number, $password)
{
    $db = Database::getInstance();
    $connection = $db->getConnection();

    $hash_password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO users (user_fullname, user_email, user_num, password, user_role) ";
    $query .= "VALUES ('{$fullname}', '{$email}', '{$number}', '{$hash_password}', 'subscriber')";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    return $result;
}
