<?php
$mass = [
    'arr' => [1, 2, 3, 4, 5],
    'nums' => [
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five'
        ]
];
$num = $mass['arr'][$_GET['num'] - 1];
echo "{$num} это {$mass['nums'][$num]}";
