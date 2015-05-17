<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
<?php

    // Sous MAMP (Mac)
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
    $reponse = $bdd->query('select * from jeux_video');
    while($donnee = $reponse ->fetch())
    {
        echo('<p> '.$donnee['console'].' - '.$donnee['nom'].'<p>');
    }
    ?>
    
    <p>Bonjour</p>
    </body>
</html>
