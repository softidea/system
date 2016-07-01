<?php

define('db_host', '107.180.14.32');
define('db_port', '3306');
define('db_user', 'ayolandeveloper');
define('db_password', 'WelComeDB1129');
define('db_database', 'ayolan_datahost');

$d_bc = mysqli_connect(db_host, db_user, db_password, db_database) or die('Could not connect to MySql: ' . mysqli_connect_error());

//getting varibles from ajax method
$type=$_GET['v_tw_type'];
$code=$_GET['v_tw_code'];
//getting varibles from ajax method

//secho $type."lol".$code;

$sql_query="SELECT * FROM ser_threewheel_pre WHERE tw_type=$type AND tw_mode=$code LIMIT=1";
$run_query=  mysqli_query($d_bc, $sql_query);
if(mysqli_num_rows($run_query)>0){
    $row=  mysqli_fetch_assoc($run_query);
    echo $row['max_value'];
}

?>