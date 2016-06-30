<?php


function loadx(){
    require_once '../db/mysqliConnect.php';

    $sql_query = "CALL sp_lod_vehicle_brand();";
    $run_query = mysqli_query($d_bc, $sql_query);
    echo "<option value='0'>~~Select Brand~~</option>";
    while ($row_vehicle_brand = mysqli_fetch_array($run_query)) {
        $vehicle_brand_id = $row_vehicle_brand['brand_id'];
        $vehicle_brand = $row_vehicle_brand['brand'];
        echo "<option value='$vehicle_brand_id'>$vehicle_brand</option>";
    }
}
