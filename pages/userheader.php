
<div class="container-fluid">
         <!-- <div class="row top bg-light border-bottom text-dark position-relative">
            <div class="text-center m-auto">Shop anywhere. Anytime.</div>
         </div> -->

         <nav class="navbar fixed-top navbar-expand-lg bg-white navbar-light shadow-sm p-3 ">
            <div class="container">
               <a class="navbar-brand" href="#">LOGO Logo</a>
               <button
                  class="navbar-toggler"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarText"
                  aria-controls="navbarText"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
               >
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarText">
                  <ul class="navbar-nav m-auto">
                     <li class="nav-item">
                        <a class="nav-link me-4 active" aria-current="page" href="./user_page.php"
                           >HOME</a
                        >
                     </li>
                    
                     <li class="nav-item dropdown me-4">
                        <a class="nav-link" href="#">
                         ABOUT US
                        </a>
                       
                     </li>

                     <li class="nav-item dropdown">
                        <a class="nav-link " href="./all_products.php" >
                        ALL PRODUCTS
                        </a>
                        
                     </li>

                    
                    
                  </ul>
                  <div class="navbar-text">
                    <ul class="navbar-nav m-auto">
                       
                        <li class="nav-item me-4">
                              <a href="./cart.php"> 
                             <div class="position-relative pe-1">
                            
                              <i class='fs-3 bx bx-shopping-bag text-color'> </i>
                                 <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-color
                                 ">
                                 0
                                    <span class="visually-hidden"></span>
                                 </span>
                              
                              </div>
                            
                        </li>
                          
                         <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         <?php echo $_SESSION['name'];?> 
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#">Profile</a></li>
                          <li><a class="dropdown-item" href="../actions/logout.php">Logout</a></li>
                          
                        </ul>
                     </li>
                       

                        

                      </ul> 
                     </div>
                     </div>
                  </span>
               </div>
            </div>
         </nav>
      </div>