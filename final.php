<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
      <?php require_once("imports/header.php"); ?>
    </header>
    <div id="content">
      <h1>Compra finalitzada</h1>
      <?php 
      if (!isset($_COOKIE["comanda"])){
        $hora = date("G");
        $cooldown = 23-intval($hora);
        $cooldown = $cooldown*3600;
        setcookie("comanda","True",time()+$cooldown);

        
      }
      ?>
    </div>
    <footer>
      <?php require_once("imports/footer.php"); ?>
    </footer>
</body>
</html>