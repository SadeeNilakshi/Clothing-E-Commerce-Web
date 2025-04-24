<?php

include "connection.php";

$userid = $_POST["u"];

if (empty($userid)) {
    echo ("Please Enter Your User Id");
} else {

    $rs = Database::search("SELECT * FROM `user` WHERE `id` = '" . $userid . "' AND `user_type_id` = '2'");
    $num = $rs->num_rows;

    if ($num == 1) {
        $data = $rs->fetch_assoc();

        if ($data["status"] == 1) {
            Database::iud("UPDATE `user` SET `status` = '0' WHERE `id` = '" . $userid . "'");
            echo ("Deactive");
        }

        if ($data["status"] == 0) {
            Database::iud("UPDATE `user` SET `status` = '1' WHERE `id` = '" . $userid . "'");
            echo ("Active");
        }
    } else {
        echo ("Invalid User Id");
    }
}
