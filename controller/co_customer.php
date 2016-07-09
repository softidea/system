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

    //Over customer bank account
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
// customer insert over////////////////////////////////////////////////////////

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

    //customer wife over////////////////////////////////////////////////////

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
    '00001',
    '$c_nic'
    ) ;

  ";
//////////gereanter over/////////////////////////////////////////

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
// gerenter wife over///////////////////////////////////////////////////////

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
    '00001'
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

//    $sql_query_service_add = "INSERT INTO service(
//  ser_number,
//  ser_caty,
//  ser_vbrand,
//  ser_vtype_id,
//  ser_v_d_number,
//  ser_v_d_modelyear,
//  ser_leserate,
//  ser_land_pond_amount,
//  ser_period,
//  ser_fixedrental,
//  ser_duration,
//  ser_date,
//  ser_details,
//  ser_status,
//  cus_nic
//) 
//VALUES
//  (
//    '$se1',
//    '$se2',
//    '$se3',
//    '$se4',
//    '$se5',
//    '$se6',
//    '$se7',
//    '$se8',
//    '$se9',
//    '$se10',
//    '$se11',
//    '$se12',
//    '$se13',
//    '1',
//    '$c_nic'
//  ) ;
//";
///////////////////////////////////////////////////////////////////////////////

    $se0 = $_POST['cbopayment'];
    $se1 = $_POST['service_no'];
    $se2 = $_POST['vehicle_mtype_brand'];
    $se3 = $_POST['vehicle_brand'];
    $se4 = $_POST['vehicle_type'];
    $se5 = $_POST['vehicle_code'];

    $se6_1 = $_POST['vehicle_no1'];
    $se6_2 = $_POST['vehicle_no2'];

    $se6 = $se6_1 . "-" . $se6_2;
    
    
    

    $se7 = $_POST['model_year'];
    $se8 = $_POST['lease_rate'];
    $se9 = $_POST['fixed_rate'];
    $se10 = $_POST['cbo_loan_duration'];
    $se11 = $_POST['loan_description'];
    
    
    $se_l_ser_number=$_POST['service_no'];
    $se_l_cbopayment=$_POST['cbopayment'];
    $se_l_ser_caty="";
    $se_l_no=$_POST['deed_no'];
    $se_l_pwndrate=$_POST['pawn_rate'];
    $se_l_cbo_year=$_POST['cbo_year'];
    
    
    if (isset($_POST['cbopayment']) == "bike") {



        $sql_query_service_add_bike = "INSERT INTO service(
        ser_number,
        cbopayment,
        ser_caty,
        ser_vbrand,
        ser_vtype_id,
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
        cus_nic
        ) 
        VALUES
          (
        '$se1',
        '$se0',
        '$se2',
        '$se3',
        '$se4',
        '$se5',
        '$se6',
        '$se7',
        '$se8',
        'No Land Pon Amount',
        'No Period',
        '$se9',
        '$se10',
        '$reg_date',
        '$se11',
        '" . $_SESSION['useremail'] . "',
        '00001',
        '$c_nic'
            ) ;
          ";

        $runquery_sql_query_service_add = mysqli_query($conn, $sql_query_service_add_bike);
    } else if (isset($_POST['cbopayment']) == "twheel") {




        $sql_query_service_add_twheel = "INSERT INTO service(
        ser_number,
        cbopayment,
        ser_caty,
        ser_vbrand,
        ser_vtype_id,
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
        cus_nic
        ) 
        VALUES
          (
        '$se1',
        '$se0',
        '$se2',
        '$se3',
        '$se4',
        '$se5',
        '$se6',
        '$se7',
        '$se8',
        'No Land Pon Amount',
        'No Period',
        '$se9',
        '$se10',
        '$reg_date',
        '$se11',
        '" . $_SESSION['useremail'] . "',
        '00001',
        '$c_nic'
          ) ;
        ";
    } else if (isset($_POST['cbopayment']) == "land") {

        

        $sql_query_service_add_land = "INSERT INTO service(
      ser_number,
      cbopayment,
      ser_caty,
      ser_vbrand,
      ser_vtype_id,
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
      cus_nic
) 
VALUES
  (
    '$se1',
    '$se0',
    'no v main type',
    'no v brand',
    'no v type',
    'no v code',
    '$se_lno',
    '$se7',
    '$se8',
    '$se_l_pwndrate',
    '$se_l_cbo_year',
    '$se9',
    '$se10',
    '$reg_date',
    '$se11',
    '" . $_SESSION['useremail'] . "',
    '00001',
    '$c_nic'
  ) ;
";
    }



$runquery_sql_query_service_add = mysqli_query($conn, $sql_query_service_add);
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






if ($runquery_cus || $runquery_cus_wf || $runquery_ger || $runquery_ger_wf || $runquery_cus_real_ho || $runquery_cus_real_ot || $runquery_cus_bank1 || $runquery_cus_bank2 || $runquery_cus_bank3) {
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



// file upload



//$target_dir = "uploads/customers/";
//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//$uploadOk = 1;
//$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
//// Check if image file is a actual image or fake image
//if (isset($_POST["submit"])) {
//    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//    if ($check !== false) {
//        echo "File is an image - " . $check["mime"] . ".";
//        $uploadOk = 1;
//    } else {
//        echo "File is not an image.";
//        $uploadOk = 0;
//    }
//}
//// Check if file already exists
//if (file_exists($target_file)) {
//    echo "Sorry, file already exists.";
//    $uploadOk = 0;
//}
//// Check file size
//if ($_FILES["fileToUpload"]["size"] > 500000) {
//    echo "Sorry, your file is too large.";
//    $uploadOk = 0;
//}
//// Allow certain file formats
//if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
//    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//    $uploadOk = 0;
//}
//// Check if $uploadOk is set to 0 by an error
//if ($uploadOk == 0) {
//    echo "Sorry, your file was not uploaded.";
//// if everything is ok, try to upload file
//} else {
//    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//        echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
//    } else {
//        echo "Sorry, there was an error uploading your file.";
//    }
}
