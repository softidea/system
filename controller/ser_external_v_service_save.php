<?php

session_start();
if (!isset($_SESSION['user_email'])) {
    header("Location:../index.php");
}

$conn = mysqli_connect("77.104.142.97", "ayolanin_dev", "WelComeDB1129", "ayolanin_datahost");
if (mysqli_connect_errno()) {
    echo "Falied to Connect the Database" . mysqli_connect_error();
}


$customer_nic = filter_input(INPUT_GET, 'cus_nic');
$service_no = filter_input(INPUT_GET, 'sno');
$v_cat = filter_input(INPUT_GET, 'v_cat');
$v_brand = filter_input(INPUT_GET, 'v_brand');
$v_type = filter_input(INPUT_GET, 'v_type');
$v_code = filter_input(INPUT_GET, 'v_code');
$v_number = filter_input(INPUT_GET, 'v_number');
$v_myear = filter_input(INPUT_GET, 'v_myear');
$v_lrate = filter_input(INPUT_GET, 'v_lrate');
$v_frate = filter_input(INPUT_GET, 'v_frate');
$v_period = filter_input(INPUT_GET, 'v_period');
$v_des = filter_input(INPUT_GET, 'v_des');
$reg_date = date("Y-m-d");


$check_sno = "SELECT ser_number FROM service WHERE ser_number='$service_no'";
$run_sno = mysqli_query($conn, $check_sno);
if (mysqli_num_rows($run_sno) > 0) {
    if ($row_sno = mysqli_fetch_assoc($run_sno)) {
        $res_sno = $row_sno['ser_number'];
        if ($res_sno == $service_no) {
            echo "Service-No already used,Please check the Serive Number";
        } else if ($res_sno != $service_no) {
            $sql_query = "INSERT INTO service
            (
             ser_number,
             cbopayment,
             ser_caty,
             ser_vbrand,
             ser_vtype,
             ser_v_code,
             ser_v_d_number,
             ser_v_d_modelyear,
             ser_leserate,
             ser_land_pond_amount,
             ser_period,
             ser_fixedrental,
             ser_duration,
             ser_date,
             ser_details,
             refrence_person,
             ser_status,
             cus_nic,
             land_reg_date)
VALUES (
        '$service_no',
        '$v_cat',
        '$v_cat',
        '$v_brand',
        '$v_type',
        '$v_code',
        '$v_number',
        '$v_myear',
        '$v_lrate',
        'No Land Pawn Amount',
        'No Pawn Period',
        '$v_frate',
        '$v_period',
        '$reg_date',
        '$v_des',
        '" . $_SESSION['user_email'] . "',
        '1',
        '$customer_nic',
        'No Land Reg Date')";

            $run_query = mysqli_query($conn, $sql_query);
            if ($run_query) {
                echo "Lease has been succesfully added";
            } else {
                echo "Error While Saving the Leasing,Please check and Re register";
            }
        }
    }
}




