<!DOCTYPE html>
<?php
session_start();

if (!isset($_SESSION['user_email'])) {
    header("Location:../index.php");
}
?>
<html lang="en">
    <!--Database Connection-->
    <?php
    $conn = mysqli_connect("77.104.142.97", "ayolanin_dev", "WelComeDB1129", "ayolanin_datahost");
    if (mysqli_connect_errno()) {
        echo "Falied to Connect the Database" . mysqli_connect_error();
    }
    ?>
    <?php
    $customer_table_data_quarry = "select 

  `cus_fullname`,
  `cus_address`,
  `cus_tp`,
  `cus_nic`,
  `cus_dob`,
  `cus_ms`,
  `cus_dependdency`,
  `cus_position`,
  `cus_monthly_salary`,
  `cus_emp_name`,
  `cus_emp_address`,
  `cus_addr_map_link`,
  `cus_reg_date`,
  `cus_status`,
  `wife_name`,
  `wife_dob`,
  `wife_position`,
  `wife_salary`,
  `wife_emp_name`

from
  `ayolanin_datahost`.`customer` 
  
  where `cus_nic` ='856546545V'";
    $result_customer_all = mysqli_query($conn, $customer_table_data_quarry);

    if ($result_customer_all) {
        $cus_row = mysqli_fetch_assoc($result_customer_all);

        $cus_fullname = $cus_row['cus_fullname'];
        $cus_address = $cus_row['cus_address'];
        $cus_tp = $cus_row['cus_tp'];
        $cus_nic = $cus_row['cus_nic'];
        $cus_dob = $cus_row['cus_dob'];
        $cus_ms = $cus_row['cus_ms'];
        $cus_dependdency = $cus_row['cus_dependdency'];
        $cus_position = $cus_row['cus_position'];
        $cus_monthly_salary = $cus_row['cus_monthly_salary'];
        $cus_emp_name = $cus_row['cus_emp_name'];
        $cus_emp_address = $cus_row['cus_emp_address'];

        $cus_hhalf_name = $cus_row['wife_name'];
        $cus_bhalf_dob = $cus_row['wife_dob'];
        $cus_bhalf_position = $cus_row['wife_position'];
        $cus_bhalf_monthly_salary = $cus_row['wife_salary'];
        $cus_bhalf_emp_name = $cus_row['wife_emp_name'];

        $reg_date = $cus_row['cus_reg_date'];
    } else {
        die(mysql_error());
    }
    $gerenter_table_data_quarry = "select 
  g.`ger_id`,
  g.`ger_fullname`,
  g.`ger_address`,
  g.`ger_tp`,
  g.`ger_nic`,
  g.`ger_dob`,
  g.`ger_ms`,
  g.`ger_wife_name`,
  g.`ger_position`,
  g.`ger_salerry`,
  g.`ger_emp_name`,
  g.`ger_emp_address`,
  g.`ger_status`,
  g.`ser_number` 
from
  `guarantor` g left join `service` s on g.`ser_number`=s.`ser_number` where s.`cus_nic`='856546545V'";
    $result_ger_all = mysqli_query($conn, $gerenter_table_data_quarry);

    if ($result_ger_all) {
        $gur_row = mysqli_fetch_assoc($result_ger_all);
        $gua_fullname = $gur_row['ger_fullname'];
        $gua_address = $gur_row['ger_address'];
        $gua_tp = $gur_row['ger_tp'];
        $gua_dob = $gur_row['ger_dob'];
        $gua_ms = $gur_row['ger_ms'];
        $gua_nic = $gur_row['ger_nic'];
        $gua_position = $gur_row['ger_position'];
        $gua_monthly_salary = $gur_row['ger_salerry'];
        $gua_emp_name = $gur_row['ger_emp_name'];
        $gua_emp_address = $gur_row['ger_emp_address'];
    } else {
        die(mysql_error());
    }

    $real_prp_house_position = "";
    $real_prp_house_size = "";
    $real_prp_house_value = "";
    $real_prp_house_pawned = "";
    $real_prp_house_pawn_getter = "";

    $real_prp_other_position = "";
    $real_prp_other_size = "";
    $real_prp_other_value = "";
    $real_prp_other_pawned = "";
    $real_prp_other_pawn_getter = "";

    $cus_savings_bank_branch = "";
    $cus_savings_facilities = "";
    $cus_savings_account_no = "";
    $cus_mobile_bank_branch = "";
    $cus_mobile_facilities = "";
    $cus_mobile_account_no = "";

    $cus_daily_loan_bank_branch = "";
    $cus_daily_loan_facilities = "";
    $cus_daily_loan_account_no = "";

    $payable_loan_amount = "";
    $loan_description = "";
    ?>
    <head>
        <meta charset="utf-8">
        <title>Customer Update</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,700,600italic,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../assets/css/customer_registration.css" >
<?php require '../controller/co_load_vehicle_brands.php'; ?>
        <link rel="icon" href="favicon.ico">
        <script type="text/javascript">
            function showTypes(str) {
                if (document.getElementById('v_cat').selectedIndex == 1) {
                    if (str == "") {
                        document.getElementById("v_type").innerHTML = "";
                        return;
                    }
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    } else { // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function () {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("v_type").innerHTML = xmlhttp.responseText;
                        }
                    }
                    xmlhttp.open("GET", "../controller/co_load_vehicle_types.php?q=" + str, true);
                    xmlhttp.send();
                }

            }

        </script>
        <script type="text/javascript">
            function load_interest() {
                var aid = document.getElementById('aid').value;
                var yid = document.getElementById('yid').value;
                alert(aid + "###" + yid);
                if (aid != 0 && yid != 0) {
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    }
                    else {
                        // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function () {
                        if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                            if (xmlhttp.responseText === "No Interest Found,Try Again") {
                                alert(xmlhttp.responseText);
                            }
                            else {
                                document.getElementById('pawnrate').value = xmlhttp.responseText;
                            }
                        }
                    }
                    xmlhttp.open("GET", "../controller/co_load_pawn_rate.php?aid=" + aid + "&yid=" + yid, true);
                    xmlhttp.send();
                }
            }
        </script>
        <script type="text/javascript">
            function showVehicleMods(str) {
                if (document.getElementById('v_cat').selectedIndex == 1) {
                    if (str == "") {
                        document.getElementById("v_code").innerHTML = "";
                        return;
                    }
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    } else { // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function () {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("v_code").innerHTML = xmlhttp.responseText;
                        }
                    }
                    xmlhttp.open("GET", "../controller/co_load_vehicle_mods.php?q=" + str, true);
                    xmlhttp.send();
                } else if (document.getElementById('v_cat').selectedIndex == 2) {
                    if (str == "") {
                        document.getElementById("v_code").innerHTML = "";
                        return;
                    }
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    } else { // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function () {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("v_code").innerHTML = xmlhttp.responseText;
                        }
                    }
                    xmlhttp.open("GET", "../controller/co_load_twheel_mods.php?q=" + str, true);
                    xmlhttp.send();
                }
            }
        </script>
        <script type="text/javascript">
            function showDetails()
            {
                if (document.getElementById('v_cat').selectedIndex == 1) {
                    var v_type = document.getElementById('v_type').value;
                    var v_code = document.getElementById('v_code').value;
                    alert(v_type + " " + v_code);
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    } else { // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function () {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            alert(xmlhttp.responseText);
                            var value = xmlhttp.responseText;
                            var result_arr = value.split("#");

                            document.getElementById('m_year').value = result_arr[0];
                            document.getElementById('l_rate').value = result_arr[1];

                            if (v_code.length === 1) {
                                document.getElementById('v_no_code').maxLength = v_code.length + 1;
                            } else {
                                document.getElementById('v_no_code').maxLength = v_code.length;
                            }

                        }
                    }
                    xmlhttp.open("GET", "../controller/co_load_vehicle_details.php?v_type=" + v_type + "&v_code=" + v_code, true);
                    xmlhttp.send();
                } else if (document.getElementById('v_cat').selectedIndex == 2) {
                    alert('inner');
                    var v_tw_type = document.getElementById('v_type').value;
                    var v_tw_code = document.getElementById('v_code').value;
                    alert(v_tw_type + "tw " + v_tw_code);
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    } else { // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function () {
                        if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                            alert(xmlhttp.responseText);
                            document.getElementById('l_rate').value = xmlhttp.responseText;
                        }
                    }
                    xmlhttp.open("GET", "del.php?v_tw_type=" + v_tw_type + "&v_tw_code=" + v_tw_code, true);
                    xmlhttp.send();
                }
            }

        </script>
        <script type="text/javascript">
            function set_vehicle_div(val) {

                if (val == 1) {
                    reset_form_values();
                    document.getElementById('v_brand').disabled = false;

                }
                else if (val == 2) {
                    reset_form_values();
                    document.getElementById('v_brand').disabled = true;

                    document.getElementById("v_type").innerHTML = "";
                    document.getElementById("v_type").innerHTML = "<option value='2'>2 Stroke</option><option value='4'>4 Stroke</option>";


                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    } else { // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function () {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById('v_code').innerHTML = xmlhttp.responseText;
                        }
                    }
                    xmlhttp.open("GET", "../controller/delete.php", true);
                    xmlhttp.send();
                }
            }
            function reset_form_values() {
                document.getElementById('v_brand').selectedIndex = "0";
                document.getElementById('v_type').selectedIndex = "0";
                document.getElementById('v_no_code').value = "";
                document.getElementById('v_no').value = "";
                document.getElementById('m_year').value = "";
                document.getElementById('l_rate').value = "";
                document.getElementById('f_rate').value = "";
            }
        </script>

    </head>
    <body>

<?php include '../assets/include/navigation_bar.php'; ?>

        <!--Customer Panel Section-->
        <div class="container" style="margin-top: 80px;display: block;" id="one">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="panelheading">
                            <h3 class="panel-title">Update Customer Information</h3>
                        </div>

                        <form action="co_customer.php" method="POST">
                            <div class="panel-body" style="background-color: #FAFAFA;">
                                <div class="col-sm-6">
                                    <fieldset id="account">
                                        <legend>01.Customer Personal Details</legend>

                                        <label class="radio-inline"><input type="radio" name="optradioo" checked>: Mr</label>
                                        <label class="radio-inline"><input type="radio" name="optradioo">: Mrs</label>
                                        <label class="radio-inline"><input type="radio" name="optradioo">: Miss</label>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Full Name:</label>
                                            <input type="text" name="cus_fullname" id="fname" value="<?php echo $cus_fullname; ?>"  id="input-email" class="form-control" maxlength="100" />
                                        </div>

                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Permanent Address :</label>
                                            <input type="text" name="cus_address" value="<?php echo $cus_address; ?>"  id="input-email" class="form-control" maxlength="400" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Telephone:</label>
                                            <input type="text" name="cus_tp" value="<?php echo $cus_tp; ?>"  id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">NIC Number:</label>
                                            <input type="text" name="cus_nic" value="<?php echo $cus_nic; ?>"  id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Date of Birth:</label>
                                            <input type="date" name="cus_dob" value="<?php echo $cus_dob; ?>"  id="input-email" class="form-control" />
                                        </div>

                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Married Status:</label>
                                            <select name="cus_ms" value="<?php echo $cus_ms; ?>"  id="input-email" class="form-control" >
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                            </select>
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Have any Dependencies:</label>
                                            <input type="text" name="cus_dependdency" value="<?php echo $cus_dependdency; ?>"  id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Employment/Position:</label>
                                            <input type="text" name="cus_position" value="<?php echo $cus_position; ?>"  id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Monthly Salary/Net Income:</label>
                                            <input type="text" name="cus_monthly_salary" value="<?php echo $cus_monthly_salary; ?>"  id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Employer Name:</label>
                                            <input type="text" name="cus_emp_name" value="<?php echo $cus_emp_name; ?>"  id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Employer Address:</label>
                                            <input type="text" name="cus_emp_address" value="<?php echo $cus_emp_address; ?>"  id="input-email" class="form-control" />
                                        </div>
                                    </fieldset>
                                    <fieldset id="account">
                                        <legend>03.Customer Better Half Details</legend>

                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Full Name:</label>
                                            <input type="text" name="cus_hhalf_name" id="fname" value="<?php echo $cus_hhalf_name; ?>" id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Date of Birth:</label>
                                            <input type="date" name="cus_bhalf_dob" value="<?php echo $cus_bhalf_dob; ?>"  id="input-email" class="form-control" />
                                        </div>

                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Employment/Position:</label>
                                            <input type="text" name="cus_bhalf_position" value="<?php echo $cus_bhalf_position; ?>"  id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Monthly Salary/Net Income:</label>
                                            <input type="text" name="cus_bhalf_monthly_salary" value="<?php echo $cus_bhalf_monthly_salary; ?>"  id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Employer Name:</label>
                                            <input type="text" name="cus_bhalf_emp_name" value="<?php echo $cus_bhalf_emp_name; ?>"  id="input-email" class="form-control" />
                                        </div>

                                    </fieldset>
                                </div>

                                <!--Guranter Details-->
                                <div class="col-sm-6">
                                    <fieldset id="account">
                                        <legend>02.Guarantor Personal Details</legend>
                                        <label class="radio-inline"><input type="radio" name="optradio" checked>: Mr</label>
                                        <label class="radio-inline"><input type="radio" name="optradio">: Mrs</label>
                                        <label class="radio-inline"><input type="radio" name="optradio">: Miss</label>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Full Name:</label>
                                            <input type="text" name="gua_fullname" id="fname" value="<?php echo $gua_fullname; ?>"  id="input-email" class="form-control" />
                                        </div>

                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Permanent Address :</label>
                                            <input type="text" name="gua_address" value="<?php echo $gua_address; ?>"  id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Telephone:</label>
                                            <input type="tel" name="gua_tp" value="<?php echo $gua_tp; ?>"  id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Date of Birth:</label>
                                            <input type="date" name="gua_dob" value="<?php echo $gua_dob; ?>"  id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Married Status:</label>
                                            <input type="text" name="gua_ms" value="<?php echo $gua_ms; ?>"  id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">NIC Number:</label>
                                            <input type="text" name="gua_nic" value="<?php echo $gua_nic; ?>"  id="input-email" class="form-control" />
                                        </div>

                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Employment/Position:</label>
                                            <input type="text" name="gua_position" value="<?php echo $gua_position; ?>"  id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Monthly Salary/Net Income:</label>
                                            <input type="text" name="gua_monthly_salary" value="<?php echo $gua_monthly_salary; ?>"  id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Employer Name:</label>
                                            <input type="text" name="gua_emp_name" value="<?php echo $gua_emp_name; ?>"  id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Employer Address:</label>
                                            <input type="text" name="gua_emp_address" value="<?php echo $gua_emp_address; ?>"  id="input-email" class="form-control" />
                                        </div>
                                    </fieldset>
                                    <fieldset id="account">
                                        <legend>04.Guarantor Better Half Details</legend>

                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Full Name:</label>
                                            <input type="text" name="gua_bhalf_fullname" id="fname" value="<?php echo $gua_bhalf_fullname; ?>" placeholder="Full Name" id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Date of Birth:</label>
                                            <input type="text" name="gua_bhalf_dob" value="<?php echo $gua_bhalf_dob; ?>" placeholder="Date of Birth" id="input-email" class="form-control" />
                                        </div>

                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Employment/Position:</label>
                                            <input type="text" name="gua_bhalf_position" value="<?php echo $gua_bhalf_position; ?>" placeholder="Employment/Position" id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Monthly Salary/Net Income:</label>
                                            <input type="text" name="gua_bhalf_monthly_salary" value="<?php echo $gua_bhalf_monthly_salary; ?>" placeholder="Monthly Salary/Net Income" id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Employer Name:</label>
                                            <input type="text" name="gua_bhalf_emp_name" value="<?php echo $gua_bhalf_emp_name; ?>" placeholder="Employer Name" id="input-email" class="form-control" />
                                        </div>
                                    </fieldset>
                                </div>
                                <!--Guranter Details-->
                                <div class="col-md-12">


                                    <fieldset id="account">
                                        <legend>05.Real Property</legend>
                                        <div class="form-group ">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th class="thcaption">Category</th>
                                                        <th class="thcaption">Position</th>
                                                        <th class="thcaption">Size</th>
                                                        <th class="thcaption">Value</th>
                                                        <th class="thcaption">Is Pawned</th>
                                                        <th class="thcaption">Pawn Getter</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>House<input type="hidden" value="House" name="home"></td>
                                                        <td><input type="text" name="real_prp_house_position" value="<?php echo $real_prp_house_position; ?>" placeholder="Position" id="input-email" class="form-control" /></td>
                                                        <td><input type="text" name="real_prp_house_size" value="<?php echo $real_prp_house_size; ?>" placeholder="Size" id="input-email" class="form-control" /></td>
                                                        <td><input type="text" name="real_prp_house_value" value="<?php echo $real_prp_house_value; ?>" placeholder="Value" id="input-email" class="form-control" /></td>
                                                        <td><input type="text" name="real_prp_house_pawned" value="<?php echo $real_prp_house_pawned; ?>" placeholder="Is Pawned" id="input-email" class="form-control" /></td>
                                                        <td><input type="text" name="real_prp_house_pawn_getter" value="<?php echo $real_prp_house_pawn_getter; ?>" placeholder="Pawn Getter" id="input-email" class="form-control" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Other Property<input type="hidden" value="Other Property" name="op"></td>
                                                        <td><input type="text" name="real_prp_other_position" value="<?php echo $real_prp_other_position; ?>" placeholder="Position" id="input-email" class="form-control" /></td>
                                                        <td><input type="text" name="real_prp_other_size" value="<?php echo $real_prp_other_size; ?>" placeholder="Size" id="input-email" class="form-control" /></td>
                                                        <td><input type="text" name="real_prp_other_value" value="<?php echo $real_prp_other_value; ?>" placeholder="Value" id="input-email" class="form-control" /></td>
                                                        <td><input type="text" name="real_prp_other_pawned" value="<?php echo $real_prp_other_pawned; ?>" placeholder="Is Pawned" id="input-email" class="form-control" /></td>
                                                        <td><input type="text" name="real_prp_other_pawn_getter" value="<?php echo $real_prp_other_pawn_getter; ?>" placeholder="Pawn Getter" id="input-email" class="form-control" /></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </fieldset>
                                    <fieldset id="account">
                                        <legend>05.Bank Accounts</legend>
                                        <div class="form-group ">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th class="thcaption">Category</th>
                                                        <th class="thcaption">Bank Name & Branch</th>
                                                        <th class="thcaption">Facilities</th>
                                                        <th class="thcaption">Account Number</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Savings Account</td>
                                                        <td><input type="text" name="cus_savings_bank_branch" value="<?php echo $cus_savings_bank_branch; ?>" placeholder="Bank Name & Branch" id="input-email" class="form-control" /></td>
                                                        <td><input type="text" name="cus_savings_facilities" value="<?php echo $cus_savings_facilities; ?>" placeholder="Facilities" id="input-email" class="form-control" /></td>
                                                        <td><input type="text" name="cus_savings_account_no" value="<?php echo $cus_savings_account_no; ?>" placeholder="Account Number" id="input-email" class="form-control" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mobile Account</td>
                                                        <td><input type="text" name="cus_mobile_bank_branch" value="<?php echo $cus_mobile_bank_branch; ?>" placeholder="Bank Name & Branch" id="input-email" class="form-control" /></td>
                                                        <td><input type="text" name="cus_mobile_facilities" value="<?php echo $cus_mobile_facilities; ?>" placeholder="Facilities" id="input-email" class="form-control" /></td>
                                                        <td><input type="text" name="cus_mobile_account_no" value="<?php echo $cus_mobile_account_no; ?>" placeholder="Account Number" id="input-email" class="form-control" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Daily Loan Service</td>
                                                        <td><input type="text" name="cus_daily_loan_bank_branch" value="<?php echo $cus_daily_loan_bank_branch; ?>" placeholder="Bank Name & Branch" id="input-email" class="form-control" /></td>
                                                        <td><input type="text" name="cus_daily_loan_facilities" value="<?php echo $cus_daily_loan_facilities; ?>" placeholder="Facilities" id="input-email" class="form-control" /></td>
                                                        <td><input type="text" name="cus_daily_loan_account_no" value="<?php echo $cus_daily_loan_account_no; ?>" placeholder="Account Number" id="input-email" class="form-control" /></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </fieldset>

                                </div>

                                <div class="col-md-6">
                                    <label class="control-label" for="input-email">Registration Date</label>   
                                    <input type="date" name="reg_date" value="<?php echo $reg_date; ?>" placeholder="Date" id="input-email" class="form-control" />

                                </div>

                                <div class="col-md-12">
                                    <input type="button" class="btn btn" name="customer_continue" id="custcontinue" onclick="gotosecond();"value="Continue">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Customer Panel Section-->


        <!--Property Panel Section-->
        <div class="container" style="margin-top: 80px;display: none;" id="second">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="panelheading">
                            <h3 class="panel-title">Property Information</h3>
                        </div>
                        <div class="panel-body" >
                            <div class="col-sm-6">
                                <fieldset id="account"><td>
                                    <legend>Property Details</legend>
                                    <div class="form-group  ">
                                        <label class="control-label" for="input-email">Reference Person:</label>
                                        <input type="text" name="fname" id="fname" value="" placeholder="Reference Person" id="input-email" class="form-control"  />
                                    </div>
                                    <div class="form-group  ">
                                        <label class="control-label" for="input-email">Select Property:</label>
                                        <select name="cbopayment" id="input-region" class="form-control"   onchange="check();">
                                            <option value="bike">Bike</option>
                                            <option value="twheel">Three-Wheel</option>
                                            <option value="land">Land</option>
                                        </select>
                                    </div>
                                    <div class="form-group  ">
                                        <label class="control-label" for="input-email">Upload Customer:</label>
                                        <input type="file" name="product_image"  />
                                    </div>
                                    <div class="form-group  ">
                                        <label class="control-label" for="input-email">Upload Property:</label>
                                        <input type="file" name="product_image"  />
                                    </div>
                                </fieldset>

                            </div>
                            <div class="col-sm-6">
                                <div id="leasepanel">
                                    <fieldset id="account">


                                        <legend>Update Leasing Details</legend>
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Service No:</label>
                                            <input type="text" name="service_no" id="sno" placeholder="Service No" id="input-email" class="form-control" required/>
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Select Category:</label>
                                            <select name="vehicle_brand" id="v_cat" class="form-control" onchange="set_vehicle_div(this.value);">
                                                <option value="0">~~Select Category~~</option>
                                                <option value="1">Bike</option>
                                                <option value="2">Three-Wheel</option>
                                            </select>
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Select Vehicle Brand:</label>
                                            <select name="vehicle_brand" id="v_brand" class="form-control" onchange="showTypes(this.value);">
<?php load_vehicle_brands(); ?>
                                            </select>
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Select Vehicle Type:</label>
                                            <select name="vehicle_type" id="v_type" class="form-control" required onchange="showVehicleMods(this.value);">
                                                <option value="0">~~Select Vehicle Type~~</option>
                                            </select>
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Vehicle Pre Code:</label>
                                            <select name="vehicle_code" id="v_code" class="form-control" required onchange="showDetails();">
                                                <option value="0">~~Select Vehicle Code~~</option>
                                            </select>
                                        </div>
                                        <div class="form-inline required">
                                            <input type="text" name="vehicle_no" style="text-transform: uppercase;"id="v_no_code" placeholder="Ex:ME" id="input-email" class="form-control" required/>
                                            <label class="control-label" for="input-email"> - </label>
                                            <input type="text" name="vehicle_no" maxlength="4" id="v_no" placeholder="Ex:2558" id="input-email" class="form-control" required/>
                                            <br>
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Model Year:</label>
                                            <input type="text" disabled name="model_year" id="m_year" placeholder="Model Year" id="input-email" class="form-control" required/>
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Lease Rate:</label>
                                            <input type="text" disabled name="lease_rate" id="l_rate" placeholder="Lease Rate" id="input-email" class="form-control" required/>
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Fixed Rate:</label>
                                            <input type="text" name="fixed_rate" id="f_rate" placeholder="Fix Rate" id="input-email" class="form-control" required/>
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Select Period:</label>
                                            <select name="cbo_loan_duration" id="input-region" class="form-control" required>
                                                <option value="6">6 Months</option>
                                                <option value="12">1 Year</option>
                                                <option value="18">1.5 Years</option>
                                                <option value="24">2 Years</option>
                                                <option value="30">2.5 Years</option>
                                                <option value="36">3 Years</option>
                                                <option value="42">3.5 Years</option>
                                                <option value="48">4 Years</option>
                                                <option value="54">4.5 Years</option>
                                                <option value="60">5 Years</option>
                                            </select>
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Description of the Loan:</label>
                                            <input type="text" id="input-email" class="form-control" name="loan_description" placeholder="Description of the Loan">
                                        </div>

                                        <button type="button" class="btn btn" id="custcontinue">Update Lease</button>
                                        <button type="button" class="btn btn" id="backregister" onclick="gotoone();">Back</button>
                                    </fieldset>
                                </div>

                                <!--Property Land Panel-->
                                <div id="landpanel" style="display: none;">
                                    <fieldset id="account">
                                        <legend>Update Land Pawning Details</legend>
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Service No:</label>
                                            <input type="text" name="service_no" id="sno" placeholder="Service No" id="input-email" class="form-control" required/>
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Deed Number:</label>
                                            <input type="text" name="deed_no" id="deed" placeholder="Deed Number" id="input-email" class="form-control" required/>
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Registration Date:</label>
                                            <input type="date" name="reg_date" id="regdate" value="" placeholder="Registration Date" id="input-email" class="form-control" required/>
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Select Amount:</label>
                                            <select name="cbo_period" id="aid" class="form-control">
                                                <option value="0">~~Select Amount~~</option>
                                                <option value="1">100,000.00</option>
                                                <option value="2">200,000.00</option>
                                            </select>
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Select Period:</label>
                                            <select name="cbo_year" id="yid" class="form-control" onchange="load_interest();">
                                                <option value="0"> --- Please Select --- </option>
                                                <option value="1">1 Year</option>
                                                <option value="2">2 Year</option>
                                                <option value="3">3 Year</option>
                                                <option value="4">4 Year</option>
                                                <option value="5">5 Year</option>
                                            </select>
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Pawn Rate:</label>
                                            <input type="text" disabled name="pawn_rate" id="pawnrate" placeholder="Pawn Rate" id="input-email" class="form-control" required/>
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Fixed Rate:</label>
                                            <input type="text" name="fixed_rate" id="fixedrate" value="" placeholder="Fixed Rate" id="input-email" class="form-control" required/>
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Description of the Loan:</label>
                                            <input type="text" id="input-email" class="form-control" name="loan_description" placeholder="Description of the Loan">
                                        </div>
                                        <button type="button" class="btn btn" id="custcontinue">Update Pawn</button>
                                        <button type="button" class="btn btn" id="backregister" onclick="gotoone();">Back</button>
                                    </fieldset>
                                </div>
                                <!--Property Land Panel-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Property Panel Section-->

        <!--Popup Pane of Customers-->
        <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;
                            </span><span class="sr-only"> Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Choose Customer</h4>
                    </div>
                    <div class="modal-body">
                        <div class="input-inline">
                            <button type="button" id="cviewbuttons" class="btn btn">New Customer</button>
                            <a href="addlease"><button type="button" id="cviewbuttons" class="btn btn">Exiting Customer</button></a>
                        </div>
                        <ul>
                            <li><p style="margin-top: 12px;">New Customer Option can be Used to Create new Customer Account</p></li>
                            <li><p>Exiting Customer Option can be used to add services to currently registered customers in the company</p></li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" 
                                class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div
            </div>
        </div>
    </div>
    <!--Popup Pane of Customers-->


    <!--Footer Section-->
<?php include '../assets/include/footer.php'; ?>
    <!--Footer Section-->

    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="http://bootsnipp.com/dist/scripts.min.js"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <style>
        #panelheading
        {
            background: #009688;
            color: white;          
        }
        #custcontinue
        {
            background-color: #009688;
            color: white;
            float: right;
        }
        #custcontinue:hover
        {
            background-color: #004D40;
        }
        #backregister
        {
            background-color: #009688;
            color: white;
            float: right;
            margin-right: 12px;
        }
        #backregister:hover
        {
            background-color: #004D40;
        }
    </style>
    <script type="text/javascript">
                                            function gotosecond()
                                            {
                                                document.getElementById('one').style.display = "none";
                                                document.getElementById('second').style.display = "block";
                                            }
                                            function gotoone()
                                            {
                                                document.getElementById('one').style.display = "block";
                                                document.getElementById('second').style.display = "none";
                                            }

    </script>
    <script>
        function check()
        {
            var property = document.getElementById('input-region').value;
            if (property == 'bike')
            {
                alert("Bike");
                document.getElementById('landpanel').style.display = 'none';
                document.getElementById('leasepanel').style.display = 'block';
            } else if (property == 'twheel')
            {
                alert("Three-Wheel");
                document.getElementById('landpanel').style.display = 'none';
                document.getElementById('leasepanel').style.display = 'block';
            } else if (property == 'land')
            {
                alert("Land");
                document.getElementById('leasepanel').style.display = 'none';
                document.getElementById('landpanel').style.display = 'block';
            }
        }
        function change() {

        }
    </script>

</body>
</html>
