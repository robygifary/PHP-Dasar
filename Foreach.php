<?php
$names = ['Robby', "Tamara", "Gifary"];

for($i = 0; $i < count($names); $i++) {
    echo "Data ke - $i = $names[$i]" . PHP_EOL;
}

$mahasiswa = ["Syakir", "Rasya", "Raffa"];

foreach($mahasiswa as $index => $siswa) {
    echo "Data ke $index = $siswa" . PHP_EOL;
}

$person = [
    "first_name" => "Robby",
    "middle_name" => "Tamara",
    "last_name" => "Gifary"
];

foreach($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}