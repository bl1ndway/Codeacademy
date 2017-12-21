<?php

//1. tekstu masyvas
//2.
// sukurti funkcija
// parametras - masyvas
// grazina masyva
//3.nustatyti kiek simboliu tekste
//  prideti prie simboliu skaiciaus +1
//  prikabinti prie teksto gauta skaiciu


//strlen()
//echo json_encode funckijos pavadinimas ir miestai

$miestai = ['kaunas', 'vilnius', 'klaipeda']; //tekstu masyvas

function lietuva ($mas){ //sukurti funkcija
    $rez = [];           // parametras masyvas {mas} {}
    for ($i=0; $i<count($mas); $i++){
        $rez[]= $mas[$i] . '.' .(strlen($mas[$i])+1); {}

    }
    return $rez;
}
echo json_encode (lietuva($miestai)) .'<br>';

echo 'Hello world';
echo '<br>';
echo 'Learning is what I like';