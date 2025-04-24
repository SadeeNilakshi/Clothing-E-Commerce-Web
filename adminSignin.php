<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css" />
  <link rel="icon" href="resources/resources2/icon/icon2.png" />
  <title>Olivia Fashion House | Admin Login</title>
</head>

<body class="signup-bg">

  <div class="container-fluid vh-100 d-flex justify-content-center">
    <div class="row align-content-center">

      <!-- header -->
      <div class="col-12">
        <div class="row">
          <div class="col-12 logo2"></div>
          <div class="col-12">
            <p class="text-center title2 text-light">Welcome to Olivia Fashion House ! Admin Panel</p>

          </div>
        </div>
      </div>
      <!-- header -->

      <!-- content -->
      <div class="col-12 p-3">
        <div class="row">

          <div class="col-7 d-none d-lg-block background"></div>

          <div class="col-12 col-lg-5">

            <div class="row g-2">

              <div class="col-12">
                <p class="title3 text-center text-light fw-bold ">Sign In Here</p>
              </div>

              <div class="col-12 d-none" id="msgDiv">
                <div class="alert alert-danger" role="alert" id="msg">

                </div>
              </div>

              <div class="col-12">
                <label class="form-label text-light fw-bold">Username</label>
                <input type="Username" class="form-control  text-black fw-bold" placeholder="Enter Your Username Here" id="un" />
              </div>

              <div class="col-12">
                <label class="form-label text-light fw-bold">Password</label>
                <input type="password" class="form-control  text-black fw-bold" placeholder="Enter Your Password Here" id="pw" />
              </div>

              <div class="col-12 col-lg-6 d-grid">
                <button class="btn btn-outline-info fw-bold" onclick="adminLogIn();">Sign In</button>
              </div>

              <div class="col-12 col-lg-6 d-grid">
                <a href="index.php" class="btn btn-info fw-bold">Back to Customer Login</a>
              </div>

            </div>
          </div>

          <div class="col-12 fixed-bottom d-none d-lg-block">
            <p class="text-center text-light fw-bold">&copy; 2024 Olivia Fashion House.lk || All Right Reserved </p>
          </div>

        </div>
      </div>

    </div>
  </div>

  <script src="script.js"></script>
  <script src="bootstrap.js"></script>
</body>

</html>