@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="">
            <div class="card">
                <div class="card-header">Data Murid</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show text-black" role="alert">
                            <i class="bi bi-check-circle-fill text-primary"></i> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <a href="{{ route('murid.create') }}" class="btn btn-primary">Tambah +</a>
                    <table class="table table-bordered border-secondary mt-4 align-middle">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Tempat Lahir</th>
                                <th scope="col">Agama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Email</th>
                                <th scope="col">Id Kelas</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($murid as $data)
                                <tr>
                                    <td>{{ $no++ }}.</td>
                                    <td>{{ $data->nama_lengkap }}</td>
                                    <td>{{ $data->jenis_kelamin }}</td>
                                    <td>{{ $data->tanggal_lahir }}</td>
                                    <td>{{ $data->tempat_lahir }}</td>
                                    <td>{{ $data->agama }}</td>
                                    <td>{{ $data->alamat }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->kelas->nama_kelas }}</td>
                                    <td>
                                        <a href="{{ route('murid.edit', $data->id) }}" class="btn btn-success mb-1" style="width: 6rem">Ubah</a><br>
                                        <a href="{{ route('murid.show', $data->id) }}" class="btn btn-warning mb-1">Tampilkan</a>
                                       <form action="{{ route('murid.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger mb-1" onclick="return confirm('Apakah kamu yakin ?')" style="width: 6rem">Hapus</button>
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
