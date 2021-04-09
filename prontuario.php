
<?php
  //starta a sessão
    session_start();
  ob_start();
  //resgata os valores das session em variaveis
  $id_users = isset($_SESSION['id_users']) ? $_SESSION['id_users']: ""; 
  $nome_user = isset($_SESSION['nome']) ? $_SESSION['nome']: "";  
  $email_users = isset($_SESSION['email']) ? $_SESSION['email']: "";  
  $pass_users = isset($_SESSION['pass']) ? $_SESSION['pass']: ""; 
  $logado = isset($_SESSION['logado']) ? $_SESSION['logado']: "N";  
  //varificamos e a var logado contém o valos (S) OU (N), se conter N quer dizer que a pessoa não fez o login corretamente
  //que no caso satisfará nossa condição no if e a pessoa sera redirecionada para a tela de login novamente
  if ($logado == "N" && $id_users == ""){     
    echo  "<script type='text/javascript'>
          location.href='index.php'
        </script>"; 
    exit();
  }
?>

<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8"/>
  <title>Prontuario</title>
  <meta charset="utf-8">

    <link href="css/ContatoEstilo.css" rel="stylesheet" media="all" />
    <script src="JavaScript1.js"></script>
</head>
<body background="img/fundo.png">
  <form name="meu_form" method="POST" action="prontuario.php">

    <h1>Prontuario</h1>

    <label for="nome">Nome</label>
      <input type="text" id="nomeid" placeholder="Tiago Vale" required="required" name="nome" /><br><br>

    <label for="fone">Fone</label>
      <input type="tel" id="foneid" placeholder="(xx)xx-xx-xx-xx" name="fone" /><br><br>
      
    <label for="email">Email</label>
      <input type="email" id="emailid" placeholder="fulano@mail.com" name="email" /><br><br>
      
      <textarea placeholder="Deixe sua opnião"></textarea>

      <input type="submit" class="enviar" onclick="Enviar();" value="Enviar">
  </form>

  <center>
    <article>
      <h1><?php echo $nome_user;?> voc&ecirc; est&aacute; logado...</h1>
      <a href="avaliacao.php"><input type="button" value="Voltar"/></a>
      <a href="logout.php"><input type="button" value="Sair"/></a>
    </article>
  </center>
</body>
</html>