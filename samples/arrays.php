<?php

$a1 = ['test','qwerty', 123];
$a2 = [2 => 'test', 3 => 'qwerty', 4 => 123];
$a3 = [
    'car' => 'Subaru', //car это ключ массива, заданный вручную, этот массив является асоциативным.
    'helicopter' => 'JBC',
    'Monitor' => 'ACER',
    'Mobile' // Если не задавать ключ, то массив присвоит минимально доступный ключ в данном случае 0
];
$groups = [
    [
        'id' => 1,
        'title'=> 'array',
        'description' => 'сделать д/з "массивы"',
        'owner' => 'Vlad',
        'deadline' => '05.05.2025',
        'status' => 'done'
    ],
    [
        'id' => 2,
        'title'=> 'for',
        'description' => 'посмотреть урок 6 "циклы"',
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

// доступ к значениям массива задается с помощью ключей массива.
var_dump('status ' . $groups[1]['status'] . '<br>' . ' will be make before '  ,  $groups[1]['deadline']);
echo '<br>';

// перезапись значений массива
$groups[1]['status'] = [
    'status' => 'done',
    'made before' => '06.06.2026'
    ];
var_dump('status ' . $groups[1]['status']);
echo '<br>';

//добавление значений в массив
$groups[1][0] = [       // добавлено новое значение под индексом 0, в массив под индексом 1
    'sub_task' => 'pick'
];
var_dump($groups[1]);
echo '<br>';
//второй способ добавления значений в конец массива
array_push($groups[2], [
   'sub' => 'stat'
]);
var_dump($groups[2]);
echo '<br>';

//Сортировка массива    https://www.php.net/manual/ru/array.sorting.php
sort($a3);
var_dump($a3);
echo '<br>';

// Сортировка массива по id (функция usort(), где определено пользователем условия сортировки)
usort($groups, static function(array $a, array $b) : int { // означает, что возвращается тип данных int
    return $a['id'] <=> $b['id']; // Массив отсортирован по возврастанию
});
var_dump($groups);
echo '<br>';

// функция считает элементы массива
(count($groups));

//функция вырезает 0 элемент массива и записывает в переменную new_groups,
// можно не записывать в переменную и просто срезать 0 элемент
$new_groups = array_shift($groups);

//функция удаляет элемент массива по индексу или ключу массива вместе с индесом,
// поэтому индексы не перестраиваются после удаления
unset($a1[0]);

// проверяет существует ли ключ 2 в массиве
array_key_exists(2,$a3);

//проверяет существует ли значение qwerty в массиве
in_array('qwerty', $a3);

// удаляет дублирующиеся значения и оставляет только уникальные
array_unique($a3);

// меняет значения и ключи местами. на примере - двойной флип
// удаляет дублирующиеся значения и оставляет только уникальные
array_flip(array_flip($a3));
