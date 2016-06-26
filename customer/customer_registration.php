<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
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
                background-color: #004D40;
                color: white;
                margin-top: 25px;
            }
            #cviewbuttons:hover
            {
                background-color: #009688;
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
                            <h3 class="panel-title">Customer Registration</h3>
                        </div>
                        <div class="panel-body" style="background-color: #FAFAFA;">
                            <div class="col-sm-6">
                                <fieldset id="account">
                                    <legend>01.Customer Personal Details</legend>
                                    <label class="radio-inline"><input type="radio" name="optradio">: Mr</label>
                                    <label class="radio-inline"><input type="radio" name="optradio">: Mrs</label>
                                    <label class="radio-inline"><input type="radio" name="optradio">: Miss</label>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Full Name:</label>
                                        <input type="text" name="fname" id="fname" value="" placeholder="Full Name" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Name with Initials:</label>
                                        <input type="text" name="lname" value="" placeholder="Name with Initials" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Permanent Address :</label>
                                        <input type="text" name="email" value="" placeholder="E-mail" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Telephone:</label>
                                        <input type="text" name="tp1" value="" placeholder="Telephone" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">NIC Number:</label>
                                        <input type="text" name="tp1" value="" placeholder="National Identity Card Number" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Date of Birth:</label>
                                        <input type="text" name="tp1" value="" placeholder="Date of Birth" id="input-email" class="form-control" required/>
                                    </div>

                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Married Status:</label>
                                        <input type="text" name="tp1" value="" placeholder="Married Status" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Have any Dependencies:</label>
                                        <input type="text" name="tp1" value="" placeholder="Have any Dependencies" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Employment/Position:</label>
                                        <input type="text" name="tp1" value="" placeholder="Employment/Position" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Monthly Salary/Net Income:</label>
                                        <input type="text" name="tp1" value="" placeholder="Monthly Salary/Net Income" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Employer Name:</label>
                                        <input type="text" name="tp1" value="" placeholder="Employer Name" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Employer Address:</label>
                                        <input type="text" name="tp1" value="" placeholder="Employer Address" id="input-email" class="form-control" required/>
                                    </div>
                                </fieldset>
                                <fieldset id="account">
                                    <legend>03.Customer Better Half Details</legend>

                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Full Name:</label>
                                        <input type="text" name="fname" id="fname" value="" placeholder="Full Name" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Date of Birth:</label>
                                        <input type="text" name="tp1" value="" placeholder="Date of Birth" id="input-email" class="form-control" required/>
                                    </div>

                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Employment/Position:</label>
                                        <input type="text" name="tp1" value="" placeholder="Employment/Position" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Monthly Salary/Net Income:</label>
                                        <input type="text" name="tp1" value="" placeholder="Monthly Salary/Net Income" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Employer Name:</label>
                                        <input type="text" name="tp1" value="" placeholder="Employer Name" id="input-email" class="form-control" required/>
                                    </div>

                                </fieldset>
                            </div>

                            <!--Guranter Details-->
                            <div class="col-sm-6">
                                <fieldset id="account">
                                    <legend>02.Guarantor Personal Details</legend>
                                    <label class="radio-inline"><input type="radio" name="optradio">: Mr</label>
                                    <label class="radio-inline"><input type="radio" name="optradio">: Mrs</label>
                                    <label class="radio-inline"><input type="radio" name="optradio">: Miss</label>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Full Name:</label>
                                        <input type="text" name="fname" id="fname" value="" placeholder="Full Name" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Name with Initials:</label>
                                        <input type="text" name="lname" value="" placeholder="Name with Initials" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Permanent Address :</label>
                                        <input type="text" name="email" value="" placeholder="E-mail" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Telephone:</label>
                                        <input type="text" name="tp1" value="" placeholder="Telephone" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Date of Birth:</label>
                                        <input type="text" name="tp1" value="" placeholder="Date of Birth" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Married Status:</label>
                                        <input type="text" name="tp1" value="" placeholder="Married Status" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">NIC Number:</label>
                                        <input type="text" name="tp1" value="" placeholder="National Identity Card Number" id="input-email" class="form-control" required/>
                                    </div>

                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Have any Dependencies:</label>
                                        <input type="text" name="tp1" value="" placeholder="Have any Dependencies" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Employment/Position:</label>
                                        <input type="text" name="tp1" value="" placeholder="Employment/Position" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Monthly Salary/Net Income:</label>
                                        <input type="text" name="tp1" value="" placeholder="Monthly Salary/Net Income" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Employer Name:</label>
                                        <input type="text" name="tp1" value="" placeholder="Employer Name" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Employer Address:</label>
                                        <input type="text" name="tp1" value="" placeholder="Employer Address" id="input-email" class="form-control" required/>
                                    </div>
                                </fieldset>
                                <fieldset id="account">
                                    <legend>04.Guarantor Better Half Details</legend>

                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Full Name:</label>
                                        <input type="text" name="fname" id="fname" value="" placeholder="Full Name" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Date of Birth:</label>
                                        <input type="text" name="tp1" value="" placeholder="Date of Birth" id="input-email" class="form-control" required/>
                                    </div>

                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Employment/Position:</label>
                                        <input type="text" name="tp1" value="" placeholder="Employment/Position" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Monthly Salary/Net Income:</label>
                                        <input type="text" name="tp1" value="" placeholder="Monthly Salary/Net Income" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Employer Name:</label>
                                        <input type="text" name="tp1" value="" placeholder="Employer Name" id="input-email" class="form-control" required/>
                                    </div>

                                </fieldset>
                            </div>
                            <!--Guranter Details-->
                            <div class="col-md-12">
                                <fieldset id="account">
                                    <legend>05.Description of the Loan:</legend>
                                    <div class="form-group required">

                                        <textarea id="input-email" class="form-control" required placeholder="Description of the Loan">
                                        
                                        </textarea>
                                    </div>
                                </fieldset>
                                <div class="form-group required">
                                    <label class="control-label" for="input-email">Duration of Loan Payment:</label>
                                    <input type="text" name="tp1" value="" placeholder="Duration of Loan Payment" id="input-email" class="form-control" required/>
                                </div>
                                <fieldset id="account">
                                    <legend>05.Real Property</legend>
                                    <div class="form-group required">
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
                                                    <td>House</td>
                                                    <td><input type="text" name="pos" value="" placeholder="Position" id="input-email" class="form-control" required/></td>
                                                    <td><input type="text" name="pos" value="" placeholder="Size" id="input-email" class="form-control" required/></td>
                                                    <td><input type="text" name="pos" value="" placeholder="Value" id="input-email" class="form-control" required/></td>
                                                    <td><input type="text" name="pos" value="" placeholder="Is Pawned" id="input-email" class="form-control" required/></td>
                                                    <td><input type="text" name="pos" value="" placeholder="Pawn Getter" id="input-email" class="form-control" required/></td>
                                                </tr>
                                                <tr>
                                                    <td>Other Property</td>
                                                    <td><input type="text" name="pos" value="" placeholder="Position" id="input-email" class="form-control" required/></td>
                                                    <td><input type="text" name="pos" value="" placeholder="Size" id="input-email" class="form-control" required/></td>
                                                    <td><input type="text" name="pos" value="" placeholder="Value" id="input-email" class="form-control" required/></td>
                                                    <td><input type="text" name="pos" value="" placeholder="Is Pawned" id="input-email" class="form-control" required/></td>
                                                    <td><input type="text" name="pos" value="" placeholder="Pawn Getter" id="input-email" class="form-control" required/></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </fieldset>
                                <fieldset id="account">
                                    <legend>05.Bank Accounts</legend>
                                    <div class="form-group required">
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
                                                    <td><input type="text" name="pos" value="" placeholder="Bank Name & Branch" id="input-email" class="form-control" required/></td>
                                                    <td><input type="text" name="pos" value="" placeholder="Facilities" id="input-email" class="form-control" required/></td>
                                                    <td><input type="text" name="pos" value="" placeholder="Account Number" id="input-email" class="form-control" required/></td>
                                                </tr>
                                                <tr>
                                                    <td>Mobile Account</td>
                                                    <td><input type="text" name="pos" value="" placeholder="Bank Name & Branch" id="input-email" class="form-control" required/></td>
                                                    <td><input type="text" name="pos" value="" placeholder="Facilities" id="input-email" class="form-control" required/></td>
                                                    <td><input type="text" name="pos" value="" placeholder="Account Number" id="input-email" class="form-control" required/></td>
                                                </tr>
                                                <tr>
                                                    <td>Daily Loan Service</td>
                                                    <td><input type="text" name="pos" value="" placeholder="Bank Name & Branch" id="input-email" class="form-control" required/></td>
                                                    <td><input type="text" name="pos" value="" placeholder="Facilities" id="input-email" class="form-control" required/></td>
                                                    <td><input type="text" name="pos" value="" placeholder="Account Number" id="input-email" class="form-control" required/></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </fieldset>
                                <fieldset id="account">
                                    <legend>05.Payable Loan Amount of Applicant:</legend>
                                    <div class="form-group required">

                                        <input type="text" name="tp1" value="" placeholder="Payable Loan Amount of Applicant" id="input-email" class="form-control" required/>
                                    </div>
                                </fieldset>
                                <fieldset id="account">
                                    <legend>05.Enough Description of way to find the permanent resident of the applicant:</legend>
                                    <div class="form-group required">

                                        <textarea id="input-email" class="form-control" required placeholder="Description of the Loan">
                                        
                                        </textarea>
                                    </div>
                                </fieldset>

                            </div>
                            <div class="col-md-6">
                                <input type="text" name="tp1" value="" placeholder="Applicant Full Name" id="input-email" class="form-control" required/>
                                <label class="control-label" for="input-email">I/We confirm the above information of mine/our Correct with the Sincerely</label>   
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="tp1" value="" placeholder="Date" id="input-email" class="form-control" required/>
                                <label class="control-label" for="input-email">Date</label>   
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="tp1" value="" placeholder="Applicant Signature" id="input-email" class="form-control" required/>
                                <label class="control-label" for="input-email">Applicant Signature</label>   
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="tp1" value="" placeholder="Gurantor Signature" id="input-email" class="form-control" required/>
                                <label class="control-label" for="input-email">Gurantor Signature</label>   
                            </div>

                            <div class="col-md-12">

                                <button type="button" class="btn btn" id="custcontinue" onclick="gotosecond();">Continue</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Customer Panel Section-->

        <!--Property Panel Section-->

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
                                        <button type="button" class="btn btn" id="custcontinue" onclick="gotosecond();">Continue</button>
                                        <button type="button" class="btn btn" id="backregister" onclick="gotoone();">Back</button>
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

                                        <button type="button" class="btn btn" id="custcontinue" onclick="gotosecond();">Update</button>
                                        <button type="button" class="btn btn" id="backregister" onclick="gotoone();">Back</button>
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

        <!--Footer Section-->
        <footer class="navbar-default navbar-fixed-bottom">
            <div class="container-fluid" style="text-align: center;">
                <span>Copyright © <a href="#" id="footer-caption">Softidea Solutions - 2016</a></span>
            </div>
        </footer>
        <!--Footer Section-->


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
                            <a href="addlease"><button type="button" id="cviewbuttons" class="btn btn">Exiting Customer</button></a>
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
    //.thcaption{text-align: center;}
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
<script>
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