<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- HTML komentaras-->
    <title>Labas Rytas</title>
    <script>// java komentaras, toks kaip PHP</script>


</head>
<body>


<?php
/*HP komanda - isvesti diagnostine komanda, isveda teksta i ekrana, pagamins php komanda*/
// komentaras veikia tik
echo 'labas';

//kintamieji

$a = 5; // skaicius
$af = 5.6; //float - po kablelio yra kazkiek daliu, ir gali tureti eile
$af = 3.1e-3; //float 3,1 padauginam is desimt -3
$b = true; //boolean - loginis
$c = "abc"; // string
$d = ['bmw', 'honda']; // masyvas
$e = new stdClass(); //objektas
$f = NULL; //nieko - kintamaji istrini - pasidaro nieko, patikrinti


//kintamieji (kas tai) gali buti triju rusiu
// local - lokalus, $a = 5; || jis galioja pagal konteksta - puodelis, isejai ,gryzai - nebera puodelio
// static - isejai, iejai - bet galima naudotis tik toje funkcijoje
// global - visur, galima prieti is visur visoms eilutemis

function pvz_static(){
    static $a = 0; //sukurimas su pradine reiksme
    $a++; // +1
    echo $a .'<br>'; //parodymas
}


pvz_static(); //sukuriamas $a, +1 (nes yra a++) , po to parodoma
pvz_static(); // +1, parodoma
pvz_static(); // +1, parodoma

//----- local

$g = "labas";


function pvz_local () {
    //$g = "rytas";
    echo $g . "<br>";
}
pvz_local(); // bus klaida nes nera funkcijos viduje

global $h;
$h = "labas";
function pvz_global () {
    global $h;
    echo $h . "<br>";
}

//kreipiesi i funckija is parasytos 
pvz_global ();
echo $GLOBALS['h'] . "<br>";
// naudoti kaip masyvas pasitikrinimui
//objektinis projektavimas

echo $_SERVER['PHP_SELF'] . '<br>';
echo $_SERVER['HTTP_HOST'] . '<br>';


//' --" kai dvigubos kabutes galvoja kad kintamasis (tikrina) , o kai viengubos kabutes - (netikrina, nes galvoja, kad tik tekstas)

eval ('$s = "aaa";');
echo $s . '<br>';
unset ($s); //panaika
echo $s . '<br>';

//konstates - viena karta priskyrei ir visam laikui yra
//objektinis programavimas

define('konst' , 'labukas'); //pavadinimas skliausteliose (konst), po kablelio , 'labukas' - isvedamoji reiksme
echo konst . "<br>";

//konstantei nereikia dolerio zenklo (zodis po echo. yra define musu uzrasytas pavadinimas

// const konst = ' labas'; // sintakse klaseje - objektiniame programavime


?>

<!-- visi kintamieji, o kas yra ne kintamieji.

$_GET     = &$HTTP_GET_VARS;
$_POST    = &$HTTP_POST_VARS;
$_ENV     = &$HTTP_ENV_VARS;
$_SERVER  = &$HTTP_SERVER_VARS;
$_COOKIE  = &$HTTP_COOKIE_VARS;
$_REQUEST = array_merge($_GET, $_POST, $_COOKIE);-->


</body>
</html>


