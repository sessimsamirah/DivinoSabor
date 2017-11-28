<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bancods";

$conn = mysql_connect("localhost", "root", "");

if (!$conn) {
    die("Falha na coneco com o Banco de Dados!");
}

$db = mysql_select_db("bancods");


?>

