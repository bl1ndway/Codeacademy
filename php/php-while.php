<?php
$m = ['bmw', 'honda','audi'];
$i = 1;
while ($i<=count($m)){
    echo $i . '. ' .$m[$i-1] . '<br>';
    $i++;
}

$i = 1;

do {
    echo $i . '. ' . $m[$i-1] . '<br>';
    $i++;
} while ($i <= count($m));