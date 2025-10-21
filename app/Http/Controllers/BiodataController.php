<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\biodata;
use Illuminate\Support\Facades\File;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $biodatas = biodata::all();
        return view('biodata.index', compact('biodatas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('biodata.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_lengkap'      => 'required|string|max:255',
                'jenis_kelamin'     => 'required',
                'tempat_lahir'      => 'required|string|max:255',
                'tanggal_lahir'     => 'required|date',
                'agama'             => 'required',
                'alamat'            => 'required|string|max:255',
                'telepon'           => 'required|string|max:12',
                'email'             => 'required|email|max:255',
                'foto'              => 'required',
            ],
            [
                'nama_lengkap.required'     => 'nama lengkap tidak bisa kosong!',
                'jenis_kelamin.required'    => 'jenis kelamin tidak bisa kosong!',
                'tempat_lahir.required'     => 'tempat lahir tidak bisa kosong!',
                'tanggal_lahir.required'    => 'tanggal lahir tidak bisa kosong!',
                'agama.required'            => 'agama tidak bisa kosong!',
                'alamat.required'           => 'alamat tidak bisa kosong!',
                'telepon.required'          => 'telepon tidak bisa kosong!',
                'email.required'            => 'email tidak bisa kosong!',
                'foto.required'             => 'File harus diisi Gambar',
            ]);

        $biodatas                   = new biodata;
        $biodatas->nama_lengkap     = $request->nama_lengkap;
        $biodatas->jenis_kelamin    = $request->jenis_kelamin;
        $biodatas->tempat_lahir     = $request->tempat_lahir;
        $biodatas->tanggal_lahir    = $request->tanggal_lahir;
        $biodatas->agama            = $request->agama;
        $biodatas->alamat           = $request->alamat;
        $biodatas->telepon          = $request->telepon;
        $biodatas->email            = $request->email;
        $biodatas->foto             = $request->foto;

        if ($request->hasFile('foto')) {
            $img = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/biodata', $name);
            $biodatas->foto = $name;
        }
    
        $biodatas->save();

        session()->flash('success', 'Data berhasil ditambahkan');

        return redirect()->route('biodata.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $biodatas = biodata::findOrFail($id);
        return view('biodata.show', compact('biodatas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $biodatas = biodata::findOrFail($id);
        return view('biodata.edit', compact('biodatas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate(
            [
                'nama_lengkap'      => 'required|string|max:255',
                'jenis_kelamin'     => 'required',
                'tempat_lahir'      => 'required|string|max:255',
                'tanggal_lahir'     => 'required|date',
                'agama'             => 'required',
                'alamat'            => 'required|string|max:255',
                'telepon'           => 'required|string|max:12',
                'email'             => 'required|email|max:255',
                'foto'              => 'required',
            ],
            [
                'nama_lengkap.required'     => 'Nama lengkap tidak bisa kosong!',
                'jenis_kelamin.required'    => 'Jenis kelamin tidak bisa kosong!',
                'tempat_lahir.required'     => 'Tempat lahir tidak bisa kosong!',
                'tanggal_lahir.required'    => 'Tanggal lahir tidak bisa kosong!',
                'agama.required'            => 'Agama tidak bisa kosong!',
                'alamat.required'           => 'Alamat tidak bisa kosong!',
                'telepon.required'          => 'Telepon tidak bisa kosong!',
                'email.required'            => 'Email tidak bisa kosong!',
                'foto.required'             => 'File harus diisi Gambar',
            ]);

        $biodatas                   = biodata::findOrFail($id);
        $biodatas->nama_lengkap     = $request->nama_lengkap;
        $biodatas->jenis_kelamin    = $request->jenis_kelamin;
        $biodatas->tempat_lahir     = $request->tempat_lahir;
        $biodatas->tanggal_lahir    = $request->tanggal_lahir;
        $biodatas->agama            = $request->agama;
        $biodatas->alamat           = $request->alamat;
        $biodatas->telepon          = $request->telepon;
        $biodatas->email            = $request->email;
        $biodatas->foto             = $request->foto;

         if ($request->hasFile('foto')) {
            $filePath = public_path('images/biodata/' . $biodatas->foto);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }

            $img = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/biodata', $name);
            $biodatas->foto = $name;
        }

        $biodatas->save();

        session()->flash('success', 'Data berhasil dirubah');

        return redirect()->route('biodata.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $biodatas = biodata::findOrFail($id);
        
        if ($biodatas->foto) {
            $filePath = public_path('images/biodata/' . $biodatas->foto);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
        }
        $biodatas->delete();
        return redirect()->route('biodata.index')->with('success', 'Data Berhasil Dihapus');
    }
}
