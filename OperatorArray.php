<?php

$first = [
    "first_name" => "Robby"
];

$last = [
    "last_name" => "Gifary"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Robby",
    "last_name" => "Gifary"
];

$b = [
    "last_name" => "Gifary",
    "first_name" => "Robby"
];

var_dump($a == $b);
var_dump($a === $b);