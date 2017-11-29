<?php
$servername = "localhost";
$username = "root";
$password = "ifrs";
$dbname = "bancods"; 


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
} 
//echo "Conectado!";

mysqli_close($conn);

?>


