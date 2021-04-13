<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "postlogin";

$pdo = new PDO('mysql:host=localhost;dbname=postlogin', $username, $password);

/* $cpf = $_POST["cpf"]; */

$consulta = $pdo->query("SELECT * FROM cadastro WHERE cpf='4';");


while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo "Nome: {$linha['nome']}<br />";
}

?>

