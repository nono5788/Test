
        <?php
        $phrase='Au claire de la lune mon ami Pierrot';
        $long = strlen($phrase);
        echo ('Il y a '.$long. ' caractères dans cette phrase');
        ?>
<br>

        <?php
        $melange = str_shuffle($phrase);
        echo ('Voici la phrase melangée '.$melange.' ');
        echo str_shuffle($phrase);

       
        ?>
<br>
        <?php
        echo date(dmy)
        ?>
<br>

<?php
function coucou($nom)
{
echo ('<p>boujour ' .$nom.'<p>');
}

coucou(Ines); 
Coucou (Abiba);

?>
