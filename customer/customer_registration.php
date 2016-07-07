<!DOCTYPE html>
<?php
session_start();

if (!isset($_SESSION['user_email'])) {
    header("Location:../index.php");
}
?>
<html lang="en">
    <?php
    //Asia/Colombo
    date_default_timezone_set('Asia/Colombo');

    $cus_salutation = "";
    $cus_fullname = "";
    $cus_initialname = "";
    $cus_address = "";
    $cus_tp = "";
    $cus_nic = "";
    $cus_dob = date("Y-m-d");
    $cus_ms = "";
    $cus_dependdency = "";
    $cus_position = "";
    $cus_monthly_salary = "";
    $cus_emp_name = "";
    $cus_emp_address = "";
    $cus_addr_map_link = "No add this one";
    //$reg_date= date("Y-m-d");


    $cus_hhalf_name = "";
    $cus_bhalf_dob = date("Y-m-d");
    $cus_bhalf_position = "";
    $cus_bhalf_monthly_salary = "";
    $cus_bhalf_emp_name = "";
//////////////////////////////////////////////////////////////

    $gua_fullname = "";
    $gua_initial_name = "";
    $gua_address = "";
    $gua_tp = "";
    $gua_dob = date("Y-m-d");
    $gua_ms = "";
    $gua_nic = "";
    $gua_dependency = "";
    $gua_position = "";
    $gua_monthly_salary = "";
    $gua_emp_name = "";
    $gua_emp_address = "";

    $gua_bhalf_fullname = "";
    $gua_bhalf_dob = date("Y-m-d");
    $gua_bhalf_position = "";
    $gua_bhalf_monthly_salary = "";
    $gua_bhalf_emp_name = "";

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

    $reg_date = date("Y-m-d");
    
    
    $useremailtoname="";
    $cbopayment="";
    ?>
    <head>
        <meta charset="utf-8">
        <title>Customer</title>
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
                    xmlhttp.onreadystatechange = function() {
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
                    } else {
                        // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function() {
                        if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                            if (xmlhttp.responseText === "No Interest Found,Try Again") {
                                alert(xmlhttp.responseText);
                            } else {
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
                    xmlhttp.onreadystatechange = function() {
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
                    xmlhttp.onreadystatechange = function() {
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
                    xmlhttp.onreadystatechange = function() {
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
                    xmlhttp.onreadystatechange = function() {
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

                } else if (val == 2) {
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
                    xmlhttp.onreadystatechange = function() {
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
        <form action="../controller/co_customer.php" method="POST" enctype="multipart/form-data" name="f1_cus" id="f1_cus">
            <div class="container" style="margin-top: 80px;display: block;" id="one">

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading" id="panelheading">
                                <h3 class="panel-title">Customer Registration</h3>
                            </div>


                            <div class="panel-body" style="background-color: #FAFAFA;">
                                <div class="col-sm-6">
                                    <fieldset id="account">
                                        <!-- Start.Customer Personal Details --> 


                                        <legend>01.Customer Personal Details</legend>
                                        <?php
                                        $chack_c = "checked";
                                        ?>
                                        <label class="radio-inline"><input type="radio" value="Mr" name="cus_salutation" <?php echo $chack_c; ?> required >: Mr</label>
                                        <label class="radio-inline"><input type="radio" value="Mis" name="cus_salutation">: Mis</label>
                                        <label class="radio-inline"><input type="radio" value="Miss" name="cus_salutation">: Miss</label>


                                        <div class="form-group  ">
                                            <span style="color:red;">*</span><label class="control-label">Full Name:</label>
                                            <input type="text" id="cus_fullname" name="cus_fullname" value="<?php echo $cus_fullname; ?>" placeholder="Full Name"   class="form-control" maxlength="100" autofocus required />
                                        </div>
                                        <div class="form-group  ">
                                            <span style="color:red;">*</span><label class="control-label" >Name with Initials:</label>
                                            <input type="text" id="cus_initial" name="cus_initialname" value="<?php echo $cus_initialname; ?>" placeholder="Name with Initials"   class="form-control" maxlength="100" required />
                                        </div>
                                        <div class="form-group  ">
                                            <span style="color:red;">*</span><label class="control-label" >Permanent Address :</label>
                                            <input type="text" id="cus_paddress" name="cus_address" value="<?php echo $cus_address; ?>" placeholder="Permanent Address"   class="form-control" maxlength="150" required />
                                        </div>
                                        <div class="form-group  ">
                                            <span style="color:red;">*</span><label class="control-label" >Telephone:</label>
                                            <input type="text" id="cus_tp" name="cus_tp" value="<?php echo $cus_tp; ?>" placeholder="Telephone"   class="form-control" maxlength="15" />
                                        </div>
                                        <div class="form-group  ">
                                            <span style="color:red;">*</span><label class="control-label" >NIC Number:</label>
                                            <input type="text" id="cus_nic" name="cus_nic" value="<?php echo $cus_nic; ?>" placeholder="NIC Number"  class="form-control" maxlength="15"/>
                                        </div>
                                        <div class="form-group  ">
                                            <span style="color:red;">*</span><label class="control-label" >Date of Birth:</label>
                                            <input type="date" id="cus_dob" name="cus_dob" min="1900-12-31" max="<?php echo $reg_date; ?>" value="<?php echo $cus_dob; ?>" placeholder="Date of Birth"  class="form-control" maxlength="15"/>
                                        </div>

                                        <div class="form-group  ">
                                            <span style="color:red;">*</span><label class="control-label" >Married Status:</label>
                                            <select name="cus_ms" value="<?php echo $cus_ms; ?>" class="form-control" >
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                            </select>
                                        </div>
                                        <div class="form-group  ">
                                            <span style="color:red;">*</span><label class="control-label" >Have any Dependencies:</label>
                                            <input type="number" id="cus_depend" min="0" max="20" name="cus_dependdency" value="<?php echo $cus_dependdency; ?>" placeholder="Have any Dependencies"  class="form-control" maxlength="2"/>
                                        </div>
                                        <div class="form-group  ">
                                            <span style="color:red;">*</span><label class="control-label" >Employment/Position:</label>
                                            <input type="text" id="cus_position" name="cus_position" value="<?php echo $cus_position; ?>" placeholder="Employment/Position"  class="form-control" maxlength="80"/>
                                        </div>
                                        <div class="form-group  ">
                                            <span style="color:red;">*</span><label class="control-label" >Monthly Salary/Net Income:</label>
                                            <input type="text" id="cus_salary" name="cus_monthly_salary" value="<?php echo $cus_monthly_salary; ?>" placeholder="Monthly Salary/Net Income"  class="form-control" maxlength="10"/>
                                        </div>
                                        <div class="form-group  ">
                                            <span style="color:red;">*</span><label class="control-label" >Employer Name:</label>
                                            <input type="text" name="cus_emp_name" value="<?php echo $cus_emp_name; ?>" placeholder="Employer Name"   class="form-control" maxlength="200"/>
                                        </div>
                                        <div class="form-group  ">
                                            <span style="color:red;">*</span><label class="control-label" >Employer Address:</label>
                                            <input type="text" id="cus_emp_name" name="cus_emp_address" value="<?php echo $cus_emp_address; ?>" placeholder="Employer Address"   class="form-control" maxlength="250"/>
                                        </div>
                                    </fieldset>
                                    <fieldset id="account">

                                        <!-- Start.Customer Better Half Details --> 

                                        <legend>03.Customer Better Half Details</legend>

                                        <div class="form-group  ">
                                            <span style="color:red;">*</span><label class="control-label"   id="">Full Name:</label>
                                            <input type="text" id="cus_bhalf_name" name="cus_hhalf_name" id="fname" value="<?php echo $cus_hhalf_name; ?>" placeholder="Full Name"   class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <span style="color:red;">*</span><label class="control-label"   id="">Date of Birth:</label>
                                            <input type="date" id="cus_bhalf_dob" min="1900-12-31" max="<?php echo $reg_date; ?>" name="cus_bhalf_dob" value="<?php echo $cus_bhalf_dob; ?>" placeholder="Date of Birth"   class="form-control" />
                                        </div>

                                        <div class="form-group  ">
                                            <span style="color:red;">*</span><label class="control-label"   id="">Employment/Position:</label>
                                            <input type="text" id="cus_bhalf_position" name="cus_bhalf_position" value="<?php echo $cus_bhalf_position; ?>" placeholder="Employment/Position"   class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <span style="color:red;">*</span><label class="control-label"   id="">Monthly Salary/Net Income:</label>
                                            <input type="text" id="cus_bhalf_salary" name="cus_bhalf_monthly_salary" value="<?php echo $cus_bhalf_monthly_salary; ?>" placeholder="Monthly Salary/Net Income"   class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <span style="color:red;">*</span><label class="control-label"   id="">Employer Name:</label>
                                            <input type="text" id="cus_bhalf_emp_name" name="cus_bhalf_emp_name" value="<?php echo $cus_bhalf_emp_name; ?>" placeholder="Employer Name"   class="form-control" />
                                        </div>

                                        <div class="form-group  ">
                                            <span style="color:green;">*</span><label class="control-label">Map Link :</label>
                                            <input type="text" id="cus_addr_map_link" name="cus_addr_map_link" value="<?php echo $cus_addr_map_link; ?>" placeholder="Map Link"   class="form-control" form="f1_cus"/>
                                        </div>

                                    </fieldset>
                                </div>

                                <!-- Customer Guranter Details-->

                                <div class="col-sm-6">
                                    <fieldset id="account">
                                        <legend>02.Guarantor Personal Details</legend>


                                        <?php
                                        $chack_g = "checked";
                                        ?>
                                        <label class="radio-inline"><input type="radio" name="gua_salutation" value="Mr" <?php echo $chack_g; ?>  >: Mr</label>
                                        <label class="radio-inline"><input type="radio" name="gua_salutation" value="Mis" >: Mis</label>
                                        <label class="radio-inline"><input type="radio" name="gua_salutation" value="Miss" >: Miss</label>

                                        <div class="form-group  ">
                                            <span style="color:red;">*</span><label class="control-label">Full Name:</label>
                                            <input type="text" id="g_fullname" name="gua_fullname" id="fname" value="<?php echo $gua_fullname; ?>" placeholder="Full Name"   class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <span style="color:red;">*</span><label class="control-label">Name with Initials:</label>
                                            <input type="text" id="g_initial" name="gua_initial_name" value="<?php echo $gua_initial_name; ?>" placeholder="Name with Initials"   class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <span style="color:red;">*</span><label class="control-label">Permanent Address :</label>
                                            <input type="text" id="g_address" name="gua_address" value="<?php echo $gua_address; ?>" placeholder="Permanent Address"   class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <span style="color:red;">*</span><label class="control-label">Telephone:</label>
                                            <input type="tel" id="g_tp" name="gua_tp" value="<?php echo $gua_tp; ?>" placeholder="Telephone"   class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <span style="color:red;">*</span><label class="control-label">Date of Birth:</label>
                                            <input type="date" id="g_dob" min="1900-12-31" max="<?php echo $reg_date; ?>" name="gua_dob" value="<?php echo $gua_dob; ?>" placeholder="Date of Birth"   class="form-control" />

                                        </div>
                                        <div class="form-group  ">
                                            <span style="color:red;">*</span><label class="control-label">Married Status:</label>
                                            <select name="gua_ms" value="<?php echo $gua_ms; ?>"    class="form-control" >
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                            </select>
                                        </div>
                                        <div class="form-group  ">
                                            <span style="color:red;">*</span><label class="control-label">NIC Number:</label>
                                            <input type="text" id="g_nic" name="gua_nic" value="<?php echo $gua_nic; ?>" placeholder="National Identity Card Number"   class="form-control" />
                                        </div>

                                        <div class="form-group  ">
                                            <span style="color:red;">*</span><label class="control-label">Have any Dependencies:</label>
                                            <input type="number" id="g_depend" min="0" max="20" name="gua_dependency" value="<?php echo $gua_dependency; ?>" placeholder="Have any Dependencies"   class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <span style="color:red;">*</span><label class="control-label">Employment/Position:</label>
                                            <input type="text" id="g_position" name="gua_position" value="<?php echo $gua_position; ?>" placeholder="Employment/Position"   class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <span style="color:red;">*</span><label class="control-label">Monthly Salary/Net Income:</label>
                                            <input type="text" id="g_salary" name="gua_monthly_salary" value="<?php echo $gua_monthly_salary; ?>" placeholder="Monthly Salary/Net Income"   class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <span style="color:red;">*</span><label class="control-label">Employer Name:</label>
                                            <input type="text" id="g_emp_name" name="gua_emp_name" value="<?php echo $gua_emp_name; ?>" placeholder="Employer Name"   class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <span style="color:red;">*</span><label class="control-label">Employer Address:</label>
                                            <input type="text" id="g_emp_address" name="gua_emp_address" value="<?php echo $gua_emp_address; ?>" placeholder="Employer Address"   class="form-control" />
                                        </div>
                                    </fieldset>
                                    <fieldset id="account">

                                        <!--Start.Guarantor Better Half Details -->

                                        <legend>04.Guarantor Better Half Details</legend>

                                        <div class="form-group  ">
                                            <span style="color:red;">*</span><label class="control-label">Full Name:</label>
                                            <input type="text" id="g_bhalf_fullname" name="gua_bhalf_fullname" id="fname" value="<?php echo $gua_bhalf_fullname; ?>" placeholder="Full Name"   class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <span style="color:red;">*</span><label class="control-label">Date of Birth:</label>
                                            <input type="date" id="g_bhalf_dob" name="gua_bhalf_dob" min="1900-12-31" max="<?php echo $reg_date; ?>" value="<?php echo $gua_bhalf_dob; ?>" placeholder="Date of Birth" class="form-control" />
                                        </div>

                                        <div class="form-group  ">
                                            <span style="color:red;">*</span><label class="control-label">Employment/Position:</label>
                                            <input type="text" id="g_bhalf_position" name="gua_bhalf_position" value="<?php echo $gua_bhalf_position; ?>" placeholder="Employment/Position" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <span style="color:red;">*</span><label class="control-label">Monthly Salary/Net Income:</label>
                                            <input type="text" id="g_bhalf_salary" name="gua_bhalf_monthly_salary" value="<?php echo $gua_bhalf_monthly_salary; ?>" placeholder="Monthly Salary/Net Income" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <span style="color:red;">*</span><label class="control-label">Employer Name:</label>
                                            <input type="text" id="g_bhalf_emp_name" name="gua_bhalf_emp_name" value="<?php echo $gua_bhalf_emp_name; ?>" placeholder="Employer Name"  class="form-control" />
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="col-md-12">

                                    <!--Real Property Details-->
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
                                                        <td><span style="color:red;">*</span><input type="text" id="house_property" name="real_prp_house_position" value="<?php echo $real_prp_house_position; ?>" placeholder="Position" class="form-control" /></td>
                                                        <td><span style="color:red;">*</span><input type="text" id="house_size" name="real_prp_house_size" value="<?php echo $real_prp_house_size; ?>" placeholder="Size" class="form-control" /></td>
                                                        <td><span style="color:red;">*</span><input type="text" id="house_value" name="real_prp_house_value" value="<?php echo $real_prp_house_value; ?>" placeholder="Value" class="form-control" /></td>
                                                        <td><span style="color:red;">*</span><input type="text" id="house_pawned" name="real_prp_house_pawned" value="<?php echo $real_prp_house_pawned; ?>" placeholder="Is Pawned" class="form-control" /></td>
                                                        <td><span style="color:red;">*</span><input type="text" id="house_pawn_getter" name="real_prp_house_pawn_getter" value="<?php echo $real_prp_house_pawn_getter; ?>" placeholder="Pawn Getter" class="form-control" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Other Property<input type="hidden" value="Other Property" name="op"></td>
                                                        <td><input type="text" name="real_prp_other_position" value="<?php echo $real_prp_other_position; ?>" placeholder="Position"   class="form-control" /></td>
                                                        <td><input type="text" name="real_prp_other_size" value="<?php echo $real_prp_other_size; ?>" placeholder="Size"   class="form-control" /></td>
                                                        <td><input type="text" name="real_prp_other_value" value="<?php echo $real_prp_other_value; ?>" placeholder="Value"   class="form-control" /></td>
                                                        <td><input type="text" name="real_prp_other_pawned" value="<?php echo $real_prp_other_pawned; ?>" placeholder="Is Pawned"   class="form-control" /></td>
                                                        <td><input type="text" name="real_prp_other_pawn_getter" value="<?php echo $real_prp_other_pawn_getter; ?>" placeholder="Pawn Getter"   class="form-control" /></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </fieldset>

                                    <!--Bank Accounts Details-->

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
                                                        <td><span style="color:red;">*</span><input type="text" id="saving_account_bank" name="cus_savings_bank_branch" value="<?php echo $cus_savings_bank_branch; ?>" placeholder="Bank Name & Branch"   class="form-control" /></td>
                                                        <td><span style="color:red;">*</span><input type="text" id="saving_facility" name="cus_savings_facilities" value="<?php echo $cus_savings_facilities; ?>" placeholder="Facilities"   class="form-control" /></td>
                                                        <td><span style="color:red;">*</span><input type="text" id="saving_acc_no" name="cus_savings_account_no" value="<?php echo $cus_savings_account_no; ?>" placeholder="Account Number"   class="form-control" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mobile Account</td>
                                                        <td><input type="text" name="cus_mobile_bank_branch" value="<?php echo $cus_mobile_bank_branch; ?>" placeholder="Bank Name & Branch"   class="form-control" /></td>
                                                        <td><input type="text" name="cus_mobile_facilities" value="<?php echo $cus_mobile_facilities; ?>" placeholder="Facilities"   class="form-control" /></td>
                                                        <td><input type="text" name="cus_mobile_account_no" value="<?php echo $cus_mobile_account_no; ?>" placeholder="Account Number"   class="form-control" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Daily Loan Service</td>
                                                        <td><input type="text" name="cus_daily_loan_bank_branch" value="<?php echo $cus_daily_loan_bank_branch; ?>" placeholder="Bank Name & Branch"   class="form-control" /></td>
                                                        <td><input type="text" name="cus_daily_loan_facilities" value="<?php echo $cus_daily_loan_facilities; ?>" placeholder="Facilities"   class="form-control" /></td>
                                                        <td><input type="text" name="cus_daily_loan_account_no" value="<?php echo $cus_daily_loan_account_no; ?>" placeholder="Account Number"   class="form-control" /></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </fieldset>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span style="color:red;">*</span><label class="control-label"   id="">Registration Date</label>
                                        <div class="fomr-inline" id="msg_caption">
                                            <input type="date" id="cus_reg_date" name="reg_date" value="<?php echo $reg_date; ?>" placeholder="Date" class="form-control" />
                                            <br><p><b>Warning</b> :~~<span style="color:red;">*</span>~~ are mandatory fields, should not be empty</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                      
                                    <input type="button" class="btn btn" name="customer_continue" id="custcontinue" onclick="checkCustomerValues();" value="Continue">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Over.Customer Panel Section-->


            <!--Start.Property Panel Section-->

            <!--Start.Property Information Details-->
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
                                            <label class="control-label"   id="">Reference Person:</label>
                                            <input type="text" name="useremailtoname" id="fname" value="<?php echo $useremailtoname; ?>" placeholder="Reference Person"   class="form-control"  />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label"   id="">Select Property:</label>
                                            <select name="cbopayment" value="<?php echo $cbopayment; ?>" id="input-region" class="form-control"   onchange="check();">
                                                <option value="bike">Bike</option>
                                                <option value="twheel">Three-Wheel</option>
                                                <option value="land">Land</option>
                                            </select>
                                        </div>
                                        <div class="form-group  ">
                                            <form action="#" method="Get">
                                            <label class="control-label"   id="">Upload Customer:</label>
                                            <input type="file" name="product_image"  />
                                            </form>
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label"   id="">Upload Property:</label>
                                            <input type="file" name="product_image"  />
                                        </div>
                                    </fieldset>

                                </div>

                                <!--Start.Leasing Information Details-->

                                <?php
                               
                                $target_dir = "uploads/";
                                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                                $uploadOk = 1;
                                $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
                                // Check if image file is a actual image or fake image
                                if (isset($_POST["submit"])) {
                                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                                    if ($check !== false) {
                                        echo "File is an image - " . $check["mime"] . ".";
                                        $uploadOk = 1;
                                    } else {
                                        echo "File is not an image.";
                                        $uploadOk = 0;
                                    }
                                }
// Check if file already exists
                                if (file_exists($target_file)) {
                                    echo "Sorry, file already exists.";
                                    $uploadOk = 0;
                                }
                                // Check file size
                                if ($_FILES["fileToUpload"]["size"] > 500000) {
                                    echo "Sorry, your file is too large.";
                                    $uploadOk = 0;
                                }
                                // Allow certain file formats
                                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                                    $uploadOk = 0;
                                }
                                // Check if $uploadOk is set to 0 by an error
                                if ($uploadOk == 0) {
                                    echo "Sorry, your file was not uploaded.";
                                // if everything is ok, try to upload file
                                } else {
                                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                        echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
                                    } else {
                                        echo "<script>alert('Sorry, there was an error \n uploading your file.');</script>";
                                    }
                                }
                                ?>

                                

                                <div class="col-sm-6">
                                    <div id="leasepanel">
                                        <fieldset id="account">
                                            <legend>Leasing Details</legend>
                                            <div class="form-group required">
                                                <label class="control-label"   id="">Service No:</label>
                                                <input type="text"  name="service_no" id="sno" placeholder="Service No"   class="form-control" required/>
                                            </div>
                                            <div class="form-group required">
                                                <label class="control-label"   id="">Select Category:</label>
                                                <select name="vehicle_brand" id="v_cat" class="form-control" onchange="set_vehicle_div(this.value);">
                                                    <option value="0">~~Select Category~~</option>
                                                    <option value="1">Bike</option>
                                                    <option value="2">Three-Wheel</option>
                                                </select>
                                            </div>
                                            <div class="form-group required">
                                                <label class="control-label"   id="">Select Vehicle Brand:</label>
                                                <select name="vehicle_brand" id="v_brand" class="form-control" onchange="showTypes(this.value);">
                                                    <?php load_vehicle_brands(); ?>
                                                </select>
                                            </div>
                                            <div class="form-group required">
                                                <label class="control-label"   id="">Select Vehicle Type:</label>
                                                <select name="vehicle_type" id="v_type" class="form-control"  onchange="showVehicleMods(this.value);">
                                                    <option value="0">~~Select Vehicle Type~~</option>
                                                </select>
                                            </div>
                                            <div class="form-group required">
                                                <label class="control-label"   id="">Vehicle Pre Code:</label>
                                                <select name="vehicle_code" id="v_code" class="form-control" onchange="showDetails();">
                                                    <option value="0">~~Select Vehicle Code~~</option>
                                                </select>
                                            </div>
                                            <div class="form-inline required">
                                                <input type="text" name="vehicle_no" style="text-transform: uppercase;"id="v_no_code" placeholder="Ex:ME"  class="form-control"/>
                                                <label class="control-label"   id=""> - </label>
                                                <input type="text" name="vehicle_no" maxlength="4" id="v_no" placeholder="Ex:2558"   class="form-control"/>
                                                <br>
                                            </div>
                                            <div class="form-group required">
                                                <label class="control-label"   id="">Model Year:</label>
                                                <input type="text" disabled name="model_year" id="m_year" placeholder="Model Year"   class="form-control"/>
                                            </div>
                                            <div class="form-group required">
                                                <label class="control-label"   id="">Lease Rental:</label>
                                                <input type="text" disabled name="lease_rate" id="l_rate" placeholder="Lease Rate"   class="form-control"/>
                                            </div>
                                            <div class="form-group required">
                                                <label class="control-label"   id="">Fixed Rental:</label>
                                                <input type="text" name="fixed_rate" id="f_rate" placeholder="Fix Rate"   class="form-control"/>
                                            </div>
                                            <div class="form-group required">
                                                <label class="control-label"   id="">Select Period:</label>
                                                <select name="cbo_loan_duration" id="input-region" class="form-control">
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
                                                <label class="control-label"   id="">Description of the Loan:</label>
                                                <input type="text"   class="form-control" name="loan_description" placeholder="Description of the Loan">
                                            </div>

                                            <input type="submit" class="btn btn" id="custcontinue" value="Register Lease">
                                            <button type="button" class="btn btn" id="backregister" onclick="gotoone();">Back</button>
                                        </fieldset>
                                    </div>

                                    <!--Start.Property Land Panel-->
                                    <div id="landpanel" style="display: none;">
                                        <fieldset id="account">
                                            <legend>Land Pawning Details</legend>
                                            <div class="form-group">
                                                <label class="control-label"   id="">Service No:</label>
                                                <input type="text" name="service_no" id="sno" placeholder="Service No"   class="form-control"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label"   id="">Deed Number:</label>
                                                <input type="text" name="deed_no" id="deed" placeholder="Deed Number"   class="form-control"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label"   id="">Registration Date:</label>
                                                <input type="date" name="reg_date" id="regdate" value="" placeholder="Registration Date"   class="form-control"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label"   id="">Select Amount:</label>
                                                <select name="cbo_period" id="aid" class="form-control">
                                                    <option value="0">~~Select Amount~~</option>
                                                    <option value="1">100,000.00</option>
                                                    <option value="2">200,000.00</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label"   id="">Select Period:</label>
                                                <select name="cbo_year" id="yid" class="form-control" onchange="load_interest();">
                                                    <option value="0"> --- Please Select --- </option>
                                                    <option value="1">1 Year</option>
                                                    <option value="2">2 Year</option>
                                                    <option value="3">3 Year</option>
                                                    <option value="4">4 Year</option>
                                                    <option value="5">5 Year</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label"   id="">Pawn Rate:</label>
                                                <input type="text" disabled name="pawn_rate" id="pawnrate" placeholder="Pawn Rate"   class="form-control"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label"   id="">Fixed Rate:</label>
                                                <input type="text" name="fixed_rate" id="fixedrate" value="" placeholder="Fixed Rate"   class="form-control"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label"   id="">Description of the Loan:</label>
                                                <input type="text"   class="form-control" name="loan_description" placeholder="Description of the Loan">
                                            </div>
                                            <button type="button" class="btn btn" id="custcontinue">Register Pawn</button>
                                            <button type="button" class="btn btn" id="backregister" onclick="gotoone();">Back</button>
                                        </fieldset>
                                    </div>
                                    <!--Over.Property Land Panel-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--Over.Property Panel Section-->




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
                                                function validate() {
                                                    alert('Fuck');
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

        </script>
        <script type="text/javascript">
            function checkCustomerValues() {

                var cus_fullname = document.getElementById('cus_fullname').value
                var cus_initial = document.getElementById('cus_initial').value
                var cus_paddress = document.getElementById('cus_paddress').value
                var cus_tp = document.getElementById('cus_tp').value
                var cus_nic = document.getElementById('cus_nic').value
                var cus_dob = document.getElementById('cus_dob').value
                var cus_depend = document.getElementById('cus_depend').value
                var cus_position = document.getElementById('cus_position').value
                var cus_salary = document.getElementById('cus_salary').value
                var cus_emp_name = document.getElementById('cus_emp_name').value

                var cus_bhalf_name = document.getElementById('cus_bhalf_name').value
                var cus_bhalf_dob = document.getElementById('cus_bhalf_dob').value
                var cus_bhalf_position = document.getElementById('cus_bhalf_position').value
                var cus_bhalf_salary = document.getElementById('cus_bhalf_salary').value
                var cus_bhalf_emp_name = document.getElementById('cus_bhalf_emp_name').value

                var g_fullname = document.getElementById('g_fullname').value
                var g_initial = document.getElementById('g_initial').value
                var g_address = document.getElementById('g_address').value
                var g_tp = document.getElementById('g_tp').value
                var g_dob = document.getElementById('g_dob').value
                var g_nic = document.getElementById('g_nic').value
                var g_depend = document.getElementById('g_depend').value
                var g_position = document.getElementById('g_position').value
                var g_salary = document.getElementById('g_salary').value
                var g_emp_name = document.getElementById('g_emp_name').value
                var g_emp_address = document.getElementById('g_emp_address').value

                var g_bhalf_fullname = document.getElementById('g_bhalf_fullname').value
                var g_bhalf_dob = document.getElementById('g_bhalf_dob').value
                var g_bhalf_position = document.getElementById('g_bhalf_position').value
                var g_bhalf_salary = document.getElementById('g_bhalf_salary').value
                var g_bhalf_emp_name = document.getElementById('g_bhalf_emp_name').value

                var house_property = document.getElementById('house_property').value
                var house_size = document.getElementById('house_size').value
                var house_value = document.getElementById('house_value').value
                var house_pawned = document.getElementById('house_pawned').value
                var house_pawn_getter = document.getElementById('house_pawn_getter').value

                var saving_account_bank = document.getElementById('saving_account_bank').value
                var saving_facility = document.getElementById('saving_facility').value
                var saving_acc_no = document.getElementById('saving_acc_no').value
                var cus_reg_date = document.getElementById('cus_reg_date').value

                if (cus_fullname != "" && cus_initial != "" && cus_paddress != "" && cus_tp != "" && cus_nic != "" && cus_dob != "" && cus_depend != "" &&
                        cus_position != "" && cus_salary != "" && cus_emp_name != "" && cus_bhalf_name != "" && cus_bhalf_dob != "" && cus_bhalf_position != "" &&
                        cus_bhalf_salary != "" && cus_bhalf_emp_name != "" && g_fullname != "" && g_initial != "" && g_address != "" &&
                        g_tp != "" && g_dob != "" && g_nic != "" && g_depend != "" && g_position != "" && g_salary != "" && g_emp_name != "" && g_emp_address != "" &&
                        g_bhalf_fullname != "" && g_bhalf_dob != "" && g_bhalf_position != "" && g_bhalf_salary != "" && g_bhalf_emp_name != "" &&
                        house_property != "" && house_size != "" && house_value != "" && house_pawned != "" && house_pawn_getter != "" &&
                        saving_account_bank != "" && saving_facility != "" && saving_acc_no != "" && cus_reg_date != "") {
                    document.getElementById('msg_caption').style.color = "black";
                    gotosecond();
                } else {
                    document.getElementById('msg_caption').style.color = "red";
                    alert("Empty Data Fields Found,Please Insert Valid Data");
                }


            }

        </script>
    </body>
</html>
