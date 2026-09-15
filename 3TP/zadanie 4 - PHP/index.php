<?php
    echo "Testujemy czy działa";
    $zmienna = 5; 

    if($zmienna > 4){
        echo "Zmienna większa od 4";
    } else if($zmienna == 5) {
        echo "zmienna równa sie 5";
    } else {
        echo "inny wynik";
    }
    
    $kolor = "red";

    switch ($kolor) {
    case "red":
        echo "czerwony";
        break;
    case "blue":
        echo "niebieski";
        break;
    case "yellow":
        echo "żółty";
        break;
    default:
        echo "kolor nierozpoznany";
    }

    //Zadanie 1
    $a = 1;
    $b = -5;
    $c = 6;

    pow(2,3); //potęga
    sqrt(5); //pierwiastek

    $delta = pow($b,2) - (4 * $a * $c);
    
    if($delta > 0){
        echo "dwa miejsce zerowe";
        //obliczenie miejsc zerowych
    } else if ($delta == 0){
        echo "jedno miejsce zerowe";
        //obliczenie miejsc zerowych
    } else {
        echo "brak miejsc zerowych";
    }

    //delta > 0 -> dwa miejsce zerowe
    // delta = 0 -> jedno miejsce zerowe
    // delta < 0 -> brak miejsc zerowych

?>