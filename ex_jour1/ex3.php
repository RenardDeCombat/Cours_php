<?php


echo "Avez-vous un diplôme en informatique ? (oui/non) \n";

$reponse = trim(fgets(STDIN));

if ($reponse == "oui"){
    echo "Très bien bsartek monsieur !";
}
else {
    echo "On va vous prendre ! LE CUL";
}


?>