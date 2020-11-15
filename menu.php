<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta</title>
    <script lang="javascript" src="js/menu.js"></script>
</head>
<body>
    <?php 
      if (isset($_COOKIE["comanda"])){
        header('Location: error.php');
      }
    ?>
    <header>
      <?php require_once("imports/header.php"); ?>
    </header>
    <div class ="fila" id="content">
      <div class="columna">
        <h1 id="h1Carrito">Tu compra</h1>
        <div id="carrito"></div>
        <div id="divTotal">
          <text> TOTAL:</text>
          <text id = "total"> 0</text>
          <text>€</text>
          <br>
          <button id = "vaciar">Vaciar </button>
        </div>
      </div>    
      <div class = "columna">
      <?php
        $hora =  date('H');  
        $minutos = date('m');      
        if($hora < 11 || ($hora == 11 && $minutos < 31)){
          $menu = 'pati';
        }else{
          $menu = 'migdia';
        }

        $inp = file_get_contents('./admin/menu.json');
        $tempArray = json_decode($inp);
        
        echo('<div class="titolMenu" >');
        if($menu == 'pati'){
          echo('Carta Pati');
        }else{
          echo('Carta Migdia');
        }
        
        echo('</div>');
        echo ('
          <br><br>
          <div id="graella">
          
          ');     

        for ($i=0; $i < sizeof($tempArray); $i++) { 
          if($tempArray[$i]->torn == $menu){          
            echo('
              <ul class="tdMenu">
                <img class = "menuImg" src = "' . $tempArray[$i]->rutaMenu . '">
                <div>
                  <text class="nombre">'. $tempArray[$i]->nom . '</text>        
                  <text class="precio">'.$tempArray[$i]->preu.'€</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>          
                </div>
              </ul>
            '); 
          }                   
        }
        
        echo('</div>');  
       
      ?>
      
    </div>   
    <footer id="footer">
        <?php require_once("imports/footer.php"); ?>
    </footer> 
</body>
</html>