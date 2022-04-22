<?php 

include './includes/connection.php';
// $error = "";
session_start();

$id = $_GET['id'];
$userid = $_SESSION["id"];
$query = mysqli_query($con, "SELECT * from items where id = '$id';");
$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />

      <link rel="stylesheet" href="./css/all.css" />
      <link rel="stylesheet" href="./css/categories.css" />
      <title>View Product</title>
      <?php 
         include "./includes/links.php";  
      ?>
   </head>
   <body class="bg-white">
     
      <div class="container my-5">
         <!-- Breadcrumb -->
         <div class="mt-5 pt-2">
            <nav class="breadcrumb text-dark fs-5">
               <ol class="breadcrumb fs-6">
                  <li class="breadcrumb-item">
                     <a
                        href="<?php 
                        if($userid == 'undefined') {
                           echo './all_products.php';
                        } else {
                           echo './user_products.php'; 
                        }
                        ?>"
                        class="text-primary text-decoration-none"
                        >All products</a
                     >
                  </li>
                  <li
                     class="breadcrumb-item active text-secondary"
                     aria-current="page"
                  >
                     <?php echo $row['item_name']; ?>
                  </li>
               </ol>
            </nav>
         </div>

         <div class="">
            <div class="col">
               <div
                  id="carouselExampleControls"
                  class="carousel slide"
                  data-bs-ride="carousel"
               >
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img
                           src="./<?php echo $row['img']; ?>"
                           class="d-block w-100"
                           alt="..."
                        />
                     </div>
                     <div class="carousel-item">
                        <img
                           src="./<?php echo $row['img2']; ?>"
                           class="d-block w-100"
                           alt="..."
                        />
                     </div>
                  </div>
                  <button
                     class="carousel-control-prev"
                     type="button"
                     data-bs-target="#carouselExampleControls"
                     data-bs-slide="prev"
                  >
                     <span
                        class="carousel-control-prev-icon"
                        aria-hidden="true"
                     ></span>
                  </button>
                  <button
                     class="carousel-control-next"
                     type="button"
                     data-bs-target="#carouselExampleControls"
                     data-bs-slide="next"
                  >
                     <span
                        class="carousel-control-next-icon"
                        aria-hidden="true"
                     ></span>
                  </button>
               </div>
            </div>

            <div class="col-sm col-md col-lg col-xl px-5 m-3">
               <div class="lead fs-2 text-uppercase">
                  <?php echo $row['item_name']; ?>
               </div>
               <div class="text-success fw-bold">
                  <?php echo $row['stat']; ?>
               </div>
               <div class="fs-2 my-3 mb-5">
                  &#8369;
                  <?php echo $row['price']; ?>.00
               </div>

               <b class="text-secondary">DESCRIPTION</b>
               <p class="mt-4 fs-5 fw-light">
                  <li class="mb-4 fw-bolder">
                     <?php echo $row['dimension']; ?>
                     dimension <br />
                  </li>
                  <?php echo $row['description']; ?>
               </p>
            </div>

            <div class="row">
               <form
                  action="./actions/add_to_cart.php?id=<?php echo $row['id']; ?>"
                  method="POST"
                  class="row"
               >
                  <input
                     type="hidden"
                     name="item_name"
                     value="<?php echo $row['item_name'];?>"
                  />

                  <input
                     type="hidden"
                     name="img"
                     value="<?php echo $row['img'];?>"
                  />

                  <input
                     type="hidden"
                     name="price"
                     value="<?php echo $row['price'];?>"
                  />

               

                  <button
                      <?php if($userid == 'undefined') {echo 'disabled';} ?>
                     type="submit"
                     class="btn btn-outline-secondary rounded-pill col-md py-3 mx-3 mt-3"
                     name="add-to-cart"
                  >
                     ADD TO CART
                  </button>

              
               </form>

           
            </div>
         </div>

         <div class="row">
            <p class="text-center text-secondary py-5 my-5 fs-6 fw-bolder">
               RELATED PRODUCTS
            </p>
            <?php
               $query=mysqli_query($con,"select * from `items` where category = '$row[category]' limit 4;");
               while($item=mysqli_fetch_array($query)){
          ?>
            <div class="col-sm rounded-pill">
               <a href="" class="text-decoration-none type">
                  <img
                     src="./<?php echo $item['img']; ?>"
                     class="cat img-fluid"
                     alt="..."
                  />
                  <div class="text-center mt-3 mb-5">
                     <div class="type fw-bold fs-5">Beds</div>
                     <div class="text-secondary">&#8369; 5000</div>
                  </div>
               </a>
            </div>
            <?php
          }
          ?></div>
      </div>
   </body>
</html>
