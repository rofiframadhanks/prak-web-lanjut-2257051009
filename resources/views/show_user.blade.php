@extends('layouts.app') <!-- Menggunakan layout dari app.blade.php -->

@section('content')
<div class="flex justify-center items-center min-h-screen bg-gradient-to-r from-purple-400 via-pink-500 to-red-500">
    <div class="card-profile w-full max-w-3xl">
        <!-- Logo Profile -->
        @php
            $defaultFoto = 'path/to/default-foto.jpg'; // Pastikan path ke foto default benar
            $userFoto = $user->foto ? asset('upload/img/' . $user->foto) : asset($defaultFoto);
        @endphp

        <img src="{{ $userFoto }}" alt="Profile Logo" class="mx-auto mb-8">

        <!-- Tabel Data -->
        <div class="space-y-6">
            <div class="info-card">
                <span>{{ $user->nama }}</span>
            </div>
            <br>

            <div class="info-card" style="background: linear-gradient(135deg, #28a745 0%, #58d68d 100%)">
                <span>{{ $user->npm }}</span>
            </div>
            <br>

            <div class="info-card" style="background: linear-gradient(135deg, #007bff 0%, #5dade2 100%)">
                <span>{{ $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan' }}</span>
            </div>
        </div>
        <br>

        <!-- Tombol Kembali -->
        <div class="mt-8">
            <a href="{{ route('user.list') }}" class="back-button">
                Kembali ke Daftar
            </a>
        </div>
    </div>
</div>
@endsection
