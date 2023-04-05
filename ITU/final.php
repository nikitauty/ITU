<?php
$c = 0;
$sum = 0;
$itu =[
    'names' => [

    ],
    'count' => 0,
    'items' => [

    ],
    'sum' => 0
];

foreach ($_GET as $key => $value){
    $itu['items'][$key] = $value;
    $itu['names'][] = $key;
    $c += 1;
    $sum += $value;
}
$itu['count'] = $c;
$itu['sum'] = $sum;
var_dump($itu);