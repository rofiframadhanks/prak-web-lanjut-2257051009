@extends('layouts.app')
@section('content')
<div>
    <!-- Isi Section -->
    <form action="{{ route('user.update', $user->id) }}" method="POST" class="mx-9" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <p class="text-white text-3xl my-9 font-semibold text-center">Edit Data</p>
                    <br>

                    <div class="h-20 mb-5">
                        <label for="nama" class="block mb-3 text-base font-medium text-white">Nama</label>
                        <input type="text" id="nama" name="nama" value="{{ old('nama', $user->nama) }}" class="w-full bg-transparent text-white border-2 border-gray-500 rounded-lg p-2.5 text-sm focus:border-pink-600 focus:bg-transparent focus:outline-none" placeholder="Enter Your Name">
                        @foreach($errors->get('nama') as $msg)
                            <p class="text-sm font-medium text-red-600">{{ $msg }}</p>
                        @endforeach
                    </div>

                    <div class="mb-4">
                        <label for="jurusan" class="block text-sm font-bold mb-2">Jurusan</label>
                        <input type="text" name="jurusan" id="jurusan" class="w-full p-2 border border-gray-300 rounded" value="{{ old('jurusan', $data->jurusan) }}">
                    </div>

                    <div class="mb-4">
                        <label for="jurusan" class="block text-sm font-bold mb-2">Semester</label>
                        <input type="text" name="semester" id="jurusan" class="w-full p-2 border border-gray-300 rounded" value="{{ old('jurusan', $data->semester) }}">
                    </div>
    
                    <div class="h-20 mb-5">
                        <label for="kelas" class="block mb-3 text-base font-medium text-white">Kelas</label>
                        <select name="kelas_id" id="kelas" class="bg-black border-2 border-gray-500 text-white text-sm rounded-lg focus:border-pink-600 w-full p-2.5">
                            <option value="" selected disabled>-- Select Your Class --</option>
                            @foreach($kelas as $kelasItem)
                            <option value="{{ $kelasItem->id }}" {{ $kelasItem->id == $user->kelas_id ? 'selected' : '' }}>
                                {{ $kelasItem->nama_kelas }}
                            </option>
                            @endforeach
                        </select>
                        @foreach($errors->get('kelas_id') as $msg)
                            <p class="text-sm font-medium text-red-600">{{ $msg }}</p>
                        @endforeach
                    </div>
    
                    <!-- <div class="h-20 mb-5">
                        <label for="npm" class="block mb-3 text-base font-medium text-white">NPM</label>
                        <input type="text" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" id="npm" name="npm" value="{{ old('npm', $user->npm) }}" class="w-full bg-transparent text-white border-2 border-gray-500 rounded-lg p-2.5 text-sm focus:border-purple-600 focus:bg-transparent focus:outline-none" placeholder="Enter Your NPM">
                        @foreach($errors->get('npm') as $msg)
                            <p class="text-sm font-medium text-red-600">{{ $msg }}</p>
                        @endforeach
                    </div> -->
                    <div class="mb-4">
                        <label for="fakultas_id" class="block text-sm font-bold mb-2">Fakultas</label>
                        <select name="fakultas_id" id="fakultas_id" class="w-full p-2 border border-gray-300 rounded">
                            <option value="">Select a faculty</option>
                            @foreach ($fakultas as $f)
                                <option value="{{ $f->id }}" {{ old('fakultas_id', $data->fakultas_id) == $f->id ? 'selected' : '' }}>
                                    {{ $f->nama_fakultas }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="h-20 mb-12">
                        <label for="foto" class="block mb-3 text-base font-medium text-white">Foto</label>
                        <input type="file" id="foto" name="foto" class="text-white">
                        @if($user->foto)
                        <img src="{{ asset($user->foto) }}" alt="User Photo" width="100" class="mt-2">
                        @endif
                    </div>
    
                    <div class="flex justify-center">
                        <div class="relative group/submit">
                            <div class="absolute -inset-1 bg-gradient-to-r from-pink-600 to-purple-600 rounded-full blur opacity-75 group-hover/submit:opacity-100 transition duration-200"></div>
                            <button type="submit" class="relative text-white bg-black rounded-full leading-none w-80 p-4">Update</button>
                        </div>
                    </div>
    </form>
</div>
@endsection










