<?php
$a = $_GET['a'];
$b = $_GET['b'];
$arr = [
    'plus' => $a+$b,
    'minus' => $a-$b,
    'multiply' => $a*$b,
];
var_dump($arr);