<?php

echo "Indiquez la température de la water \n";

$temp = (int)trim(fgets(STDIN));

if ($temp <= 0) {
    echo "La water est à l'état solide";
}elseif ($temp > 0 && $temp <= 100) {
    echo "La water est à l'état liquide";
}else {
    echo "La water est à l'état gazeux";
}



?>