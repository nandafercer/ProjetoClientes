<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$matricula = $_POST["matricula"];
$nome	= $_POST ["nome"];	
$endereco = $_POST ["rua"] . ', ' . $_POST ["numero"] . ' - ' . $_POST ["bairro"] . ' - ' . $_POST ["cidade"] . ' - ' . $_POST ["uf"];
$email	= $_POST ["email"];	
$telefone = $_POST ["telefone"];
$celular = $_POST["celular"];	
$login	= $_POST ["login"];	
$senha	= $_POST ["senha"];	

//conectando com o localhost - mysql
$conexao = mysqli_connect("localhost","user","password","gestaoclientes");
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysqli_error());
//conectando com a tabela do banco de dados



$query = "INSERT INTO cliente ( `matricula`, `nome` , `endereco`, `email` , `telefone`, `celular`, `login` , `senha` ) 
VALUES ( '$matricula', '$nome', '$endereco', '$email', '$telefone', '$celular', '$login', '$senha')";

mysqli_query($query,$conexao);

echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?> 
</body>
</html>
