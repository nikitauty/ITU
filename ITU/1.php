<?php
$str = "321,534,65f,1dv,243eee";
$res = [];
$c = 0;
for ($i = 0; $i < strlen($str); $i++){
    if ($str[$i] != ','){
        $res[$c] .= $str[$i];
    } else {
        $c++;
        $res[$c] = ',';
        $c++;
    }
}
var_dump($res);