<?php

 include ("../includes/connection.php");
   session_start();
   
   
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $contact = $_POST['contact'];

      $sql = mysqli_query($con, "select * from users where email = '$email'");
      
      if(mysqli_num_rows($sql) == 0){

            $query = mysqli_query($con, "insert into users(name, email, contact, password, role) values('$name', '$email', '$contact', '$password', 'buyer');");

            if($query) {
                  echo '<script>alert("Register succesful. Log in now!");</script>';
            echo '<script>window.location="../login.php"</script>';
            }

        } else {
            echo '<script>alert("Email has already been used. Try another email.");</script>';
            echo '<script>window.location="./signup.php"</script>';
        }

  
?>