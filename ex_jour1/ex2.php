<?php

echo "Quel âge avez-vous ? \n";

$age = trim(fgets(STDIN));

if ($age >= 18){
    echo "vous êtes périmé";
}
else {
    echo "PARFAIT !";
}




?>