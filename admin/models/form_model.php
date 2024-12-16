<?php
function getCategoryItem($connection)  {
    $query = "SELECT * FROM categories";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    return $result;
}

function saveCourseData($connection, $data)  {
    // Check if it's an update or create
    $is_update = isset($data['course_id']) && !empty($data['course_id']);

    if ($is_update) {
        // Update query
        $query = "
            UPDATE courses SET
                course_image = ?,
                course_title = ?,
                course_content = ?,
                course_price = ?,
                course_date = ?,
                course_url = ?,
                course_category_id = ?,
                course_tags = ?
            WHERE course_id = ?";
    } else {
        // Insert query
        $query = "
            INSERT INTO courses (
                course_image,
                course_title,
                course_content,
                course_price,
                course_date,
                course_url,
                course_category_id,
                course_tags
            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    }

    $stmt = mysqli_prepare($connection, $query);

    if (!$stmt) {
        die("Query preparation failed: " . mysqli_error($connection));
    }

    if ($is_update) {
        mysqli_stmt_bind_param(
            $stmt,
            "sssdssisi", // Types: s = string, i = integer, d = decimal
            $data['course_image'],
            $data['course_title'],
            $data['course_content'],
            $data['course_price'],
            $data['course_date'],
            $data['course_url'],
            $data['course_category_id'],
            $data['course_tags'],
            $data['course_id']
        );
    } else {
        mysqli_stmt_bind_param(
            $stmt,
            "sssdssis", // Types: s = string, i = integer, d = decimal
            $data['course_image'],
            $data['course_title'],
            $data['course_content'],
            $data['course_price'],
            $data['course_date'],
            $data['course_url'],
            $data['course_category_id'],
            $data['course_tags']
        );
    }

    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    return $result;
    // Execute the query
    if (mysqli_stmt_execute($stmt)) {
        return true;
    } else {
        return false;
    }
}
