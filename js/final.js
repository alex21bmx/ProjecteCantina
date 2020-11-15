function imprimeixComanda(){
    let json = JSON.parse(localStorage.getItem("comanda"));
    let cadena = "";
    let preuTotal;
    cadena+='<h3 id="h3Final"><b>Productes</b></h3>';
    cadena+='<ul id="ulFinal">';

    let inp = file_get_contents('./admin/menu.json');
    let tempArray = json_decode(inp);

    for (let key in json["productes"]){
        var attrName = key;
        cadena+=("<li><t>"+key+" - "+json["productes"][key]+" unitats </li>");
/*
        for (let i = 0; i < sizeof(tempArray); i++) {           
            if(tempArray[i]->nom == key){
                preuTotal += ((json["productes"][key]) * tempArray[i]->preu);
                console.log(preuTotal);
            }
        }
 */       
    }
    cadena+="</ul>"
    cadena+=('<p id="pFinal"><b>Preu </b>'+json["preu"]+'€</p>');
    document.getElementById("divFinal").innerHTML = cadena;
}
imprimeixComanda();