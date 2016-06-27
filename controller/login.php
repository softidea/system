<?php
require_once '../db/mysqliConnect.php';

$qy_login="CALL sp_loginUser('deepalsuranga@live.com','WelCome./@1');";


$qy=mysqli_query($d_bc, $qy_login);
if ($qy) {
    echo "<script>alert('hiiii');</script>";
    
    header('Location:../user/user_view.php');
}  else {
    header('Location:signup.php');    
}
