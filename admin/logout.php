<?php
session_start();
session_destroy();
header("Location: http://localhost/php/login/admin/login.php");
?>
