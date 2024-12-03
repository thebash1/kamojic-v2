<?php
    include './config/database.php';
    class Users{
        private $username;
        private $password;
        private $fname;
        private $lname;
        private $email;
        private $regdate;
        private $age;
        private $gender;
        public function __construct($username, $password, $fname, $lname, $email, $regdate, $age, $gender){
            $this->username = $username;
            $this->password = $password;
            $this->fname = $fname;
            $this->lname = $lname;
            $this->email = $email;
            $this->regdate = $regdate;
            $this->age = $age;
            $this->gender = $gender;
        }
        
        
    }