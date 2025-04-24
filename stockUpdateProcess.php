<?php

include "connection.php";

$pid = $_POST["p"];
$qty = $_POST["q"];
$price = $_POST["up"];


if ($pid == "0") {
    echo ("Please Select a Product Name");
} else if (empty($qty)) {
    echo ("Please Enter Qty");
} else if (!is_numeric($qty)) {
    echo ("Only Numbers can be Entered for Qty");
} else if (strlen($qty) > 10) {
    echo ("Your Qty Should be less than 10 Characters");
} else if (empty($price)) {
    echo ("Please Enter Price");
} else if (!is_numeric($price)) {
    echo ("Only Numbers can be Entered for Price");
} else if (strlen($price) > 10) {
    echo ("Your Price Should be less than 10 Characters");
} else {

    $rs = Database::search("SELECT * FROM `stock` WHERE `product_id` = '" . $pid . "' AND `price` = '" . $price . "' ");
    $num = $rs->num_rows;
    $data = $rs->fetch_assoc();

    if ($num == 1) {
        $nQty = $data["qty"] + $qty;
        Database::iud("UPDATE `stock` SET `qty` = '" . $nQty . "' WHERE `stock_id` = '" . $data["stock_id"] . "' ");
        echo ("Stock Updated Success");
    } else {

        Database::iud("INSERT INTO `stock` (`price`,`qty`,`product_id`) VALUES ('" . $price . "','" . $qty . "','" . $pid . "')");
        echo ("New Stock Added Success");
    }
}
