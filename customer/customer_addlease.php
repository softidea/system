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
        <title>Lease Registration</title>
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
        <?php require '../controller/co_load_vehicle_brands.php'; ?>

        <script>
            function showTypes(str) {
                alert(str);
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
                                        <label class="control-label" for="input-email">Customer Name:</label>
                                        <input type="text" name="cus_name" id="fname" value="<?php echo $cus_name; ?>" placeholder="Customer Name" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Customer NIC:</label>
                                        <input type="text" name="cus_nic" id="nic" value="<?php echo $cus_nic; ?>" placeholder="Customer NIC" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-inline required" style="margin-bottom: 8px;">
                                        <button type="button" id="cviewbuttons" class="btn btn">Search</button>
                                        <a href="customer_registration.php"><button type="button" id="cviewbuttons" class="btn btn">New Customer</button></a>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Upload Customer:</label>
                                        <input type="file" name="product_image" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Upload Property:</label>
                                        <input type="file" name="product_image" required/>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-sm-6">
                                <fieldset id="account"><td>
                                    <legend>Leasing Details</legend>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Select Vehicle Brand:</label>
                                        <select name="vehicle_brand" id="v_brand" class="form-control" onchange="showTypes(this.value);">
                                            <?php load_vehicle_brands(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Select Vehicle Type:</label>
                                        <select name="vehicle_type" id="v_type" class="form-control" required >
                                            <option value="0">~~Select Vehicle Type~~</option>

                                        </select>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Vehicle Number:</label>
                                        <input type="text" name="vehicle_no" id="fname" value="<?php echo $vehicle_no; ?>" placeholder="Vehicle Number" id="input-email" class="form-control" required/>
                                    </div>
                                    
                                    <div class="form-inline required" style="margin-bottom: 8px;">
                                        <button type="button" id="cviewbuttons" class="btn btn" onclick="search_Vehicle();">Search</button>
                                    </div>
                                    
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Model Year:</label>
                                        <input type="text" disabled name="model_year" id="fname" value="<?php echo $model_year; ?>" placeholder="Model Year" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Lease Rate:</label>
                                        <input type="text" disabled name="lease_rate" id="fname" value="<?php echo $lease_rate; ?>" placeholder="Lease Rate" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Fixed Rate:</label>
                                        <input type="text" name="fixed_rate" id="fname" value="<?php echo $fixed_rate; ?>" placeholder="Fix Rate" id="input-email" class="form-control" required/>
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
                                    <button type="button" class="btn btn" id="custcontinue">Register Lease</button>
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
