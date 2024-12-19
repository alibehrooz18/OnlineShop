<?php
// Count course item function
function getCoursesTotal()
{
    $db = Database::getInstance();
    $connection = $db->getConnection();

    $query = "SELECT COUNT(*) AS total_items FROM courses";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    return $result;
}

// Function for get category list
function getCategoryItem()
{
    $db = Database::getInstance();
    $connection = $db->getConnection();

    $query = "SELECT * FROM categories";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    return $result;
}


// Filter course
function getFilteredCourses($filters, $limit, $offset) {
    $db = Database::getInstance();
    $connection = $db->getConnection();

    $search_query = '';

    if (!empty($filters['search'])) {
        $search_query = " WHERE course_tags LIKE '%" . mysqli_real_escape_string($connection, $filters['search']) . "%'";
    } elseif (!empty($filters['category'])) {
        $category_id = mysqli_real_escape_string($connection, $filters['category']);
        $search_query = " WHERE course_category_id = '{$category_id}'";
    }

    $query = "SELECT * FROM courses" . $search_query . " LIMIT $limit OFFSET $offset";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);

    return $result;
}

