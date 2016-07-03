<?php

$conn = mysqli_connect("107.180.14.32", "ayolandeveloper", "WelComeDB1129", "ayolan_datahost");
if (mysqli_connect_errno()) {
    echo "Falied to Connect the Database" . mysqli_connect_error();
}

function loadBikeRates() {
    global $conn;
    $sql_query = "SELECT * FROM ser_vehicles_pre";
    $run_query = mysqli_query($conn, $sql_query);
    if (mysqli_num_rows($run_query) > 0) {

        while ($row_query = mysqli_fetch_array($run_query)) {
            $id = $row_query['ser_vehicles_pre_id'];
            $model_year = $row_query['model_year'];
            $model = $row_query['model'];
            $type = $row_query['type'];
            $min_val = $row_query['min_value'];
            $max_val = $row_query['max_value'];
            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$model_year</td>";
            echo "<td>$model</td>";
            echo "<td>$type</td>";
            echo "<td>$min_val</td>";
            echo "<td>$max_val</td>";
            echo "</tr>";
        }
    }
}

function loadTwRates() {
    global $conn;
    $sql_query = "SELECT * FROM ser_threewheel_pre";

    $run_query = mysqli_query($conn, $sql_query);
    if (mysqli_num_rows($run_query) > 0) {

        while ($row_query = mysqli_fetch_array($run_query)) {

            $twid = $row_query['threewheel_pre_id'];
            $twmodel = $row_query['tw_type'];
            $twtype = $row_query['tw_mode'];
            $twmin_val = $row_query['min_val'];
            $twmax_val = $row_query['max_val'];
            echo "<tr>";
            echo "<td>$twid</td>";
            echo "<td>None</td>";
            echo "<td>$twmodel</td>";
            echo "<td>$twtype Stroke</td>";
            echo "<td>$twmin_val</td>";
            echo "<td>$twmax_val</td>";
            echo "</tr>";
        }
    }
}

function loadLandRates() {
    global $conn;
    $sql_query = "SELECT * FROM ser_land_pre";

    $run_query = mysqli_query($conn, $sql_query);
    if (mysqli_num_rows($run_query) > 0) {

        while ($row_query = mysqli_fetch_array($run_query)) {

            $lid = $row_query['id'];
            $l_yid = $row_query['year_id'];
            $l_aid = $row_query['amount_id'];
            $l_interest = $row_query['interest'];

            if ($l_yid == "1" && $l_yid!="0") {
                echo "<tr>";
                echo "<td>$l_aid</td>";
                echo "<td>$l_yid Year</td>";
                echo "<td>$l_aid 00,000.00</td>";
                echo "<td>$l_interest</td>";
                echo "</tr>";
            } else if ($l_yid != "1" && $l_yid != "0") {
                echo "<tr>";
                echo "<td>$l_aid</td>";
                echo "<td>$l_yid Years</td>";
                echo "<td>$l_aid 00,000.00</td>";
                echo "<td>$l_interest</td>";
                echo "</tr>";
            }
        }
    }
}

?>