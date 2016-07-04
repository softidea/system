<?php

session_start();

global $conn;


//$reg_date= date("Y-m-d");
//filter_input(INPUT_POST, 'cus_salutation') = $a1;

$a1 = $_POST('cus_salutation');

//filter_input(INPUT_POST, 'cus_fullname') = $a2;
$a2 = $_POST('cus_fullname');

//filter_input(INPUT_POST, 'cus_initialname') = $a3;
$a3 = $_POST('cus_initialname');

//filter_input(INPUT_POST, 'cus_address') = $a4;
$a4 = $_POST('cus_address');

//filter_input(INPUT_POST, 'cus_tp') = $a5;
$a5 = $_POST('cus_tp');

//filter_input(INPUT_POST, 'cus_nic') = $a6;
$a6 = $_POST('cus_nic');

//filter_input(INPUT_POST, 'cus_dob') = $a7;
$a7 = $_POST('cus_dob');

//filter_input(INPUT_POST, 'cus_ms') = $a8;
$a8 = $_POST('cus_ms');

//filter_input(INPUT_POST, 'cus_dependdency') = $a9;
$a9 = $_POST('cus_dependdency');

//filter_input(INPUT_POST, 'cus_position') = $a10;
$a10 = $_POST('cus_position');

//filter_input(INPUT_POST, 'cus_monthly_salary') = $a11;
$a11 = $_POST('cus_monthly_salary');

//filter_input(INPUT_POST, 'cus_emp_name') = $a12;
$a12 = $_POST('cus_emp_name');

//filter_input(INPUT_POST, 'cus_emp_address') = $a13;
$a13 = $_POST('cus_emp_address');


$a14 = "No add this one";
//filter_input(INPUT_POST, 'cus_addr_map_link') =$a14;
//filter_input(INPUT_POST, 'reg_date') = $a15;
$a15 = $_POST('reg_date');

$a16 = 1;


$a1 = $_SESSION['cus_salutation'];
$a2 = $_SESSION['cus_fullname'];
$a3 = $_SESSION['cus_initialname'];
$a4 = $_SESSION['cus_address'];
$a5 = $_SESSION['cus_tp'];
$a6 = $_SESSION['cus_nic'];
$a7 = $_SESSION['cus_dob'];
$a8 = $_SESSION['cus_ms'];
$a9 = $_SESSION['cus_dependdency'];
$a10 = $_SESSION['cus_position'];
$a11 = $_SESSION['cus_monthly_salary'];
$a12 = $_SESSION['cus_emp_name'];
$a13 = $_SESSION['cus_emp_address'];
$a14 = $_SESSION['cus_addr_map_link'];
$a15 = $_SESSION['reg_date'];
$a16 = $_SESSION['status'];


//start-up variable data into database
$qu_sp_in_customerInformation = "CALL sp_in_customerInformation('$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15', '$a16')";


if (mysqli_query($conn, $qu_sp_in_customerInformation)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $qu_sp_in_customerInformation . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


