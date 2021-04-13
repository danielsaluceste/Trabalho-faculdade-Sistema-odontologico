<?php	
require_once('Conexao.class.php');
	
class Autentica extends Conexao{
	private $data = array();

	public function __construct(){
		$this->erro = '';
	}
	
	public function __set($name, $value){
		$this->data[$name] = $value;
	}

	public function __get($name){
		if (array_key_exists($name, $this->data)) {
			return $this->data[$name];
		}

		$trace = debug_backtrace();
		trigger_error(
			'Undefined property via __get(): ' . $name .
			' in ' . $trace[0]['file'] .
			' on line ' . $trace[0]['line'],
			E_USER_NOTICE);
		return null;
	}
		
		public function Validar_Usuario(){
			//instancio minha classe conexуo que foi herdada
			$pdo = new Conexao(); 
			//chamamos nosso mщtodo select da classe conexуo que nos retornarс um conjunto de dados
			$resultado = $pdo->select("SELECT * FROM users WHERE email = '".$this->email."' AND pass = '".$this->pass."'");
			//desconectamos
			$pdo->desconectar();
			//agora vamos resgatar os valores obtidos pelo nosso mщtodo atravщs do foreach
			//verificamos se houve registros dentro de nossa var se sim entra no if
			if(count($resultado)){
				foreach ($resultado as $res) {
					//estartamos nossa sessуo para podermos usar os dados do usuario em nossa aplicaчуo atravщs de
					//session, na qual podemos usar para controle de verificar se o user estс logado ou nуo, mostrar o nome do user na tela e etc.
					session_start();
					ob_start();
					//setamos as session com os valores obtido da tabela
					$_SESSION['id_users'] = $res['id_users'];
					$_SESSION['nome'] = $res['nome'];
					$_SESSION['email'] = $res['email'];
					$_SESSION['pass'] = $res['pass'];
					$_SESSION['logado'] = 'S';
			}
				//se tudo ocorrer bem retornamos true, ou seja verdade
				return true;
			}else{
				//se algo deu errado retornamos false
				return false;
			}
		}
		
		public function Inseri_Usuario(){
			//instancio minha classe conexуo que foi herdada
			$pdo = new Conexao(); 
			//chamamos nosso mщtodo select da classe conexуo que nos retornarс um conjunto de dados
			$result = $pdo->prepare("INSERT INTO cadastro (nome, fone, email) VALUES ('nome', 'fone', 'email')");
			$pdo->desconectar(); 
			//agora vamos resgatar os valores obtidos pelo nosso mщtodo atravщs do foreach
			//verificamos se houve registros dentro de nossa var se sim entra no if
			if(count($result)){
				foreach ($result as $res) {
					//estartamos nossa sessуo para podermos usar os dados do usuario em nossa aplicaчуo atravщs de
					//session, na qual podemos usar para controle de verificar se o user estс logado ou nуo, mostrar o nome do user na tela e etc.
					session_start();
					ob_start();
					//setamos as session com os valores obtido da tabela
					$_SESSION['nomeid'] = $res['nome'];
					$_SESSION['foneid'] = $res['fone'];
					$_SESSION['emailid'] = $res['email'];
			}
				//se tudo ocorrer bem retornamos true, ou seja verdade
				return true;
			}else{
				//se algo deu errado retornamos false
				return false;
			}
		}
}
?>