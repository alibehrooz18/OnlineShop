<?php
session_start();
session_unset();
session_destroy();
header("Location: /eduon/index.php");
exit;
?>
