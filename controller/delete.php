<?php

$q = intval($_GET['q']);

define('db_host', '107.180.14.32');
define('db_port', '3306');
define('db_user', 'ayolandeveloper');
define('db_password', 'WelComeDB1129');
define('db_database', 'ayolan_datahost');

$d_bc = mysqli_connect(db_host, db_user, db_password, db_database)

or die('Could not connect to MySql: '. mysqli_connect_error());

    //$sql_query = "CALL sp_lod_vehicle_brand();";
    $sql_query="SELECT DISTINCT type FROM ser_vehicles_pre WHERE vehicle_type_id='".$q."'";
    $run_query = mysqli_query($d_bc, $sql_query);
    while ($row_vehicle_brand = mysqli_fetch_array($run_query)) {
        $vehicle_type = $row_vehicle_brand['type'];
        echo "<option value='$vehicle_type'>$vehicle_type</option>";
    }

?>