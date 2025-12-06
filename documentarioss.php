<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/x-icon" href="images/favicon.ico">

    <!-- Bootstrap CSS (local) -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- jQuery + jQuery UI (apenas uma vez se realmente precisar do accordion) -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="jquery/jquery-3.6.0.js"></script>
    <script src="jquery/jquery-ui.js"></script>

    <title>Netflix Documentários</title>

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
        transition: left 0.25s ease;
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
         Capas dos documentários (responsivo)
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

        /* botão hambúrguer visível apenas no mobile */
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
          <h2 style="text-align: center;">Netflix Documentários</h2>
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
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/documentarios/senna.jpg" alt="Senna" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/documentarios/legends.jpg" alt="Legends" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/documentarios/voo370.jpg" alt="Voo 370" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/documentarios/prehistoria.jpg" alt="Pré-história" class="imagens"></div>
          </div>

          <!-- LINHA 2 -->
          <div class="row gx-4 gy-4">
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/documentarios/harry20.jpg" alt="Harry 20" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/documentarios/cleopatra.jpg" alt="Cleópatra" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/documentarios/revelacoes.jpg" alt="Revelações" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/documentarios/folego.jpg" alt="Fôlego" class="imagens"></div>
          </div>

          <!-- LINHA 3 -->
          <div class="row gx-4 gy-4">
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/documentarios/lightmagic.jpg" alt="Light Magic" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/documentarios/superpoderosos.jpg" alt="Superpoderosos" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/documentarios/imperiosonhos.jpg" alt="Império dos Sonhos" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/documentarios/gotlastwish.jpg" alt="Got Last Wish" class="imagens"></div>
          </div>

          <!-- LINHA 4 -->
          <div class="row gx-4 gy-4">
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/documentarios/amy.jpg" alt="Amy" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/documentarios/arnold.jpg" alt="Arnold" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/documentarios/envelhecerao.jpg" alt="Envelhecerão" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/documentarios/insidejob.jpg" alt="Inside Job" class="imagens"></div>
          </div>

          <!-- LINHA 5 -->
          <div class="row gx-4 gy-4">
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/documentarios/polvo.jpg" alt="Polvo" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/documentarios/folego.jpg" alt="Fôlego" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/documentarios/inconveniente.jpg" alt="Inconveniente" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/documentarios/sugarman.jpg" alt="Sugarman" class="imagens"></div>
          </div>

          <!-- LINHA 6 -->
          <div class="row gx-4 gy-4">
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/documentarios/imperioromano.jpg" alt="Império Romano" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/documentarios/investigacao.jpg" alt="Investigação" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/documentarios/ottoman.jpg" alt="Ottoman" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/documentarios/freesolo.jpg" alt="Free Solo" class="imagens"></div>
          </div>

          <!-- LINHA 7 -->
          <div class="row gx-4 gy-4">
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/documentarios/garotafoto.jpg" alt="Garota Foto" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/documentarios/enigmas.jpg" alt="Enigmas" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/documentarios/24faces.jpg" alt="24 Faces" class="imagens"></div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3"><img src="images/catalogo/documentarios/mente.jpg" alt="Mente" class="imagens"></div>
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
