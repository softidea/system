<?php

session_start();

if (!isset($_SESSION['user_email'])) {
    //header("Location:../index.php");
}
if (isset($_SESSION['customer_continue'])) {
    save_custmer();
}

include '../db/mysqliConnect.php';

$c1 = filter_input(INPUT_POST, 'cus_fullname');
$c2 = filter_input(INPUT_POST, 'cus_initialname');
$c3 = filter_input(INPUT_POST, 'cus_address');
$c4 = filter_input(INPUT_POST, 'cus_tp');
$c5 = filter_input(INPUT_POST, 'cus_nic');
$c6 = filter_input(INPUT_POST, 'cus_dob');
$c7 = filter_input(INPUT_POST, 'cus_ms');
$c8 = filter_input(INPUT_POST, 'cus_dependdency');
$c9 = filter_input(INPUT_POST, 'cus_position');
$c10 = filter_input(INPUT_POST, 'cus_monthly_salary');
$c11 = filter_input(INPUT_POST, 'cus_emp_name');
$c12 = filter_input(INPUT_POST, 'cus_emp_address');


require_once '../db/mysqliConnect.php';
$query_cus_cus_1 = "CALL sp_ins_customer('" . $c1 . "','" . $c2 . "','" . $c3 . "','" . $c4 . "','" . $c5 . "','" . $c6 . "','" . $c7 . "','" . $c8 . "','" . $c9 . "','" . $c10 . "','" . $c11 . "',,'" . $c12 . "')";

function save_custmer() {
    $qu = mysqli_query($d_bc, $query_cus_cus_1);
}

if ($qu) {
    echo "<script>alert('OK Customer');window.open('../customer/customer_registration.php','_self');</script>";
    mysqli_close($d_bc);
} else {
    echo "<script>alert('NO Customer');</script>";
    mysqli_close($d_bc);
}

