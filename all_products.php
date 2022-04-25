<?php 
// $error = "";
session_start();
include "./includes/connection.php"; 

$userid = "undefined";
$stat = $_SESSION['id'];

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />

      <link rel="stylesheet" href="./css/all.css" />
      <link rel="stylesheet" href="./css/categories.css" />
      <title>Furniture</title>
      <?php 
         include "./includes/links.php";  
      ?>
   </head>
   <body class="bg-light">
      <?php include './navbar.php';?>
      <div class="mt-5 pt-1"></div>

      <div class="container my-5">
         <!-- Breadcrumb -->
         <div class="mt-5 pt-5">
            <nav class="breadcrumb text-dark fs-6">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                     <a
                        href="<?php if($stat == 'undefined') {echo './index.php';} else {echo './user_page.php';}?>"
                        class="text-primary text-decoration-none"
                        >Home</a
                     >
                  </li>
                  <li
                     class="breadcrumb-item active text-secondary"
                     aria-current="page"
                  >
                     All products
                  </li>
               </ol>
            </nav>
         </div>

         <div class="row">
            <?php
               include './includes/connection.php';

               $query=mysqli_query($con,"select * from `items`;");
               while($row=mysqli_fetch_array($query)){
          ?>
            <div class="col-sm-4 col-md col-lg col-xl p-5 rounded">
               <img
                  src="./<?php echo $row['img']?>"
                  class="cat img-fluid w-100 h-50"
                  alt="..."
               />
               <div class="text-center bg-light shadow p-4">
                  <div class="type fs-5 text-dark text-uppercase fw-bold">
                     <?php echo $row['item_name']?>
                  </div>
                  <div class="text-secondary fs-6">
                     &#8369;
                     <?php echo $row['price']?>.00
                  </div>

                  <div class="d-flex justify-content-center mt-4">
                     <a
                        href="./view_product.php?id=<?php echo $row['id'] ?>"
                        class="text-decoration-none btn w-100 btn-outline-primary mt-0"
                     >
                        View product
                     </a>
                  </div>
               </div>
            </div>

            <?php
               }
               ?>
         </div>
      </div>

      <? include './includes/footer.php'; ?>
   </body>
</html>
