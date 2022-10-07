<?php 

$villes = array(
    'val-de-reuil',
    'louviers',
    'sheesh',
    'paris',
    'madrid',
);

$text = "";
$countVilles = count($villes)-1;


for($i = $countVilles; $i >= 0; $i = $i-2){
    $text = $text . $villes[$i] . "\n";
};

echo $text;



?>