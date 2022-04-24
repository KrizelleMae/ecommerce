<?php 

// $error = "";
session_start();
$userid = $_SESSION['id'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Jekyll v3.8.5" />
    <title>Checkout Page</title>

    <?php include './includes/links.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .payment {
        background: rgb(236, 236, 236);
        padding: 25px;
      }

      .pay-btn {
        width: 100%;
        padding: 10px 0px;
      }
    </style>
  </head>
  <body class="">
    <form action="./actions/checkout.php" method="post" name="checkout">
      <div class="container bg-light p-5 my-5">
        <div class="pb-5">
          <h2 class="float-start">Checkout Form</h2>
          <div class="float-end">
            <a
              href="./cart.php"
              class="bg-danger text-decoration-none px-5 py-2 text-white rounded"
              >Cancel order</a
            >
          </div>
        </div>
        <hr />

        <div class="row mt-5">
          <div class="col-md-4 order-md-2">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
              <span class="text-muted">Your cart</span>
              <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <ul class="list-group mb-3 mt-5 mx-3">
              <?php

                  include './includes/connection.php';
                             
                  // $id = $_SESSION['id'];

                  $query= "select * from `cart` where userid = $userid;";
                  $result = mysqli_query($con,$query);

                  
               
                       while ($row = mysqli_fetch_array($result)) {
                  ?>

              <li
                class="list-group-item d-flex justify-content-between lh-condensed"
              >
                <!-- <div class="mr-0">
                        <img
                           src="./<?php echo $row['img']; ?>"
                           class="img-cart"
                           alt=""
                        />
                     </div> -->

                <?php 
                    
                   
                    
                  $sum = mysqli_query($con, "SELECT SUM(price) FROM cart WHERE userid = $userid;");
                  $total = mysqli_fetch_array($sum);

                 
                         
                  ?>

                <script>

                  var method = document.getElementById('method');


                  function get_method() {
                     var df = 0;
                     var subtotal = <?php echo $total[0];?>;
                     document.getElementById('total').innerText = subtotal + ".00";

                     if (document.checkout.method.value === 'deliver') {
                        var df = 200;
                        var val = document.getElementById('fee').innerText = df + ".00";

                        document.getElementById('total').innerText = df + subtotal + ".00";


                     } else {
                        document.getElementById('fee').innerText = df + ".00";
                        var total = document.getElementById('total').innerText = df + ".00";

                        document.getElementById('total').innerText = df + subtotal + ".00";
                     }
                  }

                  get_method();
                </script>

                <div>
                  <h6 class="my-0 text-left">
                    <?php echo $row['item_name']; ?>
                  </h6>
                  <small class="text-muted">Furniture</small>
                </div>
                <span class="text-muted">
                  &#8369;
                  <?php echo $row['price']; ?>.00</span
                >
                   
                <input type="hidden" name="item_id[]" value=" <?php echo $row['item_id']; ?>">
                
              </li>
              <?php 
                    
                     
                        }
                  ?>

              <li
                class="list-group-item d-flex justify-content-between bg-light"
              >
                <div class="text-success">
                  <h6 class="my-0">DELIVERY FEE</h6>
                  <small
                    ><i class="fa fa-map-marker"></i> Zamboanga City only</small
                  >
                </div>

                <span class="text-success"
                  >+ &#8369; <span id="fee">0.00</span></span
                >
              </li>

              <li class="list-group-item d-flex justify-content-between">
                <span>Total (PHP)</span>
                <strong
                  >&#8369;
                  <span id="total"><?php echo $total[0];?>.00</span>
                </strong>
              </li>

              <div class="mt-5 payment">
                <h4 class="mb-3">Payment</h4>
                <label class="text-secondary" class="me-5">
                  <input
                    type="radio"
                    name="payment-option"
                    value="paypal"
                    checked
                  />
                  Pay with PayPal
                </label>
                <br />
                <label class="text-secondary">
                  <input type="radio" name="payment-option" value="cash" />

                  Cash
                </label>

                <div class="mt-4"></div>
                <div id="paypal-button-container" class="pay-btn"></div>

                <div id="cash-button-container" class="hidden">
                  <button
                    type="submit"
                    class="btn btn-dark text-white rounded-lg pay-btn"
                  >
                    Buy now
                  </button>
                </div>
              </div>
            </ul>
          </div>
          <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Billing</h4>

            <div class="row mt-4">
              <div class="col-md mb-3">
                <label class="text-secondary" for="firstName">Full name</label>
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  placeholder=""
                  value="<?php echo $_SESSION['name']; ?>"
                  required
                  disabled
                  name="name"
                />
              </div>
            </div>

            <div class="row">
              <div class="mb-3 col">
                <label class="text-secondary" for="email"
                  >Email <span class="text-muted">(Optional)</span></label
                >
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                  value="<?php echo $_SESSION['email']; ?>"
                  placeholder="random@gmail.com"
                  required
                />
              </div>

              <div class="mb-3 col">
                <label class="text-secondary" for="contact"
                  >Contact number
                </label>
                <input
                  type="tel"
                  class="form-control"
                  id="tel"
                  name="contact"
                  value="<?php echo $_SESSION['contact']; ?>"
                  required
                />
              </div>
            </div>

            <div class="row">
              <div class="mb-3 col">
                <label class="text-secondary" for="">House #</label>
                <input
                  type="text"
                  class="form-control"
                  placeholder="1234 "
                  name="house"
                  required
                />
              </div>

              <div class="mb-3 col">
                <label class="text-secondary" for="">Street</label>
                <input
                  type="text"
                  class="form-control"
                  id=""
                  placeholder="Main St"
                  required
                  name="street"
                />
              </div>
            </div>
            <div class="row">
              <div class="mb-3 col">
                <label class="text-secondary" for="">Barangay</label>
                <input
                  type="text"
                  class="form-control"
                  id="House #"
                  placeholder="Barangay"
                  required
                  name="barangay"
                />
              </div>

              <div class="mb-3 col">
                <label class="text-secondary" for="">City</label>
                <input
                  type="text"
                  name="city"
                  disabled
                  class="form-control"
                  value="Zamboanga City"
                  required
                />
              </div>
            </div>

            <div class="mt-5">
              <h5>Delivery Method</h5>
              <select
                name="method"
                id="method"
                class="w-50 form-select"
                onchange="get_method()"
                required
              >
                <option value="">Select method</option>
                <option value="deliver">Deliver</option>
                <option value="pickup">Pickup</option>
              </select>
            </div>

            <!-- Include the PayPal JavaScript SDK -->
            <script src="https://www.paypal.com/sdk/js?client-id=test&currency=PHP"></script>

            <script>
              // Listen for changes to the radio fields
              document
                .querySelectorAll("input[name=payment-option]")
                .forEach(function (el) {
                  el.addEventListener("change", function (event) {
                    // If PayPal is selected, show the PayPal button
                    if (event.target.value === "paypal") {
                      document.querySelector(
                        "#cash-button-container"
                      ).style.display = "none";
                      document.querySelector(
                        "#paypal-button-container"
                      ).style.display = "";
                    }

                    // If cash is selected, show the standard continue button
                    if (event.target.value === "cash") {
                      document.querySelector(
                        "#cash-button-container"
                      ).style.display = "";
                      document.querySelector(
                        "#paypal-button-container"
                      ).style.display = "none";
                    }
                  });
                });

              // Hide Non-PayPal button by default
              document.querySelector("#cash-button-container").style.display =
                "none";

              // Render the PayPal button into #paypal-button-container
              paypal
                .Buttons({
                  style: {
                    layout: "horizontal",
                  },
                })
                .render("#paypal-button-container");
            </script>
          </div>
        </div>
      </div>
    </form>
  </body>
</html>
