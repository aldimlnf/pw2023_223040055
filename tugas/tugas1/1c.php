<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            display: flex;
        }

        .kotak {
            width: 150px;
            height: 150px;
            background-color: purple;
            background-image: linear-gradient(purple, aqua);
            position: relative;
            border: 1px solid black;
        }

        .isi {
            position: absolute;
            font-family: 'Times New Roman', Times, serif;
            font-size: 75px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="kotak">
            <div class="isi">1</div>
        </div>
    </div>
    <div class="container">
        <div class="kotak">
            <div class="isi">2</div>
        </div>
        <div class="kotak">
            <div class="isi">2</div>
        </div>
    </div>
    <div class="container">
        <div class="kotak">
            <div class="isi">3</div>
        </div>
        <div class="kotak">
            <div class="isi">3</div>
        </div>
        <div class="kotak">
            <div class="isi">3</div>
        </div>
    </div>
</body>

</html>