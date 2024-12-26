<?php
function getCourseDetails($connection, $course_id) {
    $db = Database::getInstance();
    $connection = $db->getConnection();
    $query = "SELECT * FROM courses WHERE course_id = $course_id";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    return mysqli_fetch_assoc($result);
}

function getCategoryDetails($connection, $category_id) {
    $db = Database::getInstance();
    $connection = $db->getConnection();
    $query = "SELECT * FROM categories WHERE cat_id = $category_id";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    return mysqli_fetch_assoc($result);
}

function updateCourseStatus($connection, $course_id, $status) {
    $db = Database::getInstance();
    $connection = $db->getConnection();
    $query = "UPDATE courses SET course_status = '$status' WHERE course_id = $course_id";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    return $result;
}
