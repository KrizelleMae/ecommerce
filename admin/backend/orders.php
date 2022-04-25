<?php

include '../../includes/connection.php';

$action = $_GET['action'];
$order_id = $_GET['order_id'];
$method = $_GET['method'];


//CONFIRM DELIVERY
if($action == 'confirm_order'){
      $confirm = mysqli_query($con, "Update order_details set status = 'preparing' where order_id = $order_id;");

      if($confirm){
            echo ("<script>
                window.alert('Succesfully Updated');
                window.location.href='../orders.php';
                </script>");
      }
}



if($action == 'ready'){

      if($method == 'delivery') {

            $delivery = mysqli_query($con, "Update order_details set status = 'for delivery' where order_id = $order_id AND method = 'deliver';");

            if($delivery){
                  echo ("<script>
                  window.alert('Succesfully Updated');
                  window.location.href='../orders.php';
                  </script>");
            }
      }else {

            $pickup = mysqli_query($con, "Update order_details set status = 'for pickup' where order_id = $order_id AND method = 'pickup';");

            if($pickup){
                  echo ("<script>
                  window.alert('Succesfully Updated');
                  window.location.href='../orders.php';
                  </script>");

            }
      }
      
}


if($action == 'send'){

      if($method == 'deliver') {

            $delivery = mysqli_query($con, "Update order_details set status = 'for delivery' where order_id = $order_id;");

            if($delivery){
                  echo ("<script>
                  window.alert('Succesfully Updated');
                  window.location.href='../confirmed.php';
                  </script>");
            }
      }else {

            $pickup = mysqli_query($con, "Update order_details set status = 'for pickup' where order_id = $order_id;");

            if($pickup){
                  echo ("<script>
                  window.alert('Succesfully Updated');
                  window.location.href='../confirmed.php';
                  </script>");

            }
      }
      
}


if($action == 'otw'){


      $pickup = mysqli_query($con, "Update order_details set status = 'On the way' where order_id = $order_id;");

      if($pickup){
            echo ("<script>
            window.alert('Succesfully Updated');
            window.location.href='../confirmed.php';
            </script>");

      }
      
}


if($action == 'receive'){


      $pickup = mysqli_query($con, "Update order_details set status = 'success' where order_id = $order_id;");

      if($pickup){
            echo ("<script>
            window.alert('Succesfully Updated');
            window.location.href='../status.php';
            </script>");

      }
      
}


?>