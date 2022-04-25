<?php
   session_start();
   $page ='orders'; 
   include '../includes/connection.php';
   $userid = $_GET['userid'];

   $order_id = $_GET['order_id'];
   $get_details = mysqli_query($con, "select * from order_details where order_id = $order_id;");

   while($row = mysqli_fetch_assoc($get_details)){

  

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin | View Order</title>

    <link href="../css/all.css" rel="stylesheet" />

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./css/main.css" rel="stylesheet" />
  </head>
  <body>
    <?php include "./header.php"; ?>

    <div class="container" style="margin-top: 100px">
      <h4>View order details</h4>
      <hr />

      <div class="container row">

      <h4><b>ORDER ID: <?php echo $row['order_id']; ?></b><br>  
      <b>METHOD: <?php echo $row['method']; ?></b><br><br>
    <b>ORDER STATUS: <?php if($row['status'] == 'success') {echo 'ITEM RECEIVED';} else { echo $row['status'];} ?></b></h4>

      <br>
      
   
      <h4>Name: <?php echo $row['name']; ?></h4>
      <h4>Email: <?php echo $row['email']; ?></h4>
      <h4>Contact #: <?php echo $row['contact']; ?></h4>
      <h4>Address: <?php echo $row['house']. ", ".$row['street']. ", ".$row['barangay']. ", ".$row['city'] ?></h4>



        <?php 
            $sql = mysqli_query($con, "select * from orders INNER JOIN items ON orders.item_id = items.id where orders.item_id = items.id AND orders.order_id = $order_id");
            while($item = mysqli_fetch_assoc($sql)){?>

        <div
          class="col-md-3 mr-5 mt-5"
          style="background-color: #eee; margin-right: 40px; padding: 30px; height: 370px;"
        >
          <img
            class=""
            style="width: 200px; height: 140px"
            src="../<?php echo $item['img']; ?>"
            alt="..."
          />

          <div class="col">
            <div class="">
              <h4 class="media-heading text-uppercase" style="margin-top: 20px">
                <b><?php echo $item['item_name']; ?></b>
                <br />
                <br />
                <p>
                  <small>Description: </small>
                  <h5><?php echo $item['description']; ?></h6> 
                </p>
              </h4>
              <?php echo $item['price']; ?>
              x1
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

<?php
   }?>
