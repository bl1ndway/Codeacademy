<?php
//== lygina reiksmes
//tipine funkcija - kuri gali buti naudojama rusiavimo funkcijos, kai norime surusiuoti masyva

function sulyginti ($a, $b) {
    if ($a > $b) return 1;
    elseif ($a == $b) return 0;
    else return -1;
}

echo sulyginti(3,2).'<br>';
echo sulyginti(3,3);
echo '<br>';
echo sulyginti(2,3);

function ilgis ($a, $b){
    if (strlen($a) ==0) return 'tuscias';
    elseif (strlen($a) > $b) return 'daugiau';
    elseif (strlen($a) == $b) return'lygu';
    else return 'maziau';
}

echo ilgis ('kaunas', 10);
echo '<br>';
echo ilgis ('', 10);
echo '<br>';
echo ilgis ('kaunas',3);




function ilgi ($a, $b){
    $r= '';

    if (strlen($a) ==0) $r = 'tuscias';
    elseif (strlen($a) > $b) $r = 'daugiau';
    elseif (strlen($a) == $b) $r = 'lygu';
    else $r = 'maziau';
    return $r;
}

function lyg ($a, $b){
    if ($a > $b) return true;
    else return false;
}
echo '<br>';

$c=lyg(6,5);
if ($c) echo 'daugiau';
else echo 'nedaugiau';

echo  '<br>';
