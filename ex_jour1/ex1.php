<?php

$nbr = (int)trim(fgets(STDIN));

if ($nbr == 0) {
    echo "Votre chiffre est égal à 0 \n";
}
elseif ($nbr != 0) {
    echo "Votre chiffre est différent de 0 \n";

    if ($nbr > 0) {
        echo "Votre chiffre est strictement supérieur à 0 \n";
        if ($nbr >= 0) {
            echo "Votre chiffre est supérieur ou égal à 0 \n";
        }
    }
    elseif ($nbr < 0) {
        echo "Votre chiffre est strictement inférieur à 0 \n";
        if ($nbr <= 0) {
            echo "Votre chiffre est inférieur ou égal à 0 \n";
        }
    }
    
}

?>