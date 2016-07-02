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


$sql_query="SELECT max_val FROM ser_threewheel_pre WHERE tw_type='$type' AND tw_mode='$code'";

echo $sql_query;

$run_query=  mysqli_query($d_bc, $sql_query);

echo mysqli_num_rows($run_query);
$sd =mysqli_num_rows($run_query);
if($sd>0){
    $row=  mysqli_fetch_assoc($sd);
    echo $row['max_val'];
}else{echo "hikz";}

?>