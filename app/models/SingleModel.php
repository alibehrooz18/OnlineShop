<?php
// Get course id for show data
function getCourseDataById($course_id)
{
    $db = Database::getInstance();
    $connection = $db->getConnection();

    $query = "SELECT * FROM courses WHERE course_id = $course_id";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    return $result;
}


// Get course with limit
function getCourseLimit3()
{
    $db = Database::getInstance();
    $connection = $db->getConnection();

    $query = "SELECT * FROM courses LIMIT 3";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    return $result;
}


// Get info from shop
function getShopById($item_id)
{
    $db = Database::getInstance();
    $connection = $db->getConnection();

    $query = "SELECT * FROM shop WHERE item_id = $item_id";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    return $result;
}


// Get category for specific item
function getCategoryById($item_category)
{
    $db = Database::getInstance();
    $connection = $db->getConnection();

    $query = "SELECT * FROM categories WHERE cat_id = $item_category";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    return $result;
}


// Get shop with limit
function getShopLimit4()
{
    $db = Database::getInstance();
    $connection = $db->getConnection();

    $query = "SELECT * FROM shop LIMIT 4";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    return $result;
}
