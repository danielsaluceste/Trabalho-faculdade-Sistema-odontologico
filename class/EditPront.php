<?php
$cpf = $_POST["cpf2"];
$item = $_POST["item2"];
$data2 = $_POST["data"];
$medico = $_POST["medico"];
$procedimento = $_POST["procedimento"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "postlogin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE prontuario SET medico='$medico', data_prontuario='$data2', procedimento='$procedimento' WHERE id_prontuario=$item";

if ($conn->query($sql) === TRUE) {
  
    echo  "<script type='text/javascript'>
        location.href='../resultadoConsulta.php?edit=0&cpf=$cpf'
         </script>";

} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

?>