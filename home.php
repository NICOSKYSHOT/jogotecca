<?php 

session_start();
if( session_id() == null ){
  header('location:index.php');
}

include_once('conexao.php');

$jogos = mysqli_query($conn, "select * from jogos where usuario_id=" . $_SESSION['usuarioId'] . " order by id desc");
?>
<!-- fim da configuração da sessão-->
<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title >Home</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/home.css" rel="stylesheet">

  </head>

  <body >
    <h4></h4>

    <!-- links do meu da pagina home -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <h1 style="color:#01DFD7;" >Jogo Teca</h1>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a style="color:#01DFD7;" class="nav-link" href="home.php"> Bem vindo  <?php echo $_SESSION['usuarioNome']  ?>
              </a>
            </li>
            <li class="nav-item ">
            <a style="color:#01DFD7;" class="nav-link" href="home.php">Home </a>
            </li>
            <li class="nav-item">
             <a style="color:#01DFD7;" class="nav-link" href="telacadastrojogos.php">Cadastrar jogos</a> 
            </li>
            <li class="nav-item">
             <a style="color:#01DFD7;" class="nav-link" href="telacadastrojogos.php">Editar jogos salvos</a> 
            </li>
            <li class="nav-item">
            <a style="color:#01DFD7;" class="nav-link" href="chat/chat.php">@Chat</a>
            </li></h4>  
             <li class="nav-item">
            <a style="color:#01DFD7;" class="nav-link" href="perfil.php">Perfil</a>
            </li>
             <li class="nav-item">
            <a style="color:#01DFD7;" class="nav-link" href="sair.php">Sair</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <header class="row" style=" border: 10px solid white; "></header>

      <div class="row">
        <!-- lista o jogos do usuário -->
          <?php while($dados = mysqli_fetch_assoc($jogos)): ?>
            <div class="col-sm-4">
              <div style="border: solid thin #ccc; padding: 10px; margin-bottom: 5px;">
                <strong><?php echo $dados['nome'] ?></strong><br>
                <img src="jogo_fotos/<?php echo $dados['foto'] ?>" style="max-width: 100%;">
              </div>
            </div>
          <?php endwhile; ?>
     </div>


    </div>

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
