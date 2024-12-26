<?php
// Get data from gallery
function getGalleryData($image_per_page)
{
    $db = Database::getInstance();
    $connection = $db->getConnection();

    $safe_var = mysqli_escape_string($connection, $image_per_page);

    $query = "SELECT * FROM gallery LIMIT $safe_var";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    return $result;
}

// Get email for newsletter
function getEmailForNews($news_email)
{
    $db = Database::getInstance();
    $connection = $db->getConnection();

    $safe_email = mysqli_escape_string($connection, $news_email);
    $query = "INSERT INTO newsletter (news_email) VALUES ('$safe_email')";
    $sub_query = mysqli_query($connection, $query);
    confirmQuery($sub_query);
    return $sub_query;
}
