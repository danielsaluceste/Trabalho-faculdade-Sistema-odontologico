<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "postlogin";

$nome = $_POST["nome"];
$email = $_POST["email"];
$pass = $_POST["senha"];

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO users (nome, email, pass)
  VALUES ('$nome', '$email', '$pass')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo  "<script type='text/javascript'>
							alert('Cadastrado com sucesso.');location.href='index.php'
						</script>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>