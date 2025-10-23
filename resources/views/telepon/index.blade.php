@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Telepon</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show text-black" role="alert">
                            <i class="bi bi-check-circle-fill text-primary"></i> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <a href="{{ route('telepon.create') }}" class="btn btn-primary">Tambah +</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nomor</th>
                                <th scope="col">Id Pengguna</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($datatelepon as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->nomor_telepon }}</td>
                                    <td>{{ $data->pengguna->nama }}</td>
                                    <td>
                                        <a href="{{ route('telepon.edit', $data->id) }}" class="btn btn-success">Ubah</a>
                                        <a href="{{ route('telepon.show', $data->id) }}" class="btn btn-warning">Tampilkan</a>
                                       <form action="{{ route('telepon.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah kamu yakin ?')">Hapus</button>
                                       </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
