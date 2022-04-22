<?php 
    include '../../includes/connection.php';

    if(isset($_POST['add_product'])){
        
        $random1 = rand(1111,9999);
        $random2 = rand(1111,9999);
        $random3 = $random1.$random2;
        $random3 = md5($random3);

        $random4 = rand(1111,9999);
        $random5 = rand(1111,9999);
        $random6 = $random4.$random5;
        $random6 = md5($random6);

        $id = rand(10000,99999);

        $file_name = $_FILES['img']['name'];
        $destination = '../../product_img/'.$random3.$file_name;
        $destination_name = 'product_img/'.$random3.$file_name;
        move_uploaded_file($_FILES['img']['tmp_name'],$destination);

        $file_name2 = $_FILES['img2']['name'];
        $destination2 = '../../product_img/'.$random6.$file_name2;
        $destination_name2 = 'product_img/'.$random6.$file_name2;
        move_uploaded_file($_FILES['img2']['tmp_name'],$destination2);

        if (!mysqli_query($con, "insert into items values('$id', '$destination_name', '$destination_name2', '$_POST[item_name]', '$_POST[description]', '$_POST[price]', '$_POST[dimension]','$_POST[category]', 'AVAILABLE', CURRENT_TIME());")) {
            echo("Error description: " . mysqli_error($con));
        } else {
            echo ("<script>
                window.alert('Succesfully Updated');
                window.location.href='../products.php';
                </script>");
        } 

       mysqli_close($con);
       
    }


?>