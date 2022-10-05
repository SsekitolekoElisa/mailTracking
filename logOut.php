<?php
session_start();
session_unset();
// echo "Henry";
// unset($_SESSION['USERNAME']);
header("location:./index.php");
?>