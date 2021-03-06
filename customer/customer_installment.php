<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Services | View</title>
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
        <link rel="icon" href="favicon.ico">
        <link rel="stylesheet" type="text/css" href="../assets/css/installments.css"/>
        <script type="text/javascript">
            function loadInstallmentCustomer() {

                var nic = document.getElementById('cus_nic').value;

                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else { // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function () {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        alert(xmlhttp.responseText);

                        var value = xmlhttp.responseText;
                        var result_arr = value.split("#");

                        document.getElementById('cus_name').value = "";
                        document.getElementById('cus_tp').value = "";
                        document.getElementById('cus_address').value = "";
                        document.getElementById('cus_reg_date').value = "";

                        document.getElementById('cus_name').value = result_arr[0];
                        document.getElementById('cus_tp').value = result_arr[1];
                        document.getElementById('cus_address').value = result_arr[2];
                        document.getElementById('cus_reg_date').value = result_arr[3];
                        loadServices();
                    }
                }
                xmlhttp.open("GET", "../controller/co_load_installment_customer.php?cus_nic=" + nic, true);
                xmlhttp.send();
            }
            function loadServices() {

                var nic = document.getElementById('cus_nic').value;
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else { // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function () {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        alert(xmlhttp.responseText);
                        document.getElementById('service_combo').innerHTML = "";
                        document.getElementById('service_combo').innerHTML = xmlhttp.responseText;

                    }
                }
                xmlhttp.open("GET", "../controller/co_load_installment_customer.php?c_nic=" + nic, true);
                xmlhttp.send();

            }
            function loadServiceDetails() {
                var sno = document.getElementById('service_combo').value;
                alert(sno);
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else { // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function () {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        alert(xmlhttp.responseText);
                        var value = xmlhttp.responseText;
                        var result_arr = value.split("#");

                        document.getElementById('ser_no').value = "";
                        document.getElementById('ser_date').value = "";
                        document.getElementById('ser_payment').value = "";
                        document.getElementById('ser_installment').value = "";

                        document.getElementById('ser_no').value = result_arr[0];
                        document.getElementById('ser_date').value = result_arr[1];
                        document.getElementById('ser_payment').value = result_arr[2];
                        document.getElementById('ser_installment').value = result_arr[3]+".00";

                    }
                }
                xmlhttp.open("GET", "../controller/co_load_installment_customer.php?s_no=" + sno, true);
                xmlhttp.send();
            }
        </script>
    </head>
    <body>
        <?php include '../assets/include/navigation_bar.php'; ?>

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
                                    <legend>Customer Details</legend>
                                    <div class="form-group required">
                                        <label class="control-label">Customer NIC:</label>
                                        <div class="form-inline required">
                                            <input type="text"  name="cus_nic" id="cus_nic" placeholder="NIC" class="form-control" style="width:85%;text-transform: uppercase;" maxlength="10" required/>
                                            <input type="button" class="btn btn" id="custcontinue" onclick="loadInstallmentCustomer();" value="Search">
                                        </div>
                                    </div>

                                    <div class="form-group required">
                                        <div class="form-group required">
                                            <label class="control-label">Customer Name:</label>
                                            <input type="text"  name="cus_name" id="cus_name" placeholder="Customer Name" class="form-control" required readonly/>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <div class="form-group required">
                                            <label class="control-label">Customer TP:</label>
                                            <input type="text"  name="cus_tp" id="cus_tp" placeholder="Customer Telephone" class="form-control" required readonly/>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <div class="form-group required">
                                            <label class="control-label">Customer Address:</label>
                                            <input type="text" name="cus_address" id="cus_address" placeholder="Customer Telephone" class="form-control" required readonly/>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <div class="form-group required">
                                            <label class="control-label">Registered Date:</label>
                                            <input type="text"  name="cus_reg_date" id="cus_reg_date" placeholder="Registered Date" class="form-control" required readonly/>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-sm-6">
                                <div id="searchOptionPanel">
                                    <fieldset id="account">
                                        <div class="form-group required" style="display: block;" id="service_combo_div">
                                            <label class="control-label">Select Service:</label>
                                            <select name="service_combo" id="service_combo" class="form-control" onchange="loadServiceDetails();">
                                                <option value='0'>~~Select Service~~</option>
                                            </select>
                                        </div>
                                        <legend>Service Details</legend>
                                        <div class="form-group required" style="display: block;" id="service_text_div">
                                            <label class="control-label">Service No:</label>
                                            <div class="form-inline required">
                                                <input type="text" name="ser_no" id="ser_no" value="" placeholder="Service No" class="form-control" style="width:85%;"required/>
                                                <input type="button" class="btn btn" id="custcontinue" onclick="loadServices();" value="Search">
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label">Service Date:</label>
                                            <input type="text" name="ser_date" id="ser_date" placeholder="Service Date" class="form-control" required readonly/>
                                        </div>
                                        <div class="form-group required">
                                            <div class="form-group required">
                                                <label class="control-label">Loan Payment:</label>
                                                <input type="text" name="ser_payment" id="ser_payment" placeholder="Loan Payment" class="form-control" required readonly/>
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <div class="form-group required">
                                                <label class="control-label">Installment:</label>
                                                <input type="text" name="ser_installment" id="ser_installment" placeholder="Installment" class="form-control" required readonly/>
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
                                        <div class="col-md-12">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Installment</th>
                                                        <th>Date</th>
                                                        <th>Paid Date</th>
                                                        <th>Payment</th>
                                                        <th>Customer Due</th>
                                                        <th>Company Due</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>2016/01/10</td>
                                                        <td>2016-10-12</td>
                                                        <td>6000.00</td>
                                                        <td>00.00</td>
                                                        <td>264.00</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>2016/02/10</td>
                                                        <td>2016-10-12</td>
                                                        <td>5000.00</td>
                                                        <td>736.00</td>
                                                        <td>00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">5</th>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">6</th>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">7</th>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">8</th>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">9</th>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr><tr>
                                                        <th scope="row">10</th>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr><tr>
                                                        <th scope="row">11</th>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">12</th>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="container">
                                                <ul class="nav nav-tabs" style="width: 1000px;">
                                                    <li class="active"><a data-toggle="tab" href="#home">Add New</a></li>
                                                    <li><a data-toggle="tab" href="#menu1">Edit</a></li>
                                                    <li><a data-toggle="tab" href="#menu2">View</a></li>
                                                    <li><a data-toggle="tab" href="#menu3">Settlement</a></li>
                                                </ul>

                                                <div class="tab-content">
                                                    <div id="home" class="tab-pane fade in active">
                                                        <h3>Add New Installment Here</h3>
                                                        <p>New Installment available for the current service , Please add new installment</p>
                                                        <div class="col-sm-3">
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label" for="input-email">Payable Installment:</label>
                                                                    <input type="text" name="fname" id="fname" value="5736.00" placeholder="Payable Installment" id="input-email" class="form-control" required/>
                                                                </div>
                                                            </div>
                                                            <button type="submit"  class="btn btn" id="cservicebtn">Add Installment</button>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label" for="input-email">Payment:</label>
                                                                    <input type="text" name="fname" id="fname" value="00.00" placeholder="Payment" id="input-email" class="form-control" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label" for="input-email">Paid Date:</label>
                                                                    <input type="date" name="fname" id="fname" value="2016-10-25" placeholder="Payment" id="input-email" class="form-control" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="menu1" class="tab-pane fade">
                                                        <h3>Edit Installments Here</h3>
                                                        <p>You can edit the last installment of the above service</p>
                                                        <div class="col-sm-3">
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label" for="input-email">Payable Installment:</label>
                                                                    <input type="text" disabled name="fname" id="fname" value="5736.00" placeholder="Payable Installment" id="input-email" class="form-control" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label" for="input-email">Paid Installment:</label>
                                                                    <input type="text" disabled name="fname" id="fname" value="5780.00" placeholder="Payment" id="input-email" class="form-control" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label" for="input-email">Payment:</label>
                                                                    <input type="text" name="fname" id="fname" value="00.00" placeholder="Payment" id="input-email" class="form-control" required/>
                                                                </div>
                                                                <button type="submit"  class="btn btn" id="cservicebtn">Update Installment</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="menu2" class="tab-pane fade">
                                                        <h3>View Installment Information Here</h3>
                                                        <p>Total Service Installments ad due payments available here</p>
                                                        <div class="col-sm-3">
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label" for="input-email">Installment:</label>
                                                                    <input type="text" name="fname" value="00.00" placeholder="Payment" id="input-email" class="form-control" required/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label" for="input-email">Next Installment Date:</label>
                                                                    <input type="text" name="fname" value="2016-10-10" placeholder="Payment" id="input-email" class="form-control" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label" for="input-email">Total Customer Due:</label>
                                                                    <input type="text" name="fname" value="00.00" placeholder="Payment" id="input-email" class="form-control" required/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label" for="input-email">Next Installment:</label>
                                                                    <input type="text" name="fname" value="00.00" placeholder="Payment" id="input-email" class="form-control" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label" for="input-email">Total Company Due:</label>
                                                                    <input type="text" name="fname" value="00.00" placeholder="Payment" id="input-email" class="form-control" required/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label" for="input-email">Total Payable:</label>
                                                                    <input type="text" name="fname" value="35000.00" placeholder="Payment" id="input-email" class="form-control" required/>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div id="menu3" class="tab-pane fade">
                                                        <h3>Settlement of the Loan Payment</h3>
                                                        <p>Service Settlement can be use minimum more than 5 installments(months) available</p>
                                                        <div class="col-md-3">
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label" for="input-email">Total Payable Installments:</label>
                                                                    <input type="text" disabled name="fname" value="10" placeholder="Payment" id="input-email" class="form-control" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label" for="input-email">Total Payable:</label>
                                                                    <input type="text" disabled name="fname" value="35000.00" placeholder="Payment" id="input-email" class="form-control" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label" for="input-email">Payment:</label>
                                                                    <input type="text" name="fname" value="35000.00" placeholder="Payment" id="input-email" class="form-control" required/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <button type="submit"  class="btn btn" id="cservicebtn">Settle Loan</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <button type="button" class="btn btn" id="custcontinue" onclick="">Print</button>
                                                <button type="button" class="btn btn" id="custcontinue" onclick="" style="margin-right: 8px;">Save as PDF</button>
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

        <?php include '../assets/include/footer.php'; ?>
    </body>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="http://bootsnipp.com/dist/scripts.min.js"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</html>
