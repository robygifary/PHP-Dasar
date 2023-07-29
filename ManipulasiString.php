<?php

$name = "Robby Tamara Gifary";

echo "Nama : " . $name . PHP_EOL;
echo "Value : " . 100 . PHP_EOL;

$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"100.01";
var_dump($valueFloat);

$name = "Robby";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;
echo $name[4] . PHP_EOL;

echo "Hallo $name Selamat belajar PHP" . PHP_EOL;
echo "Hallo" . $name . "Selamat belajar PHP" . PHP_EOL;

$var = "Robbby";
echo "This is {$var}e" . PHP_EOL;