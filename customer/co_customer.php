<?php

session_start();

if (!isset($_SESSION['user_email'])) {
    header("Location:../index.php");
} else if (isset($_POST['customer_continue'])) {
    $username = $_SESSION['user_email'];
    echo "<script>alert('$username');</script>";
    save_customer();
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

$c13 = filter_input(INPUT_POST, 'cus_hhalf_name');
$c14 = filter_input(INPUT_POST, 'cus_bhalf_dob');
$c15 = filter_input(INPUT_POST, 'cus_bhalf_position');
$c16 = filter_input(INPUT_POST, 'cus_bhalf_monthly_salary');
$c17 = filter_input(INPUT_POST, 'cus_bhalf_emp_name');

echo "<script>alert('$c17');</script>";

/////////////////////////////
////////////////////////////////


function save_customer() {


    $lastId = "CALL sp_get_maxCusId();";

    $con_last = mysqli_query($d_bc, $lastId);

    $query_cus_cus_1 = "CALL sp_ins_customer('" . $con_last . "','" . $c1 . "','" . $c2 . "','" . $c3 . "','" . $c4 . "','" . $c5 . "','" . $c6 . "','" . $c7 . "','" . $c8 . "','" . $c9 . "','" . $c10 . "','" . $c11 . "',,'" . $c12 . "','" . $c13 . "','" . $c14 . "','" . $c15 . "','" . $c16 . "','" . $c17 . "')";

    $qu = mysqli_query($d_bc, $query_cus_cus_1);
    if ($qu) {
        //echo "<script>alert('OK Customer');window.open('../customer/customer_registration.php','_self');</script>";
        header("Location:customer_registration.php");
        mysqli_close($d_bc);
    } else {

        echo '<script> alert($con_last);</script';
        echo "<script>alert('NO Customer');</script>";
        header("Location:customer_registration.php");
        mysqli_close($d_bc);
    }
}
