<?php

for ($i = 10; $i > 0; $i = $i - 1) {
    echo $i . PHP_EOL;
}

$x = 50;
while ($x > 0) {
    echo $x . PHP_EOL;
    $x = $x - 1;
}

$array = ['a' => 'foo', 'b' => 'bar', 'c' => 'baz', 'd' => 'quiz'];

foreach ($array as $key => $value) {
    echo $key . ' = ' . $value . PHP_EOL;
}
