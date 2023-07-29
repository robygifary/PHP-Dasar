<?php

function createName() {
    $name = "Robby"; // local scope
}

createName();
echo $name . PHP_EOL; // error