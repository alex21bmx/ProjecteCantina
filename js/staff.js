window.onload = function(){

    function carregaFitxers(){
        var control = document.getElementById("llista");
        control.addEventListener("change", function(event) {

    // When the control has changed, there are new files

        var i = 0,
        files = control.files,
        len = files.length;

    for (; i < len; i++) {
        console.log("Filename: " + files[i].name);
        console.log("Type: " + files[i].type);
        console.log("Size: " + files[i].size + " bytes");
    }

}, false);
    } 
    
    carregaFitxers();
}