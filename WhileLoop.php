<?php

$counter = 1;
 while ($counter <= 10) {
    echo "Hello ini adalah while loop ke-$counter" . PHP_EOL;
    $counter++;
 }

 $counter = 1;
 while ($counter <= 10) :
    echo "Hello ini adalah while loop ke-$counter" . PHP_EOL;
    $counter++;
 endwhile;