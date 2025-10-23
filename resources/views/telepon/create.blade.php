@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Telepon</div>
                <div class="card-body">
                    <form action="{{ route('telepon.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>Nomor</label>
                            <input type="text" class="form-control @error('nomor_telepon') is-invalid @enderror" name="nomor_telepon" placeholder="Nomor">
                             @error('nomor_telepon')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Nama Pengguna</label>
                            <select name="id_pengguna" class="form-control" id="">
                                @foreach ($datapengguna as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama }}</option>
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
