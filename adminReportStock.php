<?php

include "connection.php";
session_start();

if (isset($_SESSION["a"])) {

    $rs = Database::search("SELECT * FROM `stock` INNER JOIN `product` ON `stock`.`product_id` = `product`.`id` 
    ORDER BY `stock`.`stock_id` ASC");
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
        <title>Olivia Fashion House | Stock Report </title>
    </head>

    <body>

        <div class="container mt-3">
            <a href="adminReport.php"><button class="btn btn-outline-dark fw-bold">Back to</button></a>
        </div>

        <div class="container mt-3" id="printArea">
            <h2 class="text-center fw-bold">Stock Report</h2>

            <table class="table table-hover mt-5 table-responsive">
                <thead class="fw-bold">
                    <tr>
                        <th>Stock Id</th>
                        <th>Product Name</th>
                        <th>Qty</th>
                        <th>Unit Price</th>
                    </tr>
                </thead>
                <tbody class="fw-bold">

                    <?php
                    for ($i = 0; $i < $num; $i++) {
                        $data = $rs->fetch_assoc();

                    ?>
                        <tr>
                            <td><?php echo $data["stock_id"] ?></td>
                            <td><?php echo $data["name"] ?></td>
                            <td><?php echo $data["qty"] ?></td>
                            <td><?php echo $data["price"] ?></td>
                        </tr>
                    <?php

                    }
                    ?>

                </tbody>
            </table>
        </div>


        <div class="d-flex justify-content-end container mt-2">
            <button class="btn btn-dark col-12 col-md-4 col-lg-2        " onclick="printDiv();"><i class="bi bi-printer-fill me-2"></i>Print Doc</button>
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