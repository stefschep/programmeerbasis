<?php

$begin= 1;
$eind=10;
$tafel= readline("De tafel van welk nummer wil je hebben:");


echo "\n\nDe tafel van $tafel:\n";

for($teller=$begin; $teller<=$eind; $teller++) {
$product=$teller*$tafel;

echo $tafel."x".$teller."=".$product."\n";

}




?>