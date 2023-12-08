<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" >
    <style>
    
      body {

        background-color:white;
        

      }

      h1 {

        color: black;

      }
      
      @media (max-width:320px) {

        #imagem {

          width:16%;
          height: 5%;
          

        }

      }

      @media (max-width:768px) {

        #imagem {

          width:16%;
          height: 15%;
        

        }

      }

      @media (max-width:950px) {

        #imagem {

          width:16%;
          height: 15%;
        
        }

      }

      @media (max-width:2000px) {

        #imagem {
        
          width: 100px;
          height: 15%;
          
        }

      }
      #cabecalho {

        border-bottom: solid #CBC9C9 0.5px;
        padding-top: 17px;
        padding-bottom: 17px;
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        
      }

      #entrar {

        text-align: right;
        text-decoration: none;
        color: rgb(60, 60, 60);
        font-size: 20px;
        font-weight:bold;
        margin-left: 70%;
        flex-grow: 4;
        flex-basis: auto;
      
      }

      #principal {

        
        
        width: 100%;
        height: 100%;
        

        

      }
      
      .textop {

        color: white;
        text-align: center;
        font-weight: bold;
        margin-top: 18%;
        font-size: 50px;
        

      }

      

      #botao {

        background-color: red;
        color: white;
        border: 0px;
        width: 30vh;
        height: 9vh;
        border-radius: 5px;
        font-size: 25px;
        font-weight: bold;
        margin-top: auto;
        margin-bottom: auto;
        cursor: pointer;
        vertical-align: middle;
        margin-right: 10%;
      }

      

      #email {

        width: 70vh;
        height: 9vh;
        margin-top: auto;
        margin-bottom: auto;
        font-size: 25px;
        padding-left: 15px;
        vertical-align: middle;
        position: static;
      }

      form {

        margin-left: auto;
        margin-right: auto;
        height: 250px;

      }


      @media(max-width: 870px){


        #botao {

          margin-left: auto;
          margin-right: auto;
          
        }

      }

      #multimedia {

        margin-left: auto;
        margin-right: auto;
        display: block;
        margin-top: 16vh;

      }

      #passos {

        font-size: 15px;
        text-align: left;
        color: black;

      }

      .passos2 {

        font-size: 18px;
        text-align: left;
        color: black;
        margin-bottom: 0px;

      }

      .texto {

        color: black;
        text-align:left;
      }

      #frase1 {

        margin-bottom: 0px;
        font-size: 18px;

      }

      #proximo {

        margin-left:auto;
        margin-right:auto;
        display:block;
        height: 10vh;
        width: 50vh;
        font-size: 25px;

      } 

      #form {

        margin-left: auto;
        margin-right: auto;
        margin-top: 1vh;
        width: 50vh;
        height: 80vh;

      }

      .formm {

        background-color: white;
        border-style: solid;
        border-width: 1px;
        border-radius: 5px;
        height: 6.4vh;
        width: 70%;
        display: block;
        margin-right: 100%;
        margin-top: 8%;

      }

      #loginbtn {

        width: 90%;
        margin-right: 100%;

      }

    </style>
    <title>Netflix</title>
  </head>
  <body>


    <header>

        <nav class="navbar navbar-expand-lg" id="cabecalho">
          <img src="images/logo2.png" alt="" class="img-fluid" id="imagem" onclick="window.location.href='index.php'">  
          <a href="login.php" id="entrar"> Entrar</a>
        </nav>

    </header>
    <div id="principal">
      <div id="form">

        <h1 id="passos">Passo 1 de 3</h1>
        <h2 class="texto">Crie uma senha para iniciar sua assinatura</h2>
        <p class="passos2">Faltam só mais alguns passos!</p>
        <p class="passos2">Nós também detestamos formulários.</p>
        <form action="" method="post">
          <input  type="text" placeholder="Email" name="email" required style="background-color: white; border-style: solid; border-width: 0.5px; border-radius: 5px; height: 6.4vh; width: 90%; display: block; margin-right: 100%; margin-top: 8%;">
          <input type="password" name="senha" minlength="8" placeholder="Senha" required style="background-color: white; border-style: solid; border-width: 0.5px; border-radius: 5px; height: 6.4vh; width: 90%; display: block; margin-right: 100%; margin-top: 8%;">
          <input type="text" name="nome" minlength="4" placeholder="Nome" required style="background-color: white; border-style: solid; border-width: 0.5px; border-radius: 5px; height: 6.4vh; width: 90%; display: block; margin-right: 100%; margin-top: 8%;">
          <input type="text" name="telefone" minlength="11" maxlength="11" pattern="[0-9]+$" placeholder="Telefone" required style="background-color: white; border-style: solid; border-width: 0.5px; border-radius: 5px; height: 6.4vh; width: 90%; display: block; margin-right: 100%; margin-top: 8%;">
          <input type="number" name="cpf" minlength="11" maxlength="11" placeholder="CPF" required style="background-color: white; border-style: solid; border-width: 0.5px; border-radius: 5px; height: 6.4vh; width: 90%; display: block; margin-right: 100%; margin-top: 8%;">
          <select required style="background-color: white; border-style: solid; border-width: 0.5px; border-radius: 5px; height: 6.4vh; width: 90%; display: block; margin-right: 100%; margin-top: 8%; font-size: 18px; padding-left: 10px;" placeholder="Selecione seu plano" name="planos">
           <option >Selecione seu plano</option>
           <option>Básico</option>
           <option >Avançado</option>
           <option >Deluxe</option>
          </select>
          <br>
          <br>          
          <button class="btn btn-primary my-2 my-sm-0" type="submit" id="loginbtn" name="enviar" style="font-size: 24px; height: 8vh;"> Concluído</button>
        </form>

      </div>
    </div>

    <?php 
    
      require_once "config.php";

      if(isset($_POST['enviar'])) {

          $email = $_POST['email'];

          $senha = $_POST['senha'];

          $nome = $_POST['nome'];

          $telefone = $_POST['telefone'];

          $cpf = $_POST['cpf'];
        
          $planos = $_POST['planos'];

          if($planos == "Básico") {

            $plano = "basico";

          }
          else if ($planos == "Avançado") {

            $plano = "avancado";

          }
          elseif($planos == "deluxe") {

            $plano = "deluxe";

          }
          elseif($planos == "Selecione seu plano") {

            $plano = "nada";

          };

          $sql = "INSERT INTO assinantes(email,senha,nome,telefone,cpf,plano) VALUES ('$email','$senha','$nome','$telefone','$cpf','$plano')";

          if($plano != "nada" ) {
            mysqli_query($link,$sql);
            echo "<script>window.location.replace('login.php')</script>";
          }
          else {
          
            echo "<script type='javascript'>alert('Selecione um plano!');";

          }

          

      }

    ?>
   
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>