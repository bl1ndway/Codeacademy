<?php


function vardai ($a){
    $v1= 'Rokas';
    $v2= 'Karolis';
    $v3= 'Jonas';

if ($a == strlen($v1)) return $v1;
elseif ($a == strlen($v2))return $v2;
elseif ($a == strlen($v3)) return $v3;
else return 'nerasta';
}

echo vardai(60);