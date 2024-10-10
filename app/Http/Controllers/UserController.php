<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function index()
    {
        $data = [
            'title' => 'Create User',
            'users' => $this->userModel->getUser(),
        ];
        
        return view('list_user', $data);

    }


    public function profile($nama = “”, $kelas = “”, $npm = 
    “”) 
    { 
        $data = [ 
            'nama' => $nama, 
            'kelas' => $kelas, 
            'npm' => $npm, 
            ];
        return view('profile', $data); 
    } 

    public function create()
    {
        $kelasModel = new Kelas();
        $kelas = $this->kelasModel->getKelas();
        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
        //return view('user.create', $data);
    }

    public function store(Request $request){
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255',
            'kelas_id' => 'required|integer',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', //Validasi untuk foto
        ]);
        // Meng-handle upload foto
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            // Menyimpan file foto di folder 'uploads'
            $fotoPath = $foto->move(('upload/img'), $foto);
        } else {
        // Jika tidak ada file yang diupload, set fotoPathmenjadi null atau default
            $fotoPath = null;
        }
        // Menyimpan data ke database termasuk path foto
        $this->userModel->create([
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
            'foto' => $fotoPath, // Menyimpan path foto
        ]);
        return redirect()->to('/user')->with('success', 'User
        berhasil ditambahkan');
    }

    public function edit($id){
        $user = $this->userModel->find($id);

        if(!$user){
            return redirect()->route('user.list');
        }

        $kelas = $this->kelasModel->getKelas();

        return view('edit.user',[
            'user' -> $user,
            'kelas'-> $kelas,
        ]);
    }

    public function update (StoreliserRequest $request, $id){
        $validatedData = $request->validated();

        $user = $this->userModel->find($id);
        if (!$user){
            return redirect()->route('user.list')->with('error', 'User tidak ditemukan.');
        } 
    
        $user->update([
            'nama' => $validatedData['nama'],
            'npm' => $validatedData['npm'],
            'kelas_id' => $validatedData['kelas_id'],
        ]);
        
        return redirect()->route('user.list');
    }

    public function destroy($id){
        $user = $this->userModel->find($id);

        

        $user->delete();
        return redirect()->route('user.list');
    }

    public function show ($id) {
        $user = $this->userModel->getUser($id);
        $data = [
        'title' => 'Profile',
        'user' => $user,
        ];
        
        return view('profile', $data);
    }
    
    
}