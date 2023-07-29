<?php

$sayHello = function($name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Robby");
$sayHello("gifary");

function sayGoodBye(string $name, $filter) {
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodBye("Robby", function($name): string {
    return strtoupper($name);
});

$filterFunction = function($name): string {
    return strtoupper($name);
};

sayGoodBye("syakir", $filterFunction);

$firstName = "Robby";
$lastName = "Tamara";

$sayHelloRobby = function() use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloRobby();

$firstName = "Raffa";
$lastName = "Shaquell";

$sayHelloRobby();
