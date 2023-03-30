<?php
$mahasiswa = [
    // 1
    [
        "nama" => "JI'TA BILHAQ",
        "nrp" => "223040055",
        "email" => "ji'ta.223040055@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar"    => "ji'ta.jpg"
    ],
    // 2
    [
        "nama" => "ANGGA NUGRAHA SOFYAN",
        "nrp" => "223040052",
        "email" => "angga.223040052@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar"    => "angga (1).jpeg"
    ],
    // 3
    [
        "nama" => "LISVINDANU",
        "nrp" => "223040038",
        "email" => "lisvindanu.223040038@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar"    => "danu (1).jpeg"
    ],
    // 4
    [
        "nama" => "FAKIH HELMI MAULANA",
        "nrp" => "2230400556",
        "email" => "fakih.223040056@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar"    => "pakih.jpeg"
    ],
    // 5
    [
        "nama" => "FEBI ALIA RAHMAN",
        "nrp" => "223040059",
        "email" => "febi.223040059@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar"    => "pebi (1).jpeg"
    ],
    // 6
    [
        "nama" => "HEDI SUKUR",
        "nrp" => "223040071",
        "email" => "hedi.223040071@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar"    => "wak hedi (1).jpeg"
    ],
    // 7
    [
        "nama" => "RANGGA DHANI HERMAWAN",
        "nrp" => "223040063",
        "email" => "rangga.223040063@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar"    => "rangga.jpeg"
    ],
    // 8
    [
        "nama" => "ALDI PRADANA HAKIM",
        "nrp" => "223040035",
        "email" => "aldi.223040035@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar"    => "aldi (1).jpeg"
    ],
    // 9
    [
        "nama" => "AURELIA MELATI SUCI",
        "nrp" => "223040045",
        "email" => "aurelia.223040045@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar"    => "aurel .jpeg"
    ],
    // 10
    [
        "nama" => "FADHILLA NUR ISLAMI",
        "nrp" => "223040082",
        "email" => "fadhilla.223040082@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar"    => "padila.jpeg"
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
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>Nrp : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <img src="img/<?= $mhs["gambar"]; ?>" alt="">
        </ul>

    <?php endforeach; ?>
</body>

</html>