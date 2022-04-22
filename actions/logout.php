<?php
session_start();
unset($_SESSION["role"]);
unset($_SESSION["email"]);
unset($_SESSION["id"]);
unset($_SESSION["name"]);

$_SESSION['id'] = "undefined";

header("Location: ../pages/index.php");
?>