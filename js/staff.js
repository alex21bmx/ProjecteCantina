window.onload = function(){

    function verificaCredencials(){
        if((document.getElementById("user").textContent != "admin") && (document.getElementById("password").textContent != "admin")){
            alert("Credenciales erronias");
        }
    }

    //Programa principal

    document.getElementById("submit").addEventListener("click",verificaCredencials);
}