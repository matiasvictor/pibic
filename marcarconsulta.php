<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Marcar Consulta</title>
	<style type="text/css">
		<!--
		.style1 {
			color: #FF0000;
			font-size: x-small;
		}
		.style3 {color: #0000FF; font-size: x-small; }
	-->
</style>



</head>

<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


	
<form role="form" enctype="multipart/form-data" id="cadastro" method="post" action="consultamarcada.php?id=<?php echo $_GET['id']; ?> ">



	<div align="center" class="form-group">
		<label for="hospital">Escolha o Hospital, dentre os disponiveis: </label>
		<select style="width:120px" class="form-control" name="hospital" id="hospital">
			<option>Selecione...</option>
			<option value="HRS">HRS</option>
			<option value="HUB">HUB</option>
			<option value="HRAN">HRAN</option>
		</select>
	</div>



	<div align="center" ="center" class="form-group">
  <label for="sintomas">Sintomas:</label>
  <textarea align="center" style="width:650px" class="form-control" rows="5" id="sintomas" name="sintomas"></textarea>
</div>

<div align="center" class="controls">
              <button id="cadastrar" class="btn btn-success" type="submit">Concluir meu cadastro</button>
              <button class="btn btn-danger" type="reset">Limpar Campos Preenchidos!</button>
            </div>
          </div>

          
</form>

</body>
</html>