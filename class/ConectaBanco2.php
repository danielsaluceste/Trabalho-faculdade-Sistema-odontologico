<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "postLogin";

$CPF_avaliacao = $_POST['CPF_avaliacao'];
$nomepaciente = $_POST['nomepaciente'];
$cadastro = $_POST['cadastro'];
$queixaprincipal = $_POST['queixaprincipal'];
$historiadadoenca = $_POST['historiadadoenca'];
$v1 = $_POST['v1'];
$v2 = $_POST['v2'];
$v3 = $_POST['v3'];
$v4 = $_POST['v4'];
$v5 = $_POST['v5'];
$v6 = $_POST['v6'];
$v7 = $_POST['v7'];
$v8 = $_POST['v8'];
$v9 = $_POST['v9'];
$v10 = $_POST['v10'];
$v11 = $_POST['v11'];
$v12 = $_POST['v12'];
$Tuberculose = $_POST['v13Tuberculose'];
$Sífilis = $_POST['v13Sífilis'];                      
$HepatiteABC = $_POST['v13HepatiteABC'];
$SIDA_AIDS = $_POST['v13SIDA/AIDS'];               
$Sarampo = $_POST['v13Sarampo'];
$Caxumba = $_POST['v13Caxumba'];
$Varicela = $_POST['v13Varicela'];
$Outras = $_POST['v13outras']; 
$v14 = $_POST['v14'];
$frequencia = $_POST['frequencia']; 
$Histgest = $_POST['va1_Históriadagestação'];
$va2 = $_POST['va2'];
$va3 = $_POST['va3'];
$va4 = $_POST['va4']; 
$ateaidadede = $_POST['ateaidadede'];
$va5 = $_POST['va5'];
$va6 = $_POST['va6'];
$va7 = $_POST['va7'];
$primeirosanos = $_POST['primeirosanos'];
$dific = $_POST['dificuldadeAprentizado'];
$Estadoanímico = $_POST['Estadoanímico'];
$sono = $_POST['sono'];
$psicomotora = $_POST['psicomotora'];
$Alimentação = $_POST['Alimentação'];
$Sociabilidade = $_POST['Sociabilidade'];
$patologia = $_POST['patologia'];
$Obs = $_POST['Observações']; 
$val1 = $_POST['val1'];
$val2 = $_POST['val2'];
$val3 = $_POST['val3'];
$val4 = $_POST['val4'];
$val5 = $_POST['val5'];
$val6 = $_POST['val6'];
$val7 = $_POST['val7'];
$val8 = $_POST['val8'];
$val9 = $_POST['val9']; 
$val10 = $_POST['val10'];
$val11 = $_POST['val11'];
$val12 = $_POST['val12'];
$val13 = $_POST['val13'];
$val14 = $_POST['val14']; 
$Alter = $_POST['Alteraçõesencontradas'];
$maxima = $_POST['maxima'];
$minima = $_POST['minima'];
$Diagnostic = $_POST['Diagnosticopresuntivo'];
$Exames = $_POST['Examescomplementares'];
$DiagDef = $_POST['Diagnosticodefinitivo']; 
$Trat_Pros = $_POST['TratamentoProservação'];
$PlanodeTratamentoid = $_POST['PlanodeTratamentoid'];
$AtendimentoDeUrg = $_POST['AtendimentoDeUrgencia'];
$Medicacao = $_POST['Medicacao'];
$tipoMedicacao = $_POST['tipoMedicacao'];



try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO avaliacao (CPF_avaliacao, nomepaciente, cadastro, queixaprincipal,historiadadoenca, v1, v2, v3, v4, v5, v6, v7, v8, v9, v10, v11, v12, 13Tuberculose, v13Sífilis, v13HepatiteABC, v13SIDAAIDS, 13Sarampo, v13Caxumba, v13Varicela, v13outras, v14, frequencia, va1_Históriadagestação, va2, va3, va4, ateaidadede, va5, va6, va7, primeirosanos, dificuldadeAprentizado, Estadoanímico, sono, psicomotora, Alimentacao, Sociabilidade, patologia, Observações, val1, val2, val3, val4, val5, val6, val7, val8, val9, val10, val11, val12, val13, val14, Alteraçõesencontradas, maxima, minima, Diagnosticopresuntivo, Examescomplementares, Diagnosticodefinitivo, TratamentoProservação, PlanodeTratamentoid, AtendimentoDeUrgencia, Medicacao, tipoMedicacao) VALUES ('$CPF_avaliacao', '$nomepaciente', '$cadastro','$queixaprincipal','$historiadadoenca', '$v1', '$v2', '$v3', '$v4', '$v5', '$v6', '$v7', '$v8', '$v9', '$v10', '$v11', '$v12', '$Tuberculose', '$Sífilis', '$HepatiteABC', '$SIDA_AIDS', '$Sarampo', '$Caxumba', '$Varicela', '$Outras', '$v14', '$frequencia', '$Histgest', '$va2', '$va3','$va4', '$ateaidadede', '$va5', '$va6', '$va7', '$primeirosanos', '$dific', '$Estadoanímico', '$sono', '$psicomotora', '$Alimentação', '$Sociabilidade', '$patologia', '$Obs', '$val1', '$val2', '$val3', '$val4', '$val5', '$val6', '$val7', '$val8', '$val9', '$val10', '$val11', '$val12', '$val13', '$val14', '$Alter', '$maxima', '$minima', '$Diagnostic', '$Exames', '$DiagDef', '$Trat_Pros', '$PlanodeTratamentoid', '$AtendimentoDeUrg', '$Medicacao', '$tipoMedicacao')";
  // use exec() because no results are returned
  $conn->exec($sql);
  header('Location: ../prontuario.php');
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>