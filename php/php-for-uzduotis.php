<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
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

function getInfo ($zmones)
{
    $s = '';
    $s .= '<td>' . $zmones['vardas'] . '</td>';
    $s .= '<td>' . $zmones['pavarde'] . '</td>';
    $s .= '<td>' . $zmones['lytis'] . '</td>';
    return $s;
}

?>

<table>
    <tr>
        <th>Nr</th>
        <th>Vardas</th>
        <th>Pavarde</th>
        <th>Lytis</th>
    </tr>
    <?php
    $nr=1;
    foreach ($sveciai as $zmones) {
        echo '<tr>';
        echo '<td>' . $nr++ . '</td>';
        echo getinfo($zmones);
        echo '</tr>';
    }
    ?>
</table>

</body>
</html>