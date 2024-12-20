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
