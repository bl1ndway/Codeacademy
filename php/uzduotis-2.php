<?php
//uzduotis su trimis kintamaisiais


function vienas ($x,$y,$z){
    return $x**2+ sqrt($y)+$x*$y+$z;
}
echo vienas (10,11,12);