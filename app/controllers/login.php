<?php
    require '../../config/database.php';
    session_start(); // inicializar la sesión en caso de que no lo este
    $_SESSION['error_message'] = 'Hay campos vacios, llena todos los campos';  

    class UserController{
        public function passwordHash($password){
            return password_hash($password, PASSWORD_DEFAULT);
        }

        public function isPOST(){
            if($_SERVER['REQUEST_METHOD'] != 'POST'){
                echo 'El método de solicitud no es POST';
                exit();
            }
        }

        // función para validar campos del login y enviarlos al modelo
        public function loginData(){        
            if($this->isPOST());
            
            $username = htmlspecialchars($_POST['username'],ENT_QUOTES, 'UTF-8'); 
            $password = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');
            if(!empty($username) && !empty($password)){
                if(strlen($password) < 8 && strlen($password) > 20){
                    echo "<script>alert('La contraseña no cumple con el requisito')</script>";
                    exit();
                }
                $dataUser = [$username, $password];
                return $dataUser;
            }
            echo "<script>alert('Campos vacios')</script>";
            echo "<script>window.location.href='../public/login.php'</script>";
            exit();
        }

        // función para validar campos del registro y enviarlos al modelo
        public function registerData(){
            if($this->isPOST());

            $fname = htmlspecialchars(trim($_POST['fname']), ENT_QUOTES, 'UTF-8'); 
            $lname = htmlspecialchars(trim($_POST['lname']), ENT_QUOTES, 'UTF-8'); 
            $username = htmlspecialchars(trim($_POST['username']), ENT_QUOTES, 'UTF-8'); 
            $password = htmlspecialchars(trim($_POST['password']), ENT_QUOTES, 'UTF-8'); 
            $email = htmlspecialchars(trim($_POST['email']), ENT_QUOTES, 'UTF-8'); 
            $age = htmlspecialchars($_POST['age'], ENT_QUOTES, 'UTF-8'); 
            $gender = htmlspecialchars($_POST['gender'], ENT_QUOTES, 'UTF-8'); 
            $regdate = htmlspecialchars($_POST['regdate'], ENT_QUOTES, 'UTF-8'); 
            $validData = [strtolower($fname), strtolower($lname), $username, $this->passwordHash($password), filter_var(strtolower($email), FILTER_VALIDATE_EMAIL), filter_var($age, FILTER_VALIDATE_INT), strtolower($gender), $regdate];
            
            $data = [];
            foreach($validData as $item){
                if(!empty($item)){
                    $data[] = $item;
                }

                if(isset($_SESSION['success_message'])){
                    echo "<script>alert('{$_SESSION['error_message']}')</script>";
                    unset($_SESSION['error_message']);
                    exit();
                } 
            }
            return $data;
        }
    }

    class Sesion{
        // funcion para validar sesion establecida y destruirla
        public function destroySesion(){
            if(session_status() == PHP_SESSION_ACTIVE){
                session_unset();
                session_destroy();        
                exit();        
            }
            echo "<script>alert('La sesión no ha sido creada')</script>";
            exit();
        }
    }

