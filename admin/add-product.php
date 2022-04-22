<?php
 $page ='Dashboard'; 
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
      <link href="./css/main.css" rel="stylesheet" />

      <?php 
         include "../includes/links.php";  
    ?>

      <title>Admin | Add product</title>
   </head>

   <body>
      <div class="container my-5">
         <div class="page-header mb-5">
            <h1>Add new Item</h1>
            <div class="my-auto">
               <a href="./products.php">back to products</a>
            </div>
            <hr />
         </div>

         <form
            name="add_product"
            action="./backend/add.php"
            method="POST"
            enctype="multipart/form-data"
         >
            <div class="row mt-3">
               <div class="form-group col-md-6">
                  <label for="item_name">Item name</label>
                  <input type="text" class="form-control" name="item_name" />
               </div>

               <div class="form-group col-md-6">
                  <label for="price">Item price</label>
                  <input
                     type="number"
                     class="form-control"
                     min="1"
                     name="price"
                     placeholder="Php"
                  />
               </div>
            </div>

            <div class="mt-3">
               <div class="form-group">
                  <label for="description">Description</label>
                  <input class="form-control" name="description" />
               </div>
            </div>

            <div class="row mt-3">
               <div class="form-group col-md-6">
                  <label for="dimension">Dimension</label>
                  <input type="text" class="form-control" name="dimension" />
               </div>

               <div class="form-group col-md-6">
                  <label for="">Category </label>
                  <select class="form-select" name="category" required>
                     <option selected="" disabled="">Please Select</option>
                     <option value="Chair">Chair</option>
                     <option value="Cabinet">Cabinet</option>
                     <option value="Table">Table</option>
                     <option value="Bed">Bed</option>
                  </select>
               </div>
            </div>

            <div class="row mt-3">
               <div class="form-group">
                  <label for="">Display image 1 </label>
                  <input type="file" class="form-control" name="img" />
               </div>
            </div>

            <div class="row mt-3">
               <div class="form-group">
                  <label for="">Display image 2 </label>
                  <input type="file" class="form-control" name="img2" />
               </div>
            </div>

            <div class="mt-5 float-end">
               <a href="products.php" type="submit" class="btn btn-danger me-2"
                  >CANCEL
               </a>
               <input
                  type="submit"
                  name="add_product"
                  class="btn btn-success"
                  value="ADD ITEM"
               />
            </div>
         </form>
      </div>
   </body>
</html>
