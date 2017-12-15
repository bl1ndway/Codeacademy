<?php

//lentele yra masyvas []
//yra nera - asociatyvini
//reiksme - jonas, petras, o

$sveciai = [
['vardas' => 'Jonas', 'pavarde' => 'Jonaitis', 'patiekalas' => 'mesa', 'issilavinimas' => 'dr.'],
    ['vardas' => 'Petras', 'pavarde' => 'Petraitis', 'patiekalas' => 'zuvis'],
    ['vardas' => 'Sandra', 'pavarde' => 'Sandraite', 'patiekalas' => 'salota', 'issilavinimas' => 'bureja']
];

//if salyga
function info($e) {
    $s = $e['vardas'] . ' ' . $e['pavarde'] .' patiekalas: ' . $e['patiekalas'];
    if (isset($e['issilavinimas'])) $s .= ' ' .$e['issilavinimas'];
return $s;
}

echo 'Sveciu sarasas <br>';
echo '------------- <br>';


for ($i=0; $i<count($sveciai); $i++){
    $line = ($i + 1) . '. ' . info($sveciai[$i]) . '<br>';
    echo $line;
}

echo '__________<br>';
echo 'is viso sveciu: ' . count($sveciai);