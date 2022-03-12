<?php
  session_start();
if( session_id() === null ){
  header('location:index.php');
}

include_once('conexao.php');

$sql_usuarios = "select * from usuarios";

$usuarios = mysqli_query($conn, $sql_usuarios);

?>

<!DOCTYPE html>
<html lang="pt-br">

  <head>
<h1></h1>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title style="color: red">Tela Adiministrador</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/adm.css" rel="stylesheet">

  </head>

  <body class="fundotela">
  <div class="container">
      
      <div class="page-header  col-sm-8">
        <h1 style="color: #08298A" >Administrar usuarios</h1>
      </div>
<div >
      <table class="table table-striped table-bordered table-hover table-condensed table-dark">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Senha</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php while($u = mysqli_fetch_array($usuarios)): ?>
            <tr class="success">
              <td><?php echo $u['nome']; ?></td>
              <td><?php echo $u['email']; ?></td>
              <td><?php echo $u['senha']; ?></td>
              <td> <a href="perfil.php?usuario_id=<?php echo $u['id']; ?>&redirect=telaadm.php" class="btn btn-primary btn-sm"  >Editar</button></td>
              <td> <a href="excluirUsuario.php?excluir=<?php echo $u['id']; ?>" class="btn btn-danger btn-sm"  >Excluir</a></td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div> 
  <div>
<form name="loginform" method="post" action="home.php"  >
            
    
            <input class="btn btn-danger btn-sm" type="submit" name="BTN VOLTAR" value="VOLTAR PARA PAGINA HOME" ><br><br>
      
          </form>
   </div>
 </div> 
 
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
