<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembeli = Pembeli::all();
        return view('pembeli.index', compact('pembeli'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pembeli = Pembeli::all();
        return view('pembeli.create', compact('pembeli'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_pembeli'           => 'required|string|max:255',
                'jenis_kelamin'                 => 'required|string|max:255',
                'telepon'                 => 'required|string',
            ],
            [
                'nama_pembeli.required'  => 'Nama pembeli tidak boleh kosong',
                'jenis_kelamin.required'        => 'Jenis kelamin tidak boleh kosong',
                'telepon.required'        => 'Telepon tidak boleh kosong',
            ]
        );

        $pembeli = new Pembeli;
        $pembeli->nama_pembeli = $request->nama_pembeli;
        $pembeli->jenis_kelamin = $request->jenis_kelamin;
        $pembeli->telepon = $request->telepon;

        $pembeli->save();

        session()->flash('success', 'Data berhasil ditambahkan');

        return redirect()->route('pembeli.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pembeli = Pembeli::findOrFail($id);
        return view('pembeli.show', compact('pembeli'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pembeli = Pembeli::findOrFail($id);
        return view('pembeli.edit', compact('pembeli'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'nama_pembeli'           => 'required|string|max:255',
                'jenis_kelamin'                 => 'required|string|max:255',
                'telepon'                 => 'required|string',
            ],
            [
                'nama_pembeli.required'  => 'Nama pembeli tidak boleh kosong',
                'jenis_kelamin.required'  => 'Jenis kelamin tidak boleh kosong',
                'telepon.required'        => 'Telepon tidak boleh kosong',
            ]
        );

        $pembeli = Pembeli::findOrFail($id);
        $pembeli->nama_pembeli = $request->nama_pembeli;
        $pembeli->jenis_kelamin = $request->jenis_kelamin;
        $pembeli->telepon = $request->telepon;

        $pembeli->save();

        session()->flash('success', 'Data berhasil diubah');

        return redirect()->route('pembeli.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pembeli = Pembeli::findOrFail($id);
        $pembeli->delete();
        return redirect()->route('pembeli.index')->with('success', 'Data Berhasil Dihapus');
    }
}
