<?php

if (isset($_POST['get_option'])) {
   $state = $_POST['get_option'];
    
    
    require_once '../db/mysqliConnect.php';
    $sql_query = "CALL sp_lod_vehicle_types($state);";


    $run_query = mysqli_query($d_bc, $sql_query);
    while ($row_vehicle_type = mysqli_fetch_array($run_query)) {

        $vehicle_type_id = $row_vehicle_type['vehicle_type_id'];
        $vehicle_type = $row_vehicle_type['vehicle_type'];
        echo "<option value='$vehicle_type_id'>$vehicle_type</option>";
    }
}
?>