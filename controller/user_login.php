
<?php

session_start();

require_once '../db/mysqliConnect.php';

$username = filter_input(INPUT_POST, "user_email", FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, "user_password");
$button = filter_input(INPUT_POST, "login_process");

//echo $button;
//echo $password;
//echo $username;

$_SESSION['user_email'] = $username;
$_SESSION['user_password'] = $password;
$_SESSION['login_process'] = $button;



$qy_login = "CALL sp_login_User('" . $_SESSION['user_email'] . "','" . $_SESSION['user_password'] . "');";
//echo $qy_login;
//echo mysqli_num_rows($qy);
$qy = mysqli_query($d_bc, $qy_login);
if (mysqli_num_rows($qy) == 1) {
    $row = mysqli_fetch_assoc($qy);

    echo "Loggin Success Message";
    $url = '../user/user_home.php';
    echo '<script type="text/javascript">window.location.href="' . $url . '";</script>';

//    echo "<script>alert('" . $row['user_email'] . "');</script>";
//    $_SESSION['user_email'] = $row['user_email'];
//    header('Location:../user/user_view.php');
} else {
    $url = '../index.php';
    echo '<script type="text/javascript">window.location.href="' . $url . '"; alert("Your Email Or Password is incorrect!");</script>';
    //echo '<script type="text/javascript">alert("Your Username Or Password is Incorrect");</script>';
}

mysql_close($d_bc);
