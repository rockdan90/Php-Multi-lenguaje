<?php
    session_start();
    require 'requirelanguage.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Sitio multilinugüe</title>   
        <meta charset="UTF-8">
    </head>
    <body>
        <div>
            <?php echo $holamundo;?></div>
            <?php echo $cambiarIdioma; ?>
            <?php  echo $mejormundo?>
        
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <a href="changelanguage.php?language=es">
                <button type="button"><?php echo $spanish;?></button>      
            </a>
            <a href="changelanguage.php?language=en">
                <button type="button"><?php echo $english; ?></button>
            </a>
            <a href="changelanguage.php?language=fr">
            <button type="button"><?php echo $french; ?></button>
        </a>
        </div>

        </body>   
</html>