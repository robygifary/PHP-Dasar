<?php

function sayHello(string $name, callable $filter) {
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Robby", "strtoupper");
sayHello("ROBBY", function(string $name): string {
    return strtolower($name);
});

sayHello("Robby", fn($name) => strtoupper($name));