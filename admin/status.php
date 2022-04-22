<?php
 $page ='Status'; 
 include '../includes/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Admin | Products</title>

      <link href="../css/all.css" rel="stylesheet" />

      <!-- Bootstrap core CSS -->
      <link href="../bootstrap3/css/bootstrap.min.css" rel="stylesheet" />
      <link href="./css/main.css" rel="stylesheet" />
   </head>
   <body>
      <?php include "./header.php"; ?>

      <div class="main container">
         <div class="panel panel-default">
            <div class="panel-heading">
               <h1 class="panel-title lead">Status page</h1>
            </div>

            <div class="panel-body">
               <div class="mb-5">
                  <div class="pull-left lead">Delivery / Pickup</div>
               </div>

               <table class="table mt-3 table-bordered">
                  <thead class="bg-light text-warning">
                     <th>Item ID</th>
                     <th width="22%">Image samples</th>
                     <th>Item name</th>
                     <th>Price</th>
                     <th>Dimension</th>
                     <th>Category</th>
                     <th class="text-center">Action</th>
                  </thead>
                  <tbody>
                     
                    
                    
                  </tbody>
               </table>
            </div>
         </div>
      </div>

      <!-- Placed at the end of the document so the pages load faster -->
      <script
         src="https://code.jquery.com/jquery-1.12.4.min.js"
         integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
         crossorigin="anonymous"
      ></script>
      <script src="../bootstrap3/js/bootstrap.min.js"></script>
      <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
   </body>
</html>
