<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>View Vehicle Rates</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,700,600italic,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../assets/css/customer_registration.css">
        <link rel="icon" href="favicon.ico">
        <?php include '../controller/co_load_bike_rates.php'; ?>

        <script type="text/javascript">
            function loadCustomBikeTypes(str) {
                alert('loadCustomBikeTypes');
                if (str != "" && str != "0") {
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    } else { // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function () {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("v_code_advance").innerHTML = xmlhttp.responseText;
                        }
                    }
                    xmlhttp.open("GET", "../controller/co_load_bike_advance_seacrh_rate.php?mode=" + str, true);
                    xmlhttp.send();
                }
            }
            function loadCustomBikeBrands(str) {
                alert("loadCustomBikeBrands");
                if (str != "" && str != "0") {
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    } else { // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function () {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("v_type_advance").innerHTML = xmlhttp.responseText;
                            //document.getElementById('v_type').innerHTML="<option value='newtype'>Add New Type</option>";
                        }
                    }
                    xmlhttp.open("GET", "../controller/co_load_bike_advance_seacrh_rate.php?q=" + str, true);
                    xmlhttp.send();
                }
            }
            function searchBikes() {

                var b = document.getElementById('v_brand').value;
                var t = document.getElementById('v_type').value;
                var m = document.getElementById('v_code').value;
                alert(b + " " + t + " " + m);


            }

        </script>
        <script type="text/javascript">
            function changeModel() {
                if (document.getElementById('v_code').value == "newmodel") {
                    document.getElementById('newmodel').readOnly = false;
                }
                else {
                    document.getElementById('newmodel').readOnly = true;
                }
            }
            function showTypes(str) {
                if (document.getElementById('v_brand').value == "newbrand") {
                    document.getElementById('newbrand').readOnly = false;
                } else {
                    document.getElementById('newbrand').readOnly = true;
                    document.getElementById('newbrand').value="";
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
                            //document.getElementById('v_type').innerHTML="<option value='newtype'>Add New Type</option>";
                        }
                    }
                    xmlhttp.open("GET", "../controller/co_load_bike_type_custom.php?q=" + str, true);
                    xmlhttp.send();
                }

            }

        </script>
        <script type="text/javascript">
            function showVehicleMods(str) {
                if (document.getElementById('v_type').value == "newtype") {
                    alert(document.getElementById('v_type').value);
                    document.getElementById('newtype').readOnly = false;
                } else {
                    document.getElementById('newtype').readOnly = true;
                    document.getElementById('newtype').value="";
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
                    xmlhttp.open("GET", "../controller/co_load_bike_type_custom.php?mode=" + str, true);
                    xmlhttp.send();
                }
            }
        </script>
        <script type="text/javascript">
            function loadTWTypes(str) {
                if (str != "" && str != "0") {
                    alert(str);
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    }
                    else 
                    { // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function () {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            alert(xmlhttp.responseText);
                            document.getElementById("tw_code").innerHTML = xmlhttp.responseText;
                        }
                    }
                    xmlhttp.open("GET", "../controller/co_load_bike_advance_seacrh_rate.php?tw_mode=" + str, true);
                    xmlhttp.send();
                }
            }
            function enablenewtwmodel(){
                if(document.getElementById('tw_code').value=="new_tw_model"){
                    document.getElementById('new_tw_model').readOnly=false;
                }else{
                    document.getElementById('new_tw_model').value="";
                    document.getElementById('new_tw_model').readOnly=true;
                }
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
                            <h3 class="panel-title">Vehicle and Land Rates</h3>
                        </div>
                        <div class="panel-body" style="background-color: #FAFAFA;">
                            <div class="col-sm-6">
                                <fieldset id="account">
                                    <legend>Search Option 01</legend>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Search by Category:</label>
                                        <select name="v_cat" id="v_cat" class="form-control" onchange="checker();">
                                            <option value="bike">Bikes</option>
                                            <option value="tw">Three-Wheels</option>
                                            <option value="land">Lands</option>
                                        </select>
                                    </div>
                                    <div id="advance_bike_panel" style="display: none;">
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Brand:</label>
                                            <select name="vbrand_advance" id="v_brand_advanced" class="form-control" onchange="loadCustomBikeBrands(this.value);">
                                                <option value="0">~~Select Brand~~</option>
                                                <option value="1">Bajaj</option>
                                                <option value="2">Hero Honda</option>
                                                <option value="3">TVS</option>
                                            </select>
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Select Type:</label>
                                            <select name="vtype" id="v_type_advance" class="form-control" onchange="loadCustomBikeTypes(this.value);">
                                                <option>~~Select Type~~</option> 
                                            </select>
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Select Model:</label>
                                            <select name="vcode" id="v_code_advance" class="form-control" onchange=";">
                                                <option>~~Select Model~~</option>
                                            </select>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-sm-6">
                                <fieldset id="account">
                                    <legend style="color: #FAFAFA;">Search Option 02</legend>
                                    <div class="form-group">
                                        <label class="control-label" for="input-email" id="hidecaption">Admin Options:</label>
                                        <div class="form-inline required">
                                            <button type="submit"  class="btn btn" id="cservicebtn">Add Vehicle Rate</button>
                                            <button type="submit"  class="btn btn" id="cservicebtn">Add Land Rate</button>
                                            <button type="submit"  class="btn btn" id="cservicebtn">Update Rates</button>
                                            <button type="submit"  class="btn btn" id="cservicebtn">Print Report</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>

                            <div class="col-sm-12">
                                <div id="bike_div" style="display: block;background: white;">
                                    <table class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Model Year</th>
                                                <th>Model</th>
                                                <th>Type</th>
                                                <th>Min Value</th>
                                                <th>Max Value</th>
                                            </tr>
                                        </thead>
                                        <tbody id="bike_tbody">
                                            <?php loadBikeRates(); ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="tw_div" style="display: none;">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>TW_Id</th>
                                                <th>Model Year</th>
                                                <th>Model</th>
                                                <th>Type</th>
                                                <th>Min Value</th>
                                                <th>Max Value</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tw_tbody">
                                            <?php loadTwRates(); ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="land_div" style="display: none;">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Term Year</th>
                                                <th>Amount</th>
                                                <th>Interest</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php loadLandRates(); ?>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="new_vehicle" style="display: block;">
                                    <div class="col-sm-6">
                                        <fieldset id="account">
                                            <legend>New Bike Rate Registration</legend>
                                            <div class="form-group required">
                                                <label class="control-label" for="input-email">Model Year:</label>
                                                <input type="text" name="modelyear"  placeholder="Model Year" class="form-control" />
                                            </div>
                                            <div class="form-group required">
                                                <label class="control-label" for="input-email">Brand:</label>
                                                <select name="vbrand" id="v_brand" class="form-control" onchange="showTypes(this.value);">
                                                    <?php loadBikeBrands(); ?>
                                                </select>
                                            </div>
                                            <div class="form-group required">
                                                <label class="control-label" for="input-email">New Brand:</label>
                                                <input type="text" readonly id="newbrand" placeholder="New Brand" class="form-control"/>
                                            </div>
                                            <div class="form-group required">
                                                <label class="control-label" for="input-email">Select Type:</label>
                                                <select name="vtype" id="v_type" class="form-control" onchange="showVehicleMods(this.value);">
                                                    <option>~~Select Type~~</option> 
                                                </select>
                                            </div>
                                            <div class="form-group required">
                                                <label class="control-label" for="input-email">New Type:</label>
                                                <input type="text" readonly id="newtype" value="" placeholder="New Type" class="form-control" style="text-transform: uppercase;"/>
                                            </div>
                                            <div class="form-group required">
                                                <label class="control-label" for="input-email">Select Model:</label>
                                                <select name="vcode" id="v_code" class="form-control" onchange="changeModel();">
                                                    <option>~~Select Model~~</option>

                                                </select>
                                            </div>
                                            <div class="form-group required">
                                                <label class="control-label" for="input-email">New Model:</label>
                                                <input type="text" readonly id="newmodel" placeholder="New Model" class="form-control" style="text-transform: uppercase;"/>
                                            </div>
                                            <div class="form-group required">
                                                <label class="control-label" for="input-email">Min Value:</label>
                                                <input type="text" name="minval" placeholder="Min Value" class="form-control" />
                                            </div>
                                            <div class="form-group required">
                                                <label class="control-label" for="input-email">Max Value:</label>
                                                <input type="text" name="maxval" placeholder="Max Value" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <button type="submit"  class="btn btn" id="cservicebtn">Save Rate</button>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="new_vehicle" style="display: block;">
                                    <div class="col-sm-6">
                                        <fieldset id="account">
                                            <legend>New Three-Wheel Rate Registration</legend>
                                            <div class="form-group required">
                                                <label class="control-label" for="input-email">Select Type:</label>
                                                <select name="vtype" id="tw_type" class="form-control" onchange="loadTWTypes(this.value);">
                                                    <option value="0">~~Select Type~~</option>
                                                    <option value="2">2 Stroke</option>
                                                    <option value="4">4 Stroke</option>
                                                </select>
                                            </div>
                                            <div class="form-group required">
                                                <label class="control-label" for="input-email">Select Model:</label>
                                                <select name="vcode" id="tw_code" class="form-control" onchange="enablenewtwmodel();">
                                                    <option>~~Select Model~~</option>

                                                </select>
                                            </div>
                                            <div class="form-group required">
                                                <label class="control-label" for="input-email">New Model:</label>
                                                <input type="text" readonly id="new_tw_model" placeholder="New Model" class="form-control" style="text-transform: uppercase;"/>
                                            </div>
                                            <div class="form-group required">
                                                <label class="control-label" for="input-email">Min Value:</label>
                                                <input type="text" name="minval" placeholder="Min Value" class="form-control" />
                                            </div>
                                            <div class="form-group required">
                                                <label class="control-label" for="input-email">Max Value:</label>
                                                <input type="text" name="maxval" placeholder="Max Value" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <button type="submit"  class="btn btn" id="cservicebtn">Save Rate</button>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Customer Panel Section-->

    <?php include '../assets/include/footer.php'; ?>
</body>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="http://bootsnipp.com/dist/scripts.min.js"></script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<style>
    #hidecaption{
        color: #FAFAFA;
    }
    body{
        -webkit-user-select: none;  /* Chrome all / Safari all */
        -moz-user-select: none;     /* Firefox all */
        -ms-user-select: none;      /* IE 10+ */
        user-select: none;
    }
</style>
<script type="text/javascript">
                                                    function Enable_Form_Fields() {
                                                        if (document.getElementById('v_brand').value = "newbrand") {
                                                            document.getElementById('v_type').selectedIndex = 0;
                                                        }
                                                    }
</script>
<script type="text/javascript">

    function checker() {

        var value = document.getElementById('v_cat').value;

        if (value == 'bike') {
            document.getElementById('land_div').style.display = "none";
            document.getElementById('tw_div').style.display = "none";
            document.getElementById('bike_div').style.display = "block"
            document.getElementById('advance_bike_panel').style.display = "none";

        }
        else if (value == 'tw') {
            document.getElementById('advance_bike_panel').style.display = "none";
            document.getElementById('bike_div').style.display = "none";
            document.getElementById('land_div').style.display = "none";
            document.getElementById('tw_div').style.display = "block";

        }
        else if (value == 'land') {
            document.getElementById('bike_div').style.display = "none";
            document.getElementById('tw_div').style.display = "none";
            document.getElementById('advance_bike_panel').style.display = "none";
            document.getElementById('land_div').style.display = "block";

        }
    }
    function setServiceOptionPanel()
    {
        var sp_value = document.getElementById('input-search-option').value;
        if (sp_value == 'serviceno')
        {
            document.getElementById('cboservice').disabled = false;

            alert(sp_value);
        }
        else if (sp_value == 'cname' || sp_value == 'tp')
        {
            document.getElementById('cboservice').selectedIndex = "0";
            document.getElementById('cboservice').disabled = true;
            alert(sp_value);
        }
    }
   

</script>
</html>
