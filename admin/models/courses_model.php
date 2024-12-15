<?php
function getCoursesByAuthor($user_showname)
{
    global $connection;

    // Escape the input to prevent SQL injection
    $safe_author_name = mysqli_real_escape_string($connection, $user_showname);

    // Query to fetch courses
    $query = "SELECT * FROM courses WHERE course_author = '$safe_author_name'";
    $result = mysqli_query($connection, $query);

    confirmQuery($result);

    if (mysqli_num_rows($result) === 0) {
        die("No courses found for author: $user_showname");
    }

    return $result;
}
