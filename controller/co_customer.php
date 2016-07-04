<?php

session_start();

if (!isset($_SESSION['user_email'])) {
    //header("Location:../index.php");
} else {




    $c0 = filter_input(INPUT_POST, 'cus_salutation');
    echo '<script>alert("hello:'.$c0.'");</script>';
    $c1 = filter_input(INPUT_POST, 'cus_fullname');
    $c2 = filter_input(INPUT_POST, 'cus_initialname');
    $c3 = filter_input(INPUT_POST, 'cus_address');
    $c4 = filter_input(INPUT_POST, 'cus_tp');
    $c5 = filter_input(INPUT_POST, 'cus_nic');
    $c6 = filter_input(INPUT_POST, 'cus_dob');
    $c7 = filter_input(INPUT_POST, 'cus_ms');
    $c8 = filter_input(INPUT_POST, 'cus_dependdency');
    $c9 = filter_input(INPUT_POST, 'cus_position');
    $c10 = filter_input(INPUT_POST, 'cus_monthly_salary');
    $c11 = filter_input(INPUT_POST, 'cus_emp_name');
    $c12 = filter_input(INPUT_POST, 'cus_emp_address');
    $c13 = filter_input(INPUT_POST, 'cus_addr_map_link');
    $c14 = filter_input(INPUT_POST, 'reg_date');
    $c15 = filter_input(INPUT_POST, 'status');



    //CALL sp_add_customer('MR','Deepal Suranga Weerasuriya','W.A.Deepal Suranga Weerasuriya','87/1, Daduruoya, Chilaw, Srilanka.','+94778409762','943341583v','1994-11-29','Single','0','Developer','105000','Java Software Developers','thummullas, chilaw.','Nooo','2011-11-11','1')
    $query_cus_cus_1 = "CALL sp_add_customer('" . $c0 . "','" . $c1 . "','" . $c2 . "','" . $c3 . "','" . $c4 . "','" . $c5 . "','$c6','" . $c7 . "','" . $c8 . "','" . $c9 . "','" . $c10 . "','" . $c11 . "','" . $c12 . "','" . $c13 . "','" . $c14 . "','$c15')";
    echo $query_cus_cus_1;
    global $d_bc;
    $qu = mysqli_query($d_bc, $query_cus_cus_1);


    if ($qu) {

        echo "<script>alert('OK Customer');window.open('../customer/customer_registration.php','_self');</script>";
        mysqli_close($d_bc);
    } else {
        echo "<script>alert('NO Customer');</script>";

        mysqli_close($d_bc);
    }
}
