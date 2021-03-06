<?php

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
            'сделать д/з "массивы"',
            'сделать дз "циклы"',
            'ченить сделать'
        ],
        [
            'He сделать д/з "массивы"',
            'He сделать дз "циклы"',
            'He ченить сделать'
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