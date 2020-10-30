function stringComanda(){
    json = localStorage.getItem("comanda");
    
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
