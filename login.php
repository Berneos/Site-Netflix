<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" >

    <title>Netflix</title>

    <style>



    </style>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>


  </head>
  <body>

  <?php 
  
    require_once "config.php";
  
  ?>

  <?php
    
    session_start();
 
    // Checar se o usuário já está logado, se estiver, redirecionar ele para a página inicial
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
      header("location: perfil.php");
      exit;
    } 

    function buscaUsuario($link,$usuario,$senha) {

      $sql="select * from assinantes where email='$usuario' and senha='$senha'";
      $resultado= mysqli_query($link,$sql);
      return mysqli_fetch_assoc($resultado);
    }
    if($_POST) {

      $usuario = $_POST["usuario"];
      $senha=$_POST["senha"];
      if(buscaUsuario($link,$usuario,$senha)) {

         
      

        session_start();
        $_SESSION['email'] = $usuario;
        $_SESSION['loggedin'] = true;
        header("Location:perfil.php");

      }
      else {

        echo '<script> alert("Usuário e/ou senha inválidos")</script>';
        
      }
    }
    ?>



    <header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.png" alt="" width="25px" height="50px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(página atual)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="planos.php">Planos</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Catálogo
                  </a>
                  <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="filmess.php" style="color: white;">Filmes</a>
                    <a class="dropdown-item" href="seriess.php" style="color: white;">Séries</a>
                    <a class="dropdown-item" href="documentarioss.php" style="color: white;">Documentários</a>
                  </div>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <button type="button" class="btn btn-primary my-2 my-sm-0" style="margin-right: 10px;" onclick="window.location.href='cadastrar.php'">Sign up </button>
                <button class="btn btn-primary my-2 my-sm-0" style="margin-right: 10px;" onclick="window.location.href='login.php'">Login</button>
                <input class="form-control bg-dark mr-sm-2" type="search" placeholder="Pesquisar no catálogo" aria-label="Pesquisar" style="color: white;">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    <img src="images/lupa.png" alt="Pesquisar" width="25px" height="25px">
                </button>
              </form>
            </div>
          </nav>

    </header>

      <div id="fundo-login" class="bg-image">

      <div id="caixa-login" >

        <form action="" method="post">
          <h1 style="margin-left:17%; margin-top:14%; font-size:36px">Entrar</h1>
          <input  type="text" placeholder="Email ou número de telefone" name="usuario" style="color:white;">
          <input type="password" name="senha" id="" placeholder="Senha" style="color:white;">
          <br>
          <br>          
          <button class="btn btn-primary my-2 my-sm-0" type="submit" id="loginbtn" name="entrar"> Entrar</button>
          <a href="ajuda.html" style="color:dimgray; margin-left:50px; margin-top:3.5%; float:left;" class="col">Precisa de ajuda?</a>
          <br><br><br>
          <p style="color:dimgray; margin-left:63px; float:left;">Novo por aqui? </p> <a href="cadastrar.php" style="color:white; margin-left:2%;">Assine agora</a>
        </form>

      </div>

      </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>