<?php
    require '../../config/database.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!empty($_POST['email']) && !empty($_POST['username'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
        }
        echo "<script>alert('Campos vacios, completa los campos por favor')</script>";
    }

