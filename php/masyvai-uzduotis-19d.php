<?php
/** skaiciu masyvas
 *  funckija
    sudauginti kiekviena elementa is skaiciaus ir grazinti masyva (return)*/
//i funkcija perduodami masyvas ir skaicius
//su echo jsonencode isvesti gauta masyva


$a = [4,5,6,7,8];

function dauginti ($mas, $daugiklis){

    for ($i=0; $i<count($mas); $i++) $mas[$i] = $mas[$i] * $daugiklis;
    return $mas;

}

echo json_encode(dauginti($a, '3')) .'<br>';


function dalinti ($masyvas, $daliklis){
    for ($i=0; $i<count($masyvas); $i++) $masyvas[$i] /= $daliklis;
    return $masyvas;
}

echo json_encode (dalinti($a, '2')) . '<br>';


//tekstu masyvas
//funkcija
//suskaiciuoti bendra masyvu teskto skaiciu
//parametras - masyvas
//echo is funkcijos

$miestai = ['kaunas', 'vilnius', 'marijampole', 'nida'];

function raidziu_kiekis ($m){

    $suma = 0;
    for ($i=0; $i<count($m); $i++){
        $suma += strlen($m[$i]);
    }
    return $suma;

}

echo raidziu_kiekis($miestai).'<br>';

$praktika = ['praktika-1', 'praktika-2','praktika-3'];

function vienas ($v){
    $rezultatas =0;
    for ($i=0; $i<count($v); $i++){
    $rezultatas += strlen($v[$i]);
    }
    return $rezultatas . '<br>';
}

echo vienas($praktika);