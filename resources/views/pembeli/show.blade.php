@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Pembeli</div>
                <div class="card-body">
                    <form action="{{ route('pembeli.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>Nama Pembeli</label>
                            <input type="text" class="form-control @error('nama_pembeli') is-invalid @enderror" name="nama_pembeli" value="{{ $pembeli->nama_pembeli }}">
                             @error('nama_pembeli')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                         <div class="mb-3">
                            <label>Jenis Kelamin</label><br>
                            <input type="text" class="form-control" name="jenis_kelamin" value="{{ $pembeli->jenis_kelamin }}">
                             @error('jenis_kelamin')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                         <div class="mb-3">
                            <label>Telepon</label>
                            <input type="text" class="form-control" name="telepon" value="{{ $pembeli->telepon }}">
                             @error('telepon')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
