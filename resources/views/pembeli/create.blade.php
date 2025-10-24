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
                            <input type="text" class="form-control @error('nama_pembeli') is-invalid @enderror" name="nama_pembeli" placeholder="Nama pembeli">
                             @error('nama_pembeli')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                         <div class="mb-3">
                            <label>Jenis Kelamin</label><br>
                            <label>
                                <input type="radio" name="jenis_kelamin" value="Laki-laki">
                                Laki-laki
                            </label><br>

                            <label>
                                <input type="radio" name="jenis_kelamin" value="Perempuan">
                                Perempuan
                            </label><br>
                             @error('jenis_kelamin')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                         <div class="mb-3">
                            <label>Telepon</label>
                            <input type="text" class="form-control" name="telepon" placeholder="Silahkan isi Telepon">
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
