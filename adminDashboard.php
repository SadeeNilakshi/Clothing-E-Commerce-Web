<?php

session_start();

if (isset($_SESSION["a"])) {

?>

  <!-- Load Page -->

  <!DOCTYPE html>
  <html lang="en" data-bs-theme="dark">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="resources/resources2/icon/icon2.png" />
    <title>Olivia Fashion House | Admin Panel</title>
  </head>

  <body>
    <div class="container"></div>
    <!-- nav Bar -->
    <?php include "adminNavBar.php"; ?>
    <!-- nav Bar -->

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 text-info fw-bold mt-5 ">
                <h2 class="fw-bold">D a s h b o a r d</h2>
            </div>
            <div class="col-12">
                <hr />
            </div>
            <div class="col-12">
                <div class="row g-1">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                        <div class="dCard text-white text-center shadow" style="background-color: #0dcaf0;">
                            <span class="fs-4 fw-bold">Daily Earnings</span>
                            <span class="fs-5">Rs. 1000000 .00</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                        <div class="dCard text-white text-center" style="background-color: #007bff;">
                            <span class="fs-4 fw-bold">Monthly Earnings</span>
                            <span class="fs-5">Rs. 1000000 .00</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                        <div class="dCard text-white text-center" style="background-color: #34b1aa;">
                            <span class="fs-4 fw-bold">Today Sellings</span>
                            <span class="fs-5">10 Items</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                        <div class="dCard text-white text-center" style="background-color: #9e58ff;">
                            <span class="fs-4 fw-bold">Monthly Sellings</span>
                            <span class="fs-5">100 Items</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                        <div class="dCard text-white text-center" style="background-color: #1bcfb4;">
                            <span class="fs-4 fw-bold">Total Sellings</span>
                            <span class="fs-5">100 Items</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                        <div class="dCard text-white text-center shadow" style="background-color: #f3797e;">
                            <span class="fs-4 fw-bold">Total Engagements</span>
                            <span class="fs-5">10 Members</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <hr />
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12 my-5">
                <div class="rounded bg-body p-3">
                    <div class="text-center">
                        <label class="form-label fs-4 fw-bold text-decoration-underline">Mostly Popular Item</label>
                    </div>
                    <div class="text-center">
                        <img src="resources/resources2/product/FB_IMG_1717007003807.jpg" class="img-fluid" style="height: 250px;" alt="Popular Item" />
                    </div>
                    <div class="text-center my-3">
                        <span class="fs-5 fw-bold">Apple iPhone 12</span><br />
                        <span class="fs-6">10 items</span><br />
                        <span class="fs-6">Rs. 100000 .00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12 my-5">
                <div class="rounded bg-body p-3">
                    <div class="text-center">
                        <label class="form-label fs-4 fw-bold text-decoration-underline">Most Famouse Product</label>
                    </div>
                    <div class="text-center shadow">
                        <img src="resources/resources2/user/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" class="img-fluid" style="height: 250px;" alt="Famous Product" />
                    </div>
                    <div class="text-center my-3">
                        <span class="fs-5 fw-bold">User 01</span><br />
                        <span class="fs-6">user@gmail.com</span><br />
                        <span class="fs-6">0777555222</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Footer -->
    <div class="col-12">
      <p class="text-center">&copy; 2024 OliviaFashionHouse.lk || All Right Reserved</p>
    </div>
    <!--Footer -->


    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
  </body>

  </html>



<?php


} else {
  echo ("You are not a Valid Admin");
}

?>