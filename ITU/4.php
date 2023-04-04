<?php
$a = $_GET['a'];
$b = $_GET['b'];
$oper = $_GET['oper'];
switch ($oper){
    case "plus":{
        echo $a + $b;
        break;
    }
    case "minus":{
        echo $a - $b;
        break;
    }
    case "multiply":{
        echo $a * $b;
        break;
    }
    default:{
        echo "Введите корректную оерацию";
        break;
    }
}