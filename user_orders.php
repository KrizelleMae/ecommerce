<?php
   session_start();
   $page ='orders'; 
   include './includes/connection.php';
   $userid = $_SESSION['id'];

   $get_details = mysqli_query($con, "select * from order_details where userid = $userid limit 1;");

   while($row = mysqli_fetch_assoc($get_details)){

  

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

      <div class="container bg-light p-4">
        <?php 
            $sql = mysqli_query($con, "select * from cart INNER JOIN items ON cart.item_id = items.id where cart.userid = $userid limit 1");
            while($item = mysqli_fetch_assoc($sql)){?>

        <!-- SMAPLE -->

       
          <div class="row">
            <div class="col-sm-2">
              <img
                class=""
                style="width: 200px; height: 100px"
                src="./<?php echo $item['img']; ?>"
                alt="..."
              />
            </div>

            <div class="col-sm-8">
              <h5 class="fw-bold"><?php echo $item['item_name']?></h5>
              <small>
                &#8369;
                <?php echo $item['price']?>.00 x1</small
              >
              <br />
              <br />

              <small class="fw-bold">
                <i class="bx bx-car"></i>
                <?php if($row['status'] == 'pending'){ echo "Not yet been reviewed by the seller";}else{ echo $row['status'];}?>
              </small>
            </div>

            <div class="col">
              <?php if($row['status'] == 'pending'){ echo "<a href='actions/cancel_order.php?id=$userid' class='btn btn-danger'>Cancel order </a>";}else{ echo $row['status'];}?>
              
              <br>
              <br>
                <a href="./view_order.php?userid=<?php echo $row['userid']; ?>"
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
