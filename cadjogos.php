<?php
session_start();
include_once("conexao.php");




$usuario_id = $_SESSION['usuarioId'];
$nomedojogo = addslashes($_POST['nomedojogo']);
$data = addslashes($_POST['data']);
$categoria = addslashes($_POST['categoria']);
$descricao = addslashes($_POST['descricao']);

$foto_jogo = $_FILES['foto_jogo'];
$arquivo_jogo = $_FILES['arquivo_jogo'];

$foto = $foto_jogo['name'];
$arquivo = $arquivo_jogo['name'];

move_uploaded_file($foto_jogo['tmp_name'], dirname(__FILE__) . '/jogo_fotos/' . $foto);
move_uploaded_file($arquivo_jogo['tmp_name'], dirname(__FILE__) . '/jogo_arquivos/' . $arquivo);






$dadoscadastro = "insert into jogos(usuario_id, nome, lancamento, categoria, descricao, foto, arquivo) 
									values('$usuario_id','$nomedojogo','$data','$categoria','$descricao','$foto','$arquivo')";







$sql=mysqli_query($conn,$dadoscadastro );
if (mysqli_insert_id($conn)) {
	$_SESSION['msg'] = "jogo cadastrado com sucesso !";
	header("location:telacadastrojogos.php");
}else{
	echo"nao inseriu dados no banco";
 }


 ?>