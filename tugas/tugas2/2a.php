<?php
$nama_depan = " Ji'ta ";
$nama_belakang = " Bilhaq ";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 15 == 0) {
        echo "$nama_depan $nama_belakang <br>";
    } elseif ($i % 5 == 0) {
        echo "$nama_belakang <br>";
    } elseif ($i % 3 == 0) {
        echo "$nama_depan <br>";
    } else {
        echo "$i <br>";
    }
}
