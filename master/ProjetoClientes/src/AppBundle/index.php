<?php
namespace index;
?>

<html>
    <head>
        <title>Gestão de Clientes</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type='text/javascript' src="http://code.jquery.com/jquery-latest.js"></script>
        <script type='text/javascript' src='cep.js'></script>
     </head>
<body>
<p><b><font size=4>GESTÃO DE CLIENTES</p></font>
<form id="cadastro" class="cadastro" action='cadastro.php' method="post">
	<table>
	<tr>
		<td> Matrícula: </td>
		<td> <input name='matricula' id='matricula'></td>
	</tr>
	<tr>
		<td>Nome: </td>
		<td><input name='nome' id='nome'></td>
	</tr>
	<tr>
		<td><b>Endereço:</b> </td>
	</tr>
	<tr>
		<td>CEP: </td>
		<td><input name='cep' id='cep'></td>
		<td>Rua: </td>
		<td><input name='rua' id='rua'></td>
		<td>Nº: </td>
		<td><input name='numero' id='numero'></td>
	</tr>
	<tr>
		<td>Bairro: </td>
		<td><input name='bairro' id='bairro'> </td>
		<td>Cidade: </td>
		<td><input name='cidade' id='cidade'> </td>
		<td>UF: </td>
		<td><input name='uf' id='uf'> </td>
	</tr>
	<tr>
		<td>E-mail: </td>
		<td><input name='email' id='email'> </td>
	</tr>
	<tr>
		<td>Telefone: </td>
		<td><input name='telefone' id='telefone'> </td>
	</tr>
	<tr>
		<td>Celular: </td>
		<td><input name='celular' id='celular'> </td>
	</tr>
	<tr></tr>
	<tr>
		<td>Login: </td>
		<td><input name='login' id='login'> </td>
		<td>Senha: </td>
		<td><input name='senha' type='password' id='senha'> </td>
	</tr>	
	</table>
	<br><br>
	<input type=submit value='Cadastro' />
	
</form>
<?php
////inicio conexão bd
$link = mysqli_connect("localhost", "user", "password", "gestaoclientes") or print(mysql_error());

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$sql = 'Select * from cliente';
$result = $link->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

        echo "Matrícula: " . $row["matricula"]. " - Nome: " . $row["nome"] . " - E-mail: " . $row["email"] . "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($link);
////fim conexao
?>
</body>
</html>
