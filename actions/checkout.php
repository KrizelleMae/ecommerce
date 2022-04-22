<?php 

include ("../includes/connection.php");
session_start();


$name = $_POST['name'];
$email = $_SESSION['email'];
$userid = $_SESSION['id'];
$method = $_POST['method'];
$contact = $_POST['contact'];
$house = $_POST['house'];
$street = $_POST['street'];
$barangay = $_POST['barangay'];
$city = $_POST['city'];


$sum = mysqli_query($con, "SELECT SUM(price) FROM cart WHERE userid = $userid;");
$total = mysqli_fetch_array($sum);

$num = intval($total[0]);

if($method == 'deliver'){
      $total_pay = $num + 200;
     
} else {
      $total_pay = $num;
}

$orders = mysqli_query($con, "insert into order_details(name, method, total, email, contact, house, street, barangay, city, userid) values('$name', '$method', $total_pay, '$address', '$email', $userid); ");

if($orders) {
      echo (
            "<script>
                  window.alert('Your order has been placed!');
                  window.location.href='./user_page.php';
            </script>"
      );
}else {
      echo (
            "<script>
                  window.alert('Failed!');
                 
            </script>"
      );
}

?>