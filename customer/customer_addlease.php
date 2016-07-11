
<?php
session_start();
if (!isset($_SESSION['user_email'])) {
    header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html>
    <!--Variable Declaration-->
    <?php
    $cus_name = "";
    $cus_nic = "";
    $vehicle_no = "";
    $model_year = "";
    $lease_rate = "";
    $fixed_rate = "";
    $cbo_loan_duration = "";
    ?>
    <!--Variable Declaration-->
    <head>
        <meta charset="UTF-8">
        <title>Lease | Registration </title>

        <link rel="icon" href="favicon.ico">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Latest compiled and minified CSS -->

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- Optional theme -->

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,700,600italic,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../assets/css/customer_service.css">
        <script src="../assets/js/jquery-3.0.0.js"></script>
        <link rel="icon" href="favicon.ico">

        <?php require '../controller/co_load_vehicle_brands.php'; ?>
        <script type="text/javascript">
            function imagepreview(input) {
                if (input.files && input.files[0]) {
                    var filerd = new FileReader();
                    filerd.onload = function (e) {
                        $('#imgpreview').attr('src', e.target.result);
                    };
                    filerd.readAsDataURL(input.files[0]);
                }
            }
        </script>
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
                                document.getElementById('v_no_code').maxLength = v_code.length;
                                document.getElementById('v_no_code').readOnly = false;
                                document.getElementById('v_no_code').value = "";
                                document.getElementById('v_no_num').value = "";
                                document.getElementById('m_year').value = "";
                                document.getElementById('l_rate').value = "";
                            } else {
                                document.getElementById('v_no_code').value = "";
                                document.getElementById('v_no_num').value = "";
                                document.getElementById('m_year').value = "";
                                document.getElementById('l_rate').value = "";
                                document.getElementById('v_no_code').readOnly = true;
                                document.getElementById('v_no_code').maxLength = v_code.length;
                                document.getElementById('v_no_code').value = document.getElementById('v_code').value;
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
                            //alert(xmlhttp.responseText);
                            document.getElementById('l_rate').value = xmlhttp.responseText;
                            document.getElementById('m_year').value = "None";
                        }
                    }
                    xmlhttp.open("GET", "del.php?v_tw_type=" + v_tw_type + "&v_tw_code=" + v_tw_code, true);
                    xmlhttp.send();
                }
            }

        </script>
        <script type="text/javascript">
            function set_vehicle_div(val) {
                alert(val);
                if (val == 1) {
                    alert(val);
                    reset_form_values();
                    document.getElementById('v_brand').disabled = false;
                }
                else if (val == 2) {
                    alert(val);
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
                document.getElementById('v_type').innerHTML = "";
                document.getElementById('v_type').innerHTML = "<option value='0'>~~Select Vehicle Type~~</option>";
                document.getElementById('v_type').selectedIndex = "0";
                document.getElementById('v_code').innerHTML = "";
                document.getElementById('v_code').innerHTML = "<option value='0'>~~Select Vehicle Code~~</option>";
                document.getElementById('v_code').selectedIndex = "0";
                document.getElementById('v_no_num').value = "";
                document.getElementById('v_no_code').value = "";
                document.getElementById('m_year').value = "";
                document.getElementById('l_rate').value = "";
                document.getElementById('f_rate').value = "";
            }
        </script>
        <script type="text/javascript">
            function searchCustomerforLease() {

                if (document.getElementById('customer_nic').value != "") {
                    alert('searchCustomerforLease');
                    var val = document.getElementById('customer_nic').value;
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    } else { // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function () {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            alert(xmlhttp.responseText);
                            document.getElementById('customer_name').value = xmlhttp.responseText;
                        }
                    }
                    xmlhttp.open("GET", "../controller/co_load_lease_customer.php?cus_nic=" + val, true);
                    xmlhttp.send();
                }
            }
        </script>
        <script type="text/javascript">
            function saveVehicleLease() {

                var service_code = document.getElementById('scode').value;
                var service_num = document.getElementById('sno').value;
                var service_no = service_code + "-" + service_num;
                var v_cat = document.getElementById('v_cat').value;
                var v_brand = document.getElementById('v_brand').value;
                var v_type = document.getElementById('v_type').value;
                var v_code = document.getElementById('v_code').value;
                var v_number = document.getElementById('v_no_code').value + "-" + document.getElementById('v_no_num').value;
                var v_myear = document.getElementById('m_year').value;
                var v_lrate = document.getElementById('l_rate').value;
                var v_frate = document.getElementById('f_rate').value;
                var v_lease_period = document.getElementById('v_lease_period').value;
                var v_lease_des = document.getElementById('lease_des').value;
                var c_nic = document.getElementById('customer_nic').value;

                if (service_no != "" && v_cat != "" && v_brand != "" && v_type != "" && v_code != ""
                        && v_number != "" && v_myear != "" && v_lrate != ""
                        && v_frate != "" && v_lease_period != "" && v_lease_des != "" && c_nic != "") {

                    alert("inside save code");
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    } else { // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function () {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            alert(xmlhttp.responseText);
                        }
                    }
                    xmlhttp.open("GET", "../controller/ser_external_v_service_save.php?cus_nic=" + c_nic + "&sno=" + service_no + "&v_cat=" + v_cat + "&v_brand=" + v_brand + "&v_type=" + v_type + "&v_code=" + v_code + "&v_number=" + v_number + "&v_myear=" + v_myear + "&v_lrate=" + v_lrate + "&v_frate=" + v_frate + "&v_period=" + v_lease_period + "&v_des=" + v_lease_des, true);
                    xmlhttp.send();
                }
            }

        </script>
    </head>
    <body>
        <?php include '../assets/include/navigation_bar.php'; ?>
        <!--Lease Registration Panel-->
        <div class="container" style="margin-top: 80px;display: block;" id="one">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="panelheading">
                            <h3 class="panel-title">Lease Registration</h3>
                        </div>
                        <div class="panel-body" style="background-color: #FAFAFA;">
                            <div class="col-sm-6">
                                <fieldset id="account">
                                    <legend>Customer Details</legend>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Customer NIC:</label>
                                        <div class="form-inline required">
                                            <input type="text" name="cus_nic" id="customer_nic" value="<?php echo $cus_nic; ?>" placeholder="Customer NIC" class="form-control" required style="width: 85%;" maxlength="10"/>
                                            <button type="button" id="cviewbuttons" class="btn btn" onclick="searchCustomerforLease();">Search</button>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Customer Name:</label>
                                        <input type="text" name="cus_name" readonly id="customer_name" value="<?php echo $cus_name; ?>" placeholder="Customer Name" class="form-control" required/>
                                    </div>
                                    <div class="form-inline required" style="margin-bottom: 8px;">
                                        <a href="customer_registration.php"><button type="button" id="cviewbuttons" class="btn btn">New Customer</button></a>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Upload Customer:</label>
                                        <input type="file" name="product_image[]" id="idupload" onchange="imagepreview(this);"/>
                                        <img id="imgpreview" title="Image Preview" style="width: 200px;height: 200px;">
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Upload Property:</label>
                                        <input type="file" name="product_image" required/>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-sm-6">
                                <fieldset id="account">
                                    <legend>Leasing Details</legend>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Service No:</label>
                                        <div class="form-inline required">
                                            <select name="service_code" id="scode" class="form-control" onchange="" style="width: 40%;">
                                                <option value="HOR">HOR</option>
                                                <option value="BUL">BUL</option>
                                            </select>
                                            <input type="text" name="service_no" id="sno" placeholder="Service No" class="form-control" maxlength="4" style="width: 59%;" required/>
                                        </div>
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
                                        <input type="text" name="vehicle_no" style="text-transform: uppercase;" id="v_no_code" placeholder="Ex:ME" id="input-email" class="form-control" required/>
                                        <label class="control-label" for="input-email"> - </label>
                                        <input type="text" name="vehicle_no" maxlength="4" id="v_no_num" placeholder="Ex:2558" id="input-email" class="form-control" required/>
                                        <br>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Model Year:</label>
                                        <input type="text" readonly name="model_year" id="m_year" placeholder="Model Year" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Lease Rental:</label>
                                        <input type="text" readonly name="lease_rate" id="l_rate" placeholder="Lease Rate" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Fixed Rental:</label>
                                        <input type="text" name="fixed_rate" id="f_rate" value="<?php echo $fixed_rate; ?>" placeholder="Fix Rate" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Select Period:</label>
                                        <select name="cbo_loan_duration" id="v_lease_period" class="form-control" required>
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
                                        <label class="control-label" for="input-email">Fixed Rental:</label>
                                        <input type="text" name="fixed_rate" id="f_rate" value="<?php echo $fixed_rate; ?>" placeholder="Fix Rate" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Description of the Loan:</label>
                                        <input type="text" id="lease_des" class="form-control" name="loan_description" placeholder="Description of the Loan">
                                    </div>
                                    <button type="button" class="btn btn" id="custcontinue" onclick="saveVehicleLease();">Register Lease</button>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Lease Registration Panel-->
        <?php include '../assets/include/footer.php'; ?>
    </body>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="http://bootsnipp.com/dist/scripts.min.js"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

</html>
