<?php

session_start();

include '../db/mysqliConnect.php';

$c1=filter_input(INPUT_POST, 'cus_fullname');
$c2=filter_input(INPUT_POST, 'cus_initialname');
$c3=filter_input(INPUT_POST, 'cus_address');
$c4=filter_input(INPUT_POST, 'cus_tp');
$c5=filter_input(INPUT_POST, 'cus_nic');
$c6=filter_input(INPUT_POST, 'cus_dob');
$c7=filter_input(INPUT_POST, 'cus_ms');
$c8=filter_input(INPUT_POST, 'cus_dependdency');
$c9=filter_input(INPUT_POST, 'cus_position');
$c10=filter_input(INPUT_POST, 'cus_monthly_salary');
$c11=filter_input(INPUT_POST, 'cus_emp_name');
$c12=filter_input(INPUT_POST, 'cus_emp_address');
$c13=filter_input(INPUT_POST, 'cus_fullname');
$c14=filter_input(INPUT_POST, 'cus_fullname');
$c15=filter_input(INPUT_POST, 'cus_fullname');
$c16=filter_input(INPUT_POST, 'cus_fullname');
$c17=filter_input(INPUT_POST, 'cus_fullname');
$c18=filter_input(INPUT_POST, 'cus_fullname');

/*
 * 'cus_pers_full_name',
    'cus_pers_name_with_init',
    'cus_pers_dob',
    'cus_pers_nic',
    'cus_pers_married_status',
    'cus_pers_any_depen',
    'cus_pers_job_or_posi',
    'cus_pers_salary',
    'cus_pers_emp_name',
    'cus_pers_emp_addr',
    'cus_pers_road_near_home'
 */

$query_cus_cus = "CALL sp_ins_customer('".$c1."','" . $dob . "','" . $nic . "','" . $sts . "','" . $dep . "','" . $pos . "','" . $saly . "','" . $empname . "','" . $empaddr . "','" . $ronearhome . "')";
