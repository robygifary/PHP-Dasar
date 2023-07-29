<?php

function sum(int $first, int $second): int
{
    return $first + $second;
}

$total = sum(10, 10);
var_dump($total);

function getfinalValue(int $value): string
{
    if($value >= 90) {
        return "A";
    } else if($value >= 80) {
        return "B";
    } else if($value >= 70) {
        return "C";
    } else if($value >= 60) {
        return "D";
    } else {
        return "E";
    }
}

$score = getfinalValue(80);
var_dump($score);

$score = getfinalValue(40);
var_dump($score);