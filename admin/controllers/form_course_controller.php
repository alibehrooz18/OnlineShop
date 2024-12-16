<?php include_once "../models/form_model.php";?>
<?php include_once "../controllers/details_controller.php";?>
<?php include_once "../models/details_model.php";?>
<?php
if (isset($_POST['checked']) && isset($_POST['submit'])) {
    $data = [

        'course_id'    => $detail_id ?? null,
        'form_image'   => $form_image ?: $detail_image,
        'form_title'   => $_POST['form_title'],
        'form_content' => $_POST['form_content'],
        'form_price'   => $_POST['form_price'],
        'form_date'    => $_POST['form_date'],
        'form_url'     => $_POST['form_url'],
        'form_category'=> $_POST['form_category'],
        'form_tags'    => $_POST['form_tags']
    ];
    // Call the model function
    if (saveCourseData($connection, $data)) {
        header("Location: ./my_course");
    } else {
        echo "Failed to save the course.";
    }
} 



