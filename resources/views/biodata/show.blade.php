@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header fs-5 d-flex justify-content-between align-items-center mb-3"> Show Biodata <a href="{{ route('biodata.index') }}"><i class="bi bi-arrow-right-square-fill "></i></a></div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" value="{{ $biodatas->nama_lengkap }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Jenis Kelamin</label>
                            <input type="text" class="form-control" name="jk" value="{{ $biodatas->jenis_kelamin }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" value="{{ $biodatas->tempat_lahir }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Tanggal Lahir</label>
                            <input type="text" class="form-control" name="tanggal_lahir" value="{{ $biodatas->tanggal_lahir }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Agama</label>
                            <input type="text" class="form-control" name="agama" value="{{ $biodatas->agama }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="{{ $biodatas->alamat }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Telepon</label>
                            <input type="text" class="form-control" name="telepon" value="{{ $biodatas->telepon }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" value="{{ $biodatas->email }}" disabled>
                        </div>
                        <div class="mb-3">
                            <img src="{{ asset('/images/biodata/' . $biodatas->foto) }}" width="100" style="width: 100px; height: auto;">
                        </div>
                            <a href="{{ route('biodata.index') }}" class="btn btn-primary"><i class="bi bi-arrow-left-square-fill"></i> Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
