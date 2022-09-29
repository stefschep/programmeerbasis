<?php
$check=21;
$naam = readline ("Voer hier jouw naam in: ");
$leeftijd = readline ("Voer hier jouw leeftijd in: ");
echo "Hallo $naam.\n" ;


if ($leeftijd>$check){
echo"Je bent ouder als $check.\n";}
if ($leeftijd<$check){
echo "Je bent jonger als $check.\n";}
if ($leeftijd==$check){
echo "Je bent precies $check.";}
?>