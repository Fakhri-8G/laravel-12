@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tampilan Data Barang</div>
                <div class="card-body">
                        <div class="mb-3">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" disabled value="{{ $barang->nama_barang }}">
                             @error('nama_barang')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Merek</label>
                            <input type="text" class="form-control @error('merek') is-invalid @enderror" name="merek" disabled value="{{ $barang->merek }}">
                             @error('merek')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Harga</label>
                            <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" disabled value="{{ $barang->harga }}">
                             @error('harga')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Stok</label>
                            <input type="number" class="form-control @error('stok') is-invalid @enderror" name="stok" disabled value="{{ $barang->stok }}">
                             @error('stok')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                            <button type="submit" class="btn btn-primary">Kembali</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
