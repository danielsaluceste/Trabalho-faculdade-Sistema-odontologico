<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "postLogin";

$name = $_POST['nome'];
$data = $_POST['data'];
$sexo = $_POST['sexo'];
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$cor = $_POST['cor'];
$escolaridade = $_POST['escolaridade'];
$profissao = $_POST['profissao'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$estadocivil = $_POST['estadocivil'];
$naturalidade_paciente = $_POST['naturalidade_paciente'];
$estado_naturalidade = $_POST['estado_naturalidade'];
$pai = $_POST['pai'];
$nacionalidadePai = $_POST['nacionalidadepai'];
$mae = $_POST['mae'];
$nacionalidademae = $_POST['nacionalidademae'];
$fone = $_POST['fone'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO cadastro (nome, data, sexo, peso, altura, cor, escolaridade, profissao, rg, cpf, estadocivil, naturalidade_paciente, estado_naturalidade, pai, nacionalidadepai, mae, nacionalidademae, fone, endereco, numero, complemento, bairro, cep, cidade, estado) VALUES ('$name', '$data','$sexo','$peso','$altura','$cor', '$escolaridade', '$profissao', '$rg', '$cpf', '$estadocivil', '$naturalidade_paciente', '$estado_naturalidade', '$pai', '$nacionalidadePai', '$mae', '$nacionalidademae', '$fone', '$endereco', '$numero','$complemento', '$bairro', '$cep', '$cidade', '$estado' )";
  // use exec() because no results are returned
  $conn->exec($sql);
  header('Location: ../avaliacao.php');
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>