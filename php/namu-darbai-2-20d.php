<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

function svecias ($vardas, $pavarde, $maistas){
    return [

    'vardas' => ucfirst(strtolower($vardas)), //raktai
    'pavarde' =>ucfirst(strtolower($pavarde)),//raktai
    'maistas'=>ucfirst(strtolower($maistas))

    ];
    }

    $sv=svecias('Rokas','Sarauskas','Sushiai');//1 pasigaminti svecia

$sveciai = [];
//2 pasigaminti rakta

$s =  svecias('Rokas','Pokas','Sushiai');
$raktas= strtolower($s['vardas']).strtolower($s['pavarde']);
$sveciai[$raktas]=$s;

$s = svecias('Pokas','Sokas','Pica');
$raktas= strtolower($s['vardas']).strtolower($s['pavarde']);
$sveciai[$raktas]=$s;

$s = svecias('Mokas','Sokas','Ledai');
$raktas= strtolower($s['vardas']).strtolower($s['pavarde']);
$sveciai[$raktas]=$s;

ksort($sveciai);
//print_r($sveciai);

function eilute ($svecias){
    return "<tr><td>{$svecias['vardas']}</td><td>{$svecias['pavarde']}</td><td>{$svecias['maistas']}</td></tr>";
}

?>

<table style="border: rgb(55,55,255) solid 5px">
    <tr>
        <th>Vardas</th>
        <th>Pavarde</th>
        <th>Maistas</th>
    </tr>
    <?php
    foreach ($sveciai as $o =>$value){
        echo eilute($value);
    }
    ?>
</table>

</body>
</html>