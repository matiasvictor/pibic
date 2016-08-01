<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
	<title>Untitled Document</title>
</head>

<body>
	<?php 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$nome	= (isset($_POST ["nome"]) ? $_POST["nome"] : null);	//atribuição do campo "nome" vindo do formulário para variavel	
$email	= (isset($_POST ["email"]) ? $_POST["email"] : null);	//atribuição do campo "email" vindo do formulário para variavel
$ddd	= (isset($_POST ["ddd"]) ? $_POST["ddd"] : null);	//atribuição do campo "ddd" vindo do formulário para variavel
$tel	= (isset($_POST ["telefone"]) ? $_POST["telefone"] : null);	//atribuição do campo "telefone" vindo do formulário para variavel
$endereco	= (isset($_POST ["endereco"]) ? $_POST["endereco"] : null);	//atribuição do campo "endereco" vindo do formulário para variavel
$cidade	= (isset($_POST ["cidade"]) ? $_POST["cidade"] : null);	//atribuição do campo "cidade" vindo do formulário para variavel
$estado	= (isset($_POST ["estado"]) ? $_POST["estado"] : null);	//atribuição do campo "estado" vindo do formulário para variavel
$bairro = (isset($_POST ["bairro"]) ? $_POST["bairro"] : null);	//atribuição do campo "bairro" vindo do formulário para variavel
$pais	= (isset($_POST ["pais"]) ? $_POST["pais"] : null);	//atribuição do campo "pais" vindo do formulário para variavel
$login	= (isset($_POST ["login"]) ? $_POST["login"] : null);	//atribuição do campo "login" vindo do formulário para variavel
$senha	= (isset($_POST ["senha"]) ? $_POST["senha"] : null);	//atribuição do campo "senha" vindo do formulário para variavel
$sexo	= (isset($_POST ["sexo"]) ? $_POST["sexo"] : null); //atribuição do campo "sexo" vindo do formulário para variavel
//Gravando no banco de dados !

$servername = "localhost";
$username = "root";
$password = "pibic";
$bdados = "clientes";


//conectando com o localhost - mysql
$conexao = mysqli_connect($servername, $username, $password, $bdados);
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());

//conectando com a tabela do banco de dados
$banco = mysqli_select_db($conexao, $bdados);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysqli_error());



$query =  "INSERT INTO Clientes (nome , email , sexo , ddd, telefone, endereco , cidade , estado , bairro , pais , login , senha , id) VALUES ('$nome', '$email', '$sexo', $ddd, $tel, '$endereco', '$cidade', '$estado', '$bairro', '$pais', '$login', '$senha', id)";


echo $query;

mysqli_query($conexao, $query);




echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?> 
</body>
</html>