<?php 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$nome	= (isset($POST ["selectoption"]) ? $POST["selectoption"] : null);
$hospital	= (isset($_POST ["hospital"]) ? $_POST["hospital"] : null);	//atribuição do campo "hospital" vindo do formulário para variavel	
$sintomas	= (isset($_POST ["sintomas"]) ? $_POST["sintomas"] : null);
$id	= (isset($_POST ["id"]) ? $_POST["id"] : null);
	//atribuição do campo "sintomas" vindo do formulário para variavel
//$ddd	= (isset($_POST ["ddd"]) ? $_POST["ddd"] : null);	//atribuição do campo "ddd" vindo do formulário para variavel

//Gravando no banco de dados !

echo $nome;

$servername = "localhost";
$username = "root";
$password = "pibic";
$bdados = "clientes";


echo $_POST["selectoption"];

//conectando com o localhost - mysql
$conexao = mysqli_connect($servername, $username, $password, $bdados);
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());

//conectando com a tabela do banco de dados
$banco = mysqli_select_db($conexao, $bdados);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysqli_error());


$query = "UPDATE Triagem SET nome='$nome', hospital='$hospital', sintomas='$sintomas' WHERE id=$id";


mysqli_query($conexao, $query);

echo $nome;


echo "Sua triagem foi editada com sucesso!<br>Obrigado!";
?> 



