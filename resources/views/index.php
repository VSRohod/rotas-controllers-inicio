<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alatech</title>
    <link href="/css/styleIndex.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <header>
      <h1>Alatech</h1>
      <a href="#">Login</a>
    </header>
    <div id="loginDiv">
      <form action="">
        <h2>Login</h2>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" /><br>
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" /><br>
        <a href="<?php echo url('aplicativo') ?>"><button type="button" id="logar">LOGAR</button></a><br>
        <button id="errorButton">Clique aqui para mensagem de Erro de login</button>
      </form>
    </div>
    <div id="errorLogin">
        <div id="mensageErrorLogin">
            <h2>Login Inválido</h2>
            <button id="exitMensageErrorLogin" type="button">Tentar Novamente</button>
        </div>
    </div>
  </body>
  <script src="/script/scriptIndex.js"></script>
</html>
