<?php
session_start();
include_once("conexao.php");
$nome=filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
$email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
$senha=filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING);
$nomeavatar=filter_input(INPUT_POST,'nomeavatar',FILTER_SANITIZE_STRING);
echo "$nome <br>";
echo "$email <br>";
echo "$senha <br>";
echo "$nomeavatar <br>";
$dadoscadastro = "INSERT INTO usuarios(nome,email,senha,nomeavatar)VALUES('$nome','$email','$senha','$nomeavatar')";
$sql=mysqli_query($conn,$dadoscadastro );
if (mysqli_insert_id($conn)) {
	$_SESSION['msg'] = "Usuario cadastrado com sucesso !";
	header("location:index.php");
}else{
	echo"nao inseriu dados no banco";
 }


 ?>




