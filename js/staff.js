window.onload = function(){

    function verificaCredencials(){
        if((document.getElementById("user").textContent == "admin") && (document.getElementById("password").textContent == "admin")){
            alert("Credenciales correctes");
            console.log("entra");
        }
        else{
            alert("Credencials erronias");
            console.log("no entra");
        }
    }

    //Programa principal

    document.getElementById("submit").addEventListener("click",verificaCredencials);
}