<?php

require_once '../db/mysqliConnect.php';

//$d_bc 

//$qu="CALL CALL ayolan_datahost.insert_customer('01'','aa','b','c','f','e','01','heeeeee','hiiiii','hellloo')";

$q="CALL setuser('dineth','Welcome')";

$query=  mysqli_query($d_bc, $q);

mysqli_close($d_bc);





?>
