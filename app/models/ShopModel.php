<?php
// Get data count from shop
function getShopItem() {
    $db = Database::getInstance();
    $connection = $db->getConnection();

    $query = "SELECT COUNT(*) AS total_items FROM shop";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    return $result;
}


// Filter shop
function getFilteredShop($filters, $limit, $offset) {
    $db = Database::getInstance();
    $connection = $db->getConnection();

    $search_query = '';

    if (!empty($filters['search'])) {
        $search_query = " WHERE item_title LIKE '%" . mysqli_real_escape_string($connection, $filters['search']) . "%'";
    } elseif (!empty($filters['category'])) {
        $category_id = mysqli_real_escape_string($connection, $filters['category']);
        $search_query = " WHERE item_category_id = '{$category_id}'";
    }

    $query = "SELECT * FROM shop" . $search_query . " LIMIT $limit OFFSET $offset";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);

    return $result;
}


// Get item by id and calc discount
function getItemById($item_id) {
    $db = Database::getInstance();
    $connection = $db->getConnection();

    $item_id = mysqli_real_escape_string($connection, $item_id);
    $query = "SELECT * FROM shop WHERE item_id = $item_id";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);

    return $result;
}

function calculateDiscountedPrice($price, $discount) {
    $discounted_price = $price - ($price * ($discount / 100));
    return floor($discounted_price);
}
