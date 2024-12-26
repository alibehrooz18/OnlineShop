<?php include "../controllers/CoursesController.php"; ?>
<?php require_once('../models/PeopleModel.php'); ?>
<?php
$admin_user = $all_user - $sub_user;

class UserController {

    public function manageUsers()
    {
        $userModel = new UserModel();

        // Update user role (admin or subscriber)
        if (isset($_GET['ad_role'])) {
            $user_id = $_GET['ad_role'];
            if ($user_id != 0 && $user_id != 4) {
                $userModel->updateUserRole($user_id, 'admin');
            }
            header("Location: ./people.php");
        } elseif (isset($_GET['sub_role'])) {
            $user_id = $_GET['sub_role'];
            if ($user_id != 0 && $user_id != 4) {
                $userModel->updateUserRole($user_id, 'subscriber');
            }
            header("Location: ./people.php");
        }

        // Remove user
        if (isset($_GET['remove_user'])) {
            $user_id = $_GET['remove_user'];
            if ($user_id != 0 && $user_id != 4) {
                $userModel->removeUser($user_id);
            }
            header("Location: ./people.php");
        }
    }

    public function getAllUserData()
    {
        $userModel = new UserModel();
        return $userModel->getAllUsers();
    }
}