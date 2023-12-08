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

<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h2>Netflix Séries</h2>
            </div>

            <ul class="list-unstyled components">
           
                <input class="form-control bg-dark mr-sm-2" type="search" placeholder="Pesquisar no catálogo" style="display: inline; margin-left: auto; margin-right: auto; margin-bottom: 20px; color: white;" aria-label="Pesquisar" >
                
            
                <li >
                    <a href="index.php" >Home</a>
                </li>
                <li>
                    <a href="planos.php">Planos</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Catálogo</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="filmess.php">Filmes</a>
                        </li>
                        <li>
                            <a href="seriess.php">Séries</a>
                        </li>
                        <li>
                            <a href="documentarioss.php">Documentários</a>
                        </li>
                    </ul>
                </li>
               

            <ul class="list-unstyled CTAs">
                <form class="form-inline my-2 my-lg-0">
                    <li>
                        <button class="btn btn-primary my-2 my-sm-0" type="button" style="margin-right: 10px;" onclick="window.location.href='cadastrar.php'">Sign up </button>
                    </li>
                    <li>
                        <button class="btn btn-primary my-2 my-sm-0" type="button" style="margin-right: 10px;" onclick="window.location.href='login.php'">Login</button>
                    </li>
                </form>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <div class="container">
                    
                <!-- Para adicionar mais séries copiar daqui até... -->
                <div class="row gx-5">
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/series/boys.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/series/gotham.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/series/invencivel.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12" >
                        <img src="images/catalogo/series/tbbt.jpg" alt="" class="imagens">
                    </div>
                </div>
                <!-- ...aqui, copiando e colando irá adicionar uma fileira. -->
                <div class="row gx-5">
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/series/flash.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/series/got.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/series/office.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12" >
                        <img src="images/catalogo/series/wandinha.jpg" alt="" class="imagens">
                    </div>
                </div>
                <div class="row gx-5">
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/series/riverdale.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/series/ahsoka.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/series/obiwan.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12" >
                        <img src="images/catalogo/series/mandalorian.jpg" alt="" class="imagens">
                    </div>
                </div>
                <div class="row gx-5">
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/series/arcane.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/series/peakyblinders.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/series/dark.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12" >
                        <img src="images/catalogo/series/lacasadepapel.jpg" alt="" class="imagens">
                    </div>
                </div>
                <div class="row gx-5">
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/series/genv.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/series/breakingbad.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/series/saul.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12" >
                        <img src="images/catalogo/series/witcher.jpg" alt="" class="imagens">
                    </div>
                </div>
                <div class="row gx-5">
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/series/doctorwho.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/series/roundsix.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/series/tlou.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12" >
                        <img src="images/catalogo/series/you.jpg" alt="" class="imagens">
                    </div>
                </div>
                <div class="row gx-5">
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/series/supernatural.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/series/supergirl.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12">
                        <img src="images/catalogo/series/arrow.jpg" alt="" class="imagens">
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-12" >
                        <img src="images/catalogo/series/legends.jpg" alt="" class="imagens">
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