function imprimeixComanda(){
    let json = JSON.parse(localStorage.getItem("comanda"));
    let cadena = "";
    cadena+="<h3><b>Productes</b></h3>";
    cadena+="<ul>"
    for (let key in json["productes"]){
        var attrName = key;
        cadena+=("<li><t>-"+key+" x "+json["productes"][key]+"</li>");
    }
    cadena+="</ul>"
    cadena+=("<p><b>Preu </b>"+json["preu"]+"€</p>");
    document.getElementById("divFinal").innerHTML = cadena;
}
imprimeixComanda();