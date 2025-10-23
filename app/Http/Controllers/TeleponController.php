<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\telepon;
use Illuminate\Http\Request;

class TeleponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datatelepon = Telepon::all();
        return view('telepon.index', compact('datatelepon'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datapengguna = Pengguna::all();
        return view('telepon.create', compact('datapengguna'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nomor_telepon' => 'required|string|max:255',
                
            ],
            [
                'nomor_telepon.required' => 'Nomor tidak boleh kosong!',
            
            ]
        );

        $datatelepon                = new Telepon;
        $datatelepon->nomor_telepon = $request->nomor_telepon;
        $datatelepon->id_pengguna   = $request->id_pengguna;

        $datatelepon->save();

        session()->flash('succes', 'Data berhasil ditambahkan');

        return redirect()->route('telepon.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $datatelepon = Telepon::findOrFail($id);
        return view('telepon.show', compact('datatelepon'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $datatelepon  = Telepon::findOrFail($id);
        $datapengguna = Pengguna::all(); 
        return view('telepon.edit', compact('datatelepon', 'datapengguna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
           $request->validate(
            [
                'nomor_telepon'   => 'required|string|max:255',
            ],
            [
                'nomor_telepon.required'   => 'Nomor tidak boleh kosong!',
            ]);

        $datatelepon          = Telepon::findOrFail($id);
        $datatelepon->nomor_telepon   = $request->nomor_telepon;
        $datatelepon->id_pengguna   = $request->id_pengguna;

        $datatelepon->save();

        session()->flash('success', 'Data berhasil diubah');

        return redirect()->route('telepon.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $datatelepon = Telepon::findOrFail($id);
        $datatelepon->delete();
        return redirect()->route('telepon.index')->with('success', 'Data Berhasil Dihapus');
    }
}
