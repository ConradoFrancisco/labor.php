<?php
    class User extends dbh{

        protected function getUsers(){
            $sql = "SELECT * FROM usuario_labor";
            $stmt = $this->conexion()->prepare($sql);
            $stmt->execute();
            
            $resultado = $stmt->fetchAll();

            return $resultado;
        }
    }


?>