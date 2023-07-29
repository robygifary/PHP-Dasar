<?php

$values = array(1,"Robby",5);
var_dump($values);
var_dump($values[1]);

$name = ["appel", "Banana", "Pear"];
var_dump($name[1]);

$name[2] = "Manggo";
var_dump($name);
unset($name[0]);
var_dump($name);

$name[] = "Coconut";
var_dump($name);

$oby = array(
    "id" => 90,
    "name" => "Robby",
    "age" => 30
);
var_dump($oby);
var_dump($oby["name"]);

$siswa = [
    "id" => "01",
    "name" => "Syakir",
    "jurusan" => "Manajemen",
    "alamat" => [
        "kota" => "Bogor",
        "negara" => "Indonesia"
    ]
];

var_dump($siswa);
var_dump($siswa["alamat"]["kota"]);