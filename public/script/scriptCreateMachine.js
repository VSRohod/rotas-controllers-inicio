document.getElementById("iconMore").addEventListener("click", editMachine);
document.getElementById("fechar").addEventListener("click", exitEditMachine);

function editMachine(){
    document.getElementById("obscurecerPecas").style.display="block";
    document.getElementById("telaDeProdutos").style.display="block";
}

function exitEditMachine(){
    document.getElementById("obscurecerPecas").style.display="none";
    document.getElementById("telaDeProdutos").style.display="none";
}

