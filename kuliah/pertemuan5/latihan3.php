<?php
// Array didalam array atau multidimensi
$binatang = [['🐈‍⬛', 'Hideung'], ['🐇', 'bodas'], ['🐒', 'coklat']];

echo $binatang[0][1];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kebon binatang 2.0</title>
</head>

<body>
    <h1>Daftar Binatang</h1>
    <ul>
        <?php for ($i = 0; $i < count($binatang); $i++) { ?>
            <li>
                <?= $binatang[$i][0]; ?> - <?= $binatang[$i][1]; ?>
            </li>
        <?php } ?>
    </ul>

</body>

</html>