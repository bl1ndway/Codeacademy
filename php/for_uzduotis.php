<?php
//asmenys_keturi_asmenys
//vardas
//pavarde
//lytis


$sveciai = [
    [
        'vardas' => 'Rita',
        'pavarde'=> 'Ritariana',
        'lytis' =>  'Moteris'
    ],
    [
        'vardas' => 'Rokas',
        'pavarde'=> 'Sarauskas',
        'lytis' =>  'Vyras'
    ],
    [
        'vardas' => 'Rimas',
        'pavarde'=> 'Rimauskas',
        'lytis' =>  'Vyras'
    ],
];

function getInfo ($sveciai)
{
    $s = '';
    $s = .'<td>' . $sveciai['vardas'] . '</td>';
    $s = .'<td>' . $sveciai['pavarde'] . '</td>';
    $s = .'<td>' . $sveciai['lytis'] . '</td>';

}

?>