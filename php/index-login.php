  <?php
      session_start();
  ?>

  <!DOCTYPE html>
  <html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="../CSS/login.css">
      <title>Login SmartTV</title>
  </head>
  <body>
      <div class="login-main">
        <div class="logo-header">
          <img src="../image/fundo-header-login1.jpg"> 
        </div>

        <div class="backForm">
            <div id="form-body">  
              <form action="login.php" method="POST">
                  <h1>LOGIN</h1>
                    <?php
                      if(isset($_SESSION['nao_autenticado'])):
                    ?>
        
                    <div class="login-error">
                      <p>Usuário ou senha inválidos.</p>
                    </div>

                    <?php
                      endif;
                        unset($_SESSION['nao_autenticado']);
                    ?>

                    <input type="name" name="usuarios" placeholder="Usuário">
                    <input type="password" name="senha" placeholder="Senha">
                    <input type="submit" value="Entrar">
                  <div class="home"> 
                    <a href="../index.html"><img src="../image/home.jpg" alt="botao-home"></a>
                  </div>
              </form>    
            </div>
          </div>
      </div>
  </body>
</html>