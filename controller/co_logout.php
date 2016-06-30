<?php

session_start();
unset($_SESSION["user_email"]);
unset($_SESSION["user_password"]);

header('Refresh: 1; URL = ../index.php');
?>