<?php
 $page ='Dashboard'; 

include '../includes/connection.php';
session_start();


?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <meta name="description" content="" />
      <meta name="author" content="" />

      <link
         rel="stylesheet"
         href="https://fonts.googleapis.com/icon?family=Material+Icons"
      />

      <title>Admin</title>

      <!--Material UI-->
      <link href="../material-ui/css/app.css" rel="stylesheet" />
      <link href="../material-ui/js/app.js" rel="stylesheet" />
   </head>

   <body>
      <?php include "header.php"; ?>

      <div class="main container">Dashboard</div>
      

      <!-- Bootstrap core JavaScript
    ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script
         src="https://code.jquery.com/jquery-1.12.4.min.js"
         integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
         crossorigin="anonymous"
      ></script>
      <script src="../bootstrap3/js/bootstrap.min.js"></script>
      <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
   </body>
</html>
