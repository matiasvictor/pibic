<?php 


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

$query = "SELECT  nome , hospital , sintomas, id FROM Triagem";


$consulta = mysqli_query($conexao, $query);

$row = mysqli_fetch_assoc($consulta);


$option = '';
$option2 = '';

while($line = mysqli_fetch_assoc($consulta))
{
  $select = $line["nome"] == $line["nome"] ? "selected" : "";

  $option .= '<option value = "'.$line['nome'].'">'.$line['nome'].'</option>';
  $option2 .= '<option value = "'.$line['hospital'].'">'.$line['hospital'].'</option>';


}



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="UTF-8">
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

  <title>CADASTRO DE CLIENTES COM BANCO DE DADOS E PHP</title>
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

 <!-- <form class="form-horizontal" id="cadastro" name="cadastro" method="post" action="cadastro.php" onsubmit="return validaCampo(); return false;"> -->

 <legend> Editar Triagem:</legend>


 <form role="form" enctype="multipart/form-data" id="cadastro" method="POST" action="salvartriagem.php">



   <div align="center" class="form-group">

    <label for="nome">Selecione um nome: </label>



    <select style="width:300px" class="form-control" name="nome" id="nome" onchange="location.href='editartriagem2.php?nome='+this.value">


      <?php 

      <input type="hidden" id="id" name="id" value="<?php echo $option;?> " />



      ?>


    </select>
  </div>

  <?php 

  $sql= "SELECT nome, hospital, sintomas, id FROM Triagem WHERE nome ='".$_GET['nome']."' LIMIT 20";

  $consulta2 = mysqli_query($conexao, $sql);

  $row2 = mysqli_fetch_assoc($consulta2);






  ?>

  <div align="center" class="form-group">

   <input type="hidden" id="id" name="id" value="<?php echo $row2["id"];?> " />

 </div>


 <div align="center" class="form-group">

   <label for="sintomas">Hospital : </label>
   <input type="text" id="hospital" name="hospital" value="<?php echo $row2["hospital"]; ?>">


 </div>




 <div align="center" class="form-group">
  <label for="sintomas">Sintomas: </label>
  <input type="text" id="sintomas" name="sintomas" value="<?php echo $row2["sintomas"]; ?>">
</div>

<div align="center" class="controls">
  <button id="cadastrar" class="btn btn-success" type="submit"> Atualizar Triagem</button>

</div>
</form>



</body>
</html>