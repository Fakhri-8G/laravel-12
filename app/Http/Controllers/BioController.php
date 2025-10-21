<?php

namespace App\Http\Controllers;

use App\Models\biodataa;
use Illuminate\Http\Request;

class BioController extends Controller
{
    // Menampilkan tabel + form tambah
    public function index(){
        $bio = biodataa::all();
        return view('crud', compact('bio'));
    }

    // Menampilkan form update
    public function edit($id){
        $bio = biodataa::all(); // tetap tampil semua data di tabel
        $editBio = biodataa::findOrFail($id);
        return view('crud', compact('bio','editBio'));
    }

    // Tambah data baru
    public function store(Request $request){
        $request->validate([
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required',
        ]);

        biodataa::create($request->all());
        return redirect('/crud')->with('success','Data berhasil ditambahkan');
    }

    // Update data lama
    public function update(Request $request, $id){
        $request->validate([
        'nama_lengkap' => 'required',
        'jenis_kelamin' => 'required',
        'tanggal_lahir' => 'required',
        'tempat_lahir' => 'required',
        'agama' => 'required',
        'alamat' => 'required',
        'telepon' => 'required',
        'email' => 'required',
    ]);


        $bio = biodataa::findOrFail($id);
        $bio->update($request->all());
        return redirect('/crud')->with('success','Data berhasil diupdate');
    }

    // Hapus data
    public function des($id){
        $bio = biodataa::findOrFail($id);
        $bio->delete();
        return redirect('/crud')->with('success','Data berhasil dihapus');
    }
}
