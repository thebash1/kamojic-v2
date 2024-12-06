<?php
    require './config/database.php';
    require '../controllers/login.php';
    require '../controllers/resetPassword.php';

    class User{
        private $fname;
        private $lname;
        private $username;
        private $password;
        private $email;
        private $age;
        private $gender;
        private $regdate;
        public function __construct($fname, $lname, $username, $password, $email, $age, $gender, $regdate){
            $this->fname = $fname;
            $this->lname = $lname;
            $this->username = $username;
            $this->password = $password;
            $this->email = $email;
            $this->age = $age;
            $this->gender = $gender;
            $this->regdate = $regdate;
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

        public function getRegdate() {
            return $this->regdate;
        }

        public function setRegdate($regdate) {
            $this->regdate = $regdate;
        }

        public function __destruct(){
            echo "<pre>Datos del usuario \n" . "{$_POST}\n</pre>";
        }
    }

    class dataMethods{

        function addUser(){
            $registerdata = new UserController();
            $infodata = $registerdata->registerData();
            $user = new User($infodata[0],$infodata[1],$infodata[2],$infodata[3],$infodata[4],$infodata[5],$infodata[6],$infodata[7]);
            
            //$stmt = $conn->prepare("INSERT INTO users (first_name, last_name, user_name, password_user, email, age, gender, register_date) 
            //VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            //$stmt->execute($user->getFname(), $user->getLname(), $user->getUsername(),$user->getPassword(), $user->getEmail(), $user->getAge(), $user->getGender(), $user->getRegdate());          
        }

        public function updateUser(){

        }

        public function deleteUser(){
        
        }

        public function listUser(){
            return "";
        }
    }

