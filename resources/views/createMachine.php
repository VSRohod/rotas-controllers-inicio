<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alatech</title>
    <link href="/css/styleCreateMachine.css" rel="stylesheet" type="text/css">
  </head>
  <body id="corpo">
    <header>
      <h1>Alatech</h1>
      <a href="\">Log out</a>
    </header>
        <h3>Criar nova maquina</h3>
        <a href="<?php echo url('aplicativo') ?>"><button id="save">Salvar Máquina</button></a>
    <div id="secaoPecas">
        <div id="obscurecerPecas"></div>
                <div id="peca" name="placaMae">
                    <div id="imgPeca">
                        <div id="dropZone">
                            <div id="iconMore">
                                <h1>+</h1>
                            </div>
                            <h2>Insira aqui a sua peça</h2>
                        </div>
                    </div>
                </div>
                <div id="peca"name="processador">
                    <div id="imgPeca">
                        <div id="dropZone">
                           <div id="iconMore">
                                <h1>+</h1>
                            </div>
                            <h2>Insira aqui a sua peça</h2>
                        </div>
                    </div>
                </div>
                <div id="peca" name="memoriaRam">
                    <div id="imgPeca">
                        <div id="dropZone">
                            <div id="iconMore">
                                <h1>+</h1>
                            </div>
                            <h2>Insira aqui a sua peça</h2>
                        </div>
                    </div>
                </div><br>
                <div id="peca" name="placasDeVideo">
                    <div id="imgPeca">
                        <div id="dropZone">
                            <div id="iconMore">
                                <h1>+</h1>
                            </div>
                            <h2>Insira aqui a sua peça</h2>
                        </div>
                    </div>
                </div>
                <div id="peca" name="fonte">
                   <div id="imgPeca">
                        <div id="dropZone">
                             <div id="iconMore">
                                <h1>+</h1>
                            </div>
                            <h2>Insira aqui a sua peça</h2>
                        </div>
                    </div>
                </div>
                <div id="peca" name="dispositivos">
                    <div id="imgPeca">
                        <div id="dropZone">
                            <div id="iconMore">
                                <h1>+</h1>
                            </div>
                            <h2>Insira aqui a sua peça</h2>
                        </div>
                    </div>
                </div>
    </div>
        <div id="telaDeProdutos">
            <select id="catalogo">
                <option value="">Processador</option>
                <option value="">Processador</option>
                <option value="">Processador</option>
                <option value="">Processador</option>
                <option value="">Processador</option>
            </select><br>
            <div id="dragProduct">
                Produto
            </div>
            <div id="dragProduct">
                Produto
            </div>
            <button id="fechar">Fechar</button>
        </div>
  </body>
  <script src="/script/scriptCreateMachine.js"></script>
</html>
