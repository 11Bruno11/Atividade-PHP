<?php
        try {
            $conn = new PDO("mysql:hostname=localhost;dbname=sa_02_crud_db","root","");
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    class Conexao{
        public function __construct(){
        }
    }
?>