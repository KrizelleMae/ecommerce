<?php 

// $error = "";
session_start();


?>

<!DOCTYPE html>
<html lang="en">
   <head>
      

      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" >

      <link rel="stylesheet" href="../css/all.css" />
        
     
      <title>My Cart</title>
      <?php 
         include "../includes/links.php";  
      ?>
   </head>
   <body class="bg-white">
      
 
     <?php include "../includes/navbar.php";?>


     <div class="bg-light">
          <div class="container my-5">
               <!-- Breadcrumb -->
               <div class="mt-5 pt-2">
                    <nav class="breadcrumb text-dark fs-5">
                    <ol class="breadcrumb fs-6 ">
                              <li class="breadcrumb-item"><a href="#" class="  text-primary text-decoration-none">Home</a></li>
                              <li class="breadcrumb-item active text-secondary " aria-current="page">All products</li>
                         </ol>
                    </nav>
               </div>
          

               <div class="row  mt-5">
                    <div class="col-lg">
                         <h4 class="fw-bolder text-uppercase">My Shopping Cart</h4>
                         <div class="mt-4">
                              <!-- left cart -->
                              <div class="mt-5">

                              <div class="container row bg-white px-0 shadow-sm h-50">
                                   <div class="col-lg-3">
                                        <img src="../images/bed.png" class=" bg-white p-4" alt="..." height="150px"> 
                                   </div>

                                   
                                    <div class="col-lg">
                                        <div class="py-4">
                                             <h4>Product name <br></h4>
                                             <p class="text-secondary small">CATEGORY</p>
                                             <b class="text-success">P 2000</b>
                                        </div>
                                   </div>
                              </div>
                              
                              </div>
                              </div>
                         </div>
                    
                    </div>
                    
               </div>
          </div>
     </div>

   </body>
</html>

