<?php

include '../includes/connection.php';

$order_id = $_GET['order_id'];

$cancel = mysqli_query($con, "Update order_details set status = 'cancelled' where order_id = $order_id;");

if($cancel){
            echo ("<script>
                window.alert('Order Cancelled');
                window.location.href='../user_orders.php';
                </script>");
}
