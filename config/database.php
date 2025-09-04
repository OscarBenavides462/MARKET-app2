<?php
    //DataBase connection 
    $host     = "Localhost"; //1270.0.0.1
    $user     = "postgres";
    $password = "unicesmag";
    $dbname   = "marketapp";
    $port     = "5432";
    $data_conecction = "
        host     = $host
        user     = $user
        password = $password
        dbname   = $dbname
        port     = $port
        
    
    ";

    $conn = pg_connect($data_conecction);

    if (!$conn)
        {
            echo "ERROR";
        }else 
        {
            echo "Conecction successfully:::";
        }

?>