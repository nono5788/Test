<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Test sur les formulaires</title>
    </head>
    <body>
        <p> Bonjour <?php echo HTML_SPECIALCHARS($_POST[prenom]); ?> </p> 
        <br>
        <?php
        if (isset($_POST[vege]))
            {
            echo('Vous êtes végétarien');
            }
        else
            {
            echo('Vous n\'êtes pas végétarien');
            }
        ?>
    </body>
</html>

