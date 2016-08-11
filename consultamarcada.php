<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
	<title>Consulta Marcada</title>
</head>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<?php 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$hospital	= (isset($_POST ["hospital"]) ? $_POST["hospital"] : null);	//atribuição do campo "hospital" vindo do formulário para variavel	
$sintomas	= (isset($_POST ["sintomas"]) ? $_POST["sintomas"] : null);	//atribuição do campo "sintomas" vindo do formulário para variavel
$Id  = (isset($_GET['id']) ? $_GET['id'] : null);


//$ddd	= (isset($_POST ["ddd"]) ? $_POST["ddd"] : null);	//atribuição do campo "ddd" vindo do formulário para variavel

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



$query =  "INSERT IGNORE INTO Triagem (hospital , sintomas , id) VALUES ('$hospital', '$sintomas', id) WHERE `id` = '".$Id."' ";


mysqli_query($conexao, $query);


$url = 'cadastrado.html';

		//echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';


echo "Sua consulta foi marcada com sucesso!<br>Obrigado!.";
?> 
</body>
</html>