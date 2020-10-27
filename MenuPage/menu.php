<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
      <?php require_once("../General/header.php"); ?>
    </header>
    <p>Estas en el menu </p>

    <form action="../ComandaPage/comanda.php">
      <input type="submit" value="Finalitza commanda" />      
    </form>

    <a href="../LandingPage/landing.php"> Torna enrera </a>
    <footer>
      <?php require_once("../General/footer.php"); ?>
    </footer>
</body>
</html>