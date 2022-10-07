<?php

echo "Vous êtes un garcon ou une fille \n";

$genre = trim(fgets(STDIN));

if ($genre == "garcon") {
    echo "VOUS AVEZ DES DROITS !";
}
else {
    echo "COUISINE !";
}


?>