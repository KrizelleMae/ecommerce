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
      <div class=" container my-5">
         <!-- Breadcrumb -->
         <div class="mt-5 pt-2">
            <nav class="breadcrumb text-secondary fs-6">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                     <a href="./user_page.php" class=" text-decoration-none"
                        >Home</a 
                     >
                  </li>
                  <li
                     class="breadcrumb-item active"
                  
                  >
                     <a href="#" class="text-primary text-decoration-none"
                        >All products</a
                     >
                  </li>
               </ol>
            </nav>
         </div>
         
 <?php
               $query=mysqli_query($con,"select * from `items` limit 8;");
               while($row=mysqli_fetch_array($query)){
          ?>

         <div class="">
            
           
            <form
               action="./actions/add_to_cart.php?id=<?php echo $row['id']; ?>"
               method="POST"
               class="container row"
            >
               <div class="col-sm-3 shadow p-4 m-3 ">
                  <a
                     href="./view_product.php?id=<?php echo $row['id'] ?>"
                     class="text-decoration-none"
                  >
                     <img
                        src="./<?php echo $row['img']?>"
                        class="img-responsive w-100 rounded"
                        alt="..."
                     />
                     <div class="text-center mt-3">
                        <div class="type fs-5 text-dark text-bolder">
                           <?php echo $row['item_name']?>
                        </div>
                        <small class="text-secondary text-uppercase"
                           ><?php echo $row['category']?></small
                        >
                        <div class="text-dark fw-bolder fs-5 mt-3">
                           &#8369;
                           <?php echo $row['price']?>.00
                        </div>
                     </div>

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

                     <div class="row mx-3">
                        <button
                           type="submit"
                           class="btn btn-outline-secondary rounded-pill col-md py-2 mx-2 my-4"
                           name="add-to-cart"
                        >
                           ADD TO CART
                        </button>
                     </div>
                  </a>
               </div>


               
            </form>

           
         </div>
          <?php
               }
               ?>

         <? include './includes/footer.php'; ?>
      </div>
   </body>
</html>
