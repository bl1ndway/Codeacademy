<?php

// senovinis = užrašymas
// array ( elementu isvardymas)
$a = array (1, 2, 'labas');
var_dump($a);

//sintakses reikalas

$a = [1, 2, 'labas'];
var_dump($a);

//asociatyviniai masyvai, jie panasus i objiektus

$b = [0 =>0, 'a' => 1, 'b' => 2, 'c' => [0,1,2,3]];
var_dump($b);

//a - key , o 1 - value

echo $b['a']. '<br>';
$i = 0;
echo $b[(string)$i]. '<br>';

echo count($b)."<br>";
echo count($b['c'])."<br>";

//raktas a = pasalintome masyva A pagal rakta
unset($b['a']);
var_dump($b);

//raktas - aaa, pavadinimu kaunas, masyvas yra $B
$b['aaa'] = 'kaunas';
var_dump($b);

$a[] = 'vilnius';
$a[count($a)] = 'marijampole';
var_dump($a);

//masyvas $****


?>

