<?php
session_start();
if( session_id() === null ){
	header('location:index.php');
}

include_once('conexao.php');

$usuario_id = (int)$_GET['excluir'];

mysqli_query($conn, "delete from usuarios where id=" . $usuario_id);

header('location:telaadm.php');