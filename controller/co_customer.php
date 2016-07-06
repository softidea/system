<?php
session_start();


$conn = mysqli_connect("77.104.142.97", "ayolanin_dev", "WelComeDB1129", "ayolanin_datahost");
if (mysqli_connect_errno()) {
echo "Falied to Connect the Database" . mysqli_connect_error();
}

if (isset($_POST['customer_continue'])) {

$c0 = $_POST['cus_salutation'];
$c1 = $_POST['cus_fullname'];
$c2 = $_POST['cus_initialname'];
$c3 = $_POST['cus_address'];
$c4 = $_POST['cus_tp'];
$c_nic = $_POST['cus_nic'];
$c6 = $_POST['cus_dob'];
$c7 = $_POST['cus_ms'];
$c8 = $_POST['cus_dependdency'];
$c9 = $_POST['cus_position'];
$c10 = $_POST['cus_monthly_salary'];
$c11 = $_POST['cus_emp_name'];
$c12 = $_POST['cus_emp_address'];
$c13 = $_POST['cus_addr_map_link'];
$c14 = $_POST['reg_date'];
$status = "00001";
//over-customer

$cw0 = $_POST['cus_hhalf_name'];
$cw1 = $_POST['cus_bhalf_dob'];
$cw2 = $_POST['cus_bhalf_position'];
$cw3 = $_POST['cus_bhalf_monthly_salary'];
$cw4 = $_POST['cus_bhalf_emp_name'];
// Over -customer wf

$g0 = $_POST['gua_salutation'];
$g1 = $_POST['gua_fullname'];
$g2 = $_POST['gua_initial_name'];
$g3 = $_POST['gua_address'];
$g4 = $_POST['gua_tp'];
$g5 = $_POST['gua_dob'];
$g6 = $_POST['gua_ms'];
$g_nic = $_POST['gua_nic'];
$g7 = $_POST['gua_dependency'];
$g8 = $_POST['gua_position'];
$g9 = $_POST['gua_monthly_salary'];
$g10 = $_POST['gua_emp_name'];
$g11 = $_POST['gua_emp_address'];
//Over-gerenter 
$gw0 = $_POST['gua_bhalf_fullname'];
$gw1 = $_POST['gua_bhalf_dob'];
$gw2 = $_POST['gua_bhalf_position'];
$gw3 = $_POST['gua_bhalf_monthly_salary'];
$gw4 = $_POST['gua_bhalf_emp_name'];
// Over-gerenter wf

$cr0 = $_POST['real_prp_house_position'];
$cr1 = $_POST['real_prp_house_size'];
$cr2 = $_POST['real_prp_house_value'];
$cr3 = $_POST['real_prp_house_pawned'];
$cr4 = $_POST['real_prp_house_pawn_getter'];
//Over-customer real propty

$cro1 = $_POST['real_prp_other_position'];
$cro2 = $_POST['real_prp_other_size'];
$cro3 = $_POST['real_prp_other_value'];
$cro4 = $_POST['real_prp_other_pawned'];
$cro5 = $_POST['real_prp_other_pawn_getter'];
//Over-customer real propty other


$cba1_1 = $_POST['cus_savings_bank_branch'];
$cba1_2 = $_POST['cus_savings_facilities'];
$cba1_3 = $_POST['cus_savings_account_no'];

$cba2_1 = $_POST['cus_mobile_bank_branch'];
$cba2_2 = $_POST['cus_mobile_facilities'];
$cba2_3 = $_POST['cus_mobile_account_no'];

$cba3_1 = $_POST['cus_daily_loan_bank_branch'];
$cba3_2 = $_POST['cus_daily_loan_facilities'];
$cba3_3 = $_POST['cus_daily_loan_account_no'];





//Query ========================================================================
$sql_query_cus = "INSERT INTO customer (
  cus_salutation,
  cus_fullname,
  cus_initialname,
  cus_address,
  cus_tp,
  cus_nic,
  cus_dob,
  cus_ms,
  cus_dependdency,
  cus_position,
  cus_monthly_salary,
  cus_emp_name,
  cus_emp_address,
  cus_addr_map_link,
  cus_reg_date,
  cus_status
) 
VALUES
  (
    '$c0',
    '$c1',
    '$c2',
    '$c3',
    '$c4',
    '$c_nic',
    '$c6',
    '$c7',
    '$c8',
    '$c9',
    '$c10',
    '$c11',
    '$c12',
    '$c13',
    '$c14',
    '$status'
  ) ;";

$sql_query_cus_wf = "INSERT INTO cus_wf(
  cus_wf_name,
  cus_wf_dob,
  cus_wf_posi,
  cus_wf_salary,
  cus_wf_emp_name,
  cus_nic
) 
VALUES
  (
    '$cw0',
    '$cw1',
    '$cw2',
    '$cw3',
    '$cw4',
    '$c_nic'
  );";

$sql_query_ger = "INSERT INTO ger (
  ger_salutation,
  ger_fullname,
  ger_initialname,
  ger_address,
  ger_emp_tp,
  ger_nic,
  ger_dob,
  ger_ms,
  ger_dependences,
  ger_position,
  ger_salerry,
  ger_emp_name,
  ger_emp_address,
  cus_nic,
  ger_status
) 
VALUES
  (
    '$g0',
    '$g1',
    '$g2',
    '$g3',
    '$g4',
    '$g5',
    '$g_nic',
    '$g6',
    '$g7',
    '$g8',
    '$g9',
    '$g10',
    '$g11',
    '1',
    '$c_nic'
  ) ;

";
///////////////////////////////////////////////////////////////
$sql_query_ger_wf = "INSERT INTO ger_wf (
  ger_wf_name,
  ger_wf_dob,
  ger_wf_job_or_position,
  ger_wf_salerry,
  gua_wf_emp_name,
  ger_nic
) 
VALUES
  (
    '$gw0',
    '$gw1',
    '$gw2',
    '$gw3',
    '$gw4',
    '$g_nic'
  ) ;";

$sql_query_cus_real_ho = "INSERT INTO cus_real_property (
  category,
  place,
  size,
  val,
  is_pawned,
  pawn_getter,
  cus_nic,
  status
) 
VALUES
  (
    '1',
    '$cr0',
    '$cr1',
    '$cr2',
    '$cr3',
    '$cr4',
    '$c_nic',
    '1'
  ) ;";


$sql_query_cus_real_ot = "INSERT INTO cus_real_property (
  category,
  place,
  size,
  val,
  is_pawned,
  pawn_getter,
  cus_nic,
  status
) 
VALUES
  (
    '2',
    '$cro1',
    '$cro2',
    '$cro3',
    '$cro4',
    '$cro5',
    '$c_nic',
    '1'
  ) ;";

$sql_query_cus_bank1 = "INSERT INTO cus_bnk_acc(
  cus_bnk_name_and_branch,
  cus_facilities,
  cus_bnk_account_no,
  idbank_acc_cat,
  cus_nic
) 
VALUES
  (
    '$cba1_1',
    '$cba1_2',
    '$cba1_3',
    '1',
    '$c_nic'
  ) ;

";
$sql_query_cus_bank2 = "INSERT INTO cus_bnk_acc(
  cus_bnk_name_and_branch,
  cus_facilities,
  cus_bnk_account_no,
  idbank_acc_cat,
  cus_nic
) 
VALUES
  (
    '$cba2_1',
    '$cba2_2',
    '$cba2_3',
    '3',
    '$c_nic'
  ) ;

";
$sql_query_cus_bank3 = "INSERT INTO cus_bnk_acc(
  cus_bnk_name_and_branch,
  cus_facilities,
  cus_bnk_account_no,
  idbank_acc_cat,
  cus_nic
) 
VALUES
  (
    '$cba3_1',
    '$cba3_2',
    '$cba3_3',
    '3',
    '$c_nic'
  ) ;

";




///////////////Don't Touch-query execute///////////////////// 

$runquery_cus = mysqli_query($conn, $sql_query_cus);
//mysqli_close($conn);
$runquery_cus_wf = mysqli_query($conn, $sql_query_cus_wf);
//mysqli_close($conn);
$runquery_ger = mysqli_query($conn, $sql_query_ger);
//mysqli_close($conn);
$runquery_ger_wf = mysqli_query($conn, $sql_query_ger_wf);
//mysqli_close($conn);
$runquery_cus_real_ho = mysqli_query($conn, $sql_query_cus_real_ho);
//mysqli_close($conn);
$runquery_cus_real_ot = mysqli_query($conn, $sql_query_cus_real_ot);
//mysqli_close($conn);
$runquery_cus_bank1 = mysqli_query($conn, $sql_query_cus_bank1);
//mysqli_close($conn);
$runquery_cus_bank2 = mysqli_query($conn, $sql_query_cus_bank2);
//mysqli_close($conn);
$runquery_cus_bank3 = mysqli_query($conn, $sql_query_cus_bank3);
mysqli_close($conn);






if ($runquery_cus || $runquery_cus_wf || $runquery_ger || $runquery_ger_wf || $runquery_cus_real_ho || $runquery_cus_real_ot || $runquery_cus_bank1 || $runquery_cus_bank2 || $runquery_cus_bank3 ) {
echo 'Customer Successfully Registered!';
//echo '<script>alert("Successs);</script>';
//echo '<script type="text/javascript">
//$(document).ready(function(){
//$("#second").load("../customer/customer_registration.php");
//});
//</script>';
        header('Location:../customer/customer_registration.php');
} else {
echo "Error Registration";
}
}
?>