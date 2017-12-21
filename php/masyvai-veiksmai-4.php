<?php

function skaiciuoti ($ma){ //nevykdo
    $belekas = 0; //kisene
    for ($a=0; $a < count($ma); $a++){
        //prasideda vykdymas
        $belekas = $belekas + $ma[$a]*($a+1);
        //baigiasi vykdymas
    }
    return $belekas;
}

$m=[2, 5, 6]; //vykdo
$rezultatas = skaiciuoti($m);//vykdo

echo skaiciuoti($m). '<br>';

// yra skaiciu masyvas minimum triju
//sukurti funkcija
//a) perduodamas parametras masyvas
//b) suskaiciuoti masyvo elementu sumos kvadratine sakni
//c) grazinti rezultata is funkcijos
//3. Parodyti su echo
//

$a = ['10', '20', '30'];

function dalyba ($ma){
    $suma = 0;
    for ($i=0; $i<count($ma); $i++) {
        $suma = sqrt($ma[$i]) + sqrt($ma[$i]);
    }
    return $suma . '<br>';
}

echo dalyba($a);



////

function daugyba ($baba){
    $u=0;
    for ($a=0; $a<count($baba); $a++){
        $u=tan($baba[$a])+ tan($baba[$a]);
    }
    return $u . '<br>';
}

echo daugyba($a);



//

$o=['tetis', 'maMA','seneLIS','moCIUte','suniukas'];

function labas ($mas) {
    $x = [];
    for ($i=0; $i <count($mas); $i++){
        $x[]= ucfirst(strtolower($mas[$i]));
    }
    return $x;
}


echo json_encode(labas($o)).'<br>';
echo var_dump(labas($o)).'<br>';

$saldainiai = ['snikers', 'bounty', 'kinder'];

function saldu ($mas){
    $op = [];
    for ($i=0; $i<count($mas);$i++){
        $op[]= str_shuffle($mas[$i]);
    }
    return implode(' ',$op);
}

echo saldu($saldainiai).'<br>';

$auto = ['audi', 'bmw', 'jaguar'];

function automobiliai ($a) {
    $car = [];
    for ($i = 0; $i<count($a); $i++){
        $car[] = str_shuffle($a[$i]);
    }

    return implode(' . . .',$car);

}

echo automobiliai(['labas','vakaras']).'<br>';








$begikai = ['rokas', 'antanas', 'evaldas'];

function draugai ($mas) {
    $rez = [];
    for ($i=0; $i <count($mas); $i++) {
        $rez [] = ucwords($mas[$i]);
    }
    return implode(' ',$rez);
}

echo draugai($begikai).'<br>';




// kas yra masyvas - array (sarasas) jie dvieju tipu



