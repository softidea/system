<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Customer Service</title>
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
                margin-top: 25px;
            }
            #cservicebtn:hover
            {
                background-color: #004D40;
            }
            #custcontinue{
                background-color: #009688;
                color: white;
                
            }
            #custcontinue:hover{
                background-color: #004D40;
            }
        </style>
    </head>
    <body>
        <?php include 'assets/include/navigation_bar.php'; ?>


        <!--Property Panel Section-->

        <div class="container" style="margin-top: 80px;display: block;">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="panelheading">
                            <h3 class="panel-title">New Service Registration</h3>
                        </div>
                        <div class="panel-body" style="background: #FAFAFA;">
                            <div class="col-sm-6">
                                <fieldset id="account"><td>
                                    <legend>Customer Details</legend>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Reference Person:</label>
                                        <input type="text" name="fname" id="fname" value="" placeholder="Reference Person" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Select Property:</label>
                                        <select name="cbopayment" id="input-region" class="form-control" required onchange="check();">
                                            <option value=""> --- Please Select --- </option>
                                            <option value="bike">Bike</option>
                                            <option value="twheel">Three-Wheel</option>
                                            <option value="land">Land</option>
                                        </select>
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
                                <div id="leasepanel">
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
                                            <label class="control-label" for="input-email">Fix Rate:</label>
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
                                        <button type="button" class="btn btn" id="custcontinue" onclick="">Continue</button>
                                    </fieldset>
                                </div>

                                <!--Property Land Panel-->
                                <div id="landpanel" style="display: none;">
                                    <fieldset id="account"><td>
                                        <legend>Land Pawning Details</legend>
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Deed Number:</label>
                                            <input type="text" name="fname" id="fname" value="" placeholder="Deed Number" id="input-email" class="form-control" required/>
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Registration Year:</label>
                                            <input type="text" name="fname" id="fname" value="" placeholder="Registration Year" id="input-email" class="form-control" required/>
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
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Pawn Rate:</label>
                                            <input type="text" disabled name="fname" id="fname" value="" placeholder="Pawn Rate" id="input-email" class="form-control" required/>
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label" for="input-email">Fixed Rate:</label>
                                            <input type="text" name="fname" id="fname" value="" placeholder="Fixed Rate" id="input-email" class="form-control" required/>
                                        </div>

                                        <button type="button" class="btn btn" id="custcontinue" onclick="">Update</button>
                                        
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
        <!--Customer Service Loader-->

    </div>
</div>
</div>
</div>
</div>
<!--Customer Service Panel Ended-->


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
                    <button type="button" id="cviewbuttons" class="btn btn">Exiting Customer</button>
                </div>
                <ul>
                    <li><p style="margin-top: 12px;">New Customer Option can be Used to Create new Customer Account</p></li>
                    <li><p>Exiting Customer Option can be used to add services to currently registered customers in the company</p></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" 
                        class="btn btn-default" data-dismiss="modal">
                    Close</button>
            </div>
        </div
    </div>
</div>
</div>

<!--Popup Pane of Customers-->

<?php include 'assets/include/footer.php';?>

</body>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="http://bootsnipp.com/dist/scripts.min.js"></script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
                                                                function check()
                                                                {
                                                                    var property = document.getElementById('input-region').value;
                                                                    if (property == 'bike')
                                                                    {
                                                                        alert("Bike");
                                                                        document.getElementById('landpanel').style.display = 'none';
                                                                        document.getElementById('leasepanel').style.display = 'block';
                                                                    }
                                                                    else if (property == 'twheel')
                                                                    {
                                                                        alert("Three-Wheel");
                                                                        document.getElementById('landpanel').style.display = 'none';
                                                                        document.getElementById('leasepanel').style.display = 'block';
                                                                    }
                                                                    else if (property == 'land')
                                                                    {
                                                                        alert("Land");
                                                                        document.getElementById('leasepanel').style.display = 'none';
                                                                        document.getElementById('landpanel').style.display = 'block';
                                                                    }
                                                                }
</script>
</html>
