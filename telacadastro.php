<?php
session_start();
if( session_id() === null ){
  header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Tela Cadastro</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/estilocadastro.css" rel="stylesheet">

  </head>

  <body >
  <div class="container">
      
      <div class="page-header">
        <?php
        if (isset($_SESSION['msg'])) {
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
        }


         ?>
        <h1 style="color: #08298A" >Formulário Jogo Teca</h1>
      </div>

      <div class="row">
        <div class="col-sm-8">
          <h3>Cadastre-se</h3>
          <form  name="signup" method="post"  action="cadastro.php">

            <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" name="nome" id="nome" required="true">
            </div>

            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email"  name="email" class="form-control" id="email" required="true">
            </div>

            <div class="form-group">
              <label for="senha">Senha</label>
              <input name="senha" type="password" class="form-control" id="senha" required="true">
            </div>

            <div class="form-group">
              <label for="nomeavatar">Nome do avatar</label>
              <input name="nomeavatar" type="text" class="form-control" id="nomeavatar" required="true">
            </div>
            <button type="submit" class=" btn btn-primary btncadastro col-sm-12 " >Cadastrar</button><br><br>
          </form>
          <button class=" btn btn-primary btncadastro col-sm-12 "  onclick="window.location.href='index.php';">voltar pagina de login</button>
      </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
