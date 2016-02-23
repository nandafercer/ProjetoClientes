<?php
$link = mysqli_connect("localhost", "user", "password", "gestaoclientes");


$matricula = $_POST["matricula"];
$nome = $_POST["nome"];
$dtnascimento = $_POST["dtnascimento"];
$rua = $_POST["rua"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$celular = $_POST["celular"];
$login = $_POST["login"];
$senha = $_POST["senha"];

$query = "INSERT INTO cliente VALUES ('$matricula', '$nome', '$dtnascimento', '$rua', '$email', '$telefone', '$celular', '$login', '$senha')";
mysqli_query( $query, $link );

if($query){
	echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>";
}else{
	echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
}
mysqli_close($link);
?>