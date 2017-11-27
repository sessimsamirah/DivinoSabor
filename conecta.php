<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bancods";

//conexão com o servidor
$conn = mysql_connect("localhost", "root", "");

// Caso a conexão seja reprovada, exibe na tela uma mensagem de erro
if (!$conn) {
    die("Falha na coneco com o Banco de Dados!");
}

// Caso a conexão seja aprovada, então conecta o Banco de Dados.    
$db = mysql_select_db("bancods");

/*Configurando este arquivo, depois é só você dar um include em suas paginas php, isto facilita muito, pois caso haja necessidade de mudar seu Banco de Dados
você altera somente um arquivo*/
?>

