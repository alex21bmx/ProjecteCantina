    function verificaPagina(){
    return window.location.pathname.substring(window.location.pathname.lastIndexOf('/')+1);
}

function endevant(){
    let pagina = verificaPagina();

    switch(pagina){
        case "landing.php":
            //Aqui ha d'anar la verificació del cookie
            window.location.href = "menu.php";
            break;


        case "menu.php":
            //Aqui ha d'anar la verificació d'un article minim per comanda
            if(document.getElementById("total").textContent == 0){
                alert("HAS DE SELECCIONAR MÍNIM UN ITEM");
            }
            else{
                let mapPedido = new Object();
                let mapProductes = new Object();

                let cantidades = document.getElementsByClassName("cantidad");
                for(let i = 0 ; i < cantidades.length ; i++){
                    if(document.getElementsByClassName("cantidad")[i].textContent != 0){
                        mapProductes[document.getElementsByClassName("nombre")[i].textContent] = document.getElementsByClassName("cantidad")[i];
                    }
                }
                mapPedido["productes"] = mapProductes;
                mapPedido["preu"] = document.getElementById("total").textContent;

                localStorage.setItem("comanda",mapPedido);
                window.location.href = "comanda.php";
            }
            break;


        case "comanda.php":
            //Aqui ha d'anar la verificació de correu i telefon i camps buits
            window.location.href = "final.php";
            //Aqui s'ha de crear el Cookie
            break;
    }
}
function comprobaBtn(){
    let pagina = verificaPagina();

    switch(pagina){
        case "landing.php":
            btn(">",true,"Veure Menú");
            btn("<",false);
            break;


        case "menu.php":
            btn(">",true,"Fer comanda");
            btn("<",true,"Tornar a Pàgina principal");
            break;


        case "comanda.php":
            btn(">",true,"Finalitzar comanda");
            btn("<",true,"Tornar a menú");
            break;

        case "final.php":
            btn(">",false);
            btn("<",true,"Tornar a Pàgina principal");
            break;


        case "error.php":
            btn(">",false);
            btn("<",true,"Tornar a Pàgina principal");
            break;
    }
}

function enrera(){
    let pagina = verificaPagina();

    switch(pagina){
        case "menu.php":
            window.location.href = "landing.php";
            break;


        case "comanda.php":
            window.location.href = "menu.php";
            break;


        case "final.php":
            window.location.href = "landing.php";
            break;


        case "error.php":
            window.location.href = "landing.php";
            break;
    }
}

function btn (direccio,estat,nom){
    if(direccio==">"){
        if(!estat){
            document.getElementById("btn2").style.display = "none";
        }else{
            document.getElementById("btn2").style.display = "inline";
        }
        document.getElementById("btn2").value = nom;
    }else{
        if(!estat){
            document.getElementById("btn1").style.display = "none";
        }else{
            document.getElementById("btn1").style.display = "inline";
        }
        document.getElementById("btn1").value = nom;
    }
}
comprobaBtn();