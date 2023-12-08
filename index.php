<!DOCTYPE html>
<html lang="pt-br">
  <head>
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
                    <a class="dropdown-item" href="documentarioss.php" style="color: white; ">Documentários</a>
                  </div>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-primary my-2 my-sm-0" type="button" style="margin-right: 10px;" onclick="window.location.href='cadastrar.php'">Sign up </button>
                <button class="btn btn-primary my-2 my-sm-0" type="button" style="margin-right: 10px;" onclick="window.location.href='login.php'">Login</button>
                <input class="form-control bg-dark mr-sm-2" type="search" placeholder="Pesquisar no catálogo" aria-label="Pesquisar" style="color: white;">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    <img src="images/lupa.png" alt="Pesquisar" width="25px" height="25px">
                </button>
              </form>
            </div>
          </nav>

    </header>
    <div id="banner">

        <img src="images/catalogo.PNG" alt="Catálogo" class="img-fluid" style="width: 100%; margin-top:-10px">

    </div>
    <h1 class="centraltex">Conheça nossos planos</h1>
    <br>
    <div class="row">

        
        <div class="col-lg-4 col-sm-12 col-md-6" style="padding-left: 6%; ">
            <ul class="list-group list-group-flush ">
                <h1>Plano Básico</h1>
                <h2>R$ 27,90</h2>
                <li class="list-group-item">1 tela</li>
                <li class="list-group-item">Qualidade 1080p</li>
                <li class="list-group-item">Catálogo Kids e Adulto</li>
                <li class="list-group-item">Configuração de perfis</li>
                <li class="list-group-item">Áudio 180 KB</li>

            </ul>
        </div>
        <div class="col-lg-4 col-sm-12 col-md-6">
            <ul class="list-group list-group-flush" >
                <h1>Plano Avançado</h1>
                <h2>R$ 35,90</h2>
                <li class="list-group-item">3 telas</li>
                <li class="list-group-item">Qualidade 2k</li>
                <li class="list-group-item">Todo catálogo liberado</li>
                <li class="list-group-item">Configuração de perfis</li>
                <li class="list-group-item">Áudio 300 KB</li>
            </ul>
        </div>
        <div class="col-lg-4 col-sm-12 col-md-6" >
            <ul class="list-group list-group-flush ">
                <h1>Plano Deluxe</h1>
                <h2>R$ 54,90</h2>
                <li class="list-group-item">5 telas</li>
                <li class="list-group-item">Qualidade 4k</li>
                <li class="list-group-item">Todo catálogo liberado</li>
                <li class="list-group-item">Configuração de perfis</li>
                <li class="list-group-item">Restrição de idade por perfil</li>
                <li class="list-group-item">Áudio 500 KB</li>
            </ul>
        </div>
    </div>
    <hr>


    <div id="accordion">
      <h3 style="margin-bottom:10px">O que é a netflix?</h3>
      <div>
        <p>
          A Netflix é um serviço de streaming que oferece uma ampla variedade de séries, filmes e documentários premiados em milhares de aparelhos conectados à internet.
        </p>
        <br>
        <p>
        Você pode assistir a quantos filmes e séries quiser, quando e onde quiser – tudo por um preço mensal acessível. Aqui você sempre encontra novidades. A cada semana, adicionamos novas séries e filmes.
        </p>
      </div>
      <h3 style="margin-bottom:10px">Quanto custa a Netflix?</h3>
      <div>
        <p>
        Assista à Netflix no seu celular, tablet, Smart TV, notebook ou aparelho de streaming por uma taxa mensal única. Os planos variam de R$18,90 a R$55,90 por mês. Sem contrato nem taxas extras.
        </p>
      </div>
      <h3 style="margin-bottom:10px">Onde posso assistir?</h3>
      <div>
        <p>Assista onde quiser, quando quiser. Faça login com sua conta Netflix em netflix.com para começar a assistir no computador ou em qualquer aparelho conectado à Internet compatível com o aplicativo Netflix, como Smart TVs, smartphones, tablets, aparelhos de streaming e videogames.</p>
        <p>Você também pode baixar a sua série favorita com o aplicativo Netflix para iOS, Android ou Windows 10. Use downloads para levar a Netflix para onde quiser sem precisar de conexão com a Internet. Leve a Netflix com você para qualquer lugar.</p>
      </div>
      <h3 style="margin-bottom:10px">Como faço pra cancelar?</h3>
      <div>
        <p>
        A Netflix é flexível. Não há contratos nem compromissos. Você pode cancelar a sua conta na internet com apenas dois cliques. Não há taxa de cancelamento – você pode começar ou encerrar a sua assinatura a qualquer momento.
        </p>
      </div>
      <h3 style="margin-bottom:10px">O que eu posso assistir na Netflix?</h3>
      <div>
        <p>
        A Netflix tem um grande catálogo de filmes, documentários, séries, originais Netflix premiados e muito mais. Assista o quanto quiser, quando quiser.
        </p>
      </div>
      <h3 style="margin-bottom:10px">A netflix é adequada para crianças?</h3>
      <div>
      <p>A experiência infantil da Netflix faz parte da sua assinatura para que as crianças se divirtam em seu próprio espaço com séries e filmes familiares sob a supervisão dos responsáveis.</p>
      <p>O recurso de controle parental, incluso nos perfis para crianças e protegido por PIN, permite restringir a classificação etária do conteúdo que as crianças podem ver e bloquear títulos específicos que você não quer que elas assistam.</p>
      </div>
    </div>
    
    
    

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
  </body>
</html>