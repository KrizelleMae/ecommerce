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
      <title>Admin | Completed</title>

      <link href="../css/all.css" rel="stylesheet" />

      <!-- Bootstrap core CSS -->
      <link href="../bootstrap3/css/bootstrap.min.css" rel="stylesheet" />
      <link href="./css/main.css" rel="stylesheet" />
   </head>
   <body>
      <?php include "./header.php"; ?>

      <div class="container " style="margin-top: 100px;">
         <div class="panel panel-default">
            <div class="panel-heading">
               <h1 class="panel-title lead">List of Orders</h1>
            </div>

            <div class="panel-body">
               <table class="table mt-3 table-bordered">
                  <thead class="bg-light text-warning">
                     <th>Order ID</th>
                     <th>Buyer name</th>
                     <th>Total</th>
                     <th>Method</th>
                     <th width="20%">Action</th>
                  </thead>
                  <tbody>
                    <?php
                        $query=mysqli_query($con,"select * from order_details where status = 'success'");
                        while($row=mysqli_fetch_array($query)){
                     ?> 
                     <tr class="">
                        <th class="pt-4"><?php echo $row['order_id']?></th>
                       
                        <td class="pt-4"><?php echo $row['name']?></td>
                        <td class="pt-4">&#8369; <?php echo $row['total']?>.00</td>
                        <td class="text-center text-uppercase"><?php echo $row['method']?></b></td>
                   
                           <td class="text-center">
                           <a
                                 href="./view_order.php?userid=<?php echo $row['userid']; ?>&order_id=<?php echo $row['order_id']; ?>"
                                 class="btn btn-primary py-2"
                                 title="View"
                                 ><i class="bx bxs-edit-alt"></i>View</a
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
