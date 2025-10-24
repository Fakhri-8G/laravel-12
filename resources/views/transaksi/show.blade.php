@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tampilkan Data Transaksi</div>
                <div class="card-body">
                        <div class="mb-3">
                            <label>Tanggal Transaksi</label>
                            <input type="date" class="form-control @error('tanggal_transaksi') is-invalid @enderror" name="tanggal_transaksi" disabled value="{{ $transaksi->tanggal_transaksi }}">
                             @error('tanggal_transaksi')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Jumlah</label>
                            <input type="number" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" disabled value="{{ $transaksi->jumlah }}">
                             @error('jumlah')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Total Harga</label>
                            <input type="number" class="form-control @error('total_harga') is-invalid @enderror" name="total_harga" disabled value="{{ $transaksi->total_harga }}">
                             @error('total_harga')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                      <div class="form-group mb-3">
                            <label for="">Nama Barang</label>
                            <input type="text" class="form-control @error('total_harga') is-invalid @enderror" name="total_harga" disabled value="{{ $transaksi->barang->nama_barang }}">
                             @error('total_harga')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Nama Pembeli</label>
                            <input type="text" class="form-control @error('total_harga') is-invalid @enderror" name="total_harga" disabled value="{{ $transaksi->pembeli->nama_pembeli }}">
                             @error('total_harga')
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
