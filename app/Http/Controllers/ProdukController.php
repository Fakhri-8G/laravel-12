<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    // Menampilkan tabel + form tambah
    public function index(){
        $pro = produk::all();
        return view('produk', compact('pro'));
    }

    // Menampilkan form update
    public function edit($id){
        $pro = produk::all(); // tetap tampil semua data di tabel
        $editpro = produk::findOrFail($id);
        return view('produk', compact('pro','editpro'));
    }

    // Tambah data baru
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',  //ganti
            'stock' => 'required',  //ganti
        ]);

        produk::create($request->all());
        return redirect('/produk')->with('success','Produk berhasil ditambahkan');
    }

    // Update data lama
    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',    //ganti
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',  //ganti
        ]);

        $pro = produk::findOrFail($id);
        $pro->update($request->all());
        return redirect('/produk')->with('success','Produk berhasil diupdate');
    }

    // Hapus data
    public function destroy($id){
        $pro = produk::findOrFail($id);
        $pro->delete();
        return redirect('/produk')->with('success','Produk berhasil dihapus');
    }
}