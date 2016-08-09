<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<style>

table {
    border-collapse: collapse;
    widtd: 100%;
}

td, td {
    padding: 8px;
    text-align: left;
  
    -->
</style>
<head>



	<body>
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title> Triagem </title>
	</body>

	<?php
// Conexão ao banco

	$bd = "clientes";

	$link = mysqli_connect('localhost','root','pibic');

// Seleciona o Banco de dados através da conexão acima

	$conexao = mysqli_select_db($link, $bd); if($conexao){

		$sql = "SELECT nome,hospital,sintomas FROM Triagem";

		$consulta = mysqli_query($link, $sql);

		echo '<table class="table table-hover" widtd="200" height="20">';

		echo '<thead>';

		echo '<tr>';

		echo '<td width="200" height="20" >Nome</td> ';

		echo '<td width="200" height="20">Hospital</td>';

		echo '<td width="300" height="20" >Sintomas </td>';

		echo '<td style="vertical-align:top">



	</td>';



	echo '';

	echo '</tr>';

	echo '<thead>';

// Armazena os dados da consulta em um array associativo

	while($registro = mysqli_fetch_assoc($consulta)){


		echo '<thead>';

		echo '<tr>';

		echo '<td>'.$registro["nome"].' </td>';
		

		echo '<td>'.$registro["hospital"].'</td>';

		

		echo '<td>'.$registro["sintomas"].'</td>';


		echo '<td> <div align="center" class="controls">
		<form role="form" enctype="multipart/form-data" id="aprovartriagem" metdod="POST" action="aprovartriagem.php">
			<button id="cadastrar" class="btn btn-success" type="submit"> Aprovar </button>
		</form> </td>

<td>
	<form role="form" enctype="multipart/form-data" id="categorizartriagem" metdod="POST" action="editartriagem2.php">
	<button id="cadastrar" class="btn btn-warning" type="submit"> Editar </button>
	</form> 

	</div> </td>';

echo '</tr>';

echo '<thead>';



}

echo '</table>';

}

?>