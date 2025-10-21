@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header fs-5 d-flex justify-content-between align-items-center mb-3">Tambah Biodata <a href="{{ route('biodata.index') }}"><i class="bi bi-arrow-right-square-fill "></i></a> </div>
                <div class="card-body">
                    <form action="{{ route('biodata.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" placeholder="Silahkan isi Nama Lengkap">
                             @error('nama_lengkap')
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
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" placeholder="Silahkan isi Tempat Lahir">
                             @error('tempat_lahir')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir">
                             @error('tanggal_lahir')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Agama</label>
                             <select class="form-control" name="agama" id="agama">
                                <option disabled selected>Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Budha">Budha</option>
                            </select>
                             @error('agama')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" placeholder="Silahkan isi Alamat"></textarea>
                             @error('alamat')
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
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Silahkan isi Email">
                             @error('email')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Foto</label>
                            <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">
                             @error('foto')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                            <button type="submit" class="btn btn-primary">Simpan <i class="bi bi-plus-circle"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
