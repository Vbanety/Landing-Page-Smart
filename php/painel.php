<?php
session_start();
include('verify_login.php');
?>

<!-- teste abaixo -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta dados</title>
    
    <link rel="stylesheet" type="text/css" href="../CSS/painel.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script>
        $(function () {
            $('.consultaDados').submit(function () {
                $.ajax({
                    url: 'consulta.php',
                    type: 'POST',
                    data: $('.consultaDados').serialize(),
                    success: function (data) {
                        if (data != '') {
                            $('.consultaDados').html(data);
                        } else {
                            alert('Existem campos em branco!');
                        }
                    }
                });
                return false;
            });
        });
    </script>

</head>

<body>

  <div class="body-panel">
    <div class="logo-header">
      <img src="../image/fundo-header-login1.jpg"> 
    </div>
    <div id="back-panel">
      <div class="bem-vindo">Olá, <?php echo $_SESSION['usuarios'];?>!! Seja bem vindo ao SmartTV</div>
        <header class="container1">
          <div class="item1">
            <h1>Efetue a consulta dos dados de seus clientes</h1>
          </div>
          <div class="item2">
            <a href="logout.php">Logout</a>
          </div>
        </header>
        <br>

        <form class="consultaDados" name="cadastro" action="" method="POST">
          <div class="div-form">
            <label class="b-label">Click no botão consultar para listar os clientes</label>
            <input type="submit" name="consulta-completa" value="Consultar" class="input-button">
          </div>
        </form>
    </div>
  </div>  
</body>

</html>


