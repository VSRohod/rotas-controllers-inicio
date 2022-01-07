<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alatech</title>
    <link href="/css/styleAplicativo.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <header>
      <h1>Alatech</h1>
      <a href="\">Log out</a>
    </header>
    <nav id="menu">
        <ul>
            <li><a href="#">Máquinas</a></li>
            <li><a href="#">Placa Mãe</a></li>
            <li><a href="#">Processadores</a></li>
            <li><a href="#">Memórias RAM</a></li>
            <li><a href="#">Placas de Video</a></li>
            <li><a href="#">Dispositivos de armazenamento</a></li>
        </ul>
    </nav>
    <a href="<?php echo url('createMachine') ?>">
        <div id="CreateMachine">
            <h3>Criar nova maquina</h3>
        </div>
    </a>
    <div id="secaoPecas">
        <div id="peca" name="placaMae">
            <div id="imgPeca">
                <img src="/images/38.png" alt="">
                <span id="subtextoProduto">Produto XX</span>
                <button id="buttonPeca"> -> </button>
            </div>
        </div>
        <div id="peca"name="processador">
            <div id="imgPeca">
                <img src="/images/42.png" alt="">
                <span id="subtextoProduto">Produto XX</span>
                <button id="buttonPeca"> -> </button>
            </div>
        </div>
        <div id="peca" name="memoriaRam">
            <div id="imgPeca">
                <img src="/images/13.png" alt="">
                <span id="subtextoProduto">Produto XX</span>
                <button id="buttonPeca"> -> </button>
            </div>
        </div>
        <div id="peca" name="placasDeVideo">
            <div id="imgPeca">
                <img src="/images/26.png" alt="">
                <span id="subtextoProduto">Produto XX</span>
                <button id="buttonPeca"> -> </button>
            </div>
        </div>
        <div id="peca" name="fonte">
            <div id="imgPeca">
                <img src="/images/32.png" alt="">
                <span id="subtextoProduto">Produto XX</span>
                <button id="buttonPeca"> -> </button>
            </div>
        </div>
        <div id="peca" name="dispositivos">
            <div id="imgPeca">
                <img src="/images/gabinete.jpg" alt="">
                <span id="subtextoProduto">Produto XX</span>
                <button id="buttonPeca"> -> </button>
            </div>
        </div>
    </div>
  </body>
  <script src="/script/scriptAplicativo.js"></script>
</html>
