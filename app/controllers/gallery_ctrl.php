<?php include "../models/gallery_model.php";?>
<?php include "../controllers/courses_ctrl.php";?>
<?php
// Pagination logic 
$image_per_page = 9;
$gallery_query = getGalleryData($image_per_page);


// Newsletter section
