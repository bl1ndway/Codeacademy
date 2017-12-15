<?php

//pullen tipo kintamieji, bet galima irasyti sulyginimo reiksme

$a = true; // logine reiksme - teisingai
$b = false; //logine reiksme - neteisingai

$c = 6 > 5; // gauname true
$d = 5 > 6; //gauname false

echo $a . "<br>";
echo $b . "<br>";
echo $c . "<br>";
echo $d . "<br>";

//kintamojo isvedimai - budai


print_r($c);

$f = (bool)1; //tipo CAST kai pabandome paskelbti kitu tipu
echo $f . "<br>";
var_dump($f);

$int_a = 0x10; //sesioliktaineje integracija
echo $int_a . "<br>";

$float_a = 1.15e1;
echo $float_a . "<br>";

// eilutes - stringai (string)

$eil = '***';
$eil_a = 'labas $eil rytas';
echo $eil_a . '<br>';
echo "labas $eil rytas". '<br>';
echo "labas {$eil} rytas". '<br>';

//dvigubos kabutes leidzia interpretuoti parasyta funckija

// \ naudojamas kai jau jau yra priskirtas simbolis

echo "labas \x31 rytas". '<br>';

//u - kombinuojami dviems baitais
//utf - atskiras isvedimas isvedamas vienas baitas, o spec simboliai koduojami dviems baitams

//-------

$aaa = <<<EOT
labas rytas <br>
myliu akimirka
EOT;
echo $aaa . '<br>';

//array yra masyvas

var_dump(array(<<<EOD
foobar!
EOD
));

echo strlen( "abcdef") . "<br>";

$bbb = "labas rytas";
$ccc = substr($bbb, 6, 3);
echo $ccc . '<br>';
echo strtoupper($ccc) . '<br>';

// http://www.php.net/manual/en/ref.strings.php - REF


//kaip susikurti objekta, pavyzdys apacioje
$o_1 = new stdClass(); // objekto sukurimas
//$o_2 = new class{}; // objekto sukurimas
$o_3 = (object)[]; // objekto sukurimas castina masyva i objekta
$o_4 = json_decode("{}"); // objekto sukurimas

$o_1->tipas = 'automobilis';
$o_1->pavdeze = 'automatine';
$o_1->durys = 4;

var_dump($o_1);

echo $o_1->tipas. ' ' . $o_1->pavdeze. '<br>';

$o_1->{'labas rytas'} = 'mercedes'; // pavadinimas - reiksme
echo $o_1->{'labas rytas'} . "<br>";

echo $o_1->{'tipas'}. ' ' . $o_1->{'pavdeze'}. '<br>'



//property ivedimas su lauztiniais skliautais

    //-> kreipinys i jo property, objekto prieigos SINTAKSE


?>
