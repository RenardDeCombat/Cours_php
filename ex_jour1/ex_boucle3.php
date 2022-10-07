<?php


echo "Choisissez votre nombre à multiplier \n";

$nbr = (int)trim(fgets(STDIN));

for ($i = 0; $i <=10; $i++) {
    $result = $nbr * $i;
    echo "$nbr x $i = $result \n";
}





?>