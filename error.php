<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600;900&display=swap" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/4b9ba14b0f.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
      <?php require_once("imports/header.php"); ?>
    </header>
    <div id="content">
      <div class="bodyerror">
        <div class="mainboxerror">
          <div class="err">ERR</div>        
          <i class="far fa-question-circle fa-spin "></i>
          <div class="err2">R</div>
        </div>
        <div class="msgerror">Ja has fet una comanda avui<p>torna a la pàgina <a href="landing.php">principal</a> .Esperem que tornis demà, et desitgem un bon dia.</p></div>

      </div>
    </div>
    <footer>
      <?php require_once("imports/footer.php"); ?>
    </footer>
</body>
</html>