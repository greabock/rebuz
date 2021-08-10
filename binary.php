<?php

const CAMERA = 1;
const BLUETOOTH = 2;
const NFC = 4;
const FINGERPRINT = 8;


var_dump(NFC | CAMERA);

$phoneOptions = 8;


var_dump((NFC | CAMERA) ^ (NFC | CAMERA));


// ^ binary and
// | binary or сложение
// & binary and умножение

if ($phoneOptions & (NFC | CAMERA)) {
    echo 'NFC AND CAMERA ENABLE' . PHP_EOL;
}


echo str_pad(decbin(9), 4, '0', STR_PAD_LEFT) . PHP_EOL;
echo str_pad(decbin(11), 4, '0', STR_PAD_LEFT) . PHP_EOL;
echo str_pad(decbin(10), 4, '0', STR_PAD_LEFT) . PHP_EOL;
echo str_pad(decbin(3), 4, '0', STR_PAD_LEFT) . PHP_EOL;
echo str_pad(decbin(1), 4, '0', STR_PAD_LEFT) . PHP_EOL;
echo str_pad(decbin(2), 4, '0', STR_PAD_LEFT) . PHP_EOL;
echo str_pad(decbin(8), 4, '0', STR_PAD_LEFT) . PHP_EOL;
echo str_pad(decbin(4), 4, '0', STR_PAD_LEFT) . PHP_EOL;
echo str_pad(decbin(12), 4, '0', STR_PAD_LEFT) . PHP_EOL;


var_dump(9 & NFC);
