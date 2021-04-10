<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "postlogin";

$pdo = new PDO('mysql:host=localhost;dbname=postlogin', $username, $password);

$cpf = $_POST["cpf"];

$consulta = $pdo->query("SELECT * FROM cadastro WHERE cpf='$cpf';");

$recebido;

while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo "Nome: {$linha['nome']}<br />";
    $recebido = $linha;
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
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="cadastroPaciente.php">Cadastro</a></li>

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
    <br>
    <br>
    <br>

    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Resultado da consulta</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-user-plus"></i></div>
            <div class="divider-custom-line"></div>
        </div>

    </div>


    <div style="text-align: center; display: flex; width: 100%; justify-content: center; margin-top: 50px;">

        <br>

        <div style="width: 80%; border-radius: 5px; border-color: #117964; border-style: solid; padding: 15px;">

            <h4 style="margin-top: 10px; color: #117964" for="filiacao">CADASTRO DO PACIENTE</h4>

            <div>

                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                        <p>Nome</p>
                        <input disabled value="<?php echo $recebido['nome']; ?>" type="text" id="nomeid" name="nome" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Nome" />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>

                <br>
                <br>

                <div style="display: flex; width: 100%;">

                <div class="control-group" style="width: 49%;">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                        <p>Data de nascimento</p>
                        <input disabled value="<?php echo $recebido['data']; ?>" type="date" id="dataid" name="data" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>

                <div class="control-group" style="width: 49%; margin-left: 2%;">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                        <p>Sexo</p>
                        <input disabled value="<?php echo $recebido['sexo']; ?>" type="text" id="sexoid" name="sexo" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>

                </div>

                <br>
                <br>

            </div>

            <div style="display: flex;">

                <div class="control-group" style="width: 49%;">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                        <p>Peso</p>
                        <input disabled value="<?php echo $recebido['peso']; ?>" type="text" id="pesoid" name="peso" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Peso" />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>

                <div class="control-group" style="width: 49%; margin-left: 2%;">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                        <p>Altura</p>
                        <input disabled value="<?php echo $recebido['altura']; ?>" type="text" id="alturaid" name="altura" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Altura" />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>

                <div class="control-group" style="width: 49%; margin-left: 2%;">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                        <p>Cor</p>
                        <input disabled value="<?php echo $recebido['cor']; ?>" type="text" id="corid" name="cor" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Cor" />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>

            </div>

            <div>
                <br>

                <div style="display: flex;">

                    <div class="control-group" style="width: 49%;">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Escolaridade</p>
                            <input disabled value="<?php echo $recebido['escolaridade']; ?>" type="text" id="escolaridadeid" name="escolaridade" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Escolaridade" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <div class="control-group" style="width: 49%; margin-left: 2%;">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Profissão</p>
                            <input disabled value="<?php echo $recebido['profissao']; ?>" type="text" id="profissaoid" name="profissao" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Profissão" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                </div>

                <br>

                <div style="display: flex;">

                    <div class="control-group" style="width: 49%;">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>RG</p>
                            <input disabled value="<?php echo $recebido['rg']; ?>" type="text" id="rgid" name="rg" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="RG" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <div class="control-group" style="width: 49%; margin-left: 2%;">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>CPF</p>
                            <input disabled value="<?php echo $recebido['cpf']; ?>" type="text" id="cpfid" name="cpf" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="CPF" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <div class="control-group" style="width: 49%; margin-left: 2%;">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Estado Civil</p>
                            <input disabled value="<?php echo $recebido['estadocivil']; ?>" type="text" id="estadocivilid" name="estadocivil" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Estado Civil" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                </div>

                <br>

                <div style="display: flex;">

                    <div class="control-group" style="width: 49%;">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Naturalidade</p>
                            <input disabled value="<?php echo $recebido['naturalidade_paciente']; ?>" type="text" id="naturalidade_pacienteid" name="naturalidade_paciente" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Naturalidade" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <div class="control-group" style="width: 49%; margin-left: 2%;">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Estado</p>
                            <input disabled value="<?php echo $recebido['estado_naturalidade']; ?>" type="text" id="estado_naturalidadefid" name="estado_naturalidade" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Estado" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                </div>

                <br>
                <br>

                <h4 for="filiacao">Filiação</h4>

                <br>
                <br>

                <div style="display: flex;">

                    <div class="control-group" style="width: 49%;">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Pai</p>
                            <input disabled value="<?php echo $recebido['pai']; ?>" type="text" id="paiid" name="pai" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Pai" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <div class="control-group" style="width: 49%; margin-left: 2%;">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Nacionalidade do Pai</p>
                            <input disabled value="<?php echo $recebido['nacionalidadepai']; ?>" type="text" id="nacionalidadepaiid" name="nacionalidadepai" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Nacionalidade do Pai" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                </div>

                <br>
                <br>

                <div style="display: flex;">

                    <div class="control-group" style="width: 49%;">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Mãe</p>
                            <input disabled value="<?php echo $recebido['mae']; ?>" type="text" id="maeid" name="mae" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Mãe" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <div class="control-group" style="width: 49%; margin-left: 2%;">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Nacionalidade da Mãe</p>
                            <input disabled value="<?php echo $recebido['nacionalidademae']; ?>" type="text" id="nacionalidademaeid" name="nacionalidademae" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Nacionalidade da Mãe" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                </div>

            </div>

            <br>
            <br>

            <div>
                <br>

                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                        <p>Telefone</p>
                        <input disabled value="<?php echo $recebido['fone']; ?>" type="text" id="foneid" name="fone" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Telefone" />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>

                <br>
                <br>

                <div style="display: flex;">

                    <div class="control-group" style="width: 49%;">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Endereço</p>
                            <input disabled value="<?php echo $recebido['endereco']; ?>" type="text" id="enderecoid" name="endereco" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Endereço" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <div class="control-group" style="width: 49%; margin-left: 2%;">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Número</p>
                            <input disabled value="<?php echo $recebido['numero']; ?>" type="text" id="numeroid" name="numero" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Número" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                </div>

                <br>
                <br>

                <div style="display: flex;">

                    <div class="control-group" style="width: 49%;">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Complemento</p>
                            <input disabled value="<?php echo $recebido['complemento']; ?>" type="text" id="complementoid" name="complemento" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Complemento" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <div class="control-group" style="width: 49%; margin-left: 2%;">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Bairro</p>
                            <input disabled value="<?php echo $recebido['bairro']; ?>" type="text" id="bairroid" name="bairro" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Bairro" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                </div>

                <br>
                <br>

                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                        <p>CEP</p>
                        <input disabled value="<?php echo $recebido['cep']; ?>" type="text" id="cepid" name="cep" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="CEP" />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>

                <br>
                <br>

                <div style="display: flex;">

                    <div class="control-group" style="width: 49%;">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Cidade</p>
                            <input disabled value="<?php echo $recebido['cidade']; ?>" type="text" id="cidadeid" name="cidade" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Cidade" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <div class="control-group" style="width: 49%; margin-left: 2%;">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                            <p>Estado</p>
                            <input disabled value="<?php echo $recebido['estado']; ?>" type="text" id="estadoid" name="estado" style="border-radius: 5px; padding-left: 10px;" class="form-control" required="required" placeholder="Estado" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                </div>

            </div>

            <br>


        </div>
        <br>
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

</html