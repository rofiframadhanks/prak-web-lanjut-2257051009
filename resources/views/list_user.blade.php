@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <!-- Tombol Tambah Pengguna Baru -->
    <button class="btn-tambah mb-3">
        <a href="{{ route('user.create') }}" class="inline-block text-white font-bold py-2 px-4 rounded transition duration-300">
            Tambah Pengguna Baru
        </a>    
    </button>

    <!-- Tabel Pengguna -->
    <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
        <table class="min-w-full border border-gray-300 rounded-lg overflow-hidden">
            <thead class="bg-gradient-to-r from-blue-500 to-blue-600 text-white">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>            
            <tbody>
                @foreach ($users as $user)
                    <tr class="hover:bg-gray-200 transition-colors">
                        <td>{{ $user['id'] }}</td>
                        <td>{{ $user['nama'] }}</td>
                        <td>{{ $user['npm'] }}</td>
                        <td>{{ $user['nama_kelas'] }}</td>
                        
                        <td class="px-6 py-4 border-b border-gray-200 text-center">
                            <div class="flex justify-center space-x-2">
                                <a href="{{ route('user.show', $user['id']) }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300">
                                    View
                                </a>

                                <a href="{{ route('user.edit', $user['id']) }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                                    Edit
                                </a>

                                <form action="{{ route('user.destroy', $user['id']) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600" onclick="return confirm('Apakah anda yakin ingin menghapus user ini?')">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
