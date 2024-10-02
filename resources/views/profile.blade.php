<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #2e2e2e;
            color: #fff;
        }

        .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 220px;
            background-color: #3a3a3a;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .content:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(33, 150, 243, 0.5);
        }

        .profil-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
            overflow: hidden;
            border: 4px solid #13a1ff;
            transition: transform 0.3s ease;
        }

        .profil-img:hover {
            transform: scale(1.1);
        }

        .profil-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .item {
            width: 100%;
            background-color: #555;
            margin: 5px 0;
            padding: 12px 0;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.2s ease, box-shadow 0.2s ease;
        }

        .item:hover {
            background-color: #444;
            box-shadow: 0 0 16px rgba(30, 136, 229, 1);
        }
    </style>
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
