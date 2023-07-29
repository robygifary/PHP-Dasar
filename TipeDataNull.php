<?php

$nama = "Roby";

$umur = null;

echo "Nama : ";
echo $nama . PHP_EOL;

echo "Umur : ";
echo $umur . PHP_EOL;

echo "apakah nama null ? : ";
var_dump(is_null($nama));

$contoh = "gifary";
echo $contoh . PHP_EOL;
unset($contoh);


$contoh = "Tamara";
var_dump(isset($contoh));