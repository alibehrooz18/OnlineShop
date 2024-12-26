<?php

class UserModel
{

    // Get all users
    public function getAllUsers()
    {
        $db = Database::getInstance();
        $connection = $db->getConnection();
        $query = "SELECT * FROM users";
        $result = mysqli_query($connection, $query);
        confirmQuery($result);
        return $result;
    }

    // Update user role (admin or subscriber)
    public function updateUserRole($user_id, $role)
    {
        $db = Database::getInstance();
        $connection = $db->getConnection();
        $query = "UPDATE users SET user_role = '$role' WHERE user_id = $user_id";
        $result = mysqli_query($connection, $query);
        confirmQuery($result);
        return $result;
    }

    // Remove user
    public function removeUser($user_id)
    {
        $db = Database::getInstance();
        $connection = $db->getConnection();
        $query = "DELETE FROM users WHERE user_id = $user_id";
        $result = mysqli_query($connection, $query);
        confirmQuery($result);
        return $result;
    }
}
