<?php

include "connection.php";

$size = $_POST["s"];

if (empty($size)) {
    echo ("Please Enter Your Size");
} else if (strlen($size) > 20) {
    echo ("Your Size Name Should be less than 20 Characters");
} else {
    $rs = Database::search("SELECT * FROM `size` WHERE `size_name` = '" . $size . "'");
    $num = $rs->num_rows;

    if ($num > 0) {
        echo ("Your Color is Already Exists");
    } else {
        Database::iud("INSERT INTO `size` (`size_name`) VALUE ('".$size."')");
        echo("Success");
    }
}
