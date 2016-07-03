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
        <?php require '../controller/co_load_bike_rates.php'; ?>
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
                                </fieldset>
                            </div>
                            <div class="col-sm-6">
                                <fieldset id="account">
                                    <legend>Search Option 01</legend>
                                    <div class="form-group">
                                        <label class="control-label" for="input-email" id="hidecaption">Admin Options:</label>

                                        <div class="form-inline required">
                                            <button type="submit"  class="btn btn" id="cservicebtn">Add Vehicle Rate</button>
                                            <button type="submit"  class="btn btn" id="cservicebtn">Add Land Rate</button>
                                            <button type="submit"  class="btn btn" id="cservicebtn">Update Rates</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>

                            <div class="col-sm-12">
                                <div id="bike_div" style="display: block;">
                                    <table class="table table-bordered table-hover">
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
                                <div class="new_vehicle" style="display: none;">
                                    <div class="col-sm-6">
                                        <fieldset id="account">
                                            <legend>Search Option 01</legend>
                                            <div class="form-group">
                                                <label class="control-label" for="input-email" id="hidecaption">Admin Options:</label>
                                                <div class="form-inline required">
                                                   
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-inline">
                                    <button type="submit"  class="btn btn" id="cservicebtn">Save as PDF</button>
                                    <button type="submit"  class="btn btn" id="cservicebtn">Print</button>
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
                                            function checker() {

                                                var value = document.getElementById('v_cat').value;

                                                if (value == 'bike') {
                                                    document.getElementById('bike_div').style.display = "block"
                                                    document.getElementById('land_div').style.display = "none";
                                                    document.getElementById('tw_div').style.display = "none";
                                                }
                                                else if (value == 'tw') {
                                                    document.getElementById('tw_div').style.display = "block"
                                                    document.getElementById('bike_div').style.display = "none";
                                                    document.getElementById('land_div').style.display = "none";
                                                    function loadTWRates() {

                                                    }
                                                }
                                                else if (value == 'land') {
                                                    document.getElementById('bike_div').style.display = "none";
                                                    document.getElementById('tw_div').style.display = "none";
                                                    document.getElementById('land_div').style.display = "block";
                                                    function loadLandRates() {

                                                    }
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
<script type="text/javascript">

    function change_Panels() {
        alert('hello');
//        if (document.getElementById('vehicle_div').style.display = "block") {
//            document.getElementById('vehicle_div').style.display = "none"
//            document.getElementById('land_div').style.display = "block";
//        }
//        else if (document.getElementById('land_div').style.display = "block"; ) {
//            document.getElementById('land_div').style.display = "none";
//            document.getElementById('vehicle_div').style.display = "block"
//        }
    }
</script>
</html>
