	
	<?php
	session_start();

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "postLogin";

	$cpf = $_POST['CPF_paciente'];
	$data = $_POST['dataProc'];
	$medico = $_POST['nomeMedico'];
	$procedimento = $_POST['Procedimento'];

	$_SESSION['CPF_paciente'] = $cpf; //eNVIA POR SESSÃO O CPF PARA A TELA DE PRONTUARIO

	try {
	  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	  // set the PDO error mode to exception
	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  $sql = "INSERT INTO prontuario (CPF_paciente, data_prontuario, medico, procedimento) VALUES ('$cpf','$data', '$medico','$procedimento')";
	  // use exec() because no results are returned
	  $conn->exec($sql);
	  header('Location: ../prontuario.php');
	} catch(PDOException $e) {
	  echo $sql . "<br>" . $e->getMessage();
	}

	$conn = null;
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<a href="../prontuario.php"></a>
	</body>
	</html>>
