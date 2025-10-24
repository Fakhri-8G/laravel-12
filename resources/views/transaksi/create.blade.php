@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Transaksi</div>
                <div class="card-body">
                    <form action="{{ route('transaksi.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>Tanggal Transaksi</label>
                            <input type="date" class="form-control @error('tanggal_transaksi') is-invalid @enderror" name="tanggal_transaksi" >
                             @error('tanggal_transaksi')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Jumlah</label>
                            <input type="number" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" placeholder="Isi jumlah">
                             @error('jumlah')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Total Harga</label>
                            <input type="number" class="form-control @error('total_harga') is-invalid @enderror" name="total_harga" placeholder="Total Harga barang">
                             @error('total_harga')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                      <div class="form-group mb-3">
                            <label for="">Nama Barang</label>
                            <select name="id_barang" class="form-control" id="">
                                <option value="" selected disabled>Pilih Nama Barang</option>
                                @foreach ($barang as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_barang }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Nama Pembeli</label>
                            <select name="id_pembeli" class="form-control" id="">
                                <option value="" selected disabled>Pilih Nama Pembeli</option>
                                @foreach ($pembeli as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_pembeli }}</option>
                                @endforeach
                            </select>
                        </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
