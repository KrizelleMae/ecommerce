<?php
 $page ='Dashboard'; 

include '../includes/connection.php';
session_start();


// PENDING
$get_products= mysqli_query($con, "select COUNT(*) FROM items;");
$products= $get_products->fetch_row();

// $get_success= mysqli_query($con, "select COUNT(*) FROM order_details where status = 'success';");
// $completed= $get_success->fetch_row();


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link
      href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
    />

    <title>Admin</title>
  </head>

  <body>
    <?php include "header.php"; ?>

    <div class="mx-5" style="margin-top: 100px; margin-left: 100px;margin-right: 100px;">
    

   
      <div class="row">
         <div class="col-lg-3">
           <div class="panel panel-info">
             <div class="panel-heading">
               <div class="row">
                 <div class="col-xs-6">
                   <i class="fa fa-list fa-5x"></i>
                 </div>
                 <div class="col-xs-6 text-right">
                   <p class="announcement-heading">1</p>
                   <p class="announcement-text">Orders</p>
                 </div>
               </div>
             </div>
             <a href="#">
               <div class="panel-footer announcement-bottom">
                 <div class="row">
                   <div class="col-xs-6">
                     View
                   </div>
                   <div class="col-xs-6 text-right">
                     <i class="fa fa-arrow-circle-right"></i>
                   </div>
                 </div>
               </div>
             </a>
           </div>
         </div>
         <div class="col-lg-3">
           <div class="panel panel-warning">
             <div class="panel-heading">
               <div class="row">
                 <div class="col-xs-6">
                   <i class="fa fa-barcode fa-5x"></i>
                 </div>
                 <div class="col-xs-6 text-right">
                   <p class="announcement-heading"><?php echo $products[0];?></p>
                   <p class="announcement-text"> Products</p>
                 </div>
               </div>
             </div>
             <a href="./products.php">
               <div class="panel-footer announcement-bottom">
                 <div class="row">
                   <div class="col-xs-6">
                     View
                   </div>
                   <div class="col-xs-6 text-right">
                     <i class="fa fa-arrow-circle-right"></i>
                   </div>
                 </div>
               </div>
             </a>
           </div>
         </div>
         <div class="col-lg-3">
           <div class="panel panel-danger">
             <div class="panel-heading">
               <div class="row">
                 <div class="col-xs-6">
                   <i class="fa fa-user fa-5x"></i>
                 </div>
                 <div class="col-xs-6 text-right">
                   <p class="announcement-heading">0</p>
                   <p class="announcement-text">Customers</p>
                 </div> 
               </div>
             </div>
             <a href="#">
               <div class="panel-footer announcement-bottom">
                 <div class="row">
                   <div class="col-xs-6">
                     View
                   </div>
                   <div class="col-xs-6 text-right">
                     <i class="fa fa-arrow-circle-right"></i>
                   </div>
                 </div>
               </div>
             </a>
           </div>
         </div>
         <div class="col-lg-3">
           <div class="panel panel-success">
             <div class="panel-heading">
               <div class="row">
                 <div class="col-xs-6">
                   <i class="fa fa-car fa-5x"></i>
                 </div>
                 <div class="col-xs-6 text-right">
                   <p class="announcement-heading">9000</p>
                   <p class="announcement-text"> Completed!</p>
                 </div>
               </div>
             </div>
             <a href="#">
               <div class="panel-footer announcement-bottom">
                 <div class="row">
                   <div class="col-xs-6">
                     View
                   </div>
                   <div class="col-xs-6 text-right">
                     <i class="fa fa-arrow-circle-right"></i>
                   </div>
                 </div>
               </div>
             </a>
           </div>
         </div>
    </div>

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
                        $query=mysqli_query($con,"select * from order_details where status = 'pending'");
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
                        <td class="pt-4 text-center text-uppercase"><b><?php echo $row['status']?></b></td>
                           <td class="text-center">
                           <a
                                 href="./view_order.php?userid=<?php echo $row['userid']; ?>&order_id=<?php echo $row['order_id']; ?>"
                                 class="btn btn-primary py-2"
                                 title="View"
                                 ><i class="bx bxs-edit-alt"></i>View</a
                              >

                              
                              <a
                                 onclick="return confirm('Are you sure you want to cancel this order?');" 
                                    href="./backend/orders.php?action=confirm_order&order_id=<?php echo $row["order_id"]; ?>&method=<?php echo $row["method"]; ?>"
                                    class="btn btn-danger me-5"
                                    >CANCEL</a
                                 >
                              

                              <a
                                 onclick="return confirm('Are you sure you want to confirm this order?');" 
                                    href="./backend/orders.php?action=confirm_order&order_id=<?php echo $row["order_id"]; ?>&method=<?php echo $row["method"]; ?>"
                                    class="btn btn-success me-5"
                                    >Confirm Order</a
                                 >
                           </td>
                     </tr>
                     <?php
                          } ?>
                  </tbody>
               </table>
            </div>
         </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
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
