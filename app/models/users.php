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

    class addUsers{
        function addUser(){
            // crear usuario y traer datos
            $registerdata = new UserController();
            $infodata = $registerdata->registerData();
            $user = new User($infodata[0],$infodata[1],$infodata[2],$infodata[3],$infodata[4],$infodata[5],$infodata[6],$infodata[7]);
            $getMethods = new dataMethods();
            
            // preparando la insercción a la base de datos
            $conn = $getMethods->getConnection();
            if($conn != null){
                $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, user_name, password_user, email, age, gender, register_date) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("iissssssss", $user->getFname(), $user->getLname(), $user->getUsername(), $user->getPassword(), $user->getEmail(), $user->getAge(), $user->getGender(), $user->getRegdate());
                $stmt->execute();
                // insercción ejecutada
            } else{
                echo "<script>alert('datos de conexión nulos')</script>";
            }
            echo "<script>alert('usuario guardado correctamente')</script>";
            
            //enviar a la página principal de la aplicación
            ob_start();
            header("Location: ../../public/home.php");
            ob_end_flush();
        }

        public function addAdmin(){
            
        }

        public function addEmployee(){

        }

        public function updateUser(){

        }

        public function deleteUser(){
        
        }

        public function listUser(){
            return "";
        }
    }

