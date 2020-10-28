window.onload = function(){

    let date = new Date();
    let hora = date.getHours();
    let minutos = date.getMinutes();
    
    if(hora < 12 && minutos < 31){
        document.getElementById("pati").style.display = "initial";
    }
    else{
        document.getElementById("migdia").style.display = "initial";        
    }    
}
function botonMas(i){   
    document.getElementsByClassName("cantidad")[i].innerHTML = ++document.getElementsByClassName("cantidad")[i].textContent;
    calculaTotal(i,1);     
}
function botonMenos(i){
    if( 0 < document.getElementsByClassName("cantidad")[i].textContent){ 
        document.getElementsByClassName("cantidad")[i].innerHTML = --document.getElementsByClassName("cantidad")[i].textContent; 
        calculaTotal(i,0);
    }    
}
function calculaTotal(posicion,accion){    
    if(accion){
        document.getElementById("total").innerHTML = parseFloat(document.getElementById("total").textContent) + parseFloat(document.getElementsByClassName("precio")[posicion].textContent);
    }
    else{
        document.getElementById("total").innerHTML = parseFloat(document.getElementById("total").textContent) - parseFloat(document.getElementsByClassName("precio")[posicion].textContent);
    }
}
function vaciarCarrito(){
    console.log("SET TOTAL 0 y CANTIDADES 0");
}
  