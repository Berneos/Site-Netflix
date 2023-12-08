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
  </head>
  <body>

  <?php 
  
    require_once "config.php";
  
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
                  <a class="nav-link" href="index.php">Home </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="planos.php">Planos <span class="sr-only">(página atual)</span> </a>
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
                <button class="btn btn-primary my-2 my-sm-0" type="submit" style="margin-right: 10px;" onclick="window.location.href='cadastrar.php'">Sign up </button>
                <a href="login.php"><button class="btn btn-primary my-2 my-sm-0" type="submit" style="margin-right: 10px;" onclick="window.location.href='login.php'">Login</button></a>
                <input class="form-control bg-dark mr-sm-2" type="search" placeholder="Pesquisar no catálogo" aria-label="Pesquisar" style="color: white;">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    <img src="images/lupa.png" alt="Pesquisar" width="25px" height="25px">
                </button>
              </form>
            </div>
          </nav>

    </header>

    <h1 style="text-align:center;">Conheça nossos planos</h1>
    <br>
    <div class="container">
      <div class="row">

        
          <div class="col-lg-4 col-sm-12 col-md-6">
              <ul class="list-group list-group-flush ">
                  <h1>Plano Básico</h1>
                  <h2>R$ 27,90</h2>
                  <li class="list-group-item">1 tela</li>
                  <li class="list-group-item">Qualidade 1080p</li>
                  <li class="list-group-item">Catálogo Kids e Adulto</li>
                  <li class="list-group-item">Configuração de Imagem</li>
                  <li class="list-group-item">Configuração de perfis</li>
                  <li class="list-group-item">Áudio 180 KB</li>

              </ul>
              <form class="form-inline my-2 my-lg-0">
              <button class="btn btn-primary my-2 my-sm-0" type="submit" style="margin-right: 10px; margin-left: 150px;" onclick="window.location.href='cadastrar.php'"><a href="cadastrar.php" style="color: white; text-decoration: none;">Assinar</a></button>
                </form>
          </div>
          <div class="col-lg-4 col-sm-12 col-md-6">
              <ul class="list-group list-group-flush ">
                  <h1>Plano Avançado</h1>
                  <h2>R$ 35,90</h2>
                  <li class="list-group-item">3 telas</li>
                  <li class="list-group-item">Qualidade 2k</li>
                  <li class="list-group-item">Todo catálogo liberado</li>
                  <li class="list-group-item">Configuração de Imagem</li>
                  <li class="list-group-item">Configuração de Perfis</li>
                  <li class="list-group-item">Áudio 300 KB</li>

              </ul>
              
                  <button class="btn btn-primary my-2 my-sm-0" type="submit" style="margin-right: 10px; margin-left: 150px;" onclick="window.location.href='cadastrar.php'"><a href="cadastrar.php" style="color: white; text-decoration: none;">Assinar</a></button>
                </form>
          </div>
          <div class="col-lg-4 col-sm-12 col-md-6">
              <ul class="list-group list-group-flush ">
                  <h1>Plano Deluxe</h1>
                  <h2>R$ 54,90</h2>
                  <li class="list-group-item">5 telas</li>
                  <li class="list-group-item">Qualidade 4k</li>
                  <li class="list-group-item">Todo catálogo liberado</li>
                  <li class="list-group-item">Configuração de perfis</li>
                  <li class="list-group-item">Configuração de Imagem</li>
                  <li class="list-group-item">Áudio 500 KB</li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
              <button class="btn btn-primary my-2 my-sm-0" type="submit" style="margin-right: 10px; margin-left: 150px;" onclick="window.location.href='cadastrar.php'"><a href="cadastrar.php" style="color: white; text-decoration: none;">Assinar</a></button>
                </form>
          </div>
      </div>
      <hr>
    </div>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>