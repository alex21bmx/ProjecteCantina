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
                if(isset($_POST['realitzat'])) { 
                    $myfile = fopen("../Tiquets/".$_POST['fitxer'], "r");
                    $cadena = fgets($myfile);
                    $json = json_decode($cadena,true);
                    fclose($myfile);
                    $json['Estat'] = "Fet";
                    $myfile = fopen("../Tiquets/".$_POST['fitxer'], "w") or die("Unable to open file!");
                    fwrite($myfile, json_encode($json));
                    fclose($myfile); 

                    $to= $json['Dades']['Email'];
                    $subject ="La teva comanda";
                    $txt = "Estimat client, la seva comanda ja està llesta per recollir\r\nComanda:\r\n";
                    foreach ($json['productes'] as $key => $value) {
                        $txt.="-".$key." quantitat:".$value."\r\n";
                    }
                    $txt.="Preu: ".$json['preu'];
                    echo "<p>".$txt."</p>";
                    $txt = wordwrap($txt,70);
                    mail($to,$subject,$txt);
                } 
            ?>
            <?php
                $dir = new RecursiveDirectoryIterator('../Tiquets/');
                $contador = 1;
                echo '<table>';
                foreach ($dir as $fileinfo) {
                    
                    if(strlen($fileinfo->getFilename())>4){  
                        if(($contador-1)%3==0){
                            echo '<tr>';
                        }
                        $myfile = fopen("../Tiquets/".$fileinfo->getFilename(), "r");
                        $cadena = fgets($myfile);
                        $json = json_decode($cadena,true);
                        if(!($json['Estat']=="Fet")){
                            echo '<td>';
                            echo '<h3>Tiquet nº'.substr($fileinfo->getFilename(), 0, 4).'</h3>';
                            echo '<label><b>Productes</b></label>';
                            echo '<ul>';
                            foreach ($json['productes'] as $key => $value) {
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
                            echo '<form method="post">';
                            echo '<input type="hidden" value="'.$fileinfo->getFilename().'" name="fitxer" />';
                            echo '<input type="submit" name="realitzat" value="Marca com a Finalitzat"/> ';
                            echo '</form>';
                            echo "</td>";
                        }
                        fclose($myfile);    
                        if($contador%3==0){
                            echo '</tr>';
                        }  
                        $contador++;     
                        
                    }
                }
                if(!($contador-1)%3==0){
                    echo '</tr>';
                }
                echo '</table>'
            ?>
        </div>
    </div>    
</body>
</html>