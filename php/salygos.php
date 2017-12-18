<?php
$t = date("H");
echo $t.'<br>';

if ($t > 8) {
    echo "Have a good day!";
} else {
    echo 'Good evening<br>';
    echo '<br>';
}

$a=6;

if ($a == 5) echo 'lygu' . '<br>s';
elseif ($a > 5) echo 'daugiau<br>';
else{
    echo 'maziau';
    echo '<br>';
}

//








$a=15;

if ($a < 15) echo 'labas vakaras';
elseif ($a>15)echo 'labas rytas';
else {
    echo 'kaip tau sekasi';
    echo '<br>';
}


?>