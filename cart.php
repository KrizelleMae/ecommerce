<?php 

// $error = "";
session_start();
$userid = $_SESSION['id'];


?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />

      <link rel="stylesheet" href="./css/all.css" />

      <title>My Cart</title>
      <?php 
         include "./includes/links.php";  
      ?>
   </head>
   <body class="bg-white">

   <?php include './userheader.php'; ?>

   <div class="mt-5"></div>
      <div class="container my-5">
         <!-- Breadcrumb -->
         <div class="mt-5 pt-2">
            <nav class="breadcrumb text-dark fs-5">
               <ol class="breadcrumb fs-6">
                  <li class="breadcrumb-item">
                     <a href="./user_page.php" class="text-primary text-decoration-none"
                        >Home</a
                     >
                  </li>
                  <li   
                     class="breadcrumb-item active text-secondary"
                     aria-current="page"
                     href="<?php 
                     if($userid == "undefined"){ 
                        echo './all_products.php';
                     } else {
                         echo './user_products.php';
                     }
                     ?>"
                  >
                     All products
                  </li>
               </ol>
            </nav>
         </div>

      
         <div class="row mt-5">
            <div class="col-lg">
               <h4 class="fw-bolder text-uppercase">My Shopping Cart</h4>
               <div class="mt-4">
                  <!-- left cart -->

                  <div class="">
                     <table
                        class="table table-borderless w-100 table-responsive"
                     >
                        <tr class="bg-light text-dark" height="60px">
                           <th width="25%" class="p-3">Item</th>
                           <th width="40%" class="p-3">Item name</th>
                           <th class="text-center p-3">Price</th>
                            <th class="text-center  p-3">Action</th>
                        </tr>

                        
                       
                        <?php

                              include './includes/connection.php';
                             
                              // $id = $_SESSION['id'];

                              $query= "select * from `cart` where userid = $userid;";
                              $result = mysqli_query($con,$query);
                                     
                              while ($row = mysqli_fetch_array($result)) {
                         ?>
                        <tr class="px-0">
                           <td class="pt-3">
                              <img src="./<?php echo $row['img']; ?>"
                              class="cat alt="..." height="100px">
                           </td>

                           <td class="py-5" >
                              <h6  class="py-2"><?php echo $row['item_name']; ?></h6>
                           </td>

                           <td>
                              <div class="py-5 text-center">
                                 &#8369;
                                 <?php echo $row['price']; ?>.00
                              </div>
                           </td>

                           <td class="py-5 float-end me-4">
                              
                                 <a
                                 onclick="return confirm('Are you sure you want to delete this item?');" 
                                    href="./actions/add_to_cart.php?action=remove&id=<?php echo $row["item_id"]; ?>"
                                    class="btn btn-danger me-5"
                                    >Remove</a
                                 >
                             
                           </td>
                        </tr>
                        <?php    
                           }
                        ?>

                        <tr class="border-top">
                           <td class="mt-5">
                              <div class="fw-bold pt-3">
                                 <i class="bx bx-chevron-left"></i>
                                 <a
                                  href="<?php 
                                          if($userid == "undefined"){ 
                                             echo './all_products.php';
                                          } else {
                                             echo './user_products.php';
                                          }
                                       ?>"
                                    class="text-decoration-none text-dark"
                                    >Back to Shoppping</a
                                 >
                              </div>
                           </td>
                        
                           <td class="text-center">
                              <div class="fw-bold pt-3 fs-5">Subtotal:</div>
                           </td>
                           <?php 
                    
                           $sum = mysqli_query($con, "SELECT SUM(price) FROM cart WHERE userid = $userid;");
                           $total = mysqli_fetch_array($sum);
                         
                           ?>
                           <td class="text-center">
                              <div class="fw-bold pt-3 fs-5">&#8369; <?php echo $total[0]; ?>.00</div>
                           </td>
                        </tr>
                     </table>

                     <a
                      href="./checkout.php?id=<?php echo $userid; ?>"

                        class="btn btn-dark rounded-pill py-2 px-5 float-end mt-5"
                     >
                        PROCEED TO CHECKOUT
                     </a>
                  </div>
               </div>
            </div>
         </div>
          
      </div>
   </body>
</html>
