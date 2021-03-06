<?php
error_reporting(E_ALL);

for($k=0; $k>10; $k++){
    var_dump($k);
}

$k = 0;
for (; $k < 2;){
    var_dump($k);
    $k++;
}

$groups = [
    [
        'id' => 1,
        'title'=> 'array',
        'description' =>
            [
                'сделать д/з "массивы"',
                'сделать дз "циклы"',
                'ченить сделать'
            ],
        [
            'He сделать д/з "массивы"',
            'He сделать дз "циклы"',
            'He ченить сделать'
        ],
        'owner' => 'Vlad',
        'deadline' => '05.05.2025',
        'status' => 'done'
    ],
    [
        'id' => 2,
        'title'=> 'for',
        'description' =>
            [
                'сделать д/з "массивы1"',
                'сделать дз "циклы1"',
                'ченить сделать1'
            ],
        [
            'He сделать д/з "массивы1"',
            'He сделать дз "циклы1"',
            'He ченить сделать1'
        ],
        'owner' => 'Vlados',
        'deadline' => '06.06.2026',
        'status' => 'processed'
    ],
    [
        'id' => 3,
        'title'=> 'switch',
        'description' => 'посмотреть урок 7 "что-то"',
        'owner' => 'Vladislav',
        'deadline' => '07.07.2027',
        'status' => 'not done'
    ]
];

foreach($groups as $group) {
    echo "title is {$group['title']} his id is {$group['id']}", PHP_EOL;
    foreach ($group['description'] as $description){
        echo "description is {$description}", PHP_EOL;
    }
}
$a = [
    'type' => 
];
foreach ($a as $key => &$value) { // &value - ссылаемся на значение в массиве, что бы взять от туда данные (потому что эти переменные никак не связаны с данными в массиве)
//    $value .= ' [Edited]';
//    //echo "{$key} : {$value}" , PHP_EOL;
//}
//unset($value); // удаляем ссылку выше &value , потому что поломается код
////var_dump($a);
//
//for ($i = 0; $i < 10 ; $i++){
//    if ($i % 2 ===0) {
//        continue;      /* пропустить и продолжить */
//    }
//        if ($i === 7 || $i === 8){
//            break;
//        }
//var_dump($i);
//}

//for ($column=0; $column<=10; $column++){
//    for ($row=0; $row<=10; $row++){
//        $result = $column * $row;
//        echo "{$column} * {$row} = {$result}", PHP_EOL;
//        if ($column === 5 && $row === 3){
//           // break; // останеавливает только тот цыкл в котором ты сейчас \\break(2); остановится всё после 5
//            // continue; continue(2)
//        }
//    }
//    echo PHP_EOL;
//}