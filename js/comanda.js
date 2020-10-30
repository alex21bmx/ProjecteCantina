function obtenirComanda(){
    let comanda = getCookie("id");
    return localStorage.getItem("comanda");

}
function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }
function stringComanda(){
    //let json = obtenirComanda();
    let json = {
        "producte":{
            "Pamtumaca":1,
            "Galletas digestive":4
        },
        "preu":23.95,
        "dades":{
            "nom":"Kolvin",
            "telefon":98988998,
            "email":"naksnsal@inspedrlabes.cat"
        },
        "estat":"para preparar"
    }
    
    let productes = json["producte"];
    let preu = json["preu"];
    let codiFinal = "<form>"
    for (let [key, value] of Object.entries(productes)) {
        codiFinal+="<tr>";
        codiFinal+=("<td>"+key+" </td>");
        codiFinal+="<td>Quantitat: "+value+"</td>";
        codiFinal+="</tr><br>";
    }
    codiFinal+=("<tr><td>Preu: </td><td>"+preu+"</td></tr></form>");
    codiFinal
    return codiFinal;
}
function imprimirComanda(){
    document.getElementById("ComandaPasada").innerHTML = stringComanda();
}
