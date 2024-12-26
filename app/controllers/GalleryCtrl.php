<?php include "../models/GalleryModel.php";?>
<?php include "../controllers/CoursesCtrl.php";?>
<?php
// Pagination logic 
$image_per_page = 9;
$gallery_query = getGalleryData($image_per_page);


// Newsletter section
