
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
  <title>Ficha de Avaliação</title>
  <meta charset="utf-8">

    <link href="css/ContatoEstilo.css" rel="stylesheet" media="all" />
    <script src="JavaScript1.js"></script>
</head>
<body>
  <form name="meu_form" method="POST" action="class/ConectaBanco2.php">
    
    <h1>Ficha de Avaliação</h1>

    <div>
      <label for="nomepaciente">Nome do Paciente:</label>
      <input type="text" id="nomepacienteid" name="nomepaciente">

      <label for="cadastro">&nbsp &nbsp Cadastro:</label>
      <input type="text" id="cadastroid" name="cadastro">

      <br>
      <br>

      <label for="1)queixaprincipal">1) Queixa Principal</label><br>
      <textarea id="1)queixaprincipalid" name="1)queixaprincipal"></textarea>

      <br>
      <br>

      <label for="2)historiadadoenca">2) História da doença atual</label><br>
      <textarea id="2)historiadadoencaid" name="2)historiadadoenca"></textarea>
    </div>

    <br>

    <div>
      <label for="3.1)questionariodesaude">3.1) Questionário de Saúde</label>

      <br>
      <br>

      <label for="1-jatevehemorragia">1-Já Teve Hemorragia?</label>
        <label>
          <input type="radio" id="3.1)1sid" name="3.1)1" value="Sim">Sim
        </label>
        <label>
          <input type="radio" id="3.1)1nid" name="3.1)1" value="Nao">Não
        </label>

        <br>
        <br>

      <label for="2-sofre(u)dealergia">2-Sofre(u) de alergia?</label>
        <label>
          <input type="radio" id="3.1)2sid" name="3.1)2" value="Sim">Sim
        </label>
        <label>
          <input type="radio" id="3.1)2nid" name="3.1)2" value="Nao">Não
        </label>

        <br>
        <br>

      <label for="3-tevereumatismoinfeccioso">3-Teve reumatismo infeccioso?</label>
        <label>
          <input type="radio" id="3.1)3sid" name="3.1)3" value="Sim">Sim
        </label>
        <label>
          <input type="radio" id="3.1)3nid" name="3.1)3" value="Nao">Não
        </label>

        <br>
        <br>

      <label for="4-sofre(u)dedistúrbiocardiovascular">4-Sofre(u) de distúrbio cardiovascular?</label>
        <label>
          <input type="radio" id="3.1)4sid" name="3.1)4" value="Sim">Sim
        </label>
        <label>
          <input type="radio" id="3.1)4nid" name="3.1)4" value="Nao">Não
        </label>

        <br>
        <br>

      <label for="5-sofre(u)degastrite">5-Sofre(u) de gastrite?</label>
        <label>
          <input type="radio" id="3.1)5sid" name="3.1)5" value="Sim">Sim
        </label>
        <label>
          <input type="radio" id="3.1)5nid" name="3.1)5" value="Nao">Não
        </label>

        <br>
        <br>

      <label for="6-Édiabéticooutemfamiliaresdiabéticos">6-É diabético ou tem familiares diabéticos?</label>
        <label>
          <input type="radio" id="3.1)6sid" name="3.1)6" value="Sim">Sim
        </label>
        <label>
          <input type="radio" id="3.1)6nid" name="3.1)6" value="Nao">Não
        </label>

        <br>
        <br>

      <label for="7-Jádesmaioualgumavez">7-Já desmaiou alguma vez?</label>
        <label>
          <input type="radio" id="3.1)7sid" name="3.1)7" value="Sim">Sim
        </label>
        <label>
          <input type="radio" id="3.1)7nid" name="3.1)7" value="Nao">Não
        </label>

        <br>
        <br>

      <label for="8-Estásobtratamentomédico?">8-Está sob tratamento médico?</label>
        <label>
          <input type="radio" id="3.1)8sid" name="3.1)8" value="Sim">Sim
        </label>
        <label>
          <input type="radio" id="3.1)8nid" name="3.1)8" value="Nao">Não
        </label>

        <br>
        <br>

      <label for="9-Estátomandoalgummedicamento?">9-Está tomando algum medicamento?</label>
        <label>
          <input type="radio" id="3.1)9sid" name="3.1)9" value="Sim">Sim
        </label>
        <label>
          <input type="radio" id="3.1)9nid" name="3.1)9" value="Nao">Não
        </label>

        <br>
        <br>

      <label for="10-Estevedoenteoufoioperadonosúltimos5anos?">10-Esteve doente ou foi operado nos últimos 5 anos?</label>
        <label>
          <input type="radio" id="3.1)10sid" name="3.1)10" value="Sim">Sim
        </label>
        <label>
          <input type="radio" id="3.1)10nid" name="3.1)10" value="Nao">Não
        </label>

        <br>
        <br>

      <label for="11-Temhábitosvíciosoumanias">11-Tem hábitos,vícios ou manias?</label>
        <label>
          <input type="radio" id="3.1)11sid" name="3.1)11" value="Sim">Sim
        </label>
        <label>
          <input type="radio" id="3.1)11nid" name="3.1)11" value="Nao">Não
        </label>

        <br>
        <br>

      <label for="12-Temansiedade/depressão">12-Tem ansiedade/depressão?</label>
        <label>
          <input type="radio" id="3.1)12sid" name="3.1)12" value="Sim">Sim
        </label>
        <label>
          <input type="radio" id="3.1)12nid" name="3.1)12" value="Nao">Não
        </label>

    </div>

    <div>
      <br>
        <br>

      <label for="13-Vocêe/oualgumfamiliartevealgumasdessasdoenças">13-Você e/ou algum familiar  teve algumas dessas doenças</label>

      <br>
        <br>

      <label for="Tuberculose">Tuberculose</label>
        <label>
          <input type="radio" id="3.1)13Tuberculosesid" name="3.1)13Tuberculose" value="Sim">Sim
        </label>
        <label>
          <input type="radio" id="3.1)13Tuberculosenid" name="3.1)13Tuberculose" value="Nao">Não
        </label>

        <br>
        <br>

      <label for="Sífilis">Sífilis</label>
        <label>
          <input type="radio" id="3.1)13Sífilissid" name="3.1)13Sífilis" value="Sim">Sim
        </label>
        <label>
          <input type="radio" id="3.1)13Sífilisnid" name="3.1)13Sífilis" value="Nao">Não
        </label>

        <br>
        <br>

      <label for="HepatiteABC">Hepatite A, B, C</label>
        <label>
          <input type="radio" id="3.1)13HepatiteABCsid" name="3.1)13HepatiteABC" value="Sim">Sim
        </label>
        <label>
          <input type="radio" id="3.1)13HepatiteABCnid" name="3.1)13HepatiteABC" value="Nao">Não
        </label>

        <br>
        <br>

      <label for="SIDA/AIDS">SIDA/AIDS</label>
        <label>
          <input type="radio" id="3.1)13SIDA/AIDSsid" name="3.1)13SIDA/AIDS" value="Sim">Sim
        </label>
        <label>
          <input type="radio" id="3.1)13HSIDA/AIDSnid" name="3.1)13SIDA/AIDS" value="Nao">Não
        </label>

        <br>
        <br>

      <label for="Sarampo">Sarampo</label>
        <label>
          <input type="radio" id="3.1)13Saramposid" name="3.1)13Sarampo" value="Sim">Sim
        </label>
        <label>
          <input type="radio" id="3.1)13Saramponid" name="3.1)13Sarampo" value="Nao">Não
        </label>

        <br>
        <br>

      <label for="Caxumba">Caxumba</label>
        <label>
          <input type="radio" id="3.1)13Caxumbasid" name="3.1)13Caxumba" value="Sim">Sim
        </label>
        <label>
          <input type="radio" id="3.1)13Caxumbanid" name="3.1)13Caxumba" value="Nao">Não
        </label>

        <br>
        <br>

      <label for="Varicela">Varicela</label>
        <label>
          <input type="radio" id="3.1)13Varicelasid" name="3.1)13Varicela" value="Sim">Sim
        </label>
        <label>
          <input type="radio" id="3.1)13Varicelanid" name="3.1)13Varicela" value="Nao">Não
        </label>

        <br>
        <br>

      <label for="outras">Outras</label>
      <input type="text" id="outrasid" name="outras">
      <label>
          <input type="radio" id="3.1)13outrassid" name="3.1)13outras" value="Sim">Sim
        </label>
        <label>
          <input type="radio" id="3.1)13outrasnid" name="3.1)13outras" value="Nao">Não
        </label>  
    </div>

    <div>
      <br>
        <br>

      <label for="14-Éfumante">14-É fumante?</label>
        <label>
          <input type="radio" id="3.1)14sid" name="3.1)14" value="Sim">Sim
        </label>
        <label>
          <input type="radio" id="3.1)14nid" name="3.1)14" value="Nao">Não
        </label>

        <label for="frequencia">&nbsp &nbsp Frequência:</label>
        <input type="text" id="frequenciaid" name="frequencia"><label for="dia"> dia</label>
    </div>

    <div>
      <br>
      <br>

      <label for="3.2)Questionáriocomplementarinfantil-ODONTOPEDIATRIA">3.2) Questionário complementar infantil - ODONTOPEDIATRIA</label>

      <br>
      <br>

      <label for="1-Históriadagestação">1-História da gestação:</label><br>
      <textarea id="3.2)1-Históriadagestação:id" name="3.2)1-Históriadagestação"></textarea>

      <br>
      <br>

      <label for="2-Nasceudeparto">2-Nasceu de parto:</label>
        <label>
          <input type="radio" id="3.2)2normalid" name="3.2)2" value="Normal">Normal
        </label>
        <label>
          <input type="radio" id="3.2)2aforcaid" name="3.2)2" value="Aforca">A força
        </label>
        <label>
          <input type="radio" id="3.2)2cesarianaid" name="3.2)2" value="Cesariana">Cesariana
        </label>

        <br>
      <br>

      <label for="3-Acriançatevealgumproblemanoparto">3-A criança teve algum problema no parto?</label>
        <label>
          <input type="radio" id="3.2)3sid" name="3.2)3" value="Sim">Sim
        </label>
        <label>
          <input type="radio" id="3.2)3nid" name="3.2)3" value="Nao">Não
        </label>

        <br>
      <br>

      <label for="4-Aamamentaçãofoi">4-A amamentação foi: </label>
        <label>
          <input type="radio" id="3.2)4naturalid" name="3.2)4" value="Natural">Natural
        </label>
        <label>
          <input type="radio" id="3.2)4mamadeiraid" name="3.2)4" value="Mamadeira">Mamadeira
        </label>

        <label for="ateaidadede">até a idade de :</label>
        <input type="text" id="ateaidadedeid" name="ateaidadede">

        <br>
      <br>

      <label for="5-Jálhefoiditoparanãotomaranestesialocal">5-Já lhe foi dito para não tomar anestesia local?</label>
        <label>
          <input type="radio" id="3.2)5sid" name="3.2)5" value="Sim">Sim
        </label>
        <label>
          <input type="radio" id="3.2)5nid" name="3.2)5" value="Nao">Não
        </label>

        <br>
      <br>

      <label for="6-Játeveouviveucomalguémquetivessedoençagraveecontagiosa">6-Já teve ou viveu com alguém que tivesse doença grave e contagiosa?</label>
        <label>
          <input type="radio" id="3.2)6sid" name="3.2)6" value="Sim">Sim
        </label>
        <label>
          <input type="radio" id="3.2)6nid" name="3.2)6" value="Nao">Não
        </label>

        <br>
      <br>

      <label for="7-Acriançajáfoivacinada">7-A criança já foi vacinada?</label>
        <label>
          <input type="radio" id="3.2)7sid" name="3.2)7" value="Sim">Sim
        </label>
        <label>
          <input type="radio" id="3.2)7nid" name="3.2)7" value="Nao">Não
        </label>
    </div>

    <div>
      <br>
      <br>

      <label for="CONDUTADACRIANÇA">CONDUTA DA CRIANÇA</label>

      <br>
      <br>

      <label for="Duranteos2primeirosanosdevida">Durante os 2 primeiros anos de vida:</label>
        <label>
          <input type="radio" id="sentou-seid" name="primeirosanos" value="Sentou">Sentou-se
        </label>
        <label>
          <input type="radio" id="engatinhouid" name="primeirosanos" value="Engatinhou">Engatinhou
        </label>
        <label>
          <input type="radio" id="andouid" name="primeirosanos" value="Andou">Andou
        </label>
        <label>
          <input type="radio" id="falouid" name="primeirosanos" value="Falou">Falou
        </label>

        <br>
      <br>

      <label for="Nolarenaescolatevealgumadificuldadenoaprendizado">No lar e na escola: teve alguma dificuldade no aprendizado?</label>
        <label>
          <input type="radio" id="Aprendizadosid" name="dificuldadeAprentizado" value="Sim">Sim
        </label>
        <label>
          <input type="radio" id="Apendizadonid" name="dificuldadeAprentizado"  value="Nao">Não
        </label>

        <br>
      <br>

      <label for="Estadoanímico">Estado anímico:</label>
        <label>
          <input type="radio" id="Alegreid" name="Estadoanímico" value="Alegre">Alegre
        </label>
        <label>
          <input type="radio" id="Tristeid" name="Estadoanímico" value="Triste">Triste 
        </label>
        <label>
          <input type="radio" id="Tímidoid" name="Estadoanímico" value="Timido">Tímido 
        </label>
        <label>
          <input type="radio" id="Tranquiloid" name="Estadoanímico" value="Tranquilo">Tranquilo 
        </label>
        <label>
          <input type="radio" id="Inquietoid" name="Estadoanímico" value="Inquieto">Inquieto  
        </label>
        <label>
          <input type="radio" id="Assustadoid" name="Estadoanímico" value="Assustado">Assustado 
        </label>

        <br>
      <br>

      <label for="Temsono">Tem sono:</label>
      <label>
          <input type="radio" id="Tranquiloid" name="sono" value="Tranquilo">Tranquilo 
        </label>
        <label>
          <input type="radio" id="Intranquiloid" name="sono" value="Intranquilo">Intranquilo
        </label>
        <label>
          <input type="radio" id="Terrornoturnoid" name="sono" value="TNoturno">Terror noturno
        </label>
        <label>
          <input type="radio" id="Pesadelosid" name="sono" value="Pesadelo">Pesadelos
        </label>
        <label>
          <input type="radio" id="Sonambulismoid" name="sono" value="Sonambulo">Sonambulismo
        </label>
        <label>
          <input type="radio" id="Insoniaid" name="sono" value="Insonia">Insônia
        </label>

        <br>
      <br>

      <label for="Condutapsicomotora">Conduta psicomotora:</label>
      <label>
          <input type="radio" id="Insoniaid" name="psicomotora" value="PostNrml">Postura normal
        </label>
        <label>
          <input type="radio" id="Posturaalteradaid" name="psicomotora" value="PostAltr">Postura alterada
        </label>
        <label>
          <input type="radio" id="Fonaçãonormalid" name="psicomotora" value="FonacaoNrml">Fonação normal
        </label>
        <label>
          <input type="radio" id="Distúrbiosdafalaid" name="psicomotora" value="DisturbFala">Distúrbios da fala
        </label>
        <label>
          <input type="radio" id="Algumaparalisiaid" name="psicomotora" value="Paralisia">Alguma paralisia
        </label>
        <label>
          <input type="radio" id="Enuresenoturnaid" name="psicomotora" value="EnureseNot">Enurese noturna
        </label>
        <label>
          <input type="radio" id="Descontroledosesfínctereid" name="psicomotora" value="DescEsfin">Descontrole dos esfíncteres
        </label>

        <br>
      <br>

      <label for="Alimentação">Alimentação:</label>
      <label>
          <input type="radio" id="Rejeitaid" name="Alimentação" value="Rejeita">Rejeita
        </label>
        <label>
          <input type="radio" id="Alimenta-senormalmenteid" name="Alimentação" value="AlimeNorm">Alimenta-se normalmente
        </label>
        <label>
          <input type="radio" id="Supraalimenta-seid" name="Alimentação" value="SupraAlim">Supra alimenta-se
        </label>

        <br>
      <br>

      <label for="Sociabilidade">Sociabilidade:</label>
      <label>
          <input type="radio" id="Isoladaid" name="Sociabilidade" value="Isolada">Isolada
        </label>
        <label>
          <input type="radio" id="Agressivaid" name="Sociabilidade" value="Agressiva">Agressiva
        </label>
        <label>
          <input type="radio" id="Relaçõesnormaisid" name="Sociabilidade" value="RelacaoNorm">Relações normais
        </label>

        <br>
      <br>

      <label for="Apresentaalgumapatologiadeconduta">Apresenta alguma patologia de conduta:</label>
      <label>
          <input type="radio" id="Tiquesid" name="patologia" value="Tiques">Tiques
        </label>
        <label>
          <input type="radio" id="Fobiasid" name="patologia" value="Fobias">Fobias
        </label>
        <label>
          <input type="radio" id="Ansiedadeid" name="patologia" value="Ansiedade">Ansiedade
        </label>
        <label>
          <input type="radio" id="Medoid" name="patologia" value="Medo">Medo
        </label>
        <label>
          <input type="radio" id="Birraid" name="patologia" value="Birra">Birra
        </label>
        <label>
          <input type="radio" id="Ciumesid" name="patologia" value="Ciumes">Ciúmes
        </label>

        <br>
        <br>

        <label for="Observações">Observações:</label><br>
      <textarea id="Observaçõesid" name="Observações"></textarea>

    </div>

    <div>
      <br>
      <br>

      <label for="4)examefisico">4)Exame Físico</label>

      <br>
      <br>

      <label for="1-Lábios">1 - Lábios:</label>
        <label>
          <input type="radio" id="4)1nid" name="4)1" value="Normal">Normal
        </label>
        <label>
          <input type="radio" id="4)1aid" name="4)1" value="Alterado">Alterado
        </label>

        <br>
      <br>

      <label for="2-MucosaJugal">2 - Mucosa Jugal</label>
        <label>
          <input type="radio" id="4)2nid" name="4)2" value="Normal">Normal
        </label>
        <label>
          <input type="radio" id="4)2aid" name="4)2" value="Alterado">Alterado
        </label>

        <br>
      <br>

      <label for="3-Língua">3 - Língua</label>
        <label>
          <input type="radio" id="4)3nid" name="4)3" value="Normal">Normal
        </label>
        <label>
          <input type="radio" id="4)3aid" name="4)3" value="Alterado">Alterado
        </label>

        <br>
      <br>

      <label for="4-Soalhodaboca">4 - Soalho da boca</label>
        <label>
          <input type="radio" id="4)4nid" name="4)4" value="Normal">Normal
        </label>
        <label>
          <input type="radio" id="4)4aid" name="4)4" value="Alterado">Alterado
        </label>

        <br>
      <br>

      <label for="5-Palatoduro">5 - Palato duro</label>
        <label>
          <input type="radio" id="4)5nid" name="4)5" value="Normal">Normal
        </label>
        <label>
          <input type="radio" id="4)5aid" name="4)5" value="Alterado">Alterado
        </label>

        <br>
      <br>

      <label for="6-Garganta">6 - Garganta</label>
        <label>
          <input type="radio" id="4)6nid" name="4)6" value="Normal">Normal
        </label>
        <label>
          <input type="radio" id="4)6aid" name="4)6" value="Alterado">Alterado
        </label>

        <br>
      <br>

      <label for="7-Palatomole">7 - Palato mole</label>
        <label>
          <input type="radio" id="4)7nid" name="4)7" value="Normal">Normal
        </label>
        <label>
          <input type="radio" id="4)7aid" name="4)7" value="Alterado">Alterado
        </label>

        <br>
      <br>

      <label for="8-MucosaAlveolar">8 - Mucosa Alveolar</label>
        <label>
          <input type="radio" id="4)8nid" name="4)8" value="Normal">Normal
        </label>
        <label>
          <input type="radio" id="4)8aid" name="4)8" value="Alterado">Alterado
        </label>

        <br>
      <br>

      <label for="9-Gengivas">9 - Gengivas</label>
        <label>
          <input type="radio" id="4)9nid" name="4)9" value="Normal">Normal
        </label>
        <label>
          <input type="radio" id="4)9aid" name="4)9" value="Alterado">Alterado
        </label>

        <br>
      <br>

      <label for="10-GlândulasSalivares">10 - Glândulas Salivares</label>
        <label>
          <input type="radio" id="4)10nid" name="4)10" value="Normal">Normal
        </label>
        <label>
          <input type="radio" id="4)10aid" name="4)10" value="Alterado">Alterado
        </label>

        <br>
      <br>

      <label for="11-Linfonodos">11 - Linfonodos</label>
        <label>
          <input type="radio" id="4)11nid" name="4)11" value="Normal">Normal
        </label>
        <label>
          <input type="radio" id="4)11aid" name="4)11" value="Alterado">Alterado
        </label>

        <br>
      <br>

      <label for="12-ATM">12 - ATM</label>
        <label>
          <input type="radio" id="4)12nid" name="4)12" value="Normal">Normal
        </label>
        <label>
          <input type="radio" id="4)12aid" name="4)12" value="Alterado">Alterado
        </label>

        <br>
      <br>

      <label for="13-MúsculosMastigadores">13 - Músculos Mastigadores</label>
        <label>
          <input type="radio" id="4)13nid" name="4)13" value="Normal">Normal
        </label>
        <label>
          <input type="radio" id="4)13aid" name="4)13" value="Alterado">Alterado
        </label>

        <br>
      <br>

      <label for="14-Oclusão">14 - Oclusão</label>
        <label>
          <input type="radio" id="4)14nid" name="4)14" value="Normal">Normal
        </label>
        <label>
          <input type="radio" id="4)14aid" name="4)14" value="Alterado">Alterado
        </label>

        <br>
        <br>

        <label for="Alteraçõesencontradas">Alterações encontradas:</label><br>
      <textarea id="Alteraçõesencontradasid" name="Alteraçõesencontradas"></textarea>
    </div>

    <div>
      <br>
      <br>

      <label for="5)PRESSAOARTERIAL">5) PRESSÃO ARTERIAL</label>

      <br>
      <br>

      <label for="maxima">Máxima:</label>
        <input type="text" id="maximaid" name="maxima"><label for="mmHG"> mmHG</label>

        <br>
      <br>

      <label for="minima">Mínima:</label>
        <input type="text" id="minimaid" name="minima"><label for="mmHG"> mmHG</label>

        <br>
        <br>

        <label for="Diagnosticopresuntivo">Diagnóstico presuntivo:</label><br>
      <textarea id="Diagnosticopresuntivoid" name="Diagnosticopresuntivo"></textarea>

      <br>
        <br>

        <label for="Examescomplementares">Exames complementares:</label><br>
      <textarea id="Examescomplementaresid" name="Examescomplementares"></textarea>

      <br>
        <br>

      <label for="Diagnosticodefinitivo">Diagnóstico definitivo:</label><br>
      <textarea id="Diagnosticodefinitivoid" name="Diagnosticodefinitivo"></textarea>

      <br>
        <br>

      <label for="Tratamento/Proservação">Tratamento/Proservação:</label><br>
      <textarea id="Tratamento/Proservaçãoid" name="Tratamento/Proservação"></textarea>

      <br>
        <br>

      <label for="PlanodeTratamento">Plano de Tratamento:</label><br>
      <textarea id="PlanodeTratamentoid" name="PlanodeTratamentoid"></textarea>
    </div>

    <div>
      <br>

      <input type="checkbox" id="AtendimentoDeUrgenciaid" name="AtendimentoDeUrgencia" value="AtendimentoDeUrgencia">
      <label for="AtendimentoDeUrgenciaid">Atendimento de Urgência (Estágio Sup. em Clínica Odontológica Integrada – URGÊNCIA)</label>

      <br>
      <br>

      <label for="Medicacao">Medicação</label><br>
        <label>
          <input type="radio" id="Medicacaosid" name="Medicacao" value="Sim">Sim <input type="text" name="tipoMedicacao"><br>
        </label>
        <label>
          <input type="radio" id="Medicacaonid" name="Medicacao" value="Nao">Não
        </label>
    </div>

    
     <button type="submit" class="enviar">Enviar</button>
    
  </form>

  <center>
    <article>
      <h1><?php echo $nome_user;?> voc&ecirc; est&aacute; logado...</h1>
      <a href="logado.php"><input type="button" value="Voltar"/></a>
      <a href="logout.php"><input type="button" value="Sair"/></a>
    </article>
  </center>
</body>
</html>