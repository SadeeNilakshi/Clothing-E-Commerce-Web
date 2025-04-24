<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css" />
  <link rel="icon" href="resources/resources2/icon/icon2.png" />
  <title>Olivia Fashion House </title>

</head>

<body class="signup-bg">

  <div class="container-fluid vh-100 d-flex justify-content-center">
    <div class="row align-content-center">

      <!-- header -->
      <div class="col-12">
        <div class="row">

          <div class="col-12 logo1"></div>
          <div class="col-12">
            <p class="text-center title2 text-light">Welcome to Olivia Fashion House</p>

          </div>
        </div>
      </div>
      <!-- header -->

      <!-- content -->
      <div class="col-12 p-3">
        <div class="row">

          <div class="col-6 d-none d-lg-block background"></div>
          <!-- regBox -->

          <div class="col-12 col-lg-6 " id="regBox">
            <div class="row g-2 p-2">

              <div class="col-12">
                <p class="title3 text-center text-light fw-bold">Create New Account</p>
              </div>

              <div class="col-12 d-none" id="msgDiv1">
                <div class="alert alert-danger" role="alert" id="msg1">

                </div>
              </div>

              <div class="col-6">
                <label class="form-label text-light fw-bold">First Name</label>
                <input type="text" class="form-control fw-bold" placeholder="Enter Your First Name" id="fname" />
              </div>

              <div class="col-6">
                <label class="form-label text-light fw-bold">Last Name</label>
                <input type="text" class="form-control fw-bold" placeholder="Enter Your Last Name" id="lname" />
              </div>

              <div class="col-12">
                <label class="form-label text-light fw-bold">Email</label>
                <input type="email" class="form-control fw-bold" placeholder="Enter Your Email Address" id="email" />
              </div>

              <div class="col-12">
                <label class="form-label text-light fw-bold">Mobile</label>
                <input type="text" class="form-control fw-bold" placeholder="Enter Your Mobile Number" id="mobile" />
              </div>

              <div class="col-6">
                <label class="form-label text-light fw-bold">Username</label>
                <input type="text" class="form-control fw-bold" placeholder="Enter Your Username" id="username" />
              </div>

              <div class="col-6">
                <label class="form-label text-light fw-bold">Password</label>
                <input type="password" class="form-control fw-bold" placeholder="Enter Your Password " id="password" />
              </div>

              <div class="col-12 col-lg-6 d-grid">
                <button class="btn btn-info border-2 fw-bold" onclick="signUp();">Sign Up</button>
              </div>

              <div class="col-12 col-lg-6 d-grid">
                <button class="btn btn-outline-info border-2  fw-bold" onclick="changeView();">Already have an account? Sign In</button>
              </div>

            </div>
          </div>
          <!-- regBox -->

          <!-- logInBox -->

          <div class="col-12 col-lg-6 d-none" id="logInBox">
            <div class="row g-2 p-2">

              <div class="col-12">
                <p class="title3 text-center text-light">Sign In</p>
              </div>

              <?php

              $username = "";
              $password = "";

              if (isset($_COOKIE["username"])) {
                $username = $_COOKIE["username"];
              }
              if (isset($_COOKIE["password"])) {
                $password = $_COOKIE["password"];
              }


              ?>

              <div class="col-12 d-none" id="msgDiv2">
                <div class="alert alert-danger" role="alert" id="msg2">

                </div>
              </div>

              <div class="col-12">
                <label class="form-label text-light fw-bold">Username</label>
                <input type="text" class="form-control fw-bold" placeholder="Enter Your Username" id="un" value="<?php echo $username ?>" />
              </div>

              <div class="col-12">
                <label class="form-label text-light fw-bold">Password</label>
                <input type="password" class="form-control fw-bold" placeholder="Enter Your Password" id="pw" value="<?php echo $password ?>" />
              </div>

              <div class="col-6">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="rm">
                  <label class="form-check-label text-light fw-bold">Remember Me</label>
                </div>
              </div>

              <div class="col-6 text-end">
                <a href="#" class="link-info" onclick="forgotPassword();">Forgot Password?</a>
              </div>

              <div class="col-12 col-lg-4 d-grid">
                <button class="btn btn-info border-2 fw-bold" onclick="signIn();">Sign In</button>
              </div>

              <div class="col-12 col-lg-4 d-grid">
                <button class="btn btn-outline-info border-2 fw-bold" onclick="changeView();">Sign Up Now</button>
              </div>

              <div class="col-12 col-lg-4 d-grid">  
              <a href="adminSignin.php" class="btn btn-primary border-2 fw-bold">Sign As an admin</a>
              </div>

            </div>

          </div>
          <!-- logInBox -->


        </div>

      </div>
      <!-- content -->


      <!-- modal -->
      <div class="modal" tabindex="-1" id="fpmodal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" style="background-image: linear-gradient(to right, rgb(15, 157, 188), black)">
              <h5 class="modal-title text-light fw-bold">Forgot Password</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-dark" style="background-image: linear-gradient(to right, rgb(15, 157, 188), black)">
              <div class="row g-3">

                <div class="col-6">
                  <label class="form-label text-light">New Password</label>
                  <div class="input-group mb-3">
                    <input type="password" class="form-control" id="np">
                    <button id="npb" class="btn btn-outline-info" onclick="showPassword();">Show</button>
                  </div>
                </div>

                <div class="col-6">
                  <label class="form-label text-light">Re-Type New Password</label>
                  <div class="input-group mb-3">
                    <input type="password" class="form-control" id="rnp">
                    <button class="btn btn-outline-info" id="rnpb" onclick="showPassword2();">Show</button>
                  </div>
                </div>

                <div class="col-6">
                  <label class="form-label text-light">Verification Code</label>
                  <input type="text" class="form-control" id="vcode">
                </div>


              </div>
            </div>
            <div class="modal-footer" style="background-image: linear-gradient(to right, rgb(15, 157, 188), black)">
              <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-outline-info" onclick="resetPassword();">Reset</button>
            </div>
          </div>
        </div>
      </div>
      <!-- modal -->


    </div>
  </div>

  <div class="col-12 d-none d-lg-block">
    <p class="text-center fixed-bottom text-white">&copy; 2024 Olivia Fashion House.lk || All Right Reserved</p>
  </div>


  <script src="script.js"></script>
  <script src="bootstrap.js"></script>
</body>

</html>