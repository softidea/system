<?php
function loadBikeRates(){
    require_once '../db/mysqliConnect.php';
    
    $sql_query="SELECT * FROM ser_vehicles_pre";
    $run_query=  mysqli_query($d_bc, $sql_query);
    if(mysqli_num_rows($run_query)>0){
       
        while($row_query=  mysqli_fetch_array($run_query)){
            $id=$row_query['ser_vehicles_pre_id'];
            $model_year=$row_query['model_year'];
            $model=$row_query['model'];
            $type=$row_query['type'];
            $min_val=$row_query['min_value'];
            $max_val=$row_query['max_value'];
             echo "<tr>";
             echo "<td>.$id.</td>";
             echo "<td>.$model_year.</td>";
             echo "<td>.$model.</td>";
             echo "<td>.$type.</td>";
             echo "<td>.$min_val.</td>";
             echo "<td>.$max_val.</td>";
             echo "</tr>";
             
        }
        
    }
}

?>
