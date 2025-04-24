<?php

include "connection.php";

$pname = $_POST["pname"];
$brand = $_POST["brand"];
$cat = $_POST["cat"];
$color = $_POST["color"];
$size = $_POST["size"];
$desc = $_POST["desc"];

//echo($pname);
if (empty($pname)) {
    echo ("Please Enter the Product Name");
} else if (strlen($pname) > 30) {
    echo ("Your Product Name Should be less than 30 Characters");
} else if ($brand == "0") {
    echo ("Please Select a Brand");
} else if ($cat == "0") {
    echo ("Please Select a Category");
} else if ($color == "0") {
    echo ("Please Select a Color");
} else if ($size == "0") {
    echo ("Please Select a Size");
} else if (empty($desc)) {
    echo ("Please Enter the Description");
} else if (strlen($desc) > 100) {
    echo ("Your Description Should be less than 100 Characters");
} else {

    if (isset($_FILES["image"])) {
        $image = $_FILES["image"];

        $path = "resources/productImg/" . uniqid() . ".png";
        move_uploaded_file($image["tmp_name"], $path);

        $rs = Database::search("SELECT * FROM `product` WHERE `name` = '" . $pname . "'");
        $num = $rs->num_rows;

        if ($num > 0) {
            echo ("Product has been Already Registered");
        } else {

            Database::iud("INSERT INTO `product` (`name`,`description`,`img_path`,`brand_id`,`color_id`,`category_id`,
            `size_id`) VALUES ('" . $pname . "', '" . $desc . "', '" . $path . "', '" . $brand . "', '" . $color . "', '" . $cat . "', '" . $size . "')");

            echo ("Success");
        }
    } else {
        echo ("Please Select a Product Image");
    }
}
