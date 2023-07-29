<?php

// merubah data array sebelumnya menjadi data array baru array_map()
$data = [1,2,3,4,5,6,7,8,9,10];

$dataResult = array_map(fn(int $value) => $value * 10, $data);
var_dump($dataResult);

// merubah data berdasarkan desending
rsort($data);
var_dump($data);

// mengambil data key nya
var_dump(array_keys($data));

// mengambil data values nya
var_dump(array_values($data));


$person = [
    "first_name" => "Robby",
    "last_name" => "Gifary"
];

var_dump(array_keys($person));
var_dump(array_values($person));