<?php

session_start();

if (!isset($_SESSION['user_email'])) {
    header("Location:../index.php");
} else if (isset($_POST['customer_continue'])) {
    $username = $_SESSION['user_email'];
    echo "<script>alert('$username');</script>";
   

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

//cus id
$c18=filter_input(INPUT_POST, 'cus_fullname');

$c19 = filter_input(INPUT_POST, 'gua_fullname');
$c20 = filter_input(INPUT_POST, 'gua_initial_name');
$c21 = filter_input(INPUT_POST, 'gua_address');
$c22 = filter_input(INPUT_POST, 'gua_tp');
$c23 = filter_input(INPUT_POST, 'gua_dob');
$c24 = filter_input(INPUT_POST, 'gua_ms');
$c25 = filter_input(INPUT_POST, 'gua_nic');
$c26 = filter_input(INPUT_POST, 'gua_dependency');
$c27 = filter_input(INPUT_POST, 'gua_position');
$c28 = filter_input(INPUT_POST, 'gua_monthly_salary');
$c29 = filter_input(INPUT_POST, 'gua_emp_name');
$c30 = filter_input(INPUT_POST, 'gua_emp_address');

$c31 = filter_input(INPUT_POST, 'gua_bhalf_fullname');
$c32 = filter_input(INPUT_POST, 'gua_bhalf_dob');
$c33 = filter_input(INPUT_POST, 'gua_bhalf_position');
$c34 = filter_input(INPUT_POST, 'gua_bhalf_monthly_salary');
$c35 = filter_input(INPUT_POST, 'gua_bhalf_emp_name');

$c36 = filter_input(INPUT_POST, 'home');
$c37 = filter_input(INPUT_POST, 'real_prp_house_position');
$c38 = filter_input(INPUT_POST, 'real_prp_house_size');
$c39 = filter_input(INPUT_POST, 'real_prp_house_value');
$c40 = filter_input(INPUT_POST, 'real_prp_house_pawned');
$c41 = filter_input(INPUT_POST, 'real_prp_house_pawn_getter');

$c42 = filter_input(INPUT_POST, 'op');
$c43 = filter_input(INPUT_POST, 'real_prp_other_position');
$c44 = filter_input(INPUT_POST, 'real_prp_other_size');
$c45 = filter_input(INPUT_POST, 'real_prp_other_value');
$c46 = filter_input(INPUT_POST, 'real_prp_other_pawned');
$c47 = filter_input(INPUT_POST, 'real_prp_other_pawn_getter');

$c48 = filter_input(INPUT_POST, 'cus_savings_bank_branch');
$c49 = filter_input(INPUT_POST, 'cus_savings_facilities');
$c50 = filter_input(INPUT_POST, 'cus_savings_account_no');

$c51 = filter_input(INPUT_POST, 'cus_mobile_bank_branch');
$c52 = filter_input(INPUT_POST, 'cus_mobile_facilities');
$c53 = filter_input(INPUT_POST, 'cus_mobile_account_no');

$c54 = filter_input(INPUT_POST, 'cus_daily_loan_bank_branch');
$c55 = filter_input(INPUT_POST, 'cus_daily_loan_facilities');
$c56 = filter_input(INPUT_POST, 'cus_daily_loan_account_no');

$c57 = filter_input(INPUT_POST, 'address_description');
$c58 = filter_input(INPUT_POST, 'reg_date');



echo "<script>alert('$c1');</script>";

/////////////////////////////
////////////////////////////////






     $query_cus_cus_1 = "CALL sp_ins_customer('" . $c18 . "','" . $c1 . "','" . $c2 . "','" . $c3 . "','" . $c4 . "','" . $c5 . "','" . $c6 . "','" . $c7 . "','" . $c8 . "','" . $c9 . "','" . $c10 . "','" . $c11 . "','" . $c12 . "','".$c57."','".$c58."',@inid)";

    $qu = mysqli_query($d_bc, $query_cus_cus_1);
    if ($qu) {
        //echo "<script>alert('OK Customer');window.open('../customer/customer_registration.php','_self');</script>";
        echo "<script>alert('yes Customer');</script>";
       //Adding Customer Wife
        $query_cus_wf="CALL sp_ins_cus_wf_pers('".$c13."','".$c14."','".$c15."','".$c16."','".$c17."','".$c18."')";
         mysqli_query($d_bc, $query_cus_wf);
       //Adding Gerenter
        $query_ger="CAll sp_ins_ger('" . $c18 . "','" . $c19 . "','" . $c20 . "','" . $c21 . "','" . $c22 . "','" . $c23 . "','" . $c24 . "','" . $c25 . "','" . $c26 . "','" . $c27 . "','" . $c28 . "','" . $c29 . "','" . $c30 . "')";
       mysqli_query($d_bc, $query_ger);
      //Adding Gerenter Wife 
        $query_ger_wf="CALL sp_ins_ger_wf_pers('".$c31."','".$c32."','".$c33."','".$c34."','".$c35."','".$c18."')";
         mysqli_query($d_bc, $query_ger_wf);
      //Adding Real Property
         $query_real_property="CALL sp_ins_real_property('".$c36."','".$c37."','".$c38."','".$c39."','".$c40."','".$c41."','".$c18."')";
         mysqli_query($d_bc, $query_real_property);
         
         $query_real_property_other="CALL sp_ins_real_property('".$c42."','".$c43."','".$c44."','".$c45."','".$c46."','".$c47."','".$c18."')";
         mysqli_query($d_bc, $query_real_property_other);
      //Adding Bank Account
         $query_saving_bnk="CALL sp_ins_cus_bnk_acc('Savings Account','".$c48."','".$c49."','".$c50."','".$c18."')";
         mysqli_query($d_bc, $query_saving_bnk);
        
         $query_mobile_bnk="CALL sp_ins_cus_bnk_acc('Mobile Account','".$c51."','".$c52."','".$c53."','".$c18."')";
         mysqli_query($d_bc, $query_mobile_bnk);
        
         $query_dialy_loan_service="CALL sp_ins_cus_bnk_acc('Daily Loan Service','".$c54."','".$c55."','".$c56."','".$c18."')";
         mysqli_query($d_bc,  $query_dialy_loan_service);
        header("Location:../customer/customer_addlease.php");
        
        mysqli_close($d_bc);
    } else {

        echo '<script> alert($con_last);</script';
        echo "<script>alert('NO Customer');</script>";
        header("Location:../user/user_home.php");
        mysqli_close($d_bc);
    }

}
