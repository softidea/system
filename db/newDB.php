<?php

$conn = mysqli_connect("107.180.14.32", "ayolandeveloper", "WelComeDB1129", "ayolan_datahost");
if (mysqli_connect_errno()) {
    echo "Falied to Connect the Database" . mysqli_connect_error();
}
