<?php 

define('DB_HOST', 'localhost'); 
define('DB_NAME', 'clientes'); 
define('DB_USER','root'); 
define('DB_PASSWORD','pibic'); 


$triagem = (isset($_POST ["triagem"]) ? $_POST["triagem"] : null);
$id = (isset($_POST ["id"]) ? $_POST["id"] : null);
//function SignIn() {  


$conexao = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error()); 

$db = mysqli_select_db($conexao, DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error()); 



$sql = "UPDATE Clientes SET  triagem='$triagem' WHERE id=$id";


	$query = mysqli_query($conexao, $sql) or die(mysqli_error($conexao)); 

echo 'Triagem aprovada com Sucesso';

			$url = 'iniciomedico.html';

		echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';





	

		?>