
        <?php
        $prenom[0]='Ines';
        $prenom[1]='Arnaud';
        $prenom[2]='Abiba';
        
        
        $first = array('Maguy','Jeannot','Michel','Pierrette');
        
        
        echo $first[1].' et '.$prenom[0];
        
        for ($numero= 0; $numero<3; $numero++)
        {
            echo '<p> '.$first[$numero]. ' <p>';
        }
        
        
        
        ?>
<br>

<?php
// On crée notre array $coordonnees
$coordonnees = array (
    'prenom' => 'Arnaud',
    'nom' => 'PIERROT',
    'adresse' => '9 place Jean XXIII',
    'ville' => 'TERVILLE');

print_r($coordonnees);

foreach ($coordonnees as $lib => $coord)
{
    echo '<p> Le '.$lib.' vaut '.$coord.'<p>';
}

?>

