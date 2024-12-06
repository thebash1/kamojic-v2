<?php

    class dataMethods{
        private $host;
        private $username;
        private $password;
        private $dbname;
        private $port;
        private $connection;    

        public function __constructor($host, $username, $password, $dbname, $port){
            $this->host = $host;
            $this->username = $username;
            $this->password = $password;
            $this->dbname = $dbname;
            $this->port = $port;
            $this->connection = null;
        }

        public function getConnection(){
            if($this->connection === null){
                $this->connection = new mysqli($this->host, $this->username, $this->password, $this->dbname, $this->port);
                try{
                    $conn = new mysqli($this->host, $this->username, $this->password,$this->dbname,$this->port);
                    if($conn->connect_error){
                        throw new Exception("error en conexión <br>", $conn->connect_error);
                    }
                } catch(Exception $e){
                    echo "<script>alert('base de datos -> conexión fallida')</script><br><br>" . $e->getMessage() . '<br>';
                }
            }
            return $this->connection;
        }

    }
