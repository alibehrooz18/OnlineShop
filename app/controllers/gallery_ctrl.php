<?php include "../models/gallery_model.php";?>
<?php include "../controllers/courses_ctrl.php";?>
<?php
// Pagination logic 
$image_per_page = 9;
$gallery_query = getGalleryData($image_per_page);


// Newsletter section
if (isset($_POST['subscribe'])) {
    $news_email = $_POST['EMAIL'];
    
    $sub_query = getEmailForNews($news_email);
}
