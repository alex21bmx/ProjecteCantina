<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/comanda.js"></script>
</head>
<body>
    <header>
      <?php require_once("imports/header.php"); ?>
    </header>
    <div id="content">
      <h1>Tramitació comanda</h1>
      <div class="columna">
        <div id="ComandaPasada">
        </div>  
      </div>
      <div class="columna">
        <form action="process.html" method="post" name="signup" id="signup">
                <fieldset>
                    <legend>formulari Comanda</legend>
                    <div>
                        <label for="name" class="label">Nom</label>
                        <input name="name" type="text" id="name" size="15">
                    </div>
                    <div>
                        <label for="telefon" class="label">Telefon</label>
                        <input name="telefon" type="text" id="telefon" size="15">
                    </div>
                    <div>
                        <label for="email" class="label">Email</label>
                        <input name="email" type="text" id="email" size="15">
                    </div>

                </fieldset>
        </form>
      </div>
    </div>
    <footer>
      <?php require_once("imports/footer.php"); ?>
    </footer>
    <script>imprimirComanda();</script>
</body>
</html>