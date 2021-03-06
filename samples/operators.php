<?php

//Оператор условия if
echo 'Operator if  <br>';
$operator_number = (int)$_GET[p1];

if ($operator_number === 0){
    echo "Number {$operator_number} = 0";
} elseif ($operator_number % 2 !== 0){
    echo "Number {$operator_number} is odd";
} elseif ($operator_number % 2 === 0){
    echo "Number {$operator_number} is even";
} else {
    echo 'error';
}
echo '<br>';
echo '<br>';

//Оператор условия switch
echo 'Operator switch  <br>';


switch ($operator_number){
    case 0:
        echo "Number {$operator_number} = 0";
        break;
    case $operator_number < 0:
        echo "Number {$operator_number} < 0";
        break;
    case $operator_number % 2 === 0:
        echo "Number {$operator_number} is even";
        break;
    case $operator_number % 2 !== 0:
        echo "Number {$operator_number} is odd";
        break;
    default:
        echo 'error';
}
echo '<br>';
echo '<br>';

//Многоуровневый тернарный оператор
echo 'Ternary operator <br>';

$result = $operator_number == 0
    ? "Number {$operator_number} = 0" : ($operator_number == 1
    ? "Number  is one" : ($operator_number == 2
    ? "Number is two" : ($operator_number % 2 == 0
    ? "Number {$operator_number} is even" : "Number {$operator_number} is odd")));
echo $result;

