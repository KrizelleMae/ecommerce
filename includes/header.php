<!--carousel-->
         <div class="carousel slide mt-5 pt-4" data-bs-ride="carousel">
           
            <div class="carousel-inner">
               <div class="carousel-item active position-relative">
                  <img src="./images/0.jpeg" class="d-block w-100 h-100 img-fluid" alt="...">
                 
                    <div class="position-absolute top-50 start-50 translate-middle">
                         <p class="header-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                           <div class="d-flex justify-content-center">
                              <a href="<?php 
                                          if($userid == "undefined"){ 
                                             echo './all_products.php';
                                          } else {
                                             echo './user_products.php';
                                          }
                                       ?>" class="btn btn-dark rounded-pill px-4 py-2">SHOP NOW <span class="ms-1 bx bx-cart"></a>
                           </div>
                    </div>

               </div>
               <div class="carousel-item position-relative">
                  <img src="./images/1.jpg" class="d-block w-100 h-100 img-fluid m-0 p-0" alt="...">
                 
                    <div class="position-absolute top-50 start-50 translate-middle">
                         <figure class="text-end bg-light px-2 py-1">
                           <blockquote class="blockquote ">
                              <p class="quote">“Your home should be a story of who you are, and be a collection of what you love.”</p>
                           </blockquote>
                           <figcaption class="blockquote-footer">
                             <cite title="Source Title" class="cite">Nate Berkus (Interior Designer)</cite>
                           </figcaption>
                        </figure>
                         
                    </div>

               </div>
              
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#captions" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#captions" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
            </button>
         </div>
         <!-- end carousel -->