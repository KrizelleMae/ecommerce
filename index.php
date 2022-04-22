<?php 

// $error = "";
session_start();
$page = "home";

$_SESSION['id'] = "undefined";


?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" >

      <link rel="stylesheet" href="./css/all.css" />
      <title>Furniture</title>
      <?php 
         include "./includes/links.php";  
      ?>
   </head>
   <body class="bg-white">
      <?php include "navbar.php";?>
      <?php include "./includes/header.php";?>
      <?php include "./includes/categories.php";?>
      <?php include "./includes/best.php";?>
      <?php include "./includes/footer.php";?>

   </body>
</html>
