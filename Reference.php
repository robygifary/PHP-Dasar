<?php

// Reference di variable
$name = "Robby";

$otherName = &$name;

$otherName = "Gifary";

echo $name . PHP_EOL;


// Reference di parameter
function increment(int &$value) {
    
    $value++;

}

$counter = 1;
increment($counter);

echo $counter . PHP_EOL;


// Reference retrun value
function &getValue() {
    static $value = 100;
    return $value;
}
$a = &getValue();
$a = 200;

$b = getValue();
echo $b . PHP_EOL;