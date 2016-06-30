<?php

session_start();

include '../db/mysqliConnect.php';

filter_input(INPUT_POST, 'cus_fullname');


$query_cus_cus = "CALL sp_ins_customer('" . $dob . "','" . $nic . "','" . $sts . "','" . $dep . "','" . $pos . "','" . $saly . "','" . $empname . "','" . $empaddr . "','" . $ronearhome . "')";
