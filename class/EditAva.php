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
  $sql = "UPDATE avaliacao SET CPF_avaliacao='$CPF_avaliacao', nomepaciente='$nomepaciente', cadastro='$cadastro', queixaprincipal='$queixaprincipal' ,historiadadoenca='$historiadadoenca', v1='$v1', v2='$v2', v3='$v3', v4='$v4', v5='$v5', v6='$v6', v7='$v7', v8='$v8', v9='$v9', v10='$v10', v11='$v11', v12='$v12', 13Tuberculose='$Tuberculose', v13Sífilis='$Sífilis', v13HepatiteABC='$HepatiteABC', v13SIDAAIDS='$SIDA_AIDS', 13Sarampo='$Sarampo', v13Caxumba='$Caxumba', v13Varicela='$Varicela', v13outras='$Outras', v14='$v14', frequencia='$frequencia', va1_Históriadagestação='$Histgest', va2='$va2', va3='$va3', va4='$va4', ateaidadede='$ateaidadede', va5='$va5', va6='$va6', va7='$va7', primeirosanos='$primeirosanos', dificuldadeAprentizado='$dific', Estadoanímico='$Estadoanímico', sono='$sono', psicomotora='$psicomotora', Alimentacao='$Alimentação', Sociabilidade='$Sociabilidade', patologia='$patologia', Observações='$Obs', val1='$val1', val2='$val2', val3='$val3', val4='$val4', val5='$val5', val6='$val6', val7='$val7', val8='$val8', val9='$val9', val10='$val10', val11='$val11', val12='$val12', val13='$val13', val14='$val14', Alteraçõesencontradas='$Alter', maxima='$maxima', minima='$minima', Diagnosticopresuntivo='$Diagnostic', Examescomplementares='$Exames', Diagnosticodefinitivo='$DiagDef', TratamentoProservação='$Trat_Pros', PlanodeTratamentoid='$PlanodeTratamentoid', AtendimentoDeUrgencia='$AtendimentoDeUrg', Medicacao='$Medicacao', tipoMedicacao='$tipoMedicacao' WHERE CPF_avaliacao='$CPF_avaliacao'";
  // use exec() because no results are returned
  $conn->exec($sql);
  header('Location: ../logado.php');
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>