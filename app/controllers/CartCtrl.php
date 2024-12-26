<?php include "../models/cart_model.php"; ?>
<?php include "../controllers/shop_ctrl.php"; ?>
<?php
// Get product id and send to cart 
$subtotal = 0;
if (isset($_GET['p_id']) && isset($_GET['user'])) {
    $shop_id = $_GET['p_id'];
    $user_id = $_GET['user'];

    $check_exist = getProductCart($shop_id, $user_id);

} else {
    header("Location: ../../index.php");
}


// Get data from cart
$cart_item = getCartData($user_id);



