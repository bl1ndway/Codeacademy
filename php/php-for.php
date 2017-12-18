<?php
//ciklu tipo 'for'
$masyvas = ['bmw','audi', 'honda','jaguar'];

for ($i = 0; $i<count($masyvas); $i++){
    $masina = $masyvas[$i];
    echo ($i + 1) . '. ' . $masina . '<br>';
}

//foreach

$ii = 10;

foreach ($masyvas as $masina){
    echo $ii++ . '. ' . $masina. '<br>';
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Title of the document</title>
</head>

<body>

<?php
$auto = [
    [
        'gamintojas' => 'bmw',
        'modelis' =>'320i',
        'variklis' => '2.0',
        'durys'=> 4,
        'metai' => 2010
    ],
    [
        'gamintojas' => 'audi',
        'modelis' =>'100',
        'variklis' => '2.4',
        'durys'=> 4,
        'metai' => 1990

    ],
    [
        'gamintojas' => 'honda',
        'modelis' =>'civic',
        'variklis' => '1.4',
        'durys'=> 3,
        'metai' => 1996

    ]

];

function getinfo ($masina) {
    $s = '';
    $s .= '<td>' . $masina['gamintojas'] . '</td>';
    $s .= '<td>' . $masina['modelis'] . '</td>';
    $s .= '<td>' . $masina['variklis'] . '</td>';
    $s .= '<td>' . $masina['durys'] . '</td>';
    $s .= '<td>' . $masina['metai'] . '</td>';
    return $s;
}

?>

<table>
    <tr>
        <th>Nr</th>
        <th>Gamintojas</th>
        <th>Modelis</th>
        <th>Variklis</th>
        <th>Metai</th>
        <th>Durys</th>
    </tr>
    <?php
        $nr = 1;
        foreach ($auto as $masina){
            echo '<tr>';
            echo '<td>' . $nr++ . '</td>';
            echo getinfo($masina);
            echo '</tr>';
}
?>
</table>

</body>

</html>
