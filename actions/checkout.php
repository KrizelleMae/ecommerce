<?php 

include ("../includes/connection.php");
session_start();


$name = $_SESSION['name'];
$email = $_SESSION['email'];
$userid = $_SESSION['id'];
$method = $_POST['method'];
$contact = $_POST['contact'];
$house = $_POST['house'];
$street = $_POST['street'];
$barangay = $_POST['barangay'];
$city = "Zamboanga City";


$order_id = rand(100000, 999999);


$sum = mysqli_query($con, "SELECT SUM(price) FROM cart WHERE userid = $userid;");
$total = mysqli_fetch_array($sum);

$num = intval($total[0]);

if($method == 'deliver'){
      $total_pay = $num + 200;
     
} else {
      $total_pay = $num;
}

$orders = mysqli_query($con, "insert into order_details(order_id, name, method, total, email, contact, house, street, barangay, city, status, userid) values($order_id, '$name', '$method', $total_pay, '$email', '$contact', '$house', '$street', '$barangay', '$city', 'pending',  $userid); ");


$item_id = $_POST['item_id'];
foreach ($item_id as $key => $value) {
            if(in_array($item_id[$key], $item_id))
            {
                  $id =  $item_id[$key];

                  $order_table = mysqli_query($con, "insert into  orders(order_id, item_id, userid) values($order_id, $id, $userid)");
                
            }
           
      }

if($orders && $order_table) {
      echo (
            "<script>
                  window.alert('Your order has been placed!');
                  window.location.href='../user_page.php';
            </script>"
      );
}else {
      echo (
            "<script>
                  window.alert('Failed!');
                  
            </script>"

          
      );

        echo("Error description: " . mysqli_error($con));
}



?>