<?php

if ($_POST['action'] == 'cadastrar') {
    echo  "<script type='text/javascript'>
							location.href='cadastro.php'
						</script>";
} else {



$action = isset($_POST['acao']) ? trim($_POST['acao']) : '';
if (isset($action) && $action != "") {

    switch ($action) {
        case 'logar':
            //requerimos nossa classe de autenticação passando os valores dos inputs como parâmetros
            require_once('class/Autentica.class.php');
            //instancio a classse para podermos usar o método nela contida
            $Autentica = new Autentica();
            //setamos 
            $Autentica->email    = $_POST['email'];
            $Autentica->pass    = $_POST['pass'];
            //chamamos nosso método						
            if ($Autentica->Validar_Usuario()) {
                echo  "<script type='text/javascript'>
							location.href='logado.php'
						</script>";
            } else {
                echo  "<script type='text/javascript'>
							alert('ATEN\u00c7\u00c4O, Login ou Senha inv\u00e1lidos...');location.href='index.php'
						</script>";
            }
            break;
    }
}
}
?>