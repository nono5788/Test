
        <?php
        $age=33;
        if ($age<12) 
          {echo('Salut gamin');
    
         }
        else {
                echo('Bonjour les adultes');
           
             }
       
             
        $adulte=true;
        if ($adulte) 
            {echo('Bonjour les adultes');
            }
        else {
             echo 'tu es un enfant';}
            
      $note = 10;
?>
</br>
<?php
switch ($note) // on indique sur quelle variable on travaille
{ 
    case 0: // dans le cas où $note vaut 0
        echo "Tu es vraiment un gros nul !!!";
    break;
    
    case 5: // dans le cas où $note vaut 5
        echo "Tu es très mauvais";
    break;
    
    case 7: // dans le cas où $note vaut 7
        echo "Tu es mauvais";
    break;
    
    case 10: // etc. etc.
        echo "Tu as pile poil la moyenne, c'est un peu juste…";
    break;
    
    case 12:
        echo "Tu es assez bon";
    break;
    
    case 16:
        echo "Tu te débrouilles très bien !";
    break;
    
    case 20:
        echo "Excellent travail, c'est parfait !";
    break;
    
    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note";
}
?>           
                    
        

