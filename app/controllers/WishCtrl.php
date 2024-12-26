<?php include "../models/WishModel.php";?>
<?php include "../controllers/CartCtrl.php";?>
<?php
// Get product id and send to wishlist
if (isset($_GET['wishlist']) && isset($_GET['user'])) {
    $shop_id = mysqli_real_escape_string($connection, $_GET['wishlist']);
    $user_id = mysqli_real_escape_string($connection, $_GET['user']);
    $check_exist = getProductWish($shop_id, $user_id);

    
}

