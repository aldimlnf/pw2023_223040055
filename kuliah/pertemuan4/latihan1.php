<?php
// cek apahak bilangan itu ganjil ato genap

$x = 10;

function cek_ganjil_genap($angka) //parameter adalah nilai saat function dibuat atau nilai asli (penampung)
{

    // jika $angka dibagi 2, sisa 1 maka GANJIL

    if ($angka % 2 === 1) {
        return "$angka adalah bilangan GANJIL!";
    } else { // selain dari itu maka
        return "$angka adalah bilangan GENAP!";
    }
}

echo cek_ganjil_genap(195); // argument adalah nilai saat function nya di panggil
echo "<br>";
echo cek_ganjil_genap(5);
echo "<br>";
echo cek_ganjil_genap(2);
echo "<br>";
echo cek_ganjil_genap(69);
