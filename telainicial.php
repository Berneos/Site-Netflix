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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="stylesheet" href="jquery/jquery-ui.css">
    <script src="jquery/jquery-3.6.0.js"></script>
    <script src="jquery/jquery-ui.js"></script>
    <title>Netflix</title>

    <style>

      .resumo {

        display: inline-block;
        color: grey;
        margin-right: 20px;
        margin-top: -3px;
        

      }

      .imagemm {

        width: 90px;
        height: 15px;

      }

      #dropdownMenuButton:focus, #dropdownMenuButton:active {

        outline: none !important;
        box-shadow: none;

      }

      .cor {

        background-color:rgb(29, 28, 28);
        color: white;
        
      }

      .filme {

        width: 100%;
        height:100%;
        padding: 0px;


      }

      .fillmes {`
      
        width: 400px;
        height:200px;

      }

      #series {

       

      }

      /*
    code by Iatek LLC 2018 - CC 2.0 License - Attribution required
    code customized by Azmind.com
*/
@media (min-width: 768px) and (max-width: 991px) {
    /* Show 4th slide on md if col-md-4*/
    .container-fluid .carousel-inner .active.col-md-4.carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -33.3333%;  /*change this with javascript in the future*/
        z-index: -1;
        display: block;
        visibility: visible;
    }
}
@media (min-width: 576px) and (max-width: 768px) {
    /* Show 3rd slide on sm if col-sm-6*/
    .container-fluid .carousel-inner .active.col-sm-6.carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -50%;  /*change this with javascript in the future*/
        z-index: -1;
        display: block;
        visibility: visible;
    }
}
@media (min-width: 576px) {
  .container-fluid .carousel-item {
        margin-right: 0;
    }
    /* show 2 items */
    .container-fluid .carousel-inner .active + .carousel-item {
        display: block;
    }
    .container-fluid .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
    .container-fluid .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item {
        transition: none;
    }
    .container-fluid .carousel-inner .carousel-item-next {
        position: relative;
        transform: translate3d(0, 0, 0);
    }
    /* left or forward direction */
    .container-fluid .active.carousel-item-left + .carousel-item-next.carousel-item-left,
    .container-fluid .carousel-item-next.carousel-item-left + .carousel-item,
    .container-fluid .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    /* farthest right hidden item must be also positioned for animations */
    .container-fluid .carousel-inner .carousel-item-prev.carousel-item-right {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        display: block;
        visibility: visible;
    }
    /* right or prev direction */
    .container-fluid .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
    .container-fluid .carousel-item-prev.carousel-item-right + .carousel-item,
    .container-fluid .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }
}
/* MD */
@media (min-width: 768px) {
    /* show 3rd of 3 item slide */
    .container-fluid .carousel-inner .active + .carousel-item + .carousel-item {
        display: block;
    }
    .container-fluid .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
        transition: none;
    }
    .container-fluid .carousel-inner .carousel-item-next {
        position: relative;
        transform: translate3d(0, 0, 0);
    }
    /* left or forward direction */
    .container-fluid .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    /* right or prev direction */
    .container-fluid .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }
}
/* LG */
@media (min-width: 991px) {
    /* show 4th item */
    .container-fluid .carousel-inner .active + .carousel-item + .carousel-item + .carousel-item {
        display: block;
    }
    .container-fluid .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item + .carousel-item {
        transition: none;
    }
    /* Show 5th slide on lg if col-lg-3 */
    .container-fluid .carousel-inner .active.col-lg-3.carousel-item + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -25%;  /*change this with javascript in the future*/
        z-index: -1;
        display: block;
        visibility: visible;
    }
    /* left or forward direction */
    .container-fluid .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    /* right or prev direction //t - previous slide direction last item animation fix */
    .container-fluid .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }
}

    </style>

    <script>
      $( function() {
        $( ".widget button" )
          .eq( 0 ).button()
          .end().eq( 1 ).button( {
            icon: "ui-icon-gear",
            showLabel: false
          } ).end().eq( 2 ).button( {
            icon: "ui-icon-gear"
          } ).end().eq( 3 ).button( {
            icon: "ui-icon-gear",
            iconPosition: "end"
          } ).end().eq( 4 ).button( {
            icon: "ui-icon-gear",
            iconPosition: "top"
          } ).end().eq( 5 ).button( {
            icon: "ui-icon-gear",
            iconPosition: "bottom"
          } );
      } );
      </script>

<script>

/*Carousel */
$('#carousel-example').on('slide.bs.carousel', function (e) {
  /*
      CC 2.0 License Iatek LLC 2018 - Attribution required
  */
  var $e = $(e.relatedTarget);
  var idx = $e.index();
  var itemsPerSlide = 5;
  var totalItems = $('.carousel-item').length;

  if (idx >= totalItems-(itemsPerSlide-1)) {
      var it = itemsPerSlide - (totalItems - idx);
      for (var i=0; i<it; i++) {
          // append slides to end
          if (e.direction=="left") {
              $('.carousel-item').eq(i).appendTo('.carousel-inner');
          }
          else {
              $('.carousel-item').eq(0).appendTo('.carousel-inner');
          }
      }
  }
});

</script>



      <script>
        $( function() {
          $( "#tabs" ).tabs({
            collapsible: true
          });
        } );
      </script>

 
</head>
<body>

<header>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="telainicial.php">
        <img src="images/logo2.png" alt="" width="160px" height="40px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="telainicial.php">Home <span class="sr-only">(página atual)</span></a>
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

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
          <img class="d-block w-100" src="images/carrosel/gott.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block text-left" style="bottom: 0px;  overflow-y: auto;  width:32%;">
              <h2>Game of Thrones</h2>
              <br>
              <div>
                <img src="images/estrelas/quatroemeia.png" alt="Quatro estrelas e meia" class="img-fluid resumo imagemm">
                <p class="resumo">2013</p>
                <p class="resumo">8 temporadas</p>
                <p class="resumo">HD</p>
              </div>
              <br>
              <p>O foco central de GoT acomapanha o jogo político em Westeros, o continente de um mundo fantástico onde há regiões governadas por Casas nobres. Há sete reinos que estão sob a liderança do rei ocupante do Trono de Ferro, uma posição alta e desejada entre boa parte das famílias.</p>
              <br>
              <p>Existem também regiões que desejam se manter independentes de tal controle. No meio dos dois conflitos, impera o medo de que uma raça de criaturas sobrenaturais chamadas Caminhantes Brancos ameace a estabilidade dos Sete Reinos.</p>
              <br>
              <button class="ui-button ui-widget ui-corner-all" style="background-color: white; bottom: 0;">
                <span class="ui-icon ui-icon-play"></span> Play
              </button>
              <button class="ui-button ui-widget ui-corner-all" style="background-color: grey; color: white; bottom: 0;">
                Mais Informações
              </button>
            </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/carrosel/ER.jpg" alt="Second slide">
          <div class="carousel-caption d-none d-md-block" style="bottom: 0px; overflow-y: auto; width:32%;">
              <h2>Elden Ring</h2>
              <br>
              <div>
                <img src="images/estrelas/cinco.png" alt="Cinco estrelas" class="img-fluid resumo imagemm">
                <p class="resumo">2022</p>
                <p class="resumo">1 temporada</p>
                <p class="resumo">UHD</p>
              </div>
              <br>
              <p>Acompanhe a jornada de um guerreiro perdido, busacando descobrir quem é e seu lugar neste mundo cheio de extraordinarios, dragoes, monstrons, deuses e semi-deuses, um caminho arduo ate se tornar um Elden lord</p>
              <br>
              <p>Em Elden Ring o Maculado percorre livremente pelo vasto mundo aberto , incluindo combate, com vários tipos de armas e feitiços mágicos, passeios a cavalo e crafting.</p>
              <br>
              <button class="ui-button ui-widget ui-corner-all" style="background-color: white; bottom: 0;">
                <span class="ui-icon ui-icon-play"></span> Play
              </button>
              <button class="ui-button ui-widget ui-corner-all" style="background-color: grey; color: white; bottom: 0;">
                Mais Informações
              </button>
            </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/carrosel/HMYM.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block" style="bottom: 0px; overflow-y: auto;  width:32%;">
              <h2>How i Met Your Mother</h2>
              <br>
              <div>
                <img src="images/estrelas/quatro.png" alt="Quatro estrelas" class="img-fluid resumo imagemm">
                <p class="resumo">2005</p>
                <p class="resumo">9 temporadas</p>
                <p class="resumo">HD</p>
              </div>
              <br>
              <p>Ao longo das suas nove temporadas, a série traz as histórias de cinco amigos que enfrentam os desafios da vida adulta em Nova York. Em 2030, o arquiteto Ted Mosby (Radnor) começa a contar para os filhos a trajetória de como conheceu a sua mãe. Para isso, ele volta no ano de 2005, onde seu amigo de faculdade Marshall Eriksen (Segel) decide pedir a namorada Lily Aldrin (Hannigan) em casamento.</p>
              <br>
              <p>Ted decide, então, que precisa encontrar um par, já que seu sonho é casar e ter filhos, mas Barney Stinson (Harris), o amigo mulherengo do grupo, continua convidando ele para cantar mulheres no MacLaren's Pub, bar que os protagonistas passam grande parte da série.</p>
              <br>
              <button class="ui-button ui-widget ui-corner-all" style="background-color: white; bottom: 0;">
                <span class="ui-icon ui-icon-play"></span> Play
              </button>
              <button class="ui-button ui-widget ui-corner-all" style="background-color: grey; color: white; bottom: 0;">
                Mais Informações
              </button>
            </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/carrosel/JOJO.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block" style="bottom: 0px; overflow-y: auto;  width:32%;">
              <h2>JoJo's Bizarre Adventure</h2>
              <br>
              <div>
                <img src="images/estrelas/quatroemeia.png" alt="Quatro estrelas e meia" class="img-fluid resumo imagemm">
                <p class="resumo">2012</p>
                <p class="resumo">6 temporadas</p>
                <p class="resumo">FHD</p>
              </div>
              <br>
              <p>JoJo no Kimyō na Bōken (ジョジョの奇妙な冒険? lit. (As) Bizarras Aventuras de JoJo) é um mangá japonês escrito e ilustrado por Hirohiko Araki. O mangá foi publicado pela Shueisha em sua revista Weekly Shōnen Jump entre 1987 e 2004, e a partir de 2004 pela revista seinen Ultra Jump. É o segundo mangá mais longo da Shonen Jump com 132 volumes (apenas atrás de Kochi-Kame, concluído com 201 volumes) e ainda está em produção. O que fazia dele também, até meados de 2012, o mangá mais longo sem uma adaptação para televisão.</p>
              <br>
              <p>JoJo's conta a história da família Joestar, uma família cujos vários membros descobrem que estão destinados a derrubar inimigos sobrenaturais, tais como Dio Brando um vampiro semi-imortal, Yoshikage Kira um serial killer e Diavolo um líder de gangue usando poderes únicos que possuem. </p>
              <br>
              <button class="ui-button ui-widget ui-corner-all" style="background-color: white; bottom: 0;">
                <span class="ui-icon ui-icon-play"></span> Play
              </button>
              <button class="ui-button ui-widget ui-corner-all" style="background-color: grey; color: white; bottom: 0;">
                Mais Informações
              </button>
            </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/carrosel/op.jpeg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block" style="bottom: 0px; overflow-y: auto;  width:32%;" >
              <h2>One Piece</h2>
              <br>
              <div>
                <img src="images/estrelas/cinco.png" alt="Cinco estrelas" class="img-fluid resumo imagemm">
                <p class="resumo">1999</p>
                <p class="resumo">20 temporadas</p>
                <p class="resumo">HD</p>
              </div>
              <br>
              <p>A série foca em Monkey D. Luffy, um jovem feito de borracha, que, inspirado em seu ídolo de infância, o poderoso pirata Shanks, o Ruivo, parte em uma jornada do mar do East Blue para encontrar o tesouro mítico, o One Piece, e proclamar-se o Rei dos Piratas. Em um esforço para organizar sua própria tripulação, os Piratas do Chapéu de Palha, Luffy resgata e faz amizade com um caçador de piratas e espadachim chamado Roronoa Zoro, e eles partem em busca do tesouro titular. Eles são acompanhados em sua jornada por Nami, uma ladra e navegadora obcecada por dinheiro; Usopp, um franco-atirador e mentiroso compulsivo; e Sanji, um cozinheiro amoroso mas cavalheiresco. Eles adquirem um navio, o Going Merry, e se envolvem em confrontos com notórios piratas do East Blue.</p>
              <br>
              <button class="ui-button ui-widget ui-corner-all" style="background-color: white; bottom: 0;">
                <span class="ui-icon ui-icon-play"></span> Play
              </button>
              <button class="ui-button ui-widget ui-corner-all" style="background-color: grey; color: white; bottom: 0;">
                Mais Informações
              </button>
            </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/carrosel/OPD.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block" style="bottom: 0px; overflow-y: auto;  width:32%;">
              <h2>Ordem Paranormal: Desconjuração</h2>
              <div>
                <img src="images/estrelas/cinco.png" alt="Cinco estrelas" class="img-fluid resumo imagemm">
                <p class="resumo">2020</p>
                <p class="resumo">1 temporada</p>
                <p class="resumo">UHD</p>
              </div>
              <br>
              <p>Ordem Paranormal: Desconjuração é a terceira temporada da série Ordem Paranormal, continuação de O Segredo na Floresta. É uma campanha de RPG de mesa baseado em uma versão adaptada pelo mestre do sistema Chamado de Cthulhu (do inglês, Call of Cthulhu). Mestrada pelo streamer e diretor criativo de Enigma do Medo, Cellbit, é protagonizada por Arthur Cervero, Beatrice Portinari, Dante, Elizabeth Webber, Erin Parker, Fernando Carvalho, Joui Jouki, Kaiser e Luciano Carvalho.</p>
              <p>O Santo Berço foi destruído. A reestruturada Ordo Realitas agora opera em uma base subterrânea na cidade de São Paulo. De lá, o homem conhecido como Senhor Veríssimo comanda uma legião de agentes que, com auxílio de métodos mais intensos, busca salvar o mundo da ameaça crescente do ocultismo.</p>
              <br>
              <button class="ui-button ui-widget ui-corner-all" style="background-color: white; bottom: 0;">
                <span class="ui-icon ui-icon-play"></span> Play
              </button>
              <button class="ui-button ui-widget ui-corner-all" style="background-color: grey; color: white; bottom: 0;">
                Mais Informações
              </button>
            </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/carrosel/OSNI.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block" style="bottom: 0px; overflow-y: auto;  width:32%;">
              <h2>O Segredo na Floresta</h2>
              <div>
                <img src="images/estrelas/cinco.png" alt="Cinco estrelas" class="img-fluid resumo imagemm">
                <p class="resumo">2020</p>
                <p class="resumo">1 temporada</p>
                <p class="resumo">UHD</p>
              </div>
              <br>
              <p>O Segredo na Floresta é a segunda temporada da série Ordem Paranormal, continuação de A Ordem Paranormal. É uma campanha de RPG de mesa baseada em uma versão adaptada do sistema Chamado de Cthulhu (do inglês, Call of Cthulhu). Mestrada pelo streamer Cellbit, é protagonizada por Cesar Oliveira Cohen, Cristopher Cohen, Elizabeth Webber, Joui Jouki, Thiago Fritz e posteriormente Arthur Cervero.</p>
              <p>No dia 11 de abril, por volta das dez horas da manhã, uma Equipe da Ordem da Realidade (nessa época chamada de "Ordem da Verdade") tem uma reunião marcada com o homem conhecido como Senhor Veríssimo na grande torre comercial Alfa, na avenida Faria Lima, em São Paulo. O primeiro a chegar é Joui Jouki, que após procurar pela sala de reunião indicada por Senhor Veríssimo, se encontra com os outros membros de sua equipe: Cristopher Cohen, Cesar Oliveira, Thiago Fritz e Elizabeth Webber.</p>
              <br>
              <button class="ui-button ui-widget ui-corner-all" style="background-color: white; bottom: 0;">
                <span class="ui-icon ui-icon-play"></span> Play
              </button>
              <button class="ui-button ui-widget ui-corner-all" style="background-color: grey; color: white; bottom: 0;">
                Mais Informações
              </button>
            </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/carrosel/bdg.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block" style="bottom: 0px; overflow-y: auto;  width:32%; ">
              <h2>Baldur's Gate</h2>
              <br>
              <div>
                <img src="images/estrelas/cinco.png" alt="Cinco estrelas" class="img-fluid resumo imagemm">
                <p class="resumo">2023</p>
                <p class="resumo">3 temporadas</p>
                <p class="resumo">UHD</p>
              </div>
              <br>
              <p> A história é ambientada na era dos Reinos Esquecidos, e apresenta como inimigos os Devoradores de Mentes (Mind Flayers), uma raça alienígena. Esses seres invadiram o mundo, raptaram o protagonista (personagem criado pelo jogador) e seus futuros companheiros. Depois, introduziram um parasita nos prisioneiros, o que os transformaria em uma dessas criaturas.</p>
              <br>
              <p>De repente, a nave em que eles estavam é atacada por guerreiros da raça Githyanki e seus dragões. O protagonista é liberto durante a luta e consegue guiar a nave danificada até o solo. De alguma forma, o parasita não causa o efeito esperado nos sobreviventes, que se juntam para buscar respostas -- como, por exemplo, descobrir como remover o hospedeiro de seus cerébros.</p>
              <br>
              <button class="ui-button ui-widget ui-corner-all" style="background-color: white; bottom: 0;">
                <span class="ui-icon ui-icon-play"></span> Play
              </button>
              <button class="ui-button ui-widget ui-corner-all" style="background-color: grey; color: white; bottom: 0;">
                Mais Informações
              </button>
          </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" style="height: 25%; margin-top: auto; margin-bottom: auto;">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  
  <h2 style="margin-left:10px; margin-top: 10px;">Séries</h2>

    <div class="container-fluid">
        <div id="carousel-example" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                    <img src="images/series/flash.jpg" class="img-fluid mx-auto d-block" alt="img1">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="images/series/peaky.jpg" class="img-fluid mx-auto d-block" alt="img2">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="images/series/witcher.jpg" class="img-fluid mx-auto d-block" alt="img3">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="images/series/round6.jpg" class="img-fluid mx-auto d-block" alt="img4">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="images/series/wandinha.jpg" class="img-fluid mx-auto d-block" alt="img5">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="images/series/strangerthings.jpg" class="img-fluid mx-auto d-block" alt="img6">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="images/series/lacasa.jpg" class="img-fluid mx-auto d-block" alt="img7">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="images/series/dark.jpg" class="img-fluid mx-auto d-block" alt="img8">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="images/series/sweettooth.jpg" class="img-fluid mx-auto d-block" alt="img9">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="images/series/office.jpg" class="img-fluid mx-auto d-block" alt="img10">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="images/series/arrested.jpg" class="img-fluid mx-auto d-block" alt="img11">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="images/series/saul.jpg" class="img-fluid mx-auto d-block" alt="img12">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="images/series/breakingbad.jpg" class="img-fluid mx-auto d-block" alt="img13">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="images/series/umbrella.jpg" class="img-fluid mx-auto d-block" alt="img14">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="images/series/chris.jpg" class="img-fluid mx-auto d-block" alt="img15">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="images/series/brooklyn.jpg" class="img-fluid mx-auto d-block" alt="img16">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="images/series/lupin.jpg" class="img-fluid mx-auto d-block" alt="img17">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="images/series/supernatural.jpg" class="img-fluid mx-auto d-block" alt="img18">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="images/series/arrow.jpg" class="img-fluid mx-auto d-block" alt="img19">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="images/series/supergirl.jpg" class="img-fluid mx-auto d-block" alt="img20">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="images/series/legends.jpg" class="img-fluid mx-auto d-block" alt="img21">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <h2 style="margin-left:10px; margin-top: 20px;">Filmes</h2>

    <div class="container-fluid">
      <div id="carousel-example2" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner row w-100 mx-auto" role="listbox">
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                  <img src="images/filmes/batman.jpg" class="img-fluid mx-auto d-block" alt="img1">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/filmes/amongus.jpg" class="img-fluid mx-auto d-block" alt="img2">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/filmes/bioshock.jpg" class="img-fluid mx-auto d-block" alt="img3">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/filmes/coc.jpg" class="img-fluid mx-auto d-block" alt="img4">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/filmes/ds1.jpg" class="img-fluid mx-auto d-block" alt="img5">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/filmes/gow.jpg" class="img-fluid mx-auto d-block" alt="img6">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/filmes/gta5.jpg" class="img-fluid mx-auto d-block" alt="img7">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/filmes/jjk 0.jpg" class="img-fluid mx-auto d-block" alt="img8">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/filmes/miranha.jpg" class="img-fluid mx-auto d-block" alt="img9">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/filmes/osni.jpg" class="img-fluid mx-auto d-block" alt="img10">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/filmes/miles.jpg" class="img-fluid mx-auto d-block" alt="img11">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/filmes/bloodborne.jpg" class="img-fluid mx-auto d-block" alt="img12">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/filmes/red dead.jpg" class="img-fluid mx-auto d-block" alt="img13">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/filmes/the florest.jpg" class="img-fluid mx-auto d-block" alt="img14">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/filmes/soldado ryan.jpg" class="img-fluid mx-auto d-block" alt="img15">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/filmes/vampyr.jpg" class="img-fluid mx-auto d-block" alt="img16">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/filmes/dg.jpg" class="img-fluid mx-auto d-block" alt="img17">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/filmes/dl.jpg" class="img-fluid mx-auto d-block" alt="img18">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/filmes/pdc.png" class="img-fluid mx-auto d-block" alt="img19">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/filmes/ds3.jpg" class="img-fluid mx-auto d-block" alt="img20">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/filmes/deadpool.jpg" class="img-fluid mx-auto d-block" alt="img21">
              </div>
          </div>

            <a class="carousel-control-prev" href="#carousel-example2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

      </div>
            
    </div>

    <h2 style="margin-left:10px; margin-top: 20px;">Assista por um bom tempo</h2>

    <div class="container-fluid">
      <div id="carousel-example3" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner row w-100 mx-auto" role="listbox">
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                  <img src="images/series/supernatural.jpg" class="img-fluid mx-auto d-block" alt="img1">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/series/office.jpg" class="img-fluid mx-auto d-block" alt="img2">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/series/flash.jpg" class="img-fluid mx-auto d-block" alt="img3">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/series/brooklyn.jpg" class="img-fluid mx-auto d-block" alt="img4">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/series/arrow.jpg" class="img-fluid mx-auto d-block" alt="img5">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/series/breakingbad.jpg" class="img-fluid mx-auto d-block" alt="img6">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/series/op.jpeg" class="img-fluid mx-auto d-block" alt="img7">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/carrosel/jojo.jpg" class="img-fluid mx-auto d-block" alt="img8">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/series/naruto.jpg" class="img-fluid mx-auto d-block" alt="img9">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/series/shippuden.jpg" class="img-fluid mx-auto d-block" alt="img10">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/series/hunterxhunter.jpg" class="img-fluid mx-auto d-block" alt="img11">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/series/supergirl.jpg" class="img-fluid mx-auto d-block" alt="img12">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/filmes/red dead.jpg" class="img-fluid mx-auto d-block" alt="img13">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/series/lacasa.jpg" class="img-fluid mx-auto d-block" alt="img14">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/series/arrested.jpg" class="img-fluid mx-auto d-block" alt="img15">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/series/dark.jpg" class="img-fluid mx-auto d-block" alt="img16">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/filmes/gta5.jpg" class="img-fluid mx-auto d-block" alt="img17">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/carrosel/gott.jpg" class="img-fluid mx-auto d-block" alt="img18">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/carrosel/HMYM.jpg" class="img-fluid mx-auto d-block" alt="img19">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/series/the100.jpg" class="img-fluid mx-auto d-block" alt="img20">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img src="images/series/ben10.jpg" class="img-fluid mx-auto d-block" alt="img21">
              </div>
          </div>

            <a class="carousel-control-prev" href="#carousel-example3" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example3" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

      </div>
            
    </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="js/bootstrap.js" ></script>
  <script src="js/bootstrap.min.js" ></script>
</body>
</html>