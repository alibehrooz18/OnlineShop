<?php
ob_start();
session_start();
?>
<?php include_once __DIR__ . '/../../includes/db.php'; ?>

<?php
// spl_autoload_register('autoLoader');
// function autoLoader($class_name) {
//     $pass = "../model/";
//     $extention = "_model.php";
//     $full_path = $pass . $class_name . $extention;

//     if(!file_exists($full_path)) {
//         return false;
//     }

//     include_once $full_path;
// }
