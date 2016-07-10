<?php

//check the session
session_start();
if (!isset($_SESSION['user_email'])) {
    header("Location:../index.php");
}
//check the session
//connect to the db
$conn = mysqli_connect("77.104.142.97", "ayolanin_dev", "WelComeDB1129", "ayolanin_datahost");
if (mysqli_connect_errno()) {
    echo "Falied to Connect the Database" . mysqli_connect_error();
}
//connect to the db
//variaable assign
$customer_nic = filter_input(INPUT_GET, 'cus_nic');
$service_no = filter_input(INPUT_GET, 'sno');
$deed = filter_input(INPUT_GET, 'deed');
$deed_regdate = filter_input(INPUT_GET, 'regdate');
$aid = filter_input(INPUT_GET, 'aid');
$yid = filter_input(INPUT_GET, 'yid');
$l_lrate = filter_input(INPUT_GET, 'l_lrate');
$l_frate = filter_input(INPUT_GET, 'l_frate');
$l_pawn_des = filter_input(INPUT_GET, 'l_pawn_des');
$ser_reg_date = date("Y-m-d");
//variable assign


//check the service no
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
        'Land',
        'No Vehicle Category',
        'No Brand',
        'No Type',
        'No Code',
        '$deed',
        'No Model Year',
        '$l_lrate',
        '$aid',
        '$yid',
        '$l_frate',
        'No Vehicle Duration',
        '$ser_reg_date',
        '$l_pawn_des',
        '" . $_SESSION['user_email'] . "',
        '1',
        '$customer_nic',
        '$deed_regdate')";

            $run_query = mysqli_query($conn, $sql_query);
            if ($run_query) {
                echo "Pawn has been succesfully added";
            } else {
                echo "Error While Saving the Land Pawn,Please check and Re register";
            }
        }
    }
}
//check the service no

