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
                if ($handle = opendir('../Tiquets')) {  
                    while (false !== ($entry = readdir($handle))) {
                        if ($entry != "." && $entry != "..") {
                            echo "<a href='../Tiquets/$entry'> $entry <br></a>";
                        }
                    }
                    closedir($handle);
                }
            ?>
        </div>
    </div>
    
</body>
</html>