<?php
	$id=$_GET['id'];
	include '../../includes/connection.php';

	
	header('location: ../products.php');

      if (!mysqli_query($con,"delete from `items` where id = '$id'")){
            echo("Error description: " . mysqli_error($con));
      } else {
            echo ("<script>
                window.alert('Succesfully Deleted!');
                window.location.href='../products.php';
                </script>");
      } 

       mysqli_close($con);
?>