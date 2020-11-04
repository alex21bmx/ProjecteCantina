<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff</title>
    <script src="../js/staff.js"></script>
</head>
<body>    
    <div id="content">
        <h1>Llista de comandes</h1>        
        <div id="llista">
            <?php
                $dir = new RecursiveDirectoryIterator('../Tiquets/');
                foreach ($dir as $fileinfo) {
                    if(strlen($fileinfo->getFilename())==8){
                        $myfile = fopen("../Tiquets/".$fileinfo->getFilename(), "r+") or die("Unable to open file!");
                        $cadena = fgets($myfile);
                        $json = json_decode($cadena,true);
                        echo '<br><br><div>';
                        foreach ($json['productes'] as $key => $value) {
                            echo '<h3>Tiquet nº'.substr($fileinfo->getFilename(), 0, 4).'</h3>';
                            echo '<label><b>Productes</b></label>';
                            echo '<ul>';
                            echo '<li>'.$key." quantitat:".$value.'</li>';
                        }
                        echo '</ul>';
                        echo '<label><b>Dades</b></label>';
                        echo '<ul>';
                        echo '<li>Nom: '.$json['Dades']['Nom'].'</li>';
                        echo '<li>Telèfon: '.$json['Dades']['Telefon'].'</li>';
                        echo '<li>Correu: '.$json['Dades']['Email'].'</li>';
                        echo '</ul>';
                        echo '<label><b>Preu: </b>'.$json['preu'].'€</label><br>';
                        echo '<label><b>Estat: </b>'.$json['Estat'].'</label>';
                        echo "</div>";
                                
                        fclose($myfile);
                    }
                }
            ?>
        </div>
    </div>
    
</body>
</html>