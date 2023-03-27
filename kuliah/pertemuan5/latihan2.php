<?php
$binatang = ['🐈', '🐇', '🙉', '🐼', '🐨', '🐮', '🐍'];
$warna = ['oren', 'putih', 'coklat', 'hitam', 'abu', 'hitam putih', 'hejo tentara'];


// mengurutkan array
// sort(), rsort()
// sort($warna);
// rsort($binatang);
// Mencetak array untuk user
// for, foreach
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kebon Binatang</title>
</head>

<body>
    <h1>Daftar Hewan</h1>
    <ul>
        <?php for ($i = 0; $i < count($binatang); $i++) { ?>
            <li><?= $binatang[$i]; ?><?= $warna[$i]; ?></li>
        <?php } ?>
    </ul>
    <ul>
        <?php for ($i = 0; $i < count($warna); $i++) { ?>
            <li><?= $warna[$i]; ?></li>
        <?php } ?>
    </ul>

    <hr>
    <h2>Daftar Hewan</h2>
    <ol>
        <?php foreach ($binatang as $b) { ?>
            <li><?= $b; ?></li>
        <?php } ?>
    </ol>
    <ol>
        <?php foreach ($warna as $w) { ?>
            <li><?= $w; ?></li>
        <?php } ?>
    </ol>
</body>

</html>