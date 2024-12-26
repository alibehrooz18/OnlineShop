<?php include "./app/models/AccountModel.php"; ?>
<?php include "./app/controllers/MainCtrl.php"; ?>

<?php
// Login section
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = getUserByUsername($username);

    if ($user) {
        $dbPassword = $user['password'];
        if (password_verify($password, $dbPassword)) {
            // Login successful
            $_SESSION['username'] = $username;
            $_SESSION['user_role'] = $user['user_role'];

            // Remember me functionality
            if (isset($_POST['remember'])) {
                $token = bin2hex(random_bytes(16));
                updateRememberToken($connection, $user['user_id'], $token);
                setcookie("remember_token", $token, time() + (86400 * 2), "/");
            }

            // Redirect to the appropriate dashboard
            if ($_SESSION['user_role'] === 'admin') {
                header("Location: ./admin");
            } else {
                header("Location: index.php");
            }
            exit();
        } else {
            echo "کلمه عبور نامعتبر!";
        }
    } else {
        echo "کاربر پیدا نشد!";
    }
}


// Register section
if (isset($_POST['register'])) {
    $fullname = mysqli_escape_string($connection, $_POST['fullname']);
    $email    = mysqli_escape_string($connection, $_POST['email']);
    $number   = mysqli_escape_string($connection, $_POST['number']);
    $password = mysqli_escape_string($connection, $_POST['password']);

    if (email_exists($email)) {
        echo "ایمیل موجود است!";
    } elseif (mobile_exists($number)) {
        echo "تلفن موجود است!";
    } elseif (!empty($fullname) && !empty($email) && !empty($number) && !empty($password)) {
        // Register the user if all fields are filled and valid
        $register_query = register_user($fullname, $email, $number, $password);

        if ($register_query) {
            echo "ثبت نام شما با موفقیت انجام شد!";
            // Redirect to the login page
            header("Location: log-in.php");
            exit();
        } else {
            echo "ثبت نام با مشکل مواجه شد!";
        }
    } else {
        echo "فیلدها نباید خالی باشند!";
    }
}
