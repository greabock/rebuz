<?php

spl_autoload_register(function ($class) {
    include __DIR__ . '/src/' . $class . '.php';
});

$point1 = new Point3d(
    (float)readline('Введите x1: '),
    (float)readline('Введите y1: '),
    (float)readline('Введите z1: '),
);
$point2 = new Point3d(
    (float)readline('Введите x2: '),
    (float)readline('Введите y2: '),
    (float)readline('Введите z2: '),
);

echo sprintf(
    'Расстояние между точками {%s, %s, %s} и {%s, %s, %s} => %s',
    $point1->x, $point1->y, $point1->z,
    $point2->x, $point2->y, $point2->z,
    $point1->range($point2),
);

