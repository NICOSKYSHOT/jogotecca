<?php 
session_start();
if( session_id() === null ){
  header('location:index.php');
}

include_once('conexao.php');

$jogos = mysqli_query($conn, "select * from jogos where usuario_id=" . $_SESSION['usuarioId'] . " order by id desc limit 3");
?>

<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tela Cadastro de jogos</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/estilocadastrodejogos.css" rel="stylesheet">

  </head>

  <body>



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
              <a style="color:#01DFD7;" class="nav-link" href="home.php">Home
              </a>
            </li>
            <li class="nav-item">
              <a style="color:#01DFD7;" class="nav-link" href="telacadastrojogos.php">Cadastrar jogos</a> 
            </li>
            <li class="nav-item">
              <a style="color:#01DFD7;" class="nav-link" href="chat/chat.php">@Chat</a>
            </li>
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

    <header class="row" style=" border: 10px solid white; "></header>



  <div class="container">
      
      <div class="page-header col-sm-8">
        <h2 style="color: #08298A" >Formulário cadastro de jogos</h2>
      </div>

      <div class="row">
        <div class="col-sm-8">
          <form name="cadjogos" method="post"  action="cadjogos.php" enctype="multipart/form-data">

            <div class="form-group">
              <label for="nome">Nome do jogo</label>
              <input type="text" name="nomedojogo" class="form-control" id="nome" required="true">
            </div>

            <div class="form-group">
              <label for="email">Data de lançamento</label>
              <input type="date" name="data" class="form-control" required="true">
            </div>

            <div class="form-group">
              <label for="text">categoria do jogo</label>
              <input type="text" class="form-control" id="senha" name="categoria" required="true">
            </div>

            <div class="form-group" >
              <label for="textarea">Descrição</label><br>
              <textarea class="form-group col-sm-12"  name="descricao"  placeholder="Digite aqui a descrição do eu jogo" required="true"></textarea>
            </div>

            <div class="form-group">
              <label for="text">Foto Jogo</label>
              <input type="file" class="form-control" name="foto_jogo" accept=".jpg, .jpeg" required="true">
            </div>
            
            <div class="form-group">
              <label for="text">Arquivo do Jogo</label>
              <input type="file" class="form-control" name="arquivo_jogo" required="true">
            </div>
              
            <button type="submit" class=" btn btn-default btncadastro col-sm-3 " >Cadastrar</button>
            <a href="home.php" class="btn btn-primary col-sm-3">Voltar pagina home</a><br><br>
          
          </form>
      </div>
    
      <!-- lista o jogos do usuário -->
      <div class="col-sm-4">
        <?php while($dados = mysqli_fetch_assoc($jogos)): ?>

          <div style="border: solid thin #ccc; padding: 10px; margin-bottom: 5px;">
            <strong><?php echo $dados['nome'] ?></strong><br>
            <img src="jogo_fotos/<?php echo $dados['foto'] ?>" style="max-width: 100%;">
          </div>


        <?php endwhile; ?>
      </div>

 </div> 

     

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>