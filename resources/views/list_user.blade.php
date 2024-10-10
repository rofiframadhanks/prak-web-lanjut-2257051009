@extends('layouts.app')
@section ('content')
    <div class="button-container">
        <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah Pengguna Baru</a>
    </div>
    <br><br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($users as $user) {
            ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['nama'] ?></td>
                    <td><?= $user['npm'] ?></td>
                    <td><?= $user['nama_kelas'] ?></td>
                    <td>
                        @if($user['foto'])
                            <img src="{{ asset('storage/uploads/' . $user['foto']) }}" alt="Foto User" width="100"> <!-- Menampilkan Foto User -->
                        @else
                            <span class="text-gray-500">No Image</span> <!-- Jika tidak ada foto -->
                        @endif
                    </td>
                    <td class="aksi_button">
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-warning mb-3">Detail</a>

                        <a href="{{ route('user.edit', $user->id) }}"> 
                            Edit
                        </a>
                        
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            <?php           
            }
            ?>
        </tbody>
    </table>
@endsection