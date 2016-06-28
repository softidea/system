<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>User Login</title>
        <!-- Latest compiled and minified CSS -->

        <?php include './assets/include/head.php'; ?>
        
        <script type="text/javascript">
               $(window).unload(function () {
                alert("asd");
            }
        </script>
        <script type="text/javascript">
            function setregpanel()
            {

                if (document.getElementsById('panelreguser').style.display = "none")
                {
                    document.getElementsById('panelreguser').style.display = "block";
                    document.getElementsById('panelloginusers').style.display = "none";
                }
            }
            document.onkeydown = function (e) {
                if (e.ctrlKey &&
                        (e.keyCode === 67 ||
                                e.keyCode === 86 ||
                                e.keyCode === 85 ||
                                e.keyCode === 117)) {
                    alert('not allowed');
                    return false;
                } else {
                    return true;
                }
            };
        </script>
    </head>
    <body oncontextmenu="return false">
        <!--Container Panel Start-->
        <div class="container">
            <!--Login Panel Start-->
            <div id="panelloginusers">
                <div class="row">
                    <div class="col-sm-6"'>
                        <div>
                            <img class="log-wap"src="http://fourgenius.com/ayolan_src/images/login/Logo500x500_transpernt.png">
                        </div>
                    </div>
                    <aside id="column-right" class="col-sm-6">

                        <div class="panel">
                            <div class="panel-heading" style="background-color: #004D40;">
                                <h3 class="panel-title"><h2 style="color: white;">AYOLAN INVESTMENTS</h2></h3>
                                <p class="sub_topic">Finance Management System</p>
                            </div>
                            <div class="panel-body">
                                <form action="controller/login.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="control-label" for="input-email">E-Mail Address :</label>
                                        <input type="email" name="email" value="" placeholder="E-Mail Address" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="input-password">Password :</label>
                                        <input type="password" name="password" placeholder="Password" id="input-password" class="form-control" required/>
                                        <a href="user/user_registration.php"><p id="para_forget">Did you forgot your password?</p></a></div>
                                    <a href="user/user_home.php">
                                        <input type="button" name="login_process" value="Login Here" class="btn" id='btn_login'/></a>
                                    <input type="button" name="login_process" value="Register User" class="btn" id='btn_login' onclick="setregpanel();"/>
                                </form>
                            </div>
                            <div class="panel-footer">Powered by : <a href="http://www.fsczone.com/">Softidea Solutions</a></div>
                        </div>
                    </aside>
                </div>
            </div>
            <!--Login panel start-->

            <!--Register Panel Start-->
            <div id="panelreguser" style="display: none;">
                <div class="row">
                    <div class="col-sm-6"'>
                        <div>
                            <img class="log-wap"src="http://fourgenius.com/ayolan_src/images/login/Logo500x500_transpernt.png">
                        </div>
                    </div>
                    <aside id="column-right" class="col-sm-6">
                        <div class="panel">
                            <div class="panel-heading" style="background-color: #004D40;">
                                <h3 class="panel-title"><h2 style="color: white;">AYOLAN INVESTMENTS</h2></h3>
                                <p class="sub_topic">Finance Management System</p>
                            </div>
                            <div class="panel-body">

                                <form action="controller/login.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="control-label" for="input-email">First Name :</label>
                                        <input type="text" name="email" value="" placeholder="E-Mail Address" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="input-email">Last Name :</label>
                                        <input type="text" name="email" value="" placeholder="E-Mail Address" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="input-email">E-Mail Address :</label>
                                        <input type="text" name="email" value="" placeholder="E-Mail Address" id="input-email" class="form-control" required/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="input-password">New Password :</label>
                                        <input type="password" name="password" placeholder="Password" id="input-password" class="form-control" required/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="input-password">Confirm Password :</label>
                                        <input type="password" name="password" placeholder="Password" id="input-password" class="form-control" required/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="input-email">Telephone :</label>
                                        <input type="text" name="email" value="" placeholder="E-Mail Address" id="input-email" class="form-control" required/>
                                    </div>
                                    <input type="submit" name="login_process" value="Register Here" class="btn" id='btn_login'/>
                                    <!-- <input type="submit" name="login_process" value="Back Login" class="btn" id='btn_login'/> -->
                                </form>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
            <!--Register panel start-->
        </div>
        <!--Container Panel Start-->

<?php include 'assets/include/footer.php'; ?>

    </body>
    <style>
        #para_forget
        {
            text-decoration: none;
            color:#004D40;
            margin-top: 8px;
            font-size: 12px;  
        }
        .panel-footer
        {
            background-color: #004D40;
            color: #CFD8DC;
            font-weight: 500;
            font-size: 12px;
            text-align: center;
        }
        .sub_topic
        {
            color: white;
            font-size:14px;
        }
        #btn_login
        {
            background-color: #004D40;
            color: white;
        }
        #btn_login:hover
        {
            background-color: #009688;
        }

        body
        {font-family: 'Source Sans Pro', sans-serif;background-image: url('http://fourgenius.com/ayolan_src/images/login/back.jpg');background-repeat: none;}
        .panel{border:1px solid #004D40;}
        #column-right
        {
            float: right;
            margin-top: 90px;
        }
        .log-wap
        {
            width: 350px;
            height: 350px;
            margin-top: 85px;
            margin-left: 130px;
        }
    </style>
</html>