<?php

session_start();
include "connection.php";

$username = $_POST["u"];
$password = $_POST["p"];
$rememberme = $_POST["r"];

if (empty($username)) {
    echo ("Please Enter Your Username");
} else if (empty($password)) {
    echo ("Please Enter Your Password");
} else {
    $rs =  Database::search("SELECT * FROM `user` WHERE `username` = '" . $username . "' AND `password` = '" . $password . "' ");
    $num = $rs->num_rows;
    $data = $rs->fetch_assoc(); // read row

    if ($num == 1) {
 
        if ($data["status"] == 1) { //active user
            echo ("Success");

            $_SESSION["a"] = $data; //store data in session = $data

            if ($rememberme == "true") { //checked ?
                setcookie("username",$username, time()+(60 * 60 * 24 * 365));  //set cookie
                setcookie("password",$password, time()+(60 * 60 * 24 * 365));
            } else {   // not checked ?
                setcookie("username", "", -1); //destroy cookie
                setcookie("password", "", -1);
            }
            

        } else {    //inactive user
           echo ("Inactive User");
        }
        

    } else {
        echo ("Invalid Username or Password");
    }
}
