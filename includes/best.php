

<div class="container my-5 ">
     <p class="text-center  my-5 fs-3 lead">MOST POPULAR</p>
     
     <div class="row">
          <?php
               include './includes/connection.php';

               $query=mysqli_query($con,"select * from `items` limit 3;");
               while($row=mysqli_fetch_array($query)){
          ?>
          <div class="col-sm col-md col-lg col-xl p-5 rounded">
               <img
                  src="./<?php echo $row['img']?>"
                  class="cat img-fluid w-100 h-50"
                  alt="..."
               />
               <div class="text-center bg-light shadow p-4">
                  <div class="type fs-5 text-dark text-uppercase fw-bold">
                     <?php echo $row['item_name']?>
                  </div>
                  <div class="text-secondary fs-6">
                     &#8369;
                     <?php echo $row['price']?>.00
                  </div>

                  <div class="d-flex justify-content-center mt-4">
                     <a
                        href="./view_product.php?id=<?php echo $row['id'] ?>"
                        class="text-decoration-none btn w-100 btn-outline-primary mt-0"
                     >
                        View product
                     </a>
                  </div>
               </div>
            </div>
          <?php
               }
               ?>
      
     </div>

   


     <div class="d-flex justify-content-center ">
          <a href="<?php if($userid == "undefined"){ echo './all_products.php'; } else { echo './user_products.php'; }?>"><button class="btn btn-outline-dark rounded-pill px-5 see-more" > SEE MORE</button></a>
     </div>
</div>

