<?php
 $page ='delivery'; 
 include '../includes/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Admin | Orders</title>

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
               <h1 class="panel-title lead">List of Orders</h1>
            </div>

            <div class="panel-body">
               <table class="table mt-3 table-bordered">
                  <thead class="bg-light text-warning">
                     <th>Order ID</th>
                     <th>Buyer name</th>
                     <th>Email</th>
                     <th>Total</th>
                     <th>Address</th>
                     <th>Date ordered</th>
                     <th>Method</th>
                     <th>Status</th>
                     <th width="20%">Action</th>
                  </thead>
                  <tbody>
                    <?php
                        $query=mysqli_query($con,"select * from order_details where status != 'cancelled' AND status != 'pending'");
                        while($row=mysqli_fetch_array($query)){
                     ?> 
                     <tr class="">
                        <th class="pt-4"><?php echo $row['order_id']?></th>
                       
                        <td class="pt-4"><?php echo $row['name']?></td>
                        <td class="pt-4"><?php echo $row['email']?></td>
                        <td class="pt-4">&#8369; <?php echo $row['total']?>.00</td>
                        <td class="pt-4"><?php echo $row['house']. ", ".$row['street']. ", ".$row['barangay']. ", ".$row['city'] ?></td>
                        <td class="pt-4">
                           <?php 
                              $date_ordered = strtotime($row['date_ordered']); 
                              echo date("F j, Y, g:i a", $date_ordered);
                           ?>
                        </td>
                        <td class="text-center text-uppercase"><?php echo $row['method']?></b></td>
                        <td class="pt-4 text-center text-uppercase"><b> <?php echo $row['status']?></b></td>
                           <td class="text-center">
                           <a
                                 href="./view_order.php?userid=<?php echo $row['userid']; ?>&order_id=<?php echo $row['order_id']; ?>"
                                 class="btn btn-primary py-2"
                                 title="View"
                                 ><i class="bx bxs-edit-alt"></i>View</a
                              >

                              <?php 
                              
                              if($row['status'] == 'for pickup') {
                                 echo 
                                 "<a onclick='return confirm('Are you sure you want to confirm this order?');' 
                                    href='./backend/orders.php?action=receive&order_id=".$row['order_id']."&method=pickup'
                                    class='btn btn-success me-5 text-uppercase'
                                    >ORDER RECEIVED</a
                                 >
                                 ";
                              } else if ($row['status'] == 'for delivery') {
                                 echo 
                                 "<a onclick='return confirm('Are you sure you want to confirm this order?');' 
                                    href='./backend/orders.php?action=otw&order_id=".$row['order_id']."&method=deliver'
                                    class='btn btn-default me-5 text-uppercase'
                                    >ON THE WAY</a
                                 >
                                 ";
                              } else if ($row['status'] == 'preparing') {
                                 echo 
                                 " <a onclick='return confirm('Are you sure you want to confirm this order?');' 
                                    href='./backend/orders.php?action=send&order_id=".$row['order_id']."&method=".$row['method']."'
                                    class='btn btn-warning me-5 text-uppercase'
                                    >  ITEM READY  </a
                                 >
                                 ";
                              } else {
                                  echo 
                                 " <a onclick='return confirm('Are you sure you want to confirm this order?');' 
                                    href='./backend/orders.php?action=receive&order_id=".$row['order_id']."&method=".$row['method']."'
                                    class='btn btn-success me-5 text-uppercase'
                                    >  ORDER RECEIVED  </a
                                 >
                                 ";
                              }
                              
                              ?>
                             
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