<?php

// php code to Insert data into mysql database from input text
if (isset($_POST['insert'])) {
    $hostname = "107.180.14.32";
    $username = "ayolandeveloper";
    $password = "WelComeDB1129";
    $databaseName = "ayolan_datahost";

    // get values form input text and number

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];

    // connect to mysql database using mysqli

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);

    // mysql query to insert data

    $query = "INSERT INTO `users`(`fname`, `lname`, `age`) VALUES ('$fname','$lname','$age')";

    $result = mysqli_query($connect, $query);

    // check if mysql query successful

    if ($result) {
        echo 'Data Inserted';
    } else {
        echo 'Data Not Inserted';
    }

    mysqli_free_result($result);
    mysqli_close($connect);
}
?>