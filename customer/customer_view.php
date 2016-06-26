<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Customer Information</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,700,600italic,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <style>
            body
            {
                font-family: 'Source Sans Pro', sans-serif;
            }
            .modal-backdrop {
                z-index: -1;
            }
            ul {
                list-style-type: square;
                list-style-position: outside;
                list-style-image: none;
            }
            #cviewbuttons
            {
                background-color: #009688;
                color: white;
                margin-top: 25px;
            }
            #cviewbuttons:hover
            {
                background-color: #004D40;
            }
            #panelheading
            {
                background: #009688;
                color: white;          
            }
            #cservicebtn
            {
                background-color: #009688;
                color: white;
            }
            #cservicebtn:hover
            {
                background-color: #004D40;
            }
        </style>
    </head>
    <body>
        <?php include 'assets/include/navigation_bar.php'; ?>
        <!--Customer Panel Section-->
        <div class="container" style="margin-top: 80px;display: block;" id="one">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="panelheading">
                            <h3 class="panel-title">Customer Information</h3>
                        </div>
                        <div class="panel-body" style="background-color: #FAFAFA;">
                            <div class="col-sm-6">
                                <fieldset id="account">
                                    <legend>Search Option</legend>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Search by:</label>
                                        <select name="cbopayment" id="input-search-option" class="form-control" required onchange="setServiceOptionPanel();">
                                            <option value=""> --- Please Select --- </option>
                                            <option value="cname">Customer Name</option>
                                            <option value="tp">Phone Number</option>
                                            <option value="serviceno">Service Number</option>
                                        </select>
                                    </div>
                                </fieldset>

                            </div>
                            <div class="col-sm-6">
                                <div id="searchOptionPanel">
                                    <fieldset id="account">
                                        <legend>Service Option</legend>
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Search by:</label>
                                            <select name="cbopayment" id="cboservice" class="form-control" required onchange="check();">
                                                <option value=""> --- Please Select --- </option>
                                                <option value="bike">Motor Bike</option>
                                                <option value="twheel">Three-Wheel</option>
                                                <option value="land">Land</option>
                                            </select>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>

                            <div class="col-sm-6">

                                <div class="form-group required">
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Search Here:</label>
                                        <input type="text" name="fname" id="fname" value="" placeholder="Search Here" id="input-email" class="form-control" required/>
                                    </div>
                                </div>
                                <div style="padding-bottom: 8px;">
                                    <button type="button" id="cviewbuttons" class="btn btn">Search</button>
                                </div>
                            </div>



                            <div class="col-sm-12">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Full Name</th>
                                            <th>NIC</th>
                                            <th>Permanent Address</th>
                                            <th>Phone Number</th>
                                            <th>No Services</th>
                                            <th>No Settled</th>
                                            <th style="text-align: center;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Malinda</td>
                                            <td>931781258V</td>
                                            <td>Kandy</td>
                                            <td>0774585256</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td style="text-align: center;"><button type="button" id="cviewbuttons" class="btn btn">View More</button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Malinda</td>
                                            <td>931781258V</td>
                                            <td>Kandy</td>
                                            <td>0774585256</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td style="text-align: center;"><button type="button" id="cviewbuttons" class="btn btn">View More</button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Malinda</td>
                                            <td>931781258V</td>
                                            <td>Kandy</td>
                                            <td>0774585256</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td style="text-align: center;"><button type="button" id="cviewbuttons" class="btn btn">View More</button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Malinda</td>
                                            <td>931781258V</td>
                                            <td>Kandy</td>
                                            <td>0774585256</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td style="text-align: center;"><button type="button" id="cviewbuttons" class="btn btn">View More</button></td>
                                        </tr>
                                    </tbody>
                                </table>    
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
</div>
</div>
<!--Customer Panel Section-->

<?php include 'assets/include/footer.php';?>
</body>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="http://bootsnipp.com/dist/scripts.min.js"></script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
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
