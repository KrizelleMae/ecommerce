<?php 
// $error = "";
session_start();
include "./includes/connection.php";  
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
    <div class="mt-5"></div>
    <?php include "./userheader.php";?>
    <div class="container mb-5" style="margin-top: 150px;">
      <!-- Breadcrumb -->
      <div class="mt-5 pt-2">
        <nav class="breadcrumb text-secondary fs-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="./user_page.php" class="text-decoration-none">Home</a>
            </li>
            <li class="breadcrumb-item active">
              <a href="#" class=" text-decoration-none text-secondary"
                >All products</a
              >
            </li>
          </ol>
        </nav>
      </div>

      <div class="container row">
        <?php
            $query=mysqli_query($con,"select * from `items`;");
            while($row=mysqli_fetch_array($query)){
                ?>

        <div class="col-sm-4 col-md-6 col-lg-4 col-xl p-5 rounded">
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
  </body>
</html>
