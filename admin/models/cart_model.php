<?php
function getCartByUser($cart_id)
{
    $db = Database::getInstance();
    $connection = $db->getConnection();

    $safe_cart_id = mysqli_real_escape_string($connection, $cart_id);

    $query = "SELECT * FROM cart WHERE cart_user_id = '$safe_cart_id'";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);

    if (mysqli_num_rows($result) == 0) {
        die("No items found for user");
    }
    return $result;
}


function getCartData($cart_shop_id)
{
    $db = Database::getInstance();
    $connection = $db->getConnection();

    $safe_cart_shop_id = mysqli_real_escape_string($connection, $cart_shop_id);

    $query = "SELECT * FROM shop WHERE item_id = '$safe_cart_shop_id'";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);

    if (mysqli_num_rows($result) == 0) {
        die("Item not found in shop");
    }
    return $result;
}
