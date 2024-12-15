<?php

class UserModel {

    // Get all users
    public function getAllUsers()
    {
        global $connection;
        $query = "SELECT * FROM users";
        $result = mysqli_query($connection, $query);
        confirmQuery($result);
        return $result;
    }

    // Update user role (admin or subscriber)
    public function updateUserRole($user_id, $role)
    {
        global $connection;
        $query = "UPDATE users SET user_role = '$role' WHERE user_id = $user_id";
        $result = mysqli_query($connection, $query);
        confirmQuery($result);
        return $result;
    }

    // Remove user
    public function removeUser($user_id)
    {
        global $connection;
        $query = "DELETE FROM users WHERE user_id = $user_id";
        $result = mysqli_query($connection, $query);
        confirmQuery($result);
        return $result;
    }
    
}
?>
