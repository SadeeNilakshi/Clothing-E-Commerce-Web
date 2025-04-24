<?php

session_start();
include "connection.php";

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
        <title>Olivia Fashion House | Stock </title>

    </head>

    <body class="admin">

        <!-- nav Bar -->
        <?php include "adminNavBar.php"; ?>
        <!-- nav Bar -->

        <div class="container-fluid manage-stock">
            <div class="row manage-stock-m">

                <div class="col-lg-5 col-md-10 col-12 offset-lg-1 manage-stock-2">
                    <h2 class="text-center fw-bold">Product Registration</h2>

                    <div class="card mt-3">
                        <div class="card-body rounded-3 bg-body-tertiary">
                            <div class="mb-3">
                                <label class="form-label fw-bold" for="pname">Product Name</label>
                                <input class="form-control" type="text" id="pname" />
                            </div>

                            <div class="row">
                                <div class="mb-3 col-lg-6 col-md-6 col-12">
                                    <label class="form-label fw-bold" for="brand">Brand</label>
                                    <select class="form-select" id="brand">
                                        <option value="0">Select</option>
                                        <?php
                                        $rs = Database::search("SELECT * FROM `brand`");
                                        $num = $rs->num_rows;
                                        for ($x = 0; $x < $num; $x++) {
                                            $data = $rs->fetch_assoc();
                                        ?>
                                            <option value="<?php echo ($data["brand_id"]); ?>"><?php echo ($data["brand_name"]); ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="mb-3 col-lg-6 col-md-6 col-12">
                                    <label class="form-label fw-bold" for="cat">Category</label>
                                    <select class="form-select" id="cat">
                                        <option value="0">Select</option>
                                        <?php
                                        $rs = Database::search("SELECT * FROM `category`");
                                        $num = $rs->num_rows;
                                        for ($x = 0; $x < $num; $x++) {
                                            $data = $rs->fetch_assoc();
                                        ?>
                                            <option value="<?php echo ($data["cat_id"]); ?>"><?php echo ($data["cat_name"]); ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="mb-3 col-lg-6 col-md-6 col-12">
                                    <label class="form-label fw-bold" for="color">Color</label>
                                    <select class="form-select" id="color">
                                        <option value="0">Select</option>
                                        <?php
                                        $rs = Database::search("SELECT * FROM `color`");
                                        $num = $rs->num_rows;
                                        for ($x = 0; $x < $num; $x++) {
                                            $data = $rs->fetch_assoc();
                                        ?>
                                            <option value="<?php echo ($data["color_id"]); ?>"><?php echo ($data["color_name"]); ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="mb-3 col-lg-6 col-md-6 col-12">
                                    <label class="form-label fw-bold" for="size">Size</label>
                                    <select class="form-select" id="size">
                                        <option value="0">Select</option>
                                        <?php
                                        $rs = Database::search("SELECT * FROM `size`");
                                        $num = $rs->num_rows;
                                        for ($x = 0; $x < $num; $x++) {
                                            $data = $rs->fetch_assoc();
                                        ?>
                                            <option value="<?php echo ($data["size_id"]); ?>"><?php echo ($data["size_name"]); ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold" for="desc">Description</label>
                                <input class="form-control" type="text" id="desc" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold" for="file">Product Image</label>
                                <input class="form-control" type="file" id="file">
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-outline-info fw-bold" onclick="regProduct();">Register Product</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-10 col-12 mt-4 mt-md-0">
                    <h2 class="text-center fw-bold">Stock Update</h2>

                    <div class="card mt-3">
                        <div class="card-body rounded-3 bg-body-tertiary">
                            <div class="mb-3">
                                <label class="form-label fw-bold" for="sProduct">Product Name</label>
                                <select class="form-select" id="sProduct">
                                    <option value="0">Select</option>
                                    <?php
                                    $rs = Database::search("SELECT * FROM `product`");
                                    $num = $rs->num_rows;
                                    for ($x = 0; $x < $num; $x++) {
                                        $d = $rs->fetch_assoc();
                                    ?>
                                        <option value="<?php echo ($d["id"]); ?>"><?php echo ($d["name"]); ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="row">
                                <div class="mb-3 col-lg-6 col-md-6 col-12">
                                    <label class="form-label fw-bold" for="qty">Qty</label>
                                    <input class="form-control" type="text" id="qty" />
                                </div>

                                <div class="mb-3 col-lg-6 col-md-6 col-12">
                                    <label class="form-label fw-bold" for="uprice">Unit Price</label>
                                    <input class="form-control" type="text" id="uprice" />
                                </div>
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-outline-info fw-bold" onclick="stockUpdate();">Update Stock</button>
                            </div>
                        </div>
                    </div>
                </div>
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
    echo ("You are Not a Valid Admin");
}


?>