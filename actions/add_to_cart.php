

<?php
    session_start();

    include '../includes/connection.php';
    $item_id = $_GET["id"];
    $userid = $_SESSION["id"];
  
    
    if (isset($_POST["add-to-cart"])){
       
        $item_name = $_POST["item_name"];
        $price = $_POST["price"];
        $img = $_POST["img"];

        $query = mysqli_query($con, "select * from cart where item_id = $item_id AND userid = $userid;");

        if(mysqli_num_rows($query) == 0) {
              if (!mysqli_query($con, "INSERT INTO cart (item_id, img, item_name,price, userid) VALUES('$item_id','$img','$item_name','$price', $userid);")) {
            
                  echo("Error description: " . mysqli_error($con));
                 
            } else {
                  echo (
                        "<script>
                        window.alert('Product added to cart');
                        window.location.href='../user_products.php';
                        </script>"
                  );
            } 

        }else {
            echo (
                        "<script>
                        window.alert('Product already added to cart!');
                        window.location.href='../user_products.php';
                        </script>"
                  );
      }
    }
      if (isset($_GET["action"])){
        if ($_GET["action"] == "remove"){
              mysqli_query($con, "Delete from cart where item_id = $item_id AND userid = $userid");
           echo (
                        "<script>
                        window.alert('item removed from cart');
                        window.location.href='../cart.php';
                        </script>"
                  );
        }
    }
 

?>

