<?php

$m = ['bmw', 'audi', 'honda', 'lada'];

echo json_encode($m); echo '<br>';

//json_encode - betkokio masyvo pavertimas i tekstine forma, naudojamas tarp php ir java, is front end i back, ir is back to front>>> labai lengvai ir automatiskai adaptuojasi is abieju pusiu
//siuo atveju naudojami parodymui duomenu ekrane

sort ($m); ////rusiavimas - pagal reiksme didejimo tvarka
echo json_encode ($m); echo '<br>';
rsort($m); // rusiavimas pagal reiksme mazejimo tvarka
echo json_encode($m); echo '<br>'; ////json.stringify - java script JSON kodavimo forma

/*shuffle($m); // ismetymas atsitiktine tvarka
echo json_encode ($m); echo '<br>';*/

$m2 = array_slice($m, 1, 2); //iskirpti dali masyvo pradedant nuo pozicijos vienas
echo json_encode($m2); echo '<br>'; //masyvo dalis

$m3 = array_slice($m, 1,3);
echo json_encode(@$m3); echo '<br>'; //masyvo dalis
unset($m3[1]); //pasalinti elementa
echo json_encode($m3); echo '<br>'; //masyvo dalis

$m3 = array_slice($m, 1,3);
echo json_encode($m3); echo '<br>';
for ($i=0; $i<count($m3); $i++){
    if ($m3[$i] == 'bmw') {
    unset($m3[$i]);
    break;
    }
}

echo json_encode($m3); echo '<br>';

$m4=$m; //parodo ar yra toks elementas masyve
if (in_array('honda', $m4)) echo 'honda rasta<br>';
else echo 'honda nerasta<br>';

$s = 'honda, bmw, audi, lada'; //teksto eilute, komanda kuri
$ms = explode(',', $s);
echo json_encode($ms); echo '<br>'; //masyvos is teksto explode
for ($i=0; $i<count($ms); $i++) $ms[$i] = trim($ms[$i]); //pasalina tarpus is krastu//++ imtu vis sekanti
$s2= implode(';', $ms);
echo $s2; echo '<br>'; //tekstas is masyvo

list($auto1, $auto2, $auto3,$auto4) = $ms;
var_dump($auto1);
var_dump($auto2);
var_dump($auto3);
var_dump($auto4);

$a1 = $ms[0];
$a2 = $ms[1];
$a3 = $ms[2];
$a4 = $ms[3];

var_dump($a1);
var_dump($a2);
var_dump($a3);
var_dump($a4);
