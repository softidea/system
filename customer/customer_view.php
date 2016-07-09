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
        
        <?php if (isset($_GET['bootstrap']) && $_GET['bootstrap'] == 1): ?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <?php else: ?>
        <link rel="stylesheet" type="text/css" href="../assets/css/zebra_pagination.css">
        <?php endif ?>
        
        <link rel="stylesheet" type="text/css" href="../assets/css/customer_registration.css">
        <link rel="icon" href="favicon.ico">
    </head>
    <body>
        <?php 
        include '../assets/include/navigation_bar.php';
        
         $conn = mysqli_connect("77.104.142.97", "ayolanin_dev", "WelComeDB1129", "ayolanin_datahost");
        if (mysqli_connect_errno()) {
        echo "Falied to Connect the Database" . mysqli_connect_error();
        }
        
        ?>
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
                                    <legend>Search Option 01</legend>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Search by:</label>
                                        <select name="cbopayment" id="input-search-option" class="form-control" required onchange="setServiceOptionPanel();">
                                            <option value=""> --- Please Select --- </option>
                                            <option value="cname">Customer NIC</option>
                                            <option value="tp">Phone Number</option>
                                            <option value="serviceno">Service Number</option>
                                        </select>
                                    </div>
                                    <div class="form-group required">
                                        <label class="control-label" for="input-email">Search Here:</label>
                                        <input type="text" name="fname" id="fname" value="" placeholder="Search Here" id="input-email" class="form-control" required/>
                                        <br>
                                        <button type="button" id="cservicebtn" class="btn btn">Search</button>
                                    </div>
                                </fieldset>
                            </div>

                            <fieldset id="account">
                                <legend>Search Option 02</legend>
                                <div class="form-group required">
                                    <label class="control-label" for="input-email">Start Date:</label>
                                    <input type="date" name="fname" id="fname" value="" placeholder="Registration Date" id="input-email" class="form-control"/>
                                </div>
                                <div class="form-group required">
                                    <label class="control-label" for="input-email">End Here:</label>
                                    <input type="date" name="fname" id="fname" value="" placeholder="Search Here" id="input-email" class="form-control" required/>
                                    <br>
                                    <button type="button" id="cservicebtn" class="btn btn">Search</button>
                                </div>
                            </fieldset>

                             <!--pagination for Customer View-->
                            <?php
                            global $conn;
                            $records_per_page = 10;
                            require 'Zebra_Pagination.php';
                            $pagination = new Zebra_Pagination();

                            $sql_query = "SELECT a.`cus_fullname`,a.`cus_nic`,a.`cus_address`,a.`cus_reg_date`,a.`cus_tp`,count(b.`ser_number`) as service_details,b.`ser_number` from `customer` a inner join `service` b on a.`cus_nic`=b.`cus_nic` LIMIT " . (($pagination->get_page() - 1) * $records_per_page) . "," . $records_per_page;
                            $result = mysqli_query($conn, $sql_query);
                            if (!($result)) {

                            // stop execution and display error message
                            die(mysql_error());
                            }
                            $rows = mysqli_fetch_assoc(mysqli_query($conn, 'SELECT FOUND_ROWS() AS rows'));
                            $pagination->records($rows['rows']);
                            $pagination->records_per_page($records_per_page);
                            ?>
                            
                            <div class="col-sm-12">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Full Name</th>
                                            <th>NIC</th>
                                            <th>Permanent Address</th>
                                            <th>Registration Date</th>
                                            <th>Phone Number</th>
                                            <th>Service Details</th>
                                            <th>Update Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php $index = 0; ?>
                                                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                                <tr<?php echo $index++% 2 ? ' class="even"' : '' ?>>

                                                    <td><?php echo' 1' ?></td>
                                                    <td><?php echo $row['cus_fullname'] ?></td>
                                                    <td><?php echo $row['cus_nic'] ?></td>
                                                    <td><?php echo $row['cus_address'] ?></td>
                                                    <td><?php echo $row['cus_reg_date'] ?></td>
                                                    <td><?php echo $row['cus_tp'] ?></td>
                                                    <td><?php echo $row['service_details'] ?></td>
                                                    <td><?php echo $row['ser_number'] ?></td>

                                                </tr>
                                                <?php endwhile ?>
                                    </tbody>
                                </table>
                                 <div class="text-center">
                                            <nav> <ul class="pagination"><li> <?php $pagination->render(); ?></li></ul></nav>
                                        </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-inline">
                                            <button type="submit"  class="btn btn" id="cservicebtn">Save as PDF</button>
                                            <button type="submit"  class="btn btn" id="cservicebtn">Print</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="panel panel-default">
                                        <div class="panel-body" style="height: 250px;">



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

    <?php include '../assets/include/footer.php'; ?>
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
