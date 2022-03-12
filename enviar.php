
<?php
$host ="localhost";
$user = "root";
$pass = "";
$banco = "chat";
$conexao = mysqli_connect($host ,$user,$pass,$banco) or die (mysqli_error($conexao));
mysqli_select_db($conexao,$banco) or die (mysqli_error($conexao));
?>
<?php
$usuario = $_POST['usuario'];
$mensagem = $_POST['mensagem'];
$sql = mysqli_query($conexao,"INSERT INTO mensagens(usuario,mensagem)VALUES('$usuario','$mensagem')") or die(mysqli_error($conexao));
  ?>


