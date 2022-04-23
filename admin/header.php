<?php 

include '../includes/connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
     <!-- Bootstrap core CSS -->
     <link href="../bootstrap3/css/bootstrap.min.css" rel="stylesheet">
     <link href="./css/main.css" rel="stylesheet">

     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>
<body> <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
               <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">BRAND</a>
               </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li class="<?php if($page=='Dashboard'){echo "active-btn";}?>"><a href="index.php">Dashboard</a></li>
                         <li class="<?php if($page=='Products'){echo "active-btn";}?>"><a href="products.php">Products</a></li>
                         <li class="<?php if($page=='orders'){echo "active-btn";}?>"><a href="orders.php">Pending Orders</a></li>
                         <li class="<?php if($page=='delivery'){echo "active-btn";}?>"><a href="delivery.php">TO DELIVER</a></li>
                         <li class="<?php if($page=='pickup'){echo "active-btn";}?>"><a href="pickup.php">FOR PICKUP</a></li>
                         <li class="<?php if($page=='Status'){echo "active-btn";}?>"><a href="status.php">COMPLETED ORDERS</a></li>
                          <li ><a href="#"></a></li>
                            <li ><a href="#"></a></li>
                         <li
                         class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ADMIN<span class="caret"></span></a>
                         <ul class="dropdown-menu">
                              <li class="dropdown-header">Account settings</li>
                              <li><a onclick='confirm("Are you sure you want to log out?");' href="../actions/logout.php">Logout</a></li> 
                         </ul>
                         </li>
                    </ul>
               </div>
          </div>
    </nav>

     
</body>
</html>