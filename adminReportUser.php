<?php


session_start();
include "connection.php";

if (isset($_SESSION["a"])) {

    $rs =  Database::search("SELECT * FROM `user` INNER JOIN `user_type` ON `user`.`user_type_id` = `user_type`.`utype_id`
           ORDER BY `user`.`id` ASC  ");

    $num = $rs->num_rows;



?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="style.css" />
        <link rel="icon" href="resources/resources2/icon/icon2.png" />
        <title>Olivia Fashion House | User Report </title>

    </head>

    <body>

    <div class="container mt-3">
        <a href="adminReport.php"><button class="btn btn-outline-dark fw-bold">Back to </button></a>
    </div>

    <div class="container mt-3" id="printArea">
        <h2 class="text-center fw-bold">User Report</h2>

        <div class="table-responsive">
            <table class="table table-hover mt-5">
                <thead class="fw-bold">
                    <tr>
                        <th>User Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Mobile No</th>
                        <th>User Type</th>
                        <th>Status</th>
                        <th>Profile Image</th>
                    </tr>
                </thead>
                <tbody class="fw-bold">

                    <?php

                    for ($i = 0; $i < $num; $i++) {
                        $data = $rs->fetch_assoc();

                    ?>
                        <tr>
                            <td><?php echo $data["id"] ?></td>
                            <td><?php echo $data["fname"] ?></td>
                            <td><?php echo $data["lname"] ?></td>
                            <td><?php echo $data["email"] ?></td>
                            <td><?php echo $data["mobile"] ?></td>
                            <td><?php echo $data["type"] ?></td>
                            <td>
                                <?php
                                if ($data["status"] == 1) {
                                    echo ("Active");
                                } else {
                                    echo ("Inactive");
                                }
                                ?>
                            </td>
                            <td><img src="resources/resources2/user/images.png" height="20px"></td>
                        </tr>

                    <?php
                    }

                    ?>

                </tbody>
            </table>
        </div>
    </div>

    <div class="d-flex justify-content-end container mt-2">
        <button class="btn btn-dark col-12 col-md-4 col-lg-2" onclick="printDiv();"><i class="bi bi-printer-fill me-2"></i>Print Doc</button>
    </div>


        <!--Footer -->
        <div class="col-12">
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