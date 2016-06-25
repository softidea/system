<!DOCTYPE html>
<html>
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
                background-color: #009688;
                color: white;

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
                                        <input type="text" name="fname" id="fname" value="" placeholder="Customer Name" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Customer NIC:</label>
                                        <input type="text" name="fname" id="fname" value="" placeholder="Customer NIC" id="input-email" class="form-control" required/>

                                    </div>
                                    <div class="form-inline required" style="margin-bottom: 8px;">
                                        <button type="button" id="cviewbuttons" class="btn btn">Search</button>
                                        <button type="button" id="cviewbuttons" class="btn btn">New Customer</button>
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
                                        <label class="control-label" for="input-email">Vehicle Number:</label>
                                        <input type="text" name="fname" id="fname" value="" placeholder="Vehicle Number" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Model Year:</label>
                                        <input type="text" disabled name="fname" id="fname" value="" placeholder="Model Year" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Lease Rate:</label>
                                        <input type="text" disabled name="fname" id="fname" value="" placeholder="Lease Rate" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Fixed Rate:</label>
                                        <input type="text" name="fname" id="fname" value="" placeholder="Fix Rate" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Select Period:</label>
                                        <select name="cbopayment" id="input-region" class="form-control" required>
                                            <option value=""> --- Please Select --- </option>
                                            <option>6 Months</option>
                                            <option>1 Year</option>
                                            <option>2 Year</option>
                                            <option>3 Year</option>
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
        <?php include 'assets/include/footer.php';?>
    </body>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="http://bootsnipp.com/dist/scripts.min.js"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</html>
