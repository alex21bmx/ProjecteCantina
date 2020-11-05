<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comanda</title>
    <script src="js/comanda.js"></script>
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
    <div id="content">
      <h1>Tramitació comanda</h1>
      <div class="columna">
        <div id="ComandaPasada">
        </div>  
      </div>
      <div class="columna">
        <form action="final.php" method="post" name="signup" id="signup">
                <fieldset>
                    <legend>Formulari Comanda</legend>
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
                    <div>
                        <label for="extres">Intoleràncias</label>
                        <textarea name="intolerancies" id="intolerancies" for="intolerancies" placeholder="Descriu les teves intoleràncies" maxlength="300"></textarea>
                    </div>
                    <div>
                        <label for="extres">Extres</label>
                        <textarea name="extres" for="extres" id="extres" placeholder="Descriu els extres pels entrepans" maxlength="300"></textarea>
                    </div>

                    <input id="comanda" type="hidden" name= "comanda" value="">  


                </fieldset>
        </form>
      </div>
    </div>
    <footer>
      <?php require_once("imports/footer.php"); ?>
    </footer>
    <script>imprimirComanda();</script>
    <script>addLocalStorageToForm();</script>
</body>
</html>