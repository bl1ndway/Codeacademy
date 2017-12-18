<?php
/* asociatyvinis masyvas - kur raktas jos yra jos pavadinimas*/
function ($pinigai, $pavadinimas){
    $prekes = [
        'cola' => 1,
        'mineralinis' => 1.5,
        'traskuciai' => 0.75,
        'sprite' => 1.1
    ];
    /*isset = */
    if(isset($prekes [$pavadinimas])){
        $preke = $prekes [$pavadinimas];
        if($pinigai >= $preke)
            //preke iskrenta pro skyle
            if ($pinigai == $preke) {
                echo ('pasiimkite preke');
            }
            else {
            echo 'pasiimkite preke ir graza';
            }
            return $preke;
    }
    else {
        echo 'per mazai pinigu';
        return $pinigai;
    }

}
else {
    echo 'nera tokios prekes';
    return $pinigai;
}
}

//ateina petras pirkti colos

$maiselis = automatas (1, 'cola');
?>

