<?php

$conn = mysqli_connect("77.104.142.97", "ayolanin_dev", "WelComeDB1129", "ayolanin_datahost");
if (mysqli_connect_errno()) {
    echo "Falied to Connect the Database" . mysqli_connect_error();
}

$customer_nic = filter_input(INPUT_GET, 'cus_nic');

$q="SELECT ser_number FROM service WHERE cus_nic='$customer_nic'";
$runn=  mysqli_query($conn, $q);

echo "<option value='0'>~~Select Service~~</option>";
while($row=  mysqli_fetch_array($runn)){
    $sno=$row['ser_number'];
    echo "<option value='$sno'>$sno</option>";
}

