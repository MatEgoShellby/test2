<?php
error_reporting(E_ALL);

/*$x = is_int(1);

if ($x == 1) {
    echo 1;
}
if ($x == 2) {
    echo 2;
}
if ($x == 3) {
    echo 3;
}*/

/*$number = (int)$_GET['p1'];
switch ($number) {
    case 0:
    case $number < 0:
        echo 'Number is zero';
        break;
    case 1:
        echo 'Number is one';
        break;
    case 2:
        echo 'Number is two';
        break;
    case $number % 2 === 0:
        echo "Number {$number} is even";
        break;
    default:
        echo "Number {$number} is odd";
}

echo '<br>';
echo '<br>';
*/

/*$result = $number == 0
    ? "Number is zero" : ($number == 1
    ? "Number  is one" : ($number == 2
    ? "Number is two" : ($number % 2 == 0
    ? "Number {$number} is even" : "Number {$number} is odd")));

echo $result;
*/


$task_manager = [
    [
        'id' => '1',
        'title'=> 'array',
        'description' => 'сделать д/з "массивы"',
        'owner' => 'Vlad',
        'deadline' => '05.05.2025',
        'status' => 'done'
    ],
    [
        'id' => '2',
        'title'=> 'for',
        'description' => 'посмотреть урок 6 "циклы"',
        'owner' => 'Vlados',
        'deadline' => '06.06.2026',
        'status' => 'processed'
    ],
    [
        'id' => '3',
        'title'=> 'switch',
        'description' => 'посмотреть урок 7 "что-то"',
        'owner' => 'Vladislav',
        'deadline' => '07.07.2027',
        'status' => 'not done'
    ]
];

//var_dump($task_manager);

foreach($task_manager as $task) {
    print_r($task);
}