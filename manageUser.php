<?php

session_start();

if (isset($_SESSION["a"])) {

?>
  <!DOCTYPE html>

  <html lang="en" data-bs-theme="dark">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="resources/resources2/icon/icon2.png" />
    <title>Olivia Fashion House | Manage User </title>
  </head>

  <body class="admin" onload="loadUser();">

    <!-- nav Bar -->
    <?php include "adminNavBar.php"; ?>
    <!-- nav Bar -->

    <div class="container">
      <div>


        <!-- body -->
        <div class="col-12">
          <div class="row">

            <div>
              <div>
                <div class="col-12 col-lg-10 text-center mt-lg-2">
                  <label class="form-label fs-1 fw-bolder text-light title2 ms-5">
                    Manage User
                  </label>
                </div>

                <div class="row d-flex justify-content-end">

                  <div class="d-none" id="msgDiv">
                    <div class="alert alert-danger" id="msg"></div>
                  </div>

                  <div class="col-2 col-lg-2">
                    <input type="text" class="form-control text-center text-black fw-bold" placeholder="UserId" id="userid" style="background-color: #34b1aa" />
                  </div>
                  <button class="col-2 col-lg-2 btn btn-outline-info rounded-3 fw-bold" onclick="userUpdateStatus();">
                    Change Status
                  </button>
                </div>
              </div>
            </div>

            <br /><br />

            <div class="mt-5">
              <table class=" col-lg-10 col-sm-6 table table-dark rounded-3 table table-hover ">
                <thead>
                  <tr class="table-dark">
                    <th scope="row" class="fw-bold">User Id</th>
                    <td class="table-dark fw-bold">First Name</td>
                    <td class="fw-bold fs-6">Last Name</td>
                    <td class="fw-bold fs-6">Email</td>
                    <td class="fw-bold fs-6">Mobile</td>
                    <td class="fw-bold fs-6">Current Status</td>

                  </tr>
                </thead>

                <tbody id="table">
                  <!-- table row -->

                  <!-- table row -->
                </tbody>
              </table>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- body -->

    <!--Footer -->
    <div class="fixed-bottom col-12">
      <p class="text-center">&copy; 2024 OliviaFashionHouse.lk || All Right Reserved</p>
    </div>
    <!--Footer -->


    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
  </body>

  </html>

<?php

} else {
  echo ("You are not a Valid Admin");
}

?>