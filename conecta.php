<?php

$servidor = "localhost"; 
$senha = "ifrs"; 
$usuario = "rootifrs"; 
$dbname = "bancods"; 

$conn = mysqli_connect($senha, $servidor, $usuario, $dbname); 

if (!$conn){
    die("Falha na conexão :(" . mysqli_connect_error()); 
}