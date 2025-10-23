@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tampilkan Data Telepon</div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label>Nomor</label>
                            <input type="text" class="form-control" name="nomor_telepon" value="{{ $datatelepon->nomor_telepon }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Nama Pengguna</label>
                            <input type="text" class="form-control" name="id_pengguna" value="{{ $datatelepon->pengguna->nama }}" disabled>
                        </div>
                            <a href="{{ route('telepon.index') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
