<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta</title>
    <link rel="stylesheet" href="menu.css">
    <script lang="javascript" src="menu.js"></script>
</head>
<body>
    <header>
      <?php require_once("../General/header.php"); ?>
    </header>
    <h1>Menú</h1>
    <div id = "pati">
      Este es el menú del patio
    </div>
    <div id = "migdia">
      <h3> Carta Migdia</h3>
      <div>Bocadillo Fuet:        
        <text class="precio">1.70</text>
        <button class="botonMenos">-</button>
        <text class = "cantidad">0</text>
        <button class="botonMas">+</button>
        
      </div>
      <div>Bocadillo Queso:        
        <text class="precio">1.70</text>
        <button class="botonMenos">-</button>
        <text class = "cantidad">0</text>
        <button class="botonMas">+</button>
        
      </div>
      <div>Bocadillo Chistorra:        
        <text class="precio">2.50</text>
        <button class="botonMenos">-</button>
        <text class = "cantidad">0</text>
        <button class="botonMas">+</button>        
      </div>      
      <div>
        <text> TOTAL:</text>
        <text id = "total"> 0</text>
        <button id = "vaciar">Vaciar </button>
      </div>
    </div>
    <footer>
      <?php require_once("../General/footer.php"); ?>
    </footer>    
</body>
<script>
  let botonesMas = document.getElementsByClassName("botonMas");
  let botonesMenos = document.getElementsByClassName("botonMenos");

  for (let i = 0; i < botonesMas.length; i++) {
    botonesMas[i].addEventListener("click",function(){botonMas(i)});
    botonesMenos[i].addEventListener("click",function(){botonMenos(i)});
  }

  document.getElementById("vaciar").addEventListener("click",vaciarCarrito);
</script> 
</html>