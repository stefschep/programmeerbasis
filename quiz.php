<?php

$random = rand(1,100);
//hiermee genereer ik een getal tussen de 1 en de 100
//en maak ik een variable aan waarin ik het random getal opsla.

$answer = 0;
$count = 0;
//hier maak ik twee van de variabelen en geef ik ze een begingetal.
//$count is voor het bijghouden van het aantal beurten  
//en $answer is voor het opslaan van het antwoord van de gebruiker

echo "Er is een random getal tussen 1 en 100 gekozen. Wat denk je dat het is?";
//deze zin is nodig om uit te leggen wat de gebruiker moet doen.

while ($answer!=$random){
    //dit zorgt ervoor dat wanneer het antwoord van de gebruiker niet gelijk is aan het random getal alles wat hieronder staat wordt afgespeeld
    $answer = readline();
    // hier kan de gebruiker hun antwoord invullen

    if (!($answer >= 1 && $answer <= 100 )){
        die("Het programma wordt nu afgesloten.");
    }
  
    if ($answer <$random){
        echo "Het antwoord is hoger.\n";
    }

    if ($answer>$random){
        echo "Het antwoord is lager.\n";
    }

    echo "Probeer het nog eens:";
    $count++;
}

if ($answer ==$random){
    echo "Je hebt het in $count beurten goed geraden.\n";
    die("Het programma wordt nu afgesloten.");
}
?>