<?php

include "connection.php";
session_start();

if (isset($_SESSION["a"])) {

?>

    <!DOCTYPE html>
    <html lang="en" data-bs-theme="dark">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="style.css" />
        <link rel="icon" href="resources/resources2/icon/icon2.png" />
        <title>Olivia Fashion House | Reports </title>
    </head>

    <body class="admin report">

        <!-- nav Bar -->
        <?php include "adminNavBar.php"; ?>
        <!-- nav Bar -->

        <div class="container user-report pt-5">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="fw-bold">Reports</h2>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card p-1">
                        <div class="card-header">
                            <label class="col-12 form-label text-center fw-bold">User Report</label>
                        </div>
                        <div class="card-body border border-info rounded-2 mt-3 d-flex justify-content-center">
                            <a href="adminReportUser.php">
                                <img src="resources/resources2/background/adbackground.jpg" class="rounded" alt="User Report" />
                            </a>
                        </div>
                        <div class="mt-2">
                            <a href="adminReportUser.php">
                                <button class="btn btn-outline-info col-12">View Report</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card p-1">
                        <div class="card-header">
                            <label class="col-12 form-label text-center fw-bold">Product Report</label>
                        </div>
                        <div class="card-body border border-info rounded-2 mt-3 d-flex justify-content-center">
                            <a href="adminReportProduct.php">
                                <img src="resources/resources2/background/background7.jpg" class="rounded" alt="Product Report" />
                            </a>
                        </div>
                        <div class="mt-2">
                            <a href="adminReportProduct.php">
                                <button class="btn btn-outline-info col-12">View Report</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card p-1">
                        <div class="card-header">
                            <label class="col-12 form-label text-center fw-bold">Stock Report</label>
                        </div>
                        <div class="card-body border border-info rounded-2 mt-3 d-flex justify-content-center">
                            <a href="adminReportStock.php">
                                <img src="resources/resources2/background/background3.jpg" class="rounded" alt="Stock Report" />
                            </a>
                        </div>
                        <div class="mt-2">
                            <a href="adminReportStock.php">
                                <button class="btn btn-outline-info col-12">View Report</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="script.js"></script>
        <script src="bootstrap.js"></script>
    </body>

    </html>

<?php

} else {

    echo ("Your Not a Valid Admin");
}

?>