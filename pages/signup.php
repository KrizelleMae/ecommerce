<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Login</title>
      <?php 
         include "../includes/links.php";  
      ?>

      <link rel="stylesheet" href="../css/all.css" />
   </head>
   <body>
      <div class="login-container">
         <div class="shadow-sm">
            <ul class="nav nav-tabs">
               <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="./login.php"
                     >Login</a
                  >
               </li>
               <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#"
                     >Sign up</a
                  >
               </li>
            </ul>

            <div class="container p-5">
               <form action="../actions/register.php" method="post" name="register">
                  <div class="mb-3">
                     <label for="exampleInputPassword1" class="form-label"
                        >Full Name</label
                     >
                     <input type="text" class="form-control" name="name" />
                  </div>
                  <div class="mb-3">
                     <label for="exampleInputEmail1" class="form-label"
                        >Email address</label
                     >
                     <input type="email" class="form-control" name="email"/>
                  </div>
                  <div class="mb-3">
                     <label for="exampleInputPassword1" class="form-label"
                        >Password</label
                     >
                     <input type="password" class="form-control" name="password" />
                  </div>

                  <button
                     type="submit"
                     class="btn btn-primary mt-4 rounded-pill col-md-12"
                  >
                     Sign up
                  </button>
               </form>
            </div>
         </div>
      </div>
   </body>
</html>
