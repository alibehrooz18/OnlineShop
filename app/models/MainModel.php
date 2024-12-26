<?php
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
// Count cart item in header
function getCartItemCount($user_id)
{
    $db = Database::getInstance();
    $connection = $db->getConnection();

    $query = "SELECT COUNT(*) AS item_count FROM cart WHERE cart_user_id = $user_id";
    $result = mysqli_query($connection, $query);

    confirmQuery($result);
    return $result;
}
function getCourseLimit()
{
    $db = Database::getInstance();
    $connection = $db->getConnection();

    $query = "SELECT * FROM courses LIMIT 6";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    return $result;

}
