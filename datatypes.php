<?php

declare(strict_types=1);
error_reporting(E_ALL | E_STRICT);


# Передаются по значению

// Скаляры
$boolean = true; // false
$string = 'строка';
$integer = 1231231;
$float = 0.5;

// Массивы
$sequence_array = [1, 2, 1, 1235, 1231, 2321];

$hash_array = [
    'a' => 'foo',
    'b' => [
        'bar' => []
    ]
];


$objectFromStdClass = new stdClass();
$objectFromStdClass->field = 'value';

$objectFromStdClass2 = $objectFromStdClass; // Объект передается по ссылке

$objectFromStdClass->field = 'new value';

echo $objectFromStdClass2->field . PHP_EOL;

echo '=============================' . PHP_EOL;


$objectFromArray = (object)[
    'a' => 'foo',
    'b' => [
        'bar' => []
    ]
];


$array1 = ['a' => 1];
$array2 = $array1;  // Массив передается по значению (копируется)
$array1['a'] = 2;

echo $array1['a'] . PHP_EOL;
echo $array2['a'] . PHP_EOL;


// Классы

class MyClass
{

    private $field;

    public function setField($value)
    {
        $this->field = $value;
    }

    public function getField()
    {
        return $this->field;
    }
}

$object = new MyClass();
$object->setField('set private field');

echo $object->getField() . PHP_EOL;


function sum(int $a, int $b = 12)
{
    $k = 55;

    $z = $a * $b;

    $result = $z + $b + $a;

    return $result - $k;
}


echo sum(30, 55) . PHP_EOL;


function no_space(string $s): string
{
    $s = str_split($s);

    $result = [];

    foreach ($s as $v) {
        if ($v !== ' ') {
            $result[] = $v;
        }
    }

    return implode($result);
}

echo no_space('Привет привет привет') . PHP_EOL;



