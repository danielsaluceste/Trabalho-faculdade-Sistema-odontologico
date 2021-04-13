<?php

if(isset($_GET['cpf'])){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "postlogin";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "DELETE FROM cadastro WHERE cpf = '$_GET[cpf]'"; 

    $sql = "DELETE FROM avaliacao WHERE CPF_avaliacao = '$_GET[cpf]'"; 

    $sql = "DELETE FROM prontuario WHERE CPF_paciente = '$_GET[cpf]'"; 

    if ($conn->query($sql) === TRUE) {
        echo  "<script type='text/javascript'>
        location.href='../logado.php'
    </script>";

    } else {
    echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
 
}

if(isset($_GET['id'])){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "postlogin";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $cc = $_GET['cpf2'];

    $sql = "DELETE FROM prontuario WHERE id_prontuario = '$_GET[id]'"; 

    if ($conn->query($sql) === TRUE) {

        echo  "<script type='text/javascript'>
        location.href='../resultadoConsulta.php?cpf=$cc'
         </script>";
        
    } else {
    echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
 
}

?>