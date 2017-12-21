<?php

//0,1,2
$m = ['bmw', 'audi', 'honda']; //grynai tekstas

//asociatyvinis masyvas identifikuojamas raktais
$ma = ['bmw' => 'raudona','audi'=>'balta', 'honda'=>'juoda']; //kai susije//susije is duomenu baziu susije
//raktas bmw reiksme raudona, raktas audi reksime balta, raktas honda reiksme juida

echo $m[0] . '<br>';
//echo $ma[0] . '<br>';-reikia rasyti rakta
echo $ma['bmw'] . '<br>';



$mx = ['bmw' => ['raudona', 'melyna','zalia'],'audi'=>'balta', 'honda'=>'juoda'];

echo $mx['bmw'][1] . ' '. $mx['bmw'][2].'<br>';
echo implode('***',$mx['bmw']).'<br>';

$ma['lada']='geltona';

echo json_encode($ma).'<br>';

unset($ma['bmw']);
echo json_encode($ma).'<br>';

$my = ['bmw' => 'raudona','audi'=>'balta', 'honda'=>'juoda'];

sort($my); //
echo json_encode($my).'<br>';

$mu = ['bmw' => 'raudona','audi'=>'balta', 'honda'=>'juoda'];
ksort($mu);//
echo json_encode($mu).'<br>';

$me = ['bmw' => 'raudona','audi'=>'balta', 'honda'=>'juoda'];
krsort($me);//
echo json_encode($me).'<br>';

//sujungti du mastyvus
$a = ['a','x','z'];
$b = ['c','m'];
$c = array_merge($a,$b);

//print_r dar vienas budas isvesti vidiniame formate, kaip vardump, kurios naudojamos debuginimui, ne programavimui
//diagnostines - tik derinimui
print_r($c);
sort ($c);
print_r($c);
echo'<br>'.json_encode($c);


$aa = ['bmw' => 'raudona','audi'=>'balta', 'honda'=>'juoda'];
$bb = ['toyota' =>'zalia','lada'=>'melyna'];
$cc = array_merge($aa,$bb);
echo '<br>'.json_encode($cc);
ksort($cc);//surusiavo pagal rakta
echo '<br>'.json_encode($cc);

function test ($ma, $key){
    if (isset($ma[$key])) echo  '<br>yra'; else echo '<br>nera';
}

test($cc,'honda');
test($cc, 'kia');

echo '<br>' . $cc ['honda'] . '<br>';

//----//Paprastas Sablonavimas $s = sprintf (suformuoja argumentus kiek prideta procentai s)

$s = "Labas %s %s. Sveiki atvyke";
echo sprintf($s,'jonas','jonaitis');
