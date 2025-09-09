<?php
    //Step 1 get database coneection 
    require('../config/database.php');
    //step 2 get from_data
    $f_name = $_POST['fname'];
    $l_name = $_POST['lname'];
    $m_number = $_POST['mnumber'];
    $id_number = $_POST['idnumber'];
    $e_mail = $_POST['email'];
    $p_pw = $_POST['psswd'];

    //step 3 creat query
    $query ="
    insert into users(firstname,lastname,mobile_numer,ide_numer,email,password)
    VALUES ('$f_name','$l_name','$m_number','$id_number','$e_mail','$p_pw')";

    //step 4 execute query
    $res = pg_query($conn,$query);
    //step 4 validate results
    if($res)
        {
            echo "user has been created usccessfully";
        }
        else 
        {
            echo "something went wrong!";
        }
?>