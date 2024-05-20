<?php

$servername = "bibliotecabd.cjqmo24im9ri.us-east-1.rds.amazonaws.com";
$dbname = "bibliotecabd";
$username = "admin";
$password = "mypassword";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$conn->set_charset("utf8mb4");
?>                        
                