<?php require_once "./app/models/main_model.php";?>

<?php
// Check for entered user and get them data
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    $user_data = getUserByUsername($username);
    if ($user_data) {
        $user_id = $user_data['user_id'];
        $user_name = $user_data['user_fullname'];
        $user_showname = $user_data['user_showname'];
        $user_email = $user_data['user_email'];
        $user_role = $user_data['user_role'];

        $user_role = ($user_role === "subscriber") ? "مشترک" : "ادمین";
    } else {
        header("Location: ../index.php");
        exit;
    }

    $get_cart_data = getCartItemCount($user_id);
    // Fetch the count from the result
    $row = mysqli_fetch_assoc($get_cart_data);
    $item_cart = isset($row['item_count']) ? intval($row['item_count']) : 0;

} else {
    $item_cart = 0;
}
// Get course information
$course_data = getCourseLimit();


