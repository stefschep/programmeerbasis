<?php

$random = rand(1,100);
//Hiermee genereer ik een getal tussen de 1 en de 100
//en maak ik een variable aan waarin ik het random getal opsla.

$answer = 0;
$count = 0;
//Hier maak ik twee van de variabelen en geef ik ze een begingetal.
//$count is voor het bijghouden van het aantal beurten  
//en $answer is voor het opslaan van het antwoord van de gebruiker.

echo "Er is een random getal tussen 1 en 100 gekozen. Wat denk je dat het is?";
//Deze zin is nodig om uit te leggen wat de gebruiker moet doen.

while ($answer!=$random){
//Dit zorgt ervoor dat wanneer het antwoord van de gebruiker niet gelijk is aan het random getal alles wat in de loop staat wordt gedaan.
    $answer = readline();
// Hier kan de gebruiker hun gok invullen.

    if (!($answer >= 1 && $answer <= 100 )){
        
        die("Het programma wordt nu afgesloten.");
    }
// Hierdoor wordt het programma afgesloten als het antwoord niet een getal is dat tussen de 1 en de 100 ligt.

    if ($answer <$random){
        echo "Het antwoord is hoger.\n";
    }
//Hierdoor wordt er gezegd dat het goede antwoord hoger is als hun antwoord lager is als het random getal

    if ($answer>$random){
        echo "Het antwoord is lager.\n";
    }
//Hierdoor wordt er gezegd dat het goede antwoord lager is als hun antwoord hoger is als het random getal.
    echo "Probeer het nog eens:";
    $count++;
//Dit telt de beurten
}

if ($answer ==$random){
    echo "Je hebt het in $count beurten goed geraden.\n";
    die("Het programma wordt nu afgesloten.");
}
//Dit zorgt ervoor dat als het antwoord van de gebruiker goed is er wordt verteld 
//hoeveel beurten het kostte, dat dat het goede antwoord was en dat het programma wordt afgesloten.
?>