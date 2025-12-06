<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php /* Se precisar de PHP no head, mantenha aqui */ ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/x-icon" href="images/favicon.ico">

  <!-- CSS -->
  <link rel="stylesheet" href="css/bootstrap.css">

  <!-- jQuery (apenas se precisar) -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <script src="jquery/jquery-3.6.0.js"></script>
  <script src="jquery/jquery-ui.js"></script>

  <title>Netflix - Filmes</title>

  <style>
    :root { --navbar-height: 56px; }

    /* Links */
    a, a:hover, a:focus {
      color: inherit;
      text-decoration: none;
      transition: all 0.3s;
    }

    .navbar {
      padding: 10px 15px;
      margin-bottom: 0;
      height: var(--navbar-height);
      box-shadow: 0 1px 3px rgba(0,0,0,0.08);
    }

    .navbar-brand img { display:block; }

    .wrapper { display: flex; width: 100%; align-items: stretch; }

    /* Sidebar */
    #sidebar {
      width: 250px;
      background: #232323;
      color: #fff;
      position: fixed;
      left: 0;
      top: var(--navbar-height);
      height: calc(100% - var(--navbar-height));
      transition: left 0.25s ease;
      z-index: 998;
      padding-bottom: 20px;
    }

    #sidebar .sidebar-header {
      padding: 18px;
      background: #1e1e1e;
      text-align: center;
    }

    #sidebar ul.components { padding: 12px 0; margin:0; list-style:none; }
    #sidebar ul.components li { padding: 0 10px; }
    #sidebar ul li a {
      display:block;
      padding:10px;
      color:#fff;
      font-size:1.05rem;
      border-radius:4px;
    }
    #sidebar ul li a:hover { background: rgba(255,0,0,0.08); color:#fff; }

    ul.CTAs { padding:12px; margin-top:10px; }

    /* Conteúdo principal */
    #content {
      margin-top: 0;
      padding: 20px;
      min-height: calc(100vh - var(--navbar-height));
      width: 100%;
      transition: margin-left 0.25s ease;
      margin-left: 250px;
      position: relative;
    }

    /* Capas */
    .imagens {
      width: 100%;
      height: auto;
      object-fit: cover;
      max-height: 420px;
      border-radius: 4px;
      display: block;
      margin-bottom: 1.25rem;
    }
    @media (max-width: 576px) { .imagens { max-height: 260px; } }

    /* Mobile: sidebar drawer */
    @media (max-width: 991px) {
      #sidebar { left: -260px; top: var(--navbar-height); height: calc(100% - var(--navbar-height)); }
      #sidebar.active { left: 0; }
      #content { margin-left: 0 !important; padding: 16px; }

      #sidebarCollapse {
        display: inline-block;
        position: fixed;
        top: calc(var(--navbar-height) + 10px);
        left: 10px;
        z-index: 999;
      }

      .overlay { display: block; position: fixed; inset: 0; background: rgba(0,0,0,0.35); z-index: 997; }
      .overlay.hidden { display: none; }
    }

    /* Desktop */
    @media (min-width: 992px) {
      #sidebar { left: 0; top: var(--navbar-height); height: calc(100% - var(--navbar-height)); }
      #content { margin-left: 250px; }
      #sidebarCollapse { display: none; }
      .overlay { display: none; }
    }

    body { overflow-x: hidden; }
    ::-webkit-scrollbar { width:0; height:0; }
  </style>
</head>

<body>
  <?php require_once "config.php"; ?>

  <!-- Top navbar -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="telainicial.php">
        <img src="images/logo2.png" alt="Logo" width="160" height="40">
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
              aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active"><a class="nav-link" href="telainicial.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="series.php">Séries</a></li>
          <li class="nav-item"><a class="nav-link" href="filmes.php">Filmes</a></li>
          <li class="nav-item"><a class="nav-link" href="documentarios.php">Documentários</a></li>
          <li class="nav-item"><a class="nav-link" href="addrecente.php">Adicionados recentemente</a></li>
        </ul>

        <form class="form-inline my-2 my-lg-0" role="search" action="search.php" method="get">
          <input class="form-control bg-dark mr-sm-2" name="q" type="search" placeholder="Pesquisar no catálogo" aria-label="Pesquisar" style="color:white;">
          <button class="btn btn-outline-light my-2 my-sm-0" type="submit" style="margin-left:6px;">
            <img src="images/lupa.png" alt="Pesquisar" width="20" height="20">
          </button>
        </form>

        <img src="images/bell.png" alt="Notificações" style="width:22px;height:22px;margin-left:18px;margin-right:6px;">

        <div class="dropdown" style="margin-left:8px;">
          <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false" style="color:#fff;border:none;padding:4px 8px;">
            <img src="images/avatar.jpg" alt="Avatar" style="width:34px;height:34px;border-radius:50%;">
          </button>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="perfil.php">Perfil</a>
            <a class="dropdown-item" href="logout.php">Sair</a>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <div class="wrapper">

    <!-- botão hambúrguer móvel -->
    <button id="sidebarCollapse" type="button" class="btn btn-danger d-lg-none" aria-label="Abrir menu">☰ Menu</button>

    <!-- overlay para fechar quando clicar fora -->
    <div id="overlay" class="overlay hidden" style="display:none;"></div>

    <!-- Sidebar -->
    <nav id="sidebar" aria-label="Menu principal">
      <div class="sidebar-header"><h2 style="margin:0;font-size:1.1rem;">Netflix Filmes</h2></div>

      <ul class="list-unstyled components">
        <li style="padding:10px;">
          <input class="form-control bg-dark" type="search" placeholder="Pesquisar no catálogo" aria-label="Pesquisar" style="color:white;">
        </li>

        <li><a href="telainicial.php">Home</a></li>
        <li><a href="series.php">Séries</a></li>
        <li><a href="filmes.php">Filmes</a></li>
        <li><a href="documentarios.php">Documentários</a></li>
        <li><a href="planos.php">Planos</a></li>

        <li class="mt-3" style="padding:10px;">
          <button class="btn btn-primary btn-block" onclick="location.href='cadastrar.php'">Sign up</button>
        </li>
        <li style="padding:10px;">
          <button class="btn btn-outline-light btn-block" onclick="location.href='login.php'">Login</button>
        </li>
      </ul>
    </nav>

    <!-- Content -->
    <div id="content">
      <div class="container-fluid">

        <!-- ROW 1 -->
        <div class="row gx-4 gy-4">
          <div class="col-6 col-sm-6 col-md-4 col-lg-3">
            <img src="images/catalogo/filmes/avatar.jpg" alt="Avatar" class="imagens img-fluid">
          </div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-3">
            <img src="images/catalogo/filmes/clubedaluta.jpg" alt="Clube da Luta" class="imagens img-fluid">
          </div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-3">
            <img src="images/catalogo/filmes/godfather.jpg" alt="Godfather" class="imagens img-fluid">
          </div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-3">
            <img src="images/catalogo/filmes/joker.jpg" alt="Joker" class="imagens img-fluid">
          </div>
        </div>

        <!-- ROW 2 -->
        <div class="row gx-4 gy-4">
          <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/filmes/lobowallstreet.jpg" alt="Lobo de Wall Street" class="imagens img-fluid"></div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/filmes/titanic.jpg" alt="Titanic" class="imagens img-fluid"></div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/filmes/ultimato.jpg" alt="Ultimato" class="imagens img-fluid"></div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/filmes/up.jpg" alt="Up" class="imagens img-fluid"></div>
        </div>

        <!-- ROW 3 -->
        <div class="row gx-4 gy-4">
          <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/filmes/branquelas.jpg" alt="Branquelas" class="imagens img-fluid"></div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/filmes/fabricadechoc.jpg" alt="Fábrica de Chocolate" class="imagens img-fluid"></div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/filmes/fnaf.jpg" alt="FNAF" class="imagens img-fluid"></div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/filmes/up.jpg" alt="Up" class="imagens img-fluid"></div>
        </div>

        <!-- ROW 4 -->
        <div class="row gx-4 gy-4">
          <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/filmes/friday13.jpg" alt="Friday 13" class="imagens img-fluid"></div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/filmes/cityofgod.jpg" alt="Cidade de Deus" class="imagens img-fluid"></div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/filmes/alice.jpg" alt="Alice" class="imagens img-fluid"></div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/filmes/scarymovie.jpg" alt="Scary Movie" class="imagens img-fluid"></div>
        </div>

        <!-- ROW 5 -->
        <div class="row gx-4 gy-4">
          <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/filmes/maskara.jpg" alt="Maskara" class="imagens img-fluid"></div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/filmes/napoleao.jpg" alt="Napoleão" class="imagens img-fluid"></div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/filmes/oppenheimer.jpg" alt="Oppenheimer" class="imagens img-fluid"></div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/filmes/everythingeverywhereallatonce.jpg" alt="EEAAO" class="imagens img-fluid"></div>
        </div>

        <!-- ROW 6 -->
        <div class="row gx-4 gy-4">
          <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/filmes/harrypotter1.jpg" alt="Harry Potter 1" class="imagens img-fluid"></div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/filmes/baleia.jpg" alt="Baleia" class="imagens img-fluid"></div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/filmes/madagascar.jpg" alt="Madagascar" class="imagens img-fluid"></div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/filmes/starwars4.jpg" alt="Star Wars 4" class="imagens img-fluid"></div>
        </div>

        <!-- ROW 7 -->
        <div class="row gx-4 gy-4">
          <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/filmes/batmandarkknight.jpg" alt="Batman Dark Knight" class="imagens img-fluid"></div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/filmes/thebatman.jpg" alt="The Batman" class="imagens img-fluid"></div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/filmes/missionimpossible.jpg" alt="Mission Impossible" class="imagens img-fluid"></div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/filmes/barbie.jpg" alt="Barbie" class="imagens img-fluid"></div>
        </div>

      </div>
    </div>

  </div>

  <!-- SCRIPTS: Popper e Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>

  <!-- Script para abrir/fechar sidebar (Vanilla JS) -->
  <script>
    (function () {
      var btn = document.getElementById('sidebarCollapse');
      var sidebar = document.getElementById('sidebar');
      var overlay = document.getElementById('overlay');

      function showOverlay(show) {
        if (!overlay) return;
        overlay.style.display = show ? 'block' : 'none';
        overlay.classList.toggle('hidden', !show);
      }

      if (btn && sidebar) {
        btn.addEventListener('click', function (e) {
          e.preventDefault();
          var active = sidebar.classList.toggle('active');
          var isMobile = window.matchMedia('(max-width: 991px)').matches;
          showOverlay(active && isMobile);
        });

        if (overlay) {
          overlay.addEventListener('click', function () {
            sidebar.classList.remove('active');
            showOverlay(false);
          });
        }

        document.addEventListener('click', function (e) {
          var isMobile = window.matchMedia('(max-width: 991px)').matches;
          if (!isMobile) return;
          if (!sidebar.classList.contains('active')) return;
          var target = e.target;
          var clickedOnBtn = btn.contains(target);
          var clickedOnSidebar = sidebar.contains(target);
          if (!clickedOnBtn && !clickedOnSidebar) {
            sidebar.classList.remove('active');
            showOverlay(false);
          }
        });

        window.addEventListener('resize', function () {
          if (!overlay) return;
          var isMobile = window.matchMedia('(max-width: 991px)').matches;
          if (!isMobile) {
            sidebar.classList.remove('active');
            showOverlay(false);
          }
        });
      }
    })();
  </script>
</body>
</html>
