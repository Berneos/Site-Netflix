<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <?php
              // Iniciar sessão
              session_start();
              
              // Checar se usuário está logado, se não estiver, redirecionar para tela de login
              if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
                  header("location: login.php");
                  exit;
              }
      ?>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="jquery/jquery-ui.css">
    <script src="jquery/jquery-3.6.0.js"></script>
    <script src="jquery/jquery-ui.js"></script>
    <script src="jquery/jquery-ui.js"></script>
    <script>
    $( function() {
    $( "#accordion" ).accordion({
      collapsible: true
    });
  } );
    </script>

    <title>Netflix</title>

    <style>

        /*
    DEMO STYLE
*/

a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    padding: 15px 10px;
    background: #fff;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

.wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
}

#sidebar {
    min-width: 250px;
    max-width: 250px;
    background: rgb(35, 35, 35);
    color: #fff;
    transition: all 0.3s;
    position:fixed;
    height: 100%;
}

#sidebar.active {
    margin-left: -250px;
}

#sidebar .sidebar-header {
    padding: 20px;
    top: 0;
    background: rgb(25, 25, 25);
}



#sidebar ul.components {
    padding: 20px 0;
   
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}

#sidebar ul li a:hover {
    color: red;
    background: rgb(35, 35, 35);
}

#sidebar ul li.active>a,
a[aria-expanded="true"] {
    color: #fff;
    background: rgb(35, 35, 35);
}

a[data-toggle="collapse"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: rgb(35, 35, 35);
}

ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}

a.download {
    background: #fff;
    color: #7386D5;
}

a.article,
a.article:hover {
    background: #6d7fcc !important;
    color: #fff !important;
}

/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

#content {
    width: auto;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
    position: relative;
    overflow: auto;
    z-index: 1;
    margin-left: 250px;
}

/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */


    .imagens {


        width: 225px;
        height: 300px;
        margin-bottom: 35px;
        cursor: pointer;

    }

    ::-webkit-scrollbar {
        width: 0px;
    }

    </style>
    
    <script>

        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

    </script>

  </head>
  <body>

  <?php 
  
    require_once "config.php";
  
  ?>
    <header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-bottom: 0px;">
            <a class="navbar-brand" href="telainicial.php">
                <img src="images/logo2.png" alt="" width="160px" height="40px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="telainicial.php">Home <span class="sr-only">(Home)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="series.php">Séries <span class="sr-only">(Séries)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="filmes.php">Filmes <span class="sr-only">(Filmes)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="documentarios.php">Documentários <span class="sr-only">(Documentários)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="addrecente.php">Adicionados recentemente <span class="sr-only">(Adicionados recentemente)</span></a>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control bg-dark mr-sm-2" type="search" placeholder="Pesquisar no catálogo" aria-label="Pesquisar" style="color: white;">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    <img src="images/lupa.png" alt="Pesquisar" width="25px" height="25px">
                </button>
                </form>
                <img src="images/bell.png" alt="Notificações" style="width: 20px; height: 20px; margin-left: 50px;">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:transparent; border: none; margin-left: 50px; margin-right: 50px;">
                    <img src="images/avatar.jpg" alt="" style="width: 30px; height:30px;">
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="perfil.php">Perfil</a>
                        
                        <a class="dropdown-item" href="logout.php">Sair</a>
                    </div>
                </div>
            </div>
        </nav>

    </header>
<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h2>Netflix Filmes</h2>
            </div>

            <ul class="list-unstyled components">
           
                <input class="form-control bg-dark mr-sm-2" type="search" placeholder="Pesquisar no catálogo" style="display: inline; margin-left: auto; margin-right: auto; margin-bottom: 20px; color: white;" aria-label="Pesquisar" >
                
            
                <li >
                    <a href="index.php" >Home</a>
                </li>
            </ul>   
            
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <div class="container">
                    
                <!-- Para adicionar mais filmes copiar daqui até... -->
                <div class="row gx-5">
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/filmes/avatar.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/filmes/clubedaluta.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/filmes/godfather.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12" >
                        <img src="images/catalogo/filmes/joker.jpg" alt="" class="imagens">
                    </div>
                </div>
                <!-- ...aqui, copiando e colando irá adicionar uma fileira. -->
                <div class="row gx-5">
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/filmes/lobowallstreet.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/filmes/titanic.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/filmes/ultimato.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12" >
                        <img src="images/catalogo/filmes/up.jpg" alt="" class="imagens">
                    </div>
                </div>
                <div class="row gx-5">
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/filmes/branquelas.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/filmes/fabricadechoc.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/filmes/fnaf.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12" >
                        <img src="images/catalogo/filmes/up.jpg" alt="" class="imagens">
                    </div>
                </div>
                <div class="row gx-5">
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/filmes/friday13.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/filmes/cityofgod.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/filmes/alice.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12" >
                        <img src="images/catalogo/filmes/scarymovie.jpg" alt="" class="imagens">
                    </div>
                </div>
                <div class="row gx-5">
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/filmes/maskara.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/filmes/napoleao.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/filmes/oppenheimer.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12" >
                        <img src="images/catalogo/filmes/everythingeverywhereallatonce.jpg" alt="" class="imagens">
                    </div>
                </div>
                <div class="row gx-5">
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/filmes/harrypotter1.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/filmes/baleia.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/filmes/madagascar.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12" >
                        <img src="images/catalogo/filmes/starwars4.jpg" alt="" class="imagens">
                    </div>
                </div>
                <div class="row gx-5">
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/filmes/batmandarkknight.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/filmes/thebatman.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/filmes/missionimpossible.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12" >
                        <img src="images/catalogo/filmes/barbie.jpg" alt="" class="imagens">
                    </div>
                </div>
            
            </div>
          
        </div>
    
    
    

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
  </body>
</html>