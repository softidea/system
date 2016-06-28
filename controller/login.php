<?php
require_once '../db/mysqliConnect.php';

$qy_login="CALL sp_loginUser('deepalsuranga@live.com','WelCome./@1');";


$qy=mysqli_query($d_bc, $qy_login);
if (mysqli_num_rows($qy) == 1) {
    $row = mysqli_fetch_assoc($qy);
    echo "<script>alert('".$row['user_email']."');</script>";
    
    header('Location:../user/user_view.php');
}  else {
    header('Location:signup.php');    
}
