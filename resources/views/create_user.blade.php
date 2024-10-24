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

    <div class="mb-4">
            <label for="jurusan" class="block text-sm font-bold mb-2">Jurusan</label>
            <input type="text" name="jurusan" id="npm" class="w-full p-2 border border-gray-300 rounded" value="{{ old('npm') }}">
        </div>


    <div class="mb-4">
        <label for="jurusan" class="block text-sm font-bold mb-2">Semester</label>
        <input type="text" name="semester" id="npm" class="w-full p-2 border border-gray-300 rounded" value="{{ old('semester') }}">
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

    <div class="mb-4">
            <label for="fakultas" class="block text-sm font-bold mb-2">Fakultas</label>
            <input type="text" name="fakultas" id="npm" class="w-full p-2 border border-gray-300 rounded" value="{{ old('npm') }}">
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





