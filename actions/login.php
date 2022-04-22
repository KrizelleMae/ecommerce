<?php
   include ("../includes/connection.php");
   session_start();
   
   if(isset($_POST['email'])){
       $email = $_POST['email'];
       $password = $_POST['password'];
     

       $sql = mysqli_query($con, "select * from users where email = '$email' AND  password = '$password' limit 1");
      

        if(mysqli_num_rows($sql) > 0){
            while($row = mysqli_fetch_assoc($sql)){
            
                $email = $row["email"];

                if($row["role"] == "admin"){
                 
                    $_SESSION['role'] = $row["role"];
                    header("location: ../admin/");
                } else{
                    
                    $_SESSION['id'] = $row["userid"];
                    $_SESSION['email'] = $row["email"];
                    $_SESSION['name'] = $row["name"];
                    $_SESSION['role'] = $row["role"];

                    header("location: ../pages/user_page.php");
                }
            }
  
        } else {
            echo '<script>alert("Invalid email or password.");</script>';
            echo '<script>window.location="../pages/login.php"</script>';
        }

       
    }   

?>

