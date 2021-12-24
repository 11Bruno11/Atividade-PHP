<?php
    
    try {
        $con = new PDO("mysql:host=localhost;dbname=s_a", "root", "");
    } catch (PDOException $e) {
        echo "Error no banco: " . $e->getMessage();
    }
?>
