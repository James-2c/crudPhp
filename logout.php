<?php

session_start();
unset($_SESSION['Username']);
unset($_SESSION['Role']);
echo header("Location: login.php");

?>