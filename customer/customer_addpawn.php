<!DOCTYPE html>
<html>
    <!--Variable Declaration-->
    <?php
    $cus_name="";
    $cus_nic="";
    $deed_no="";
    $reg_date="";
    $cbo_period="";
    $pawn_rate="";
    $fixed_rate="";
    ?>
    <!--Variable Declaration-->s
    <head>
        <meta charset="UTF-8">
        <title>Land Pawning</title>
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
    </style>
</head>
<body>
    <?php include '../assets/include/navigation_bar.php'; ?>

    <!--Lease Registration Panel-->
    <div class="container" style="margin-top: 80px;display: block;" id="one">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading" id="panelheading">
                        <h3 class="panel-title">Land Pawning Registration</h3>
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
                                <legend>Land Pawning Details</legend>
                                <div class="form-group required">
                                    <label class="control-label" for="input-email">Deed Number:</label>
                                    <input type="text" name="deed_no" id="deed" value="<?php echo $deed_no; ?>" placeholder="Deed Number" id="input-email" class="form-control" required/>
                                </div>
                                <div class="form-group required">
                                    <label class="control-label" for="input-email">Registration Date:</label>
                                    <input type="date" name="reg_date" id="regdate" value="<?php echo $reg_date; ?>" placeholder="Registration Date" id="input-email" class="form-control" required/>
                                </div>
                                <div class="form-group required">
                                    <label class="control-label" for="input-email">Select Period:</label>
                                    <select name="cbo_period" id="input-region" class="form-control" required>
                                        <option value=""> --- Please Select --- </option>
                                        <option>1 Year</option>
                                        <option>2 Year</option>
                                        <option>3 Year</option>
                                        <option>4 Year</option>
                                        <option>5 Year</option>
                                    </select>
                                </div>
                                <div class="form-group required">
                                    <label class="control-label" for="input-email">Pawn Rate:</label>
                                    <input type="text" disabled name="pawn_rate" id="pawnrate" value="<?php echo $pawn_rate; ?>" placeholder="Pawn Rate" id="input-email" class="form-control" required/>
                                </div>
                                <div class="form-group required">
                                    <label class="control-label" for="input-email">Fixed Rate:</label>
                                    <input type="text" name="fixed_rate" id="fixedrate" value="<?php echo $fixed_rate; ?>" placeholder="Fixed Rate" id="input-email" class="form-control" required/>
                                </div>
                                <button type="button" class="btn btn" id="custcontinue">Register Pawn</button>
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
