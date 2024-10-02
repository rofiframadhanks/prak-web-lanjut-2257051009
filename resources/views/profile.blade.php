<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="{{asset('assets/css/profile.css') }}">
</head>
<body>
    <div class="content">
        <div class="profil-img">
        <img src="{{ asset('assets/img/Rofif.jpg') }}" alt="Foto Profile">
        </div>
        <div class="item">
            <span>Nama: <?= $nama ?></span>
        </div>
        <div class="item">
            <span>Kelas: <?= $kelas ?></span>
        </div>
        <div class="item">
            <span>NPM: <?= $npm ?></span>
        </div>
    </div>
</body>
</html>
