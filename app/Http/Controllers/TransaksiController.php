<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Pembeli;
use App\Models\Barang;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi = Transaksi::all();
        return view('transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $transaksi = Transaksi::all();
        $pembeli = Pembeli::all();
        $barang = Barang::all();
        return view('transaksi.create', compact('transaksi', 'pembeli', 'barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'tanggal_transaksi'           => 'required|date',
                'jumlah'                 => 'required|integer|max:255',
                'total_harga'                 => 'required|integer',
            ],
            [
                'tanggal_transaksi.required'  => 'Nama pembeli tidak boleh kosong',
                'jumlah.required'        => 'Jenis kelamin tidak boleh kosong',
                'total_harga.required'        => 'Telepon tidak boleh kosong',
            ]
        );

        $transaksi = new Transaksi;
        $transaksi->tanggal_transaksi = $request->tanggal_transaksi;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->total_harga = $request->total_harga;
        $transaksi->id_barang = $request->id_barang;
        $transaksi->id_pembeli = $request->id_pembeli;

        $transaksi->save();

        session()->flash('success', 'Data berhasil ditambahkan');

        return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $pembeli = Pembeli::all();
        $barang = Barang::all();
        return view('transaksi.show', compact('transaksi', 'pembeli', 'barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $pembeli = Pembeli::all();
        $barang = Barang::all();
        return view('transaksi.edit', compact('transaksi', 'pembeli', 'barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'tanggal_transaksi'           => 'required|date|',
                'jumlah'                 => 'required|integer|max:255',
                'total_harga'                 => 'required|integer',
            ],
            [
                'tanggal_transaksi.required'  => 'Nama pembeli tidak boleh kosong',
                'jumlah.required'        => 'Jenis kelamin tidak boleh kosong',
                'total_harga.required'        => 'Telepon tidak boleh kosong',
            ]
        );

        $transaksi = Transaksi::findOrFail($id);
        $transaksi->tanggal_transaksi = $request->tanggal_transaksi;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->total_harga = $request->total_harga;
        $transaksi->id_barang = $request->id_barang;
        $transaksi->id_pembeli = $request->id_pembeli;

        $transaksi->save();

        session()->flash('success', 'Data berhasil diubah');

        return redirect()->route('transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index')->with('success', 'Data Berhasil Dihapus');
    }
}
