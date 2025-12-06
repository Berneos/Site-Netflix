<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/x-icon" href="images/favicon.ico">

    <!-- Bootstrap CSS (local) -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- jQuery e jQuery UI (uma única vez cada, se precisar) -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="jquery/jquery-3.6.0.js"></script>
    <script src="jquery/jquery-ui.js"></script>

    <title>Netflix Séries</title>

    <style>
      /*
        DEMO STYLE
      */

      a, a:hover, a:focus {
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
        box-shadow: 1px 1px 3px rgba(0,0,0,0.1);
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
        transition: all 0.25s ease;
        position: fixed;
        height: 100%;
        left: 0;
        top: 0;
        z-index: 998;
      }

      #sidebar .sidebar-header {
        padding: 20px;
        background: rgb(30, 30, 30);
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

      #sidebar ul li.active > a,
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
        transition: all 0.25s ease;
        position: relative;
        overflow: auto;
        z-index: 1;
        margin-left: 250px; /* desktop default */
      }

      /* ------------------------------
         Capas das séries (responsivo)
      ------------------------------- */

      .imagens {
        width: 100%;
        height: auto;
        object-fit: cover;
        max-height: 420px;
        border-radius: 2px;
        margin-bottom: 1.75rem;
        display: block;
      }

      /* telas muito pequenas */
      @media (max-width: 576px) {
        .imagens {
          max-height: 260px;
        }
      }

      /* remover barra horizontal */
      body {
        overflow-x: hidden;
      }

      ::-webkit-scrollbar {
        width: 0px;
      }

      /* ---------------------------------------------------
         RESPONSIVE SIDEBAR (mobile drawer)
      ----------------------------------------------------- */

      /* MOBILE: escondido por padrão, aparece ao abrir */
      @media (max-width: 991px) {

        #sidebar {
          left: -250px;         /* escondido à esquerda */
          width: 250px;
          height: 100%;
          position: fixed;
        }

        #sidebar.active {
          left: 0;              /* aparece */
        }

        #content {
          margin-left: 0 !important;
          padding: 15px;
        }

        /* estilo do botão hambúrguer */
        #sidebarCollapse {
          display: inline-block;
        }
      }

      /* DESKTOP: sidebar sempre visível */
      @media (min-width: 992px) {
        #sidebar {
          left: 0;
        }
        #content {
          margin-left: 250px;
        }
        #sidebarCollapse {
          display: none;
        }
      }
    </style>
  </head>

  <body>

    <?php require_once "config.php"; ?>

    <div class="wrapper">

      <!-- botão hamburger (aparece apenas em telas pequenas) -->
      <button id="sidebarCollapse" type="button" class="btn btn-danger d-lg-none"
              style="margin: 10px; position: fixed; z-index: 999;">
        ☰ Menu
      </button>

      <!-- Sidebar -->
      <nav id="sidebar" aria-label="Menu principal">
        <div class="sidebar-header">
          <h2>Netflix Séries</h2>
        </div>

        <ul class="list-unstyled components">
          <input
            class="form-control bg-dark mr-sm-2"
            type="search"
            placeholder="Pesquisar no catálogo"
            style="display: inline; margin-left: auto; margin-right: auto; margin-bottom: 20px; color: white;"
            aria-label="Pesquisar">

          <li><a href="index.php">Home</a></li>
          <li><a href="planos.php">Planos</a></li>

          <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Catálogo</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
              <li><a href="filmess.php">Filmes</a></li>
              <li><a href="seriess.php">Séries</a></li>
              <li><a href="documentarioss.php">Documentários</a></li>
            </ul>
          </li>

          <ul class="list-unstyled CTAs">
            <form class="form-inline my-2 my-lg-0">
              <li>
                <button class="btn btn-primary my-2 my-sm-0" type="button" style="margin-right: 10px;"
                        onclick="window.location.href='cadastrar.php'">Sign up
                </button>
              </li>
              <li>
                <button class="btn btn-primary my-2 my-sm-0" type="button" style="margin-right: 10px;"
                        onclick="window.location.href='login.php'">Login
                </button>
              </li>
            </form>
          </ul>

        </ul>
      </nav>

      <!-- Page Content -->
      <div id="content">
        <div class="container-fluid">

          <!-- LINHA 1 -->
          <div class="row gx-4 gy-4">
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/series/boys.jpg" alt="The Boys" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/series/gotham.jpg" alt="Gotham" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/series/invencivel.jpg" alt="Invencível" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/series/tbbt.jpg" alt="TBBT" class="imagens"></div>
          </div>

          <!-- LINHA 2 -->
          <div class="row gx-4 gy-4">
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/series/flash.jpg" alt="Flash" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/series/got.jpg" alt="Game of Thrones" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/series/office.jpg" alt="Office" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/series/wandinha.jpg" alt="Wandinha" class="imagens"></div>
          </div>

          <!-- LINHA 3 -->
          <div class="row gx-4 gy-4">
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/series/riverdale.jpg" alt="Riverdale" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/series/ahsoka.jpg" alt="Ahsoka" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/series/obiwan.jpg" alt="Obi-Wan" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/series/mandalorian.jpg" alt="Mandalorian" class="imagens"></div>
          </div>

          <!-- LINHA 4 -->
          <div class="row gx-4 gy-4">
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/series/arcane.jpg" alt="Arcane" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/series/peakyblinders.jpg" alt="Peaky Blinders" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/series/dark.jpg" alt="Dark" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/series/lacasadepapel.jpg" alt="La Casa de Papel" class="imagens"></div>
          </div>

          <!-- LINHA 5 -->
          <div class="row gx-4 gy-4">
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/series/genv.jpg" alt="Genv" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/series/breakingbad.jpg" alt="Breaking Bad" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/series/saul.jpg" alt="Better Call Saul" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/series/witcher.jpg" alt="The Witcher" class="imagens"></div>
          </div>

          <!-- LINHA 6 -->
          <div class="row gx-4 gy-4">
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/series/doctorwho.jpg" alt="Doctor Who" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/series/roundsix.jpg" alt="Round Six" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/series/tlou.jpg" alt="TLou" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/series/you.jpg" alt="You" class="imagens"></div>
          </div>

          <!-- LINHA 7 -->
          <div class="row gx-4 gy-4">
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/series/supernatural.jpg" alt="Supernatural" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/series/supergirl.jpg" alt="Supergirl" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/series/arrow.jpg" alt="Arrow" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/series/legends.jpg" alt="Legends" class="imagens"></div>
          </div>

        </div>
      </div>
    </div>

    <!-- SCRIPTS: Popper e Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>

    <!-- Script para abrir/fechar sidebar (Vanilla JS - mais confiável) -->
    <script>
      (function () {
        var btn = document.getElementById('sidebarCollapse');
        var sidebar = document.getElementById('sidebar');

        if (!btn || !sidebar) return;

        btn.addEventListener('click', function (e) {
          e.preventDefault();
          sidebar.classList.toggle('active');
        });

        // fecha ao clicar fora (mobile)
        document.addEventListener('click', function (e) {
          var isMobile = window.matchMedia('(max-width: 991px)').matches;
          if (!isMobile) return;
          if (!sidebar.classList.contains('active')) return;

          var target = e.target;
          if (!sidebar.contains(target) && target !== btn) {
            sidebar.classList.remove('active');
          }
        });
      })();
    </script>

  </body>
</html>
