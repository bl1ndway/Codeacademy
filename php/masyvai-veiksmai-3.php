<?php

//masyva pasidarysime su tekstais

$m = ['labas','rytAS','...kaunas#', 'jonas jonAITIS'];

function mazosios ($s){
    $x = strtolower($s);
    $x = rtrim (ltrim($x, '.'),'#'); //funkcija funkcijoje
    return $x;
}
//ltrim - istriname ka nurodome (siuo atveju taskus) is kaires puses

$nm=[];
$nmd=[];
$nmp=[]; //[] ima kur yra ['labas', 'rytAS'...]
$nml=[];
$nmx=[];
$nms=[];

for ($i=0; $i<count($m); $i++){
    $s = mazosios($m[$i]);
    //$nm [] = ucfirst($s);pirma raide
    $nm [] = ucwords($s); // visu zodziu
    $nmd [] = strtoupper($s); //visas raides padarytu didziosiomis
    $nmp[] = str_replace ('a','*', $s);
    $nml[] = $s . '-' . strlen($s);
    $nms[] = str_shuffle($s);
    $nmx[] = $s . '-' . strpos($s, 'a');
}
echo json_encode($nm). '<br>';
echo json_encode($nmd). '<br>';
echo json_encode($nmp). '<br>';
echo json_encode($nml).'<br>';
echo json_encode($nmx).'<br>';
echo json_encode($nms). "<br>";

//----//

