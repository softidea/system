<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Services View</title>
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
        <style type="text/css">
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
                background-color: #004D40;
                color: white;

            }
            #cviewbuttons:hover
            {
                background-color: #009688;
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
            #custcontinue
            {
                background-color: #004D40;
                color: white;
                float: right;
            }
            #custcontinue:hover
            {
                background-color: #009688;
            }
            //.thcaption{text-align: center;}
            #backregister
            {
                background-color: #004D40;
                color: white;
                float: right;
                margin-right: 12px;
            }
            #backregister:hover
            {
                background-color: #009688;
            }
        </style>
    </head>
    <body>
        <?php include 'assets/include/navigation_bar.php'; ?>

        <!--Service View Main Panel-->
        <div class="container" style="margin-top: 80px;display: block;" id="one">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="panelheading">
                            <h3 class="panel-title">Customer Service Information</h3>
                        </div>
                        <div class="panel-body" style="background-color: #FAFAFA;">
                            <div class="col-sm-6">
                                <fieldset id="account">
                                    <legend>Search Option-01</legend>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Select Customer Option:</label>
                                        <select name="cbopayment" id="cboservice" class="form-control" required onchange="check();">
                                            <option value=""> --- Please Select --- </option>
                                            <option value="bike">Search by Name</option>
                                            <option value="twheel">Search by NIC</option>
                                            <option value="land">Search by Phone Number</option>
                                        </select>
                                    </div>
                                    <div class="form-group required">
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Search Customer:</label>
                                            <input type="text"  name="customersearch" id="fname" value="" placeholder="Search Customer Here" id="input-email" class="form-control" required/>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-sm-6">
                                <div id="searchOptionPanel">
                                    <fieldset id="account">
                                        <legend>Search Option-02</legend>
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Search by Service Type:</label>
                                            <select name="cbopayment" id="cboservice" class="form-control" required onchange="check();">
                                                <option value=""> --- Please Select --- </option>
                                                <option value="bike">Motor Bike Leasing</option>
                                                <option value="twheel">Three-Wheel Leasing</option>
                                                <option value="land">Land Pawning</option>
                                            </select>
                                        </div>
                                        <div class="form-group required">
                                            <div class="form-group required">
                                                <label class="control-label" for="input-email">Search Service:</label>
                                                <input type="text" name="fname" id="fname" value="" placeholder="Enter Service Here" id="input-email" class="form-control" required/>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <!--Service View Main Panel-->

                            <!--Customer Service Loader-->
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="col-sm-6">
                                            <div class="form-group required">
                                                <div class="form-group required">
                                                    <label class="control-label" for="input-email">Service No:</label>
                                                    <input type="text" name="fname" id="fname" value="" placeholder="Service No" id="input-email" class="form-control" required/>
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <div class="form-group required">
                                                    <label class="control-label" for="input-email">Service Date:</label>
                                                    <input type="text" name="fname" id="fname" value="" placeholder="Service Date" id="input-email" class="form-control" required/>
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <div class="form-group required">
                                                    <label class="control-label" for="input-email">Service:</label>
                                                    <input type="text" name="fname" id="fname" value="" placeholder="Service" id="input-email" class="form-control" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group required">
                                                <div class="form-group required">
                                                    <label class="control-label" for="input-email">Service Rental:</label>
                                                    <input type="text" name="fname" id="fname" value="" placeholder="Service Rental" id="input-email" class="form-control" required/>
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <div class="form-group required">
                                                    <label class="control-label" for="input-email">Service Period:</label>
                                                    <input type="text" name="fname" id="fname" value="" placeholder="Service Period" id="input-email" class="form-control" required/>
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <div class="form-group required">
                                                    <label class="control-label" for="input-email">Installment:</label>
                                                    <input type="text" name="fname" id="fname" value="" placeholder="Installment" id="input-email" class="form-control" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Service No</th>
                                                        <th>Reg Date</th>
                                                        <th>Service</th>
                                                        <th>Service Rental</th>
                                                        <th>Service Period</th>
                                                        <th>Installment</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th><input type="radio" name="check"></th>
                                                        <th scope="row">1</th>
                                                        <td>2016/01/10</td>
                                                        <td>Vehicle Lease</td>
                                                        <td>40000.00</td>
                                                        <td>18 Months</td>
                                                        <td>2000.00</td>
                                                        <td>Active</td>
                                                    </tr>
                                                    <tr>
                                                        <th><input type="radio" name="check"></th>
                                                        <th scope="row">1</th>
                                                        <td>2016/01/10</td>
                                                        <td>Vehicle Lease</td>
                                                        <td>40000.00</td>
                                                        <td>18 Months</td>
                                                        <td>2000.00</td>
                                                        <td>Active</td>
                                                    </tr>
                                                    <tr>
                                                        <th><input type="radio" name="check"></th>
                                                        <th scope="row">1</th>
                                                        <td>2016/01/10</td>
                                                        <td>Vehicle Lease</td>
                                                        <td>40000.00</td>
                                                        <td>18 Months</td>
                                                        <td>2000.00</td>
                                                        <td>Active</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group required">
                                                <div class="form-group required">
                                                    <label class="control-label" for="input-email">Total Paid Installments:</label>
                                                    <input type="text" disabled name="fname" id="fname" value="" placeholder="Total Due Installments" id="input-email" class="form-control" required/>
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <div class="form-group required">
                                                    <label class="control-label" for="input-email">Total Due Installments:</label>
                                                    <input type="text" disabled name="fname" id="fname" value="" placeholder="Total Due Installments" id="input-email" class="form-control" required/>
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <div class="form-group required">
                                                    <label class="control-label" for="input-email">Total Customer Due:</label>
                                                    <input type="text" disabled name="fname" id="fname" value="" placeholder="Total Customer Due" id="input-email" class="form-control" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">

                                            <div class="form-group required">
                                                <div class="form-group required">
                                                    <label class="control-label" for="input-email">Total Company Due:</label>
                                                    <input type="text" disabled name="fname" id="fname" value="" placeholder="Total Company Due" id="input-email" class="form-control" required/>
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <div class="form-group required">
                                                    <label class="control-label" for="input-email">Total Payable:</label>
                                                    <input type="text" disabled name="fname" id="fname" value="" placeholder="Total Payable" id="input-email" class="form-control" required/>
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <div class="form-group required">
                                                    <label class="control-label" for="input-email">Next Installment:</label>
                                                    <input type="text" disabled name="fname" id="fname" value="" placeholder="Next Installment" id="input-email" class="form-control" required/>
                                                </div>
                                            </div>
                                            <div class="form-inline col-sm-12">
                                                <div class="form" style="float: right;">

                                                    <button type="submit"  class="btn btn" id="cservicebtn">Print</button>
                                                    <button type="submit"  class="btn btn" id="cservicebtn">Add Installment</button>
                                                    <button type="submit"  class="btn btn" id="cservicebtn">View Installment</button>
                                                    <button type="submit"  class="btn btn" id="cservicebtn">Add New Lease</button>
                                             
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
        </div>
        <!--Customer Service Loader-->

        <?php include 'assets/include/footer.php';?>
    </body>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="http://bootsnipp.com/dist/scripts.min.js"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</html>
