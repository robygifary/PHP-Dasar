<?php

// menggabungkan array
var_dump(join(",", [12, 13, 14, 15, 16, 17]));

// memecah array
var_dump(explode(" ", "Roby tamara gifary"));

// merubah string ke huruf kecil
var_dump(strtolower("ROBBY TAMARA GIFARY"));

// merubah string ke huruf besar
var_dump(strtoupper("robby tamara gifary"));

// menghapus whitespace
var_dump(trim("     Robby       "));

// memotong / mengambil bagian string
var_dump(substr("Robby Tamara Gifary", 0, 5));