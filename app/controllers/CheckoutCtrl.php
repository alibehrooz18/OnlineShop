<?php include "../models/checkout_model.php";?>
<?php include "../controllers/cart_ctrl.php";?>
<?php
// Get data from cart
if (isset($_GET['p_total'])) {
    $payable_total = $_GET['p_total'];
    $subtotal = $_GET['subtotal'];
    $shiping = $_GET['shiping'];
    $coupon = $_GET['coupon'];
}


// Submit information to database
if (isset($_POST['order'])) {
    $fields = [
        'firstname' => true,
        'lastname' => true,
        'company' => false,
        'email' => true,
        'phone' => true,
        'country' => true,
        'street' => true,
        'town' => true,
        'state' => true,
        'zip' => true,
        'notes' => false,
    ];

    // Validate the form data
    $data = [];


    foreach ($fields as $field => $isRequired) {
        if (!empty($_POST[$field])) {
            $data[$field] = $_POST[$field];
        } elseif ($isRequired) {
            $errors[] = ucfirst(str_replace('_', ' ', $field)) . " is required.";
        } else {
            $data[$field] = null;
        }
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
        exit;
    }

    // Save the order data to the database
    $result = postInfoData($data);

    if ($result) {
        header("Location: ../../admin");
    } else {
        header("Location: ./404.php");
    }
}
