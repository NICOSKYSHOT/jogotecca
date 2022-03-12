
<!DOCTYPE html>
<html>
<head>


<?php
$host ="localhost";
$user = "root";
$pass = "";
$banco = "chat";
$conexao = mysqli_connect($host ,$user,$pass,$banco) or die (mysqli_error($conexao));
mysqli_select_db($conexao,$banco) or die (mysqli_error($conexao));
?>
	<title>Chat</title>
	<link rel="stylesheet" type="text/css" href="css/chat.css">

<
</script>


</head>
<body>

	<div class="container">
<center>
	<div class="superior">
	
			<?php  
			$np = mysqli_query($conexao,"SELECT * FROM mensagens");
			while($ln = mysqli_fetch_array($np)){
				$usuario =$ln['usuario'];
				$mensagem =$ln ['mensagem'];
						echo "$usuario : $mensagem";
			}
			?>	
	</div>

	<div class="campos">
		<form method="post" action="enviar.php"  >
			<input type="text" name="usuario"  placeholder="usuario">
			<input type="text" name="mensagem"   placeholder="mensagens">
			<input  value="enviar" type="submit" name="enviar"  >
		</form>
	</div>
</center>
</div>
</body>
</html>