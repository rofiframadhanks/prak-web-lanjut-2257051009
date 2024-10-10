@extends('layouts.app')
@section('content')
<div>
    <!-- Isi Section -->
    <!-- <form action="{{ route('user.store') }}" method="POST"> -->
    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" id="nama" name="nama" class="form-control" value="{{ old('nama', $user->nama ?? '') }}" required>
        @foreach($errors->get('nama') as $message)
            <div class="text-danger">{{ $message }}</div>
        @endforeach
    </div>
    <br>
    <div class="mb-3">
        <label for="npm" class="form-label">NPM                         </label>
        <input type="text" id="npm" name="npm" class="form-control" value="{{ old('npm', $user->npm ?? '') }}" required>
        @foreach($errors->get('npm') as $message)
            <div class="text-danger">{{ $message }}</div>
        @endforeach
    </div>
    <br>
    <div class="mb-3">
        <label for="kelas" class="form-label">Kelas </label>
        <select name="kelas_id" id="kelas_id" class="form-select" required>
            <option value="" disabled selected>-- Pilih Kelas --</option>
            @foreach($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}" {{ old('kelas_id') == $kelasItem->id ? 'selected' : '' }}>
                    {{ $kelasItem->nama_kelas }}
                </option>
            @endforeach
        </select>
        @foreach($errors->get('kelas_id') as $message)
            <p class="text-danger">{{ $message }}</p>
        @endforeach
    </div>
    <br>

    <div>
        <label for="foto">foto: </label><br>
        <input type="file" id="foto" name="foto"><br><br>
    </div>

    <br><br>

    <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
@endsection

















<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #3a3a3a;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .container:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(33, 150, 243, 0.5);
        }

        .logo {
            margin-bottom: 30px;
        }

        .profile-pic img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            border: 4px solid #13a1ff;
        }

        h1 {
            text-align: center;
            color: #fff;
            font-size: 2em;
            margin-bottom: 20px;
        }

        .info-box {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        label {
            font-size: 1.1em;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 220px;
            text-align: center;
            padding: 12px;
            border: 1px solid #000000;
            border-radius: 5px;
            background-color: #555;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.3);
            font-size: 16px;
            color: #fff;
            transition: all 0.2s ease;
        }

        input:hover {
            background-color: #444;
            border-color: #005eff;
            box-shadow: 0 0 16px rgba(30, 136, 229, 1);
        }

        input:focus {
            outline: none;
            box-shadow: 0 0 16px rgba(30, 136, 229, 1);
            border-color: #005eff;
        }

        button {
            background-color: #13a1ff;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1em;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #005eff;
        }

        @media (max-width: 600px) {
            .container {
                width: 90%;
            }
        }
    </style>

</head>
<body>

    <div class="container">
            <div class="logo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/f/fb/Mercedes_AMG_Petronas_F1_Logo.svg" alt="Logo" width="220">
            </div>

            <h1>Create User</h1>
            @include('_form', [
                        'action' => route('user.store'), // action menuju route penyimpanan user
                        'kelas' => $kelas, // data kelas dikirim ke partial form
                    ])
    </div>

</body>
</html> -->