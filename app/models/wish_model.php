<?php
// Get data from wishlist
function getProductWish($shop_id, $user_id)
{
    $db = Database::getInstance();
    $connection = $db->getConnection();

    $query = "SELECT * FROM wishlists WHERE wish_shop_id = $shop_id AND wish_user_id = $user_id";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    return $result;
}


// Post item to wishlist
function postProductWish($shop_id, $user_id)
{
    $db = Database::getInstance();
    $connection = $db->getConnection();

    $query = "INSERT INTO wishlists (wish_shop_id, wish_user_id) VALUES ('$shop_id', '$user_id')";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    return $result;
}


// Get data from wishlist
function getWishItem()
{
    $db = Database::getInstance();
    $connection = $db->getConnection();

    $query = "SELECT * FROM wishlists";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    return $result;
}
