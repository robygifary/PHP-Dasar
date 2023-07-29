<?php

function foo()
{
    echo "FOO" . PHP_EOL;
}

function bar()
{
    echo "BAR" . PHP_EOL;
}

$functionFoo = "foo";
$functionFoo();

$functionBar = "bar";
$functionBar();

function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunc(string $name): string {
    return "Sample $name" . PHP_EOL;
}

sayHello("Robby", "strtoupper");
sayHello("Robby", "strtolower");
sayHello("robby", "sampleFunc");