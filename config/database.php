<?php

    $host = "sql311.infinityfree.com";
    $username = "if0_37810355";
    $password = "1HhFx7F57ie";
    $dbname = "if0_37810355_db_kamojic";
    $port = 3306;
    
    try{
        $conn = new mysqli($host, $username, $password,$dbname,$port);
        if($conn->connect_error){
            throw new Exception("error en conexión <br>", $conn->connect_error);
        }
    } catch(Exception $e){
        echo "<script>alert('base de datos -> conexión fallida')</script><br><br>" . $e->getMessage() . '<br>';
    }
