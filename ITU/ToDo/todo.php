<?php
$arr = ['Помыть посуду',
        'Протереть пыль',
        'Погулять с собакой',
    ];
function printToDo($arr) {
    foreach ($arr as $key => $value) {
        echo "Дело " . $key + 1 . ": " . $value . "<br/>";
    }
}
printToDo($arr);
