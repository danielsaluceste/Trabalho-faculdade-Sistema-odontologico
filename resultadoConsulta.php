<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "postlogin";

$pdo = new PDO('mysql:host=localhost;dbname=postlogin', $username, $password);

if($_GET["cpf"]){
    $cpf = $_GET["cpf"];
}
if($_POST["cpf"]){
    $cpf = $_POST["cpf"];
    $cpf1 = $_POST["cpf"];
}

$consulta = $pdo->query("SELECT * FROM cadastro WHERE cpf='$cpf';");
$recebido;

while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    $recebido = $linha;
}

?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "postlogin";

$pdo = new PDO('mysql:host=localhost;dbname=postlogin', $username, $password);

if($_GET["cpf"]){
    $cpf = $_GET["cpf"];
}
if($_POST["cpf"]){
    $cpf = $_POST["cpf"];
    $cpf1 = $_POST["cpf"];
}


$consulta2 = $pdo->query("SELECT * FROM avaliacao WHERE CPF_avaliacao='$cpf';");
$recebido2;

while ($linha2 = $consulta2->fetch(PDO::FETCH_ASSOC)) {
    $recebido2 = $linha2;
}

?>

<?php
//starta a sess�o
session_start();
ob_start();
//resgata os valores das session em variaveis
$id_users = isset($_SESSION['id_users']) ? $_SESSION['id_users'] : "";
$nome_user = isset($_SESSION['nome']) ? $_SESSION['nome'] : "";
$email_users = isset($_SESSION['email']) ? $_SESSION['email'] : "";
$pass_users = isset($_SESSION['pass']) ? $_SESSION['pass'] : "";
$logado = isset($_SESSION['logado']) ? $_SESSION['logado'] : "N";


//varificamos e a var logado cont�m o valos (S) OU (N), se conter N quer dizer que a pessoa n�o fez o login corretamente
//que no caso satisfar� nossa condi��o no if e a pessoa sera redirecionada para a tela de login novamente
if ($logado == "N" && $id_users == "") {
    echo  "<script type='text/javascript'>
						location.href='index.php'
					</script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Sistema odontologico - Unisagrado</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="css/log2.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/tableStyle.css" rel="stylesheet" />
</head>

<body id="page-top">

    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Sistema odontologico</a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="logado.php">Consulta</a></li>
                    <li class="nav-item mx-0 mx-lg-1 dropdown">
							<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Cadastro
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="cadastroPaciente.php">Paciente</a>
							<a class="dropdown-item" href="avaliacao.php">Avaliação</a>
							<!-- <div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Something else here</a> -->
							</div>
						</li>
                </ul>
            </div>
            <div style="margin-left: 20px;">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"> <a class=" py-3 px-0 px-lg-3 rounded js-scroll-trigger"> <svg style="margin-top: -3px;" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg> <?php echo $nome_user; ?></a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class=" py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="logout.php"> <svg style="margin-top: -3px;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z" />
                                <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                            </svg> Sair </a></li>
                </ul>
            </div>
        </div>
    </nav>

    <br>
    <br>
    <br>

    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Resultado da consulta</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-user"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <h4 class="page-section-heading text-center text-uppercase text-secondary mb-0" style="margin-left: 36px;"><?php echo $recebido['nome']; ?> <i  onClick="parent.location='class/delete.php?cpf=<?php echo $recebido['cpf']; ?>'" style="margin-left: 10px; color: #117964; cursor: pointer;" class="far fa-trash-alt"></i> </h4>

    </div>
    <br>
    <br>

    <div style="width: 90.5%; border-radius: 5px; border-color: #117964; border-style: solid; padding: 15px; margin-left: 5%; margin-right: 5%;">
    
        <div style="text-align: center; display: flex; justify-content: center;">
        
            <h4 style="margin-top: 10px; color: #117964;">PRONTUARIO DO PACIENTE</h4>
    
        </div>

        <div style="width: 100%;">

        <?php if($_GET['edit'] == 0) : ?>

        <table class="styled-table" style="width: 100%;">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Procedimento</th>
                    <th>Nome do Médico</th>
                    <th style="width: 12px;"></th>
                    <th style="width: 12px;"></th>
                </tr>
            </thead>
            <tbody>

                <?php


                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "postlogin";

                $pdo = new PDO('mysql:host=localhost;dbname=postlogin', $username, $password);

                $consulta = $pdo->query("SELECT * FROM prontuario WHERE CPF_paciente = '$recebido[cpf]'"); 

                $recebido;

                $i = 1;
                while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                ?>

                <tr>
                    <td> <?php echo $linha['data']; ?> </td>
                    <td> <?php echo $linha['procedimento']; ?> </td>
                    <td> <?php echo $linha['medico']; ?> </td>
                    <td style="width: 12px; cursor: pointer; color: red;"> <i onClick="parent.location='class/delete.php?id=<?php echo $linha['id_prontuario']; ?>&cpf2=<?php echo $linha['CPF_paciente']; ?>'" class="fas fa-times"></i> </td>
                    <td style="width: 12px; cursor: pointer; color: #117964;"> <i onClick="parent.location='resultadoConsulta.php?edit=1&cpf=<?php echo $linha['CPF_paciente']; ?>&item=<?php echo $linha['id_prontuario']; ?>'" class="fas fa-pen"></i> </td>
                </tr>

                <?php
                $i = $i + 1;
                }

                ?>

            </tbody>
        </table>

        <div style="text-align: center; margin-bottom: 5px;">
            <button class="btn btn-primary btn-md" onClick="parent.location='prontuario.php'">NOVO</button>
        </div>   

        <?php endif; ?>
        
        <!-- Edição -->

        <?php if($_GET['edit'] == 1) : ?>


        <!--  -->
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "postlogin";

        $pdo = new PDO('mysql:host=localhost;dbname=postlogin', $username, $password);


        $id = $_GET["item"];


        $consulta = $pdo->query("SELECT * FROM prontuario WHERE id_prontuario='$id';");
        $recebidoE;

        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $recebidoE = $linha;
        }

        ?>
        <!--  -->


        <form method="POST" action="class/EditPront.php">
        <table class="styled-table" style="width: 100%;">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Procedimento</th>
                    <th>Nome do Médico</th>
                </tr>
            </thead>
            <tbody>
                <td> 
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                      <p></p>
                      <input value="<?php echo $recebidoE['data']; ?>" type="date" id="nomeid" name="data" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="" />
                      <p class="help-block text-danger"></p>
                    </div>
                  </div> 
                </td>

                <td>
                    <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                      <p></p>
                      <input value="<?php echo $recebidoE['procedimento']; ?>" type="text" id="nomeid" name="procedimento" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="" />
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                </td>

                <td>
                    <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                      <p></p>
                      <input value="<?php echo $recebidoE['medico']; ?>" type="text" id="nomeid" name="medico" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="" />
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                </td>
            </tbody>
        </table>
            <input name="cpf2" value="<?php echo $recebidoE['CPF_paciente']; ?>" type="text" style="display: none;">
            <input name="item2" value="<?php echo $id; ?>" type="text" style="display: none;">
        

        <div style="text-align: center; margin-bottom: 5px;">
            <button class="btn btn-primary btn-md" type="submit">SALVAR</button>
        </div>   

        </form>

        <?php endif; ?>

        </div>    
    
    </div>

    <div style="display: flex;">

        <div style="text-align: center; display: flex; width: 44%; justify-content: center; margin-top: 50px; margin-left: 5%;">

            <br>

            <div style="width: 100%; border-radius: 5px; border-color: #117964; border-style: solid; padding: 15px;">

                <h4 style="margin-top: 10px; color: #117964; margin-left: 10px;" for="filiacao">CADASTRO DO PACIENTE <i style="margin-left: 10px; color: #2C3E50; cursor: pointer;" class="far fa-edit"></i> </h4>

                <div>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Nome</p>
                            <input disabled value="<?php echo $recebido['nome']; ?>" type="text" id="nomeid" name="nome" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Nome" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <br>



                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Data de nascimento</p>
                            <input disabled value="<?php echo $recebido['data']; ?>" type="date" id="dataid" name="data" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <br>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Sexo</p>
                            <input disabled value="<?php echo $recebido['sexo']; ?>" type="text" id="sexoid" name="sexo" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>



                    <br>

                </div>


                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                        <p>Peso</p>
                        <input disabled value="<?php echo $recebido['peso']; ?>" type="text" id="pesoid" name="peso" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Peso" />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>

                <br>

                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                        <p>Altura</p>
                        <input disabled value="<?php echo $recebido['altura']; ?>" type="text" id="alturaid" name="altura" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Altura" />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>

                <br>

                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                        <p>Cor</p>
                        <input disabled value="<?php echo $recebido['cor']; ?>" type="text" id="corid" name="cor" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Cor" />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>

                <div>
                    <br>



                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Escolaridade</p>
                            <input disabled value="<?php echo $recebido['escolaridade']; ?>" type="text" id="escolaridadeid" name="escolaridade" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Escolaridade" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <br>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Profissão</p>
                            <input disabled value="<?php echo $recebido['profissao']; ?>" type="text" id="profissaoid" name="profissao" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Profissão" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>



                    <br>



                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>RG</p>
                            <input disabled value="<?php echo $recebido['rg']; ?>" type="text" id="rgid" name="rg" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="RG" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <br>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>CPF</p>
                            <input disabled value="<?php echo $recebido['cpf']; ?>" type="text" id="cpfid" name="cpf" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="CPF" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <br>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Estado Civil</p>
                            <input disabled value="<?php echo $recebido['estadocivil']; ?>" type="text" id="estadocivilid" name="estadocivil" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Estado Civil" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>



                    <br>



                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Naturalidade</p>
                            <input disabled value="<?php echo $recebido['naturalidade_paciente']; ?>" type="text" id="naturalidade_pacienteid" name="naturalidade_paciente" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Naturalidade" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Estado</p>
                            <input disabled value="<?php echo $recebido['estado_naturalidade']; ?>" type="text" id="estado_naturalidadefid" name="estado_naturalidade" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Estado" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>



                    <br>

                    <h4 for="filiacao">Filiação</h4>

                    <br>



                    <div class="control-group" s>
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Pai</p>
                            <input disabled value="<?php echo $recebido['pai']; ?>" type="text" id="paiid" name="pai" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Pai" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <br>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Nacionalidade do Pai</p>
                            <input disabled value="<?php echo $recebido['nacionalidadepai']; ?>" type="text" id="nacionalidadepaiid" name="nacionalidadepai" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Nacionalidade do Pai" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>



                    <br>



                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Mãe</p>
                            <input disabled value="<?php echo $recebido['mae']; ?>" type="text" id="maeid" name="mae" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Mãe" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Nacionalidade da Mãe</p>
                            <input disabled value="<?php echo $recebido['nacionalidademae']; ?>" type="text" id="nacionalidademaeid" name="nacionalidademae" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Nacionalidade da Mãe" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>



                </div>

                <br>
                <br>

                <div>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Telefone</p>
                            <input disabled value="<?php echo $recebido['fone']; ?>" type="text" id="foneid" name="fone" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Telefone" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <br>



                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Endereço</p>
                            <input disabled value="<?php echo $recebido['endereco']; ?>" type="text" id="enderecoid" name="endereco" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Endereço" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <br>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Número</p>
                            <input disabled value="<?php echo $recebido['numero']; ?>" type="text" id="numeroid" name="numero" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Número" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>



                    <br>



                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Complemento</p>
                            <input disabled value="<?php echo $recebido['complemento']; ?>" type="text" id="complementoid" name="complemento" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Complemento" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <br>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Bairro</p>
                            <input disabled value="<?php echo $recebido['bairro']; ?>" type="text" id="bairroid" name="bairro" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Bairro" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>



                    <br>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>CEP</p>
                            <input disabled value="<?php echo $recebido['cep']; ?>" type="text" id="cepid" name="cep" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="CEP" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <br>



                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Cidade</p>
                            <input disabled value="<?php echo $recebido['cidade']; ?>" type="text" id="cidadeid" name="cidade" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Cidade" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <br>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Estado</p>
                            <input disabled value="<?php echo $recebido['estado']; ?>" type="text" id="estadoid" name="estado" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Estado" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>



                </div>

                <br>


            </div>
            <br>
        </div>

        <!-- ---------------------------------------------------------------------------------------------------------- -->

        <div style="text-align: center; display: flex; width: 44%; justify-content: center; margin-top: 50px; margin-left: 2.5%;">
            <br>

            <div style="width: 100%; border-radius: 5px; border-color: #117964; border-style: solid; padding: 15px;">

                <h4 style="margin-top: 10px; color: #117964; margin-left: 10px;" for="filiacao">AVALIAÇÃO DO PACIENTE <i style="margin-left: 10px; color: #2C3E50; cursor: pointer;" class="far fa-edit"></i> </h4>

                <div>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>CPF do Paciente</p>
                            <input disabled value="<?php echo $recebido2['CPF_avaliacao']; ?>" id="CPF_avaliacao" name="CPF_avaliacao" style="border-radius: 5px; padding-left: 10px;" class="form-control text-white" type="text" value="" placeholder="CPF do Paciente" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <br>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Nome do Paciente</p>
                            <input disabled value="<?php echo $recebido2['nomepaciente']; ?>" id="nomepacienteid" name="nomepaciente" style="border-radius: 5px; padding-left: 10px;" class="form-control text-white" type="text" value="" placeholder="Nome do Paciente" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <br>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Cadastro</p>
                            <input disabled value="<?php echo $recebido2['cadastro']; ?>" type="text" id="cadastroid" name="cadastro" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Cadastro" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <br>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Queixa Principal</p>
                            <input disabled value="<?php echo $recebido2['queixaprincipal']; ?>" type="text" id="cadastroid" name="queixaprincipal" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Queixa Principal" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <br>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>História da doença atual</p>
                            <input disabled value="<?php echo $recebido2['historiadadoenca']; ?>" type="text" id="2)historiadadoencaid" name="historiadadoenca" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="História da doença atual" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                </div>

                <br>

                <div>
                    <br>
                    <div style="text-align: center;">
                        <h4 for="vquestionariodesaude">Questionário de Saúde</h4>
                    </div>

                    <br>

                    <div>
                        <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                    <p for="sexo">1- Já Teve Hemorragia?</p>
                                    <input disabled value="<?php echo $recebido2['v1']; ?>" type="text" name="v1" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                    <p class="help-block text-danger"></p>
                                </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                    <p for="sexo">2- Sofre(u) de alergia?</p>
                                    <input disabled value="<?php echo $recebido2['v2']; ?>" type="text" name="v2" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                    <p class="help-block text-danger"></p>
                                </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                    <p for="sexo">3- Teve reumatismo infeccioso?</p>
                                    <input disabled value="<?php echo $recebido2['v3']; ?>" type="text" name="v3" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                    <p class="help-block text-danger"></p>
                                </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                    <p for="sexo">4- Sofre(u) de distúrbio cardiovascular?</p>
                                    <input disabled value="<?php echo $recebido2['v4']; ?>" type="text" name="v4" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                    <p class="help-block text-danger"></p>
                                </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                    <p for="sexo">5-Sofre(u) de gastrite?</p>
                                    <input disabled value="<?php echo $recebido2['v5']; ?>" type="text" name="v5" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                    <p class="help-block text-danger"></p>
                                </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                    <p for="sexo">6- É diabético ou tem familiares diabéticos?</p>
                                    <input disabled value="<?php echo $recebido2['v6']; ?>" type="text" name="v6" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                    <p class="help-block text-danger"></p>
                                </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                    <p for="sexo">7- Já desmaiou alguma vez?</p>
                                    <input disabled value="<?php echo $recebido2['v7']; ?>" type="text" name="v6" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                    <p class="help-block text-danger"></p>
                                </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                    <p for="sexo">8- Está sob tratamento médico?</p>
                                    <input disabled value="<?php echo $recebido2['v8']; ?>" type="text" name="v8" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                    <p class="help-block text-danger"></p>
                                </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                    <p for="sexo">9- Está tomando algum medicamento?</p>
                                    <input disabled value="<?php echo $recebido2['v9']; ?>" type="text" name="v9" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                    <p class="help-block text-danger"></p>
                                </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                    <p for="sexo">10- Esteve doente ou foi operado nos últimos 5 anos?</p>
                                    <input disabled value="<?php echo $recebido2['v10']; ?>" type="text" name="v10" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                    <p class="help-block text-danger"></p>
                                </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                    <p for="sexo">11- Tem hábitos,vícios ou manias?</p>
                                    <input disabled value="<?php echo $recebido2['v11']; ?>" type="text" name="v11" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                    <p class="help-block text-danger"></p>
                                </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                    <p for="sexo">12- Tem ansiedade/depressão?</p>
                                    <input disabled value="<?php echo $recebido2['v12']; ?>" type="text" name="v12" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                    <p class="help-block text-danger"></p>
                                </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                </div>

                <div>
                    <br>

                    <div style="text-align: center;">
                        <h4 for="vquestionariodesaude">13-Você e/ou algum familiar teve algumas dessas doenças</h4>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                    <p for="sexo">Tuberculose</p>
                                    <input disabled value="<?php echo $recebido2['13Tuberculose']; ?>" type="text" name="v13Tuberculose" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                    <p class="help-block text-danger"></p>
                                </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                    <p for="sexo">Sífilis</p>
                                    <input disabled value="<?php echo $recebido2['v13Sífilis']; ?>" type="text" name="v13Sífilis" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                    <p class="help-block text-danger"></p>
                                </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                    <p for="sexo">Hepatite A, B, C</p>
                                    <input disabled value="<?php echo $recebido2['v13HepatiteABC']; ?>" type="text" name="v13HepatiteABC" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                    <p class="help-block text-danger"></p>
                                </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                    <p for="sexo">SIDA/AIDS</p>
                                    <input disabled value="<?php echo $recebido2['v13SIDAAIDS']; ?>" type="text" name="v13SIDA/AIDS" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                    <p class="help-block text-danger"></p>
                                </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                    <p for="sexo">Sarampo</p>
                                    <input disabled value="<?php echo $recebido2['13Sarampo']; ?>" type="text" name="v13Sarampo" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                    <p class="help-block text-danger"></p>
                                </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                    <p for="sexo">Caxumba</p>
                                    <input disabled value="<?php echo $recebido2['v13Caxumba']; ?>" type="text" name="v13Caxumba" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                    <p class="help-block text-danger"></p>
                                </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                    <p for="sexo">Varicela</p>
                                    <input disabled value="<?php echo $recebido2['v13Varicela']; ?>" type="text" name="v13Varicela" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                    <p class="help-block text-danger"></p>
                                </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                    <p for="sexo">Outras</p>
                                    <input disabled value="<?php echo $recebido2['v13outras']; ?>" type="text" name="v13outras" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                    <p class="help-block text-danger"></p>
                                </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                </div>

                <div>
                    <br>

                    <div>

                        <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                    <p for="sexo">14- É fumante?</p>
                                    <input disabled value="<?php echo $recebido2['v14']; ?>" type="text" name="v14" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                    <p class="help-block text-danger"></p>
                                </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Frequência:</p>
                            <input disabled value="<?php echo $recebido2['frequencia']; ?>" type="text" id="frequenciaid" name="frequencia" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Frequência" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                </div>

                <div>
                    <br>

                    <div style="text-align: center;">
                        <h4 for="vquestionariodesaude">Questionário complementar infantil - ODONTOPEDIATRIA</h4>
                    </div>

                    <br>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>1- História da gestação:</p>
                            <input disabled value="<?php echo $recebido2['va1_Históriadagestação']; ?>" type="text" id="va1-Históriadagestação:id" name="va1_Históriadagestação" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="História da gestação" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                <p>2- Nasceu de parto:</p>
                                <input disabled value="<?php echo $recebido2['va2']; ?>" type="text" name="va2" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                <p>3- A criança teve algum problema no parto?</p>
                                <input disabled value="<?php echo $recebido2['va3']; ?>" type="text" name="va3" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                <p>4-A amamentação foi:</p>
                                <input disabled value="<?php echo $recebido2['va4']; ?>" type="text" name="va4" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>até a idade de :</p>
                            <input disabled value="<?php echo $recebido2['ateaidadede']; ?>" type="text" id="ateaidadedeid" name="ateaidadede" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="até a idade de" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                <p>5 -Já lhe foi dito para não tomar anestesia local?</p>
                                <input disabled value="<?php echo $recebido2['va5']; ?>" type="text" name="va5" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                <p>6- Já teve ou viveu com alguém que tivesse doença grave e contagiosa?</p>
                                <input disabled value="<?php echo $recebido2['va6']; ?>" type="text" name="va6" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                <p>7-A criança já foi vacinada?</p>
                                <input disabled value="<?php echo $recebido2['va7']; ?>" type="text" name="va7" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                </div>

                <div>
                    <br>

                    <div style="text-align: center;">
                        <h4 for="vquestionariodesaude">CONDUTA DA CRIANÇA</h4>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                <p>Durante os 2 primeiros anos de vida:</p>
                                <input disabled value="<?php echo $recebido2['primeirosanos']; ?>" type="text" name="primeirosanos" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                <p>No lar e na escola: teve alguma dificuldade no aprendizado?</p>
                                <input disabled value="<?php echo $recebido2['dificuldadeAprentizado']; ?>" type="text" name="dificuldadeAprentizado" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                <p>Estado anímico: </p>
                                <input disabled value="<?php echo $recebido2['Estadoanímico']; ?>" type="text" name="Estadoanímico" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>
                        
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                <p>Tem sono:</p>
                                <input disabled value="<?php echo $recebido2['sono']; ?>" type="text" name="sono" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                <p>Conduta psicomotora:</p>
                                <input disabled value="<?php echo $recebido2['psicomotora']; ?>" type="text" name="psicomotora" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                <p>Alimentação:</p>
                                <input disabled value="<?php echo $recebido2['Alimentacao']; ?>" type="text" name="Alimentacao" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                <p>Sociabilidade:</p>
                                <input disabled value="<?php echo $recebido2['Sociabilidade']; ?>" type="text" name="Sociabilidade" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                <p>Apresenta alguma patologia de conduta:</p>
                                <input disabled value="<?php echo $recebido2['patologia']; ?>" type="text" name="patologia" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Observações :</p>
                            <input disabled value="<?php echo $recebido2['Observações']; ?>" type="text" id="Observaçõesid" name="Observações" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Observações" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                </div>

                <div>
                    <br>

                    <div style="text-align: center;">
                        <h4 for="vquestionariodesaude"> Exame Físico</h4>
                    </div>

                    <label for="valexamefisico"></label>

                    <br>

                    <div>

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                <p>1 - Lábios:</p>
                                <input disabled value="<?php echo $recebido2['val1']; ?>" type="text" name="val1" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                <p>2 - Mucosa Jugal</p>
                                <input disabled value="<?php echo $recebido2['val2']; ?>" type="text" name="val2" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                <p>3 - Língua</p>
                                <input disabled value="<?php echo $recebido2['val3']; ?>" type="text" name="val3" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                <p>4 - Soalho da boca</p>
                                <input disabled value="<?php echo $recebido2['val4']; ?>" type="text" name="val4" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                <p>5 - Palato duro</p>
                                <input disabled value="<?php echo $recebido2['val5']; ?>" type="text" name="val5" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                <p>6 - Garganta</p>
                                <input disabled value="<?php echo $recebido2['val6']; ?>" type="text" name="val6" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                <p>7 - Palato mole</p>
                                <input disabled value="<?php echo $recebido2['val7']; ?>" type="text" name="val7" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                <p>8 - Mucosa Alveolar</p>
                                <input disabled value="<?php echo $recebido2['val8']; ?>" type="text" name="val8" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                <p>9 - Gengivas</p>
                                <input disabled value="<?php echo $recebido2['val9']; ?>" type="text" name="val9" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                <p>10 - Glândulas Salivares</p>
                                <input disabled value="<?php echo $recebido2['val10']; ?>" type="text" name="val10" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                <p>11 - Linfonodos</p>
                                <input disabled value="<?php echo $recebido2['val11']; ?>" type="text" name="val11" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                <p>12 - ATM</p>
                                <input disabled value="<?php echo $recebido2['val12']; ?>" type="text" name="val12" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                <p>13 - Músculos Mastigadores</p>
                                <input disabled value="<?php echo $recebido2['val13']; ?>" type="text" name="val13" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div>

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                <p>14 - Oclusão</p>
                                <input disabled value="<?php echo $recebido2['val14']; ?>" type="text" name="val14" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Alterações encontradas :</p>
                            <input disabled value="<?php echo $recebido2['Alteraçõesencontradas']; ?>" type="text" id="Alteraçõesencontradasid" name="Alteraçõesencontradas" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Alterações encontradas" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                <p>Alterações encontradas :</p>
                                <input disabled value="<?php echo $recebido2['Alteraçõesencontradas']; ?>" type="text" name="Alteraçõesencontradas" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                </div>

                <div>
                    <br>

                    <div style="text-align: center;">
                        <h4 for="vquestionariodesaude">5) PRESSÃO ARTERIAL</h4>
                    </div>

                    <br>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Máxima (mmHG) :</p>
                            <input disabled value="<?php echo $recebido2['maxima']; ?>" type="text" id="maximaid" name="maxima" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Máxima (mmHG)" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <br>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Mínima (mmHG) :</p>
                            <input disabled value="<?php echo $recebido2['minima']; ?>" type="text" id="minimaid" name="minima" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Mínima (mmHG)" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <br>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Diagnóstico presuntivo:</p>
                            <input disabled value="<?php echo $recebido2['Diagnosticopresuntivo']; ?>" type="text" id="Diagnosticopresuntivoid" name="Diagnosticopresuntivo" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Diagnóstico presuntivo" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <br>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Exames complementares:</p>
                            <input disabled value="<?php echo $recebido2['Examescomplementares']; ?>" type="text" id="Examescomplementaresid" name="Examescomplementares" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Exames complementares" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <br>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Diagnóstico definitivo:</p>
                            <input disabled value="<?php echo $recebido2['Diagnosticodefinitivo']; ?>" type="text" id="Diagnosticodefinitivoid" name="Diagnosticodefinitivo" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Diagnóstico definitivo" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <br>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Tratamento/Proservação:</p>
                            <input disabled value="<?php echo $recebido2['TratamentoProservação']; ?>" type="text" id="Tratamento/Proservaçãoid" name="TratamentoProservação" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Tratamento/Proservação" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <br>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Plano de Tratamento:</p>
                            <input disabled value="<?php echo $recebido2['PlanodeTratamentoid']; ?>" type="text" id="PlanodeTratamentoid" name="PlanodeTratamentoid" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Plano de Tratamento" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                </div>

                <div>
                    <br>

                    <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                    <p>Atendimento de Urgência (Estágio Sup. em Clínica Odontológica Integrada – URGÊNCIA)</p>
                                    <input disabled value="<?php echo $recebido2['AtendimentoDeUrgencia']; ?>" type="text" name="AtendimentoDeUrgencia" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                    <br>

                    <div>

                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                    <p>Medicação</p>
                                    <input disabled value="<?php echo $recebido2['Medicacao']; ?>" type="text" name="Medicacao" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                        <div style="height: 1px; width: 100%; background-color: #ebebeb;"></div>
                    </div>

                    <br>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Qual medicação?</p>
                            <input disabled value="<?php echo $recebido2['tipoMedicacao']; ?>" type="text" name="tipoMedicacao" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Se sim, qual medicação?" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                </div>
                <br>

            </div>

            <br>
        </div>

    </div>

    <br>
    <br>
    <br>
    <br>

    <!-- <center>
			<article>
				<h1><?php echo $nome_user; ?> voc&ecirc; est&aacute; logado...</h1>
				<a href="logout.php"><input type="button" value="Sair" /></a>
			</article>
		</center> -->

    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Local</h4>
                    <p class="lead mb-0">
                        R. Irmã Arminda, 10-50 - Jardim Brasil
                        <br />
                        Bauru - SP, 17011-160
                    </p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Unisagrado na WEB</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/UNISAGRADOBauru"><i class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/unisagrado_oficial/"><i class="fab fa-fw fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/school/unisagradobauru/"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://unisagrado.edu.br/"><i class="fab fa-fw fa-dribbble"></i></a>
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">Desenvolvido por</h4>
                    <p class="lead mb-0">
                        Daniel S. Saluceste <br>
                        João Renato Repker Voros <br>
                        Endrio
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Sistema odontologico - 2021</small></div>
    </div>
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
    <div class="scroll-to-top d-lg-none position-fixed">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

</body>

</html>