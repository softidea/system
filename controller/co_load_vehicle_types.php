<?php
$q = intval($_GET['q']);

define('db_host', '107.180.14.32');
define('db_port', '3306');
define('db_user', 'ayolandeveloper');
define('db_password', 'WelComeDB1129');
define('db_database', 'ayolan_datahost');

$d_bc = mysqli_connect(db_host, db_user, db_password, db_database)

or die('Could not connect to MySql: '. mysqli_connect_error());

$sql="SELECT * FROM vehicle_type WHERE brand_id = '".$q."'";
$result = mysqli_query($d_bc,$sql);

while($row = mysqli_fetch_array($result)) {
    echo "<option>" . $row['vehicle_type'] . "</option>";
}

?>