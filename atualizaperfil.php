<?php
session_start();
include_once("conexao.php");
$nome=filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
$email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
$senha=filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING);
$nomeavatar=filter_input(INPUT_POST,'nomeavatar',FILTER_SANITIZE_STRING);
$usuario_id = (int)$_POST['usuario_id'];

$redirect = !empty($_POST['redirect']) ? $_POST['redirect'] : 'home.php';

echo "$nome <br>";
echo "$email <br>";
echo "$senha <br>";
echo "$nomeavatar <br>";
$dadoscadastro = "UPDATE usuarios SET nome='$nome', email='$email', senha ='$senha', nomeavatar='$nomeavatar' where id=" . $usuario_id;

if (mysqli_query($conn,$dadoscadastro )) {
	$_SESSION['msg'] = "Usuario cadastrado com sucesso !";
	header("location:" . $redirect);
}else{
	echo"nao inseriu dados no banco";
 }


 ?>