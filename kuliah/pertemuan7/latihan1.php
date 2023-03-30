<?php
// SUPERGLOBALS
// variabel global milik php
// merupakan Array Associative
// $_GET
$mahasiswa = [
    [
        "nama"      => "Ji'ta Bilhaq",
        "nrp"       => "223040055",
        "email"     => "jitabilhaq12@gmail.com  ",
        "jurusan"   => "Teknik Informatika",
        "gambar"    => "ji'ta.jpg"
    ],
    [
        "nama"      => "Angga Nugraha Sofyan",
        "nrp"       => "223040052",
        "email"     => "angga.223040052@mail.unpas.ac.id",
        "jurusan"   => "Teknik Informatika",
        "gambar"    => "angga(1).jpeg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>

    <h1>Daftar Mahasiswa</h1>

    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>
                &nrp=<?= $mhs["nrp"]; ?>
                &email=<?= $mhs["email"]; ?>
                &jurusan=<?= $mhs["jurusan"]; ?>
                &gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>