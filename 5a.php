<?php
$mahasiswa = [
    ['Muhammad Faiz Alhadziq', 'Teknik Informatika', '223040157'],
    ['Asep', 'Teknik Informatika', '223040141'],
    ['Aldo', 'Teknik Informatika', '223040142'],
    ['Rizki', 'Teknik Informatika', '223040150'],
    ['Natan', 'Teknik Informatika', '223040153'],
    ['Naufal', 'Teknik Informatika', '223040143'],
    ['Adit', 'Teknik Informatika', '223040144'],
    ['Agus', 'Teknik Informatika', '223040155'],
    ['Rehan', 'Teknik Informatika', '223040166'],
    ['Dani', 'Teknik Informatika', '223040167']
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NPM : <?= $mhs[2]; ?></li>
        <li>Jurusan : <?= $mhs[1]; ?></li>
    </ul>
    <?php } ?>
</body>
</html>