<?php include "../controllers/user_controller.php"; ?>
<?php
$admin_user = $all_user - $sub_user;

if (isset($_GET['ad_role'])) {
    $users_id = $_GET['ad_role'];
    if ($users_id == 0 || $users_id == 4) {
        header("Location: ./people.php");
    } else {
        $query = "UPDATE users SET user_role = 'admin' WHERE user_id = $users_id";
        $update_role = mysqli_query($connection, $query);
        confirmQuery($update_role);
        header("Location: ./people.php");
    }
} elseif (isset($_GET['sub_role'])) {
    $users_id = $_GET['sub_role'];
    if ($users_id == 0 || $users_id == 4) {
        header("Location: ./people.php");
    } else {
        $query = "UPDATE users SET user_role = 'subscriber' WHERE user_id = $users_id";
        $update_role = mysqli_query($connection, $query);
        confirmQuery($update_role);
        header("Location: ./people.php");
    }
}

if(isset($_GET['remove_user'])){
    $users_id = $_GET['remove_user'];
    if ($users_id == 0 || $users_id == 4) {
        header("Location: ./people.php");
    } else {
        $query = "DELETE FROM users WHERE user_id = $users_id";
        $remove_user = mysqli_query($connection, $query);
        confirmQuery($remove_user);
        header("Location: ./people.php");
    }
}
