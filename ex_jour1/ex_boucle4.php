<?php

$nbr = trim(fgets(STDIN));
$n = 0;
$i = 1;
$text = "";


for ($i; $i <= $nbr; $i++){
    $n = $n + $i;
    if ($i == 1){
        $text = $text . "$i";
    }
    else {
        $text = $text . " + $i";
    }
}
$text = $text . " = " . $n . "\n";

echo $text;

?>