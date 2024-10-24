<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">
</head>
<body>
    <div class="content">
        <div class="profil-img">
            <img src="{{ asset($user->foto) }}" alt="Foto Profile">
        </div>

        <div class="item">
            <span>Nama: {{ $user->nama }}</span>
        </div>

        <div class="item">
            <span>Semester: {{ $user->semester }}</span>
        </div>
        <!-- <div class="item">
            <span>NPM: {{ $user->npm }}</span>
        </div> -->
        <div class="item">
            {{ $user->nama_kelas ?? 'Kelas tidak ditemukan' }}
        </div>

        <div class="item">
            <span>Fakultas: {{ $user->fakultas }}</span>
        </div>

        <div class="item">
            <span>Jurusan: {{ $user->jurusan }}</span>
        </div>
    </div>
</body>
</html>
