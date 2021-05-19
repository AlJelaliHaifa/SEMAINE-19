<?php

$file = fopen("compteur_jarditou.txt","r+");
$guess = fgets($file,255);
$guess++;
fseek($file,0);
fputs($file,$guess);
fclose($file);
print("$guess personnes sont passées par ici");
?>