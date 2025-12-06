<!DOCTYPE html>
<html lang="pt-br">
  <head>

    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" >

    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="stylesheet" href="jquery/jquery-ui.css">
    <script src="jquery/jquery-3.6.0.js"></script>
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
            position: fixed;
            height: 100%;
        }

        #sidebar.active {
            margin-left: -250px;
        }

        #sidebar .sidebar-header {
            padding: 20px;
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
            transition: all 0.3s;
            position: relative;
            overflow: auto;
            z-index: 1;
            margin-left: 250px;
        }

        /* ------------------------------
            Capas dos filmes 
        ------------------------------- */

        .imagens {
            width: 100%;
            height: auto;
            object-fit: cover;
            max-height: 420px;
            border-radius: 2px;
            margin-bottom: 1.75rem;
        }

        /* telas pequenas */
        /* MOBILE */
        @media (max-width: 991px) {

            #sidebar {
                position: fixed;
                left: -250px;
                top: 0;
                height: 100%;
                width: 250px;
                z-index: 998;
                transition: left 0.25s ease;

            }

            #sidebar.active {
                left: 0;
            }

            #content {
                margin-left: 0 !important;
                padding: 15px;
            }
        }

        /* DESKTOP */
        @media (min-width: 992px) {
            #sidebar {
                left: 0;
            }
            #content {
                margin-left: 250px;
            }
        }
        @media (max-width: 576px) {
            .imagens {
            max-height: 260px;
        }}
        



    </style>
    

        <script>
            // evita usar jQuery aqui — mais confiável
            (function () {
                var btn = document.getElementById('sidebarCollapse');
                var sidebar = document.getElementById('sidebar');

                if (!btn || !sidebar) return; // segurança

                btn.addEventListener('click', function (e) {
                e.preventDefault();
                sidebar.classList.toggle('active');

                // opcional: alterar texto do botão quando aberto/fechado
                // btn.textContent = sidebar.classList.contains('active') ? '✕ Fechar' : '☰ Menu';
                });

                // opcional: fechar sidebar ao clicar fora (apenas mobile)
                document.addEventListener('click', function (e) {
                var isMobile = window.matchMedia('(max-width: 991px)').matches;
                if (!isMobile) return;

                if (sidebar.classList.contains('active')) {
                    // se clicou fora do sidebar e fora do botão, fecha
                    var target = e.target;
                    if (!sidebar.contains(target) && target !== btn) {
                    sidebar.classList.remove('active');
                    }
                }
                });
            })();
        </script>


  </head>
  <body>

    <?php require_once "config.php"; ?>

    <div class="wrapper">
        <button id="sidebarCollapse" type="button" class="btn btn-danger d-lg-none"
        style="margin: 10px; position: fixed; z-index: 999;">
            ☰ Menu
        </button>


        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h2>Netflix Filmes</h2>
            </div>

            <ul class="list-unstyled components">
                <input 
                    class="form-control bg-dark mr-sm-2"
                    type="search"
                    placeholder="Pesquisar no catálogo"
                    style="display: inline; margin-left: auto; margin-right: auto; margin-bottom: 20px; color: white;"
                    aria-label="Pesquisar"
                >

                <li><a href="index.php">Home</a></li>
                <li><a href="planos.php">Planos</a></li>

                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        Catálogo
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li><a href="filmess.php">Filmes</a></li>
                        <li><a href="seriess.php">Séries</a></li>
                        <li><a href="documentarioss.php">Documentários</a></li>
                    </ul>
                </li>

                <ul class="list-unstyled CTAs">
                    <form class="form-inline my-2 my-lg-0">
                        <li>
                            <button class="btn btn-primary my-2 my-sm-0"
                                type="button"
                                style="margin-right: 10px;"
                                onclick="window.location.href='cadastrar.php'">
                                Sign up
                            </button>
                        </li>

                        <li>
                            <button class="btn btn-primary my-2 my-sm-0"
                                type="button"
                                style="margin-right: 10px;"
                                onclick="window.location.href='login.php'">
                                Login
                            </button>
                        </li>
                    </form>
                </ul>
            </ul>
        </nav>

        <!-- Content -->
        <div id="content">

            <div class="container-fluid">

                <!-- LINHA 1 -->
                <div class="row gx-5">
                    <div class="col col-lg-3 col-md-6 col-sm-12"><img src="images/catalogo/filmes/avatar.jpg" class="imagens"></div>
                    <div class="col col-lg-3 col-md-6 col-sm-12"><img src="images/catalogo/filmes/clubedaluta.jpg" class="imagens"></div>
                    <div class="col col-lg-3 col-md-6 col-sm-12"><img src="images/catalogo/filmes/godfather.jpg" class="imagens"></div>
                    <div class="col col-lg-3 col-md-6 col-sm-12"><img src="images/catalogo/filmes/joker.jpg" class="imagens"></div>
                </div>

                <!-- LINHA 2 -->
                <div class="row gx-5">
                    <div class="col col-lg-3 col-md-6 col-sm-12"><img src="images/catalogo/filmes/lobowallstreet.jpg" class="imagens"></div>
                    <div class="col col-lg-3 col-md-6 col-sm-12"><img src="images/catalogo/filmes/titanic.jpg" class="imagens"></div>
                    <div class="col col-lg-3 col-md-6 col-sm-12"><img src="images/catalogo/filmes/ultimato.jpg" class="imagens"></div>
                    <div class="col col-lg-3 col-md-6 col-sm-12"><img src="images/catalogo/filmes/up.jpg" class="imagens"></div>
                </div>

                <!-- LINHA 3 -->
                <div class="row gx-5">
                    <div class="col col-lg-3 col-md-6 col-sm-12"><img src="images/catalogo/filmes/branquelas.jpg" class="imagens"></div>
                    <div class="col col-lg-3 col-md-6 col-sm-12"><img src="images/catalogo/filmes/fabricadechoc.jpg" class="imagens"></div>
                    <div class="col col-lg-3 col-md-6 col-sm-12"><img src="images/catalogo/filmes/fnaf.jpg" class="imagens"></div>
                    <div class="col col-lg-3 col-md-6 col-sm-12"><img src="images/catalogo/filmes/up.jpg" class="imagens"></div>
                </div>

                <!-- LINHA 4 -->
                <div class="row gx-5">
                    <div class="col col-lg-3 col-md-6 col-sm-12"><img src="images/catalogo/filmes/friday13.jpg" class="imagens"></div>
                    <div class="col col-lg-3 col-md-6 col-sm-12"><img src="images/catalogo/filmes/cityofgod.jpg" class="imagens"></div>
                    <div class="col col-lg-3 col-md-6 col-sm-12"><img src="images/catalogo/filmes/alice.jpg" class="imagens"></div>
                    <div class="col col-lg-3 col-md-6 col-sm-12"><img src="images/catalogo/filmes/scarymovie.jpg" class="imagens"></div>
                </div>

                <!-- LINHA 5 -->
                <div class="row gx-5">
                    <div class="col col-lg-3 col-md-6 col-sm-12"><img src="images/catalogo/filmes/maskara.jpg" class="imagens"></div>
                    <div class="col col-lg-3 col-md-6 col-sm-12"><img src="images/catalogo/filmes/napoleao.jpg" class="imagens"></div>
                    <div class="col col-lg-3 col-md-6 col-sm-12"><img src="images/catalogo/filmes/oppenheimer.jpg" class="imagens"></div>
                    <div class="col col-lg-3 col-md-6 col-sm-12"><img src="images/catalogo/filmes/everythingeverywhereallatonce.jpg" class="imagens"></div>
                </div>

                <!-- LINHA 6 -->
                <div class="row gx-5">
                    <div class="col col-lg-3 col-md-6 col-sm-12"><img src="images/catalogo/filmes/harrypotter1.jpg" class="imagens"></div>
                    <div class="col col-lg-3 col-md-6 col-sm-12"><img src="images/catalogo/filmes/baleia.jpg" class="imagens"></div>
                    <div class="col col-lg-3 col-md-6 col-sm-12"><img src="images/catalogo/filmes/madagascar.jpg" class="imagens"></div>
                    <div class="col col-lg-3 col-md-6 col-sm-12"><img src="images/catalogo/filmes/starwars4.jpg" class="imagens"></div>
                </div>

                <!-- LINHA 7 -->
                <div class="row gx-5">
                    <div class="col col-lg-3 col-md-6 col-sm-12"><img src="images/catalogo/filmes/batmandarkknight.jpg" class="imagens"></div>
                    <div class="col col-lg-3 col-md-6 col-sm-12"><img src="images/catalogo/filmes/thebatman.jpg" class="imagens"></div>
                    <div class="col col-lg-3 col-md-6 col-sm-12"><img src="images/catalogo/filmes/missionimpossible.jpg" class="imagens"></div>
                    <div class="col col-lg-3 col-md-6 col-sm-12"><img src="images/catalogo/filmes/barbie.jpg" class="imagens"></div>
                </div>

            </div>
        </div>

    </div>

    <!-- SCRIPTS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>

</body>

</html>