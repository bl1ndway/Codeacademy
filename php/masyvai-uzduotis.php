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

$z = ['kaunas', 'vilnius', 'marijampole', 'nida'];

function raide ($ma){

    $suma = 0;
    for ($i=0; $i<count($ma); $i++){
        $suma += strlen($ma[$i]);
    }
    return $suma;

}

echo raide($z);