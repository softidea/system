<!DOCTYPE html>
<?php
session_start();

if (!isset($_SESSION['user_email'])) {
    header("Location:../index.php");
}
?>
<html lang="en">
    <?php
    $cus_fullname = "";
    $cus_initialname = "";
    $cus_address = "";
    $cus_tp = "";
    $cus_nic = "";
    $cus_dob = "";
    $cus_ms = "";
    $cus_dependdency = "";
    $cus_position = "";
    $cus_monthly_salary = "";
    $cus_emp_name = "";
    $cus_emp_name = "";

    $cus_hhalf_name = "";
    $cus_bhalf_dob = "";
    $cus_bhalf_position = "";
    $cus_bhalf_monthly_salary = "";
    $cus_bhalf_emp_name = "";

    $gua_fullname = "";
    $gua_initial_name = "";
    $gua_address = "";
    $gua_tp = "";
    $gua_dob = "";
    $gua_ms = "";
    $gua_nic = "";
    $gua_dependency = "";
    $gua_position = "";
    $gua_monthly_salary = "";
    $gua_emp_name = "";
    $gua_emp_address = "";

    $gua_bhalf_fullname="";
    $gua_bhalf_dob="";
    $gua_bhalf_position="";
    $gua_bhalf_monthly_salary="";
    $gua_bhalf_emp_name="";

    $real_prp_house_position = "";
    $real_prp_house_size = "";
    $real_prp_house_value = "";
    $real_prp_house_pawned = "";
    $real_prp_house_pawn_getter = "";

    $real_prp_other_position = "";
    $real_prp_other_size = "";
    $real_prp_other_value = "";
    $real_prp_other_pawned = "";
    $real_prp_other_pawn_getter = "";

    $cus_savings_bank_branch = "";
    $cus_savings_facilities = "";
    $cus_savings_account_no = "";
    $cus_mobile_bank_branch = "";
    $cus_mobile_facilities = "";
    $cus_mobile_account_no = "";

    $cus_daily_loan_bank_branch = "";
    $cus_daily_loan_facilities = "";
    $cus_daily_loan_account_no = "";

    $payable_loan_amount = "";
    $loan_description = "";

    $reg_date = "";
    ?>
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
        <link rel="stylesheet" type="text/css" href="../assets/css/customer_registration.css" >
    </head>
    <body>

        <?php include '../assets/include/navigation_bar.php'; ?>

        <!--Customer Panel Section-->
        <div class="container" style="margin-top: 80px;display: block;" id="one">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="panelheading">
                            <h3 class="panel-title">Customer Registration</h3>
                        </div>

                        <form action="co_customer.php" method="POST">
                            <div class="panel-body" style="background-color: #FAFAFA;">
                                <div class="col-sm-6">
                                    <fieldset id="account">
                                        <legend>01.Customer Personal Details</legend>

                                        <label class="radio-inline"><input type="radio" name="optradioo" checked>: Mr</label>
                                        <label class="radio-inline"><input type="radio" name="optradioo">: Mrs</label>
                                        <label class="radio-inline"><input type="radio" name="optradioo">: Miss</label>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Full Name:</label>
                                            <input type="text" name="cus_fullname" id="fname" value="<?php echo $cus_fullname; ?>" placeholder="Full Name" id="input-email" class="form-control" maxlength="100" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Name with Initials:</label>
                                            <input type="text" name="cus_initialname" value="<?php echo $cus_initialname; ?>" placeholder="Name with Initials" id="input-email" class="form-control" maxlength="100" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Permanent Address :</label>
                                            <input type="text" name="cus_address" value="<?php echo $cus_address; ?>" placeholder="Permanent Address" id="input-email" class="form-control" maxlength="400" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Telephone:</label>
                                            <input type="text" name="cus_tp" value="<?php echo $cus_tp; ?>" placeholder="Telephone" id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">NIC Number:</label>
                                            <input type="text" name="cus_nic" value="<?php echo $cus_nic; ?>" placeholder="National Identity Card Number" id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Date of Birth:</label>
                                            <input type="date" name="cus_dob" value="<?php echo $cus_dob; ?>" placeholder="Date of Birth" id="input-email" class="form-control" />
                                        </div>

                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Married Status:</label>
                                            <select name="cus_ms" value="<?php echo $cus_ms; ?>"  id="input-email" class="form-control" >
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                            </select>
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Have any Dependencies:</label>
                                            <input type="text" name="cus_dependdency" value="<?php echo $cus_dependdency; ?>" placeholder="Have any Dependencies" id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Employment/Position:</label>
                                            <input type="text" name="cus_position" value="<?php echo $cus_position; ?>" placeholder="Employment/Position" id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Monthly Salary/Net Income:</label>
                                            <input type="text" name="cus_monthly_salary" value="<?php echo $cus_monthly_salary; ?>" placeholder="Monthly Salary/Net Income" id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Employer Name:</label>
                                            <input type="text" name="cus_emp_name" value="<?php echo $cus_emp_name; ?>" placeholder="Employer Name" id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Employer Address:</label>
                                            <input type="text" name="cus_emp_address" value="<?php echo $cus_emp_name; ?>" placeholder="Employer Address" id="input-email" class="form-control" />
                                        </div>
                                    </fieldset>
                                    <fieldset id="account">
                                        <legend>03.Customer Better Half Details</legend>

                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Full Name:</label>
                                            <input type="text" name="cus_hhalf_name" id="fname" value="<?php echo $cus_hhalf_name; ?>" placeholder="Full Name" id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Date of Birth:</label>
                                            <input type="date" name="cus_bhalf_dob" value="<?php echo $cus_bhalf_dob; ?>" placeholder="Date of Birth" id="input-email" class="form-control" />
                                        </div>

                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Employment/Position:</label>
                                            <input type="text" name="cus_bhalf_position" value="<?php echo $cus_bhalf_position; ?>" placeholder="Employment/Position" id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Monthly Salary/Net Income:</label>
                                            <input type="text" name="cus_bhalf_monthly_salary" value="<?php echo $cus_bhalf_monthly_salary; ?>" placeholder="Monthly Salary/Net Income" id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Employer Name:</label>
                                            <input type="text" name="cus_bhalf_emp_name" value="<?php echo $cus_bhalf_emp_name; ?>" placeholder="Employer Name" id="input-email" class="form-control" />
                                        </div>

                                    </fieldset>
                                </div>

                                <!--Guranter Details-->
                                <div class="col-sm-6">
                                    <fieldset id="account">
                                        <legend>02.Guarantor Personal Details</legend>
                                        <label class="radio-inline"><input type="radio" name="optradio" checked>: Mr</label>
                                        <label class="radio-inline"><input type="radio" name="optradio">: Mrs</label>
                                        <label class="radio-inline"><input type="radio" name="optradio">: Miss</label>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Full Name:</label>
                                            <input type="text" name="gua_fullname" id="fname" value="<?php echo $gua_fullname; ?>" placeholder="Full Name" id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Name with Initials:</label>
                                            <input type="text" name="gua_initial_name" value="<?php echo $gua_initial_name; ?>" placeholder="Name with Initials" id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Permanent Address :</label>
                                            <input type="text" name="gua_address" value="<?php echo $gua_address; ?>" placeholder="E-mail" id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Telephone:</label>
                                            <input type="tel" name="gua_tp" value="<?php echo $gua_tp; ?>" placeholder="Telephone" id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Date of Birth:</label>
                                            <input type="date" name="gua_dob" value="<?php echo $gua_dob; ?>" placeholder="Date of Birth" id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Married Status:</label>
                                            <input type="text" name="gua_ms" value="<?php echo $gua_ms; ?>" placeholder="Married Status" id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">NIC Number:</label>
                                            <input type="text" name="gua_nic" value="<?php echo $gua_nic; ?>" placeholder="National Identity Card Number" id="input-email" class="form-control" />
                                        </div>

                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Have any Dependencies:</label>
                                            <input type="text" name="gua_dependency" value="<?php echo $gua_dependency; ?>" placeholder="Have any Dependencies" id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Employment/Position:</label>
                                            <input type="text" name="gua_position" value="<?php echo $gua_position; ?>" placeholder="Employment/Position" id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Monthly Salary/Net Income:</label>
                                            <input type="text" name="gua_monthly_salary" value="<?php echo $gua_monthly_salary; ?>" placeholder="Monthly Salary/Net Income" id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Employer Name:</label>
                                            <input type="text" name="gua_emp_name" value="<?php echo $gua_emp_name; ?>" placeholder="Employer Name" id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Employer Address:</label>
                                            <input type="text" name="gua_emp_address" value="<?php echo $gua_emp_address; ?>" placeholder="Employer Address" id="input-email" class="form-control" />
                                        </div>
                                    </fieldset>
                                    <fieldset id="account">
                                        <legend>04.Guarantor Better Half Details</legend>

                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Full Name:</label>
                                            <input type="text" name="gua_bhalf_fullname" id="fname" value="<?php echo $gua_bhalf_fullname; ?>" placeholder="Full Name" id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Date of Birth:</label>
                                            <input type="text" name="gua_bhalf_dob" value="<?php echo $gua_bhalf_dob; ?>" placeholder="Date of Birth" id="input-email" class="form-control" />
                                        </div>

                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Employment/Position:</label>
                                            <input type="text" name="gua_bhalf_position" value="<?php echo $gua_bhalf_position; ?>" placeholder="Employment/Position" id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Monthly Salary/Net Income:</label>
                                            <input type="text" name="gua_bhalf_monthly_salary" value="<?php echo $gua_bhalf_monthly_salary; ?>" placeholder="Monthly Salary/Net Income" id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Employer Name:</label>
                                            <input type="text" name="gua_bhalf_emp_name" value="<?php echo $gua_bhalf_emp_name; ?>" placeholder="Employer Name" id="input-email" class="form-control" />
                                        </div>

                                    </fieldset>
                                </div>
                                <!--Guranter Details-->
                                <div class="col-md-12">
                                    <fieldset id="account">
                                        <legend>05.Description of the Loan:</legend>
                                        <div class="form-group ">
                                            <input type="text" id="input-email" class="form-control" name="loan_description" value="<?php echo $loan_description; ?>"   placeholder="Description of the Loan">
                                        </div>
                                    </fieldset>
                                    <div class="form-group ">
                                        <label class="control-label" for="input-email">Duration of Loan Payment:</label>
                                        <select name="cbo_loan_duration" id="input-region" class="form-control" >
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
                                    <fieldset id="account">
                                        <legend>05.Real Property</legend>
                                        <div class="form-group ">
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
                                                        <td><input type="text" name="real_prp_house_position" value="<?php echo $real_prp_house_position; ?>" placeholder="Position" id="input-email" class="form-control" /></td>
                                                        <td><input type="text" name="real_prp_house_size" value="<?php echo $real_prp_house_size; ?>" placeholder="Size" id="input-email" class="form-control" /></td>
                                                        <td><input type="text" name="real_prp_house_value" value="<?php echo $real_prp_house_value; ?>" placeholder="Value" id="input-email" class="form-control" /></td>
                                                        <td><input type="text" name="real_prp_house_pawned" value="<?php echo $real_prp_house_pawned; ?>" placeholder="Is Pawned" id="input-email" class="form-control" /></td>
                                                        <td><input type="text" name="real_prp_house_pawn_getter" value="<?php echo $real_prp_house_pawn_getter; ?>" placeholder="Pawn Getter" id="input-email" class="form-control" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Other Property</td>
                                                        <td><input type="text" name="real_prp_other_position" value="<?php echo $real_prp_other_position; ?>" placeholder="Position" id="input-email" class="form-control" /></td>
                                                        <td><input type="text" name="real_prp_other_size" value="<?php echo $real_prp_other_size; ?>" placeholder="Size" id="input-email" class="form-control" /></td>
                                                        <td><input type="text" name="real_prp_other_value" value="<?php echo $real_prp_other_value; ?>" placeholder="Value" id="input-email" class="form-control" /></td>
                                                        <td><input type="text" name="real_prp_other_pawned" value="<?php echo $real_prp_other_pawned; ?>" placeholder="Is Pawned" id="input-email" class="form-control" /></td>
                                                        <td><input type="text" name="real_prp_other_pawn_getter" value="<?php echo $real_prp_other_pawn_getter; ?>" placeholder="Pawn Getter" id="input-email" class="form-control" /></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </fieldset>
                                    <fieldset id="account">
                                        <legend>05.Bank Accounts</legend>
                                        <div class="form-group ">
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
                                                        <td><input type="text" name="cus_savings_bank_branch" value="<?php echo $cus_savings_bank_branch; ?>" placeholder="Bank Name & Branch" id="input-email" class="form-control" /></td>
                                                        <td><input type="text" name="cus_savings_facilities" value="<?php echo $cus_savings_facilities; ?>" placeholder="Facilities" id="input-email" class="form-control" /></td>
                                                        <td><input type="text" name="cus_savings_account_no" value="<?php echo $cus_savings_account_no; ?>" placeholder="Account Number" id="input-email" class="form-control" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mobile Account</td>
                                                        <td><input type="text" name="cus_mobile_bank_branch" value="<?php echo $cus_mobile_bank_branch; ?>" placeholder="Bank Name & Branch" id="input-email" class="form-control" /></td>
                                                        <td><input type="text" name="cus_mobile_facilities" value="<?php echo $cus_mobile_facilities; ?>" placeholder="Facilities" id="input-email" class="form-control" /></td>
                                                        <td><input type="text" name="cus_mobile_account_no" value="<?php echo $cus_mobile_account_no; ?>" placeholder="Account Number" id="input-email" class="form-control" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Daily Loan Service</td>
                                                        <td><input type="text" name="cus_daily_loan_bank_branch" value="<?php echo $cus_daily_loan_bank_branch; ?>" placeholder="Bank Name & Branch" id="input-email" class="form-control" /></td>
                                                        <td><input type="text" name="cus_daily_loan_facilities" value="<?php echo $cus_daily_loan_facilities; ?>" placeholder="Facilities" id="input-email" class="form-control" /></td>
                                                        <td><input type="text" name="cus_daily_loan_account_no" value="<?php echo $cus_daily_loan_account_no; ?>" placeholder="Account Number" id="input-email" class="form-control" /></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </fieldset>
                                    <fieldset id="account">
                                        <legend>05.Payable Loan Amount of Applicant:</legend>
                                        <div class="form-group ">

                                            <input type="text" name="payable_loan_amount" value="<?php echo $payable_loan_amount; ?>" placeholder="Payable Loan Amount of Applicant" id="input-email" class="form-control" />
                                        </div>
                                    </fieldset>
                                    <fieldset id="account">
                                        <legend>05.Enough Description of way to find the permanent resident of the applicant:</legend>
                                        <div class="form-group ">
                                            <input type="text" id="input-email" name="loan_description" value="<?php echo $loan_description; ?>" class="form-control"   placeholder="Description of the Loan">
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <label class="control-label" for="input-email">Registration Date</label>   
                                    <input type="date" name="reg_date" value="<?php echo $reg_date; ?>" placeholder="Date" id="input-email" class="form-control" />

                                </div>

                                <div class="col-md-12">
                                    <input type="submit" class="btn btn" name="customer_continue" id="custcontinue" value="Continue">
                                </div>
                            </div>
                        </form>
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
                                    <div class="form-group  ">
                                        <label class="control-label" for="input-email">Reference Person:</label>
                                        <input type="text" name="fname" id="fname" value="" placeholder="Reference Person" id="input-email" class="form-control"  />
                                    </div>
                                    <div class="form-group  ">
                                        <label class="control-label" for="input-email">Select Property:</label>
                                        <select name="cbopayment" id="input-region" class="form-control"   onchange="check();">
                                            <option value=""> --- Please Select --- </option>
                                            <option value="bike">Bike</option>
                                            <option value="twheel">Three-Wheel</option>
                                            <option value="land">Land</option>
                                        </select>
                                    </div>
                                    <div class="form-group  ">
                                        <label class="control-label" for="input-email">Upload Customer:</label>
                                        <input type="file" name="product_image"  />
                                    </div>
                                    <div class="form-group  ">
                                        <label class="control-label" for="input-email">Upload Property:</label>
                                        <input type="file" name="product_image"  />
                                    </div>
                                </fieldset>

                            </div>
                            <div class="col-sm-6">
                                <div id="leasepanel">
                                    <fieldset id="account"><td>
                                        <legend>Leasing Details</legend>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Vehicle Number:</label>
                                            <input type="text" name="fname" id="fname" value="" placeholder="Vehicle Number" id="input-email" class="form-control"  />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Model Year:</label>
                                            <input type="text" disabled name="fname" id="fname" value="" placeholder="Model Year" id="input-email" class="form-control"  />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Lease Rate:</label>
                                            <input type="text" disabled name="fname" id="fname" value="" placeholder="Lease Rate" id="input-email" class="form-control"  />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Fix Rate:</label>
                                            <input type="text" name="fname" id="fname" value="" placeholder="Fix Rate" id="input-email" class="form-control"  />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Select Period:</label>
                                            <select name="cbopayment" id="input-region" class="form-control"  >
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
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Deed Number:</label>
                                            <input type="text" name="fname" id="fname" value="" placeholder="Deed Number" id="input-email" class="form-control"  />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Registration Year:</label>
                                            <input type="text" name="fname" id="fname" value="" placeholder="Registration Year" id="input-email" class="form-control"  />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Select Period:</label>
                                            <select name="cbopayment" id="input-region" class="form-control"  >
                                                <option value=""> --- Please Select --- </option>
                                                <option>6 Months</option>
                                                <option>1 Year</option>
                                                <option>2 Year</option>
                                                <option>3 Year</option>
                                            </select>
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Pawn Rate:</label>
                                            <input type="text" disabled name="fname" id="fname" value="" placeholder="Pawn Rate" id="input-email" class="form-control"  />
                                        </div>
                                        <div class="form-group  ">
                                            <label class="control-label" for="input-email">Fixed Rate:</label>
                                            <input type="text" name="fname" id="fname" value="" placeholder="Fixed Rate" id="input-email" class="form-control"  />
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
                                class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div
            </div>
        </div>
    </div>
    <!--Popup Pane of Customers-->


    <!--Footer Section-->
    <?php include '../assets/include/footer.php'; ?>
    <!--Footer Section-->

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
    <script type="text/javascript">
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
            } else if (property == 'twheel')
            {
                alert("Three-Wheel");
                document.getElementById('landpanel').style.display = 'none';
                document.getElementById('leasepanel').style.display = 'block';
            } else if (property == 'land')
            {
                alert("Land");
                document.getElementById('leasepanel').style.display = 'none';
                document.getElementById('landpanel').style.display = 'block';
            }
        }
    </script>

</body>
</html>
