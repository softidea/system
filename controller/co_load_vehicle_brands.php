<?php

function load_vehicle_brands() {
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

if (isset($_GET['q'])) {
    require_once '../db/mysqliConnect.php';
    $q = intval($_GET['q']);
    $sql = "SELECT * FROM vehicle_type WHERE brand_id = '" . $q . "'";
    $result = mysqli_query($d_bc, $sql);

    while ($row = mysqli_fetch_array($result)) {
        echo "<option>" . $row['vehicle_type'] . "</option>";
    }
}

