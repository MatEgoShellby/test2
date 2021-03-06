<?php
error_reporting(E_ALL);
//Типы данных
$int = 2;
$float = 7.3;
$bool = true;
$array = [1, 2, 3];
$object = new stdClass();
$null = null;
$resource = fopen(DIR . '/type.php', 'rb');
fclose($resource);
$callable = static function () { // передаёт функцию что бы где-то выполнить её
    return 1;
};

var_dump((float)$int); //преобразование типа данных
var_dump(isset($int)); // Определяет существует ли переменная $int

//Кратность
$k=2;
($k % 2 === 0);// Кратно 2 ( чётные числа )
($k % 2 !== 0);// Не кратно 2 ( нечётные числа )

//Глобальная переменная $_GET целого типа данных (int)
$number = (int)$_GET['p1']; //p1 ключ, который записывается в адресную строку после .php?p1=qwerty

rand(); echo rand(); //функция которая выдает случайное число



//Арифметические и логические операторы
$k <=> $int; // Если 1 больше чем 2, возвращает 1
             // Если 1 меньше чем 2, возвращает -1
             // Если 1 равно 2, возвращает 0

$pow = $int**$float; echo $pow; // возведение в степень
++$k; --$k; //пре инкремент и декремент
$k++; $k--; //пост инкремент и декремент

$k and $int; $k && $int; // оператор и
$k or $int; $k || $int; // оператор или

$int . 'больше чем, ' . $k; //конкатенация - Соеденитель типов данных при записи в одну строку
$a = "Hello, "; $a .= "Wold!"; // оператор присваивания с конкатенацией, присоеденяет правый аргумент к левому

$k==$int; //true если $a равно $b после преобразования типов.
$k===$int; // Тождественно равно true если $a равно $b и имеет тот же тип.

// ??
$action = $_POST['action'] ?? 'default';
// аналогичный код
if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else {
    $action = 'default';
}

// замена запятой на точку при выводе на экран.
var_dump((float)str_replace(',' , '.' , '1,2'));