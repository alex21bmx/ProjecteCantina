<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta</title>
    <script lang="javascript" src="js/menu.js"></script>
</head>
<body>
    <header>
      <?php require_once("imports/header.php"); ?>
    </header>
    <div class ="fila" id="content">
      <div class="columna">
        <h1>Tu compra</h1>
        <div id="carrito"></div>
        <div id="divTotal">
          <text> TOTAL:</text>
          <text id = "total"> 0</text>
          <button id = "vaciar">Vaciar </button>
        </div>
      </div>    
      <div class = "columna">
        <div id = "pati">
          <table class = "tablaMenu">
            <tr>
              <th colspan = "3">Carta Pati</th>
            </tr>
            <tr>
              <td>
                <img class = "menuImg" src = "./src/img/menu_bocadillo_fuet.jpg">
                <div>
                  <text class="nombre">Bocadillo Fuet</text>        
                  <text class="precio">1.70</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>          
                </div>
              </td>
              <td>
                <img class = "menuImg" src = "./src/img/menu_bocadillo_queso.jpg">
                <div>
                  <text class="nombre">Bocadillo Queso</text>        
                  <text class="precio">1.70</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>          
                </div>
              </td>
              <td>
                <img class = "menuImg" src = "./src/img/menu_bocadillo_chistorra.jpg">
                <div>
                  <text class="nombre">Bocadillo Chistorra</text>        
                  <text class="precio">2.50</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>        
                </div>  
              </td>
            </tr>
            <tr>
              <td>
                <img class = "menuImg" src = "./src/img/menu_bocadillo_fuet.jpg">
                <div>
                <text class="nombre">Bocadillo Fuet</text>         
                  <text class="precio">1.70</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>          
                </div>
              </td>
              <td>
                <img class = "menuImg" src = "./src/img/menu_bocadillo_queso.jpg">
                <div>
                  <text class="nombre">Bocadillo Queso</text>                      
                  <text class="precio">1.70</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>          
                </div>
              </td>
              <td>
                <img class = "menuImg" src = "./src/img/menu_bocadillo_chistorra.jpg">
                <div>
                  <text class="nombre">Bocadillo Chistorra</text>        
                  <text class="precio">2.50</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>        
                </div>  
              </td>
            </tr>
            <tr>
              <td>
                <img class = "menuImg" src = "./src/img/menu_bocadillo_fuet.jpg">
                <div>
                  <text class="nombre">Bocadillo Fuet</text>         
                  <text class="precio">1.70</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>          
                </div>
              </td>
              <td>
                <img class = "menuImg" src = "./src/img/menu_bocadillo_queso.jpg">
                <div>
                  <text class="nombre">Bocadillo Queso</text>         
                  <text class="precio">1.70</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>          
                </div>
              </td>
              <td>
                <img class = "menuImg" src = "./src/img/menu_bocadillo_chistorra.jpg">
                <div>
                  <text class="nombre">Bocadillo Chistorra</text>          
                  <text class="precio">2.50</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>        
                </div>  
              </td>
            </tr>
          </table> 
        </div>
        <div id = "migdia">
          <table class = "tablaMenu">
            <tr>
              <th colspan = "3">Carta Migdia</th>
            </tr>
            <tr>
              <td>
                <img class = "menuImg" src = "./src/img/menu_ensalada.jpg">
                <div>
                  <text class="nombre">Amanida</text>          
                  <text class="precio">2.70</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>          
                </div>
              </td>
              <td>
                <img class = "menuImg" src = "./src/img/menu_entrecot.jpg">
                <div>
                  <text class="nombre">Entrecot</text>          
                  <text class="precio">1.70</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>          
                </div>
              </td>
              <td>
                <img class = "menuImg" src = "./src/img/menu_natillas.jpg">
                <div>
                  <text class="nombre">Natillas</text>                            
                  <text class="precio">1.50</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>        
                </div>  
              </td>
            </tr>
            <tr>
              <td>
                <img class = "menuImg" src = "./src/img/menu_ensalada.jpg">
                <div>
                  <text class="nombre">Amanida</text>          
                  <text class="precio">1.70</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>          
                </div>
              </td>
              <td>
                <img class = "menuImg" src = "./src/img/menu_entrecot.jpg">
                <div>
                  <text class="nombre">Entecot</text>        
                  <text class="precio">1.70</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>          
                </div>
              </td>
              <td>
                <img class = "menuImg" src = "./src/img/menu_natillas.jpg">
                <div>
                  <text class="nombre">Natillas</text>          
                  <text class="precio">2.50</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>        
                </div>  
              </td>
            </tr>
            <tr>
              <td>
                <img class = "menuImg" src = "./src/img/menu_ensalada.jpg">
                <div>
                  <text class="nombre">Amanida</text>          
                  <text class="precio">1.70</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>          
                </div>
              </td>
              <td>
                <img class = "menuImg" src = "./src/img/menu_entrecot.jpg">
                <div>
                  <text class="nombre">Entrecot</text>         
                  <text class="precio">1.70</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>          
                </div>
              </td>
              <td>
                <img class = "menuImg" src = "./src/img/menu_natillas.jpg">
                <div>
                  <text class="nombre">Natillas</text>        
                  <text class="precio">2.50</text>
                  </br>
                  <button class="botonMenos">-</button>
                  <text class = "cantidad">0</text>
                  <button class="botonMas">+</button>        
                </div>  
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>   
    <footer id="footer">
        <?php require_once("imports/footer.php"); ?>
    </footer> 
</body>
</html>