<?php

require_once '../db/mysqliConnect.php';

//$d_bc 
$query=  mysqli_query($d_bc, 'CALL ayolan_datahost.insert_customer("01","aa","b","c","f","e",01,"heeeeee","hiiiii","hellloo")');



?>
