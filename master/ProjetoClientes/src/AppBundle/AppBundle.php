<?php

//namespace src\AppBundle\AppBundle;
namespace src\AppBundle\AppBundle;

//use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\HttpKernel\Bundle\Bundle;
//use C:\Apache\Apache24\htdocs\ProjetoClientes\vendor\symfony\symfony\src\Symfony\Component\HttpKernel\Bundle;
//use vendor\symfony\symfony\src\Symfony\Component\HttpKernel\Bundle;

class AppBundle extends Bundle
{
	private $clientes;
	
	public function Cadastro() {
		//$cadastro = array();
		
		$array = array( 'matricula' -> $matricula,
							   'nome' -> $nome,
							   'dtnascimento' -> $dtnascimento,
							   'endereco' -> $endereco,
							   'email' -> $email,
							   'telefone' -> $telefone,
							   'celular' -> $celular,
							   'login' -> $login,
							   'senha' -> $senha );

	}
	
	/*public function Incluir(){
		 $this->cadastro[] = $incluirCliente;
	}
	
	public function todosClientes(){
        foreach($this->cadastro as $obj){
            echo "Matrícula: {$obj->getMatricula() } <br/>
				  Nome: {$obj->getNome()}<br/>
                  Telefone: {$obj->getTelefone()}<br/>
                  Email: {$obj->getEmail()}<br/>
                  -----------------<br/>";
        }
    }
	*/
		
	/*function __construct() {
       $this->matricula = $matricula;
	   $this->nome = $nome;
	   $this->dtnascimento = $dtnascimento;
	   $this->endereco = $endereco;
	   $this->email = $email;
	   $this->telefone = $telefone;
	   $this->celular = $celular;
	   $this->login = $login;
	   $this->senha = $senha;
	}*/
	    
}

$cliente = new AppBundle();
?>
<html>
<body>

<form>
	Matrícula: 	<input name='txtMatricula'>
</form>

</body>
</html>
