<?php
// Get data from cart
function getProductCart($shop_id, $user_id)
{
    $db = Database::getInstance();
    $connection = $db->getConnection();

    $query = "SELECT * FROM cart WHERE cart_shop_id = $shop_id AND cart_user_id = $user_id";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    return $result;
}


// Post data to cart
function postProductCart($shop_id, $quantity, $user_id)
{
    $db = Database::getInstance();
    $connection = $db->getConnection();

    $query = "INSERT INTO cart (cart_shop_id, cart_quantity, cart_user_id) VALUES ('$shop_id', '$quantity', '$user_id')";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    return $result;
}


// Get data from cart
function getCartData($user_id)
{
    $db = Database::getInstance();
    $connection = $db->getConnection();

    $query = "SELECT * FROM cart WHERE cart_user_id = $user_id";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    return $result;
}


// 
