<?php

include "connection.php";

$category = $_POST["c"];

if (empty($category)) {
    echo ("Please Enter Your Category Name");
} else if (strlen($category) > 20) {
    echo ("Your Category Name should be less than 20 Characters");
} else {
    $rs = Database::search("SELECT * FROM `category` WHERE `cat_name` = '" . $category . "'");
    $num =  $rs->num_rows;

    if ($num > 0) {
        echo("Your Category Name is Already Exists");
    } else {
        Database::iud("INSERT INTO `category` (`cat_name`) VALUE ('".$category."')");
        echo("Success");
    }
    
}
