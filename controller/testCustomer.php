<?php

session_start();

if (isset($_POST[''])) {

include '../db/mysqliConnect.php';
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT MAX(cus_id) FROM cus";

if ($result == mysqli_query($con, $sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%s (%s)\n",$row[0],$row[1]);
    }
  // Free result set
  mysqli_free_result($result);
}
}
mysqli_close($con);