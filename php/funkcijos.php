<?php
//function functionName(cia kintamieji ateje is isories) {
    //code to be executed; nesvarbu ar didziosios ar mazosios}
//funkcijos

function writeMsg()
{
    echo "Hello world!";
}

writeMsg();

//iskviesti reikia su writeMSG/pavadinimu aprasytu funcijoje, funckcija - pasiskelbimas su function, interpretatorius ja nusiskaito, ir ja ivykdo, kai iskvieciame

function familyName($fname ='nesamone', $lname= 'nezinomas') {
    echo "$fname $lname.<br>";
}

familyName('Rokas', 'Sarauskas');
familyName();
familyName( 'Antanas', 'Antanaitis');

$fn = 'familyname';
call_user_func('familyname', 'Petras', 'Petraitis');


function familynameRet ($fname = 'nesamone', $lname = 'nezinomas') {
    return"$fname $lname.<br>";
}
echo familyNameret("Jonas",'jonaitis' );

$x = familynameRet('Jonas', 'jonaitis');
echo $x;

//funkcija galim irasyti i kintamaji

$fnc = 'familynameret';
echo $fnc("Jonas", "jonaitis" );

$fm = function($fname = 'nesamone', $lname = 'nezinomas'){
    return "$fname $lname.'<br>";
};

echo $fm('jonas', 'jonatis');

$fm = function ($a = '', $b = ''){
    return 'belekas';
};

echo $fm ("jonas", 'jonaitis');




