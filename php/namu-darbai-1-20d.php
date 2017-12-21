<?php
//yra masina:
//a)kodas (raktas)
//b)gamintojas
//c)modelis
//d)metai

//padaryti funkcija, kuri pagal masinos parametrus  (pirmas punktas) padaro asociatyvini masyva ir ji grazina su return

//pasidaryti masinu masyva naudojant funkcija (antras punktas) - ne maziau 4 masinu

//surusiuoti masyva

//pasidaryti masinos isvedimo eilutes (<tr>....</tr> funkcija parametras yra masinos asociatyvinis masyvas ir ja grazinti

//graziai isvesti su lentele <table>....</table> idedant eilutes padarytas su funkcija (5 punktas) isvedima daryti cikle FOR (nuo 0 iki) for 'masyvo kiekyje' strcount

function auto ($a, $b, $c){//raktai
    return [
        'gamintojas' => ucfirst(strtolower($a)), //raktai
        'modelis' =>ucfirst(strtolower($b)),//raktai
        'metai'=>ucfirst(strtolower($c)),//raktai
    ]; //return kad iskarto grazintu masyva

}

$automobiliai = []; //tam kad butu aprasytas masyvas

$automobiliai [0]= auto('volvo','v40',1996);
$automobiliai [1]= auto('audi','80',1990);
$automobiliai [2]= auto('Audi','A7',2017);
$automobiliai [3]= auto('bmw', 320,2010);

ksort($automobiliai); //surusiuoja masyva pagal raides


function isvedimas ($m) {
    //$kitamasis = raktas
    $gamintojas= $m ['gamintojas'];
    $modelis= $m ['modelis'];
    $metai=$m ['metai'];

    return "<tr><td>$gamintojas</td><td>$modelis</td><td>$metai</td></tr>";
}




echo '<table>';
echo '<tr><th>Gamintojas</th><th>Modelis</th><th>Metai</th></tr>';
for ($i=0; $i<count($automobiliai); $i++)
    echo isvedimas($automobiliai[$i]);
    echo '</table>';



