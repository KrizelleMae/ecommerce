<?php
   session_start();
   $page ='orders'; 
   include './includes/connection.php';
   $userid = $_SESSION['id'];

  

  

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/all.css" />
    <title>Welcome <?php $_SESSION['name']; ?></title>

    <link href="./css/main.css" rel="stylesheet" />
    <?php 
         include "./includes/links.php";  
      ?>
  </head>
  <body>
    <?php include "./userheader.php";?> 

    <div class="container" style="margin-top: 150px">
      <h4>My Orders</h4>

      <hr />

      <?php 
       $get_details = mysqli_query($con, "select  * from order_details where userid = $userid;");

      while($row = mysqli_fetch_assoc($get_details)){
      ?>

      <div class="container bg-light p-5 mb-3">
        <?php 
            $sql = mysqli_query($con, "select * from orders INNER JOIN items ON orders.item_id = items.id where orders.item_id = items.id limit 1");
            while($item = mysqli_fetch_assoc($sql)){?>

        <!-- SMAPLE -->

       
          <div class="row">
            <div class="">
              <!-- <img
                class=""
                style="width: 200px; height: 100px"
                src="./<?php echo $item['img']; ?>"
                alt="..."
              />
              -->
            </div>

            <div class="col-sm-5">
              <!-- <h5 class="fw-bold"><?php echo $item['item_name']?></h5>
              <small>
                &#8369;
                <?php echo $item['price']?>.00 x1</small 
              >-->
              <h5 class="fw-bold">ORDER ID: <?php echo $row['order_id']?></h5>
              <small>
                &#8369;
                <?php echo $row['total']?>.00 </small 
              >
              <br />
              <br />

             
            </div>

            <div class="col-sm-5">
              <small class="pb-4">ORDER STATUS: </small>  <br>
               <small class="fw-bold text-uppercase mt-3">
                <i class="bx bx-car"></i>
                <?php if($row['status'] == 'pending'){ echo "Not yet been reviewed by the seller";} else if($row['status'] == 'success') {echo 'ITEM RECEIVED';}else{ echo $row['status'];}?>
              </small>
            </div>

            <div class="col">
              <?php if($row['status'] == 'pending'){ echo "<a href='actions/cancel_order.php?order_id=".$row['order_id']."' class='btn btn-danger'>Cancel order </a>";}else{ echo '';}?>
              
              <br>
              <br>
                <a href="./view_order.php?order_id=<?php echo $row['order_id']; ?>"
                class="text-decoration-none text-primary"
                >See more</a>   

             
            </div>
            
          </div>
        

        <!-- end -->

        <?php 
            }
         ?>
      </div>
    </div>
  </body>
</html>

<?php
   }?>
