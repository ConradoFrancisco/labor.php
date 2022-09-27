<?php 

    class Dbh {
        private $host = "localhost";
        private $user = "root";
        private $pw ="";
        private $database = "legislatura";

        protected function conexion(){
            $dsn = 'mysql:host='. $this->host . ";dbname=". $this->database;
            $pdo = new PDO($dsn, $this->user, $this->pw);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        }
    }


?>