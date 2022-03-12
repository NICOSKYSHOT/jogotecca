<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jogo Teca</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <!-- <a class="navbar-brand" href="#">Jogo Teca</a>   -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
             <h2 class="textobemvindo">Bem vindo a Jogo Teca!</h2>
               
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->
      <header class="row" style=" border: 25px solid white; "> 
        <div class="col-xs-1 col-sm-4"><img src="img/jogoteca.jpg"  class="img-responsive"></div>
        <div class="col-xs-1 col-sm-4 login " >
    <h1 class="text-primary">     <!-- Fim do formulario de login -->
<?php
        if (isset($_SESSION['msg'])) {
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
        }
        ?>
        </h1> 
          <form name="loginform" method="post" action="valida.php"  >
            <label for="login">Email</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="LOGIN..." required="true">
             <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control" placeholder="SENHA..." required="true"> <br>
            <input class="botaologin" type="submit" name="button" value="Logar" ><br><br>
            <a  class="col-xs-12"  href="telacadastro.php"><h3>Sign In </h3></a>
          </form>


           <h1 class="text-center text-primary">
      <?php if(isset($_SESSION['loginErro'])){
        echo $_SESSION['loginErro'];
        unset($_SESSION['loginErro']);
      }?>
    </h1>
    <h1 class="text-center text-success">
      <?php 
      if(isset($_SESSION['logindeslogado'])){
        echo $_SESSION['logindeslogado'];
        unset($_SESSION['logindeslogado']);
      }
      ?>
    </h1>

          <!-- Fim do formulario de login -->
        </div>
      </header>

      <!-- Page Features -->
      <div class="row text-center">

        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Ultimos Lançamentos</h4>
              <p class="card-text">colocar imagem</p>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Mais baixado</h4>
              <p class="card-text">colocar imagem</p>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Mais comentados</h4>
              <p class="card-text">colocar imagem</p>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
