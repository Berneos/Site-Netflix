<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Quem está assistindo</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <style>

          #quem{
      width: 100%;
      margin-top:15%;
      white-space: nowrap;
      font-family: Arial, Helvetica, sans-serif;
      color: white;
      font-size: 20px;
      }

      #avatares{
          margin-right: auto;
          margin-left: auto;
          height: 30%;
          margin-top: 2%;
          width: 100%;
      }
          .avatar{
              height: 27vh;
              width: 27vh;
              margin-left:auto;
              margin-right: auto;
              display:block;
              cursor: pointer;
              
          }
          #Usuario{
              color:gray;
              font-family:Arial, Helvetica, sans-serif;
              margin-left:auto;
              margin-right: auto;
              
              display:block;
              text-align:center;
              margin-top: 2vh;
              font-size: 25px;

          }

          @media (max-width: 450px) {
        .avatar {

          height: 25vh;
          width: 25vh;
          cursor: pointer;

        }
      }

    </style>

    <?php
            // Iniciar sessão
            session_start();
            
            // Checar se usuário está logado, se não estiver, redirecionar para tela de login
            if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
                header("location: login.php");
                exit;
            }
    ?>

  </head>
 <body style = "background-color:black">

<div id="quem">
<h1 style="text-align:center;"> Quem está assistindo?</h1>
</div>
<div id="avatares">
<img src= "images/avatar.jpg" class="avatar" onclick="window.location.href='telainicial.php'">
<p id="Usuario">Usuario</p>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
  </body>
</html>

