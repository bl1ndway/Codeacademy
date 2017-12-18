<?php

//** kvadratu sqrt () function
// return - (nereikia =) kreipimasis i funckija
// echo - isvedimas i ekrana


function uzduotis ($a, $b){
    $c = sqrt($a**2+$b**2);
    return $c;
}

echo uzduotis(2,2).'<br>';


function pitagor ($a, $b){
    return sqrt(($a ** $a) + ($b ** $b));
}
echo pitagor(4,4);


// funckija - kuri turi du parametrus a ir b, noriu gauti rezultata

