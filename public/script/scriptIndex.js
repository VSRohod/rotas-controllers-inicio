document.getElementById("errorButton").addEventListener("click", erroDeLogin);
document.getElementById("exitMensageErrorLogin").addEventListener("click", exitErroDeLogin);


function erroDeLogin() {
    document.getElementById("errorLogin").style.display="block";
}

function exitErroDeLogin(){
    document.getElementById("errorLogin").style.display="none";
}

