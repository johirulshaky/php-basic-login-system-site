<?php
// session_start();
if(!isset($_SESSION['email'])){
header("Location: http://localhost/php/login/admin/login.php");
}
?>

<hr><br>
<div>
    <a class="logout" href="http://localhost/php/login/admin/logout.php">Logout</a>
</div>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="jquery-3.4.1.min.js" type="text/javascript"></script>
<script src="slide.js"></script>
<script src="calculator.js"></script>
<script src="clock.js"></script>
<script src="main.js"></script>

</html>
