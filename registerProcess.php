<?php

include "connection.php";

$fname = $_POST["f"];
$lname = $_POST["l"];
$email = $_POST["e"];
$mobile = $_POST["m"];
$username = $_POST["u"];
$password = $_POST["p"];


if (empty($fname)) {
    echo ("Please Enter Your First Name");
} else if (strlen($fname) > 20) {
    echo ("Your First Name Should be less than 20 Characters");
} else if (empty($lname)) {
    echo ("Please Enter Your Last Name");
} else if (strlen($lname) > 20) {
    echo ("Your Last Name Should be less than 20 Characters");
} else if (empty($email)) {
    echo ("Please Enter Your Email");
} else if (strlen($email) > 100) {
    echo ("Your Email Address Should be less than 100 Characters");
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo ("Your Email Address is Invalid");
} else if (empty($mobile)) {
    echo ("Please Enter Your Mobile Number");
} else if (strlen($mobile) != 10) {
    echo ("Your Mobile Number must contain 10 Characters");
} else if (!preg_match("/07[0,1,2,4,5,6,7,8]{1}[0-9]{7}/", $mobile)) {
    echo ("Your Mobile Number is Invalid");
} else if (empty($username)) {
    echo ("Please Enter Your Userame");
} else if (strlen($username) > 20) {
    echo ("Your Username Should be less than 20 Characters");
} else if (empty($password)) {
    echo ("Please Enter Your Password");
} else if (strlen($password) < 5  || strlen($password) > 45) {
    echo ("Your Password must contain 5-45 Characters");
} else {
    $rs = Database::search("SELECT * FROM `user` WHERE `email` = '" . $email . "' OR `mobile` = '" . $mobile . "' OR `username` = '" . $username . "' ");
    $num = $rs->num_rows;

    if ($num > 0) {
        echo ("Your Email or Username or Mobile Already Exists");
    } else {
        Database::iud("INSERT INTO `user` (`fname`,`lname`,`email`,`mobile`,`username`,`password`,`user_type_id`)
        VALUES ('" . $fname . "','" . $lname . "','" . $email . "','" . $mobile . "','" . $username . "','" . $password . "','2')");

        echo ("Success");
    }
}

?>