<?php
    include './config/database.php';
    include '../controllers/login.php';
    include '../controllers/resetPassword.php';

    class Users{
        private $fname;
        private $lname;
        private $username;
        private $password;
        private $email;
        private $regdate;
        private $age;
        private $gender;
        public function __construct($fname, $lname, $username, $password, $email, $regdate, $age, $gender){
            $this->fname = $fname;
            $this->lname = $lname;
            $this->username = $username;
            $this->password = $password;
            $this->email = $email;
            $this->regdate = $regdate;
            $this->age = $age;
            $this->gender = $gender;
        }   

        public function __destruct(){
            echo "<pre>Datos del usuario \n" . "{$_POST}\n</pre>";
        }
    }