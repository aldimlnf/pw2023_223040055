<?php
// 1. inisialisasi / nilai awal
// 2. kondisi terminasi / kapan pengulangan berhenti
// 3. increment / decrement
$nomer = 1; // inisialisasi
$angkot = 10;

while ($nomer <= 6) { // kondisi terminasi
    echo "Angkot no.$nomer beroperasi dengan baik. <br>";
    $nomer++; // increment
}
for ($nomer = 7; $nomer <= 10; $nomer++) {
    echo "Angkot no.$nomer sedang rusak.<br>";
}
