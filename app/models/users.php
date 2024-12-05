<?php
    require './config/database.php';
    require '../controllers/login.php';
    require '../controllers/resetPassword.php';

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

        // Métodos GET y SET para cada propiedad
        public function getFname() {
            return $this->fname;
        }

        public function setFname($fname) {
            $this->fname = $fname;
        }

        public function getLname() {
            return $this->lname;
        }

        public function setLname($lname) {
            $this->lname = $lname;
        }

        public function getUsername() {
            return $this->username;
        }

        public function setUsername($username) {
            $this->username = $username;
        }

        public function getPassword() {
            return $this->password;
        }

        public function setPassword($password) {
            $this->password = $password;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function getRegdate() {
            return $this->regdate;
        }

        public function setRegdate($regdate) {
            $this->regdate = $regdate;
        }

        public function getAge() {
            return $this->age;
        }

        public function setAge($age) {
            $this->age = $age;
        }

        public function getGender() {
            return $this->gender;
        }

        public function setGender($gender) {
            $this->gender = $gender;
        }

        public function __destruct(){
            echo "<pre>Datos del usuario \n" . "{$_POST}\n</pre>";
        }
    }

    class dataMethods{
        public function addUser(){
            $newUser = new UserController();
            $data[] = '*codigo*'; 
            foreach($data as $column){
                
            }
            
        }

        public function updateUser(){

        }

        public function deleteUser(){
        
        }

        public function listUser(){
            return "";
        }
    }

