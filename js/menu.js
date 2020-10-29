window.onload = function(){
    menuChooser();   
    addListeners();   
}

function addListeners(){
    let botonesMas = document.getElementsByClassName("botonMas");
    let botonesMenos = document.getElementsByClassName("botonMenos");

    for (let i = 0; i < botonesMas.length; i++) {
        botonesMas[i].addEventListener("click",function(){botonMas(i)});
        botonesMenos[i].addEventListener("click",function(){botonMenos(i)});
    }

    document.getElementById("vaciar").addEventListener("click",vaciarCarrito);
}
function menuChooser(){
    let date = new Date();
    let hora = date.getHours();
    let minutos = date.getMinutes();

    if(hora < 11 || (hora == 11 && minutos < 31)){        
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
        document.getElementById("total").innerHTML = (parseFloat(document.getElementById("total").textContent) + parseFloat(document.getElementsByClassName("precio")[posicion].textContent)).toFixed(2);        
    }
    else{
        document.getElementById("total").innerHTML = (parseFloat(document.getElementById("total").textContent) - parseFloat(document.getElementsByClassName("precio")[posicion].textContent)).toFixed(2);
    }
}
function vaciarCarrito(){
    
    let cantidades = document.getElementsByClassName("cantidad");

    for(let i = 0 ; i < cantidades.length; i++ ){
        document.getElementsByClassName("cantidad")[i].innerHTML = 0;
    }

    document.getElementById("total").innerHTML = 0;
}
  