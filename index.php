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
    <link href="css/dstyle.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div style="text-align: center; display: flex; justify-content: center; width: 100%;">
            <a class="navbar-brand js-scroll-trigger">Sistema odontologico</a>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="" />

            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white mb-0">ENTRAR NO SISTEMA</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row">
                    <div class="col-lg-8 mx-auto">

                        <form name="form_pesquisa" id="form_pesquisa" method="post" action="recivepass.php">
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                    <label>E-mail</label>
                                    <input name="email" style="border-radius: 5px; padding-left: 10px;" class="form-control text-white" type="text" value="" placeholder="E-mail" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2" style="text-align: left;">
                                    <label>Senha</label>
                                    <input name="pass" style="border-radius: 5px; padding-left: 10px;" class="form-control" type="password" value="" placeholder="Senha" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br />
                            <div id="success"></div>
                            <div class="form-group"><button class="btn btn-secondary btn-xl" value="" type="submit">ENTRAR</button> <input type="hidden" name="acao" value="logar" /> </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </header>

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
        <div class="container"><small>Sistema odontologico Unisagrado - 2021</small></div>
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