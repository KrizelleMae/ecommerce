<?php
   session_start();
   $page ='orders'; 
   include './includes/connection.php';
   $userid = $_SESSION['id'];

   $get_details = mysqli_query($con, "select * from order_details where userid = $userid;");

   while($row = mysqli_fetch_assoc($get_details)){

  

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome <?php $_SESSION['name']; ?></title>

    <link href="./css/main.css" rel="stylesheet" />
    <?php 
         include "./includes/links.php";  
      ?>
  </head>
  <body>
    <?php include "./userheader.php"; ?>

    <div class="container" style="margin-top: 120px;" >
      
     <!-- Breadcrumb -->
         <div class="mt-5 pt-2">
            <nav class="breadcrumb text-dark fs-5">
               <ol class="breadcrumb fs-6">
                  <li class="breadcrumb-item">
                     <a
                        href="<?php 
                        if($userid == 'undefined') {
                           echo './all_products.php';
                        } else {
                           echo './user_orders.php'; 
                        }
                        ?>"
                        class="text-primary text-decoration-none"
                        >My orders</a
                     >
                  </li>
                  <li
                     class="breadcrumb-item active text-secondary"
                     aria-current="page"
                  >
                  View order
                  </li>
               </ol>
            </nav>
         </div>
  

      <div class=" row">

      <h5><b>ORDER ID: <?php echo $row['order_id']; ?></b><br>  
      <b>METHOD: <?php echo $row['method']; ?></b></h5>

      <br>
      
   
      <h5>Name: <?php echo $row['name']; ?></h5>
      <h5>Email: <?php echo $row['email']; ?></h5>
      <h5>Contact #: <?php echo $row['contact']; ?></h5>
      <h5>Address: <?php echo $row['house']. ", ".$row['street']. ", ".$row['barangay']. ", ".$row['city'] ?></h5>



        <?php 
            $sql = mysqli_query($con, "select * from cart INNER JOIN items ON cart.item_id = items.id where cart.userid = $userid");
            while($item = mysqli_fetch_assoc($sql)){?>

        <div
          class="col-md-3 mr-5 mt-5"
          style="background-color: #eee; margin-right: 40px; padding: 30px; height: 370px;"
        >
          <img
            class=""
            style="width: 270px; height: 140px"
            src="./<?php echo $item['img']; ?>"
            alt="..."
          />

          <div class="col">
            <div class="">
              <h5 class="media-heading text-uppercase" style="margin-top: 20px">
                <b><?php echo $item['item_name']; ?></b>
                <br />
                <br />
                <p>
                  <small>Description: </small>
                  <h6><?php echo $item['description']; ?></h6> 
                </p>
              </h5>
               &#8369; <?php echo $item['price']; ?>
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
