<?php

include "connection.php";

$pageno = 0;
$page = $_POST["pg"];

if (0 != $page) {
    $pageno = $page;
} else {
    $pageno = 1;
}

$q = "SELECT * FROM `stock` INNER JOIN `product` ON `stock`.`product_id`= `product`.`id` ORDER BY `stock`.`stock_id` ASC ";
$rs = Database::search($q);
$total_result = $rs->num_rows;

$results_per_page = 16;
$num_of_pages = ceil($total_result / $results_per_page);

$page_results = ($pageno - 1) * $results_per_page;

$q2 = $q . " LIMIT $results_per_page OFFSET $page_results";
$rs2 = Database::search($q2);
$total_result2 = $rs2->num_rows;


if ($total_result2 == 0) {
    //No Stock Available
    echo ("No Product Available Here");
} else {
    //Load Stock
    for ($i = 0; $i < $total_result2; $i++) {
        $data = $rs2->fetch_assoc();

?>
        <!-- card -->
        <div class="col-lg-3 col-md-6 col-sm-12  mt-5 d-flex justify-content-center">
            <div class="card" style="width: 300px;">
                <img src="<?php echo $data["img_path"] ?>" class="card-img-top rounded-2">
                <div class="card-body">
                    <p class="card-title fw-medium fs-4 ">Product Name:
                        <?php echo $data["name"] ?>
                    </p>

                    <p class="card-title fw-medium fs-6">Description:
                        <?php echo $data["description"] ?>
                    </p>

                    <h5 class="card-title fw-semibold">Rs: <?php echo $data["price"] ?> .00</h5>
                    <div class="d-flex justify-content-center">
                        <button class="btn col-6 fw-semibold" style="background-color: #5adbb5;">Add To Cart</button>
                        <button class="btn col-6 ms-2 fw-semibold" style="background-color: #55c2da;">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    <?php

    }
    ?>


    <!-- pagination -->
    <div class="d-flex justify-content-center mt-5">
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <li class="page-item"><a class="page-link link-dark fw-bold" <?php

                                                                                if ($pageno <= 1) {
                                                                                    echo ("#");
                                                                                } else {
                                                                                ?>onclick="loadProduct(<?php echo ($pageno - 1) ?>);" <?php
                                                                                                                                    }
                                                                                                                                        ?>>Previous</a></li>

                <?php

                for ($i = 1; $i <= $num_of_pages; $i++) {

                    if ($i == $pageno) {

                ?>
                        <li class="page-item active">
                            <a class="page-link link-dark fw-bold" onclick="loadProduct(<?php echo $i ?>);"><?php echo $i ?></a>
                        </li>
                    <?php

                    } else {

                    ?>
                        <li class="page-item">
                            <a class="page-link link-dark fw-bold" onclick="loadProduct(<?php echo $i ?>);"><?php echo $i ?></a>
                        </li>
                <?php
                    }
                }

                ?>


                <li class="page-item"><a class="page-link link-dark fw-bold" <?php

                                                                                if ($pageno >= $num_of_pages) {
                                                                                    echo ("#");
                                                                                } else {
                                                                                ?>onclick="loadProduct(<?php echo ($pageno + 1) ?>);" <?php
                                                                                                                                    }
                                                                                                                                        ?>>Next</a></li>
            </ul>
        </nav>
    </div>

<?php

}
