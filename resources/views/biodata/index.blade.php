@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                {{-- Header --}}
                <div class="card-header"><h2>Data Biodata</h2></div>
                {{-- Akhir Header --}}
                <div class="card-body">
                    {{-- Notif/Pesan berhasil --}}
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show text-black" role="alert">
                            <i class="bi bi-check-circle-fill text-primary"></i> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    {{-- Akhir Notif/Pesan berhasil --}}
                    <a href="{{ route('biodata.create') }}" class="btn btn-primary">Tambah +</a>
                    <div class="table-responsive">
                            <table class="table table-bordered border-secondary mt-4 align-middle">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Tempat Lahir</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Agama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Telepon</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($biodatas as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama_lengkap }}</td>
                                        <td>{{ $data->jenis_kelamin }}</td>
                                        <td>{{ $data->tempat_lahir }}</td>
                                        <td>{{ $data->tanggal_lahir }}</td>
                                        <td>{{ $data->agama }}</td>
                                        <td>{{ $data->alamat }}</td>
                                        <td>{{ $data->telepon }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td><img src="{{ asset('/images/biodata/' . $data->foto) }}" width="100" style="width: 80px; height: auto;"></td>
                                        <td>
                                            <div class="">
                                                <a href="{{ route('biodata.edit', $data->id) }}" class="btn btn-success" style="width: 6rem">Ubah</a>
                                                <form action="{{ route('biodata.destroy', $data->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger mt-1" onclick="return confirm('Apakah kamu yakin ? 😢')" style="width: 6rem">Hapus</button>
                                                </form> 
                                                <a href="{{ route('biodata.show', $data->id) }}" class="btn btn-warning mt-1">Tampilkan</a>
                                            </div>
                                            
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
</div>
@endsection
