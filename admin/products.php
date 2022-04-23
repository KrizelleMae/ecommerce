<?php
 $page ='Products'; 
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

      <div class="main ">
         <div class="panel panel-default">
            <div class="panel-heading">
               <h1 class="panel-title lead">Products page</h1>
            </div>

            <div class="panel-body">
               <div class="mb-5">
                  <div class="pull-left lead">List of items</div>

                  <a href="add-product.php" class="btn btn-primary pull-right">
                     Add new item
                  </a>
               </div>

               <table class="table mt-3 table-bordered">
                  <thead class="bg-light text-warning">
                     <th>Item ID</th>
                     <th width="25%">Image samples</th>
                     <th width="20%">Item name</th>
                     <th>Price</th>
                     <th>Dimension</th>
                     <th>Category</th>
                     <th class="text-center">Action</th>
                  </thead>
                  <tbody>
                     <?php
                        $query=mysqli_query($con,"select * from `items`");
                        while($row=mysqli_fetch_array($query)){
                     ?>
                     <tr class="">
                        <th class="pt-4"><?php echo $row['id']?></th>
                        <td class="" >
                           <img
                              src="../<?php echo $row['img']?>"
                              height="60px"
                           />
                           <img
                              src="../<?php echo $row['img2']?>"
                              height="60px"
                           />
                        </td>
                        <td class="pt-4"><?php echo $row['item_name']?></td>
                        <td class="pt-4"><?php echo $row['price']?></td>
                        <td class="pt-4"><?php echo $row['dimension']?></td>
                        <td class="pt-4"><?php echo $row['category']?></td>
                        <td class="text-center">
                           <a
                              class="btn btn-success py-2"
                              data-toggle="modal"
                              data-target="#update-product"
                              title="Edit product"
                              ><i class="bx bxs-edit-alt"></i>Update</a
                           >

                           <a
                              href="backend/delete.php?id=<?php echo $row['id'];?>"
                              class="btn btn-danger py-2"
                              class="tooltip"
                              title="Delete product"
                              onclick="return confirm('Are you sure you want to delete this item? ');"
                              >Delete</a
                           >
                        </td>
                     </tr>
                     <?php
                          } ?>
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
