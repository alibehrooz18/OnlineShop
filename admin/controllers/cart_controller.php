<?php include "../controllers/courses_controller.php"; ?>
<?php include_once "../models/cart_model.php"; ?>

<?php

if (isset($user_id)) {
    $cart_id = $user_id;

    class CartController
    {
        public function getCartItem($cart_id)
        {
            if (isset($cart_id)) {
                $cart_data = getCartByUser($cart_id);
                if ($cart_data && mysqli_num_rows($cart_data) > 0) {
                    return $cart_data;
                }
            }
            return [];
        }
        public function getShopItem($cart_shop_id)
        {
            if(isset($cart_shop_id)) {
                return getCartData($cart_shop_id);
            }
            return [];
        }
    }
    

    
}
