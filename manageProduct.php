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

                <div class="container mt-5 manage-product">
                    <div class="row">
                        <div class="col-12 text-center manage-product-2">
                            <label class="form-label fs-1 fw-bold text-light title2">
                                Manage Product
                            </label>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <!-- Brand Reg -->
                        <div class="col-12 col-md-6 col-lg-5 mt-4 text-center card bg-dark border border-info p-2 mx-auto">
                            <div>
                                <div class="card-header" style="background-color: #34b1aa">
                                    <label for="form-label" class="text-dark fw-bold">Brand Name :</label>
                                </div>
                                <input type="text" class="form-control mb-3 mt-2 fw-bold" id="pbrand" />
                                <div class="d-none" id="bmsgDiv" onclick="reload();">
                                    <div class="alert alert-danger" id="bmsg"></div>
                                </div>
                                <div class="mt-2">
                                    <button class="btn btn-outline-info col-12" onclick="brandRegister();">Brand Register</button>
                                </div>
                            </div>
                        </div>
                        <!-- Brand Reg -->

                        <!-- Category Reg -->
                        <div class="col-12 col-md-6 col-lg-5 mt-4 text-center card bg-dark border border-info p-2 mx-auto">
                            <div>
                                <div class="card-header" style="background-color: #34b1aa">
                                    <label for="form-label" class="text-dark fw-bold">Category Name :</label>
                                </div>
                                <input type="text" class="form-control mb-3 mt-2 fw-bold" id="pcategory" />
                                <div class="d-none" id="cmsgDiv" onclick="reload();">
                                    <div class="alert alert-danger" id="cmsg"></div>
                                </div>
                                <div class="mt-2">
                                    <button class="btn btn-outline-info col-12" onclick="categoryRegister();">Category Register</button>
                                </div>
                            </div>
                        </div>
                        <!-- Category Reg -->
                    </div>

                    <div class="row ">
                        <!-- Color Reg -->
                        <div class="col-12 col-md-6 col-lg-5 mt-4 text-center card bg-dark border border-info p-2 mx-auto">
                            <div>
                                <div class="card-header" style="background-color: #34b1aa">
                                    <label for="form-label" class="text-dark fw-bold">Color Name :</label>
                                </div>
                                <input type="text" class="form-control mb-3 mt-2 fw-bold" id="pcolor" />
                                <div class="d-none" id="pcmsgDiv" onclick="reload();">
                                    <div class="alert alert-danger" id="pcmsg"></div>
                                </div>
                                <div class="mt-2">
                                    <button class="btn btn-outline-info col-12" onclick="colorRegister();">Color Register</button>
                                </div>
                            </div>
                        </div>
                        <!-- Color Reg -->

                        <!-- Size Reg -->
                        <div class="col-12 col-md-6 col-lg-5 mt-4 text-center card bg-dark border border-info p-2 mx-auto">
                            <div>
                                <div class="card-header" style="background-color: #34b1aa">
                                    <label for="form-label" class="text-dark fw-bold">Size Name :</label>
                                </div>
                                <input type="text" class="form-control mb-3 mt-2 fw-bold" id="psize" />
                                <div class="d-none" id="smsgDiv" onclick="reload();">
                                    <div class="alert alert-danger" id="smsg"></div>
                                </div>
                                <div class="mt-2">
                                    <button class="btn btn-outline-info col-12" onclick="sizeRegister();">Size Register</button>
                                </div>
                            </div>
                        </div>
                        <!-- Size Reg -->
                    </div>
                </div>
                <!-- body -->
            </div>
        </div>
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