<?php
header("Location:../index.php");

define('db_host', '107.180.14.32');
define('db_port', '3306');
define('db_user', 'ayolandeveloper');
define('db_password', 'WelComeDB1129');
define('db_database', 'ayolan_datahost');

$d_bc = mysqli_connect(db_host, db_user, db_password, db_database)

or die('Could not connect to MySql: '. mysqli_connect_error());

mysqli_set_charset($d_bc,"UTF8");

session_start();

