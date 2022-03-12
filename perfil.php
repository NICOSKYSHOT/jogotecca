<?php 

session_start();
if( session_id() === null ){
  header('location:index.php');
}

include_once('conexao.php');

$usuario_id = !empty($_GET['usuario_id']) ? (int)$_GET['usuario_id'] : $_SESSION['usuarioId'];

$pesquisa = mysqli_query($conn, "select * from usuarios where id=" . $usuario_id);
$usuario = mysqli_fetch_assoc($pesquisa);
?>

<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tela Perfil</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/estilocadastro.css" rel="stylesheet">

  </head>

  <body>
  <div class="container">
      
      <div class="page-header">
        <h1 style="color: #08298A" >Perfil</h1>
      </div>

      <div class="row">
        <div class="col-sm-8">
          <h3>Atualize seus dados</h3>
          <form method="post" action="atualizaperfil.php">
            <input type="hidden" name="usuario_id" value="<?php echo $usuario_id; ?>">
            <input type="hidden" name="redirect" value="<?php echo @$_GET['redirect']; ?>">

            <div class="form-group">
              <label  for="nome">Nome</label>
              <input name="nome" type="text" class="form-control" id="nome" value="<?php echo $usuario['nome']; ?>" required="true">
            </div>

            <div class="form-group">
              <label for="email">E-mail</label>
              <input name="email" type="email" class="form-control" id="email" value="<?php echo $usuario['email']; ?>" required="true" readonly="true">
            </div>

            <div class="form-group">
              <label for="senha">Senha</label>
              <input name="senha" type="password" class="form-control" id="senha" value="<?php echo $usuario['senha']; ?>" required="true">
            </div>

            <div class="form-group">
              <label for="nomeavatar">Nome do avatar</label>
              <input name="nomeavatar" type="text" class="form-control" id="nomeavatar"  value="<?php echo $usuario['nomeavatar']; ?>" required="true">
            </div>

            <button type="submit" class=" btn btn-default btncadastro col-sm-5 " >Atualizar</button>
            <button type="submit" class="btn btn-primary col-sm-6">Voltar para pagina home</button>
          </form>
      </div>
   
<!--
    <div class="col-sm-4 imagem">
      
      <img src="./img/reo.jpg"><br><br>
     <label class="texto">fazer upload da foto <SPAN>  &nbsp</SPAN> </label><button type="submit" class="btn btn-primary col-xs-1">procurar arquivo </button><br><br> 
      <label class="texto">Nome do Avatar:   </label>
      <input type="text" name="Nome avatar" placeholder="digite o nome do Avatar"> <br><br>
      <button type="submit" class=" btn btn-default btncadastro col-sm-12 " >Salvar Avatar</button>
    </div> -->
 </div> 
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
