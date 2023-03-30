<?php
// Array Numeric
// $mahasiswa = [
//     [
//         "Ji'ta Bilhaq",
//         223040055,
//         "jitabilhaq12@gmail.com",
//         "Teknik Informatika"
//     ],
//     [
//         "Angga Nugraha Sofyan",
//         223040052,
//         "angga.223040052@mail.unpas.ac.id",
//         "Teknik Informatika"
//     ],  
// ];

// Array Associative
// Definisinya sama seperti array numerik, kecuali
// Key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama"      => "Ji'ta Bilhaq",
        "nrp"       => 223040055,
        "email"     => "jitabilhaq12@gmail.com  ",
        "jurusan"   => "Teknik Informatika",
        "gambar"    => "img/ji'ta.jpg"
    ],
    [
        "nama"      => "Angga Nugraha Sofyan",
        "nrp"       => 223040052,
        "email"     => "angga.223040052@mail.unpas.ac.id",
        "jurusan"   => "Teknik Informatika",
        "gambar"    => "img/angga (1).jpeg"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li><img src="<?= $mhs['gambar']; ?>" alt="Gambar <?= $mhs['nama']; ?>"></li>
            <li><?= $mhs['nama']; ?></li>
            <li><?= $mhs['nrp']; ?></li>
            <li><?= $mhs['email']; ?></li>
            <li><?= $mhs['jurusan']; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>