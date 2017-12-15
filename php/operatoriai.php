<?php

$a = '6' == 6;
var_dump($a);

$a = '6' === 6;
var_dump($a);

$a = 6 === 6;
var_dump($a);

$a = true == 1;
var_dump($a);

$a = 'a' !='b';
var_dump($a);

$a = 3;

//
echo ++$a .  '<br>';
echo $a++ .  '<br>';
echo $a .  '<br>';


//++ -  isanksto prideda
// $a++ - isveda po lygu =

echo --$a . '<br>';
echo $a-- . '<br>';
echo $a. '<br>';



$x = 5; $y = 10;

$a= $x = 5 && $y < 10; //jeigu norime bendros true turi buti du true
var_dump($a);

$a= $x = 5 && $y >= 10;
var_dump($a);

$a= $x = 5 || $y < 10;
var_dump($a);


$a= $x = 5 && !($y < 10);
var_dump($a);

$a = ($x == 5 xor $y == 10);
var_dump($a);

// var dump - paima kas yra kintamajame ir atvaizduoja viska ekrane, diagnostine, programavime nenaudojame


//----

$x = 100;
$y = 50;

if ($x == 100 || $y == 80) {
    echo "Hello world!";
}