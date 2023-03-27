<?php

//ARRAY
//array adalah variabel yang bisa menampung banyak nilai

//membuat array
$hari = array('senin', 'selasa', 'rabu', 'kamis', "jum'at", 'sabtu', 'minggu');
$bulan = ['januari', 'februari', 'maret', 'april', 'mei', 'agustus', 'september', 'oktober', 'november'];
$myArray = ['Sy ngapain', 69, false];
$binatang = ['🐈', '🐇', '🙉', '🐼', '🐨', '🐮'];

var_dump($hari);
print_r($bulan);
var_dump($myArray);
echo $binatang[5];

echo "<hr>";

// manipulasi Array
// menambah elemen di akhir array
$bulan[] = 'desember';
print_r($bulan);
echo "<hr>";
array_push($bulan, 'Juni', 'Juli');
print_r($bulan);
echo "<hr>";

// menambah elemen di awal array
array_unshift($binatang, '🐘', '🐍', '🐩');
print_r($binatang);
echo "<hr>";

// menghapus elemen di akhir array
array_pop($myArray);
print_r($myArray);
echo "<hr>";

// Menghapus elemen di awal Array
array_shift($hari);
print_r($hari);
