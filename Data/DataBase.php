<?php


    class DB{
        
        public $server;
        public $username;
        public $password;
        public $database;

        public function __construct(){
            $this->server = 'localhost';
            $this->username = 'root';
            $this->password = '';
            $this->database = 'elecciones';
        }

        function connect(){
            try{
                $conn = new PDO("mysql:host=$this->server;dbname=$this->database;", $this->username,$this->password);
                return $conn;
            }
            catch(PDOException $e){
                die('Connected failed '.$e->getMessage());
            }
        }
}


?>